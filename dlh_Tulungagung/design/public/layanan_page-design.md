# Layanan Page Design Specification
## Dinas Lingkungan Hidup Kabupaten Tulungagung

Version : 1.0

Document Type :
Frontend Design Specification

Target Platform

- Desktop Web
- Tablet
- Mobile Web
- Android Browser
- Progressive Web Application (PWA)

Design Language

Eco-Gov Modern

Framework Target

- React
- Next.js
- TailwindCSS
- Shadcn UI
- Framer Motion

---

# 1. Overview

## Purpose

The Layanan (Public Services) page serves as the primary digital service information hub for the Department of Environment of Tulungagung Regency (Dinas Lingkungan Hidup Kabupaten Tulungagung).

This page introduces the public to the department's services, explains digital service procedures, communicates official commitments toward service excellence, and encourages citizens to utilize digital government services through a transparent, trustworthy, and highly accessible interface.

Unlike traditional government service pages that often rely on dense text and complex navigation, this page transforms public service information into a structured, visually engaging, and easy-to-understand experience.

The overall experience should reduce confusion, increase public trust, and simplify government service procedures.

This page is intended for all citizens regardless of age or technical ability.

Every interaction should feel modern, calm, trustworthy, and effortless.

---

# 2. Design Philosophy

The visual identity follows the "Eco-Gov Modern" design language.

Eco-Gov Modern combines five core principles:

• Environmental Identity

Natural colors, organic spacing, rounded surfaces, and documentary photography communicate environmental awareness and sustainability.

The interface should subtly remind users that every service is part of environmental preservation.

---

• Modern Digital Government

The interface should resemble premium digital government portals rather than conventional bureaucratic websites.

The experience should feel:

- organized
- intelligent
- transparent
- responsive
- efficient

Every section should guide users through services without unnecessary complexity.

---

• Professional Minimalism

The design avoids visual clutter.

Every component must have a clear purpose.

Decorative elements should be minimal.

Whitespace becomes an important design element that improves readability and creates a premium institutional appearance.

---

• Transparency

Transparency is one of the page's strongest visual messages.

Procedures are displayed step-by-step.

Official commitments are prominently displayed.

Service promises are visually separated from informational content.

Visual hierarchy reinforces openness rather than authority.

---

• Human-Centered Design

Every layout decision prioritizes ease of understanding.

Citizens should never wonder:

"What should I do next?"

The page itself should naturally guide users through the service process.

---

# 3. Design Goals

The page must accomplish the following objectives.

## Goal 01

Introduce available public services.

Users should immediately understand what services are offered.

---

## Goal 02

Explain service procedures visually.

Complex government procedures should become simple visual workflows.

---

## Goal 03

Increase institutional trust.

Official commitment statements and service guarantees should reassure users that services are transparent and accountable.

---

## Goal 04

Encourage digital service adoption.

The page should motivate users to complete services digitally whenever possible.

---

## Goal 05

Reduce cognitive load.

Information should be grouped into digestible sections instead of long paragraphs.

---

## Goal 06

Provide excellent mobile usability.

Most users are expected to access the website through Android smartphones.

The mobile experience is considered equally important as the desktop experience.

---

# 4. User Experience Principles

Every section of the page should follow these UX principles.

## Clarity

Information should never overwhelm users.

Content should be grouped into logical sections.

Each section must answer a single question.

Example:

"What services exist?"

"How does the procedure work?"

"What does DLH promise?"

"What should users do next?"

---

## Predictability

Interactive elements should behave consistently.

Buttons should always appear clickable.

Cards should always respond to hover.

Icons should communicate expected actions.

---

## Simplicity

Avoid unnecessary visual complexity.

Users should understand each section within five seconds.

---

## Trustworthiness

The interface should resemble an official government website.

Visual consistency is essential.

Typography should be clean.

Spacing should be generous.

Animations should remain subtle.

---

## Accessibility

The interface should remain readable for elderly users.

Font sizes should never become excessively small.

Interactive components should remain large enough for touch interaction.

---

# 5. Overall Page Structure

The page is organized into the following visual sections.

1.
Fixed Navigation

↓

2.
Hero Banner

↓

3.
Public Service Introduction

↓

4.
Digital Service Procedure

↓

5.
Detailed Procedure Explanation

↓

6.
Maklumat Pelayanan
(Service Commitment)

↓

7.
Support Banner

↓

8.
Footer

Each section represents one chapter of the user journey.

Transitions between sections should feel natural.

---

# 6. Layout System

The page uses a centered container.

Maximum width

1280px

The page should never stretch content beyond this width.

Very large monitors should continue displaying centered content.

Content should not become excessively wide.

---

Container Padding

Desktop

64px

Laptop

56px

Tablet

40px

Mobile

20px

Small Mobile

16px

Content should never touch the browser edges.

---

Maximum Text Width

Paragraphs should not exceed

760px

Long paragraphs should remain readable.

---

Section Padding

Desktop

96px

Tablet

80px

Mobile

64px

Small Mobile

56px

The page should feel spacious rather than dense.

---

# 7. Grid System

Desktop

12-column grid

24px gutter

Tablet

8-column grid

20px gutter

Mobile

4-column grid

16px gutter

All major components should align with the grid.

No component should appear visually disconnected.

---

# 8. Responsive Design Strategy

Desktop First

The desktop layout serves as the primary reference.

Tablet and mobile layouts progressively simplify the presentation.

No content should disappear unless explicitly specified.

Instead, layouts should stack vertically.

---

Desktop

Horizontal layouts

Large imagery

Wide spacing

Hover interactions

---

Tablet

Reduced spacing

Two-column layouts where appropriate

Smaller typography

Simplified hero

---

Mobile

Single-column layout

Vertical stacking

Timeline layout

Larger touch targets

Reduced animation intensity

Smaller hero height

Optimized spacing

---

# 9. Spacing System

The interface follows an 8-point spacing system.

Available spacing values

4px

8px

12px

16px

24px

32px

40px

48px

56px

64px

80px

96px

128px

Spacing values outside this system should not be used.

---

Section Gap

96px

---

Component Gap

48px

---

Card Internal Padding

48px

Tablet

36px

Mobile

24px

---

Button Padding

Vertical

16px

Horizontal

32px

---

Input Padding

16px

---

Icon Spacing

12px

---

Badge Padding

Vertical

8px

Horizontal

16px

---

# 10. Color System

The page follows the official DLH branding palette.

## Primary Green

HEX

#006C49

Purpose

Primary actions

Icons

Success indicators

Navigation highlights

Timeline indicators

---

## Secondary Blue

HEX

#006591

Purpose

Primary CTA

Support Banner

Buttons

Links

Footer emphasis

---

## Accent Gold

HEX

#F59E0B

Purpose

Quality badges

Official seals

Recognition labels

Achievement indicators

---

## Background

HEX

#F8F9FF

Used for the overall page background.

Provides a clean institutional appearance.

---

## Surface

HEX

#FFFFFF

Default background for all cards and containers.

---

## Secondary Surface

HEX

#EFF4FF

Used for the Maklumat Pelayanan section.

Creates visual separation from other content.

---

## Border Color

HEX

#DCE5F1

Used for

Cards

Input fields

Timelines

Dividers

Outlined buttons

---

## Primary Text

HEX

#0B1C30

Used for

Main headings

Large typography

Important labels

---

## Secondary Text

HEX

#3C4A42

Used for

Descriptions

Paragraphs

Supporting content

Metadata

---

## Disabled Text

HEX

#94A3B8

Used for

Inactive labels

Placeholder text

Disabled buttons

---

## Success

HEX

#16A34A

Used only for successful service indicators.

---

## Warning

HEX

