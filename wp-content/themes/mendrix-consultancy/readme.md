# Mendrix Consultancy (Block Theme)

A professional, responsive, accessible block theme for WordPress 6.5+.

## Features
- Mobile-first, WCAG AA conscious design
- Theme.json tokens for consistent typography, color, and spacing
- Sticky header with CTA and skip link accessibility support
- Patterns: hero, education, business, testimonials, stats, contact-cta
- Optional style variation: **Ivory**
- Basic WooCommerce block compatibility (inherits core block styles)

## Installation
1. Download the theme ZIP artifact (see **Packaging & Releases** below) or create one locally.
2. In WordPress: **Appearance → Themes → Add New → Upload Theme**.
3. Activate **Mendrix Consultancy**.
4. Go to **Appearance → Editor → Styles** to choose *Default* or *Ivory*.
5. Set your branding: **Appearance → Editor → Site Logo**.
6. Create a page titled **Home**, leave it empty, and set it under **Settings → Reading → Your homepage displays → A static page**.
7. Optional: Add WooCommerce blocks (Cart, Checkout, etc.) to their respective pages.

## Packaging & Releases
- **CI Artifact:** After each push to `main`, GitHub Actions uploads `mendrix-consultancy.zip` containing only the theme folder. Download it from the latest workflow run under **Actions → Build Theme ZIP**.
- **Tagged Releases:** When you publish a release, the workflow also attaches the ZIP to the release assets automatically.
- **Manual ZIP:** To build locally, run `cd wp-content/themes && zip -r mendrix-consultancy.zip mendrix-consultancy` and upload the resulting archive.

## Assets
- Vector placeholder screenshot: `screenshot.svg`.
- Theme includes a simple SVG wordmark (`assets/logo.svg`) and iconography (`assets/icons/*.svg`). Replace with your own assets as desired.

## Notes
- CSS animations respect `prefers-reduced-motion`.
- Fonts load via Google Fonts with `display=swap` for performance.
- Default image blocks defer loading when inserted (`loading="lazy"`).
