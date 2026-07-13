# Top Navigation Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Top Navigation

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

The Top Navigation (Topbar) provides global navigation, quick actions, user account management, notifications, and contextual information for every administration page.

The Topbar must remain identical across the entire Administration Panel.

Every administration page must inherit the same Topbar.

---

# Design Principles

The Top Navigation must be:

- Clean
- Minimal
- Professional
- Consistent
- Responsive
- Accessible
- Lightweight
- Modular

The Topbar should never distract users from the main content.

---

# Layout Structure

The Topbar consists of seven sections.

```
Sidebar Toggle

↓

Page Information

↓

Global Search

↓

Quick Actions

↓

Notifications

↓

User Profile

↓

Utilities
```

---

# Height

Desktop

72px

Tablet

72px

Mobile

64px

The height must remain consistent across all administration pages.

---

# Position

Top Navigation is fixed.

```
Top: 0

Left: Sidebar Width

Right: 0
```

When Sidebar collapses,

Topbar automatically adjusts.

---

# Width

Desktop

Fluid

Tablet

Fluid

Mobile

100%

---

# Background

Background

White

Border Bottom

Light Gray

Shadow

Small

Never use transparent backgrounds.

---

# Sidebar Toggle

Desktop

Visible

Tablet

Visible

Mobile

Visible

Behavior

Desktop

Collapse Sidebar

Tablet

Collapse Sidebar

Mobile

Open Offcanvas Sidebar

Use Bootstrap Button.

---

# Page Information

Display

Current Page

Subtitle

Example

Dashboard

Website Overview

Typography

Title

24px

Subtitle

14px

Muted

---

# Breadcrumb

Display below page title.

Example

Dashboard

/

Content

/

News

Rules

Clickable

Small Typography

Muted Color

Current Page Not Clickable

---

# Global Search

The Topbar contains a universal search.

Search scope

News

Gallery

Programs

Services

Publications

Users

Pages

PPID

Downloads

Settings

Search input width

Desktop

320px

Tablet

240px

Mobile

Hidden

Accessible through Search Icon.

---

# Search Behavior

Search begins after two characters.

Display suggestions.

Maximum

8 results

Grouped by module.

Example

News

Gallery

Users

Programs

PPID

Clicking result redirects directly.

---

# Quick Actions

Position

Right Side

Contains

Create News

Upload Gallery

New Publication

New Program

New Service

Displayed as Bootstrap Dropdown.

---

# Notifications

Notification Bell

Bootstrap Icon

Badge

Unread Count

Dropdown contains

Title

Message

Time

Status

Example

New News Submitted

2 minutes ago

Pending Approval

Unread notifications highlighted.

---

# Notification Categories

Content

System

Security

Updates

Messages

Warnings

Errors

---

# Notification Dropdown

Maximum

10 notifications

Footer

View All Notifications

Scrollable

Bootstrap Dropdown

---

# User Profile

Display

Avatar

Administrator Name

Role

Dropdown Menu

Contains

My Profile

Account Settings

Activity Logs

Change Password

Logout

---

# Avatar

Default

Rounded Circle

Image Size

40px

Fallback

Initial Letter

---

# User Dropdown

Bootstrap Dropdown

Contains

Profile

Settings

Security

Logout

Logout must require CSRF protection.

---

# Utilities

Optional

Dark Mode Toggle

Language Switch

Help

Documentation

Only display features enabled by configuration.

---

# Responsive Behavior

Desktop

All components visible.

Tablet

Search reduced.

Quick Actions collapsed.

Mobile

Sidebar Toggle

Search Icon

Notification

Avatar

Everything else moves into dropdown.

---

# Search Modal

On Mobile

Search opens Bootstrap Modal.

Full Width

Instant Search

Close Button

Keyboard Accessible

---

# Accessibility

Support

Keyboard Navigation

Tab Navigation

ARIA Labels

Screen Readers

Focus Indicators

Color Contrast

Semantic HTML

---

# Icons

Use Bootstrap Icons only.

Examples

Search

bi-search

Notification

bi-bell

Settings

bi-gear

User

bi-person-circle

Logout

bi-box-arrow-right

Dark Mode

bi-moon

Light Mode

bi-sun

---

# Typography

Page Title

24px

Subtitle

14px

Dropdown Item

15px

Notification Title

15px

Notification Time

12px

---

# Colors

Background

White

Primary Action

Bootstrap Primary

Notification Badge

Bootstrap Danger

Muted Text

Bootstrap Secondary

Borders

Bootstrap Border

---

# Dropdown Rules

Dropdowns use Bootstrap.

Animation

150ms

Rounded Corners

12px

Shadow

Medium

Never use custom dropdown implementations.

---

# Loading State

Search

Spinner

Notifications

Placeholder

Avatar

Default Placeholder

---

# Empty State

Notifications

"No notifications available."

Search

"No matching results."

---

# Security

Search results must respect user permissions.

Users must never see inaccessible modules.

Notifications should only include authorized data.

Logout must invalidate session securely.

---

# Performance

Lazy-load notifications.

Lazy-load search suggestions.

Avoid loading unnecessary data during initial page load.

Reuse Blade Components.

---

# Blade Components

Split Top Navigation into reusable components.

Example

```
<x-admin.topbar>

<x-admin.search>

<x-admin.notifications>

<x-admin.quick-actions>

<x-admin.user-menu>

<x-admin.breadcrumb>

<x-admin.page-title>
```

Avoid duplicated markup.

---

# Bootstrap Components

Use

Navbar

Dropdown

Badge

Modal

Tooltip

Buttons

Icons

Spinner

Never replace Bootstrap components with custom JavaScript unless necessary.

---

# Forbidden Practices

Do not use inline CSS.

Do not use inline JavaScript.

Do not duplicate Topbar.

Do not hardcode user information.

Do not expose unauthorized actions.

Do not create page-specific Topbars.

Do not overload the Topbar with unnecessary controls.

---

# Quality Checklist

Before implementation verify:

✓ Fixed Top Navigation

✓ Responsive Layout

✓ Sidebar Toggle

✓ Universal Search

✓ Notification Center

✓ User Dropdown

✓ Accessible Navigation

✓ Bootstrap Components

✓ Reusable Blade Components

✓ Permission-aware rendering

✓ Fast rendering

✓ Government CMS visual consistency

This specification is mandatory for every Administration Top Navigation implementation.