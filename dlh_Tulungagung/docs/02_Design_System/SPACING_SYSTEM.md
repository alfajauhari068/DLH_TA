# Spacing System Specification

**Specification ID:** ESS-DS-004  
**Status:** Approved  

---

## 1. Specification & Responsibility
Establishes the 8pt spatial grid governing element padding, margins, and section spacing.

---

## 2. Implementation Rules (RFC 2119)
- **Spatial Grid:** **MUST** use multiples of 8: 8px (p-2), 16px (p-4), 24px (p-6), 32px (p-8), 48px (p-12), 64px (py-16), 120px (py-28).
- **Section Rhythm:** Public landing sections **MUST** use py-14 md:py-20 lg:py-28 to maintain a consistent 120px desktop gap.
- **Card Padding:** Service cards and admin widgets **MUST** use p-6 or p-8.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Section Padding Standard -->
<section class="py-14 md:py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-4 max-w-7xl">
        <!-- Content -->
    </div>
</section>
`

---

## 4. AI Coding Agent Guidance
- Avoid arbitrary non-standard margins like mt-[13px]. Use standard spacing classes (mt-4, mt-6, mt-8).

---

## 5. Future Maintenance & Scalability Notes
- Maintain consistent spatial gaps when adding new sections to preserve vertical visual rhythm.