#F59E0B

Used sparingly for notices.

---

## Error

HEX

#DC2626

Used only for validation errors.

---

# 11. Typography System

Heading Font

Manrope

Characteristics

Modern

Professional

Bold

Highly readable

Excellent for government branding

Used exclusively for:

Hero titles

Section headings

Card titles

Timeline numbers

CTA headings

---

Body Font

Hanken Grotesk

Characteristics

Neutral

Friendly

Readable

Contemporary

Optimized for long-form reading

Used for:

Paragraphs

Descriptions

Lists

Labels

Buttons

Metadata

Captions


# 11. Typography System (Continued)

## Typography Philosophy

Typography is one of the most important visual elements of the DLH Tulungagung digital ecosystem.

The typography system should communicate professionalism, authority, clarity, and friendliness simultaneously.

The hierarchy must remain obvious even when viewed from small mobile devices.

Typography should never appear decorative.

Every text element must have a functional purpose.

Headings should create strong visual anchors while body text should maximize reading comfort.

Text should always be left aligned except within hero sections, centered call-to-action banners, and official statement cards.

Avoid fully justified paragraphs.

---

## Font Family

### Primary Heading Font

Font Family

```
Manrope
```

Fallback

```
sans-serif
```

Usage

- Hero titles
- Section titles
- Card titles
- Timeline step numbers
- CTA headings
- Important numerical values

Characteristics

- Modern
- Bold
- Professional
- High readability
- Premium government appearance

---

### Body Font

Font Family

```
Hanken Grotesk
```

Fallback

```
sans-serif
```

Usage

- Paragraphs
- Descriptions
- Labels
- Metadata
- Lists
- Buttons
- Navigation
- Form text
- Footer text

Characteristics

- Neutral
- Friendly
- Excellent readability
- Comfortable for long reading sessions

---

# 12. Typography Scale

The entire interface follows a consistent typography scale.

Do not introduce arbitrary font sizes.

Always use the predefined scale below.

---

## Hero Heading

Desktop

```
48px
```

Weight

```
800
```

Line Height

```
120%
```

Letter Spacing

```
-0.03em
```

Maximum Width

```
720px
```

Tablet

```
40px
```

Mobile

```
30px
```

Small Mobile

```
28px
```

---

## Section Heading

Desktop

```
32px
```

Weight

```
700
```

Line Height

```
120%
```

Tablet

```
28px
```

Mobile

```
24px
```

---

## Card Heading

Desktop

```
24px
```

Weight

```
600
```

Line Height

```
130%
```

Tablet

```
22px
```

Mobile

```
20px
```

---

## Sub Heading

Desktop

```
20px
```

Weight

```
600
```

Tablet

```
18px
```

Mobile

```
18px
```

---

## Large Paragraph

Desktop

```
18px
```

Weight

```
400
```

Line Height

```
170%
```

Mobile

```
16px
```

---

## Standard Paragraph

Desktop

```
16px
```

Weight

```
400
```

Line Height

```
160%
```

Tablet

```
16px
```

Mobile

```
15px
```

---

## Small Text

Desktop

```
14px
```

Weight

```
400
```

Line Height

```
150%
```

---

## Caption

Desktop

```
13px
```

Weight

```
500
```

Used for

- Helper text
- Metadata
- Image captions
- Supporting descriptions

---

## Badge Text

Desktop

```
13px
```

Weight

```
700
```

Uppercase

Enabled

Letter Spacing

```
0.08em
```

---

## Button Text

Desktop

```
16px
```

Weight

```
600
```

Letter spacing should remain normal.

---

# 13. Font Weight Rules

The following weights should be consistently applied.

300

Reserved only for decorative typography.

Rarely used.

---

400

Default body text.

---

500

Metadata

Labels

Secondary information

---

600

Buttons

Subtitles

Card headings

---

700

Section headings

Navigation active state

Timeline numbers

---

800

Hero titles

Major announcements

Important promotional text

---

# 14. Line Height System

Hero

```
120%
```

Heading

```
120%
```

Card Title

```
130%
```

Body

```
160%
```

Long Paragraph

```
170%
```

Caption

```
150%
```

Button

```
100%
```

---

# 15. Border Radius System

The interface uses soft rounded corners throughout.

Rounded corners reinforce approachability and modernity.

Never use sharp corners.

---

Extra Small

```
4px
```

Small icons

Tiny badges

---

Small

```
8px
```

Inputs

Small buttons

Tags

---

Medium

```
12px
```

Cards

Dropdowns

Menus

---

Large

```
24px
```

Image containers

Timeline cards

Glass cards

---

Extra Large

```
32px
```

CTA banners

Maklumat cards

Large promotional sections

---

Fully Rounded

```
9999px
```

Buttons

Circular icons

Profile avatars

Timeline indicators

---

# 16. Elevation System

Elevation communicates importance.

Higher elevation indicates higher interaction priority.

Avoid excessive shadows.

---

Shadow XS

```
0 1px 2px rgba(0,0,0,.05)
```

Used for

Small controls

---

Shadow Small

```
0 4px 12px rgba(0,0,0,.06)
```

Used for

Buttons

Small cards

---

Shadow Medium

```
0 10px 30px rgba(0,0,0,.08)
```

Used for

Information cards

Timeline blocks

Content containers

---

Shadow Large

```
0 20px 60px rgba(0,0,0,.10)
```

Used for

Hero cards

Maklumat Pelayanan

CTA banner

---

Shadow Hover

```
0 30px 70px rgba(0,0,0,.12)
```

Applied only during hover animations.

---

# 17. Glassmorphism Specification

Glassmorphism should be used sparingly.

Only premium institutional components should receive this treatment.

Examples

- Maklumat Pelayanan
- Official Commitment Card
- Floating information cards

Glass Background

```
rgba(255,255,255,.70)
```

Backdrop Blur

```
20px
```

Border

```
1px solid rgba(255,255,255,.45)
```

Shadow

Large elevation

Corner Radius

```
32px
```

Opacity should never reduce text readability.

---

# 18. Design Tokens

The implementation should centralize every reusable value.

Define tokens for

Colors

Typography

Spacing

Radius

Shadow

Opacity

Animation

Breakpoints

Transitions

Do not hardcode values repeatedly throughout the project.

Every reusable value should reference a design token.

---

# 19. Component Density

The page should feel spacious.

Avoid crowded layouts.

Every card should contain generous internal spacing.

Whitespace is considered an active design element.

Sections should breathe.

Never compress content simply to reduce scrolling.

Long pages are preferable to dense pages.

---

# 20. Visual Consistency Rules

Every section must follow identical alignment principles.

Cards should align vertically.

Buttons should share identical heights.

Icons should use the same stroke width.

Rounded corners must remain consistent.

Padding values should follow the spacing system.

Typography hierarchy should never change unexpectedly.

Visual rhythm should remain consistent from the first section to the footer.

No section should appear to belong to a different design system.

---

# 21. Accessibility Standards

The interface must comply with WCAG AA guidelines.

Minimum text contrast ratio

```
4.5 : 1
```

Large heading contrast

```
3 : 1
```

Interactive elements must have visible focus indicators.

Keyboard navigation must remain fully functional.

All buttons require accessible labels.

All images require descriptive alt text.

Icons should never be the only method of conveying information.

Color alone should never indicate status.

Touch targets should remain at least

```
48px
```

in height and width.

---

# 22. Global Responsive Rules

Desktop layouts should gracefully collapse into tablet layouts.

Tablet layouts should transition into vertical mobile layouts.

No horizontal scrolling is permitted.

Images must scale proportionally.

Typography should reduce gradually using responsive sizing.

Cards should occupy full container width on mobile while maintaining internal padding.

