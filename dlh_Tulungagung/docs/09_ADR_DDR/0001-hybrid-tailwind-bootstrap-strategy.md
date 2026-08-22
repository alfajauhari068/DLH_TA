# ADR 0001: Hybrid Tailwind CSS and Bootstrap 5 Styling Strategy

**Status:** Accepted  
**Date:** 2026-07-20  

---

## Context
The project utilizes Bootstrap 5 for legacy admin grid components and offcanvas drawers, while Tailwind CSS JIT is used for modern utility styling, glassmorphism, and guest visual components.

## Decision
Maintain the hybrid strategy where Bootstrap handles structural grid components (col-md-4, 
avbar-expand-lg, offcanvas) and Tailwind CSS handles design tokens, utility spacing, colors, and animations.
