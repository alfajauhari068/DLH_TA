# Navbar Component Specification

**Specification ID:** ESS-COMP-003  
**Status:** Approved  
**Domain:** Component System â€” Navigation  

---

## 1. Specification & Responsibility
Governs the top navigation bar, logo ratios, menu link gaps, and utility icon buttons.

---

## 2. Implementation Rules (RFC 2119)
- **Minimum Height:** **MUST** be fixed at 72px (min-height: 72px).
- **Background Glass:** **MUST** use translucent white gba(255, 255, 255, 0.88) with ackdrop-filter: blur(12px) and border bottom 1px solid rgba(0,0,0,0.05).
- **Logo Display:** Height **MUST** be capped at 32px - 36px (h-[36px] w-auto).
- **Navigation Links:** **MUST** use 	ext-sm font-medium, active states styled as green light pills (g-light-green text-primary).
- **Utility Buttons:** Search, LAPOR!, and Login controls **MUST** use identical quiet circular containers (w-10 h-10 rounded-full bg-gray-50).

---

## 3. Code Examples & Markup Snippets

`html
<!-- Fixed Navbar Wrapper with 72px Spacer -->
<nav id="main-navbar" class="navbar navbar-expand-lg fixed-top" style="min-height: 72px; background: rgba(255, 255, 255, 0.88); backdrop-filter: blur(12px);">
    <div class="container px-4">
        <!-- Logo & Navigation -->
    </div>
</nav>
<div style="height: 72px;"></div>
`

---

## 4. AI Coding Agent Guidance
- Do NOT increase navbar height beyond 72px to prevent header overcrowding.

---

## 5. Future Maintenance & Scalability Notes
- Test offcanvas drawer collapse on mobile screen widths below 992px.
