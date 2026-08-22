# AI Workflow Verification Checklist

**Specification ID:** ESS-AI-005  
**Status:** Approved  
**Domain:** AI Workflow & Quality Engineering  

---

## 1. Specification & Responsibility
Serves as the master AI verification index linking AI execution quality gates with domain-specific verification checklists in `docs/08_Verification_System/`.

---

## 2. Implementation Rules (RFC 2119)
- **MUST** execute verification checks prior to finalizing any pull request or code delivery.
- **SHALL** validate responsive boundaries using `docs/08_Verification_System/RESPONSIVE_CHECKLIST.md`.
- **SHALL** validate WCAG 2.1 AA accessibility using `docs/08_Verification_System/ACCESSIBILITY_CHECKLIST.md`.
- **MUST** verify asset compilation via `npm run build` without compiler warnings or errors.

---

## 3. Code Examples & Markup Snippets

```bash
# Command Sequence for Pre-Delivery Verification
npm run build
php artisan test
```

---

## 4. AI Coding Agent Guidance
- Always run automated verification tests before marking tasks as complete.

---

## 5. Future Maintenance & Scalability Notes
- Update verification gates whenever new system modules or security constraints are introduced.
