# Design Tokens Specification

**Specification ID:** ESS-DS-009  
**Status:** Approved  
**Domain:** Global Design Tokens  

---

## 1. Specification & Responsibility
Central registry of all primitive design tokens including colors, spatial steps, radii, typography scales, elevation shadows, and z-index layers.

---

## 2. Implementation Rules (RFC 2119)
- **MUST** reference Tailwind design tokens defined in 	ailwind.config.js rather than hardcoding hex codes or pixel margins.
- **SHALL** use g-primary for #146C43, g-light-green for #e8f5e9, and g-background for #f5faf6.
- **MUST** enforce standard border radii tokens: ounded-2xl (16px), ounded-3xl (24px), ounded-[32px] (32px), ounded-full (9999px).

---

## 3. Code Examples & Markup Snippets

`javascript
// tailwind.config.js Token Mapping Reference
module.exports = {
  theme: {
    extend: {
      colors: {
        'primary': '#146C43',
        'primary-dark': '#0a1f17',
        'primary-green': '#198754',
        'light-green': '#e8f5e9',
        'accent': '#F1C40F',
        'background': '#f5faf6',
      }
    }
  }
}
`

---

## 4. AI Coding Agent Guidance
- Check 	ailwind.config.js before writing arbitrary utility classes.
- Use explicit token utility names (shadow-sm, shadow-md, shadow-xl) to maintain visual consistency.

---

## 5. Future Maintenance & Scalability Notes
- Maintain 1:1 mapping between CSS custom variables (:root) and Tailwind config theme variables.
