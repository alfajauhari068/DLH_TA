# Backend AI Rules

## Purpose

This document defines the mandatory backend development rules for the DLH Tulungagung Website Re-Engineering Project.

These rules are mandatory and override the default behavior of any AI coding assistant.

---

# Backend Framework

The AI MUST ONLY use:

- Laravel 12
- PHP 8.3+
- Composer

The AI MUST NOT introduce any additional backend framework unless explicitly requested.

---

# Project Architecture

The AI MUST follow the existing Laravel architecture.

The AI MUST use:

- MVC Pattern
- Controllers
- Models
- Form Requests
- Middleware
- Services (if already implemented)
- Policies
- Resources
- Events (only when required)

The AI MUST NOT change the project architecture.

---

# Business Logic

Business logic MUST remain outside Blade templates.

Business logic MUST remain outside routes.

Business logic MUST remain outside models whenever possible.

Controllers MUST remain lightweight.

The AI SHOULD move reusable logic into Services or Actions if they already exist.

---

# Routing

The AI MUST:

- Use Laravel Route files.
- Use named routes.
- Use route model binding whenever possible.
- Group related routes.

The AI MUST NOT:

- Duplicate routes.
- Create unnecessary endpoints.
- Hardcode URLs.

---

# Controllers

Controllers MUST:

- Have a single responsibility.
- Validate requests.
- Return proper responses.
- Remain concise and maintainable.

The AI MUST NOT place database queries directly inside complex controller logic if they can be delegated.

---

# Models

The AI MUST:

- Use Eloquent ORM.
- Define relationships correctly.
- Define fillable or guarded properties.
- Use casts when necessary.

The AI MUST NOT duplicate model functionality.

---

# Validation

The AI MUST:

- Validate every user input.
- Use Form Request Validation whenever possible.
- Return meaningful validation messages.

Validation MUST NEVER rely only on frontend validation.

---

# API Rules

Every API MUST:

- Return consistent JSON.
- Use proper HTTP status codes.
- Handle exceptions gracefully.

The AI MUST NOT change response structures without permission.

---

# Error Handling

The AI MUST:

- Handle exceptions properly.
- Return user-friendly error messages.
- Log unexpected errors.

The AI MUST NEVER expose stack traces in production.

---

# File Upload

The AI MUST:

- Validate file type.
- Validate file size.
- Store uploads securely.
- Generate unique filenames.

The AI MUST NEVER trust client-side validation.

---

# Authentication

The AI MUST:

- Respect existing authentication flow.
- Protect restricted routes.
- Verify permissions before sensitive operations.

The AI MUST NOT bypass authentication or authorization.

---

# Performance

The AI MUST:

- Minimize database queries.
- Prevent N+1 queries.
- Use eager loading when appropriate.
- Paginate large datasets.
- Optimize heavy operations.

---

# Code Quality

Backend code MUST be:

- Clean
- Modular
- Reusable
- Readable
- Testable
- Production-ready

Temporary implementations are prohibited.

---

# AI Restrictions

The AI MUST NOT:

- Invent endpoints.
- Invent business rules.
- Invent database fields.
- Invent permissions.
- Invent workflows.
- Modify unrelated backend files.
- Refactor unrelated code.

If information is missing, the AI MUST request clarification.

---

# Final Rule

These backend rules are mandatory.

If any default AI behavior conflicts with these rules, these rules ALWAYS take precedence.