Animations should reduce intensity on lower-powered devices.

---

# 23. Performance Guidelines

Prioritize rendering performance.

Images should use lazy loading except for the hero banner.

Animation should rely exclusively on:

- opacity
- transform

Avoid animating layout properties such as:

- top
- left
- width
- height

Optimize image assets using modern formats when available.

Minimize unnecessary DOM nesting.

Ensure the page remains smooth on mid-range Android devices.

---

# 24. Global Animation Principles

Animations should support user understanding rather than decoration.

Every animation should communicate:

- appearance
- transition
- emphasis
- interaction

Avoid distracting motion.

Animation timing should remain consistent across the page.

Use easing functions that feel natural.

Motion should reinforce hierarchy rather than compete with content.

---

# 25. Copilot Agent Global Implementation Rules

The implementation generated by GitHub Copilot Agent must strictly follow this specification.

Do not reinterpret spacing values.

Do not substitute colors.

Do not introduce additional UI patterns.

Do not replace the prescribed typography.

Do not invent new component styles.

Maintain consistent responsiveness across all supported breakpoints.

Every component should be implemented as reusable and modular.

Prefer CSS Grid for structural layouts.

Prefer Flexbox for internal component alignment.

Store reusable design values as centralized design tokens.

Ensure that every visual detail in this specification is faithfully translated into production-ready frontend code without simplification or stylistic deviation.


# 2A. Navigation Architecture

## Navigation Overview

The Navigation component serves as the global entry point for the entire DLH Tulungagung website and remains visible throughout the user's interaction with the Layanan page.

Its primary purpose is to provide immediate access to the main sections of the website while reinforcing the institutional identity of Dinas Lingkungan Hidup Kabupaten Tulungagung.

The navigation should appear lightweight, modern, and premium while maintaining the visual authority expected from an official government institution.

Unlike conventional government websites that rely on heavy headers and dense menu structures, this navigation adopts a minimalist approach with generous spacing, glassmorphism, and subtle animations.

The navigation must always remain easy to understand regardless of screen size.

---

# Navigation Objectives

The navigation has five primary objectives.

## Objective 01

Provide persistent access to the main website sections.

---

## Objective 02

Clearly communicate the user's current location within the website.

---

## Objective 03

Promote digital public services through a highly visible primary action button.

---

## Objective 04

Maintain visibility while scrolling without occupying excessive screen space.

---

## Objective 05

Provide an identical navigation experience across desktop, tablet, and mobile devices.

---

# Navigation Position

The navigation must remain fixed at the top of the viewport.

CSS

```
position: fixed;
top: 0;
left: 0;
width: 100%;
z-index: 1000;
```

The header should always stay above every page section.

No content should overlap the navigation.

---

# Navigation Height

Desktop

```
80px
```

Laptop

```
76px
```

Tablet

```
72px
```

Mobile

```
68px
```

Small Mobile

```
64px
```

The height reduction should occur smoothly across breakpoints without affecting internal alignment.

---

# Navigation Width

The navigation spans the full browser width.

Internal content remains constrained inside the global container.

Container Width

```
1280px
```

Horizontal Padding

Desktop

```
64px
```

Laptop

```
56px
```

Tablet

```
40px
```

Mobile

```
20px
```

Small Mobile

```
16px
```

---

# Navigation Background

The navigation should never appear visually heavy.

It should feel as though it gently floats above the page.

Background Color

```
rgba(255,255,255,0.70)
```

Backdrop Filter

```
blur(20px)
```

Saturation

```
180%
```

Border Bottom

```
1px solid rgba(220,229,241,.75)
```

Shadow

Initially

```
none
```

After scrolling

```
0 10px 30px rgba(0,0,0,.08)
```

---

# Sticky Navigation Behavior

When the page first loads, the navigation should feel almost transparent.

As users scroll downward, it gradually becomes more solid.

Top of Page

Opacity

```
70%
```

Background Blur

```
20px
```

Shadow

```
none
```

---

After Scroll

Opacity

```
95%
```

Shadow

Medium

Border

Visible

---

Transition Duration

```
300ms
```

Timing Function

```
ease
```

The transition should never feel abrupt.

---

# Navigation Layout

Desktop Layout

```
---------------------------------------------------------

Logo

Navigation Links

Primary CTA

---------------------------------------------------------
```

The layout consists of three horizontal regions.

## Left Region

Institution Logo

Department Name

---

## Center Region

Navigation Menu

---

## Right Region

Primary Button

---

The vertical alignment of every component must remain perfectly centered.

---

# Logo Component

The logo serves as the institutional identity.

It should never dominate the interface.

Logo Height

Desktop

```
48px
```

Tablet

```
44px
```

Mobile

```
40px
```

Logo Width

Auto

Maintain original aspect ratio.

Never stretch the image.

---

# Logo Text

Displayed beside the logo.

Primary Line

```
DINAS LINGKUNGAN HIDUP
```

Secondary Line

```
Kabupaten Tulungagung
```

Primary Line

Font

Manrope

Weight

700

Size

```
18px
```

Secondary Line

Font

Hanken Grotesk

Weight

500

Size

```
13px
```

Color

Muted Text

---

# Navigation Menu

The menu is horizontally centered.

Items

- Home
- About
- Services
- News
- Gallery
- Contact

Spacing Between Items

Desktop

```
40px
```

Laptop

```
32px
```

Tablet

```
28px
```

---

Font

Hanken Grotesk

Weight

600

Desktop

```
16px
```

Tablet

```
15px
```

Color

Primary Text

---

# Active Navigation Item

The current page is

```
Services
```

The active item should be immediately recognizable.

Visual Treatment

Text Color

Primary Green

Underline

```
2px
```

Underline Width

```
100%
```

Border Radius

```
999px
```

Transition

```
250ms
```

Hover should never remove the active indication.

---

# Navigation Hover State

Hover Text Color

Primary Green

Underline Animation

Scale

```
0 → 100%
```

Duration

```
250ms
```

Timing

```
ease-out
```

Hover should feel responsive but subtle.

No exaggerated movement.

---

# Primary CTA Button

Located on the far right.

Label

```
Public Services
```

Purpose

Provide immediate access to online public services.

Background

Secondary Blue

```
#006591
```

Text

White

Radius

```
999px
```

Padding

Vertical

```
14px
```

Horizontal

```
30px
```

Minimum Height

```
48px
```

---

Button Hover

Background

Darken

```
10%
```

Transform

```
translateY(-2px)
```

Shadow

Medium

Transition

```
200ms
```

---

Button Active

Transform

```
translateY(0)
```

Duration

```
120ms
```

---

Button Focus

Outline

```
2px solid #006C49
```

Offset

```
4px
```

Keyboard users should clearly identify focus.

---

# Navigation Accessibility

Every navigation item must be keyboard accessible.

Use semantic HTML.

```
<nav>
```

Navigation links

```
<a>
```

Current page

```
aria-current="page"
```

Logo

Provide descriptive alternative text.

Buttons

Require accessible labels.

Tab navigation must follow visual order.

No navigation item should become inaccessible on touch devices.

---

# Responsive Navigation

## Desktop

Display

Horizontal

Logo visible

Navigation links visible

CTA visible

---

## Tablet

Logo visible

Navigation compressed

Reduced spacing

CTA remains visible

---

## Mobile

Replace navigation links with a hamburger menu.

Display

Logo

Hamburger

The CTA moves inside the mobile drawer.

No horizontal scrolling is permitted.

---

# Mobile Navigation Drawer

The drawer should slide from the right.

Width

```
320px
```

Maximum Width

```
90vw
```

Height

```
100vh
```

Background

White

Shadow

Large

