# Frontend AI Rules

## Purpose

This document defines the mandatory frontend development rules for the DLH Tulungagung Website Re-Engineering Project.

These rules are mandatory and override the default behavior of any AI coding assistant.

---

# Approved Technologies

The AI MUST ONLY use the following frontend technologies:

- HTML5
- CSS3
- Bootstrap 5
- Tailwind CSS

No other frontend technologies are permitted unless explicitly requested by the project owner.

---

# Forbidden Technologies

The AI MUST NEVER use:

- React
- Vue
- Angular
- Svelte
- Alpine.js
- jQuery UI
- Material UI
- Ant Design
- Chakra UI
- Bulma
- Foundation
- Semantic UI
- DaisyUI

The AI MUST NOT install or recommend additional frontend frameworks.

---

# HTML Standards

The AI MUST:

- Use semantic HTML5 elements.
- Maintain a clean and logical document structure.
- Use descriptive element names.
- Keep markup readable.
- Avoid unnecessary wrappers.
- Avoid duplicated markup.
- Preserve accessibility.

The AI MUST NOT use deprecated HTML elements.

---

# CSS Standards

The AI MUST:

- Prefer Bootstrap utilities before writing custom CSS.
- Use Tailwind CSS only where appropriate.
- Keep custom CSS modular.
- Reuse existing styles whenever possible.
- Follow the existing design system.

The AI MUST NOT:

- Use inline CSS.
- Duplicate styles.
- Create unused classes.
- Override Bootstrap unnecessarily.

---

# Layout Rules

The AI MUST:

- Use Bootstrap Grid System.
- Design mobile-first.
- Ensure layouts are fully responsive.
- Prevent horizontal scrolling.
- Maintain consistent spacing.

The AI MUST NOT:

- Use fixed layouts.
- Use absolute positioning unless necessary.
- Break responsive behavior.

---

# Component Rules

Every component MUST be:

- Reusable
- Responsive
- Accessible
- Consistent
- Maintainable

The AI MUST reuse existing components before creating new ones.

Component duplication is prohibited.

---

# Design Rules

The AI MUST preserve:

- Eco-Gov Modern design language
- Existing color palette
- Existing typography
- Existing spacing system
- Existing icon system
- Existing component hierarchy

The AI MUST NEVER redesign the interface without explicit instructions.

---

# Accessibility

Every interface MUST:

- Support keyboard navigation.
- Include meaningful labels.
- Include alt text for images.
- Maintain sufficient color contrast.
- Follow WCAG best practices where applicable.

Accessibility MUST NOT be sacrificed for visual appearance.

---

# Performance

The AI MUST:

- Optimize images.
- Lazy-load large assets.
- Minimize unnecessary CSS.
- Avoid redundant JavaScript.
- Reduce layout shifts.
- Minimize rendering cost.

The AI MUST NOT generate unnecessary animations or heavy visual effects.

---

# Responsiveness

The interface MUST work correctly on:

- 320px
- 375px
- 390px
- 414px
- 768px
- 1024px
- 1280px
- 1440px
- 1920px

Layouts MUST remain consistent across all supported screen sizes.

---

# Code Quality

Frontend code MUST be:

- Clean
- Modular
- Reusable
- Readable
- Production-ready

Temporary code, placeholders, and unfinished implementations are prohibited.

---

# AI Restrictions

The AI MUST NOT:

- Redesign existing pages.
- Invent UI components.
- Introduce new design systems.
- Change the project styling.
- Rename existing CSS classes without permission.
- Modify unrelated frontend files.
- Generate experimental UI.

If any requirement is unclear, the AI MUST stop and request clarification.

---

# Final Rule

These frontend rules are mandatory.

If any default AI behavior conflicts with these rules, these rules ALWAYS take precedence.

The AI MUST strictly follow this document before generating or modifying any frontend code.