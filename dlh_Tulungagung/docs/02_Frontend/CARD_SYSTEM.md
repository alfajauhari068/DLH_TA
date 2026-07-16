# Enterprise Software Specification (ESS)

# Premium Card System Specification

---

## Document Information

| Property | Value |
|----------|-------|
| Document Title | Premium Card System Specification |
| Document ID | ESS-CARD-001 |
| Version | 1.0.0 |
| Status | Draft |
| Project | Website Re-Engineering Dinas Lingkungan Hidup Kabupaten Tulungagung |
| Module | Frontend Card System |
| Depends On | ESS-FE-001, ESS-DS-001, ESS-ASSET-001 |
| Owner | Frontend Engineering Team |

---

# 1. Purpose

This document defines the official Card System used throughout the Website Re-Engineering Project of Dinas Lingkungan Hidup Kabupaten Tulungagung.

The Card System SHALL provide a unified, premium, reusable, interactive, and scalable architecture for presenting content across the entire public website.

Cards SHALL become the primary visual building block of the user interface.

---

# 2. Objectives

The Card System SHALL achieve the following objectives.

## OBJ-CARD-001

Provide a premium visual identity distinct from conventional government websites.

---

## OBJ-CARD-002

Increase content readability through structured visual hierarchy.

---

## OBJ-CARD-003

Support reusable Blade Components.

---

## OBJ-CARD-004

Improve user engagement using subtle motion and layered composition.

---

## OBJ-CARD-005

Maintain consistent interaction patterns across all modules.

---

# 3. Design Philosophy

The Card System SHALL adopt the **Premium Eco-Government Card Architecture**.

Cards SHALL communicate:

- Professionalism
- Transparency
- Modern Government Branding
- Sustainability
- Trust
- Innovation

Cards SHALL NOT resemble traditional WordPress blog cards or generic Bootstrap cards.

The visual appearance SHALL emphasize depth, motion, premium composition, and environmental storytelling.

---

# 4. Card Architecture

Every card SHALL consist of independent visual layers.

```text
Card Container

├── Background Layer
├── Decorative Layer
├── Illustration Layer
├── Information Layer
├── Action Layer
└── Interaction Layer
```

Each layer SHALL have a clearly defined responsibility.

---

# 5. Card Anatomy

Every card SHOULD support the following structure.

```text
+------------------------------------------------+

 Floating Illustration

 Badge

 Category

 Title

 Description

 Metadata

 Action Button

 Decorative Background

 Hover Layer

+------------------------------------------------+
```

Cards MAY omit sections that are not applicable, but SHALL preserve consistent spacing and alignment.

---

# 6. Card Categories

The system SHALL support the following reusable card variants.

- Hero Card
- Service Card
- News Card
- Program Card
- Agenda Card
- Gallery Card
- Document Card
- Official Card
- Statistic Card
- CTA Card
- Feature Card
- Timeline Card
- Achievement Card
- Partner Card
- Announcement Card
- Contact Card

Each variant SHALL inherit the same visual language while exposing module-specific content.

---

# 7. Premium Card Characteristics

Every premium card SHALL include one or more of the following characteristics.

- Layered composition
- Floating assets
- Organic decorative elements
- Rounded geometry
- Soft elevation
- Glass overlays (optional)
- Interactive hover effects
- Smooth transitions
- Premium spacing
- Environmental branding

---

# 8. Floating Illustration System

Illustrations MAY intentionally extend beyond the card boundary to create visual depth.

Examples include:

- Trees
- Leaves
- Recycling Bins
- Waste Trucks
- Government Buildings
- Earth Elements
- Environmental Mascots
- Public Service Illustrations

Illustrations SHALL remain decorative and MUST NOT obscure important content.

---

## REQ-CARD-001

Floating illustrations SHALL NOT overlap interactive elements.

---

## REQ-CARD-002

Floating illustrations SHALL remain fully visible on all supported screen sizes.

---

## REQ-CARD-003