Internal Padding

```
32px
```

Menu Items

Displayed vertically.

Spacing

```
24px
```

Bottom Section

Contains

Primary CTA

Contact Information

Quick Links

---

# Mobile Drawer Animation

Opening

TranslateX

```
100%
↓

0%
```

Opacity

```
0

↓

1
```

Duration

```
300ms
```

Closing

Reverse animation.

Overlay

```
rgba(0,0,0,.35)
```

Clicking outside the drawer should close it.

Pressing the Escape key should also close it.

---

# Navigation Implementation Rules

GitHub Copilot Agent shall implement the navigation as a reusable standalone component.

Requirements:

- Use semantic `<header>` and `<nav>` elements.
- Implement the sticky behavior using scroll listeners or Intersection Observer.
- Use CSS variables or design tokens for colors, spacing, and typography.
- Maintain identical spacing across all pages.
- Ensure navigation animations use only `opacity` and `transform`.
- Avoid layout shifts during scroll.
- Maintain consistent z-index hierarchy across overlays, drawers, and dialogs.
- The navigation component must be reusable without page-specific modifications.


# 2B. Hero Section Architecture

## Hero Section Purpose

The Hero Section is the visual gateway to the Public Services page.

Its responsibility is not merely to display a title, but to immediately establish confidence in the digital public services offered by Dinas Lingkungan Hidup Kabupaten Tulungagung.

The Hero Section must create a strong first impression by combining environmental imagery with clear institutional messaging.

The visual experience should communicate professionalism, transparency, accessibility, and environmental responsibility within the first few seconds after the page loads.

The Hero Section should occupy the entire width of the viewport while maintaining alignment with the global content container.

It should naturally encourage users to continue scrolling toward the service procedures presented below.

---

# Hero Objectives

The Hero Section must achieve the following objectives.

## Objective 01

Introduce the Public Services page.

---

## Objective 02

Establish institutional credibility.

---

## Objective 03

Immediately communicate that services are modern and digitally accessible.

---

## Objective 04

Provide a visually engaging transition into the service workflow.

---

## Objective 05

Encourage downward scrolling through subtle visual guidance.

---

# Hero Layout

The Hero Section spans the full viewport width.

Desktop Height

```
450px
```

Laptop Height

```
420px
```

Tablet Height

```
380px
```

Mobile Height

```
320px
```

Small Mobile

```
300px
```

The Hero should never exceed 500px in height.

The section must remain visually balanced regardless of screen size.

---

# Hero Structure

```
Hero Section

│
├── Background Image
│
├── Dark Overlay
│
├── Gradient Overlay
│
├── Content Container
│   ├── Badge
│   ├── Heading
│   ├── Description
│   └── Primary CTA
│
└── Scroll Indicator
```

Every element should remain layered using absolute positioning while preserving readability.

---

# Hero Background Image

The Hero background must use authentic documentary-style photography.

Recommended imagery includes:

• Public service counters

• Citizens interacting with DLH officers

• Environmental field activities

• Modern government offices

• Green landscapes representing environmental stewardship

Photography should appear natural.

Avoid stock-photo aesthetics whenever possible.

The image must evoke trust rather than marketing.

---

# Image Treatment

Object Fit

```
cover
```

Object Position

```
center center
```

Background Repeat

```
no-repeat
```

Background Size

```
cover
```

The image must completely fill the Hero container without distortion.

---

# Background Quality

Minimum Resolution

```
1920 × 1080
```

Preferred Resolution

```
2560 × 1440
```

Use responsive image loading where available.

The Hero image should remain sharp on Retina and high-density displays.

---

# Hero Overlay

A dark overlay is required to ensure text readability.

Overlay Color

```
rgba(0,0,0,.40)
```

Opacity should remain constant across breakpoints.

Do not reduce opacity below 35%.

Do not exceed 50%.

---

# Gradient Overlay

A secondary gradient overlay should subtly improve depth perception.

Gradient

```
Top

rgba(0,0,0,.15)

↓

Bottom

rgba(0,0,0,.55)
```

This gradient ensures that lower content remains readable while preserving image visibility.

---

# Hero Content Container

The content container should remain vertically and horizontally centered.

Maximum Width

```
760px
```

Text Alignment

Desktop

```
center
```

Tablet

```
center
```

Mobile

```
center
```

Horizontal Padding

Desktop

```
64px
```

Tablet

```
40px
```

Mobile

```
20px
```

---

# Hero Badge

A small badge should appear above the main heading.

Purpose

Indicate the digital nature of the services.

Label

```
DIGITAL PUBLIC SERVICES
```

Background

```
rgba(255,255,255,.18)
```

Border

```
1px solid rgba(255,255,255,.30)
```

Backdrop Blur

```
12px
```

Border Radius

```
999px
```

Padding

Vertical

```
8px
```

Horizontal

```
18px
```

Typography

Font

Hanken Grotesk

Weight

700

Size

```
13px
```

Letter Spacing

```
0.08em
```

Text Transform

```
uppercase
```

Text Color

White

---

# Hero Heading

The Hero heading serves as the strongest visual anchor on the page.

Example

```
Public Services for a Cleaner and Sustainable Tulungagung
```

Font

Manrope

Weight

```
800
```

Desktop Size

```
48px
```

Tablet

```
40px
```

Mobile

```
30px
```

Maximum Width

```
720px
```

Color

White

Line Height

```
120%
```

Letter Spacing

```
-0.03em
```

---

# Hero Description

Positioned below the heading.

Purpose

Briefly explain the availability of digital environmental services.

Maximum Width

```
640px
```

Desktop Size

```
18px
```

Tablet

```
17px
```

Mobile

```
16px
```

Weight

```
400
```

Color

```
rgba(255,255,255,.92)
```

Line Height

```
170%
```

The description should remain concise.

Avoid more than three lines on desktop.

---

# Hero Primary CTA

A prominent button should appear below the description.

Label

```
Explore Public Services
```

Background

Secondary Blue

```
#006591
```

Text Color

White

Minimum Height

```
52px
```

Horizontal Padding

```
34px
```

Border Radius

```
999px
```

Font

Hanken Grotesk

Weight

```
600
```

Font Size

```
16px
```

Icon

Optional right-arrow icon.

Spacing Between Icon and Text

```
10px
```

---

# Hero CTA Hover

Background

Darken by

```
10%
```

Transform

```
translateY(-2px)
```

Shadow

Large

Transition Duration

```
200ms
```

---

# Hero CTA Active

Transform

```
translateY(0)
```

Transition

```
120ms
```

---

# Hero Content Spacing

Badge → Heading

```
20px
```

Heading → Description

```
24px
```

Description → CTA

```
32px
```

These spacing values should remain consistent across breakpoints with proportional scaling.

---

# Scroll Indicator

A subtle scroll indicator should appear at the bottom center of the Hero.

Purpose

Encourage users to continue exploring the page.

Style

Outlined circular icon containing a downward arrow.

Diameter

```
44px
```

Border

```
1px solid rgba(255,255,255,.40)
```

Icon Color

White

Background

```
rgba(255,255,255,.10)
```

Backdrop Blur

```
8px
```

Animation

Vertical floating motion.

TranslateY

```
0px

↓

8px

↓

0px
```

Duration

```
2.2s
```

Repeat

Infinite

Timing

```
ease-in-out
```

---

# Hero Responsive Behavior

Desktop

All content centered with generous whitespace.

Tablet

Reduce heading size and Hero height while preserving hierarchy.

Mobile

Reduce Hero height.

Stack content vertically.

Maintain readable typography.

Preserve horizontal padding.

The CTA should span the natural width of its content rather than full width.

---

# Hero Accessibility

