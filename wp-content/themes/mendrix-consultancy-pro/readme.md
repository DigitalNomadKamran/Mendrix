# Mendrix Consultancy Pro

Premium WordPress block theme for consulting firms, designed for WordPress 6.6+.

## Features
- Branded design system with Inter & Playfair Display, WCAG AA contrast, and responsive layouts.
- Sticky header, rich footer, and curated block patterns for hero, immigration/education/business services, industries, stats, case studies, testimonials, blog, FAQ, and contact.
- Scrollable testimonial slider using CSS scroll snapping.
- Schema-ready JSON-LD for Organisation and Breadcrumbs.
- Local font-face support (downloaded via packaging script) with Google Fonts fallback in development.

## Installation
1. Upload the packaged `mendrix-consultancy-pro.zip` via **Appearance → Themes → Add New → Upload Theme**.
2. Activate **Mendrix Consultancy Pro**.
3. Assign the primary Navigation template part or build a new Navigation from **Appearance → Editor → Navigation**.
4. Add your logo via the Site Logo block or replace the SVG in `assets/svg/logo.svg`.

## Build the homepage
Use the Site Editor to place patterns in this order:
1. `Hero Consulting`
2. `Services – 3 Up (Immigration, Education, Business)`
3. `Industries Grid`
4. `Stats Band`
5. `Case Studies List`
6. `Testimonials Slider`
7. `Blog Teasers`
8. `FAQ Accordion`
9. `Contact CTA`

Additional guidance lives in [`inc/onboarding.md`](inc/onboarding.md).

## Packaging
Run the packaging script from project root to download fonts, build the ZIP, and verify assets:

```bash
bash tools/package-theme.sh
```

The script creates `mendrix-consultancy-pro.zip` containing only the theme directory.

## Licensing
- Theme code is GPL-2.0-or-later.
- Fonts are sourced from Google Fonts (Inter, Playfair Display) under their respective licenses.
- Replace Unsplash demo URLs during production with your own assets if required.
