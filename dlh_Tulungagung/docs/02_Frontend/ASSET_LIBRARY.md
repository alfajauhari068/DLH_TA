# Enterprise Software Specification (ESS)

# Frontend Asset Library Specification

---

## Document Information

| Property | Value |
|----------|-------|
| Document Title | Frontend Asset Library Specification |
| Document ID | ESS-ASSET-001 |
| Version | 1.0.0 |
| Status | Draft |
| Project | Website Re-Engineering Dinas Lingkungan Hidup Kabupaten Tulungagung |
| Module | Frontend Asset Management |
| Depends On | ESS-FE-001, ESS-DS-001 |
| Owner | Frontend Engineering Team |

---

# 1. Purpose

This document defines the standards governing all visual assets used throughout the Website Re-Engineering Project of Dinas Lingkungan Hidung Kabupaten Tulungagung.

The Asset Library SHALL provide a centralized, reusable, optimized, and maintainable collection of digital assets that support a consistent Premium Eco-Government Digital Experience.

No visual asset SHALL exist outside the approved asset management structure.

---

# 2. Scope

This specification governs:

- Photography
- Hero Images
- SVG Illustrations
- Decorative Graphics
- Environmental Icons
- Government Icons
- WebP Images
- PNG Images
- Background Textures
- Background Patterns
- Lottie Animations
- Video Assets
- Downloadable Files
- Asset Optimization
- Asset Naming Convention
- Folder Organization
- Licensing Requirements

---

# 3. Objectives

## OBJ-ASSET-001

Create a centralized asset repository.

---

## OBJ-ASSET-002

Reduce duplicated visual resources.

---

## OBJ-ASSET-003

Improve loading performance.

---

## OBJ-ASSET-004

Maintain consistent visual quality.

---

## OBJ-ASSET-005

Simplify long-term maintenance.

---

# 4. Asset Architecture

All assets SHALL be stored inside the public directory using the following structure.

```text
public/

assets/

│

├── images/

│   ├── hero/

│   ├── services/

│   ├── news/

│   ├── gallery/

│   ├── profile/

│   ├── officials/

│   ├── programs/

│   ├── statistics/

│   ├── documents/

│   ├── logos/

│   ├── backgrounds/

│   ├── patterns/

│   ├── textures/

│   ├── decorations/

│   └── placeholders/

│

├── illustrations/

│   ├── hero/

│   ├── services/

│   ├── environment/

│   ├── education/

│   ├── recycling/

│   ├── conservation/

│   └── public/

│

├── icons/

│   ├── bootstrap/

│   ├── heroicons/

│   ├── custom/

│   └── environmental/

│

├── lottie/

│

├── videos/

│

├── documents/

│

└── fonts/
```

---

# 5. Asset Categories

The Asset Library SHALL consist of the following categories.

## Photography

High-quality government activity photography.

Examples:

- Tree planting
- Waste management
- Environmental campaigns
- Public services
- Meetings
- Official ceremonies

---

## Illustrations

Modern vector illustrations representing:

- Sustainability
- Climate
- Nature
- Recycling
- Environment
- Community Participation

Illustrations SHOULD use SVG whenever practical.

---

## Decorative Assets

Decorative assets MAY include:

- Floating Leaves

- Organic Shapes

- Gradient Blobs

- Abstract Waves

- Circular Patterns

- Environmental Elements

Decorative assets SHALL support, not distract from, primary content.

---

## Background Assets

Background assets include:

- Organic Patterns

- Eco Textures

- Noise Textures

- Abstract Shapes

- Government Theme Backgrounds

Background assets SHALL maintain low visual contrast.

---

## Icons

Approved icon sources include:

- Bootstrap Icons

- Heroicons

- Custom Environmental Icons

Icon style SHALL remain visually consistent throughout the application.

---

## Animation Assets

Animation assets MAY include:

- Lottie Files

- Animated SVG

- JSON Motion Files

Animation SHALL remain lightweight and non-blocking.

---

# 6. Asset Format Standards

The preferred formats are:

| Asset Type | Preferred Format |
|------------|------------------|
| Illustration | SVG |
| Photography | WebP |
| Transparent Graphics | PNG |
| Animation | JSON (Lottie) |
| Icons | SVG |
| Logo | SVG |
| Background | WebP |

JPEG SHOULD only be used when WebP is unavailable.

---

# 7. Naming Convention

Asset names SHALL follow lowercase kebab-case.

Examples:

```text
hero-environment.webp

waste-management.svg

official-profile.webp

forest-conservation.json

organic-blob-01.svg
```

The following naming practices SHALL NOT be used:

```text
IMG001.PNG

PHOTO FINAL.jpg

new image.png

hero(1).jpg

Untitled.svg
```

---

# 8. Image Optimization

## REQ-ASSET-001

Every production image SHALL be optimized before deployment.

---

## REQ-ASSET-002

Large hero images SHOULD use WebP.

---

## REQ-ASSET-003

SVG SHALL be preferred for scalable graphics.

---

## REQ-ASSET-004

Unused assets SHALL be removed from production builds.

---

## REQ-ASSET-005

Images SHALL preserve aspect ratio.

---

## REQ-ASSET-006

Images SHALL support responsive rendering.

---

# 9. Illustration Guidelines

Illustrations SHALL communicate:

- Environmental Awareness

- Public Service

- Sustainability

- Innovation

- Community Engagement

Illustration styles SHALL remain consistent.

Mixed illustration styles MUST NOT appear on the same page.

---

# 10. Accessibility

Every visual asset SHALL support accessibility.

Requirements include:

- Alternative Text

- Decorative Image Identification

- Responsive Scaling

- High Resolution

- Proper Color Contrast

Decorative graphics SHALL use empty alternative text where appropriate.

---

# 11. Performance

Asset delivery SHALL prioritize performance.

The frontend SHOULD implement:

- Native Lazy Loading

- Responsive Images

- Modern Formats

- Deferred Video Loading

- Optimized SVG

- Browser Caching

- Vite Asset Versioning

---

# 12. Licensing

Every asset SHALL have a documented license.

Approved sources include:

- Internal Assets

- Government Publications

- Open Source Assets

- Licensed Commercial Assets

Assets with unknown licensing SHALL NOT be used.

---

# 13. Maintenance

The Asset Library SHALL undergo periodic review.

Obsolete assets SHOULD be archived.

Duplicate assets MUST be removed.

Unused assets SHALL NOT remain in production.

---

# 14. References

- ESS-FE-001 Frontend Engineering Specification

- ESS-DS-001 Design System Specification

- Card System Specification

- Motion System Specification

- Component Library Specification