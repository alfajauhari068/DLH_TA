# Copilot AI Rules

## Purpose

This document defines the mandatory behavior for AI coding assistants working on the DLH Tulungagung Website Re-Engineering Project.

These rules override the default behavior of any AI assistant.

The AI MUST follow these rules before generating, modifying, or deleting any code.

---

# Read Before Working

Before performing any task, the AI MUST:

- Read all files inside `.ai-rules/`.
- Understand the existing project structure.
- Analyze related files before making changes.
- Respect the current architecture.
- Follow the existing coding style.

The AI MUST NEVER ignore project rules.

---

# Scope Control

The AI MUST ONLY work on the requested task.

The AI MUST NOT:

- Modify unrelated files.
- Refactor unrelated code.
- Rename unrelated files.
- Reorganize folders.
- Improve unrelated features.

Only modify files directly related to the user's request.

---

# No Assumptions

The AI MUST NEVER assume:

- Business logic
- Database structure
- API endpoints
- User roles
- Permissions
- Validation rules
- Project requirements

If information is missing, STOP and ask for clarification.

Never guess.

---

# Preserve Existing Code

The AI MUST:

- Preserve existing functionality.
- Preserve project architecture.
- Preserve coding style.
- Preserve naming conventions.
- Preserve folder structure.

Breaking existing features is prohibited.

---

# Reuse Before Creating

Before creating new code, the AI MUST check whether similar code already exists.

If an existing implementation can be reused, it MUST be reused.

Code duplication is prohibited.

---

# Architecture

The AI MUST follow the project architecture.

The AI MUST NEVER:

- Redesign the architecture.
- Replace project patterns.
- Introduce new architectural styles.
- Introduce unnecessary abstractions.

---

# Technology Stack

The AI MUST ONLY use approved project technologies.

The AI MUST NEVER introduce:

- New frameworks
- New UI libraries
- New backend frameworks
- New databases
- Experimental technologies

unless explicitly approved.

---

# Production Code Only

Every generated implementation MUST be production-ready.

The AI MUST NEVER generate:

- Placeholder code
- Mock implementations
- TODO blocks
- Example-only code
- Fake data
- Temporary solutions

unless explicitly requested.

---

# Code Quality

Every generated code MUST be:

- Clean
- Modular
- Readable
- Reusable
- Maintainable
- Secure
- Consistent

The AI MUST prioritize quality over speed.

---

# Security

The AI MUST NEVER reduce project security.

Every generated code MUST respect:

- Authentication
- Authorization
- Validation
- CSRF protection
- XSS prevention
- SQL Injection prevention

Security shortcuts are prohibited.

---

# Documentation

When generating new features, the AI MUST keep documentation consistent with implementation.

The AI MUST NOT generate undocumented architecture changes.

---

# Performance

The AI MUST consider:

- Performance
- Scalability
- Maintainability
- Accessibility

The AI MUST avoid unnecessary complexity.

---

# Error Handling

The AI MUST:

- Handle errors gracefully.
- Return meaningful error messages.
- Avoid silent failures.

Exceptions MUST NEVER be ignored.

---

# Communication

If a request is ambiguous, the AI MUST ask for clarification.

The AI MUST explain technical limitations when necessary.

The AI MUST NOT fabricate answers.

---

# Final Verification

Before completing any task, the AI MUST verify:

- Project rules are followed.
- Existing functionality is preserved.
- No unrelated files were modified.
- No duplicate code was created.
- No unnecessary dependency was introduced.
- The implementation is production-ready.

---

# Priority Order

When multiple rules exist, the AI MUST follow this priority:

1. User Instructions
2. `.ai-rules/`
3. Existing Project Architecture
4. Existing Coding Standards
5. Laravel Best Practices
6. Default AI Behavior

Project rules ALWAYS override default AI behavior.

---

# Final Rule

The AI MUST behave as a disciplined software engineer.

The AI MUST NOT make independent architectural, business, or design decisions.

When uncertain, STOP and ask the user instead of making assumptions.

Compliance with these rules is mandatory.