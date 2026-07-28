# design.md

# Profile Page Frontend Design Specification

## Project Overview

This document defines the complete frontend implementation specification for the **Profile Page** of the **Dinas Lingkungan Hidup Kabupaten Tulungagung (DLH Tulungagung)** website.

The purpose of this specification is to provide GitHub Copilot Agent with a comprehensive visual implementation guide that reproduces the original Stitch.ai prototype with high visual fidelity while maintaining consistency across every page of the website.

This specification focuses exclusively on frontend design implementation.

Do not modify the visual language.

Do not redesign any section.

Do not replace existing layouts with alternative solutions.

All implementation decisions must preserve the original visual identity established by the homepage.

---

# Design Philosophy

## Eco-Gov Modern

The entire page follows the **Eco-Gov Modern** design language.

This visual language combines modern government identity with environmental branding.

The interface should communicate:

* professionalism
* transparency
* environmental awareness
* institutional credibility
* simplicity
* accessibility
* visual clarity

The design should never feel decorative.

Every element exists for information hierarchy.

Avoid unnecessary visual noise.

Avoid excessive animations.

Avoid aggressive shadows.

Avoid colorful gradients that are unrelated to the DLH identity.

The interface must appear calm, clean, and authoritative.

---

# Primary Design Goals

The Profile Page must accomplish the following visual objectives:

* Present institutional identity clearly.
* Communicate organizational structure.
* Display Vision and Mission elegantly.
* Explain government responsibilities.
* Showcase institutional activities.
* Maintain excellent readability.
* Preserve visual consistency with every page throughout the website.

---

# Global Layout Architecture

The page follows a single-column vertical structure.

Sections appear sequentially from top to bottom.

Every section occupies the full browser width.

Content is centered inside a constrained container.

Overall hierarchy:

1. Fixed Navigation
2. Hero Header
3. Vision & Mission
4. Organization Structure
5. Main Duties (Tupoksi)
6. Activity Gallery
7. Footer

Each section must be visually independent while remaining connected through consistent spacing and typography.

---

# Container Specification

Every content section must use a centered container.

Maximum Width

1280px

Horizontal Alignment

Center

Horizontal Padding

Desktop

48px

Laptop

40px

Tablet

32px

Mobile

20px

Small Mobile

16px

No component may touch the browser edge.

Containers must remain perfectly centered regardless of screen size.

---

# Grid System

Desktop

12 Columns

Gap

24px

Tablet

8 Columns

Gap

20px

Mobile

4 Columns

Gap

16px

Every major section must align with the same invisible grid.

No section may define its own independent alignment system.

---

# Responsive Breakpoints

Large Desktop

1440px and above

Desktop

1280px

Laptop

1024px

Tablet

768px

Mobile Large

480px

Mobile Small

360px

Each breakpoint must preserve visual hierarchy.

Only layout adapts.

Typography scaling must remain proportional.

Images scale without distortion.

Cards stack naturally.

Whitespace should never disappear.

---

# Vertical Rhythm

The page follows an 8-point spacing system.

Spacing Scale

8px

16px

24px

32px

40px

48px

64px

80px

96px

120px

Use only these spacing values.

Never introduce arbitrary spacing.

---

# Section Spacing

Top Padding

80px

Bottom Padding

80px

Section Gap

80px

Card Gap

24px

Content Gap

32px

Heading Gap

16px

Paragraph Gap

12px

---

# Background Strategy

The page alternates between light and dark sections.

Purpose:

Improve visual separation.

Increase readability.

Create scrolling rhythm.

Sequence:

Light

Light

Light

Light

Dark Gallery

Dark Footer

The transition into the gallery should feel intentional and dramatic without appearing disconnected.

---

# Color System

## Primary Brand Color

Emerald Green

HEX

#006C49

Usage

Navigation

Buttons

Icons

Highlighted headings

Interactive elements

Hover accents

Organization connectors

---

## Secondary Brand Color

Institutional Blue

HEX

#006591

Usage

Secondary highlights

Information accents

Structural graphics

Supporting elements

---

## Light Background

HEX

#F8F9FF

Used as the default page background.

Creates a clean institutional appearance.

---

## Surface

HEX

#FFFFFF

Used for

Cards

Containers

Content blocks

Information panels

---

## Secondary Surface

HEX

#EFF4FF

Used to distinguish supporting content without introducing excessive contrast.

---

## Dark Background

HEX

#031427

Used only for

Activity Gallery

Footer

Dark emphasis sections

---

## Primary Text

HEX

#0B1C30

Used for

Titles

Body text

Navigation

Important labels

---

## Secondary Text

HEX

#3C4A42

Used for

Descriptions

Metadata

Captions

Supporting information

---

## Borders

Light

#BBCABF

Dark

rgba(255,255,255,0.10)

Borders should remain subtle.

Never create strong visual outlines.

---

# Typography System

## Heading Font

Manrope

Characteristics

Modern

Professional

Geometric

Highly readable

Used only for headings.

---

## Body Font

Hanken Grotesk

Characteristics

Clean

Neutral

Readable

Government style

Used for

Paragraphs

Descriptions

Labels

Navigation

Cards

Footer

---

# Typography Scale

H1

48px

Weight

800

Line Height

120%

Letter Spacing

-1%

Used only once.

Page title.

---

H2

32px

Weight

700

Line Height

130%

Section headings.

---

H3

24px

Weight

600

Line Height

135%

Card titles.

---

Body Large

18px

Weight

400

Line Height

170%

Long descriptions.

---

Body

16px

Weight

400

Line Height

170%

General reading.

---

Small Text

14px

Weight

400

Line Height

160%

Captions

Metadata

Secondary labels

---

# Fixed Navigation

The Profile Page inherits the exact navigation component from the homepage.

No visual differences are permitted.

Navigation remains fixed throughout scrolling.

Height

80px

Background

White with 70% opacity

Backdrop Blur

Extra Large

Border Bottom

1px

Transparent until scrolling.

When scrolling begins:

Background opacity increases.

Shadow appears subtly.

Border becomes visible.

---

# Active Navigation Item

The active menu is "Profile."

Active Color

Primary Green

Bottom Indicator

2px solid Primary Green

Font Weight

600

Transition

300ms

Ease Out

Hover Behavior

Text changes from neutral to Primary Green.

No scaling.

No bounce.

No rotation.

Only smooth color interpolation.

---

# Hero Section

Purpose

Introduce the institutional profile.

Provide immediate page context.

