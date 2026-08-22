# Toast Notification Specification

**Specification ID:** ESS-COMP-005  
**Status:** Approved  
**Domain:** Component System â€” Feedback  

---

## 1. Specification & Responsibility
Governs floating toast notifications, alerts, and dynamic system feedback banners.

---

## 2. Implementation Rules (RFC 2119)
- **Positioning:** Toast containers **MUST** float at top-right or bottom-right (ixed top-6 right-6 z-50).
- **Variants:**
  - Success: g-white border-l-4 border-primary text-gray-900 shadow-xl rounded-2xl p-4.
  - Error: g-white border-l-4 border-danger text-gray-900 shadow-xl rounded-2xl p-4.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Toast Component Markup -->
<div class="fixed bottom-6 right-6 z-50 flex items-center gap-3 bg-white border-l-4 border-primary p-4 rounded-2xl shadow-xl">
    <div class="w-8 h-8 rounded-full bg-light-green text-primary flex items-center justify-center">
        <i class="bi bi-check-circle-fill"></i>
    </div>
    <span class="text-sm font-medium text-gray-800">Permohonan berhasil dikirim!</span>
</div>
`

---

## 4. AI Coding Agent Guidance
- Include auto-dismiss timer logic (3000ms - 5000ms) for feedback toasts.

---

## 5. Future Maintenance & Scalability Notes
- Support stacked notification lists when multiple toasts trigger simultaneously.
