# Enterprise Software Specification (ESS)

# Design System Specification

---

## Document Information

| Property | Value |
|----------|-------|
| Document ID | ESS-FE-DS-001 |
| Version | 1.0 |
| Status | Draft |
| Project | Website Re-Engineering Dinas Lingkungan Hidup Kabupaten Tulungagung |
| Module | Frontend Design System |
| Owner | Frontend Engineering Team |
| Depends On | ESS-ARCH-001, ESS-FE-001 |

---

# 1. Purpose

This document defines the official Design System for the Website Re-Engineering Project of Dinas Lingkungan Hidup Kabupaten Tulungagung.

The Design System establishes a unified visual language that ensures consistency, scalability, accessibility, maintainability, and long-term sustainability across every frontend module.

Every visual element SHALL conform to this specification.

---

# 2. Scope

This specification governs:

- Design Tokens
- Color System
- Typography
- Spacing
- Grid
- Breakpoints
- Elevation
- Shadows
- Border Radius
- Icons
- Glassmorphism
- Layer System
- Background System
- Section Composition
- Responsive Rules
- Bootstrap Usage
- Tailwind Utility Usage

---

# 3. Design Philosophy

The interface SHALL represent a **Premium Eco-Government Digital Experience**.

The visual identity SHALL communicate:

- Professionalism
- Transparency
- Trust
- Sustainability
- Simplicity
- Accessibility
- Modern Public Service
- Environmental Awareness

The design SHALL avoid visual characteristics commonly associated with legacy government portals and traditional WordPress blog layouts.

---

# 4. Design Principles

## REQ-DS-001

The interface SHALL prioritize clarity over decoration.

---

## REQ-DS-002

Visual consistency SHALL take precedence over individual page customization.

---

## REQ-DS-003

Reusable components MUST share the same design language.

---

## REQ-DS-004

Every visual decision SHALL originate from centralized Design Tokens.

Hardcoded visual values MUST NOT be introduced.

---

## REQ-DS-005

The Design System SHALL remain framework-independent wherever practical.

Business logic MUST NOT be embedded within design definitions.

---

# 5. Design Token Strategy

All visual properties SHALL be defined using centralized CSS Custom Properties.

Example categories include:

- Colors
- Typography
- Spacing
- Border Radius
- Shadows
- Opacity
- Blur
- Motion Duration
- Motion Easing
- Z-Index
- Container Width
- Breakpoints

These tokens SHALL be stored in the global stylesheet and referenced throughout the application.

---

# 6. Color System

The official color palette SHALL represent the environmental identity of Dinas Lingkungan Hidup Kabupaten Tulungagung.

## Primary Colors

- Eco Green
- Forest Green
- Leaf Green

## Secondary Colors

- Government Blue
- Sky Blue

## Accent Colors

- Eco Orange
- Warning Yellow

## Neutral Colors

- White
- Surface
- Background
- Border
- Gray Scale

## Functional Colors

- Success
- Warning
- Danger
- Information

## REQ-DS-006

Decorative colors SHALL NOT reduce readability.

---

## REQ-DS-007

Every text/background combination MUST satisfy WCAG AA contrast requirements.

---

# 7. Typography System

The application SHALL use a consistent typography hierarchy.

Supported text styles include:

- Display
- H1
- H2
- H3
- H4
- H5
- H6
- Lead
- Body
- Small
- Caption
- Label

## Typography Principles

- Consistent rhythm
- Responsive scaling
- Comfortable reading
- Accessible contrast

## REQ-DS-008

Body text SHALL maintain a readable line height.

---

## REQ-DS-009

Headings SHALL clearly establish visual hierarchy.

---

# 8. Grid System

The application SHALL use Bootstrap 5.3 responsive grid as the primary layout system.

Tailwind CSS SHALL only supplement layout using utility classes where appropriate.

## Container Types

- Fixed Container
- Fluid Container
- Section Container

Nested containers SHOULD be avoided unless justified.

---

# 9. Spacing System

Spacing SHALL follow predefined spacing tokens.

Examples include:

- XS
- SM
- MD
- LG
- XL
- 2XL
- 3XL

## REQ-DS-010

Arbitrary spacing values MUST NOT be introduced.

---

# 10. Border Radius

Standard radius tokens SHALL be defined for:

- Buttons
- Cards
- Inputs
- Badges
- Images
- Modals

The radius scale SHALL remain consistent throughout the application.

---

# 11. Shadow & Elevation

The interface SHALL use multiple elevation levels.

Examples:

- Level 1
- Level 2
- Level 3
- Floating
- Hero

Shadow intensity SHALL communicate depth without distracting the user.

---

# 12. Glassmorphism

Glass effects MAY be applied to:

- Hero Overlay
- Floating Cards
- Dialogs
- Navigation

## REQ-DS-011

Glass effects SHALL maintain sufficient readability.

---

# 13. Layer System

Every major component SHALL follow a layered composition model.

Typical layers include:

1. Background
2. Decorative Layer
3. Illustration Layer
4. Content Layer
5. Action Layer
6. Interaction Layer

This structure SHALL be consistently applied to premium sections such as Hero, Services, and CTA.

---

# 14. Iconography

Approved icon libraries:

- Bootstrap Icons
- Heroicons

Icons SHALL:

- Use consistent stroke weight
- Maintain proportional sizing
- Align with surrounding typography

---

# 15. Responsive Design

The Design System SHALL support:

- Desktop
- Laptop
- Tablet
- Mobile

Every visual component SHALL adapt gracefully across supported breakpoints.

---

# 16. Bootstrap & Tailwind Usage

Bootstrap SHALL provide:

- Grid
- Core Components
- Responsive Utilities

Tailwind CSS SHALL be limited to:

- Flex utilities
- Spacing utilities
- Alignment
- Display
- Position
- Gap
- Order

Tailwind SHALL NOT replace Bootstrap component styling.

---

# 17. Accessibility Requirements

The Design System SHALL support:

- Keyboard navigation
- Visible focus states
- Accessible typography
- Adequate spacing
- High color contrast
- Reduced motion preferences

---

# 18. References

- ESS-ARCH-001 Technology Stack
- ESS-FE-001 Frontend Specification
- Asset Library Specification
- Card System Specification
- Motion System Specification
- Component Library Specification