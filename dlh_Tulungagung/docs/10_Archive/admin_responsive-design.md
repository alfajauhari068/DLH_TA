# Responsive Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Responsive Design

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

This document defines the responsive behavior of the Administration Panel across all supported devices.

The Administration Panel must provide a consistent experience regardless of screen size while maintaining usability, accessibility, and performance.

Responsive behavior is mandatory for every layout, page, component, table, form, widget, and navigation element.

---

# Responsive Philosophy

The responsive system follows a Desktop-First approach because the CMS is primarily operated from desktop computers within government offices.

However, all administrative functions must remain fully usable on tablets and mobile devices.

The responsive design must prioritize:

- Readability
- Touch accessibility
- Efficient content hierarchy
- Reduced scrolling
- Minimal layout shifts

---

# Supported Devices

Desktop

Large Desktop

Laptop

Tablet Landscape

Tablet Portrait

Mobile Large

Mobile Medium

Mobile Small

The CMS must remain functional on every supported device.

---

# Bootstrap Breakpoints

Extra Small

<576px

Small

≥576px

Medium

≥768px

Large

≥992px

Extra Large

≥1200px

Extra Extra Large

≥1400px

Never introduce custom breakpoints.

---

# Layout Behavior

## Desktop

Sidebar

Expanded

Top Navigation

Fixed

Content

Fluid

Cards

4 Columns

Tables

Full Width

Forms

2 Columns

Widgets

Multiple Columns

---

## Large Desktop

Maximum content width

1600px

Centered

Additional white space should improve readability.

Never stretch components excessively.

---

## Laptop

Sidebar

Expanded

Dashboard Cards

4 Columns

Tables

Responsive

Charts

Visible

---

## Tablet Landscape

Sidebar

Collapsible

Topbar

Fixed

Cards

2 Columns

Tables

Horizontal Scroll

Forms

2 Columns

Charts

Responsive

---

## Tablet Portrait

Sidebar

Collapsed

Drawer Available

Cards

2 Columns

Widgets

Stacked

Forms

Single Column

Tables

Horizontal Scroll

---

## Mobile Large

Sidebar

Offcanvas Drawer

Cards

Single Column

Widgets

Stacked

Buttons

Full Width

Forms

Single Column

Search

Icon Only

---

## Mobile Medium

Navigation

Drawer

Tables

Scrollable

Forms

Vertical

Cards

Stacked

Images

Responsive

Buttons

Touch Friendly

---

## Mobile Small

Everything becomes single-column.

Avoid horizontal scrolling except responsive tables.

Navigation remains accessible.

---

# Sidebar Behavior

Desktop

Always visible.

Tablet

Collapsed by default.

Mobile

Hidden.

Displayed using Bootstrap Offcanvas.

Sidebar width

Desktop

280px

Collapsed

80px

Mobile

100%

Maximum

320px

---

# Top Navigation

Desktop

Full Navigation

Tablet

Reduced Search

Collapsed Quick Actions

Mobile

Search Icon

Notification Icon

Profile

Sidebar Toggle

Everything else moves into dropdown menus.

---

# Dashboard Cards

Desktop

4 Columns

Tablet

2 Columns

Mobile

1 Column

Cards should always have equal height.

---

# Widgets

Desktop

Multiple widgets per row.

Tablet

2 Widgets per row.

Mobile

Single Widget.

Widgets must never overflow.

---

# Tables

Desktop

Full Width

Sticky Header

Tablet

Horizontal Scroll

Responsive Table

Mobile

Responsive Container

Hidden Low Priority Columns

Sticky Action Column

Optional

---

# Forms

Desktop

Two-column layout.

Tablet

Adaptive Grid

Mobile

Single-column layout.

Every input

100% Width

---

# Buttons

Desktop

Auto Width

Tablet

Auto Width

Mobile

Full Width

Minimum Height

48px

Minimum Touch Area

44px

---

# Typography

Desktop

Display

40px

Title

32px

Body

16px

Tablet

Display

36px

Title

28px