Maintain visual consistency with the homepage.

The Hero must remain minimalist.

No decorative illustrations.

No oversized graphics.

No unnecessary visual elements.

Only typography and spacing define the hierarchy.

Background

Solid Light Background

No patterns.

No gradients.

No textures.

Top Padding

120px

Bottom Padding

80px

Horizontal Alignment

Centered

Content Width

Maximum 760px

Everything must remain centered.

---

# Hero Title

Content

"Profile"

Font

Manrope

48px

Extra Bold

Color

Primary Text

Alignment

Center

Maximum Width

620px

Line Height

120%

The title must become the strongest visual element on the page.

---

# Hero Description

Placed directly beneath the title.

Maximum Width

680px

Font

18px

Weight

400

Color

Secondary Text

Alignment

Center

Spacing Above

24px

Spacing Below

0px

The paragraph should clearly explain the institutional profile while maintaining generous whitespace.

---

# Hero Entrance Animation

Animation

Fade In

Translate Y

20px

Opacity

0 → 100%

Duration

500ms

Easing

Ease Out

Delay

100ms

The animation should play only once when the section enters the viewport.

Repeated animations during scrolling are not allowed.

---


# Profile Page Frontend Design Specification

# Part 2 — Vision & Mission Section, Organization Structure Section, Main Duties (Tupoksi) Section

---

# Vision & Mission Section

## Section Purpose

The Vision & Mission section serves as the institutional introduction that communicates the long-term strategic direction and operational commitments of the Department of Environment (DLH Tulungagung).

This section should immediately follow the Hero Section while maintaining the established visual rhythm of the website.

The design must create a clear distinction between the organization's future aspirations (Vision) and the operational commitments (Mission).

The overall composition must appear formal, structured, and highly readable.

Avoid excessive decorative elements.

The content itself should become the visual focus.

---

# Section Layout

Desktop Layout

Two-column responsive layout.

Column Ratio

Vision

40%

Mission

60%

The larger width allocated to the Mission column accommodates multiple bullet points while maintaining comfortable reading width.

The layout should remain horizontally centered inside the primary container.

Maximum Content Width

1280px

Container Alignment

Centered

Horizontal Padding

Desktop

48px

Laptop

40px

Tablet

32px

Mobile

20px

Small Mobile

16px

---

# Section Background

Background Color

#F8F9FF

No gradients.

No decorative illustrations.

No background patterns.

The section must feel clean and open.

---

# Vertical Spacing

Top Padding

80px

Bottom Padding

80px

Section Gap

64px

Internal Component Gap

32px

---

# Section Heading

The section begins with a centered heading introducing the institutional values.

Typography

Manrope

Weight

700

Font Size

32px

Color

#0B1C30

Alignment

Center

Maximum Width

640px

Spacing Below

16px

---

# Section Description

Placed directly beneath the heading.

Purpose

Introduce the Vision and Mission statements before presenting the individual content blocks.

Font

Hanken Grotesk

Size

18px

Weight

400

Line Height

170%

Color

#3C4A42

Maximum Width

760px

Alignment

Center

Spacing Below

64px

---

# Vision Card

## Purpose

The Vision Card represents the organization's long-term objective.

It should immediately attract attention without overpowering the Mission section.

Visual emphasis should be created through spacing, typography, and iconography rather than excessive color usage.

---

# Vision Card Layout

Width

100% of assigned column

Height

Auto

Minimum Height

260px

Padding

40px

Border Radius

16px

Background

White

Border

1px solid #BBCABF

Shadow

Soft Shadow

0 10px 20px rgba(0,0,0,0.05)

---

# Vision Icon

Position

Top Left

Container

Rounded Square

Size

56px

Corner Radius

16px

Background

rgba(0,108,73,0.10)

Icon Color

Primary Green

Icon Size

28px

The icon should visually represent institutional vision, sustainability, or environmental development.

---

# Vision Title

Placed beneath the icon.

Font

Manrope

24px

Weight

700

Color

Primary Text

Spacing Above

24px

Spacing Below

16px

---

# Vision Content

Font

18px

Weight

400

Color

Secondary Text

Line Height

180%

Maximum Width

100%

Text Alignment

Left

The Vision statement should remain concise and visually prominent.

---

# Mission Card

## Purpose

Display multiple institutional missions using a structured vertical arrangement.

The layout must prioritize readability.

---

# Mission Card Layout

Width

100%

Minimum Height

260px

Padding

40px

Background

White

Border

1px solid #BBCABF

Corner Radius

16px

Shadow

Soft Shadow

0 10px 20px rgba(0,0,0,0.05)

---

# Mission Header

Contains

Mission Icon

Mission Title

Horizontal Gap

16px

Vertical Alignment

Center

---

# Mission Icon

Container Size

56px

Background

rgba(0,101,145,0.10)

Corner Radius

16px

Icon Size

28px

Color

Institutional Blue

---

# Mission Title

Manrope

24px

Weight

700

Color

Primary Text

---

# Mission List

Positioned beneath the header.

Spacing Above

32px

Display

Vertical Stack

Gap Between Items

20px

---

# Mission Item

Each mission consists of:

Leading Icon

Mission Text

The icon remains vertically aligned with the first text line.

---

# Bullet Icon

Container

Circular

Size

24px

Background

rgba(0,108,73,0.10)

Icon

Check

Color

Primary Green

---

# Mission Text

Font

16px

Weight

400

Color

#3C4A42

Line Height

175%

Text Alignment

Left

The text should wrap naturally without creating awkward line breaks.

---

# Hover Behaviour

Vision Card

Translate Y

-4px

Shadow

Increase to

0 20px 40px rgba(0,0,0,0.08)

Transition

300ms

Ease Out

Mission Card

Uses identical hover behavior.

No scaling.

No rotation.

No color flashing.

---

# Responsive Behaviour

Desktop

Vision and Mission displayed side by side.

Tablet

Columns remain side by side if sufficient width exists.

Mobile

Cards stack vertically.

Gap

32px

Cards maintain identical width.

---

# Organization Structure Section

## Purpose

Display the institutional hierarchy in a visual organizational tree.

The hierarchy should communicate authority, reporting relationships, and organizational structure with maximum clarity.

The section should feel structured, balanced, and easy to scan.

The visual emphasis should come from alignment rather than decorative styling.

---

# Section Layout

Container Width

1280px

Alignment

Center

Top Padding

80px

Bottom Padding

80px

Background

White

---

# Section Heading

Centered

Font

Manrope

32px

