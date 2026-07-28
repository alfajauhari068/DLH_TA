# Enterprise Admin Design System Specification

**Specification ID:** ESS-ADM-001  
**Status:** Approved  
**Domain:** Administration Panel Interface  

---

## 1. Specification & Responsibility
Establishes visual refinement guidelines for the Admin CMS workspace while preserving existing Laravel business logic and Eloquent models.

---

## 2. Implementation Rules (RFC 2119)
- **Workspace Header:** **MUST** feature a clean greeting banner, production environment pill, CMS version badge, build status, and quick create actions.
- **Sidebar:** **MUST** use clean white backdrop with active menu item indicated by a green soft pill (g-light-green text-primary).
- **DataTables:** **MUST** feature rounded white card wrappers (ounded-2xl border border-gray-100 shadow-sm), column sort icons, and clean pagination.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Admin Workspace Header Spec -->
<div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 mb-8 flex justify-between items-center">
    <div>
        <div class="flex items-center gap-3 mb-2">
            <span class="px-3 py-1 bg-light-green text-primary font-bold text-xs rounded-full">Production</span>
            <span class="text-gray-400 text-xs font-medium">v2.0 â€¢ Build Passing</span>
        </div>
        <h2 class="text-2xl font-black text-gray-900">Selamat Datang, Administrator</h2>
        <p class="text-gray-500 text-sm mb-0">Kelola informasi publik dan layanan lingkungan Kabupaten Tulungagung.</p>
    </div>
</div>
`

---

## 4. AI Coding Agent Guidance
- Do NOT alter database controllers or CRUD routes when styling admin Blade templates.

---

## 5. Future Maintenance & Scalability Notes
- Ensure admin tables scale gracefully on mobile viewports with horizontal scroll wrappers (	able-responsive).
