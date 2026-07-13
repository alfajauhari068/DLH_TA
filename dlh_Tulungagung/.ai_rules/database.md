# Database AI Rules

## Purpose

This document defines the mandatory database development rules for the DLH Tulungagung Website Re-Engineering Project.

These rules are mandatory and override the default behavior of any AI coding assistant.

---

# Database Engine

The AI MUST ONLY use:

- MySQL
- Laravel Migration
- Laravel Seeder
- Laravel Factory (when required)

The AI MUST NOT introduce other database engines unless explicitly requested.

---

# Database Design

The AI MUST:

- Follow database normalization principles.
- Maintain clear relationships.
- Keep the schema simple and scalable.
- Preserve data integrity.
- Maintain backward compatibility.

The AI MUST NEVER redesign the database without explicit approval.

---

# Table Naming

The AI MUST:

- Use lowercase names.
- Use snake_case.
- Use plural table names following Laravel conventions.

Examples:

- users
- news
- categories
- galleries
- documents

The AI MUST NOT use inconsistent naming conventions.

---

# Column Naming

The AI MUST:

- Use snake_case.
- Use descriptive names.
- Keep naming consistent across all tables.

Examples:

title

slug

description

created_at

updated_at

published_at

---

# Primary Keys

Every table MUST have:

- Primary Key
- Auto Increment ID

unless another strategy has been explicitly defined.

---

# Foreign Keys

Relationships MUST use foreign keys.

The AI MUST:

- Define proper constraints.
- Maintain referential integrity.
- Use cascading rules only when appropriate.

Foreign keys MUST NEVER be omitted without reason.

---

# Relationships

The AI MUST correctly implement:

- One-to-One
- One-to-Many
- Many-to-Many

using Laravel conventions.

Pivot tables MUST only contain relationship data unless additional attributes are required.

---

# Indexing

The AI MUST create indexes for:

- Foreign Keys
- Slugs
- Frequently searched columns
- Frequently filtered columns

The AI MUST avoid unnecessary indexes.

---

# Migration Rules

Every schema change MUST use Laravel Migration.

The AI MUST NOT modify database structures manually.

The AI MUST:

- Create reversible migrations.
- Preserve migration order.
- Avoid destructive operations.

---

# Seeders

Seeders MUST:

- Generate consistent sample data.
- Remain reusable.
- Avoid production-sensitive information.

The AI MUST NEVER insert dummy data into production migrations.

---

# Data Integrity

The AI MUST:

- Prevent duplicate records.
- Use UNIQUE constraints where appropriate.
- Define nullable fields correctly.
- Enforce required fields.

---

# Data Types

The AI MUST choose the appropriate data type.

Examples:

- string
- text
- integer
- bigint
- boolean
- date
- datetime
- timestamp
- decimal
- json

The AI MUST NOT use generic data types unnecessarily.

---

# Soft Deletes

The AI MUST use Soft Deletes only when required by the business process.

Soft Deletes MUST NOT be applied indiscriminately.

---

# Performance

The AI MUST:

- Optimize queries.
- Minimize joins where possible.
- Prevent duplicate queries.
- Avoid redundant tables.
- Avoid redundant columns.

Database efficiency is mandatory.

---

# Security

The AI MUST:

- Protect sensitive data.
- Never store plain text passwords.
- Never store secrets in the database.
- Encrypt sensitive information when required.

---

# Existing Database

The AI MUST preserve:

- Existing tables.
- Existing relationships.
- Existing constraints.
- Existing naming conventions.

Breaking changes require explicit approval.

---

# AI Restrictions

The AI MUST NOT:

- Invent tables.
- Invent columns.
- Invent relationships.
- Invent foreign keys.
- Invent business entities.
- Delete existing tables.
- Rename existing tables.
- Rename existing columns.
- Modify unrelated database structures.

If information is missing, the AI MUST request clarification before generating migrations.

---

# Documentation

Every migration MUST remain understandable.

Complex relationships SHOULD include clear comments when necessary.

---

# Final Rule

These database rules are mandatory.

If any default AI behavior conflicts with these rules, these rules ALWAYS take precedence.