Weight

700

Color

Primary Text

Spacing Below

20px

---

# Section Description

Centered

Maximum Width

760px

Font

18px

Color

Secondary Text

Spacing Below

64px

---

# Organization Tree

The organizational hierarchy should be positioned in the center of the page.

The tree should appear symmetrical.

All nodes must maintain equal spacing.

Connector lines should remain perfectly aligned.

No overlapping connectors.

No uneven spacing.

---

# Tree Layout

Hierarchy Direction

Top to Bottom

Root Node

Top Center

Branch Nodes

Centered beneath the parent node

Spacing Between Levels

80px

Horizontal Gap

48px

Connector Thickness

2px

Connector Color

Primary Green

Rounded Line Ends

Enabled

---

# Organization Node Card

Each organizational position is displayed as an individual profile card.

Purpose

Represent one organizational role.

---

# Node Card Dimensions

Width

240px

Minimum Height

140px

Padding

24px

Corner Radius

16px

Background

White

Border

1px solid #BBCABF

Shadow

0 8px 16px rgba(0,0,0,0.05)

---

# Avatar Area

Circular Avatar

Diameter

72px

Background

rgba(0,108,73,0.08)

Border

2px solid Primary Green

Position

Centered

Top

---

# Position Title

Placed beneath avatar.

Font

Manrope

18px

Weight

700

Alignment

Center

Color

Primary Text

---

# Officer Name

Font

16px

Weight

500

Alignment

Center

Color

Secondary Text

Spacing Top

8px

---

# Hover Interaction

Translate Y

-4px

Shadow

Increase

Transition

300ms

Ease Out

Cards never rotate.

Cards never enlarge.

---

# Organization Connector Lines

All connectors use SVG or CSS implementation.

Avoid raster graphics.

Color

Primary Green

Thickness

2px

Opacity

80%

Smooth Corners

Enabled

Animation

Fade In

Duration

500ms

---

# Responsive Organization Tree

Desktop

Full hierarchy visible.

Tablet

Reduce horizontal spacing.

Mobile

Convert hierarchy into stacked organizational cards.

Connector lines disappear.

Cards separated by

24px

This ensures readability on narrow displays.

---

# Main Duties (Tupoksi) Section

## Purpose

Present the primary institutional responsibilities through structured functional cards.

The layout should immediately communicate the department's core responsibilities.

The design should emphasize clarity over decoration.

---

# Layout

Grid

2 Columns

Desktop

Gap

32px

Tablet

2 Columns

Gap

24px

Mobile

Single Column

Gap

20px

---

# Section Background

Secondary Surface

#EFF4FF

This subtle background differentiates the section from adjacent white sections.

Top Padding

80px

Bottom Padding

80px

---

# Section Heading

Centered

Font

32px

Weight

700

Color

Primary Text

Spacing Bottom

20px

---

# Description

Maximum Width

760px

Centered

Font

18px

Line Height

170%

Color

Secondary Text

Spacing Bottom

64px

---

# Functional Card

Purpose

Represent one institutional responsibility.

Examples include environmental management, waste management, pollution control, conservation, or public environmental services.

Every card must maintain identical dimensions.

Uniformity is essential.

---

# Card Dimensions

Height

260px

Padding

32px

Corner Radius

16px

Background

White

Border

1px solid #BBCABF

Shadow

0 10px 20px rgba(0,0,0,0.05)

Display

Flex

Direction

Column

---

# Functional Icon

Container

Rounded Square

Size

64px

Corner Radius

18px

Background

rgba(0,108,73,0.10)

Icon Size

32px

Color

Primary Green

---

# Functional Title

Manrope

22px

Weight

700

Spacing Top

24px

Spacing Bottom

16px

Color

Primary Text

---

# Functional Description

Font

16px

Weight

400

Line Height

170%

Color

Secondary Text

Flex Grow

Enabled

The description expands naturally without affecting card alignment.

---

# Card Hover

Translate Y

-6px

Shadow

0 24px 48px rgba(0,0,0,0.08)

Duration

300ms

Ease Out

Border Color

Primary Green

No scaling.

No bounce animation.

---

# Responsive Behaviour

Desktop

2 × 2 Grid

Tablet

2 Columns

Reduced spacing

Mobile

Single column

Cards occupy full container width.

Maintain consistent internal padding.

Preserve identical typography hierarchy across every breakpoint.

---

# End of Part 2


# Profile Page Frontend Design Specification

# Part 3 — Activity Gallery Section, Footer, Color System, Typography, Iconography, Imagery, and Visual Consistency

---

# Activity Gallery Section

## Section Purpose

The Activity Gallery is the final major content section before the footer.

Its primary objective is to provide visitors with visual evidence of the Department's environmental activities, community engagement programs, public services, conservation initiatives, and institutional achievements.

Unlike the previous informational sections, the Activity Gallery is highly visual.

Photography becomes the primary communication medium.

The gallery creates a strong visual transition before entering the footer.

The section should feel immersive, modern, and impactful while remaining consistent with the Eco-Gov Modern design language.

The gallery must never resemble a social media feed.

Instead, it should communicate professionalism, credibility, and institutional transparency.

---

# Background

Background Color

#031427

This dark background intentionally increases contrast against the previous light sections.

The darker surface allows photography and white typography to become the primary visual focus.

Do not introduce gradients.

Do not use decorative background patterns.

Do not apply background illustrations.

Maintain a clean, uninterrupted dark surface.

---

# Section Layout

Maximum Width

1280px

Horizontal Alignment

Centered

Horizontal Padding

Desktop

48px

Laptop

40px

Tablet

32px

Mobile

20px

Small Mobile

16px

Top Padding

96px

Bottom Padding

96px

Section Gap

72px

---

# Section Heading

Alignment

Center

Typography

Manrope

Font Size

32px

Weight

700

Color

#FFFFFF

Maximum Width

680px

Spacing Below

20px

The heading should establish visual authority while remaining elegant.

---

# Section Description

Position

Centered beneath the heading.

Maximum Width

760px

Typography

Hanken Grotesk

Font Size

18px

Weight

400

Line Height

170%

Color

rgba(255,255,255,0.75)

Spacing Below

64px

---

# Gallery Grid

Desktop

Three Columns

Gap

24px

Tablet

Two Columns

Gap

20px

Mobile

Single Column

Gap

20px

All gallery cards must maintain equal spacing.

The grid should remain perfectly aligned regardless of image dimensions.

---

# Gallery Card

