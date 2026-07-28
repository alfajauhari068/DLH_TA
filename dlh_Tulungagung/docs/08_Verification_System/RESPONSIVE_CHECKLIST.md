# Responsive Verification Checklist

**Specification ID:** ESS-VER-001  
**Status:** Approved  
**Domain:** Verification & Quality Assurance  

---

## 1. Viewport Testing Matrix
- [ ] **Mobile Small (375px):** No horizontal layout overflow. Offcanvas drawer opens smoothly.
- [ ] **Mobile Large (425px):** Typography scales cleanly without overlapping text lines.
- [ ] **Tablet Portrait (768px):** Service cards stack 2 per row (md:grid-cols-2).
- [ ] **Desktop (1024px):** Fixed header navbar displays horizontal menu with 72px height.
- [ ] **Large Desktop (1440px):** Content container stays strictly bounded at 1320px (max-w-7xl).

---

## 2. Verification Command
`ash
# Validate asset build compilation without errors
npm run build
`
"@ -Encoding UTF8

Set-Content -Path 'docs/09_ADR_DDR/0001-hybrid-tailwind-bootstrap-strategy.md' -Value @"
# ADR 0001: Hybrid Tailwind CSS and Bootstrap 5 Strategy

**Status:** Accepted  
**Date:** 2026-07-20  

---

## 1. Context
The DLH Tulungagung project inherited Bootstrap 5 for legacy administrative DataTables and Bootstrap Offcanvas mobile drawers. However, modern SaaS aesthetics and glassmorphism require Tailwind CSS utility classes.

## 2. Decision
Adopt a **Hybrid Styling Strategy**:
- Bootstrap 5 handles grid layouts (col-md-4, 
avbar-expand-lg) and JS offcanvas triggers.
- Tailwind CSS JIT handles visual tokens, soft shadows, border radii, HSL eco-green colors, and micro-interactions.

## 3. Consequences
- Prevents breaking existing Bootstrap administrative components.
- Enables state-of-the-art visual quality across public guest sections.
