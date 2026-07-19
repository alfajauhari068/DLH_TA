# AI Engineering Rules

---

# Document Information

| Property | Value |
|----------|-------|
| Document Title | AI Engineering Rules |
| Document ID | AI-RULE-001 |
| Version | 1.0.0 |
| Status | Approved |
| Project | Website Re-Engineering Dinas Lingkungan Hidup Kabupaten Tulungagung |
| Applies To | All AI Coding Agents |

---

# 1. Purpose

This document establishes the mandatory engineering rules that SHALL govern every AI-assisted implementation within the Website Re-Engineering Project of Dinas Lingkungan Hidup Kabupaten Tulungagung.

These rules ensure that AI-generated code remains consistent with the approved Enterprise Software Specifications (ESS), preserves architectural integrity, and minimizes implementation risks.

Compliance with this document is mandatory for all AI coding agents.

---

# 2. Supported AI Coding Agents

The following AI coding agents SHALL follow these rules:

- GitHub Copilot Agent
- OpenAI Codex
- Claude Code
- Cursor AI
- Windsurf
- Continue.dev
- Roo Code
- Cline
- Gemini Code Assist

The implementation process SHALL remain AI-platform independent.

---

# 3. Project Technology Stack

The AI SHALL assume the following technology stack.

| Layer | Technology |
|--------|------------|
| Framework | Laravel 10 |
| Language | PHP 8.2+ |
| Template Engine | Blade |
| CSS Framework | Bootstrap 5.3 |
| Utility CSS | Tailwind CSS (Utility Classes Only) |
| Styling | Custom CSS |
| JavaScript | Vanilla JavaScript ES6 |
| Build Tool | Vite |
| Database | MySQL / MariaDB |

No alternative framework SHALL be introduced.

---

# 4. Mandatory Reading Order

Before modifying any file, the AI SHALL review the following documents in order:

1. TECHNOLOGY_STACK.md
2. FRONTEND_SPECIFICATION.md
3. DESIGN_SYSTEM.md
4. ASSET_LIBRARY.md
5. CARD_SYSTEM.md
6. COMPONENT_LIBRARY.md
7. MOTION_SYSTEM.md
8. Current Phase Prompt
9. Existing Source Code

Implementation SHALL NOT begin before this sequence is completed.

---

# 5. General Engineering Principles

The AI SHALL:

- preserve architectural consistency
- preserve business logic
- preserve routing
- preserve controller contracts
- preserve database schema
- preserve localization
- preserve API contracts
- preserve accessibility
- preserve responsive behavior

The AI SHALL modify only files explicitly included in the current implementation scope.

---

# 6. Architectural Constraints

The AI SHALL NOT:

- introduce React
- introduce Vue
- introduce Angular
- introduce SPA architecture
- replace Laravel Blade
- replace Bootstrap Grid
- replace Vite
- replace PHP architecture

The project SHALL remain a Server-Side Rendered Laravel application.

---

# 7. Frontend Rules

Every reusable interface SHALL be implemented as a Blade Component.

HTML duplication SHALL NOT occur.

Inline CSS SHALL NOT be introduced.

Inline JavaScript SHALL NOT be introduced.

All visual styling SHALL consume Design Tokens.

Component styling SHALL remain centralized.

---

# 8. CSS Rules

Approved technologies:

- Bootstrap 5.3
- Tailwind Utility Classes
- Custom CSS

Tailwind SHALL supplement Bootstrap.

Tailwind SHALL NOT replace Bootstrap components.

Hardcoded spacing SHALL NOT be introduced.

Hardcoded colors SHALL NOT be introduced.

Hardcoded typography SHALL NOT be introduced.

---

# 9. JavaScript Rules

Approved technologies:

- Vanilla JavaScript
- SwiperJS
- AOS
- GLightbox
- Intersection Observer
- Lottie

jQuery SHALL NOT be introduced unless already required by an existing dependency.

JavaScript SHALL progressively enhance the user experience.

---

# 10. Blade Rules

Blade Components SHALL contain presentation logic only.

Controllers SHALL contain application logic.

Business logic SHALL NOT appear inside Blade templates.

Database queries SHALL NOT appear inside Blade templates.

---

# 11. Component Rules

Every reusable component SHALL:

- be independent
- be configurable
- support responsive layouts
- support accessibility
- consume Design Tokens
- avoid duplicated markup

---

# 12. Card Rules

Every card SHALL comply with ESS-CARD-001.

Cards SHALL:

- support equal heights
- support lazy loading
- support responsive images
- support interactive hover
- preserve accessibility

---

# 13. Asset Rules

Every asset SHALL comply with ESS-ASSET-001.

Preferred formats:

- SVG
- WebP
- PNG
- JSON (Lottie)

Images SHALL be optimized.

Unused assets SHALL NOT remain in production.

---

# 14. Motion Rules

Animations SHALL:

- remain below 300 ms where appropriate
- remain subtle
- never block usability
- support prefers-reduced-motion

---

# 15. Performance Rules

The AI SHALL prioritize:

- Lighthouse Performance ≥ 90
- Lighthouse Accessibility ≥ 95
- Lighthouse Best Practices ≥ 95
- Lighthouse SEO ≥ 95

Implementation SHALL avoid unnecessary JavaScript execution.

---

# 16. Files Allowed to Modify

Only files explicitly listed in the execution prompt MAY be modified.

All other files SHALL remain unchanged.

---

# 17. Files Forbidden to Modify

Unless explicitly instructed, the AI SHALL NOT modify:

- .env
- composer.json
- package.json
- database schema
- migrations
- routes
- controllers
- models
- configuration files

---

# 18. Code Quality Requirements

Generated code SHALL:

- follow PSR-12
- remain readable
- remain modular
- remain documented where necessary
- avoid dead code
- avoid duplicated logic

---

# 19. Self-Review Checklist

Before completing implementation, the AI SHALL verify:

- Code compiles successfully.
- No syntax errors exist.
- No duplicated HTML exists.
- Responsive behavior remains correct.
- Accessibility remains compliant.
- Design Tokens are respected.
- Components remain reusable.
- No unrelated files were modified.

---

# 20. Completion Report

Upon completion, the AI SHALL produce a report containing:

- Summary of implemented changes
- Files modified
- Components created
- Components updated
- Risks identified
- Manual testing recommendations
- Acceptance Criteria status