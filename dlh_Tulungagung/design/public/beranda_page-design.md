# Design.md — DLH Tulungagung Homepage Frontend Specification (Responsive Desktop + Mobile Optimized)

## Project Name

**DLH Tulungagung — Eco-Gov Modern Government Portal**

---

# Purpose

This document defines the complete frontend design specification for the Homepage (Landing Page) of the DLH Tulungagung website.

The objective is to provide a single source of truth for GitHub Copilot Agent during implementation. Every section describes visual appearance, spacing, responsive behavior, layout rules, component states, animation, accessibility, and interaction requirements.

The implementation must prioritize:

* Pixel consistency
* Excellent responsiveness
* Fast rendering
* Accessibility (WCAG 2.2 AA)
* Modern Government UI
* Eco-themed branding
* Clean information hierarchy
* Comfortable mobile experience

This specification is mandatory.

The implementation must never approximate dimensions or spacing if explicit values are defined here.

---

# Design Philosophy

The visual language is **Eco-Gov Modern**, combining:

* Minimalism
* Material Design 3
* Soft Glassmorphism
* Organic Environmental Visual Design

The interface should communicate:

* Transparency
* Professionalism
* Sustainability
* Government credibility
* Modern public services
* Calm visual appearance
* High readability

The UI should never feel crowded, oversized, or difficult to scan.

Every section should breathe through generous spacing while maintaining efficient use of screen space.

---

# Global Layout

Desktop Container

Maximum Width

1280px

Content Width

1200px

Horizontal Padding

32px

Grid

12 Columns

Column Gap

24px

---

Tablet

Container Width

100%

Horizontal Padding

24px

Grid

8 Columns

---

Mobile

Container Width

100%

Maximum Width

100%

Horizontal Padding

16px

Grid

4 Columns

No component may exceed the container width.

Every component must resize fluidly.

Never preserve desktop dimensions on mobile.

---

# Responsive Breakpoints

Extra Small

0–479px

Small

480–639px

Medium

640–767px

Large Tablet

768–1023px

Laptop

1024–1279px

Desktop

1280–1535px

Large Desktop

1536px+

Each breakpoint must use dedicated spacing and typography scaling.

---

# Mobile Optimization Rules (Highest Priority)

This project must prioritize Android devices.

The interface must remain comfortable on:

* 360px width
* 375px width
* 390px width
* 412px width
* 430px width

These devices represent the primary design target.

No horizontal scrolling is allowed.

No component may overflow.

No text may be clipped.

No image may extend beyond its parent.

No card may touch the screen edge.

No button may exceed the viewport.

Every component must remain fully visible.

---

# Mobile Horizontal Margin

One of the primary issues to avoid is excessive left and right margins.

The homepage must maximize usable screen width without making the interface feel cramped.

Use:

Page Padding

16px

Card Internal Padding

16px

Small Components

12px

Hero Content

16px

Never use desktop padding values on mobile.

Do NOT use:

32px

40px

48px

64px

horizontal padding on Android.

These values waste valuable screen space.

---

# Mobile Card Width Rules

Cards should occupy almost the full width.

Recommended width:

100%

Do not use fixed widths.

Do not use max-width values that leave excessive whitespace.

Recommended:

width:100%

border-radius:20px

padding:16px

margin-bottom:20px

Cards should naturally stack vertically.

---

# Mobile Hero Section

Desktop Height

100vh

Mobile Height

Auto

Minimum Height

620px

Maximum Height

760px

The Hero section must never occupy excessive vertical space.

Avoid forcing users to scroll through empty content before reaching important information.

---

Hero Layout

Desktop

Two Columns

Mobile

Single Column

Order

Headline

Description

Primary CTA

Secondary CTA

Illustration

Scroll Indicator

---

Hero Typography

Desktop

H1

48px

Mobile

32px

Tablet

40px

Paragraph

Desktop

18px

Tablet

17px

Mobile

16px

Maximum Text Width

100%

---

Hero Buttons

Desktop

Inline

Mobile

Vertical Stack

Button Width

100%

Maximum Width

100%

Height

52px

Gap

12px

Buttons must never overflow.

---

Navigation

Desktop Height

80px

Mobile Height

64px

Logo Height

Desktop

44px

Mobile

36px

Navigation Padding

Desktop

32px

Mobile

16px

Desktop Menu

Horizontal

Mobile Menu

Hamburger Drawer

The drawer should slide from the left.

Animation Duration

250ms

Overlay Opacity

50%

Blur

12px

---

Section Spacing

Desktop

120px

Tablet

96px

Mobile

64px

Small Sections

48px

Never keep desktop spacing on Android.

Large empty spaces reduce usability.

---

Color Palette

Primary

#006C49

Primary Hover

#00895D

Primary Active

