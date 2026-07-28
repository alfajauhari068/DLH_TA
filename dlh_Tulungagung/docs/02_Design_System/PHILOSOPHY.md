# Enterprise Design Philosophy

**Specification ID:** ESS-DS-001  
**Status:** Approved  
**Domain:** Design System Philosophy  

---

## 1. Specification & Responsibility
This specification defines the core design philosophy for the **Dinas Lingkungan Hidup Kabupaten Tulungagung** digital web ecosystem. It serves as the authoritative vision guiding all visual, structural, and interactive design decisions.

---

## 2. Implementation Rules (RFC 2119)
- **MUST** represent a **Premium Eco-Government Digital Experience** combining administrative trust with modern SaaS elegance.
- **SHALL** adhere to **Soft Minimalism & Organic Depth**: use generous spatial margins, subtle soft shadows (shadow-sm, shadow-md), HSL eco-green palettes, and glassmorphism.
- **MUST** prioritize **Low Cognitive Load**: limit primary calls-to-action to one per viewport section and enforce a strict **120px vertical section rhythm** on desktop viewports.
- **SHALL** mandate **Accessibility-First Design**: all color pairings MUST achieve at least 4.5:1 WCAG 2.1 AA contrast ratios.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Example of Philosophy Applied: Clean Glassmorphic Hero Container -->
<div class="relative bg-white/10 backdrop-blur-md rounded-full p-1.5 pr-5 border border-white/20 shadow-glass">
    <span class="bg-white text-primary text-[10px] font-black tracking-widest uppercase rounded-full px-4 py-1.5 mr-4 shadow-sm">PORTAL RESMI</span>
    <span class="text-white text-sm font-medium">Dinas Lingkungan Hidup Kabupaten Tulungagung</span>
</div>
`

---

## 4. AI Coding Agent Guidance
- When generating new views or components, ALWAYS check that the design maintains a quiet, uncluttered aesthetic.
- DO NOT add arbitrary bright neon colors or heavy drop-shadows. Use only defined tokens (g-primary, g-light-green, shadow-sm).
- Ensure all content blocks maintain clear visual hierarchy (Eyebrow â†’ H1/H2 â†’ Description â†’ CTA).

---

## 5. Future Maintenance & Scalability Notes
- Re-evaluate design philosophy annually against updated Indonesian Government Digital Standards (SPBE).
- New sub-department pages MUST inherit this core philosophy without introducing custom styling overrides.
