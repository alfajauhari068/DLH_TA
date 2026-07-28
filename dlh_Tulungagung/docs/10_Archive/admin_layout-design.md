# Admin Layout Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Layout

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

This document defines the mandatory layout architecture for the Administration Panel.

The Admin Layout is the foundation of every CMS page.

Every administration page must inherit this layout.

Examples:

- Dashboard
- Users
- Roles
- Permissions
- News
- Categories
- Gallery
- Publications
- Programs
- Services
- PPID
- Downloads
- FAQ
- Contact Messages
- Website Settings
- Profile
- Activity Logs

No page may implement its own layout.

The layout must remain consistent throughout the application.

---

# Layout Hierarchy

The Admin Layout consists of five major regions.

```
Application

│

├── Sidebar

├── Top Navigation

├── Breadcrumb

├── Main Content

└── Footer
```

This hierarchy is mandatory.

---

# HTML Structure

The Blade layout should follow this structure.

```
<html>

<body>

<div class="admin-layout">

    Sidebar

    Main Wrapper

        Top Navigation

        Breadcrumb

        Main Content

        Footer

</div>

</body>

</html>
```

No additional wrappers should be introduced without architectural justification.

---

# Sidebar Position

Desktop

Fixed

Left

Full Height

Scrollable

Never overlaps Top Navigation.

---

Tablet

Collapsible

---

Mobile

Hidden by default.

Displayed as an offcanvas drawer.

---

# Sidebar Width

Desktop

280px

Collapsed

80px

Tablet

280px

Mobile

100%

Maximum

320px

---

# Main Content

Desktop

Fluid

Minimum Width

0

Padding

32px

Maximum Width

None

The content area must automatically fill the remaining viewport.

---

# Top Navigation

Height

72px

Fixed

Top

Z-index above Sidebar

Background

White

Bottom Border

Light Gray

Shadow

Small

---

# Footer

Position

Bottom

Full Width

Padding

24px

Contains

Copyright

Version

Environment

---

# Responsive Breakpoints

Bootstrap Breakpoints

Extra Small

<576px

Small

576px

Medium

768px

Large

992px

Extra Large

1200px

Extra Extra Large

1400px

Do not create custom breakpoints.

---

# Grid System

Use Bootstrap Grid.

Never create custom grid systems.

Desktop

12 Columns

Tablet

12 Columns

Mobile

12 Columns

---

# Container Rules

Always use

container-fluid

inside Main Content.

Avoid nested containers.

---

# Page Structure

Every page follows:

Header

↓

Action Bar

↓

Alerts

↓

Primary Content

↓

Secondary Widgets

↓

Footer

Never change this sequence.

---

# Page Header

Contains

Page Title

Description

Breadcrumb

Primary Actions

Secondary Actions

Example

```
News

Manage all published news articles.

[Create News]

[Export]
```

---

# Content Sections

Large pages should be divided into sections.

Each section uses Bootstrap Cards.

Example

Statistics

News Table

Filters

Pagination

---

# Card Layout

Cards must be used consistently.

Properties

Border Radius

16px

Padding

24px

Shadow

Small

Background

White

Margin Bottom

24px

---

# Sidebar Behavior

Desktop

Always visible.

Tablet

Collapsible.

Mobile

Drawer.

State should persist during the current session.

---

# Navigation Highlight

Current page

Primary color

Current parent

Expanded

Hover

Background change

Icons

Consistent alignment

---

# Scroll Behaviour

Sidebar

Independent scrolling.

Content

Independent scrolling.

Avoid full-page scrolling whenever possible.

---

# Sticky Elements

Top Navigation

Sticky

Breadcrumb

Optional Sticky

Action Bar

Optional Sticky

Footer

Static

---

# Width Rules

Sidebar

Fixed

Content

Fluid

Cards

Responsive

Tables

Responsive

Forms

Responsive

Never use fixed page widths.

---

# White Space

Horizontal Padding

Desktop

32px

Tablet

24px

Mobile

16px

Vertical Spacing

24px

Section Gap

32px

Card Gap

24px

---

# Typography Hierarchy

Page Title

36px

Section Title

24px

Card Title

18px

Paragraph

16px

Small Text

14px

Caption

12px

---

# Background Colors

Application

Light Gray

Sidebar

White

Topbar

White

Content

Very Light Gray

Cards

White

Footer

White

Never use dark backgrounds unless explicitly defined in Theme Specification.

---

# Shadows

Topbar

Small

Cards

Small

Dropdown

Medium

Modal

Large

Avoid excessive shadows.

---

# Borders

Use subtle borders.

Color

Bootstrap Border Color

Avoid heavy outlines.

---

# Responsive Rules

Desktop

Sidebar Fixed

4-column widgets

Large tables

Tablet

Sidebar collapsible

2-column widgets

Scrollable tables

Mobile

Drawer navigation

Single-column layout

Cards stacked vertically

Buttons full width

---

# Overflow Rules

Tables

Horizontal scroll

Cards

No overflow

Sidebar

Scrollable

Topbar

No overflow

Forms

Wrap naturally

---

# Z-Index Order

Modal

Highest

Dropdown

Top

Top Navigation

Above Sidebar

Sidebar

Above Content

Content

Default

---

# Animation

Sidebar

200ms

Dropdown

150ms

Cards

150ms Hover

Buttons

150ms Hover

Avoid long animations.

---

# Loading States

Every page must support:

Loading

Skeleton

Empty

Error

Success

Never leave blank spaces.

---

# Accessibility

Every layout must support:

Keyboard Navigation

Screen Readers

ARIA Labels

Focus Indicators

Color Contrast

Semantic HTML

Heading Hierarchy

---

# Blade Architecture

The layout should be split into reusable components.

Examples

```
layouts/admin.blade.php

components/admin/sidebar.blade.php

components/admin/topbar.blade.php

components/admin/footer.blade.php

components/admin/breadcrumb.blade.php

components/admin/page-header.blade.php
```

Do not duplicate layout code across pages.

---

# Performance

The layout must:

Minimize DOM depth

Avoid duplicated wrappers

Reuse Blade Components

Lazy-load optional widgets

Use Bootstrap utilities before writing custom CSS

Keep HTML semantic and lightweight

---

# Forbidden Practices

Do not create page-specific layouts.

Do not duplicate Sidebar.

Do not duplicate Top Navigation.

Do not use inline CSS.

Do not use inline JavaScript.

Do not hardcode spacing.

Do not hardcode colors.

Do not use nested containers unnecessarily.

Do not build layouts outside this specification.

---

# Quality Checklist

Before implementation verify:

✓ Sidebar fixed and responsive

✓ Top Navigation sticky

✓ Breadcrumb displayed

✓ Footer consistent

✓ Responsive Bootstrap Grid

✓ Fluid content

✓ Proper spacing

✓ Semantic HTML

✓ Accessible navigation

✓ Responsive behavior

✓ Reusable Blade Components

✓ Government CMS visual consistency

This specification is mandatory for every Administration page in the CMS.