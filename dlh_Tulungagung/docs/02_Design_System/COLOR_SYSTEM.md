# Color System Specification

**Specification ID:** ESS-DS-002  
**Status:** Approved  
**Domain:** Color Palette & Semantics  

---

## 1. Specification & Responsibility
Defines the functional, brand, neutral, and glassmorphic color palette applied across the application.

---

## 2. Implementation Rules (RFC 2119)
- **Primary DLH Green (#146C43):** MUST be used for primary action buttons, active navigation states, and brand highlights.
- **Deep Forest Dark (#0a1f17):** MUST be used for footer backgrounds and dark overlay baselines.
- **Light Tint Green (#e8f5e9):** MUST be used for badge containers, active menu pill backgrounds, and soft highlighted blocks.
- **Danger Red (#dc3545):** MUST be reserved strictly for LAPOR! buttons, destructive actions, and urgent alerts.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Primary Action vs Soft Light Tint Badge -->
<span class="bg-light-green text-primary font-bold text-xs px-4 py-2 rounded-full">
    Layanan Publik
</span>

<button class="bg-primary text-white font-medium px-8 py-4 rounded-full shadow-md hover:bg-primary-green transition-colors">
    Ajukan Permohonan
</button>
`

---

## 4. AI Coding Agent Guidance
- Do not introduce random hex codes in inline styles (style="color: #123456"). Always use token classes.

---

## 5. Future Maintenance & Scalability Notes
- Ensure dark mode extensions utilize primary-dark (#0a1f17) as the baseline root color.