The Hero heading must use semantic

```
<h1>
```

The descriptive paragraph should use

```
<p>
```

Buttons must include descriptive

```
aria-label
```

The Hero image should include meaningful alternative text if rendered as an image element.

Text contrast must satisfy WCAG AA requirements.

No essential information may exist only within the background image.

The Hero must remain fully readable even if the image fails to load.


# 2C. Hero Animation System, Interaction Behavior, Performance, and Implementation Rules

## Hero Motion Philosophy

Motion within the Hero Section should reinforce hierarchy, improve orientation, and guide user attention.

Animations must never become decorative distractions.

Every movement should have a clear functional purpose.

The Hero animation sequence should communicate that the page is modern, responsive, and professionally designed while preserving the calm visual identity of a government institution.

Animations should feel smooth, elegant, and lightweight.

Avoid exaggerated scaling, excessive bouncing, or rapid transitions.

The overall experience should remain professional rather than promotional.

---

# Hero Initial Loading Sequence

The Hero Section should animate only once when the page first becomes visible.

Animations should occur sequentially.

Animation Order

```
Background Image

↓

Overlay

↓

Badge

↓

Heading

↓

Description

↓

Primary CTA

↓

Scroll Indicator
```

This staggered sequence naturally directs user attention from the highest visual priority to the next available action.

---

# Background Image Animation

The Hero background should fade in smoothly.

Initial State

```
Opacity
0
```

Final State

```
Opacity
1
```

Duration

```
900ms
```

Timing Function

```
ease-out
```

No scaling animation should be applied to the background image.

The image should remain stable after loading.

---

# Overlay Animation

The overlay should appear simultaneously with the background.

Animation

Opacity

```
0

↓

1
```

Duration

```
900ms
```

Timing

```
ease-out
```

---

# Hero Badge Animation

Initial State

```
Opacity
0

TranslateY
24px
```

Final State

```
Opacity
1

TranslateY
0
```

Duration

```
600ms
```

Delay

```
200ms
```

Timing

```
ease-out
```

---

# Hero Heading Animation

The Hero heading should receive the strongest entrance animation.

Initial State

```
Opacity
0

TranslateY
32px
```

Final State

```
Opacity
1

TranslateY
0
```

Duration

```
700ms
```

Delay

```
300ms
```

Timing

```
ease-out
```

---

# Hero Description Animation

Initial State

```
Opacity
0

TranslateY
24px
```

Final State

```
Opacity
1

TranslateY
0
```

Duration

```
650ms
```

Delay

```
450ms
```

---

# Hero CTA Animation

Initial State

```
Opacity
0

TranslateY
20px
```

Final State

```
Opacity
1

TranslateY
0
```

Duration

```
600ms
```

Delay

```
600ms
```

---

# Scroll Indicator Animation

The scroll indicator should appear after all primary Hero content.

Initial State

```
Opacity
0
```

Final State

```
Opacity
1
```

Duration

```
500ms
```

Delay

```
850ms
```

---

Continuous Floating Animation

TranslateY

```
0px

↓

8px

↓

0px
```

Duration

```
2200ms
```

Repeat

```
Infinite
```

Timing

```
ease-in-out
```

This animation should pause automatically when the Hero is no longer visible within the viewport.

---

# Hover Interactions

## Badge Hover

The badge is informational only.

No hover animation should be applied.

Cursor

```
default
```

---

## Hero Heading

No hover interaction.

Typography should remain static.

---

## Hero Description

No hover interaction.

---

## Primary CTA Hover

Background

Darken by

```
10%
```

Transform

```
translateY(-2px)
```

Scale

```
1.02
```

Shadow

```
0 16px 40px rgba(0,0,0,.18)
```

Duration

```
200ms
```

Timing

```
ease-out
```

---

## Primary CTA Active

Transform

```
translateY(0)

scale(.98)
```

Duration

```
120ms
```

---

## Primary CTA Focus

Outline

```
2px solid #006C49
```

Outline Offset

```
4px
```

Keyboard focus must remain clearly visible.

---

# Scroll Interaction

The Hero should respond subtly to page scrolling.

When the user begins scrolling,

the Hero content may gradually reduce opacity while remaining readable until it exits the viewport.

Maximum Fade

```
Opacity

1

↓

0.90
```

Maximum Vertical Translation

```
0px

↓

20px
```

Do not implement aggressive parallax effects.

The Hero should maintain stability.

---

# Reduced Motion Support

Users with reduced-motion preferences should receive simplified animations.

Use

```
prefers-reduced-motion
```

When enabled

Disable

- floating animation
- translate animations
- staggered animations

Keep only

```
opacity fade
```

Duration

```
200ms
```

---

# Loading State

If Hero assets require loading,

display a lightweight skeleton.

Skeleton Height

Equal to Hero height.

Background

```
#EFF4FF
```

Animated Gradient

Very subtle.

No spinner should appear.

The Hero should load progressively.

---

# Error State

If the Hero background image fails to load,

replace it with a branded gradient.

Gradient

```
#006C49

↓

#006591
```

The Hero content must remain fully functional.

No layout shift should occur.

---

# Responsive Hero Behavior

## Desktop

Content centered vertically and horizontally.

Background fully visible.

Hero occupies approximately 450px height.

---

## Laptop

Reduce typography proportionally.

Reduce internal spacing slightly.

Maintain identical alignment.

---

## Tablet

Reduce Hero height.

Maintain centered layout.

Decrease heading width.

Reduce button padding proportionally.

---

## Mobile

Hero height

```
320px
```

Typography scales down according to the typography system.

Description wraps naturally.

CTA remains centered.

The Hero should never feel overcrowded.

---

## Small Mobile

Hero height

```
300px
```

Reduce vertical spacing between elements.

Maintain minimum touch target sizes.

Prevent text overflow.

---

# Accessibility Requirements

The Hero Section must satisfy WCAG AA compliance.

Requirements

• Heading must use a semantic

```
<h1>
```

• Description must use

```
<p>
```

• CTA must use

```
<button>
```

or semantic

```
<a>
```

when functioning as navigation.

• Every interactive element must remain keyboard accessible.

• Focus indicators must never be removed.

• Text contrast must remain at least

```
4.5 : 1
```

• Decorative background images must not contain essential information.

• Screen readers should announce Hero content in logical order.

---

# Performance Optimization

Optimize Hero rendering to ensure fast initial page load.

Requirements

Use responsive image sources.

Enable lazy loading for non-critical assets.

Do not lazy load the Hero background if it is above the fold.

Compress images using modern formats such as

```
WebP

or

AVIF
```

Avoid unnecessary DOM nesting.

Avoid JavaScript-driven animations where CSS can achieve the same result.

Animations should use only

```
opacity

transform
```

Avoid animating

- width
- height
- top
- left
- margin

to prevent layout recalculations.

---

# Component Reusability

The Hero Section must be implemented as a reusable component.

It should accept configurable properties including:

• background image

• badge text

• title

• description

• CTA label

• CTA destination

• overlay opacity

• gradient colors

• Hero height

No values should be hardcoded unless explicitly defined by the design system.

---

# GitHub Copilot Agent Implementation Rules

GitHub Copilot Agent shall implement the Hero Section according to the following requirements.

1.

Use semantic HTML structure.

```
<section>

↓

<div>

↓

header content
```

---

2.

Separate presentation from logic.

Animation logic should remain independent of content.

---

3.

Store reusable values using centralized design tokens.

---

4.

Implement all animations using CSS transitions or Framer Motion.

---

5.

Avoid fixed pixel positioning except where explicitly specified.

---

6.

Maintain pixel-perfect alignment with the global grid system.

---

7.

Ensure Hero responsiveness across:

