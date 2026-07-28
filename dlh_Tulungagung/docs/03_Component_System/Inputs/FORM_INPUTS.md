# Form Inputs Specification

**Specification ID:** ESS-COMP-004  
**Status:** Approved  
**Domain:** Component System â€” Inputs  

---

## 1. Specification & Responsibility
Defines form fields, text inputs, textareas, checkboxes, and search input fields.

---

## 2. Implementation Rules (RFC 2119)
- **Search Inputs:** **MUST** use rounded full pill containers (ounded-full bg-gray-50 border border-gray-100 py-2.5 ps-5 pe-12).
- **Standard Inputs:** **MUST** use rounded 2xl borders (ounded-2xl border border-gray-200 focus:border-primary focus:ring-2 focus:ring-primary/20).
- **Validation Error States:** **MUST** display order-danger text-danger text-xs mt-1.5.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Standard Search Input -->
<div class="input-group position-relative">
    <input class="form-control rounded-full bg-gray-50 border border-gray-100 py-2.5 ps-5 pe-12 focus:bg-white focus:border-primary/30" type="search" placeholder="Cari informasi...">
    <button class="btn border-0 position-absolute end-0 top-50 translate-middle-y z-3 text-gray-400" type="submit">
        <i class="bi bi-search text-lg"></i>
    </button>
</div>
`

---

## 4. AI Coding Agent Guidance
- Always include matching label elements (<label>) with or attributes for accessible form controls.

---

## 5. Future Maintenance & Scalability Notes
- Standardize error message placements under input fields.
