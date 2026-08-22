# CMS Content Workflow Specification

**Specification ID:** ESS-CMS-001  
**Status:** Approved  
**Domain:** CMS Content Publishing  

---

## 1. Specification & Responsibility
Defines status transitions and validation gates for news articles, publications, and service records in the CMS.

---

## 2. Implementation Rules (RFC 2119)
- **Content States:** Articles **MUST** move strictly between: draft â†’ scheduled â†’ published â†’ rchived.
- **Publishing Gate:** Articles **MUST NOT** be set to published status without a title, category assignment, and featured image.

---

## 3. Code Examples & Markup Snippets

`php
// Enum Definition Example
enum ContentStatus: string {
    case DRAFT = 'draft';
    case SCHEDULED = 'scheduled';
    case PUBLISHED = 'published';
    case ARCHIVED = 'archived';
}
`

---

## 4. AI Coding Agent Guidance
- Preserve existing status check logic in Eloquent queries (where('status', 'published')).

---

## 5. Future Maintenance & Scalability Notes
- Implement audit trails tracking user IDs associated with status transitions.