Each gallery item represents one institutional activity.

Cards should prioritize photography while preserving accessibility.

The entire card should be clickable.

Cards should feel premium without appearing excessive.

---

# Card Dimensions

Width

100%

Minimum Height

360px

Maximum Height

420px

Border Radius

24px

Overflow

Hidden

Background

#FFFFFF

Position

Relative

Display

Flex

Align Items

End

---

# Gallery Image

Position

Absolute

Top

0

Left

0

Width

100%

Height

100%

Object Fit

Cover

Object Position

Center

Aspect Ratio

4:5

Image Quality

High Resolution

Compression

Optimized for Web

---

# Image Overlay

Overlay Type

Linear Gradient

Direction

Bottom to Top

Color Stops

rgba(3,20,39,0.90)

↓

rgba(3,20,39,0.10)

↓

Transparent

Purpose

Improve text readability.

Preserve image visibility.

Maintain visual consistency.

---

# Gallery Content Container

Position

Relative

Padding

32px

Display

Flex

Direction

Column

Gap

12px

Z-Index

2

---

# Gallery Category Label

Font

Hanken Grotesk

Size

14px

Weight

600

Letter Spacing

8%

Text Transform

Uppercase

Color

Primary Green

---

# Gallery Title

Font

Manrope

Size

24px

Weight

700

Color

#FFFFFF

Line Height

135%

Maximum Lines

2

Overflow

Hidden

---

# Gallery Description

Font

Hanken Grotesk

Size

16px

Weight

400

Line Height

170%

Color

rgba(255,255,255,0.85)

Maximum Lines

3

Overflow

Hidden

---

# Gallery Hover Behaviour

Hover Animation

Translate Y

-6px

Image Scale

1.05

Overlay Opacity

Increase Slightly

Shadow

0 30px 60px rgba(0,0,0,0.25)

Transition Duration

350ms

Transition Timing

Ease Out

The animation must remain subtle.

Avoid dramatic zoom effects.

Avoid image rotation.

Avoid card tilting.

---

# Gallery Entrance Animation

Animation Type

Fade In

Translate Y

24px

Opacity

0%

↓

100%

Duration

600ms

Delay

Sequential

Each card should appear with a staggered delay of 80ms.

The animation should occur only once.

---

# Footer

## Purpose

The footer concludes the website while reinforcing institutional identity.

It provides navigation, contact information, government identity, and supporting resources.

The footer should appear visually balanced.

It should not compete with the main content.

---

# Footer Background

Color

#031427

Border Top

1px solid rgba(255,255,255,0.08)

Top Padding

72px

Bottom Padding

32px

---

# Footer Layout

Desktop

Four Columns

Gap

48px

Tablet

Two Columns

Gap

40px

Mobile

Single Column

Gap

32px

---

# Footer Column One

Contains

Institution Logo

Institution Name

Short Description

Social Media Links

The logo should remain visually dominant.

---

# Footer Column Two

Contains

Quick Navigation

Profile

Services

News

Gallery

Contact

Links must remain vertically aligned.

Gap

16px

---

# Footer Column Three

Contains

Public Services

Downloads

Regulations

Environmental Data

Complaint Services

Emergency Contacts

---

# Footer Column Four

Contains

Office Address

Telephone

Email

Operating Hours

Map Shortcut

---

# Footer Typography

Heading

Manrope

18px

Weight

700

Color

White

Body

Hanken Grotesk

16px

Weight

400

Color

rgba(255,255,255,0.75)

Hover

Primary Green

---

# Footer Bottom Area

Contains

Copyright

Privacy Policy

Terms

Accessibility

Divider

1px solid rgba(255,255,255,0.08)

Padding Top

32px

---

# Color System

## Primary Green

HEX

#006C49

Primary Brand Identity

Buttons

Icons

Interactive States

Navigation Highlights

Active Indicators

Organization Connectors

---

## Secondary Blue

HEX

#006591

Supporting Highlights

Information Cards

Secondary Icons

Institutional Graphics

---

## Background Light

HEX

#F8F9FF

Primary Page Background

---

## Surface White

HEX

#FFFFFF

Cards

Containers

Panels

---

## Secondary Surface

HEX

#EFF4FF

Supporting Content Areas

Grouped Information

---

## Dark Surface

HEX

#031427

Gallery

Footer

Dark Sections

---

## Primary Text

HEX

#0B1C30

Headings

Navigation

Labels

Important Information

---

## Secondary Text

HEX

#3C4A42

Descriptions

Paragraphs

Metadata

Supporting Content

---

## Success

HEX

#16A34A

Status Indicators

Completed Activities

---

## Warning

HEX

#D97706

Notifications

Environmental Alerts

---

## Error

HEX

#DC2626

Validation Messages

Critical Alerts

---

# Typography System

Heading Font

Manrope

Body Font

Hanken Grotesk

Typography must remain identical across every page.

Never substitute alternative fonts.

Never mix font families.

Never introduce decorative typography.

All headings must use Manrope.

All descriptive content must use Hanken Grotesk.

---

# Font Scale

H1

48px

H2

32px

H3

24px

H4

20px

Body Large

18px

Body

16px

Caption

14px

Small Label

12px

The hierarchy must remain unchanged.

---

# Iconography

Icon Library

Material Symbols Outlined

Alternative

Lucide Icons

Icons must use rounded line endings.

Avoid filled icon styles.

Avoid skeuomorphic icons.

Maintain visual consistency across every section.

---

# Icon Sizes

Extra Small

16px

Small

20px

Medium

24px

Large

32px

Extra Large

40px

Icons must align to the 8-point spacing system.

---

# Image Specification

Photography Style

Professional

Government

Environmental

Natural Lighting

Real Activities

No Stock Photography with Artificial Poses

Preferred Subjects

Environmental Conservation

River Cleaning

Waste Management

Tree Planting

Public Services

Community Participation

Institutional Meetings

Laboratory Activities

Environmental Monitoring

Landscape Documentation

---

# Image Processing

Object Fit

Cover

Aspect Ratio

4:5

Border Radius

24px

Brightness

Natural

Contrast

Moderate

Saturation

Slightly Warm

Do not over-edit photography.

Maintain authenticity.

---

# Visual Consistency Rules

Every component throughout the page must follow a unified visual language.

Spacing must always follow the predefined spacing scale.

Every card must share identical border radius values.

All shadows must belong to the same elevation system.

Typography hierarchy must never change between sections.

Primary Green must remain the dominant accent color.

Blue should function only as a supporting accent.

