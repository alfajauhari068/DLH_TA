# Form Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Forms

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

This document defines the visual, structural, functional, and accessibility standards for every form within the Administration Panel.

All Create, Update, Delete Confirmation, Settings, Profile, Authentication, and Content Management forms must follow this specification.

The objective is to ensure consistency, usability, maintainability, validation accuracy, and responsive behavior across the entire CMS.

---

# Design Principles

Every form must be:

- Simple
- Consistent
- Responsive
- Accessible
- Secure
- Predictable
- Easy to complete
- Easy to validate

Forms should minimize user effort while maximizing data accuracy.

---

# Supported Form Types

The CMS supports the following form categories:

- Create Form
- Edit Form
- Read Only Form
- Search Form
- Filter Form
- Login Form
- Profile Form
- Settings Form
- Password Form
- Upload Form
- Approval Form
- Delete Confirmation Form

Every form must inherit the same visual style.

---

# General Layout

Every form follows the structure below.

```
Page Header

↓

Description

↓

Alert Messages

↓

Form Card

↓

Section Header

↓

Input Fields

↓

Action Buttons
```

---

# Form Container

Desktop

Maximum Width

960px

Centered

Tablet

100%

Mobile

100%

Padding

Desktop

32px

Tablet

24px

Mobile

16px

---

# Form Card

Background

White

Border Radius

16px

Padding

32px

Border

Light Gray

Shadow

Small

Spacing Between Sections

32px

---

# Form Sections

Large forms should be divided into logical sections.

Example

General Information

SEO Metadata

Publication Settings

Media Upload

Visibility

System Information

Never place unrelated fields inside the same section.

---

# Labels

Every input requires a label.

Label Position

Above Input

Required Field

Display *

Optional Field

Do not display *

Label Font

16px

Medium Weight

Color

Dark Gray

---

# Help Text

Optional helper text should appear below the input.

Example

Maximum image size: 2 MB.

Accepted formats: JPG, PNG, WebP.

Helper Text Size

13px

Muted Color

---

# Required Fields

Required fields must display:

Red Asterisk

Server Validation

Client Validation

Clear Error Message

---

# Input Fields

Supported Inputs

Text

Email

Password

Number

Telephone

URL

Date

Time

Datetime

Textarea

Search

Hidden

Readonly

Disabled

Every input must use Bootstrap Form Control.

---

# Input Sizes

Height

48px

Border Radius

12px

Padding

12px 16px

Border

Bootstrap Default

Focus

Primary Border

Soft Shadow

---

# Textarea

Minimum Height

140px

Resizable

Vertical Only

Rich Text Editor

Optional

Only where required.

---

# Select Component

Use Bootstrap Select.

Supports

Single Select

Multiple Select

Grouped Options

Searchable Select

Async Select

Placeholder Required

---

# Checkbox

Supports

Single Checkbox

Grouped Checkbox

Permission Matrix

Terms Agreement

Checkboxes must align vertically.

---

# Radio Button

Supports

Status Selection

Publication Options

Visibility Options

Radio Groups require labels.

---

# Toggle Switch

Use Bootstrap Switch.

Suitable for

Publish

Featured

Homepage

Active

Never use Toggle for destructive actions.

---

# Date Picker

Supports

Date

Date Time

Range

Localization

Use consistent date format.

---

# File Upload

Supports

Image

PDF

Word

Excel

ZIP

Maximum File Size

Defined by backend configuration.

Display

Selected File

Preview

Progress

Validation

---

# Image Upload

Supports

Drag & Drop

Browse Button

Thumbnail Preview

Replace

Remove

Crop (Optional)

Accepted Formats

JPG

PNG

WebP

SVG (Configuration Based)

---

# Password Fields

Supports

Show / Hide Password

Password Strength Indicator

Password Confirmation

Generate Password (Optional)

---

# Validation

Every form must support:

Client Validation

Server Validation

Real-time Validation (Optional)

Validation Message Position

Below Input

Bootstrap Invalid Feedback

---

# Error Messages

Display

Field Name

Validation Message

Example

Title is required.

Email must be unique.

Password must contain at least 8 characters.

Never expose internal system errors.

---

# Success Messages

Display Bootstrap Alert.

Example

News article created successfully.

Profile updated successfully.

Settings saved successfully.

---

# Warning Messages

Use Bootstrap Warning Alerts.

Example

Unsaved changes will be lost.

---

# Confirmation Dialog

Required before

Delete

Archive

Restore

Reset

Logout

Publish

Bulk Actions

Use Bootstrap Modal.

---

# Action Buttons

Button Order

Primary Action

Secondary Action

Cancel

Example

Save

Save & Publish

Cancel

Desktop

Right Aligned

Mobile

Full Width

Stacked Vertically

---

# Search Form

Supports

Keyword

Category

Status

Author

Date

Sorting

Filters should never reload the page unnecessarily.

---

# Filter Form

Always collapsible.

Supports

Status

Category

Role

Date

Visibility

Author

Use Bootstrap Collapse.

---

# Multi-Step Form

Supported for complex modules.

Structure

Step Indicator

Current Step

Navigation Buttons

Progress Indicator

Each step should contain related fields only.

---

# Form Accessibility

Every form must support:

Keyboard Navigation

Tab Order

ARIA Labels

Focus State

Screen Readers

Semantic Labels

Accessible Error Messages

---

# Responsive Rules

Desktop

Two-column layout where appropriate.

Tablet

Adaptive grid.

Mobile

Single-column layout.

Inputs

100% Width

Buttons

Full Width

Spacing

Consistent

---

# Security Requirements

Every form must implement:

CSRF Protection

Server-side Validation

Input Sanitization

Mass Assignment Protection

Authorization

File Validation

Mime Validation

File Size Validation

Never trust client-side validation alone.

---

# Performance

Lazy-load heavy components.

Use AJAX only when beneficial.

Avoid unnecessary JavaScript.

Minimize DOM complexity.

Reuse Blade Components.

---

# Blade Components

Forms must be composed using reusable components.

Examples

<x-admin.form>

<x-admin.form-section>

<x-admin.input>

<x-admin.textarea>

<x-admin.select>

<x-admin.checkbox>

<x-admin.radio>

<x-admin.switch>

<x-admin.file-upload>

<x-admin.image-upload>

<x-admin.button>

<x-admin.validation-message>

<x-admin.alert>

<x-admin.modal>

Avoid duplicated form markup.

---

# Bootstrap Components

Use

Form Control

Input Group

Floating Label (Optional)

Validation Feedback

Accordion

Collapse

Modal

Buttons

Dropdown

Progress

Spinner

Never replace Bootstrap functionality unnecessarily.

---

# Forbidden Practices

Do not use inline CSS.

Do not use inline JavaScript.

Do not omit labels.

Do not rely only on placeholders.

Do not disable server validation.

Do not hardcode validation messages.

Do not create inconsistent button layouts.

Do not place unrelated fields within the same section.

Do not expose backend exceptions.

---

# Quality Checklist

Before implementation verify:

✓ Responsive Layout

✓ Proper Labels

✓ Validation

✓ Error Messages

✓ Success Messages

✓ File Upload Validation

✓ CSRF Protection

✓ Bootstrap Compliance

✓ Accessible Forms

✓ Responsive Buttons

✓ Reusable Blade Components

✓ Government CMS visual consistency

This specification is mandatory for every Administration Form implementation.