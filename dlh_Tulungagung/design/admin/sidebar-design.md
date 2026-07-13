# Sidebar Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Sidebar

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5

---

# Purpose

The Sidebar is the primary navigation component of the Administration Panel.

Its purpose is to provide fast, intuitive, and structured access to every CMS module while maintaining consistency across the application.

The Sidebar must remain identical on every administration page.

No page may implement its own sidebar.

---

# Design Principles

The sidebar must be:

- Clean
- Professional
- Government-oriented
- Minimalist
- Responsive
- Accessible
- Modular
- Easy to navigate
- Easy to maintain

Navigation depth should remain shallow.

Users should reach any module with no more than three clicks.

---

# Sidebar Layout

Desktop

Fixed Left Sidebar

Tablet

Collapsible Sidebar

Mobile

Offcanvas Drawer

Sidebar occupies the full viewport height.

---

# Sidebar Width

Expanded

280px

Collapsed

80px

Mobile Drawer

100%

Maximum Width

320px

---

# Sidebar Sections

The sidebar consists of five major areas.

```
Brand

↓

User Information

↓

Search

↓

Navigation Menu

↓

Footer
```

---

# Brand Area

Located at the top.

Contains:

Logo

Website Name

System Name

Example

DLH Tulungagung

Content Management System

Clicking the logo always redirects to Dashboard.

---

# User Information

Display:

Avatar

Administrator Name

Role

Online Status

Example

Administrator

Super Admin

Online

---

# Search

Sidebar contains a quick navigation search.

Search scope:

Dashboard

Users

News

Gallery

Programs

Services

PPID

Pages

Settings

Search filters navigation only.

It does not search content.

---

# Navigation Structure

The navigation hierarchy is mandatory.

```
Dashboard

Content Management

    News

    Categories

    Gallery

    Publications

    Programs

    Services

    Pages

Public Information

    PPID

    Downloads

    FAQ

Website

    Menus

    Banners

    Website Settings

Users

    Administrators

    Roles

    Permissions

Communication

    Contact Messages

    Feedback

System

    Activity Logs

    Audit Logs

    Cache

    Maintenance

Profile

Logout
```

---

# Menu Levels

Maximum

Three Levels

Example

```
Content

    News

        Categories

        Tags
```

Never exceed three nesting levels.

---

# Icons

Every navigation item must include one Bootstrap Icon.

Examples

Dashboard

bi-speedometer2

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

Pages

bi-file-earmark-text

PPID

bi-folder

Downloads

bi-download

Settings

bi-gear

Logs

bi-clock-history

Profile

bi-person-circle

Logout

bi-box-arrow-right

Icons must be aligned consistently.

---

# Active State

Current page

Primary Background

Primary Text Color

Current parent

Expanded

Current child

Highlighted

Only one page remains active.

---

# Hover State

On hover:

Background becomes slightly darker.

Text changes to Primary Color.

Icon changes together with text.

Transition

150ms

---

# Collapsed Mode

Desktop supports collapsing.

Collapsed Sidebar displays:

Icons only

Tooltip on hover

Expanded on click

State persists during current session.

---

# Mobile Drawer

Mobile devices use Bootstrap Offcanvas.

Requirements

Slide from left

Overlay background

Close button

Swipe-friendly

Close when navigation item selected

---

# Menu Groups

Every section has a title.

Example

CONTENT

PUBLIC INFORMATION

SYSTEM

Titles use:

Uppercase

Small font

Muted color

No icons

---

# Notification Badges

Menu items may display badges.

Examples

Pending News

12

Unread Messages

5

PPID Requests

8

Badge Color

Bootstrap Danger

Bootstrap Warning

Bootstrap Success

---

# Scroll Behaviour

Sidebar scrolls independently.

Header remains fixed.

Footer remains fixed.

Navigation scrolls.

---

# Sidebar Footer

Contains

System Version

Environment

Copyright

Example

CMS Version 1.0

Laravel 10

Environment Production

---

# Permissions

Sidebar items are rendered according to user permissions.

Example

Editor

Dashboard

News

Gallery

Profile

Administrator

All menus

Guests never see the Sidebar.

---

# Responsive Behaviour

Desktop

Expanded Sidebar

Tablet

Collapsible Sidebar

Mobile

Offcanvas Drawer

Never hide navigation completely.

---

# Accessibility

Support

Keyboard Navigation

Arrow Keys

Tab Navigation

ARIA Labels

Screen Readers

Focus Indicators

Color Contrast

---

# Search Behaviour

Typing filters menu items instantly.

Search does not reload the page.

Search is case-insensitive.

Search highlights matching navigation items.

---

# Animation

Expand

200ms

Collapse

200ms

Dropdown

150ms

Hover

150ms

Avoid excessive animations.

---

# Empty State

If a navigation group contains no items due to permissions,

display nothing.

Do not show empty groups.

---

# Blade Components

Sidebar must be composed using reusable components.

Example

```
<x-admin.sidebar>

<x-admin.sidebar-brand>

<x-admin.sidebar-user>

<x-admin.sidebar-search>

<x-admin.sidebar-group>

<x-admin.sidebar-item>

<x-admin.sidebar-footer>
```

Never duplicate sidebar code.

---

# Bootstrap Components

Use:

Accordion

Collapse

Offcanvas

Tooltip

Badge

Dropdown

Scrollbar Utilities

Bootstrap Icons

Avoid custom JavaScript whenever Bootstrap already provides the functionality.

---

# Performance

Navigation should:

Render quickly

Reuse Blade Components

Avoid duplicate DOM

Avoid nested unnecessary wrappers

Load only visible dropdown content

---

# Security

Menu visibility must never replace authorization.

Hidden menu items do not grant or deny access.

Every route must still be protected by:

Policies

Middleware

Permissions

Guards

---

# Forbidden Practices

Do not use inline CSS.

Do not use inline JavaScript.

Do not hardcode colors.

Do not duplicate navigation.

Do not exceed three navigation levels.

Do not mix navigation groups.

Do not render unauthorized menu items.

Do not create page-specific sidebars.

---

# Quality Checklist

Before implementation verify:

✓ Fixed desktop sidebar

✓ Responsive drawer

✓ Bootstrap Offcanvas

✓ Navigation search

✓ Active menu highlighting

✓ Icons aligned

✓ Permission-aware rendering

✓ Accessible navigation

✓ Responsive layout

✓ Consistent spacing

✓ Reusable Blade Components

✓ Government CMS visual consistency

This specification is mandatory for every Administration Sidebar implementation.