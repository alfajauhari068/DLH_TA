# Performance Operational Rules

- **Asset Bundling**: Build production assets with 
pm run build.
- **Image Loading**: Use lazy loading (loading="lazy") for non-hero images.
- **CSS Efficiency**: Rely on Tailwind JIT tree-shaking; avoid writing custom CSS selectors.

Mobile Performance Rules

Avoid backdrop-filter on repeated components.

Maximum one backdrop-filter per viewport.

Avoid multiple layered shadows.

Avoid heavy SVG filters.

Avoid height:100% inside CSS Grid children unless required.

Prefer aspect-ratio over fixed heights.

Prefer transform instead of top/left animations.

Maximum DOM depth:
8

Maximum nested flex/grid:
4

All images:

lazy loading

async decoding

responsive srcset

SVG must avoid expensive filters.

Prefer opacity animation over blur animation.

Maximum simultaneous animations:
3