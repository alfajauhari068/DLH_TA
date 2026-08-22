# AI Coding Conventions & Execution Rules

**Specification ID:** ESS-AI-001  
**Status:** Approved  
**Domain:** AI Coding Agent Directives  

---

## 1. Specification & Responsibility
Directives governing AI Coding Agent behavior during code generation, refactoring, and quality verification turns.

---

## 2. Implementation Rules (RFC 2119)
- **Zero Structural Redesign Rule:** AI Coding Agents **MUST NOT** redesign page layout structures or alter database schemas unless explicitly requested by the user.
- **Component Preservation:** AI Coding Agents **MUST** reuse existing Blade components (x-guest.service-card, x-navbar, x-footer) rather than generating duplicate markup.
- **Tailwind Token Strictness:** AI Coding Agents **MUST** reference Tailwind design tokens (g-primary, g-light-green, 	ext-primary, ounded-3xl, shadow-sm) defined in 	ailwind.config.js.

---

## 3. Code Examples & Markup Snippets

`lade
{{-- Correct Blade Component Usage --}}
<x-guest.service-card 
    href="{{ url('/layanan') }}" 
    icon="bi-diagram-3" 
    title="Alur Pelayanan" 
    description="Prosedur terintegrasi layanan masyarakat..." 
    image="{{ asset('images/alur-pelayanan.png') }}"
/>
`

---

## 4. AI Coding Agent Guidance
- Always run non-destructive checks and verify file syntax before delivering edits.

---

## 5. Future Maintenance & Scalability Notes
- Update this rulebook whenever new global design tokens or Blade components are merged.
