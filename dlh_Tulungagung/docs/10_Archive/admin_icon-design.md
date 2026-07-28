# Icon Design Specification

**Project:** DLH Tulungagung Official Website CMS

**Module:** Administration Icon System

**Version:** 1.0

**Framework:** Laravel 10 + Blade + Bootstrap 5 + Bootstrap Icons

---

# Purpose

This document defines the official icon system for the Administration Panel.

Icons improve navigation, readability, recognition, and usability.

Every icon within the CMS must follow this specification.

Bootstrap Icons are the only approved icon library.

---

# Design Principles

Icons should be

- Simple
- Professional
- Government-oriented
- Minimal
- Consistent
- Recognizable
- Accessible

Icons should support content.

Icons should never become decorative elements.

---

# Approved Icon Library

Only use

Bootstrap Icons

https://icons.getbootstrap.com

No other icon library is allowed.

Forbidden

Font Awesome

Heroicons

Feather

Material Icons

Lucide

Ionicons

Remix Icons

Custom SVG Collections

---

# Icon Style

Use outlined Bootstrap Icons whenever possible.

Filled icons should only be used when emphasizing an important action.

Never mix outline and filled styles within the same navigation group.

---

# Icon Size

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

Icons inside buttons

20px

Sidebar icons

20px

Topbar icons

20px

Dashboard statistic icons

32px

Widget icons

24px

Status icons

16px

Notification icons

20px

---

# Icon Color

Default

Bootstrap Dark

Hover

Bootstrap Primary

Active

Bootstrap Primary

Disabled

Bootstrap Secondary

Danger Actions

Bootstrap Danger

Success Status

Bootstrap Success

Warning Status

Bootstrap Warning

Information

Bootstrap Info

Never hardcode colors.

---

# Dashboard Icons

Dashboard

bi-speedometer2

Analytics

bi-bar-chart

Visitors

bi-graph-up

Statistics

bi-pie-chart

Activity

bi-clock-history

System Status

bi-cpu

Storage

bi-hdd

Performance

bi-speedometer

Quick Actions

bi-lightning

Notifications

bi-bell

Calendar

bi-calendar-event

---

# User Management Icons

Users

bi-people

Administrator

bi-person-badge

Profile

bi-person-circle

Roles

bi-shield

Permissions

bi-key

Login

bi-box-arrow-in-right

Logout

bi-box-arrow-right

Password

bi-lock

Security

bi-shield-lock

Account Settings

bi-person-gear

---

# Content Management Icons

News

bi-newspaper

Category

bi-folder

Article

bi-file-earmark-text

Publication

bi-journal-richtext

Page

bi-file-earmark

Gallery

bi-images

Photo

bi-image

Album

bi-collection

Video

bi-camera-video

Media

bi-camera

---

# Program Icons

Programs

bi-diagram-3

Projects

bi-kanban

Activities

bi-calendar2-event

Environment

bi-tree

Forest

bi-tree-fill

River

bi-water

Waste

bi-recycle

Climate

bi-cloud-sun

Energy

bi-lightbulb

---

# Public Information Icons

PPID

bi-folder2-open

Documents

bi-file-earmark-pdf

Downloads

bi-download

FAQ

bi-question-circle

Public Service

bi-building

Information

bi-info-circle

Transparency

bi-eye

Archive

bi-archive

---

# Communication Icons

Messages

bi-chat-left-text

Inbox

bi-envelope

Email

bi-envelope-paper

Feedback

bi-chat-dots

Contact

bi-telephone

Notifications

bi-bell

Announcement

bi-megaphone

---

# Website Icons

Home

bi-house

Banner

bi-layout-text-window

Menu

bi-list

Navigation

bi-compass

Slider

bi-images

Appearance

bi-palette

Theme

bi-brush

---

# Settings Icons

Settings

bi-gear

General Settings

bi-sliders

Configuration

bi-sliders2

Backup

bi-database

Restore

bi-arrow-clockwise

Cache

bi-lightning-charge

Database

bi-server

Environment

bi-terminal

Maintenance

bi-tools

---

# File Icons

Image

bi-image

PDF

bi-file-earmark-pdf