Interactive animations must always remain subtle.

Hover effects should communicate interactivity without distracting users.

All content containers must remain aligned to the same responsive grid.

Whitespace must be treated as an essential design element rather than unused space.

No component should visually dominate unless intentionally defined by the hierarchy.

Every section should transition naturally into the next through consistent spacing, color balance, and typography.

The entire page should appear as a single cohesive interface rather than a collection of independent sections.

---

# End of Part 3



# Profile Page Frontend Design Specification

# Part 4 — Component Library Specification, Interaction States, Animation System, Elevation System, Shadow System, Border Radius System, Spacing System, and CSS Design Tokens

---

# Component Library Specification

## Component Philosophy

Every component implemented on the Profile Page must originate from a single unified design system.

Components must never appear visually disconnected from one another.

All reusable interface elements should share identical visual principles, spacing rules, interaction behavior, typography hierarchy, and animation characteristics.

Every component must feel as though it belongs to the same ecosystem established throughout the DLH Tulungagung website.

Avoid introducing unique styling for individual sections unless explicitly defined within this specification.

Component consistency has higher priority than visual variation.

---

# Component Design Principles

Every component should follow these principles.

Consistency

Every button, card, icon container, and interactive element should use identical design language.

Predictability

Interactive behavior must always remain consistent.

Hover animations should never differ significantly between components.

Accessibility

Every interactive component must remain easily recognizable and keyboard accessible.

Clarity

Visual hierarchy should always communicate component importance.

Simplicity

Avoid excessive decoration.

Avoid unnecessary borders.

Avoid exaggerated shadows.

Durability

Components should be reusable across future pages without modification.

---

# Primary Button

## Purpose

Represents the highest priority user action.

Used for primary navigation actions, featured calls-to-action, and important interactions.

Only one primary button should exist within a visual grouping.

---

# Primary Button Dimensions

Height

48px

Minimum Width

140px

Horizontal Padding

24px

Vertical Padding

12px

Border Radius

12px

Display

Inline Flex

Alignment

Center

Gap Between Icon and Text

8px

---

# Primary Button Colors

Background

#006C49

Text

#FFFFFF

Border

Transparent

---

# Primary Button Typography

Font

Hanken Grotesk

Size

16px

Weight

600

Letter Spacing

0%

---

# Primary Button States

Default

Solid Primary Green.

Hover

Background becomes slightly lighter.

Translate Y

-2px

Shadow

0 12px 24px rgba(0,108,73,0.25)

Transition

300ms

Ease Out

Active

Translate Y

0px

Shadow Reduced

Background Slightly Darker

Focus

2px outline

Outline Color

rgba(0,108,73,0.35)

Disabled

Opacity

50%

Pointer Events

None

No Hover Effects

Loading

Display loading spinner on the left.

Disable interaction.

Maintain button width.

---

# Secondary Button

Purpose

Secondary actions.

Visual Weight

Lower than Primary Button.

Background

Transparent

Border

1px solid Primary Green

Text

Primary Green

Hover

Background

rgba(0,108,73,0.08)

Translate

-2px

Duration

300ms

---

# Outline Button

Background

Transparent

Border

1px solid #BBCABF

Text

Primary Text

Hover

Border changes to Primary Green.

Background changes to rgba(0,108,73,0.05).

---

# Ghost Button

Purpose

Low-emphasis actions.

Background

Transparent

Border

None

Text

Primary Green

Hover

Background

rgba(0,108,73,0.08)

Border Radius

10px

---

# Icon Button

Container

Square

Dimensions

48px × 48px

Border Radius

12px

Background

White

Border

1px solid #BBCABF

Icon Size

24px

Hover

Primary Green Background

White Icon

Shadow

Medium

---

# Card System

## General Card Specification

Every card throughout the Profile Page must inherit from the same base component.

Cards should not vary significantly in appearance.

Visual consistency is mandatory.

---

# Standard Card

Background

White

Border

1px solid #BBCABF

Corner Radius

16px

Padding

32px

Shadow

Soft

Display

Flex

Flex Direction

Column

Gap

20px

---

# Card Hover

Translate Y

-4px

Duration

300ms

Timing

Ease Out

Shadow

Increase Slightly

Border

Primary Green

No scaling.

No rotation.

---

# Card Active

Return to original position.

Reduce shadow slightly.

---

# Card Focus

Outline

2px

Primary Green

Offset

2px

---

# Card Disabled

Opacity

60%

No Hover

No Pointer Interaction

---

# Avatar Component

Purpose

Display organizational representative.

Container

Circle

Diameter

72px

Background

rgba(0,108,73,0.08)

Border

2px solid Primary Green

Image

Centered

Object Fit

Cover

---

# Badge Component

Purpose

Display category labels.

Minimum Height

28px

Horizontal Padding

12px

Corner Radius

999px

Typography

14px

Weight

600

Background

rgba(0,108,73,0.10)

Text

Primary Green

---

# Divider

Thickness

1px

Color

#BBCABF

Opacity

60%

Margin Top

40px

Margin Bottom

40px

---

# Breadcrumb

Purpose

Provide page hierarchy.

Position

Below Hero Title

Typography

14px

Color

Secondary Text

Separator

Chevron

Hover

Primary Green

---

# Component Interaction States

Every interactive component must implement all interaction states.

Default

Hover

Active

Focus

Disabled

Loading

No interactive component may omit these states.

Interaction behavior should remain predictable throughout the interface.

---

# Animation System

## Design Philosophy

Animations should enhance usability.

Animations should never distract users.

Motion should reinforce hierarchy.

Motion should improve orientation.

Motion should remain subtle.

---

# Transition Timing

Fast

150ms

Standard

300ms

Slow

500ms

Extra Slow

700ms

No transition should exceed 700 milliseconds.

---

# Animation Curve

Default

Ease Out

Hover

Ease Out

Entrance

Ease Out

Exit

Ease In

---

# Entrance Animations

Fade In

Opacity

0%

↓

100%

Translate

20px

↓

0px

Duration

500ms

---

# Card Entrance

Delay

80ms between cards

Maximum Delay

480ms

Cards should appear sequentially.

---

# Section Entrance

Each section begins animation only after entering the viewport.

Animation Trigger

Intersection Observer

Threshold

20%

Animation Replay

Disabled

---

# Hover Motion

Maximum Translation

6px

Maximum Scale

1.05

No component should rotate.

No bounce animation.

No elastic movement.

---

# Elevation System

Purpose

