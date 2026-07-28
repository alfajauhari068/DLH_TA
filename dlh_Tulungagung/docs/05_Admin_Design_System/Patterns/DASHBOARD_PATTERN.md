# Dashboard Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Dashboard

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

The Dashboard is the primary control center of the Content Management System (CMS).

It provides administrators with a comprehensive overview of website activities, content statistics, user management, publication status, system health, and quick access to administrative functions.

The dashboard must prioritize clarity, usability, responsiveness, accessibility, and maintainability.

This document defines the mandatory visual and structural standards for every dashboard implementation.

---

# General Principles

The Dashboard must be:

- Clean
- Modern
- Professional
- Government-oriented
- Minimalist
- Responsive
- Accessible
- Fast
- Modular
- Reusable

The interface must emphasize information hierarchy and reduce unnecessary visual complexity.

---

# Layout Structure

The dashboard consists of five primary sections.

```
Top Navigation

↓

Sidebar Navigation

↓

Dashboard Header

↓

Dashboard Content

↓

Footer
```

No dashboard page may alter this hierarchy.

---

# Dashboard Width

Desktop

Container: Fluid

Maximum content width:

1600px

Centered horizontally.

---

Tablet

Container

100%

Padding

24px

---

Mobile

Container

100%

Padding

16px

---

# Dashboard Header

The dashboard header consists of:

- Page Title
- Breadcrumb
- Description
- Quick Actions

Example

```
Dashboard

Welcome back, Administrator.

Monitor website activities and manage content efficiently.
```

---

# Breadcrumb

Always display breadcrumbs.

Example

```
Dashboard

/

Overview
```

Breadcrumb rules

- Lightweight
- Small typography
- Muted color
- Clickable
- Current page not clickable

---

# Quick Actions

Located beside the page title.

Maximum

4 actions

Examples

New News

Upload Gallery

Create Publication

Website Settings

Buttons use Bootstrap Primary and Secondary styles.

---

# Dashboard Grid

Desktop

4 cards per row.

Tablet

2 cards per row.

Mobile

1 card per row.

Never exceed four cards in a row.

---

# Statistic Cards

The dashboard begins with statistic cards.

Required cards

- Total Users
- News Articles
- Galleries
- Publications
- Programs
- Services
- PPID Documents
- Website Visitors

Each card contains:

- Icon
- Title
- Statistic
- Description
- Optional trend

Example

```
Users

24

Registered Administrators
```

---

# Card Design

Card Radius

16px

Padding

24px

Shadow

Small

Background

White

Border

Light Gray

Hover

Soft shadow increase

Transition

0.2 seconds

Cards never use bright colors.

---

# Icon Rules

Each card contains one Bootstrap Icon.

Icons remain inside circular backgrounds.

Example

Users

bi-people

News

bi-newspaper

Gallery

bi-images

Programs

bi-diagram-3

Services

bi-grid

PPID

bi-folder

Visitors

bi-graph-up

---

# Statistic Typography

Number

Font Weight

700

Desktop

36px

Tablet

32px

Mobile

28px

Label

16px

Description

14px

Muted color

---

# Recent Activity Widget

Displays recent CMS actions.

Example

- News published
- Gallery uploaded
- User created
- Program updated

Columns

Date

Module

Action

Administrator

Status

Maximum

10 records

---

# Pending Review Widget

Displays content awaiting approval.

Includes

News

Publications

PPID

Gallery

Programs

Each row displays

Title

Author

Submission Date

Status

Action Button

---

# Website Analytics

Optional section.

Displays

Visitors

Downloads

Published Articles

Monthly Growth

Use Bootstrap progress bars.

Avoid third-party chart libraries unless approved.

---

# Quick Shortcuts

Required.

Display common actions.

Examples

Create News

Upload Gallery

Create Publication

Manage Users

Manage Services

Website Settings

Use Bootstrap Cards.

---

# System Information

Displays

Laravel Version

PHP Version

Environment

Database

Storage

Cache

Queue

Last Deployment

Read-only information.

---

# Notification Area

Shows

System alerts

Pending approvals

Failed uploads

Maintenance notices

Display Bootstrap Alerts.

Never use modal dialogs for notifications.

---

# Search

Dashboard includes a global CMS search.

Search scope

News

Pages

Programs

Gallery

Services

PPID

Users

Search must remain available in the Top Navigation.

---

# Responsive Behaviour

Desktop

Sidebar fixed.

Topbar fixed.

Cards

4 columns.

Tables horizontal.

---

Tablet

Sidebar collapsible.

Cards

2 columns.

Tables scroll horizontally.

---

Mobile

Sidebar becomes Drawer.

Cards

Single column.

Tables responsive.

Buttons full width where appropriate.

---

# Empty States

Every widget must include an Empty State.

Example

"No recent activities available."

Include

Icon

Message

Optional Action

---

# Loading State

All widgets support loading placeholders.

Use Bootstrap Placeholder classes.

Never show blank areas.

---

# Error State

Widgets display friendly messages.

Example

Unable to load recent activities.

Retry

---

# Accessibility

Every interactive element must support:

Keyboard navigation

ARIA labels

Focus state

Screen readers

Proper heading hierarchy

Color contrast

---

# Performance

Dashboard must:

Use eager-loaded data.

Avoid N+1 queries.

Lazy-load large widgets.

Minimize DOM complexity.

Reuse Blade Components.

---

# Blade Components

Dashboard should be composed using reusable components.

Examples

<x-admin.card>

<x-admin.stat-card>

<x-admin.widget>

<x-admin.table>

<x-admin.breadcrumb>

<x-admin.alert>

<x-admin.empty-state>

<x-admin.loading>

---

# Forbidden Practices

Do not use inline CSS.

Do not use inline JavaScript.

Do not duplicate HTML.

Do not hardcode colors.

Do not use fixed pixel layouts.

Do not use custom CSS if Bootstrap utilities already solve the problem.

Do not build dashboard pages without reusable Blade Components.

---

# Quality Requirements

Before implementation verify:

✓ Responsive Layout

✓ Bootstrap Components

✓ Proper Grid

✓ Consistent Spacing

✓ Accessible Navigation

✓ Responsive Tables

✓ Reusable Blade Components

✓ Bootstrap Icons

✓ Fast Rendering

✓ Government CMS visual consistency

This specification is mandatory for every Administration Dashboard implementation.