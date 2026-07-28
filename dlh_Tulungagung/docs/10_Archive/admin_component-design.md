# Component Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Components

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

This document defines every reusable User Interface (UI) component used throughout the Administration Panel.

Every administration page must be built using reusable Blade Components.

Component duplication is strictly prohibited.

All components must be:

- Reusable
- Responsive
- Accessible
- Consistent
- Lightweight
- Easy to maintain

---

# Component Principles

Every component must:

• Have a single responsibility

• Be reusable

• Be responsive

• Support accessibility

• Follow Bootstrap 5

• Use Bootstrap Utility Classes whenever possible

• Avoid unnecessary custom CSS

• Avoid duplicated HTML

---

# Component Hierarchy

```

Application

↓

Layout Components

↓

Navigation Components

↓

Content Components

↓

Form Components

↓

Feedback Components

↓

Utility Components

```

---

# Layout Components

Mandatory Components

```

<x-admin.page>

<x-admin.container>

<x-admin.section>

<x-admin.grid>

<x-admin.card>

```

---

# Card Component

Purpose

Display grouped information.

Used for

Dashboard

Forms

Tables

Statistics

Widgets

Settings

Properties

Radius

16px

Padding

24px

Shadow

Small

Border

Light Gray

Background

White

Hover

Soft Shadow

Transition

150ms

---

# Statistic Card

Contains

Icon

Title

Value

Description

Optional Trend

Example

```

Users

24

Registered Administrators

```

Never use plain text blocks.

---

# Section Header

Contains

Title

Description

Primary Action

Secondary Action

Example

```

News

Manage all published news.

[Create News]

```

---

# Breadcrumb Component

Displays

Navigation hierarchy.

Example

```

Dashboard

/

Content

/

News

```

Automatically generated whenever possible.

---

# Alert Component

Bootstrap Alerts only.

Supported Types

Success

Info

Warning

Danger

Dismissible

Example

```

Article published successfully.

```

---

# Badge Component

Purpose

Display status.

Examples

Published

Draft

Pending

Archived

Active

Inactive

Rejected

Approved

Badge Colors

Success

Warning

Secondary

Danger

Primary

---

# Button Component

Button Types

Primary

Secondary

Outline

Danger

Success

Warning

Light

Dark

Icon Button

Rounded Button

Dropdown Button

Loading Button

Buttons must:

Support disabled state

Support loading state

Support icons

Maintain consistent sizing

---

# Dropdown Component

Bootstrap Dropdown.

Used for

Actions

User Menu

Quick Actions

Filters

Options

Animation

150ms

Radius

12px

---

# Search Component

Contains

Search Icon

Input

Clear Button

Loading Indicator

Autocomplete

Supports

Instant Search

Debounce

Keyboard Navigation

---

# Filter Component

Supports

Category

Status

Date

Author

Role

Sort

Filters should never refresh the page unnecessarily.

---

# Pagination Component

Use Bootstrap Pagination.

Features

Previous

Next

Page Numbers

Current Page

Disabled State

Responsive

---

# Table Component

Bootstrap Responsive Table.

Features

Search

Sort

Filter

Pagination

Bulk Actions

Responsive Scroll

Sticky Header

Selectable Rows

Action Column

---

# Table Actions

Supported Actions

View

Edit

Delete

Publish

Archive

Restore

Duplicate

Actions should use icon buttons.

---

# Empty State Component

Contains

Illustration/Icon

Title

Description

Optional Action

Example

```

No News Available

Create your first article.

```

---

# Loading Component

Bootstrap Placeholder.

Supports

Card

Table

List

Widget

Form

Never leave blank areas while loading.

---

# Error Component

Displays

Error Icon

Title

Description

Retry Button

Example

```

Unable to load data.

Try again.

```

---

# Modal Component

Bootstrap Modal.

Sizes

Small

Medium

Large

Extra Large

Supports

Forms