Provide subtle depth hierarchy.

---

# Elevation Level 0

No Shadow

Used for

Flat Sections

---

# Elevation Level 1

0 4px 8px rgba(0,0,0,0.05)

Used for

Small Components

---

# Elevation Level 2

0 10px 20px rgba(0,0,0,0.06)

Used for

Cards

---

# Elevation Level 3

0 20px 40px rgba(0,0,0,0.08)

Used for

Hovered Cards

Floating Elements

---

# Elevation Level 4

0 30px 60px rgba(0,0,0,0.12)

Used only for

Modal

Large Overlay

Navigation Dropdown

---

# Shadow System

All shadows should use neutral black.

Avoid colored shadows.

Shadow opacity should remain below 15%.

Shadow Blur

Small

8px

Medium

20px

Large

40px

Extra Large

60px

---

# Border Radius System

Small

8px

Medium

12px

Large

16px

Extra Large

24px

Circular

999px

Never introduce custom radius values.

All components must inherit from this scale.

---

# Border System

Standard Border

1px solid #BBCABF

Interactive Border

1px solid Primary Green

Dark Border

rgba(255,255,255,0.10)

---

# Spacing System

The interface follows an 8-point spacing methodology.

Available Spacing Units

4px

8px

12px

16px

20px

24px

32px

40px

48px

64px

80px

96px

120px

Spacing outside this system is prohibited.

---

# Internal Component Spacing

Icon to Title

16px

Title to Description

16px

Card Padding

32px

Button Icon Gap

8px

Section Heading Gap

20px

Paragraph Gap

12px

Card Grid Gap

24px

Section Gap

80px

---

# CSS Design Tokens

## Colors

Primary Green

#006C49

Secondary Blue

#006591

Background

#F8F9FF

Surface

#FFFFFF

Secondary Surface

#EFF4FF

Dark Surface

#031427

Primary Text

#0B1C30

Secondary Text

#3C4A42

Border

#BBCABF

Success

#16A34A

Warning

#D97706

Danger

#DC2626

---

# Typography Tokens

Font Heading

Manrope

Font Body

Hanken Grotesk

H1

48px

H2

32px

H3

24px

H4

20px

Body Large

18px

Body

16px

Caption

14px

Label

12px

---

# Radius Tokens

Radius Small

8px

Radius Medium

12px

Radius Large

16px

Radius Extra Large

24px

Radius Full

999px

---

# Shadow Tokens

Shadow Small

0 4px 8px rgba(0,0,0,0.05)

Shadow Medium

0 10px 20px rgba(0,0,0,0.06)

Shadow Large

0 20px 40px rgba(0,0,0,0.08)

Shadow Extra Large

0 30px 60px rgba(0,0,0,0.12)

---

# Animation Tokens

Transition Fast

150ms

Transition Standard

300ms

Transition Slow

500ms

Timing Function

Ease Out

Hover Translation

-4px

Maximum Hover Scale

1.05

---

# End of Part 4


# Profile Page Frontend Design Specification

# Part 5A — Accessibility Specification, Responsive Behaviour, Layout Constraints, Image Optimization, Performance Rules, and Frontend Quality Standards

---

# Accessibility Specification

## Accessibility Philosophy

The DLH Tulungagung website is a public government service platform.

Every citizen must be able to access the interface regardless of age, device, screen size, or physical ability.

Accessibility is not an optional enhancement.

Accessibility is considered part of the core design system.

All frontend implementations should follow WCAG 2.1 AA recommendations whenever possible without compromising the established Eco-Gov Modern visual identity.

Visual accessibility should be treated as a mandatory design requirement.

---

# Text Readability

Every text element throughout the Profile Page must remain readable under normal viewing conditions.

Minimum Body Font Size

16px

Preferred Reading Line Height

170%

Maximum Reading Width

75 Characters

Paragraph Alignment

Left

Avoid justified text.

Never reduce body typography below 16px.

---

# Heading Hierarchy

Every page must preserve semantic heading order.

The Profile Page should contain only one H1 element.

Recommended hierarchy

H1

Page Title

H2

Major Section Titles

H3

Cards

Organization Positions

Gallery Titles

Do not skip heading levels.

Avoid using headings only for visual styling.

---

# Color Contrast

Every foreground element must maintain sufficient contrast against its background.

Minimum Contrast Ratio

Normal Text

4.5 : 1

Large Text

3 : 1

Interactive Components

3 : 1

Icons

3 : 1

Primary Green must never be placed directly on low-contrast backgrounds.

White typography over photography must always be protected using a dark overlay.

---

# Interactive Target Size

Every clickable element must satisfy the minimum interaction area.

Minimum Width

44px

Minimum Height

44px

Buttons

48px

Navigation Links

48px

Icon Buttons

48px

Cards

Entire Card Clickable

This improves usability on touch devices.

---

# Keyboard Accessibility

Every interactive element must support keyboard navigation.

Tab Order

Logical

Sequential

Predictable

Focus must never become trapped inside standard page components.

The navigation sequence should follow the visual reading order.

---

# Focus Indicator

Every interactive component must display a visible focus state.

Focus Ring

2px

Color

rgba(0,108,73,0.35)

Offset

2px

Border Radius

Matches component radius

Focus indicators should remain visible even on dark backgrounds.

---

# Screen Reader Compatibility

Decorative images

aria-hidden="true"

Meaningful images

Require descriptive alternative text.

Icons used only for decoration

Hidden from screen readers.

Interactive icons

Require accessible labels.

Buttons

Require descriptive labels.

Navigation landmarks

Should use semantic HTML5 elements.

---

# Responsive Behaviour

## General Philosophy

Responsive behavior must preserve the visual hierarchy rather than replicate desktop layouts.

Layouts adapt.

Design language remains unchanged.

Typography scales proportionally.

Spacing remains generous.

Components should never feel compressed.

---

# Large Desktop

Viewport

1440px and above

Container Width

1280px

Grid

12 Columns

Section Padding

96px

Card Gap

32px

Maximum Reading Width

760px

Photography should appear at full quality.

---

# Desktop

Viewport

1280px

Container Width

1200px

Grid

12 Columns

Spacing

80px

Card Gap

24px

Organization Tree remains fully expanded.

Gallery uses three columns.

---

# Laptop

Viewport

1024px

Grid

12 Columns

Container Padding

40px

Gallery

Three Columns

Organization Tree

Reduced horizontal spacing

Typography

Unchanged

---

# Tablet

Viewport

768px

