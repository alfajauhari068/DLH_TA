# ADR 0002: Pattern-Driven Documentation Architecture

**Status:** Accepted  
**Date:** 2026-07-21  

---

## 1. Context
Documenting individual pages (e.g. NEWS.md, GALLERY.md, AGENDA.md) created documentation debt whenever new views were added.

## 2. Decision
Transition to a **Pattern-Driven Architecture** (LANDING_PATTERN.md, LISTING_PATTERN.md, DETAIL_PATTERN.md).

## 3. Consequences
- New pages inherit existing pattern specifications without creating new documentation files.
- Ensures infinite documentation scalability.