Confirmation

Preview

Delete Confirmation

---

# Confirmation Dialog

Used for

Delete

Publish

Archive

Restore

Logout

Must require explicit confirmation.

---

# Toast Notification

Bootstrap Toast.

Types

Success

Info

Warning

Danger

Position

Top Right

Auto Hide

5 seconds

---

# Progress Component

Bootstrap Progress.

Used for

Uploads

Statistics

Processes

Storage

Background Tasks

---

# Timeline Component

Used for

Activity Logs

System Logs

User Activity

Version History

Displays

Time

Icon

Description

User

---

# Widget Component

Reusable dashboard blocks.

Examples

Recent News

Recent Activities

Pending Approval

Visitor Statistics

Quick Actions

System Status

Widgets must remain independent.

---

# Avatar Component

Supports

Image

Initial

Status Indicator

Sizes

Small

Medium

Large

Extra Large

---

# Status Component

Common statuses

Active

Inactive

Published

Draft

Pending

Rejected

Approved

Archived

Use Bootstrap Badges.

---

# File Component

Supports

Image Upload

Document Upload

Preview

Progress

Validation

Maximum Size

Accepted Types

---

# Image Preview

Supports

Thumbnail

Lightbox

Preview

Replace

Remove

---

# Tabs Component

Bootstrap Nav Tabs.

Supports

Horizontal

Vertical

Responsive

Active State

---

# Accordion Component

Bootstrap Accordion.

Used for

FAQ

Settings

Grouped Forms

Documentation

---

# Collapse Component

Bootstrap Collapse.

Used for

Sidebar

Advanced Filters

Expandable Cards

---

# Tooltip Component

Bootstrap Tooltip.

Use only for:

Icons

Actions

Compact Controls

Avoid large tooltip content.

---

# Spinner Component

Bootstrap Spinner.

Used for

Loading

Saving

Uploading

Searching

---

# Form Validation Component

Supports

Success

Warning

Error

Inline Message

Server Validation

Client Validation

---

# Notification Component

Supports

Unread

Read

Priority

System

Security

User

Content

---

# Skeleton Component

Supports

Cards

Tables

Lists

Widgets

Forms

Always use placeholders during asynchronous loading.

---

# Accessibility

Every component must support

Keyboard Navigation

ARIA Labels

Focus Indicators

Screen Readers

Proper Color Contrast

Semantic HTML

---

# Responsive Rules

Desktop

Full Layout

Tablet

Adaptive Layout

Mobile

Single Column

Touch Friendly

Buttons become larger on mobile.

---

# Performance

Reuse Blade Components.

Avoid duplicated markup.

Use Bootstrap Utilities.

Lazy-load expensive widgets.

Minimize nested HTML.

Avoid unnecessary JavaScript.

---

# Blade Component Naming

Examples

```

<x-admin.card>

<x-admin.stat-card>

<x-admin.table>

<x-admin.form>

<x-admin.modal>

<x-admin.button>

<x-admin.badge>

<x-admin.search>

<x-admin.empty-state>

<x-admin.loading>

<x-admin.alert>

<x-admin.pagination>

<x-admin.timeline>

<x-admin.widget>

```

Naming must remain consistent.

---

# Forbidden Practices

Do not duplicate components.

Do not use inline CSS.

Do not use inline JavaScript.

Do not hardcode colors.

Do not create page-specific components.

Do not mix Bootstrap versions.

Do not replace Bootstrap components unnecessarily.

---

# Quality Checklist

Before implementation verify:

✓ Responsive Components

✓ Bootstrap Compliance

✓ Reusable Blade Components

✓ Accessible UI

✓ Consistent Styling

✓ Proper Typography

✓ Responsive Tables

✓ Responsive Forms

✓ Responsive Widgets

✓ Loading States

✓ Empty States

✓ Error States

✓ Government CMS visual consistency

This specification is mandatory for every reusable Administration Component.