• Desktop

• Laptop

• Tablet

• Mobile

• Small Mobile

without requiring page-specific overrides.

---

8.

Prevent cumulative layout shift (CLS).

Reserve Hero height before image loading.

---

9.

Optimize Largest Contentful Paint (LCP) by prioritizing Hero assets.

---

10.

Ensure the Hero Section can be reused by other pages with different content while preserving identical layout, spacing, animation, and interaction behavior.

---

# Hero Acceptance Criteria

The Hero Section implementation shall be considered complete only if all of the following conditions are satisfied.

✓ Fully responsive across all supported breakpoints.

✓ Pixel-consistent with the design system.

✓ WCAG AA compliant.

✓ Uses centralized design tokens.

✓ Implements all specified animations.

✓ Maintains consistent spacing.

✓ Preserves typography hierarchy.

✓ No horizontal scrolling.

✓ No layout shifts during loading.

✓ Optimized for Android devices.

✓ Fully reusable.

✓ Compatible with React, Next.js, TailwindCSS, Shadcn UI, and Framer Motion.

The Hero Section should provide a modern, trustworthy, and premium digital government experience while remaining simple, accessible, and easy to maintain.


# 3A. Public Service Introduction Section

## Section Overview

The Public Service Introduction Section serves as the first informational block immediately following the Hero Section.

This section transitions users from the emotional impact of the Hero into practical information regarding the public services offered by Dinas Lingkungan Hidup Kabupaten Tulungagung.

Unlike the Hero Section, which emphasizes institutional branding and trust, this section introduces the core purpose of the services in a structured, informative, and approachable manner.

The objective is to reassure visitors that the department has modernized its service delivery through digital transformation while maintaining transparency, accountability, and ease of access.

This section acts as the bridge between visual storytelling and procedural guidance.

It prepares users for the service workflow presented in the following section.

---

# Section Objectives

The Public Service Introduction Section must accomplish the following objectives.

## Objective 01

Introduce the overall concept of digital public services.

---

## Objective 02

Communicate that environmental public services are transparent, efficient, and citizen-oriented.

---

## Objective 03

Reduce uncertainty before users begin reading the procedural timeline.

---

## Objective 04

Establish confidence that all service processes follow standardized procedures.

---

## Objective 05

Create a natural transition between the Hero Section and the Service Procedure Timeline.

---

# Section Position

This section appears immediately below the Hero Section.

Overall Flow

Navigation

↓

Hero Banner

↓

Public Service Introduction

↓

Digital Service Procedure

↓

Detailed Procedure

↓

Service Commitment

↓

Support Banner

↓

Footer

The spacing between the Hero Section and the Public Service Introduction should preserve a strong visual rhythm.

Desktop

```
96px
```

Tablet

```
80px
```

Mobile

```
64px
```

---

# Section Container

The section uses the global layout container.

Maximum Width

```
1280px
```

Content Width

```
1120px
```

Maximum Text Width

```
760px
```

Horizontal Alignment

Centered

---

# Layout Structure

Desktop Layout

```
--------------------------------------------------------

Section Badge

Section Heading

Section Description

Feature Cards

--------------------------------------------------------
```

The section follows a single-column vertical hierarchy.

The layout should feel calm, spacious, and easy to scan.

---

# Vertical Structure

```
Badge

↓

Heading

↓

Description

↓

Feature Cards

↓

Bottom Spacing
```

Each element should have generous vertical spacing.

---

# Section Background

Background Color

```
#F8F9FF
```

The background should remain clean and neutral.

No decorative illustrations should be used.

The emphasis should remain on content clarity.

---

# Section Badge

Purpose

The badge introduces the section topic.

Example Label

```
PUBLIC SERVICE CENTER
```

Visual Style

Background

```
rgba(0,108,73,.08)
```

Text Color

Primary Green

Border

```
1px solid rgba(0,108,73,.15)
```

Padding

Vertical

```
8px
```

Horizontal

```
18px
```

Border Radius

```
999px
```

Font

Hanken Grotesk

Weight

```
700
```

Size

```
13px
```

Letter Spacing

```
0.08em
```

Uppercase

Enabled

The badge should align with the center of the content.

---

# Section Heading

Purpose

Clearly introduce the service ecosystem.

Example

```
Providing Transparent and Accessible Environmental Services
```

Font Family

Manrope

Weight

```
700
```

Desktop

```
32px
```

Tablet

```
28px
```

Mobile

```
24px
```

Color

Primary Text

Maximum Width

```
720px
```

Line Height

```
120%
```

Letter Spacing

```
-0.02em
```

Text Alignment

Centered

---

# Section Description

Purpose

Provide a concise explanation of the digital services offered.

The description should reassure users that every service follows standardized procedures designed to improve efficiency and public satisfaction.

Maximum Width

```
760px
```

Font

Hanken Grotesk

Weight

```
400
```

Desktop Size

```
18px
```

Tablet

```
17px
```

Mobile

```
16px
```

Line Height

```
170%
```

Color

Secondary Text

Text Alignment

Centered

The description should not exceed four lines on desktop screens.

---

# Content Width Rules

Badge

Natural Width

Heading

Maximum

```
720px
```

Description

Maximum

```
760px
```

Cards

100% Container Width

The visual hierarchy should naturally draw the user's attention downward.

---

# Internal Spacing

Badge

↓

Heading

```
20px
```

Heading

↓

Description

```
24px
```

Description

↓

Feature Cards

```
48px
```

Bottom Padding

Desktop

```
96px
```

Tablet

```
80px
```

Mobile

```
64px
```

---

# Feature Card Overview

The section concludes with a group of feature cards highlighting the key values of the public service system.

Each card communicates one core principle.

Recommended Items

• Transparent Process

• Digital Service

• Fast Response

• Environmental Responsibility

The cards should immediately communicate institutional strengths before users continue into the procedural timeline.

---

# Feature Card Layout

Desktop

```
4 Cards

Horizontal Grid

Equal Width
```

Tablet

```
2 × 2 Grid
```

Mobile

```
Single Column
```

Every card should maintain equal height within the same row.

---

# Card Dimensions

Minimum Height

```
220px
```

Maximum Width

Responsive

Border Radius

```
24px
```

Internal Padding

```
32px
```

Background

White

Shadow

Medium

Border

```
1px solid #DCE5F1
```

Cards should appear elevated but lightweight.

---

# Card Content Structure

```
Icon

↓

Title

↓

Description
```

All content should remain vertically aligned.

---

# Icon Container

Shape

Circle

Diameter

```
72px
```

Background

```
rgba(0,108,73,.08)
```

Border

```
1px solid rgba(0,108,73,.12)
```

Icon Color

Primary Green

Icon Size

```
32px
```

The icon should visually reinforce the service principle represented by the card.

---

# Card Title

Font

Manrope

Weight

```
600
```

Desktop

```
22px
```

Tablet

```
20px
```

Mobile

```
18px
```

Color

Primary Text

---

# Card Description

Font

Hanken Grotesk

Weight

```
400
```

Desktop

```
16px
```

Mobile

```
15px
```

Line Height

```
160%
```

Color

Secondary Text

The description should remain concise and easily scannable.

---

# Hover Behavior

On hover, each card should:

Transform

```
translateY(-6px)
```

Increase shadow from Medium to Large.

The icon container should scale to

```
1.08
```

Duration

```
250ms
```

Timing

```
ease-out
```

Cards should never rotate or bounce.

---

# Responsive Rules

Desktop

Four-column layout.

Tablet

Two-column grid with balanced spacing.

Mobile

Single-column layout.

Cards should occupy the full available width while maintaining

```
20px
```

horizontal page margins.

No horizontal scrolling is permitted.