Word

bi-file-earmark-word

Excel

bi-file-earmark-excel

PowerPoint

bi-file-earmark-ppt

ZIP

bi-file-earmark-zip

Text

bi-file-earmark-text

Generic File

bi-file-earmark

---

# CRUD Action Icons

Create

bi-plus-circle

Edit

bi-pencil-square

Update

bi-arrow-repeat

Delete

bi-trash

View

bi-eye

Preview

bi-eye-fill

Duplicate

bi-files

Archive

bi-archive

Restore

bi-arrow-counterclockwise

Approve

bi-check-circle

Reject

bi-x-circle

Publish

bi-send-check

Unpublish

bi-send-x

Save

bi-floppy

Cancel

bi-x

Refresh

bi-arrow-clockwise

Search

bi-search

Filter

bi-funnel

Export

bi-download

Import

bi-upload

Print

bi-printer

Share

bi-share

---

# Status Icons

Success

bi-check-circle-fill

Warning

bi-exclamation-triangle

Error

bi-x-octagon

Information

bi-info-circle

Pending

bi-hourglass

Draft

bi-pencil

Published

bi-check2-circle

Archived

bi-archive

Hidden

bi-eye-slash

Visible

bi-eye

Locked

bi-lock

Unlocked

bi-unlock

---

# Navigation Icons

Expand

bi-chevron-down

Collapse

bi-chevron-up

Previous

bi-chevron-left

Next

bi-chevron-right

First

bi-chevron-double-left

Last

bi-chevron-double-right

Back

bi-arrow-left

Forward

bi-arrow-right

---

# Form Icons

Upload

bi-upload

Download

bi-download

Attachment

bi-paperclip

Calendar

bi-calendar

Clock

bi-clock

Location

bi-geo-alt

Website

bi-globe

Email

bi-envelope

Phone

bi-telephone

Password

bi-lock

Search

bi-search

Clear

bi-x-circle

---

# Notification Icons

Success

bi-check-circle

Info

bi-info-circle

Warning

bi-exclamation-circle

Danger

bi-x-circle

Announcement

bi-megaphone

Maintenance

bi-tools

---

# Table Icons

Sort

bi-arrow-down-up

Ascending

bi-sort-down

Descending

bi-sort-up

Column

bi-layout-three-columns

Row

bi-layout-text-sidebar

Selection

bi-check-square

---

# Accessibility

Every icon must include

aria-hidden="true"

Decorative icons should not be read by screen readers.

Meaningful icons require accessible labels.

Example

```
<button aria-label="Delete User">

<i class="bi bi-trash"></i>

</button>
```

---

# Responsive Behavior

Desktop

Default Size

Tablet

Default Size

Mobile

Touch Friendly

Minimum Touch Target

44px

Icons must remain aligned.

Icons must never overflow containers.

---

# Performance

Use Bootstrap Icons CDN or local installation.

Avoid SVG duplication.

Do not load multiple icon libraries.

Reuse icon classes.

---

# Blade Components

Icons should be wrapped inside reusable Blade components whenever practical.

Example

<x-admin.icon name="trash" />

<x-admin.icon name="user" />

<x-admin.icon name="news" />

<x-admin.icon name="gallery" />

The component should standardize:

- Size
- Color
- Accessibility
- Alignment

---

# Naming Convention

Use semantic names.

Good Examples

dashboard

user

news

gallery

settings

download

upload

notification

Avoid

icon1

icon2

blue-icon

green-icon

---

# Forbidden Practices

Do not mix icon libraries.

Do not use emojis as interface icons.

Do not use raster images instead of icons.

Do not hardcode icon colors.

Do not use oversized icons.

Do not rotate icons without purpose.

Do not create inconsistent icon styles.

---

# Quality Checklist

Before implementation verify:

✓ Bootstrap Icons Only

✓ Consistent Icon Sizes

✓ Consistent Colors

✓ Semantic Naming

✓ Accessible Icons

✓ Responsive Icons

✓ Proper Alignment

✓ Performance Optimized

✓ Blade Component Ready

✓ Government CMS Visual Consistency

This specification is mandatory for every icon used throughout the Administration Panel.