Grid

8 Columns

Container Padding

32px

Vision and Mission

May remain two columns depending on available width.

Gallery

Two Columns

Footer

Two Columns

Organization Structure

Reduced connector width

Cards resized proportionally.

---

# Mobile Large

Viewport

480px

Grid

4 Columns

Container Padding

20px

Navigation

Collapsed

Vision

Stacked

Mission

Stacked

Organization Tree

Converted into vertical card layout.

Connector lines removed.

Gallery

Single Column

Footer

Single Column

Cards

Full Width

Buttons

Full Width where appropriate.

---

# Mobile Small

Viewport

360px

Container Padding

16px

Typography

Maintain hierarchy.

Reduce only spacing.

Cards

Remain readable.

Images

Maintain aspect ratio.

Never reduce internal card padding below 20px.

---

# Section Behaviour

Hero

Centered

Vision & Mission

Stacked

Organization

Vertical

Tupoksi

Single Column

Gallery

Single Column

Footer

Stacked

No horizontal scrolling is permitted.

---

# Layout Constraints

The following constraints are mandatory.

Content must always remain centered.

No component may exceed container width.

No element may overlap another.

Cards should always align to the responsive grid.

Section spacing should never collapse.

Images should never stretch.

Buttons should never wrap their text.

Typography hierarchy must remain unchanged.

Component radius values must remain consistent.

Shadow hierarchy must remain consistent.

Spacing scale must never be violated.

---

# Image Optimization Rules

Every image used within the Profile Page must be optimized for responsive delivery.

Preferred Formats

WebP

AVIF

Fallback

JPEG

PNG only when transparency is required.

---

# Image Resolution

Hero Images

High Resolution

Gallery Images

Minimum

1600px

Organization Avatars

512px

Icons

SVG

Avoid bitmap icons.

---

# Lazy Loading

Gallery Images

Enabled

Footer Images

Enabled

Decorative Images

Lazy Loaded

Above-the-fold images should load immediately.

---

# Image Cropping

Object Fit

Cover

Object Position

Center

Portraits

Centered on face.

Landscape

Centered on subject.

Never stretch images.

Never distort proportions.

---

# Performance Rules

The Profile Page should prioritize perceived performance.

Animation should not block rendering.

Images should load progressively.

Avoid unnecessary DOM nesting.

Avoid deeply nested containers.

Reduce layout shifts.

Maintain consistent element dimensions before image loading.

---

# Frontend Performance Targets

Largest Contentful Paint

Below 2.5 seconds

Cumulative Layout Shift

Below 0.1

Interaction to Next Paint

Below 200 milliseconds

First Contentful Paint

Below 1.8 seconds

---

# CSS Best Practices

Avoid inline styles.

Use reusable utility classes.

Avoid duplicated component styling.

Prefer design tokens over hardcoded values.

Avoid unnecessary z-index values.

Avoid excessive specificity.

Component styles should remain modular.

---

# Semantic HTML

Navigation

<nav>

Main Content

<main>

Sections

<section>

Articles

<article>

Footer

<footer>

Buttons

<button>

Navigation Links

<a>

Organization Lists

<ul>

<li>

Cards containing standalone content may use

<article>

Use semantic markup whenever possible.

---

# Frontend Quality Standards

The completed page should satisfy the following principles.

Consistent spacing.

Consistent typography.

Consistent animations.

Consistent border radius.

Consistent elevation.

Predictable interactions.

Responsive behavior.

Accessible navigation.

Professional institutional appearance.

Environmental visual identity.

Maintainability.

Component reusability.

Scalability.

No visual clutter.

No unnecessary decoration.

No inconsistent spacing.

No inconsistent colors.

No inconsistent typography.

No inconsistent shadows.

Every visual decision should reinforce the Eco-Gov Modern design language established throughout the website.

---

# End of Part 5A



# Profile Page Frontend Design Specification

# Part 5B — Tailwind Mapping, GitHub Copilot Agent Implementation Rules, Design Constraints, Definition of Done, Acceptance Criteria, QA Checklist, and Pixel-Perfect Verification

---

# Tailwind CSS Design Mapping

## Purpose

The following Tailwind CSS utility mapping serves as an implementation reference only.

GitHub Copilot Agent should interpret these utilities as the closest equivalent to the original Stitch.ai prototype.

The utility classes below define the expected visual characteristics.

Component-specific refinements are allowed provided they do not alter the established visual language.

---

# Layout

Container

```
max-w-7xl
mx-auto
```

Horizontal Padding

Desktop

```
px-12
```

Laptop

```
px-10
```

Tablet

```
px-8
```

Mobile

```
px-5
```

Small Mobile

```
px-4
```

Section Vertical Padding

```
py-20
```

Large Section Padding

```
py-24
```

Grid Gap

```
gap-6
```

Large Gap

```
gap-8
```

---

# Card

```
bg-white
rounded-2xl
border
border-slate-200
shadow-md
transition-all
duration-300
ease-out
```

Hover

```
hover:-translate-y-1
hover:shadow-xl
hover:border-emerald-700
```

---

# Button

Primary

```
bg-emerald-700
text-white
rounded-xl
px-6
py-3
font-semibold
transition-all
duration-300
hover:bg-emerald-600
hover:-translate-y-0.5
hover:shadow-lg
focus:outline-none
focus:ring-2
focus:ring-emerald-700
focus:ring-offset-2
```

Secondary

```
border
border-emerald-700
text-emerald-700
bg-transparent
rounded-xl
hover:bg-emerald-50
```

Ghost

```
bg-transparent
hover:bg-emerald-50
```

---

# Typography

Heading

```
font-manrope
font-bold
text-slate-900
```

Body

```
font-hanken
text-slate-700
leading-7
```

Caption

```
text-sm
text-slate-500
```

---

# Images

```
object-cover
rounded-3xl
overflow-hidden
```

Gallery Overlay

```
bg-gradient-to-t
from-slate-950
via-slate-900/60
to-transparent
```

---

# Navigation

```
fixed
top-0
left-0
right-0
backdrop-blur-xl
bg-white/70
border-b
z-50
```

---

# Footer

```
bg-slate-950
text-white
```

---

# GitHub Copilot Agent Implementation Rules

## General Objective

GitHub Copilot Agent must reproduce the Profile Page with maximum visual fidelity based on this specification.

The implementation must preserve the Eco-Gov Modern design language established across the entire website.

The objective is implementation, not reinterpretation.

---

# Component Reuse

