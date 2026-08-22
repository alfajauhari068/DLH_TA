# AI Execution Guide

---

## Document Information

| Property | Value |
|----------|-------|
| Document ID | AI-EXEC-001 |
| Version | 1.0.0 |
| Status | Draft |
| Target | AI Development Agents |
| Project | DLH Tulungagung Re-Engineering |

---

# 1. Purpose

This document defines the mandatory execution workflow for AI-assisted implementation.

Every AI coding agent SHALL follow this workflow before modifying any source code.

This guide is normative and supersedes any default coding behavior of the AI tool.

---

# 2. Supported AI Agents

The implementation process is designed to be compatible with:

- GitHub Copilot Agent
- OpenAI Codex
- Claude Code
- Cursor AI
- Windsurf
- Cline
- Roo Code
- Continue.dev

---

# 3. Implementation Workflow

Every implementation SHALL follow the sequence below.

```

Read Specification

↓

Analyze Existing Codebase

↓

Identify Impact

↓

Prepare Implementation Plan

↓

Implement Small Changes

↓

Self Review

↓

Run Validation

↓

Generate Summary

↓

Stop

```

Skipping any step is prohibited.

---

# 4. Mandatory References

Before generating code the AI SHALL read every applicable specification.

Example:

Architecture

↓

Frontend Specification

↓

Design System

↓

Component Library

↓

Card System

↓

Motion System

↓

Current Phase Prompt

↓

Source Code

Only after completing these steps MAY implementation begin.

---

# 5. General Rules

The AI SHALL:

- preserve business logic
- preserve routing
- preserve database schema
- preserve controller contracts
- preserve API contracts
- preserve localization

The AI SHALL improve only the scope defined in the current implementation phase.

---

# 6. Prohibited Actions

The AI SHALL NOT:

- invent new architecture
- replace Bootstrap
- replace Blade
- migrate to React
- migrate to Vue
- migrate to Angular
- modify unrelated modules
- rename public routes
- delete reusable components
- introduce duplicated HTML
- introduce duplicated CSS
- introduce inline JavaScript
- introduce inline CSS

---

# 7. Completion Criteria

A phase SHALL be considered complete only when:

- all acceptance criteria are satisfied
- the application compiles successfully
- no regression is introduced
- responsive behavior is preserved
- accessibility requirements remain satisfied
- implementation summary is generated

---