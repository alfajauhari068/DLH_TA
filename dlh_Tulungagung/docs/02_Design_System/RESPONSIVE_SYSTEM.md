# Responsive Architecture Specification

**Specification ID:** ESS-DS-005  
**Status:** Approved  

---

## 1. Specification & Responsibility
Defines responsive breakpoints, mobile layout collapse, safe area insets, and touch target standards.

---

## 2. Implementation Rules (RFC 2119)
- **Breakpoints:**
  - sm: 640px
  - md: 768px
  - lg: 1024px
  - xl: 1280px
- **Touch Target:** All interactive controls on mobile (<768px) **MUST** maintain a minimum target area of 44px x 44px.
- **Horizontal Overflow:** Mobile viewports **MUST NOT** produce horizontal scrollbars.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Responsive Flex Stacking Example -->
<div class="flex flex-col sm:flex-row gap-4 items-center">
    <a href="#" class="w-full sm:w-auto px-8 py-4 bg-primary text-white rounded-full text-center">
        Layanan Utama
    </a>
</div>
`

---

## 4. AI Coding Agent Guidance
- Test layout collapse by verifying lex-col on mobile and sm:flex-row on tablet/desktop.

---

## 5. Future Maintenance & Scalability Notes
- Test mobile viewports using device emulation for iPhone and Android safe areas.