All reusable UI elements must originate from shared components whenever possible.

Do not duplicate identical components with different styling.

Cards

Buttons

Typography

Spacing

Animations

Navigation

Footer

should all reuse common implementations.

---

# Design Consistency

Every newly created component must inherit the same design language.

Never introduce additional color palettes.

Never introduce different border radius values.

Never introduce different typography scales.

Never introduce inconsistent shadows.

Never introduce inconsistent spacing.

Consistency has higher priority than experimentation.

---

# Responsive Behaviour Rules

The responsive implementation must preserve hierarchy rather than attempting to preserve identical layouts.

Components should naturally stack.

Whitespace should remain generous.

Interactive targets should remain accessible.

No horizontal scrolling.

No clipped content.

No overlapping components.

---

# Animation Rules

Animations should enhance orientation.

Animations should never distract users.

Maximum hover translation

6px

Maximum scale

1.05

No bouncing.

No elastic effects.

No rotation.

No parallax effects.

No infinite animation loops except loading indicators.

---

# Image Rules

Use real environmental photography.

Avoid placeholder images in production.

Avoid distorted aspect ratios.

Preserve consistent image treatment throughout the gallery.

Maintain identical border radius values.

---

# Accessibility Rules

Every interactive component must support

Keyboard navigation

Focus indicators

Visible hover states

Proper semantic markup

Alternative text for informative images

Minimum touch target size

Color contrast

Accessibility must never be sacrificed for visual appearance.

---

# Mandatory DO Rules

GitHub Copilot Agent shall:

Maintain the Eco-Gov Modern visual language.

Maintain responsive behavior.

Maintain semantic HTML.

Use reusable components.

Follow the spacing scale.

Follow the typography hierarchy.

Maintain consistent border radius.

Maintain consistent shadows.

Maintain consistent animations.

Maintain accessible interactions.

Optimize images.

Lazy load gallery images.

Keep code modular.

Keep styles reusable.

Maintain readable source code.

Use descriptive class names.

Use consistent naming conventions.

Preserve visual hierarchy.

Maintain whitespace.

Use smooth transitions.

Optimize layout stability.

Maintain component scalability.

Follow modern frontend development practices.

---

# Strict DON'T Rules

GitHub Copilot Agent shall never:

Redesign the layout.

Change typography.

Replace colors.

Use random spacing.

Create oversized buttons.

Create oversized icons.

Use heavy shadows.

Use glassmorphism where not specified.

Use neumorphism.

Use skeuomorphic effects.

Use excessive gradients.

Use decorative background illustrations.

Use autoplay videos.

Use animated backgrounds.

Use inconsistent hover effects.

Use inconsistent border radius.

Use inconsistent shadows.

Use inconsistent typography.

Stretch images.

Crop important image subjects.

Reduce accessibility.

Ignore responsive layouts.

Hardcode duplicated styles.

Create deeply nested containers.

Use unnecessary wrapper elements.

Break the established grid.

Introduce visual clutter.

Reduce whitespace.

Ignore semantic HTML.

---

# Recommended Implementation Workflow

Step 1

Create the page layout.

Step 2

Implement navigation.

Step 3

Implement Hero.

Step 4

Implement Vision & Mission.

Step 5

Implement Organization Structure.

Step 6

Implement Tupoksi Cards.

Step 7

Implement Activity Gallery.

Step 8

Implement Footer.

Step 9

Apply responsive behavior.

Step 10

Apply animations.

Step 11

Apply accessibility.

Step 12

Perform visual QA.

---

# Definition of Done

The Profile Page is considered complete only when:

Navigation matches the homepage.

Spacing follows the design system.

Typography hierarchy is correct.

Cards share identical styling.

Buttons share identical styling.

Gallery layout matches the specification.

Organization hierarchy is readable.

Responsive behavior works correctly.

Animations are subtle.

Accessibility requirements are satisfied.

Images are optimized.

Performance targets are achieved.

No visual inconsistencies remain.

No layout shifts occur.

No overflow exists.

No console errors exist.

No accessibility violations remain.

---

# Final Acceptance Criteria

The completed implementation should satisfy the following criteria.

Visual Fidelity

The implemented page closely matches the Stitch.ai prototype.

Component Consistency

Every reusable component appears visually identical throughout the interface.

Responsive Quality

The page remains fully usable from 360px mobile screens to large desktop monitors.

Accessibility

Interactive elements satisfy accessibility requirements.

Maintainability

The codebase remains modular and reusable.

Scalability

Additional Profile-related sections can be added without redesigning the existing architecture.

Performance

Images are optimized.

Animations remain lightweight.

Rendering remains smooth.

Brand Identity

The Eco-Gov Modern design language is preserved across every visible element.

---

# Visual Quality Assurance Checklist

Before approving the implementation, verify the following.

Navigation is fixed and behaves correctly.

Hero section spacing matches the specification.

Vision and Mission cards align correctly.

Organization structure is symmetrical on desktop.

Organization cards stack correctly on mobile.

Connector lines are evenly aligned.

Tupoksi cards share identical dimensions.

Gallery cards maintain equal heights.

Image overlays ensure readable typography.

Footer columns align correctly.

Typography hierarchy remains consistent.

Primary Green is consistently applied.

Secondary Blue is only used as a supporting accent.

Border radius values remain consistent.

Elevation levels follow the specification.

Hover animations remain subtle.

Keyboard navigation functions correctly.

Focus states are visible.

No horizontal scrolling occurs.

Whitespace remains consistent.

---

# Pixel-Perfect Verification Checklist

Final verification should confirm:

Component spacing differs by no more than ±2px from the specification.

Typography sizes match the defined scale.

Container widths remain consistent across breakpoints.

Section padding follows the spacing system.

Grid alignment remains consistent.

Card heights remain uniform.

Images retain correct aspect ratios.

Icons remain aligned.

Buttons maintain identical dimensions.

Animations follow specified durations and easing.

The completed page visually appears as a seamless continuation of the Homepage without introducing any inconsistent visual language.

---

# Final Implementation Statement

This document constitutes the complete frontend implementation specification for the Profile Page of the DLH Tulungagung website.

GitHub Copilot Agent should interpret this document as the authoritative implementation reference.

Any implementation decision not explicitly defined within this document should follow the established Eco-Gov Modern design language, prioritize consistency over creativity, preserve responsive behavior, maintain accessibility, and ensure that the final result remains visually aligned with the original Stitch.ai prototype and the overall DLH Tulungagung design system.

# End of design.md
