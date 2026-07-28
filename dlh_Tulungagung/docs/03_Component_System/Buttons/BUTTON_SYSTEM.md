# Button Component Specification

**Specification ID:** ESS-COMP-001  
**Status:** Approved  
**Domain:** Component System â€” Buttons  

---

## 1. Specification & Responsibility
Defines the visual appearance, states, variants, and interactive rules for all button components across Guest UI and Admin panel.

---

## 2. Implementation Rules (RFC 2119)
- **Primary Button:** **MUST** use g-primary text-white font-medium px-8 py-4 rounded-full shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300.
- **Secondary Outlined Button:** **MUST** use g-transparent border border-white/40 text-white font-medium px-8 py-4 rounded-full hover:bg-white/10 transition-colors duration-300.
- **Circular Utility Icon Button:** **MUST** use w-10 h-10 rounded-full bg-gray-50 text-gray-500 hover:bg-primary/10 hover:text-primary transition-colors duration-300 flex items-center justify-center.
- **Hover Behavior:** Hover interactions **MUST NOT** cause element jump or layout shifts.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Primary CTA Button -->
<a href="{{ route('services') }}" class="group relative flex items-center justify-center gap-4 bg-primary text-white font-medium px-8 py-4 rounded-full shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
    <span class="relative z-10">Layanan Publik</span>
    <div class="relative z-10 w-8 h-8 rounded-full bg-white/20 flex items-center justify-center group-hover:bg-white group-hover:text-primary transition-colors">
        <i class="bi bi-arrow-right"></i>
    </div>
</a>
`

---

## 4. AI Coding Agent Guidance
- Always include hover states with smooth transition utilities (	ransition-all duration-300).
- Ensure buttons have standard font weights (ont-medium or ont-bold).

---

## 5. Future Maintenance & Scalability Notes
- When creating new action buttons, reuse these 3 core variants rather than writing custom ad-hoc button classes.
