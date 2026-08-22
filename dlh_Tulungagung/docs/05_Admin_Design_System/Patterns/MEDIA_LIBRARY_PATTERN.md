# Theme Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Theme System

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

This document defines the official visual identity for the Administration Panel.

Every page, component, form, table, widget, modal, notification, and layout must follow this theme specification.

This document serves as the single source of truth for all visual styling across the CMS.

No custom visual styles should be introduced without updating this specification.

---

# Design Philosophy

The Administration Panel should reflect:

- Professionalism
- Simplicity
- Government Identity
- Consistency
- Accessibility
- Scalability
- Maintainability

The interface must prioritize readability over decoration.

Visual hierarchy should guide users naturally.

---

# Theme Style

The administration interface follows a modern government dashboard style.

Characteristics

- Clean
- Bright
- Spacious
- Neutral
- Professional
- Minimalist

Avoid decorative UI elements.

Avoid unnecessary gradients.

Avoid excessive shadows.

---

# Color Palette

## Primary

Purpose

Primary actions

Links

Highlights

Selected menu

Buttons

Recommended

Bootstrap Primary

---

## Secondary

Purpose

Supporting information

Secondary buttons

Muted UI

Bootstrap Secondary

---

## Success

Purpose

Successful operations

Published

Approved

Completed

Bootstrap Success

---

## Danger

Purpose

Delete

Errors

Critical alerts

Failed operations

Bootstrap Danger

---

## Warning

Purpose

Pending

Incomplete

Attention

Bootstrap Warning

---

## Info

Purpose

Information

Help

Documentation

Bootstrap Info

---

## Light

Purpose

Cards

Panels

Forms

Containers

Bootstrap Light

---

## Dark

Purpose

Typography

Icons

Navigation text

Bootstrap Dark

Avoid dark backgrounds.

---

# Background Colors

Application Background

Very Light Gray

Cards

White

Sidebar

White

Top Navigation

White

Modal

White

Dropdown

White

Tables

White

Forms

White

Footer

White

Maintain strong visual separation using spacing rather than colors.

---

# Typography

## Font Family

Primary

Bootstrap Default Stack

Recommended

System UI

Fallback

Sans-serif

Never mix font families.

---

# Font Weight

Light

300

Regular

400

Medium

500

Semi Bold

600

Bold

700

Extra Bold

800

---

# Typography Scale

Display

40px

Page Title

32px

Section Title

24px

Card Title

20px

Body

16px

Small Text

14px

Caption

12px

Never use font sizes below 12px.

---

# Line Height

Heading

1.3

Body

1.6

Table

1.5

Forms

1.5

Maintain readable spacing.

---

# Border Radius

Cards

16px

Buttons

12px

Inputs

12px

Dropdown

12px

Modal

16px

Badges

50px

Avatar

50%

Maintain consistent rounded corners.

---

# Border Style

Border Width

1px

Border Color

Bootstrap Border Color

Avoid heavy borders.

---

# Shadow System

Small

Cards

Topbar

Dropdown

Medium

Modal

Popover

Large

Only for overlays

Avoid excessive elevation.

---

# Spacing System

Base Unit

8px

Spacing Scale

4px

8px

16px

24px

32px

40px

48px

64px

Never introduce arbitrary spacing values.

---

# Layout Spacing

Sidebar Padding

24px

Content Padding

32px

Card Padding

24px

Section Gap

32px

Widget Gap

24px

Form Gap

24px

Table Gap

24px

---

# Iconography

Use Bootstrap Icons exclusively.

Icons should remain:

Consistent

Simple

Filled or outlined consistently

Never mix icon libraries.

---

# Icon Sizes

Small

16px

Default

20px

Medium

24px

Large

32px

Extra Large

48px

---

# Buttons

Standard Height

48px

Border Radius

12px

Icon Gap

8px

Padding

16px 24px

States

Default

Hover

Focus

Active

Disabled

Loading

---

# Cards

Background

White

Padding

24px

Radius

16px

Border

Light Gray

Shadow

Small

Transition

150ms

---

# Tables

Header

Light Gray

Row Height

56px

Hover

Light Background

Border

Subtle

Actions

Right Aligned

---

# Forms

Input Height

48px

Label Margin

8px

Input Radius

12px

Error Message

Below Input

Help Text

Muted

Required Fields

Red Asterisk

---

# Modals

Radius

16px

Header

Bold

Footer

Action Buttons

Maximum Width

Bootstrap Default Sizes

Animation

Fade

---

# Alerts

Use Bootstrap Alerts.

Types

Success

Info

Warning

Danger

Dismissible

Optional

---

# Badges

Use Bootstrap Badges.

Status colors must remain consistent across the application.

Never create custom badge colors.

---

# Dropdown

Radius

12px

Shadow

Small

Padding

8px

Hover

Bootstrap Light

---

# Navigation

Sidebar

White

Active Menu

Primary

Hover

Light Background

Top Navigation

White

Border Bottom

Light Gray

---

# Images

Rounded Corners

12px

Responsive

Required

Lazy Loaded

Required

Broken Image Placeholder

Required

---

# Animations

Duration

150ms

Sidebar

200ms

Collapse

200ms

Modal

Bootstrap Default

Dropdown

Bootstrap Default

Avoid long animations.

---

# Responsive Design

Desktop

Complete Layout

Tablet

Adaptive Layout

Mobile

Single Column

Touch Friendly

Minimum Touch Target

44px

---

# Accessibility

Support

Keyboard Navigation

Screen Readers

ARIA Labels

Semantic HTML

Focus Indicators

Color Contrast

Visible Focus Ring

Never rely on color alone.

---

# Dark Theme

Currently Disabled.

The architecture should allow future implementation without changing components.

Use Bootstrap variables whenever possible.

Avoid hardcoded colors.

---

# CSS Guidelines

Prefer Bootstrap Utility Classes.

Custom CSS should only be written when Bootstrap utilities cannot satisfy the requirement.

Never override Bootstrap globally unless documented.

---

# CSS Variable Naming

Example

--admin-primary

--admin-secondary

--admin-success

--admin-warning

--admin-danger

--admin-radius

--admin-shadow

--admin-spacing

Variables should remain semantic.

---

# Branding

Government Logo

Top Left

Website Name

Visible

System Name

Visible

No decorative branding elements.

Branding should remain formal.

---

# Visual Consistency

Every page should visually feel like part of the same application.

Spacing

Typography

Colors

Buttons

Forms

Tables

Cards

Navigation

must remain identical across all modules.

---

# Performance

Minimize custom CSS.

Reuse Bootstrap classes.

Reuse Blade Components.

Avoid duplicated styling.

Use CSS variables for future scalability.

---

# Forbidden Practices

Do not hardcode colors.

Do not mix icon libraries.

Do not use multiple font families.

Do not use inconsistent spacing.

Do not use random border radius.

Do not create page-specific themes.

Do not use excessive shadows.

Do not use gradient backgrounds.

Do not use glassmorphism.

Do not use neumorphism.

Do not use skeuomorphic design.

---

# Quality Checklist

Before implementation verify:

✓ Bootstrap Design Language

✓ Consistent Colors

✓ Consistent Typography

✓ Consistent Spacing

✓ Consistent Border Radius

✓ Responsive Layout

✓ Accessible Interface

✓ Government Branding

✓ Reusable Components

✓ CSS Variable Ready

✓ Bootstrap Utility First

✓ Modern Government Dashboard Appearance

This specification is mandatory for every Administration interface within the CMS.