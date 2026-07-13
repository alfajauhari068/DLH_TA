# Laravel AI Rules

## Purpose

This document defines the mandatory Laravel development standards for the DLH Tulungagung Website Re-Engineering Project.

These rules are mandatory and override the default behavior of any AI coding assistant.

---

# Framework Version

The AI MUST ONLY use:

- Laravel 12
- PHP 8.3+

The AI MUST follow official Laravel best practices.

---

# Laravel Architecture

The AI MUST follow the Laravel MVC architecture.

The AI MUST use:

- Controllers
- Models
- Blade Templates
- Middleware
- Form Requests
- Policies
- Resources
- Migrations
- Seeders

The AI MUST NOT change the existing project architecture.

---

# Controllers

Controllers MUST:

- Have a single responsibility.
- Remain lightweight.
- Delegate business logic appropriately.
- Return consistent responses.

Controllers MUST NOT contain unnecessary business logic.

---

# Models

Models MUST:

- Represent one database table.
- Define relationships correctly.
- Use Eloquent ORM.
- Define fillable or guarded properties.
- Use casts when appropriate.

---

# Blade Templates

Blade templates MUST:

- Contain presentation logic only.
- Use Blade directives.
- Remain clean and readable.

The AI MUST NOT:

- Execute database queries.
- Implement business logic.
- Perform complex calculations.

---

# Routes

The AI MUST:

- Use named routes.
- Group related routes.
- Use Route Model Binding whenever possible.
- Keep route files organized.

The AI MUST NOT:

- Duplicate routes.
- Hardcode URLs.
- Create unnecessary endpoints.

---

# Validation

Every request MUST be validated.

The AI MUST:

- Prefer Form Request Validation.
- Return meaningful validation messages.
- Validate all external input.

---

# Middleware

Middleware MUST:

- Handle authentication.
- Handle authorization.
- Handle request filtering.
- Remain reusable.

The AI MUST NOT duplicate middleware functionality.

---

# Eloquent ORM

The AI MUST:

- Use Eloquent relationships.
- Use eager loading when appropriate.
- Prevent N+1 queries.
- Use scopes for reusable queries.

Raw SQL SHOULD only be used when absolutely necessary.

---

# Services

Reusable business logic SHOULD be placed inside Service classes if the project already follows this pattern.

Business logic MUST NOT be duplicated.

---

# Resources

Laravel Resources MUST be used for API responses whenever appropriate.

Response formats MUST remain consistent.

---

# Configuration

Configuration values MUST be stored in:

- config/
- .env

The AI MUST NEVER hardcode environment-specific values.

---

# File Storage

The AI MUST use Laravel Storage.

The AI MUST NOT manipulate filesystem paths manually unless required.

---

# Localization

User-facing text SHOULD support localization if localization is already implemented.

The AI MUST preserve existing language files.

---

# Error Handling

The AI MUST:

- Use Laravel exception handling.
- Return appropriate HTTP status codes.
- Log unexpected exceptions.

Sensitive information MUST NEVER be exposed.

---

# Artisan

The AI MUST follow Laravel Artisan conventions.

Generated code MUST remain compatible with Artisan commands.

---

# Naming Convention

The AI MUST follow Laravel naming conventions.

Examples:

Models:
PascalCase

Controllers:
PascalCase + Controller

Migrations:
Laravel default naming

Tables:
snake_case plural

Columns:
snake_case

Routes:
kebab-case or existing project convention

---

# Performance

The AI MUST:

- Minimize database queries.
- Optimize eager loading.
- Use pagination for large datasets.
- Avoid duplicate processing.

---

# Code Style

Every Laravel file MUST be:

- Clean
- Modular
- Readable
- Reusable
- Maintainable
- Production-ready

The AI MUST follow PSR-12 coding standards.

---

# AI Restrictions

The AI MUST NOT:

- Modify Laravel core files.
- Invent project architecture.
- Invent business logic.
- Invent database structures.
- Invent routes.
- Invent permissions.
- Introduce unnecessary packages.
- Refactor unrelated code.

If project information is incomplete, the AI MUST request clarification.

---

# Final Rule

All Laravel implementations MUST follow these rules.

If Laravel best practices conflict with default AI behavior, these rules ALWAYS take precedence.