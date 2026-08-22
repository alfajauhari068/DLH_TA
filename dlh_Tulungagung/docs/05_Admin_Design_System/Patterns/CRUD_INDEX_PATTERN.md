# Table Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Tables

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Vite

---

# Purpose

This document defines the design, behavior, accessibility, and performance standards for every data table used throughout the Administration Panel.

Tables are the primary component for displaying, managing, filtering, and interacting with CMS data.

Every administration module that displays collections of data must follow this specification.

Examples include:

- Users
- Roles
- Permissions
- News
- Categories
- Galleries
- Publications
- Programs
- Services
- PPID Documents
- Downloads
- Contact Messages
- Activity Logs
- Audit Logs

---

# Design Principles

Every table must be:

- Clean
- Readable
- Responsive
- Accessible
- Performant
- Consistent
- Reusable
- Easy to maintain

Large datasets must remain usable without overwhelming the user.

---

# General Layout

Each table page follows this structure.

```
Page Header

↓

Toolbar

↓

Filter Panel

↓

Data Table

↓

Pagination

↓

Footer Information
```

---

# Toolbar

The toolbar appears above every table.

Contains:

- Search
- Filters
- Export
- Refresh
- Bulk Actions
- Create Button

Toolbar items automatically wrap on smaller screens.

---

# Search

Search Field

Width

Desktop

320px

Tablet

240px

Mobile

100%

Supports

Keyword Search

Instant Search (Optional)

Server-side Search

Case Insensitive

Search Placeholder Example

Search news...

Search users...

Search documents...

---

# Filter Panel

Filters appear below the toolbar.

Supports

Category

Status

Author

Role

Date Range

Visibility

Created Date

Updated Date

Publication Status

Advanced Filters should be collapsible.

---

# Data Table

Bootstrap Responsive Table

Required Features

Responsive

Hover

Striped Rows

Sticky Header

Sortable Columns

Pagination

Bulk Selection

Row Actions

Empty State

Loading State

---

# Table Columns

Columns should contain only essential information.

Avoid excessive data.

Examples

Users

Avatar

Name

Email

Role

Status

Created At

Actions

---

News

Thumbnail

Title

Category

Author

Status

Published Date

Actions

---

Programs

Icon

Program Name

Category

Status

Updated At

Actions

---

# Row Height

Minimum

56px

Maximum

80px

Content must remain vertically centered.

---

# Header Row

Background

Light Gray

Font Weight

600

Uppercase

Optional

Sticky

Supported

---

# Column Alignment

Text

Left

Numbers

Right

Status

Center

Actions

Center

Icons

Center

Dates

Center

---

# Sorting

Supported

Ascending

Descending

Default Sort

Newest First

Visual Indicator

Arrow Icon

Sorting must be server-side whenever possible.

---

# Pagination

Use Bootstrap Pagination.

Display

Current Page

Previous

Next

Page Numbers

First

Last

Page Size Selector

Supported Page Sizes

10

25

50

100

Pagination information

Example

Showing 1–10 of 256 records

---

# Bulk Selection

Supports

Select Row

Select Page

Select All

Bulk Actions

Delete

Archive

Restore

Publish

Deactivate

Bulk actions require confirmation.

---

# Row Actions

Every row includes an Action Menu.

Supported Actions

View

Edit

Delete

Publish

Archive

Duplicate

Restore

Preview

Actions appear as

Bootstrap Dropdown

or

Icon Buttons

---

# Status Badges

Status must always be displayed using Bootstrap Badges.

Examples

Published

Draft

Pending

Rejected

Archived

Active

Inactive

Deleted

Featured

---

# Empty State

When no data exists

Display

Illustration/Icon

Title

Description

Primary Action

Example

No News Available

Create your first article.

---

# Loading State

Use Bootstrap Placeholder.

Supports

Rows

Cells

Cards

Toolbar

Pagination

Never display blank tables.

---

# Error State

Display

Error Icon

Description

Retry Button

Example

Unable to load records.

Please try again.

---

# Export

Supported Formats

Excel

CSV

PDF

Print

Export must respect

Current Filters

Current Search

Current Sorting

Current Permissions

---

# Responsive Behavior

Desktop

Full Table

Tablet

Horizontal Scroll

Reduced Column Width

Mobile

Responsive Table

Collapse Less Important Columns

Actions remain accessible.

---

# Mobile Priority

Important Columns

Always Visible

Title

Status

Created Date

Actions

Secondary columns may collapse.

---

# Sticky Header

Supported

Desktop

Tablet

Optional

Mobile

Disabled

---

# Row Hover

Hover Color

Bootstrap Light

Cursor

Pointer (when clickable)

Transition

150ms

---

# Clickable Rows

Optional

When enabled

Entire row navigates to Detail Page.

Action buttons remain independent.

---

# Thumbnail Columns

Images

Rounded Corners

Maximum Width

64px

Lazy Loaded

Broken Image Placeholder

Supported

---

# Date Columns

Display Format

DD MMM YYYY

Example

12 Jul 2026

Time

Optional

Timezone

Configured by Application

---

# Numeric Columns

Align Right

Thousands Separator

Decimal Formatting

Currency Formatting

Where applicable.

---

# Accessibility

Support

Keyboard Navigation

Focus Indicators

ARIA Labels

Screen Readers

Semantic Table Markup

Color Contrast

---

# Performance

Server-side Pagination

Server-side Filtering

Server-side Sorting

Eager Loading

Avoid N+1 Queries

Lazy Load Images

Limit DOM Size

---

# Security

Actions displayed according to Permissions.

Hidden actions do not replace Authorization.

Routes remain protected.

Every destructive action requires confirmation.

---

# Blade Components

Use reusable components.

Examples

<x-admin.table>

<x-admin.table-toolbar>

<x-admin.table-filter>

<x-admin.table-search>

<x-admin.table-pagination>

<x-admin.table-empty>

<x-admin.table-loading>

<x-admin.status-badge>

<x-admin.action-dropdown>

---

# Bootstrap Components

Use

Responsive Table

Dropdown

Pagination

Badge

Buttons

Input Group

Collapse

Spinner

Placeholder

Modal

Tooltip

Avoid replacing Bootstrap functionality.

---

# Forbidden Practices

Do not display unlimited records.

Do not disable pagination.

Do not hardcode status colors.

Do not duplicate table markup.

Do not use inline CSS.

Do not use inline JavaScript.

Do not expose unauthorized actions.

Do not use client-side sorting for very large datasets.

---

# Quality Checklist

Before implementation verify:

✓ Responsive Table

✓ Server-side Pagination

✓ Server-side Search

✓ Server-side Sorting

✓ Filters

✓ Export

✓ Bulk Actions

✓ Permission-aware Actions

✓ Empty State

✓ Loading State

✓ Bootstrap Compliance

✓ Accessible Table

✓ Responsive Layout

✓ Government CMS visual consistency

This specification is mandatory for every Administration Table implementation.