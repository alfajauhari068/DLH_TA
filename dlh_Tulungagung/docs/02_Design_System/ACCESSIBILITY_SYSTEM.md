# Accessibility System Specification (WCAG 2.1 AA)

**Specification ID:** ESS-DS-006  
**Status:** Approved  

---

## 1. Specification & Responsibility
Governs color contrast, focus rings, keyboard navigation, and ARIA screen reader attributes.

---

## 2. Implementation Rules (RFC 2119)
- **Contrast:** Text MUST achieve >= **4.5:1** contrast ratio against background colors.
- **Focus Rings:** Interactive elements **MUST** feature a visible focus state: ocus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2.
- **ARIA Labels:** Icon-only buttons (Search, LAPOR!, Close toggles) **MUST** include an ria-label or 	itle attribute.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Accessible Icon-Only Button -->
<a href="https://www.lapor.go.id/" target="_blank" 
   class="flex items-center justify-center w-10 h-10 bg-gray-50 rounded-full text-danger hover:bg-danger/10 focus:ring-2 focus:ring-danger" 
   aria-label="Layanan Pengaduan LAPOR!" 
   title="LAPOR!">
    <i class="bi bi-megaphone-fill text-lg" aria-hidden="true"></i>
</a>
`

---

## 4. AI Coding Agent Guidance
- Never remove focus rings without providing a custom accessible replacement.

---

## 5. Future Maintenance & Scalability Notes
- Run automated lighthouse accessibility audits on every major release.