Overflow behavior SHALL be intentional and controlled.

---

# 9. Decorative Layer

Cards MAY include decorative assets such as:

- Organic blobs
- Gradient circles
- Abstract waves
- Leaf patterns
- Soft textures
- Environmental motifs

Decorative elements SHALL reinforce the visual identity without reducing readability.

---

# 10. Depth & Elevation

The Card System SHALL simulate depth using:

- Shadow hierarchy
- Layer separation
- Background gradients
- Floating illustrations
- Glass effects (where appropriate)

Heavy borders SHALL be avoided.

---

# 11. Glass Card Variant

Glass cards MAY be used for:

- Hero sections
- Featured statistics
- Promotional banners
- Call-to-Action sections

Glass effects SHALL maintain sufficient contrast and legibility.

---

# 12. Card Dimensions

Cards SHALL maintain consistent dimensions within the same collection.

## REQ-CARD-004

Cards displayed in a grid SHALL have equal heights.

---

## REQ-CARD-005

Action buttons SHALL align consistently across sibling cards.

---

## REQ-CARD-006

Images SHALL preserve aspect ratio.

---

# 13. Image Strategy

Cards MAY display:

- Photography
- SVG Illustrations
- WebP Images
- Transparent PNG Assets
- Animated Lottie Illustrations

Preferred image formats:

| Asset Type | Preferred Format |
|------------|------------------|
| Illustration | SVG |
| Photography | WebP |
| Transparent Graphics | PNG |
| Animation | Lottie JSON |

---

# 14. Interaction Model

Cards SHALL provide immediate visual feedback.

Supported interactions include:

- Hover Elevation
- Shadow Expansion
- Border Accent
- Button Highlight
- Image Zoom
- Floating Illustration Movement
- Cursor Feedback

Interaction SHALL remain subtle and SHALL NOT interfere with usability.

---

# 15. Motion Guidelines

Card animations SHALL comply with the Motion System Specification.

Maximum duration:

300 milliseconds for standard interactions.

Recommended easing:

- Ease Out
- Ease In Out

Abrupt animations SHALL be avoided.

---

# 16. Responsive Behaviour

Cards SHALL adapt to:

- Desktop
- Laptop
- Tablet
- Mobile

The layout SHALL preserve readability and interaction quality across all breakpoints.

Floating assets MAY reposition or scale down on smaller screens.

---

# 17. Accessibility

Cards SHALL support:

- Keyboard navigation
- Visible focus states
- Accessible button labels
- Semantic HTML structure
- Sufficient color contrast

Decorative illustrations SHALL be ignored by assistive technologies where appropriate.

---

# 18. Blade Component Strategy

Each card SHALL be implemented as an independent Blade Component.

Recommended directory structure:

```text
resources/views/components/cards/

hero-card.blade.php

service-card.blade.php

news-card.blade.php

gallery-card.blade.php

program-card.blade.php

document-card.blade.php

official-card.blade.php

statistic-card.blade.php

cta-card.blade.php

timeline-card.blade.php
```

Cards SHALL receive data through component properties.

Business logic SHALL remain outside the presentation layer.

---

# 19. Performance

Cards SHALL prioritize rendering performance.

Requirements include:

- Native lazy loading
- Responsive images
- Optimized SVG assets
- Deferred animations
- Minimal DOM depth
- Efficient CSS selectors

---

# 20. Acceptance Criteria

The Card System SHALL be considered complete when:

- All card variants use reusable Blade Components.
- No duplicated card markup exists.
- Visual consistency is maintained across all modules.
- Floating assets render correctly on supported devices.
- Animations remain performant.
- Accessibility requirements are satisfied.
- Images are optimized and lazily loaded.
- Cards clearly reflect the Premium Eco-Government Design Language.

---

# 21. References

- ESS-FE-001 Frontend Engineering Specification
- ESS-DS-001 Design System Specification
- ESS-ASSET-001 Frontend Asset Library Specification
- Component Library Specification
- Motion System Specification