Body

16px

Mobile

Display

30px

Title

24px

Body

15px

Small Text

13px

Never reduce readability.

---

# Images

Responsive

Required

Max Width

100%

Height

Auto

Lazy Loading

Required

Preview

Responsive

---

# Icons

Desktop

24px

Tablet

22px

Mobile

20px

Touch Icons

Minimum

44px touch target

---

# Modals

Desktop

Bootstrap Default

Tablet

Large

Responsive

Mobile

Full Width

Scrollable

Maximum Height

90vh

---

# Dropdown

Desktop

Standard

Tablet

Responsive

Mobile

Full Width

Large Touch Targets

---

# Search

Desktop

Input Field

Tablet

Reduced Width

Mobile

Search Icon

Bootstrap Modal

Instant Search

---

# Notification Center

Desktop

Dropdown

Tablet

Dropdown

Mobile

Fullscreen Modal (Optional)

Scrollable

---

# Pagination

Desktop

Complete Navigation

Tablet

Compact

Mobile

Previous

Current

Next

Page Selector

Hidden

---

# Breadcrumb

Desktop

Visible

Tablet

Visible

Mobile

Hidden when necessary

Page Title remains visible.

---

# Footer

Desktop

Horizontal Layout

Tablet

Responsive

Mobile

Stacked Layout

Centered Content

---

# Empty States

Responsive

Required

Illustration scales automatically.

Text remains readable.

Action buttons become full width on mobile.

---

# Loading States

Bootstrap Placeholder

Responsive

Cards

Tables

Widgets

Forms

Maintain layout stability.

---

# Accessibility

Support

Keyboard Navigation

Touch Navigation

Screen Readers

ARIA Labels

Semantic HTML

Color Contrast

Focus Indicators

Touch Target

Minimum 44px

---

# Orientation

Landscape

Supported

Portrait

Supported

Do not lock orientation.

---

# Performance

Avoid unnecessary JavaScript.

Avoid layout reflow.

Use responsive images.

Lazy-load images.

Lazy-load widgets.

Limit DOM depth.

Reuse Blade Components.

Optimize Bootstrap utilities.

---

# CSS Guidelines

Prefer Bootstrap Responsive Utilities.

Examples

d-none

d-lg-block

d-md-flex

col-lg-3

col-md-6

col-12

Avoid writing custom media queries unless Bootstrap utilities cannot solve the requirement.

---

# Responsive Utilities

Recommended Bootstrap Classes

container-fluid

row

col

gx

gy

d-flex

flex-column

flex-row

justify-content-between

align-items-center

order

gap

w-100

h-100

img-fluid

table-responsive

offcanvas

collapse

---

# Testing Requirements

Every page must be tested on

Desktop

1920px

1600px

1440px

1366px

Laptop

1280px

Tablet

1024px

768px

Mobile

576px

480px

390px

360px

320px

Landscape

Portrait

No visual regressions are acceptable.

---

# Performance Requirements

Largest Contentful Paint

Optimized

Layout Shift

Minimal

Responsive Images

Required

Lazy Loading

Required

Bootstrap Utilities

Preferred

Minimal Custom CSS

Required

---

# Forbidden Practices

Do not use fixed widths.

Do not use fixed heights unless necessary.

Do not disable responsive behavior.

Do not create separate mobile pages.

Do not hide important functionality on mobile.

Do not introduce horizontal scrolling except responsive tables.

Do not reduce touch targets below 44px.

Do not create inconsistent layouts across modules.

---

# Quality Checklist

Before implementation verify:

✓ Bootstrap Responsive Grid

✓ Sidebar Drawer

✓ Responsive Navigation

✓ Responsive Dashboard

✓ Responsive Tables

✓ Responsive Forms

✓ Responsive Buttons

✓ Responsive Images

✓ Accessible Touch Targets

✓ Mobile Search

✓ Tablet Compatibility

✓ Large Desktop Compatibility

✓ Government CMS visual consistency

This specification is mandatory for every Administration interface within the CMS.