#00553A

Secondary

#006591

Accent

#2B6954

Background

#F8F9FF

Surface

#FFFFFF

Surface Variant

#E5EEFF

Border

#BBCABF

Primary Text

#0B1C30

Secondary Text

#3C4A42

Disabled Text

#7B8A81

White

#FFFFFF

---

Typography

Heading Font

Manrope

Body Font

Hanken Grotesk

Fallback

Inter

Segoe UI

sans-serif

---

Typography Scale

Desktop Display

60px

Desktop H1

48px

Tablet H1

40px

Mobile H1

32px

Desktop H2

36px

Tablet H2

32px

Mobile H2

28px

Desktop H3

30px

Tablet H3

26px

Mobile H3

22px

Body Large

18px

Body

16px

Small

14px

Caption

12px

Letter spacing

Heading

-0.02em

Labels

0.05em

---

Buttons

Primary

Height

52px

Radius

9999px

Padding

24px

Font Weight

600

Transition

250ms

Hover

translateY(-2px)

Shadow XL

Active

scale(.97)

Disabled

Opacity

60%

Cursor

Not Allowed

Loading

Spinner

Centered

---

Secondary Button

Outline

2px

Primary Border

Hover

Filled Primary

---

Icon Button

48x48

Minimum Touch Area

44x44

---

Cards

Desktop Radius

24px

Mobile Radius

20px

Glass Opacity

70%

Blur

12px

Border

1px rgba(255,255,255,.25)

Internal Padding

Desktop

24px

Mobile

16px

Hover

Lift

8px

Background Tint

Primary

Text

White

---

Grid Behavior

Desktop

3–4 Columns

Tablet

2 Columns

Mobile

Single Column

Gap

Desktop

24px

Mobile

16px

Cards must stretch naturally.

Avoid fixed heights whenever possible.

---

Images

Hero

21:9

Featured News

16:10

Gallery

1:1

Thumbnail

1:1

Image Fit

cover

Lazy Loading

Required

WebP

Preferred

AVIF

Supported

---

Search Component

Height

56px

Mobile Height

52px

Radius

9999px

Padding

16px

Leading Icon

Search

Placeholder Weight

500

Focus Border

Primary

Glow

Visible

Width

100%

---

News Cards

Desktop

3 Columns

Tablet

2 Columns

Mobile

1 Column

Image Height

Desktop

220px

Mobile

180px

Card Padding

16px

Title Clamp

2 Lines

Description Clamp

3 Lines

Metadata

Single Row

---

Quick Service Cards

Desktop

4 Columns

Tablet

2 Columns

Mobile

2 Columns

Aspect Ratio

1:1

Icon Size

32px

Mobile

28px

Label

Centered

Padding

16px

Cards should not exceed 170px height on Android.

---

Statistics Section

Desktop

Horizontal Cards

Mobile

Vertical Stack

Each statistic card

Height

Auto

Padding

16px

Number

32px

Label

14px

---

Footer

Desktop

4 Columns

Tablet

2 Columns

Mobile

Single Column

Padding

Desktop

80px

Mobile

48px

Gap

24px

---

Animation

Reveal

Opacity

0 → 1

TranslateY

20px → 0

Duration

700ms

Intersection Observer

Threshold

0.2

Buttons

Hover

200ms

Ease

Hero Shader

Continuous

Low GPU Usage

Respect

prefers-reduced-motion

---

Accessibility

Minimum Contrast

4.5:1

Keyboard Navigation

Required

Visible Focus Ring

2px

Primary Color

Touch Target

Minimum

44x44

ARIA Labels

Required

Semantic HTML

Required

---

Performance

Largest Contentful Paint

<2.5s

CLS

<0.1

INP

<200ms

Images

Lazy Load

Code Splitting

Required

Dynamic Imports

Preferred

Fonts

Preload

Display Swap

---

Implementation Rules for GitHub Copilot Agent

The generated implementation must strictly follow this specification.

Never preserve desktop spacing on mobile.

Never use fixed pixel widths for cards.

Always use fluid layouts.

Always prioritize Android viewport widths.

Avoid oversized typography.

Avoid oversized buttons.

Avoid excessive horizontal padding.

Avoid large empty spaces.

Ensure every section scales independently.

Ensure every card remains fully visible.

Ensure all content fits inside the viewport without horizontal scrolling.

Prefer CSS Grid for desktop layouts.

Prefer Flexbox for mobile stacking.

Use CSS clamp() for responsive typography whenever possible.

Use CSS variables or design tokens for all colors, spacing, radius, typography, and shadows.

Animations must remain subtle, performant, and hardware accelerated.

The homepage must achieve a modern, lightweight, premium government appearance while maintaining excellent usability on Android devices ranging from 360px to 430px wide.
