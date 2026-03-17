# 🎨 revo_brand_guide
> Centralized brand guidelines and styling helpers for Revo Fitness developers.

This repository serves as the single source of truth for assets, typography, and meta configurations to ensure brand consistency across all Revo web platforms.

---

## 🔧 Meta Tags & Favicon Setup

This project includes standard meta configuration for favicon support and search engine control.

### 🖼️ Favicon Configuration

Favicon assets are stored locally and referenced via the `/assets/images/` directory. Copy the following into your `<head>` tag:

```html
<link rel="icon" href="/assets/images/cropped-revo-favicon-2024-180x180.png" sizes="32x32" type="image/png">
<link rel="icon" href="/assets/images/cropped-revo-favicon-2024-180x180.png" sizes="192x192" type="image/png">

<link rel="apple-touch-icon" href="/assets/images/cropped-revo-favicon-2024-180x180.png">

<link rel="icon" href="/assets/images/revo-logo-black.svg" type="image/svg+xml">
```

### 🚫 Search Engine Indexing Control

To prevent indexing on **staging** or **development** environments, the following meta tags are used:

```html
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
```

> [!IMPORTANT]
> * **Environment Check:** `noindex, nofollow` should **only** be used on staging or non-production environments.
> * **SEO:** Ensure these tags are removed or disabled on production to allow proper SEO indexing.
> * **Paths:** Favicon paths assume assets are served from `/assets/images/` — adjust if your directory structure differs.

---

## 📁 Asset Structure

Maintain this structure to ensure path compatibility across environments.

```text
/assets
├── /images
│   ├── revo-logo-black.svg
│   └── cropped-revo-favicon-2024-180x180.png
└── /fonts
    ├── GreycliffCF-Regular.otf
    ├── GreycliffCF-Medium.otf
    ├── GreycliffCF-Bold.otf
    └── GreycliffCF-Fonts.zip
```

---

## 🚀 Implementation Notes

* **Relative Paths:** All assets are referenced using root-relative paths. Avoid local `file:///` references.
* **Environment Agnostic:** Designed to work across local, staging, and production environments.
* **Compatibility:** Fully compatible with modern evergreen browsers and mobile device home-screen icons.
* **Typography:** Ensure `@font-face` declarations in your CSS point correctly to the `/fonts` directory.

---