#!/usr/bin/env bash
set -euo pipefail

# ------------------------------------------------------------------------------
# Deploy script for Revo Brand Guide
#
# Usage:
#   ./deploy.sh
#
# Deploy target:
#   brand.revofitness.com.au
#
# Notes:
# - Requires SSH host alias "development" in ~/.ssh/config
# - Creates a backup of the current remote site before publishing
# - Keeps only the latest backup on the remote server
# - Local machine only needs: tar, scp, ssh
# ------------------------------------------------------------------------------

REMOTE_HOST="development"
REMOTE_PATH="/home/revofitn/brand.revofitness.com.au"
ARCHIVE_NAME="deploy.tar.gz"

TAR_EXCLUDES=(
  "--exclude=./.git"
  "--exclude=./.github"
  "--exclude=./.gitignore"
  "--exclude=./.DS_Store"
  "--exclude=./**/.DS_Store"
  "--exclude=./deploy.tar.gz"
)

say() { printf "\033[1;34m==>\033[0m %s\n" "$*"; }
err() { printf "\033[1;31mERR:\033[0m %s\n" "$*" >&2; }

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cleanup() { rm -f "${SCRIPT_DIR}/${ARCHIVE_NAME}" 2>/dev/null || true; }
trap cleanup EXIT

need_cmd() { command -v "$1" >/dev/null 2>&1 || { err "$1 not found"; exit 1; }; }

need_cmd tar
need_cmd scp
need_cmd ssh

say "Remote host: ${REMOTE_HOST}"
say "Remote path: ${REMOTE_PATH}"
say "Local path:  ${SCRIPT_DIR}"

read -r -p "Continue with deploy to brand.revofitness.com.au? [y/N] " CONFIRM
if [[ ! "$CONFIRM" =~ ^[Yy]$ ]]; then
  say "Deploy cancelled."
  exit 0
fi

say "Checking remote path exists"
ssh "$REMOTE_HOST" "test -d '$REMOTE_PATH'" || {
  err "Remote path does not exist: $REMOTE_PATH"
  exit 1
}

say "Creating archive ${ARCHIVE_NAME}"
cd "$SCRIPT_DIR"
rm -f "$ARCHIVE_NAME"

set +e
tar --warning=no-file-changed -czf "$ARCHIVE_NAME" "${TAR_EXCLUDES[@]}" . 2>/dev/null
TAR_EXIT=$?
set -e

if [[ $TAR_EXIT -ne 0 ]]; then
  if [[ -f "$ARCHIVE_NAME" ]]; then
    say "Tar produced warnings, but archive exists — continuing."
  else
    err "tar failed to create archive"
    exit 1
  fi
fi

say "Uploading ${ARCHIVE_NAME} to ${REMOTE_HOST}:${REMOTE_PATH}/"
scp "$ARCHIVE_NAME" "${REMOTE_HOST}:${REMOTE_PATH}/"

say "Deploying on remote host"
ssh "$REMOTE_HOST" "REMOTE_PATH='$REMOTE_PATH' ARCHIVE_NAME='$ARCHIVE_NAME' bash -s" <<'REMOTE_SCRIPT'
set -euo pipefail

cd "$REMOTE_PATH"
[[ -f "$ARCHIVE_NAME" ]] || { echo "Archive missing on remote: $ARCHIVE_NAME"; exit 1; }

TS="$(date +%Y%m%d-%H%M%S)"
BACKUP_DIR="_backup-$TS"
TMP_DIR="_deploy_tmp-$TS"

echo "Creating temp dir: $TMP_DIR"
mkdir -p "$TMP_DIR"

echo "Extracting archive..."
tar -xzf "$ARCHIVE_NAME" -C "$TMP_DIR"
rm -f "$ARCHIVE_NAME"

echo "Backing up existing site contents to: $BACKUP_DIR"
mkdir -p "$BACKUP_DIR"

shopt -s dotglob nullglob
for item in *; do
  [[ "$item" == "cgi-bin" ]] && continue
  [[ "$item" == _backup-* ]] && continue
  [[ "$item" == _deploy_tmp-* ]] && continue
  [[ "$item" == "$TMP_DIR" ]] && continue
  mv "$item" "$BACKUP_DIR/" 2>/dev/null || true
done

echo "Publishing new build"
if command -v rsync >/dev/null 2>&1; then
  rsync -a --delete \
    --exclude 'cgi-bin' \
    "$TMP_DIR"/ "$REMOTE_PATH"/
else
  cp -a "$TMP_DIR"/. "$REMOTE_PATH"/
fi

rm -rf "$TMP_DIR"

echo "Pruning old backups (keeping only: $BACKUP_DIR)"
shopt -s nullglob
for b in _backup-*; do
  [[ "$b" == "$BACKUP_DIR" ]] && continue
  rm -rf "$b"
done

echo "Deployment complete. Backup kept at: $BACKUP_DIR"
REMOTE_SCRIPT

say "Done."