---

# Accessibility

Each card should be implemented using semantic HTML.

Icons must include accessible labels if interactive.

Text contrast must comply with WCAG AA.

Cards should remain fully readable when zoomed to 200%.

Keyboard focus must be visible if cards contain links.

---

# Copilot Agent Implementation Notes

The Public Service Introduction Section should be implemented as a reusable component.

All spacing, typography, colors, shadows, and border radii must reference centralized design tokens.

The feature cards should be generated from structured data rather than hardcoded markup to simplify future maintenance.

The layout must preserve consistent visual rhythm across all supported breakpoints without requiring page-specific overrides.


# 3B-1. Digital Service Procedure Timeline

## Section Overview

The Digital Service Procedure Timeline is the core functional component of the Public Services page.

Unlike the introductory section that focuses on institutional communication, this section is responsible for explaining the actual public service workflow through a structured visual process.

Government procedures are often perceived as complicated and difficult to understand.

The objective of this section is to transform those procedures into a highly readable sequence of clearly defined steps.

Every stage should answer a single question.

"What happens next?"

Users should immediately understand the complete service journey by scanning the timeline without reading every paragraph.

The visual presentation should reduce uncertainty while increasing confidence in the digital public service process.

This section represents the primary educational component of the page.

---

# Design Objectives

The Digital Service Procedure Timeline has several design objectives.

## Objective 01

Transform complex administrative procedures into an intuitive visual workflow.

---

## Objective 02

Reduce cognitive load through progressive disclosure.

---

## Objective 03

Increase user confidence by presenting a transparent service process.

---

## Objective 04

Encourage citizens to complete services digitally.

---

## Objective 05

Maintain excellent readability across desktop, tablet, and Android devices.

---

# Section Placement

The Digital Service Procedure Timeline appears immediately after the Public Service Introduction Section.

Overall Page Flow

```
Hero

↓

Public Service Introduction

↓

Digital Service Procedure Timeline

↓

Detailed Procedure Explanation

↓

Service Commitment

↓

Support Banner
```

Vertical spacing from the previous section

Desktop

```
96px
```

Tablet

```
80px
```

Mobile

```
64px
```

---

# Section Container

Maximum Width

```
1280px
```

Timeline Content Width

```
1160px
```

Content Alignment

Centered

Overflow

```
hidden
```

Horizontal Scrolling

```
Not Allowed
```

---

# Section Background

Background Color

```
#FFFFFF
```

The white background provides maximum contrast with the timeline components.

Decorative graphics should not be added.

The timeline itself is the primary visual element.

---

# Section Badge

Purpose

Introduce the procedural content.

Example Label

```
DIGITAL SERVICE PROCEDURE
```

Background

```
rgba(0,108,73,.08)
```

Text Color

Primary Green

Border

```
1px solid rgba(0,108,73,.16)
```

Padding

Vertical

```
8px
```

Horizontal

```
18px
```

Border Radius

```
999px
```

Typography

Font

Hanken Grotesk

Weight

```
700
```

Size

```
13px
```

Letter Spacing

```
0.08em
```

Text Transform

Uppercase

Alignment

Center

---

# Section Heading

Purpose

Clearly communicate that users are viewing the official service workflow.

Example

```
How Our Digital Public Services Work
```

Font

Manrope

Weight

```
700
```

Desktop

```
32px
```

Tablet

```
28px
```

Mobile

```
24px
```

Maximum Width

```
760px
```

Color

Primary Text

Text Alignment

Center

---

# Section Description

Purpose

Provide a brief explanation of the standardized service workflow.

Example

"Every public service follows a transparent digital process designed to ensure efficiency, accountability, and excellent citizen experience."

Maximum Width

```
760px
```

Typography

Hanken Grotesk

Weight

```
400
```

Desktop

```
18px
```

Tablet

```
17px
```

Mobile

```
16px
```

Color

Secondary Text

Line Height

```
170%
```

Text Alignment

Center

---

# Timeline Layout

Desktop

```
------------------------------------------------------------

01 ----- 02 ----- 03 ----- 04 ----- 05

------------------------------------------------------------
```

Every step occupies equal horizontal space.

The visual rhythm should remain perfectly balanced.

No step should appear visually dominant.

---

Tablet Layout

```
01 ----- 02

03 ----- 04

05
```

The final step should remain horizontally centered.

---

Mobile Layout

```
01

│

02

│

03

│

04

│

05
```

The timeline transforms into a vertical process.

Vertical scrolling replaces horizontal progression.

This significantly improves usability on Android devices.

---

# Timeline Grid

Desktop

```
display:grid;

grid-template-columns:

repeat(5,1fr);
```

Gap

```
32px
```

Tablet

```
repeat(2,1fr)
```

Gap

```
28px
```

Mobile

```
1 Column
```

Gap

```
24px
```

---

# Timeline Step Order

The process should always remain sequential.

Step 01

Service Selection

↓

Step 02

Document Submission

↓

Step 03

Administrative Verification

↓

Step 04

Field Review or Processing

↓

Step 05

Service Completion

No alternative visual ordering is permitted.

---

# Timeline Connector

Purpose

Visually reinforce the sequential nature of the workflow.

Desktop

Horizontal Dashed Line

Tablet

Horizontal Connectors

Mobile

Vertical Dashed Line

---

Connector Style

Stroke Width

```
2px
```

Style

Dashed

Color

```
#CBD5E1
```

Dash Pattern

```
8px

Gap

8px
```

The connector should remain subtle.

It should never compete with the step cards.

---

# Connector Alignment

Desktop

The connector passes through the exact vertical center of every step indicator.

Tablet

Each row maintains independent connectors.

Mobile

The connector begins beneath the circular indicator and ends above the next indicator.

Spacing should remain visually equal.

---

# Connector Animation

When the section enters the viewport,

the connector gradually reveals itself.

Animation

ScaleX

Desktop

```
0

↓

1
```

ScaleY

Mobile

```
0

↓

1
```

Duration

```
900ms
```

Timing

```
ease-out
```

Delay

```
150ms
```

The connector should finish animating before the step cards appear.

---

# Step Indicator

Every timeline stage begins with a circular indicator.

Purpose

Represent one completed procedural milestone.

Diameter

Desktop

```
80px
```

Tablet

```
72px
```

Mobile

```
64px
```

Background

White

Border

```
2px solid #006C49
```

Shadow

Small

Display

Centered

The indicator remains perfectly circular across every breakpoint.

---

# Step Number

Numbers

```
01

02

03

04

05
```

Font

Manrope

Weight

```
700
```

Desktop Size

```
22px
```

Tablet

```
20px
```

Mobile

```
18px
```

Color

Primary Green

Alignment

Center

The numbering system should always use two digits.

Do not display single-digit numbers.

---

# Timeline Spacing

Badge

↓

Heading

```
20px
```

Heading

↓

Description

```
24px
```

Description

↓

Timeline

```
56px
```

Timeline

↓

Next Section

```
96px
```

The spacing should create a gradual reading rhythm without abrupt visual transitions.

---

# Initial Timeline State

Before entering the viewport

Connector

Hidden

Step Indicators

Opacity

```
0
```

TranslateY

```
30px
```

Cards

Hidden

The animation sequence will progressively reveal these elements, as specified in the following implementation section.


# 3B-2. Timeline Step Card Architecture

## Component Overview

The Timeline Step Card is the primary informational component within the Digital Service Procedure section.

Each card represents one official stage of the public service workflow.

The component combines an indicator, icon, heading, descriptive text, and optional supporting metadata into a single reusable interface element.

Unlike ordinary information cards, Timeline Step Cards must visually communicate progression.

