# Layout Engine & Grid Specification

**Specification ID:** ESS-DS-010  
**Status:** Approved  

---

## 1. Specification & Responsibility
Defines the 12-column grid system, container boundaries, column gaps, and layout alignment rules.

---

## 2. Implementation Rules (RFC 2119)
- **Container Limit:** Main page containers **MUST** be wrapped in container mx-auto px-4 max-w-7xl (capped at 1320px).
- **Grid Layouts:**
  - 3-Column Component Grid: grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8.
  - Asymmetric 70/30 Split: grid grid-cols-1 lg:grid-cols-12 gap-8 with lg:col-span-8 and lg:col-span-4.
  - Asymmetric 7/5 Split: lg:col-span-7 and lg:col-span-5.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Standard 12-Column Grid Split -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
    <div class="lg:col-span-7">
        <!-- Left Content -->
    </div>
    <div class="lg:col-span-5">
        <!-- Right Content / Graphic -->
    </div>
</div>
`

---

## 4. AI Coding Agent Guidance
- Ensure gap-8 (32px) or gap-6 (24px) is consistently used between grid items.

---

## 5. Future Maintenance & Scalability Notes
- When adding complex dashboard widgets, maintain 12-column sub-grid alignments.