Every card should feel connected to the previous and following steps while remaining individually understandable.

Users should be able to understand each step independently without losing awareness of the overall process.

The Timeline Step Card must be designed as a reusable component capable of displaying any procedural stage without requiring structural modifications.

---

# Component Hierarchy

Each Timeline Step Card consists of the following structure.

```
Timeline Step

│
├── Circular Step Indicator
│
├── Connector
│
├── Icon Container
│
├── Step Label
│
├── Step Title
│
├── Step Description
│
├── Optional Supporting Badge
│
└── Optional Metadata
```

Every child element should remain vertically aligned.

No element should overlap another.

---

# Card Layout

Desktop

```
Centered
```

Tablet

```
Centered
```

Mobile

```
Left aligned inside vertical timeline
```

Cards should remain visually balanced regardless of screen size.

---

# Card Width

Desktop

```
100%
```

Maximum Width

```
220px
```

Tablet

```
100%
```

Mobile

```
100%
```

Cards should never exceed the available grid width.

---

# Card Height

Minimum Height

```
280px
```

Height

```
Auto
```

The component should expand naturally when descriptions become longer.

Avoid fixed heights.

---

# Card Background

Background

```
#FFFFFF
```

Border

```
1px solid #DCE5F1
```

Border Radius

```
24px
```

Shadow

Medium

```
0 10px 30px rgba(0,0,0,.08)
```

Cards should appear elevated without looking detached from the page.

---

# Card Internal Padding

Desktop

```
32px
```

Tablet

```
28px
```

Mobile

```
24px
```

The internal spacing should remain generous.

Text should never appear cramped.

---

# Step Label

Purpose

Provide a concise classification for each stage.

Examples

```
STEP 01

STEP 02

STEP 03
```

Typography

Font

Hanken Grotesk

Weight

```
700
```

Font Size

```
12px
```

Letter Spacing

```
0.10em
```

Transform

Uppercase

Color

Primary Green

Alignment

Center

---

# Step Title

Purpose

Summarize the activity performed within the current stage.

Examples

```
Choose Service

Submit Documents

Administrative Verification

Field Inspection

Receive Service Result
```

Typography

Font

Manrope

Weight

```
600
```

Desktop

```
22px
```

Tablet

```
20px
```

Mobile

```
18px
```

Color

Primary Text

Line Height

```
130%
```

Text Alignment

Center

Titles should remain concise.

Maximum

Two Lines

---

# Step Description

Purpose

Provide a short explanation of the current stage.

Descriptions should explain what users are expected to do and what the department will perform.

Typography

Font

Hanken Grotesk

Weight

```
400
```

Desktop

```
16px
```

Mobile

```
15px
```

Color

Secondary Text

Line Height

```
160%
```

Maximum Width

```
180px
```

Text Alignment

Center

Maximum

Four Lines

Long procedural explanations should not be placed inside Timeline Cards.

Those belong to the Detailed Procedure Section.

---

# Icon Container

Purpose

Provide immediate visual recognition for every procedural stage.

Shape

Circle

Diameter

Desktop

```
72px
```

Tablet

```
68px
```

Mobile

```
64px
```

Background

```
rgba(0,108,73,.08)
```

Border

```
1px solid rgba(0,108,73,.12)
```

Display

Flex

Center

Shadow

Small

---

# Icon System

Icon Library

Material Symbols Outlined

Icons should maintain identical stroke width.

Avoid mixing icon styles.

Recommended Icons

Step 01

```
folder_open
```

Step 02

```
upload_file
```

Step 03

```
fact_check
```

Step 04

```
engineering
```

Step 05

```
verified
```

Icon Size

Desktop

```
32px
```

Tablet

```
30px
```

Mobile

```
28px
```

Color

Primary Green

---

# Supporting Badge

Some steps may contain optional informational badges.

Examples

```
ONLINE

OFFLINE

OPTIONAL

REQUIRED

DIGITAL

FREE
```

Badge Background

```
rgba(245,158,11,.12)
```

Border

```
1px solid rgba(245,158,11,.25)
```

Border Radius

```
999px
```

Padding

Vertical

```
6px
```

Horizontal

```
14px
```

Typography

Font

Hanken Grotesk

Weight

```
700
```

Size

```
12px
```

Color

Accent Gold

Badges should remain secondary information.

---

# Metadata

Optional metadata may appear beneath the description.

Examples

Estimated Processing Time

Required Documents

Digital Availability

Typography

Font

Hanken Grotesk

Weight

```
500
```

Font Size

```
13px
```

Color

Muted Text

Metadata should remain visually separated from the primary description.

---

# Card Hover Behavior

Desktop only.

When users hover over a Timeline Step Card,

the following interactions should occur simultaneously.

Card

TranslateY

```
-8px
```

Shadow

Medium

↓

Large

Border

Primary Green

Icon Container

Scale

```
1.08
```

Step Number

Scale

```
1.05
```

Duration

```
250ms
```

Timing

```
ease-out
```

Hover effects should never feel exaggerated.

---

# Active State

If the timeline becomes interactive in future implementations,

the active step should display

Background

```
#006C49
```

Title

White

Description

```
rgba(255,255,255,.92)
```

Icon

White

Indicator

Filled Green

Connector

Primary Green

Only one active step may exist at a time.

---

# Completed State

Completed steps should display

Indicator

Filled Green

Number

White

Connector

Primary Green

Card Border

Primary Green

Badge

Success

This state communicates procedural completion.

---

# Disabled State

Unavailable services should display

Background

```
#F8FAFC
```

Border

```
#E2E8F0
```

Icon

Disabled Gray

Title

Muted Gray

Description

Muted Gray

Hover

Disabled

Cursor

```
not-allowed
```

---

# Card Animation Sequence

The animation should follow the connector animation.

Sequence

Connector

↓

Indicator

↓

Icon

↓

Title

↓

Description

↓

Badge

↓

Metadata

Cards should animate one after another.

---

# Animation Timing

Each card

Opacity

```
0

↓

1
```

TranslateY

```
30px

↓

0
```

Duration

```
650ms
```

Delay

```
120ms
```

Each subsequent card

Additional Delay

```
120ms
```

Example

Step 01

120ms

Step 02

240ms

Step 03

360ms

Step 04

480ms

Step 05

600ms

This creates a smooth left-to-right progression on desktop and top-to-bottom progression on mobile.

---

# Responsive Layout

## Desktop

Cards positioned beneath each timeline indicator.

Centered alignment.

Equal spacing.

---

## Tablet

Cards arranged beneath indicators within a two-column grid.

Maintain equal heights.

---

## Mobile

Cards positioned to the right of the vertical timeline.

Timeline indicator remains on the left.

Connector occupies the center.

Cards expand to available width.

Text becomes left-aligned for easier reading.

---

# Android Optimization

Cards must never exceed viewport width.

Minimum horizontal padding

```
20px
```

Touch targets

Minimum

```
48px
```

Typography

Never below

```
15px
```

Cards should stack vertically without horizontal scrolling.

---

# Accessibility

Each Timeline Step Card should use semantic grouping.

Recommended structure

```
<article>
```

Step title

```
<h3>
```

Description

```
<p>
```

Decorative icons

```
aria-hidden="true"
```

Interactive cards

Provide

```
aria-label
```

Focus indicators must remain visible.

Cards must remain readable at 200% browser zoom.

---

# Component Reusability

The Timeline Step Card must be implemented as a reusable component.

Required Properties

• stepNumber

• title

• description

• icon

• badge

• metadata

• state

• animationDelay

No procedural information should be hardcoded inside the component.

Content must be generated from structured data or an API response.

The component should support any number of procedural steps while preserving identical spacing, alignment, and visual behavior.



