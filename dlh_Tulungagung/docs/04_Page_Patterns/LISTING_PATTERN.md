V# Berita (News) Page Frontend Design Specification

## Eco-Gov Modern Design System

### Version 1.0

### Page: Berita / Warta Lingkungan

---

# 1. Document Overview

This document serves as the complete frontend design specification for the **Berita (News / Warta Lingkungan)** page of the Dinas Lingkungan Hidup Kabupaten Tulungagung website.

The purpose of this document is to provide a single implementation reference for GitHub Copilot Agent and frontend developers during the development process. Every design decision described in this specification must be treated as an implementation requirement rather than a visual suggestion.

The page represents the official news and publication portal of the Environmental Agency. It is designed to present environmental news, governmental activities, announcements, environmental campaigns, and educational articles using a modern, clean, trustworthy, and highly readable interface.

The visual language follows the **Eco-Gov Modern Design System**, combining governmental professionalism, environmental identity, modern web aesthetics, accessibility standards, and responsive interaction patterns.

Every component defined within this document must be reusable, responsive, accessible, maintainable, and consistent across the entire website.

This specification intentionally defines visual behavior, layout architecture, interaction patterns, spacing, typography, responsiveness, animation, accessibility, and implementation rules in sufficient detail to minimize ambiguity during frontend development.

---

# 2. Design Philosophy

The Berita page is not intended to function as a traditional blog.

Instead, it should communicate authority, credibility, transparency, and environmental responsibility while maintaining excellent readability for large volumes of content.

The overall design philosophy is based on five primary principles:

## 2.1 Information First

Information is always prioritized above decoration.

Visual elements should enhance understanding without competing with the content.

Users should immediately understand:

* Featured news
* Latest news
* Categories
* Archives
* Environmental updates
* Search functionality

without requiring additional explanation.

---

## 2.2 Environmental Identity

The interface should visually reinforce the identity of the Environmental Agency.

This is accomplished through:

* Natural green color accents
* Clean white surfaces
* Soft blue governmental branding
* Environmental photography
* Minimalistic icons
* Spacious layouts
* Soft rounded corners

Every visual decision should contribute to a trustworthy environmental institution.

---

## 2.3 Readability

The page is expected to contain long-form textual content.

Typography, spacing, line height, card sizing, and image placement should all maximize reading comfort.

The design should reduce cognitive load while encouraging users to continue exploring additional news articles.

---

## 2.4 Modular Architecture

Every section must be designed as an independent reusable component.

No visual styling should depend on hardcoded page structures.

Each component must be capable of reuse on:

* Homepage
* Search Results
* Category Page
* Archive Page
* Related News Section

without modification.

---

## 2.5 Responsive by Default

Responsive behavior is not an enhancement.

It is the default design approach.

Every component must gracefully adapt from:

* Desktop
* Laptop
* Tablet
* Mobile

without introducing overflow, inconsistent spacing, clipped text, or broken layouts.

---

# 3. Overall Design Language

The Berita page follows the Eco-Gov Modern Design Language.

The design system combines the following concepts:

* Modular Minimalism
* Government Digital Interface
* Glassmorphism
* Editorial Layout
* Bento Grid Structure
* Modern Card Design
* Soft Elevation
* Environmental Visual Identity

The page should feel simultaneously:

* Professional
* Calm
* Modern
* Spacious
* Trustworthy
* Easy to navigate

Visual complexity should remain low while maintaining high information density.

---

# 4. Primary User Experience Goals

The page should allow visitors to accomplish the following goals effortlessly.

## Goal 1

Immediately identify the most important environmental news.

---

## Goal 2

Browse recent articles without visual fatigue.

---

## Goal 3

Locate articles through categories.

---

## Goal 4

Search archived publications quickly.

---

## Goal 5

Discover environmental information through a pleasant reading experience.

---

## Goal 6

Access the page comfortably on desktop, tablet, and mobile devices.

---

# 5. Layout Architecture

The page uses a modular editorial layout.

The overall structure consists of:

Navbar

↓

Hero Header

↓

Featured News Section

↓

Main Content Area

├── News Feed

└── Sidebar

↓

Pagination

↓

Footer

Each section must be visually separated using generous white space.

Section spacing must create a clear reading rhythm while avoiding unnecessary scrolling.

---

# 6. Container System

Maximum Content Width

1280px

Desktop Horizontal Padding

32px

Laptop Horizontal Padding

24px

Tablet Horizontal Padding

20px

Mobile Horizontal Padding

16px

Container Alignment

Centered

Margin

Auto

The layout must never stretch edge-to-edge on large displays.

---

# 7. Responsive Grid System

Desktop

12 Columns

Laptop

12 Columns

Tablet

8 Columns

Mobile

4 Columns

Grid Gap

24px

The layout should always preserve proportional spacing regardless of screen size.

---

# 8. Desktop Layout Structure

Desktop Width

1440px and above

Main Layout

65% News Feed

35% Sidebar

Gap

32px

Sidebar remains sticky while scrolling.

---

# 9. Laptop Layout Structure

Width

1024px–1439px

Main Layout

60% Content

40% Sidebar

Gap

24px

Sidebar width must never become smaller than 320px.

---

# 10. Tablet Layout Structure

Width

768px–1023px

The layout automatically transforms into a single-column reading experience.

Structure:

Hero

↓

Featured News

↓

News Feed

↓

Pagination

↓

Search Widget

↓

Categories

↓

Archives

↓

Air Quality Widget

↓

Footer

Sidebar components are repositioned beneath the news feed.

Sticky positioning is disabled.

---

# 11. Mobile Layout Structure

Width

320px–767px

Every component occupies the full available width.

Structure

Navbar

↓

Hero

↓

Featured Article

↓

Latest Articles

↓

Pagination

↓

Sidebar Widgets

↓

Footer

No horizontal scrolling is permitted.

No cropped content is permitted.

Every card should feel comfortably spaced.

---

# 12. White Space Strategy

White space is considered an active design element.

It improves:

* readability
* visual hierarchy
* scanability
* accessibility

Required spacing values:

Between Hero and Featured Section

64px

Between Major Sections

80px

Between Cards

24px

Inside Cards

32px

Mobile Card Padding

20px

Widget Gap

24px

Button Gap

12px

Icon Gap

8px

Text Group Gap

16px

The spacing scale must consistently follow an 8-point design system.

---

# 13. Design Principles for Components

Every component must follow these principles:

• Rounded corners instead of sharp edges.

• Soft shadows rather than hard borders.

• Consistent spacing across all modules.

• Visual hierarchy created through typography before color.

• Images should support information rather than dominate it.

• Hover interactions should be subtle and fast.

• Animations should enhance usability rather than distract users.

• Every component must remain visually balanced regardless of content length.

• Long titles should never break layouts.

• Cards must expand vertically instead of overflowing horizontally.

---

# 14. Responsive Design Principles

Responsive implementation must prioritize usability over visual consistency.

On smaller devices:

* Sidebar becomes stacked sections.

* Horizontal cards become vertical.

* Image sizes become shorter.

* Font sizes reduce proportionally.

* Margins become tighter.

* Buttons become larger for touch interaction.

* Touch targets must be at least 44×44 pixels.

* Pagination remains centered.

* Search field becomes full width.

* Widgets stack vertically.

The mobile version must never appear as a scaled-down desktop layout.

Instead, it should be specifically optimized for handheld devices.

---

# 15. Implementation Guidelines for GitHub Copilot Agent

The implementation generated from this specification must adhere to the following architectural principles.

All page sections must be implemented as reusable components.

Avoid duplicated styling.

Avoid inline styles unless dynamically required.

Prefer design tokens over hardcoded values.

Every spacing value must use the predefined spacing system.

Every color must reference the global design token.

Every typography style must reference the global typography token.

Every radius value must use the shared radius scale.

Every elevation must use the shared shadow token.

All layouts must use CSS Grid or Flexbox appropriately.

Images must preserve aspect ratio using object-fit: cover.

Animations must utilize GPU-accelerated properties such as transform and opacity.

No animation should trigger layout reflow.

Accessibility must be preserved across all interactions.

Every interactive component must be keyboard accessible.

Every image must include descriptive alternative text.

All buttons and links must contain accessible labels.

Performance optimization should be considered during implementation, including lazy loading, responsive images, and minimized layout shifts.

This document defines the mandatory implementation baseline for the Berita page. Subsequent sections will describe the Color System, Typography System, Navigation, Hero Section, News Components, Sidebar Widgets, Pagination, Animations, Accessibility, and Performance specifications in complete implementation detail.


# 16. Color System

The Berita page adopts the official **Eco-Gov Modern** color palette. The color system is designed to establish a strong environmental identity while maintaining a professional governmental appearance. Every color serves a functional purpose and must never be used arbitrarily.

All UI elements must reference the global color tokens rather than using hardcoded hexadecimal values. The design system should ensure consistency across every page of the application.

---

## 16.1 Primary Color

**Name**

Primary Green

**HEX**

```text
#006C49
```

This is the primary brand color representing sustainability, environmental conservation, trust, and institutional identity.

Primary Green must be used for:

* Active navigation indicators
* Active pagination buttons
* Category chips
* Primary icons
* Interactive highlights
* Focus indicators
* Primary buttons
* Selected filter chips
* Success emphasis
* Hyperlinks on hover

Primary Green should never dominate the entire interface. It should function as an accent color guiding user attention.

---

## 16.2 Secondary Color

**Name**

Government Blue

**HEX**

```text
#006591
```

The secondary color reinforces the governmental branding of the website.

It should primarily appear on:

* Primary call-to-action buttons
* Footer backgrounds
* Information banners
* Secondary highlights
* Informational badges
* Data widgets

Secondary Blue must never visually compete with Primary Green.

---

## 16.3 Background Color

**Name**

Canvas Background

**HEX**

```text
#F8F9FF
```

This color serves as the global page background.

It should remain visible between sections to create a light, breathable interface.

Never replace the background with pure white.

---

## 16.4 Surface Color

**Name**

Surface White

**HEX**

```text
#FFFFFF
```

Used for:

* News cards
* Sidebar widgets
* Search boxes
* Pagination
* Floating panels
* Dialogs
* Information containers

Surface White provides maximum readability.

---

## 16.5 Dark Surface

**Name**

Dark Navy

**HEX**

```text
#031427
```

Used exclusively for:

* Hero section
* Premium banners
* Footer
* High-impact callout sections

Dark surfaces create visual anchors at the beginning and end of the page.

---

## 16.6 Heading Color

**HEX**

```text
#0B1C30
```

Applied to:

* Main headings
* Article titles
* Widget titles
* Section titles

Heading text must always maintain strong visual contrast.

---

## 16.7 Body Text Color

**HEX**

```text
#3C4A42
```

Used for:

* Descriptions
* Metadata
* Paragraphs
* Labels
* Supporting information

Body text should remain comfortable during extended reading sessions.

---

## 16.8 Border Color

**RGBA**

```text
rgba(11,28,48,0.08)
```

Applied to:

* Card outlines
* Input borders
* Widget separators
* Dividers

Borders should remain subtle and never become visually dominant.

---

## 16.9 Success Color

HEX

```text
#3BB273
```

Used for:

* Excellent Air Quality
* Positive status indicators
* Success notifications

---

## 16.10 Warning Color

HEX

```text
#FFC107
```

Used for:

* Moderate environmental status
* Alert labels
* Temporary notices

---

## 16.11 Danger Color

HEX

```text
#F44336
```

Used for:

* Poor air quality
* Critical alerts
* Validation errors

---

## 16.12 Neutral Gray Scale

Gray 50

```text
#F9FAFB
```

Gray 100

```text
#F3F4F6
```

Gray 200

```text
#E5E7EB
```

Gray 300

```text
#D1D5DB
```

Gray 400

```text
#9CA3AF
```

Gray 500

```text
#6B7280
```

Gray 600

```text
#4B5563
```

Gray 700

```text
#374151
```

Gray 800

```text
#1F2937
```

Gray 900

```text
#111827
```

Neutral colors are primarily reserved for typography, placeholders, dividers, disabled controls, and background variations.

---

# 17. Typography System

Typography is one of the most important visual foundations of the Berita page.

The hierarchy must clearly distinguish:

* Page titles
* Section titles
* Article titles
* Metadata
* Body content
* Supporting labels

Typography should never rely on color alone to establish hierarchy.

---

## 17.1 Font Families

Primary Heading Font

**Manrope**

Usage:

* Hero title
* Section headings
* Article titles
* Sidebar titles

Characteristics:

* Modern
* Clean
* Geometric
* Highly readable

---

Secondary Font

**Hanken Grotesk**

Usage

* Body paragraphs
* Metadata
* Buttons
* Labels
* Search inputs
* Form controls

Characteristics

* Neutral
* Professional
* Comfortable for long reading

---

# 18. Typography Scale

## H1

Used for:

Main Hero Title

Font Size

40px

Weight

800

Line Height

1.2

Letter Spacing

-0.02em

---

## H2

Used for:

Featured Article Titles

Font Size

32px

Weight

700

Line Height

1.3

---

## H3

Used for:

Section Titles

Sidebar Titles

Font Size

24px

Weight

700

---

## H4

Used for:

News Card Titles

Font Size

20px

Weight

600

---

## H5

Used for:

Widget Labels

Font Size

18px

Weight

600

---

## Body Large

Font Size

18px

Weight

400

Line Height

1.8

---

## Body Medium

Font Size

16px

Weight

400

Line Height

1.7

This is the default paragraph size.

---

## Body Small

Font Size

14px

Weight

400

Line Height

1.6

Used for metadata and supporting information.

---

## Caption

Font Size

12px

Weight

500

Applied to:

* Dates
* Authors
* Categories
* Reading time
* Archive labels

---

# 19. Text Rules

Titles should never exceed two visible lines.

Descriptions should never exceed three visible lines inside cards.

Metadata should always remain on a single line.

Long words must wrap naturally.

Avoid justified text.

All paragraphs must use left alignment.

Maximum paragraph width should remain between 60 and 75 characters for comfortable reading.

---

# 20. Spacing System

The Berita page follows an 8-point spacing system.

Spacing Tokens

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

Spacing must never use arbitrary values.

Every margin and padding should reference these spacing tokens.

---

# 21. Border Radius System

Small

4px

Used for:

Input fields

---

Medium

8px

Used for:

Badges

Buttons

---

Large

12px

Used for:

Small cards

Dropdown menus

---

Extra Large

24px

Used for:

News cards

Hero

Widgets

Sidebar containers

Feature cards

---

Full Radius

9999px

Used for:

Category chips

Profile avatars

Pagination circles

Status badges

---

# 22. Elevation System

The page uses soft layered elevation.

Heavy shadows should never appear.

---

Elevation 1

```text
0 1px 2px rgba(0,0,0,0.05)
```

Applied to:

Inputs

Buttons

Tags

---

Elevation 2

```text
0 4px 6px -1px rgba(0,0,0,0.10)
```

Default card shadow.

---

Elevation 3

```text
0 10px 20px rgba(0,0,0,0.08)
```

Floating widgets

Sticky sidebar

Dropdowns

---

Elevation 4

```text
0 20px 25px -5px rgba(0,0,0,0.10)
```

Hover state

Featured cards

Interactive components

---

# 23. Glassmorphism Specification

Glass effects should be subtle and reserved for premium sections only.

Glass surfaces may be used in:

* Hero Header
* Floating information panels
* Overlay cards

Glass Specification

Background

```text
rgba(255,255,255,0.08)
```

Blur

```text
16px
```

Border

```text
1px solid rgba(255,255,255,0.12)
```

Shadow

Soft only

Opacity must never reduce content readability.

---

# 24. Global Design Tokens

Every frontend implementation must consume centralized design tokens.

The design token categories include:

* Colors
* Typography
* Font Weights
* Radius
* Shadows
* Spacing
* Breakpoints
* Animation Duration
* Transition Curves
* Z-index Layers
* Container Widths
* Icon Sizes
* Grid Gaps

Hardcoded visual values should be avoided wherever possible.

The implementation should allow the entire Berita page to inherit updates from the global design system without requiring component-level modifications.


# 25. Navigation System

The navigation bar is the primary global navigation component of the DLH Tulungagung website. It serves as the main entry point to all public information and digital services. The navigation must remain visually consistent across every page within the website while adapting responsively to different screen sizes.

The navigation should communicate professionalism, clarity, and stability without distracting users from the page content.

Its design follows the Eco-Gov Modern Design System and emphasizes simplicity, accessibility, and usability.

---

# 25.1 Navigation Position

The navigation bar must remain fixed at the top of the viewport.

Position

```
fixed
```

Top

```
0
```

Left

```
0
```

Width

```
100%
```

Z-Index

```
1000
```

The navigation should always remain visible while users scroll through the page.

---

# 25.2 Navigation Height

Desktop

```
80px
```

Laptop

```
80px
```

Tablet

```
72px
```

Mobile

```
68px
```

The navigation height should reduce proportionally on smaller devices without affecting usability.

---

# 25.3 Navigation Background

The navigation uses a semi-transparent glassmorphic background.

Background

```
rgba(255,255,255,0.85)
```

Backdrop Blur

```
12px
```

Border Bottom

```
1px solid rgba(11,28,48,0.08)
```

Shadow

```
0 2px 20px rgba(0,0,0,0.04)
```

When the page is initially loaded, the navigation should blend naturally with the Hero section.

After scrolling beyond 60 pixels, the navigation background should gradually become more opaque.

Scrolled Background

```
rgba(255,255,255,0.96)
```

Transition Duration

```
300ms
```

Transition Timing

```
ease
```

---

# 25.4 Navigation Container

Maximum Width

```
1280px
```

Horizontal Padding

Desktop

```
32px
```

Laptop

```
24px
```

Tablet

```
20px
```

Mobile

```
16px
```

Content Alignment

```
Space Between
```

Vertical Alignment

```
Center
```

---

# 25.5 Navigation Layout Structure

Desktop Layout

```
--------------------------------------------------------
LOGO | Navigation Menu | Search | CTA Button
--------------------------------------------------------
```

Tablet Layout

```
--------------------------------------------
LOGO | Search | Hamburger Menu
--------------------------------------------
```

Mobile Layout

```
--------------------------------------------
LOGO | Search | Menu
--------------------------------------------
```

Navigation items should never wrap into multiple rows.

---

# 25.6 Logo Area

The logo area consists of:

* DLH Logo
* Government Identity
* Organization Name

Layout

```
Horizontal Flex
```

Gap

```
12px
```

Logo Height

Desktop

```
52px
```

Tablet

```
46px
```

Mobile

```
42px
```

Text Alignment

```
Left
```

The logo must remain clickable and always redirect users to the homepage.

---

# 25.7 Navigation Menu

Navigation items should be evenly spaced.

Gap

```
32px
```

Each menu item consists of:

* Label
* Hover Indicator
* Active Indicator

Typography

Font Family

```
Hanken Grotesk
```

Font Size

```
16px
```

Weight

```
500
```

Color

```
#3C4A42
```

---

# 25.8 Active Navigation Item

The current page must always be visually distinguishable.

For the Berita page:

Active Menu

```
Berita
```

Active Color

```
#006C49
```

Bottom Indicator

```
2px
```

Indicator Color

```
#006C49
```

Indicator Width

```
100%
```

Animation Duration

```
220ms
```

The active indicator should animate smoothly when navigating between pages.

---

# 25.9 Hover Interaction

Hover Color

```
#006C49
```

Text Transition

```
200ms
```

Underline Animation

```
Left → Right
```

Scale

```
1.02
```

The hover effect should be subtle and never overly animated.

---

# 25.10 Search Button

The search action should be positioned immediately before the primary call-to-action button.

Icon

```
Material Symbols Outlined
```

Icon Size

```
22px
```

Button Size

```
44px × 44px
```

Shape

```
Circle
```

Hover Background

```
rgba(0,108,73,0.08)
```

Hover Icon Color

```
Primary Green
```

Click Feedback

```
Scale 0.96
```

Transition

```
200ms
```

---

# 25.11 Primary CTA Button

Label

```
Layanan Publik
```

Minimum Width

```
160px
```

Height

```
48px
```

Background

```
#006591
```

Text Color

```
White
```

Radius

```
9999px
```

Hover Background

```
#00557A
```

Hover Elevation

```
Elevation Level 3
```

Transition

```
250ms
```

The CTA button should remain highly visible without dominating the navigation.

---

# 25.12 Mobile Navigation

On screens smaller than 768 pixels:

The desktop navigation menu must be hidden.

Instead, display:

* Logo
* Search Button
* Hamburger Button

The hamburger button should open a full-height off-canvas navigation drawer.

Drawer Width

```
320px
```

Maximum Width

```
85vw
```

Animation

```
Slide From Right
```

Duration

```
300ms
```

Background

```
White
```

Overlay

```
rgba(0,0,0,0.35)
```

The drawer should close when:

* Overlay is clicked.
* Escape key is pressed.
* Navigation link is selected.

---

# 25.13 Navigation Accessibility

The navigation must satisfy WCAG 2.1 AA accessibility standards.

Requirements include:

* Keyboard navigable.
* Logical tab order.
* Visible focus ring.
* Screen reader compatibility.
* Descriptive aria-label attributes.
* Accessible menu drawer behavior.
* Focus trapping within the mobile drawer.
* Escape key support.

Minimum touch target

```
44 × 44 px
```

Focus Indicator

```
2px Primary Green Outline
```

---

# 26. Hero Header

The Hero Header introduces the Berita page and establishes its visual identity.

Unlike promotional hero banners, this section functions as an editorial page header.

Its purpose is to communicate authority, trustworthiness, and professionalism while immediately informing visitors that they have entered the official environmental news portal.

The Hero should appear premium without becoming visually overwhelming.

---

# 26.1 Hero Container

Maximum Width

```
1280px
```

Desktop Height

```
420px
```

Laptop Height

```
400px
```

Tablet Height

```
340px
```

Mobile Height

```
280px
```

Border Radius

```
24px
```

Overflow

```
Hidden
```

Position

```
Relative
```

---

# 26.2 Hero Background

The Hero uses a dark environmental gradient.

Gradient

```
#031427

↓

#0B1C30
```

An optional background image may be layered beneath the gradient.

Recommended imagery:

* Forest conservation
* Environmental officers
* Waste management
* Tree planting
* River cleaning
* Community environmental programs

The background image should use:

```
object-fit: cover
```

Opacity

```
18%
```

This ensures the imagery enhances the atmosphere without reducing text readability.

---

# 26.3 Hero Overlay

An additional translucent overlay should improve content legibility.

Background

```
rgba(3,20,39,0.55)
```

Glass Layer

```
rgba(255,255,255,0.06)
```

Backdrop Blur

```
16px
```

Border

```
1px solid rgba(255,255,255,0.08)
```

The glass layer should remain subtle and only provide depth rather than obvious visual decoration.

---

# 26.4 Hero Content Layout

The Hero content should be vertically centered within the container.

Alignment

```
Vertical Center
```

Horizontal

```
Left
```

Maximum Content Width

```
720px
```

Internal Padding

Desktop

```
48px
```

Tablet

```
40px
```

Mobile

```
24px
```

The layout should provide sufficient breathing space around all content elements and maintain excellent readability across all device sizes.


# 27. Featured News Section (Main Highlight)

The Featured News Section is the highest-priority content area on the Berita page after the Hero Header. Its purpose is to immediately attract user attention to the most important environmental news, official announcements, or strategic governmental publications.

This section must visually dominate the beginning of the news feed while maintaining harmony with the overall page layout.

The Featured News component should function as a reusable content module capable of displaying one primary article selected by administrators or dynamically determined by publication priority.

The component should always appear directly below the Hero section.

---

# 27.1 Section Layout

Desktop Layout

```text
-------------------------------------------------------------
|                     Featured News Card                    |
-------------------------------------------------------------
```

The Featured News occupies the full available width of the primary content column.

Sidebar components begin alongside the regular news feed and should never appear beside the Featured News card.

Maximum Width

```text
100%
```

Margin Top

```text
64px
```

Margin Bottom

```text
48px
```

---

# 27.2 Section Title

The section should begin with a clear heading to distinguish featured content from the remaining news feed.

Primary Title

```text
Featured News
```

Alternative Title

```text
Sorotan Utama
```

Typography

Font Family

```text
Manrope
```

Font Size

Desktop

```text
30px
```

Tablet

```text
28px
```

Mobile

```text
24px
```

Font Weight

```text
700
```

Text Color

```text
#0B1C30
```

Margin Bottom

```text
24px
```

The heading should align with the left edge of the content container.

---

# 27.3 Featured Card Structure

The Featured News card consists of the following content hierarchy:

```text
Featured Card

├── Cover Image

├── Featured Badge

├── Category Chip

├── Publication Metadata

├── Headline

├── Summary

├── Read More Button
```

Every element should remain visible without overwhelming the layout.

---

# 27.4 Card Layout

Desktop

Horizontal Layout

```text
---------------------------------------------------------
|                                                       |
|  IMAGE (45%)     |      CONTENT (55%)                |
|                                                       |
---------------------------------------------------------
```

Laptop

Image

```text
45%
```

Content

```text
55%
```

Tablet

Vertical Layout

```text
IMAGE

↓

CONTENT
```

Mobile

Vertical Layout

Image

↓

Content

Both occupy 100% width.

---

# 27.5 Card Container

Background

```text
#FFFFFF
```

Border Radius

```text
24px
```

Overflow

```text
Hidden
```

Border

```text
1px solid rgba(11,28,48,0.08)
```

Default Elevation

Level 2

Hover Elevation

Level 4

Transition

```text
250ms
```

The card should feel elevated without appearing detached from the page.

---

# 27.6 Cover Image

The image is the visual anchor of the Featured News card.

Aspect Ratio

Desktop

```text
16 : 9
```

Tablet

```text
16 : 9
```

Mobile

```text
4 : 3
```

Image Fit

```text
cover
```

Image Position

```text
center
```

The image should never stretch or distort.

Recommended image resolution

Minimum

```text
1600 × 900
```

Image Quality

High-resolution photography with natural colors.

Preferred subjects include:

* Environmental conservation
* Community activities
* Official government events
* Tree planting
* Waste management
* River restoration
* Public education
* Environmental campaigns

---

# 27.7 Image Overlay

A subtle gradient overlay should improve visual depth.

Gradient

```text
Transparent

↓

rgba(0,0,0,0.20)
```

Opacity

Maximum

```text
20%
```

This overlay should never reduce image clarity.

---

# 27.8 Featured Badge

The Featured Badge identifies the article as the highest-priority publication.

Label

```text
Featured
```

Alternative

```text
Top Story
```

Background

```text
#006C49
```

Text Color

```text
#FFFFFF
```

Border Radius

```text
9999px
```

Padding

Horizontal

```text
14px
```

Vertical

```text
8px
```

Font Size

```text
13px
```

Font Weight

```text
600
```

Position

Top-left corner of the image.

Margin

```text
20px
```

Shadow

Soft

The badge should remain visible regardless of image brightness.

---

# 27.9 Category Chip

Each featured article should display one primary category.

Examples

```text
Environment

Climate

Waste Management

Conservation

Education

Government

Community
```

Background

```text
#E6F0ED
```

Text Color

```text
#006C49
```

Font Size

```text
13px
```

Weight

```text
600
```

Padding

Horizontal

```text
14px
```

Vertical

```text
8px
```

Border Radius

```text
9999px
```

Only one category chip should appear within the Featured News card.

---

# 27.10 Metadata Row

The metadata row communicates essential publication information.

Layout

Horizontal Flex

Gap

```text
16px
```

Items

```text
Calendar Icon

Publication Date

•

Author

•

Reading Time
```

Icons

Material Symbols Outlined

Icon Size

```text
18px
```

Icon Color

```text
#6B7280
```

Typography

Font Family

```text
Hanken Grotesk
```

Font Size

```text
14px
```

Weight

```text
500
```

Color

```text
#6B7280
```

Metadata should remain on a single line whenever possible.

---

# 27.11 Featured Headline

The article headline is the primary textual focus.

Typography

Font Family

```text
Manrope
```

Desktop

```text
32px
```

Laptop

```text
30px
```

Tablet

```text
28px
```

Mobile

```text
24px
```

Weight

```text
700
```

Line Height

```text
1.3
```

Letter Spacing

```text
-0.02em
```

Color

```text
#0B1C30
```

Maximum Lines

```text
3
```

If the title exceeds three lines, apply line-clamp.

---

# 27.12 Featured Summary

The summary introduces the article without revealing excessive detail.

Typography

Font Family

```text
Hanken Grotesk
```

Desktop

```text
18px
```

Tablet

```text
17px
```

Mobile

```text
16px
```

Weight

```text
400
```

Line Height

```text
1.8
```

Color

```text
#3C4A42
```

Maximum Lines

```text
4
```

Overflow handling should use CSS line-clamp.

The summary should maintain consistent spacing beneath the headline.

---

# 27.13 Read More Button

Label

```text
Read Full Article
```

Height

```text
50px
```

Minimum Width

```text
180px
```

Border Radius

```text
9999px
```

Background

```text
#006591
```

Text Color

```text
#FFFFFF
```

Font Size

```text
16px
```

Weight

```text
600
```

Leading Icon

```text
arrow_forward
```

Hover Background

```text
#00557A
```

Hover Transform

```text
translateY(-2px)
```

Hover Elevation

Level 3

Transition

```text
250ms
```

The button should clearly encourage users to continue reading the article.

---

# 27.14 Internal Spacing

Image Margin

```text
0
```

Content Padding

Desktop

```text
40px
```

Tablet

```text
32px
```

Mobile

```text
24px
```

Gap Between Elements

```text
16px
```

Bottom Padding

```text
40px
```

The content block should always maintain generous internal spacing to maximize readability.

---

# 27.15 Hover Interaction

Hover interactions should be subtle and professional.

Card Hover

Transform

```text
translateY(-4px)
```

Shadow

Elevation Level 4

Image

Scale

```text
1.04
```

Transition

```text
300ms
```

Button

Background darkens slightly.

Headline

Changes to Primary Green.

Hover effects should never become distracting or excessive.

---

# 27.16 Responsive Behavior

Desktop

Horizontal split layout.

Tablet

Image positioned above content.

Mobile

Single-column layout with full-width button.

Content padding decreases proportionally.

Headline size reduces according to typography scale.

Metadata wraps into two lines if necessary.

The Featured Badge remains positioned over the image.

Images maintain aspect ratio using `object-fit: cover`.

No horizontal scrolling is permitted.

The Featured News card must remain visually balanced across all supported screen sizes.


# 28. News Feed Section

The News Feed Section is the core content area of the Berita page. It presents a chronological collection of published environmental news, official announcements, educational articles, public campaigns, and governmental activities.

Unlike the Featured News component, which emphasizes a single high-priority publication, the News Feed is designed to provide users with a structured, easily scannable list of articles while maintaining visual variety and excellent readability.

The News Feed must support dynamic content loading and remain visually consistent regardless of the number of published articles.

---

# 28.1 Section Purpose

The News Feed should enable users to:

* Quickly scan article headlines.
* Identify categories through visual tags.
* Recognize publication dates.
* Read concise summaries.
* Navigate efficiently to full article pages.
* Continue browsing without visual fatigue.

The News Feed must prioritize clarity over decorative presentation.

---

# 28.2 Layout Architecture

The News Feed occupies the primary content column.

Desktop Layout

```text
---------------------------------------------------
Featured News

↓

News Feed

Card 1

Card 2

Card 3

Card 4

...

Pagination
---------------------------------------------------
```

The cards should appear as a vertical stack with consistent spacing.

Sidebar widgets occupy the secondary column independently.

---

# 28.3 News Feed Width

Desktop

```text
65%
```

Sidebar

```text
35%
```

Gap Between Columns

```text
32px
```

Tablet

```text
100%
```

Mobile

```text
100%
```

The News Feed must always remain the dominant visual area.

---

# 28.4 Section Header

A lightweight header should precede the News Feed.

Title

```text
Latest News
```

Alternative

```text
Latest Publications
```

Typography

Font

```text
Manrope
```

Font Size

Desktop

```text
28px
```

Tablet

```text
26px
```

Mobile

```text
22px
```

Weight

```text
700
```

Color

```text
#0B1C30
```

Margin Bottom

```text
32px
```

Optional Supporting Text

```text
Browse the latest environmental news, official announcements, and community activities from the Environmental Agency.
```

Supporting text should remain concise and no longer than two lines.

---

# 28.5 News Card Layout

Every article should be displayed using a reusable News Card component.

Desktop Layout

```text
--------------------------------------------------------
IMAGE

CONTENT

--------------------------------------------------------
```

Alternative Layout (Every Third Card)

```text
---------------------------------------------
IMAGE | CONTENT
---------------------------------------------
```

Alternating layouts introduce subtle visual rhythm while preserving consistency.

---

# 28.6 Card Structure

Each News Card consists of:

```text
Thumbnail

↓

Category

↓

Metadata

↓

Headline

↓

Summary

↓

Read More Link
```

Each element must appear in the same order throughout the News Feed.

---

# 28.7 Card Container

Background

```text
#FFFFFF
```

Border Radius

```text
24px
```

Border

```text
1px solid rgba(11,28,48,0.08)
```

Shadow

Elevation Level 2

Hover Shadow

Elevation Level 4

Overflow

```text
Hidden
```

Transition

```text
250ms ease
```

Cards should never appear visually heavy.

---

# 28.8 Thumbnail Image

Purpose

Provide immediate visual context.

Aspect Ratio

Landscape

```text
16:9
```

Alternative

```text
4:3
```

Object Fit

```text
cover
```

Object Position

```text
center
```

Minimum Resolution

```text
1200 × 675
```

Recommended Photography

* Environmental officers
* Public activities
* Community collaboration
* Nature
* Conservation
* Waste management
* River cleaning
* Government meetings

Images should maintain authentic documentary aesthetics.

---

# 28.9 Image Loading

Images should support:

* Lazy Loading
* Responsive Source Sets
* Smooth Fade-in

Placeholder

Skeleton Loader

Aspect Ratio Reserved

To prevent layout shift.

Transition

```text
Opacity 250ms
```

---

# 28.10 Category Chip

Position

Above Metadata

Background

```text
#E6F0ED
```

Text

```text
#006C49
```

Font Size

```text
13px
```

Weight

```text
600
```

Padding

```text
8px 14px
```

Border Radius

```text
9999px
```

Maximum

One category chip per card.

---

# 28.11 Metadata

The metadata row provides publication context.

Items

* Calendar Icon
* Publication Date
* Author
* Reading Time

Layout

Horizontal Flex

Gap

```text
14px
```

Typography

Font

```text
Hanken Grotesk
```

Size

```text
14px
```

Weight

```text
500
```

Color

```text
#6B7280
```

Icons

Material Symbols Outlined

Size

```text
18px
```

Metadata should wrap only when absolutely necessary.

---

# 28.12 Headline

Typography

Font

```text
Manrope
```

Desktop

```text
24px
```

Tablet

```text
22px
```

Mobile

```text
20px
```

Weight

```text
700
```

Color

```text
#0B1C30
```

Line Height

```text
1.35
```

Maximum Lines

```text
2
```

Overflow

CSS line-clamp.

---

# 28.13 Summary

Typography

Font

```text
Hanken Grotesk
```

Desktop

```text
16px
```

Tablet

```text
16px
```

Mobile

```text
15px
```

Weight

```text
400
```

Line Height

```text
1.8
```

Color

```text
#3C4A42
```

Maximum Lines

```text
3
```

The summary should entice users to continue reading without duplicating the article introduction.

---

# 28.14 Read More Link

Label

```text
Read More
```

Leading Icon

Material Symbols Outlined

```text
arrow_forward
```

Font

```text
Hanken Grotesk
```

Size

```text
15px
```

Weight

```text
600
```

Color

```text
#006591
```

Hover Color

```text
#006C49
```

Arrow Animation

Translate X

```text
4px
```

Transition

```text
200ms
```

The Read More link should appear lightweight rather than resembling a large button.

---

# 28.15 Internal Card Spacing

Card Padding

Desktop

```text
32px
```

Tablet

```text
28px
```

Mobile

```text
24px
```

Gap Between Internal Elements

```text
16px
```

Gap Between Cards

```text
24px
```

The spacing should create a comfortable reading rhythm.

---

# 28.16 Card Hover Interaction

When hovering over a News Card:

Container

```text
translateY(-3px)
```

Image

```text
Scale(1.03)
```

Headline

Transition to Primary Green.

Shadow

Elevation Level 4.

Duration

```text
250ms
```

Hover interactions must remain smooth and restrained.

---

# 28.17 Card Focus State

Keyboard users should receive clear visual feedback.

Outline

```text
2px solid #006C49
```

Offset

```text
4px
```

Transition

```text
150ms
```

Focus visibility must satisfy WCAG requirements.

---

# 28.18 Card Loading State

When content is loading:

Display Skeleton Cards.

Structure

* Thumbnail Placeholder
* Category Placeholder
* Metadata Placeholder
* Headline Placeholder
* Summary Placeholder

Animation

```text
Shimmer
```

Duration

```text
1.4s
```

Repeat

Infinite until data loads.

Skeleton colors should follow the neutral gray palette.

---

# 28.19 Empty State

If no articles are available, display an informative empty state.

Illustration

Environmental-themed outline illustration.

Headline

```text
No News Available
```

Description

```text
There are currently no published articles. Please check back later for the latest environmental updates.
```

Primary Action

```text
Return to Homepage
```

Illustration Width

```text
240px
```

Vertical Spacing

```text
48px
```

The empty state should reassure users rather than appearing as an error.

---

# 28.20 Error State

If article retrieval fails:

Display an error card.

Icon

Material Symbols Outlined

```text
error
```

Headline

```text
Unable to Load News
```

Description

```text
An unexpected error occurred while loading the latest news articles. Please try again.
```

Retry Button

```text
Retry
```

Background

```text
#FFF8F8
```

Border

```text
1px solid rgba(244,67,54,0.18)
```

Retry button should use the primary brand color to encourage recovery.

---

# 28.21 Responsive Behavior

Desktop

Vertical card stack with generous spacing.

Tablet

Cards occupy full width.

Images remain above content.

Mobile

Single-column layout.

Thumbnail height decreases proportionally.

Typography scales according to the global typography system.

Internal padding reduces while maintaining readability.

Interactive elements expand to maintain minimum touch targets.

No horizontal overflow is permitted.

All cards should remain visually balanced regardless of article title length or summary size.



# 29. Sidebar System

The Sidebar System provides supporting navigation, filtering, and contextual information for the Berita page. While the News Feed serves as the primary reading area, the sidebar enhances discoverability by offering quick access to search, categories, archives, environmental indicators, and other supplementary content.

The Sidebar should remain visually lightweight and never compete with the Featured News or News Feed for user attention.

Every widget inside the Sidebar must be implemented as an independent, reusable component that can also be used on other pages of the DLH Tulungagung website.

---

# 29.1 Sidebar Layout

Desktop Layout

```text
-------------------------------------------------
|               Main Content      |   Sidebar   |
|                                 |             |
|                                 | Search      |
|                                 | Categories  |
|                                 | Archives    |
|                                 | Air Quality |
|                                 | Tags        |
-------------------------------------------------
```

Desktop Width

```text
35%
```

Minimum Width

```text
320px
```

Maximum Width

```text
420px
```

Gap Between Main Content and Sidebar

```text
32px
```

The Sidebar should always remain visually aligned with the top of the News Feed.

---

# 29.2 Sidebar Behavior

Desktop

Sticky Sidebar

Tablet

Static Layout

Mobile

Widgets stacked below the News Feed.

The Sidebar should never overlap the Footer.

Desktop Sticky Offset

```text
100px
```

Position

```text
sticky
```

Top

```text
100px
```

The sticky behavior should automatically deactivate when the viewport width becomes less than **1024px**.

---

# 29.3 Sidebar Widget Container

Each Sidebar widget should be presented inside an independent container.

Background

```text
#FFFFFF
```

Border Radius

```text
24px
```

Border

```text
1px solid rgba(11,28,48,0.08)
```

Shadow

Elevation Level 2

Padding

Desktop

```text
32px
```

Tablet

```text
28px
```

Mobile

```text
24px
```

Spacing Between Widgets

```text
24px
```

Widgets should never visually merge together.

Each widget must clearly communicate its individual purpose.

---

# 29.4 Widget Header

Every Sidebar widget should begin with a consistent header.

Layout

Horizontal Flex

Alignment

Center

Gap

```text
12px
```

Title Typography

Font

```text
Manrope
```

Font Size

```text
20px
```

Weight

```text
600
```

Color

```text
#0B1C30
```

Optional Leading Icon

Material Symbols Outlined

Icon Size

```text
22px
```

Icon Color

```text
#006591
```

Bottom Margin

```text
24px
```

Widget titles should be concise and immediately understandable.

---

# 30. Search Widget

The Search Widget enables visitors to locate articles quickly by entering keywords.

It should be the first widget displayed inside the Sidebar.

---

# 30.1 Search Field

Placeholder

```text
Search environmental news...
```

Height

```text
52px
```

Width

```text
100%
```

Border Radius

```text
9999px
```

Border

```text
1px solid rgba(11,28,48,0.10)
```

Background

```text
#FFFFFF
```

Horizontal Padding

```text
20px
```

Font

```text
Hanken Grotesk
```

Font Size

```text
16px
```

Weight

```text
400
```

Placeholder Color

```text
#9CA3AF
```

---

# 30.2 Search Icon

Position

Inside the input field.

Alignment

Right

Icon

Material Symbols Outlined

```text
search
```

Size

```text
22px
```

Color

```text
#6B7280
```

Hover Color

```text
#006C49
```

Transition

```text
200ms
```

---

# 30.3 Search Interaction

Focus Border

```text
#006C49
```

Focus Shadow

```text
0 0 0 4px rgba(0,108,73,0.12)
```

Transition

```text
200ms
```

Typing should not trigger noticeable layout changes.

The widget should support keyboard submission using the **Enter** key.

---

# 31. Category Widget

The Category Widget enables users to browse articles by topic.

Categories should be displayed in descending order based on the number of published articles.

---

# 31.1 Widget Title

```text
Categories
```

---

# 31.2 Category List

Layout

Vertical Stack

Gap

```text
12px
```

Each category row contains:

* Category Name
* Article Count
* Optional Chevron Icon

Example

```text
Conservation          (12)

Waste Management      (8)

Climate               (5)

Community             (17)

Education             (4)
```

---

# 31.3 Category Item

Height

```text
48px
```

Border Radius

```text
12px
```

Padding

Horizontal

```text
16px
```

Background

Transparent

Hover Background

```text
rgba(0,108,73,0.05)
```

Active Background

```text
#E6F0ED
```

Hover Transition

```text
200ms
```

The article count should appear inside a lightweight rounded badge.

---

# 31.4 Category Badge

Background

```text
rgba(0,108,73,0.08)
```

Text Color

```text
#006C49
```

Font Size

```text
13px
```

Weight

```text
600
```

Border Radius

```text
9999px
```

Padding

```text
4px 10px
```

---

# 32. Archive Widget

The Archive Widget provides chronological access to previously published articles.

Archives should be grouped by month and year.

---

# 32.1 Widget Title

```text
Archives
```

---

# 32.2 Archive Structure

Example

```text
June 2026 (18)

May 2026 (22)

April 2026 (16)

March 2026 (21)
```

Each archive item consists of:

* Calendar Icon
* Month
* Year
* Total Articles

---

# 32.3 Archive Item

Height

```text
46px
```

Border Radius

```text
12px
```

Padding

Horizontal

```text
16px
```

Hover Background

```text
rgba(0,101,145,0.05)
```

Hover Icon Color

```text
#006591
```

Font

```text
Hanken Grotesk
```

Font Size

```text
15px
```

Weight

```text
500
```

Divider

```text
1px solid rgba(11,28,48,0.05)
```

The divider should disappear for the final archive item.

---

# 32.4 Archive Interaction

Hover

Slight background tint.

Icon

Transitions to Government Blue.

Text

Transitions to Primary Green.

Duration

```text
180ms
```

The archive list should remain easy to scan.

---

# 33. Air Quality Widget

The Air Quality Widget provides a quick environmental status overview and reinforces the transparency of environmental information.

This widget should appear below the Archive Widget.

It is intended to display summarized environmental indicators rather than detailed analytical data.

---

# 33.1 Widget Title

```text
Air Quality Status
```

Leading Icon

Material Symbols Outlined

```text
eco
```

---

# 33.2 Status Card

Background

```text
linear-gradient(
180deg,
#F8FFF9,
#FFFFFF
)
```

Border Radius

```text
20px
```

Padding

```text
24px
```

Border

```text
1px solid rgba(0,108,73,0.10)
```

The card should visually stand out while remaining consistent with the Sidebar.

---

# 33.3 Air Quality Indicator

Primary Status

```text
Very Good
```

Status Color

```text
#3BB273
```

Supporting Text

```text
Current environmental monitoring indicates excellent outdoor air quality throughout the monitored area.
```

Typography

Status

```text
22px

Weight 700
```

Description

```text
15px

Weight 400
```

---

# 33.4 Progress Indicator

The environmental status should be visualized using a horizontal progress bar.

Height

```text
10px
```

Border Radius

```text
9999px
```

Background

```text
#E5E7EB
```

Progress Color

```text
#3BB273
```

Example Progress

```text
92%
```

Animation

Width grows from

```text
0%

↓

92%
```

Duration

```text
800ms
```

Timing

```text
ease-out
```

The animation should occur only when the widget enters the viewport.

---

# 33.5 Environmental Illustration

An optional environmental icon or tree illustration may accompany the status.

Preferred Icons

* Tree
* Leaf
* Forest
* Eco

Maximum Width

```text
72px
```

Opacity

```text
0.85
```

The illustration should complement, not dominate, the information.

---

# 33.6 Widget Accessibility

The Air Quality Widget should expose the current status to screen readers.

Progress values should include descriptive labels rather than numeric values alone.

Example

```text
Air quality is currently rated as Very Good with approximately ninety-two percent environmental quality.
```

Color should never be the sole indicator of status.

Supporting text and icons should reinforce meaning.

---

# 33.7 Responsive Behavior

Desktop

Widgets remain stacked within the sticky Sidebar.

Tablet

Widgets move beneath the News Feed while preserving spacing.

Mobile

Every widget expands to full width.

Padding decreases proportionally.

Interactive rows increase to a minimum touch height of **48px**.

The Sidebar should maintain visual consistency regardless of the number of available widgets or the amount of dynamic content displayed.


# 34. Popular News Widget

The Popular News Widget highlights the most frequently viewed or most frequently accessed articles published by the Environmental Agency. Its purpose is to increase content discoverability by directing visitors toward articles that have received significant public attention.

This widget should be data-driven and dynamically updated according to the website's analytics or popularity metrics.

The widget should be positioned below the Air Quality Widget unless otherwise configured by the content administrator.

---

# 34.1 Widget Purpose

The Popular News Widget should allow users to:

* Discover trending environmental topics.
* Access frequently read publications.
* Continue exploring relevant environmental information.
* Increase overall page engagement.

The widget should remain secondary to the News Feed.

---

# 34.2 Widget Header

Title

```text
Popular News
```

Alternative Title

```text
Most Read Articles
```

Leading Icon

Material Symbols Outlined

```text
local_fire_department
```

Icon Size

```text
22px
```

Icon Color

```text
#F59E0B
```

Typography

Font Family

```text
Manrope
```

Font Size

```text
20px
```

Font Weight

```text
600
```

Text Color

```text
#0B1C30
```

Bottom Margin

```text
24px
```

---

# 34.3 Popular Article List

Recommended Number of Items

```text
5
```

Maximum

```text
8
```

Layout

Vertical Stack

Gap

```text
20px
```

Each article consists of:

* Thumbnail
* Rank Number
* Article Title
* Publication Date

---

# 34.4 Article Item Layout

```text
--------------------------------------------------
01

Thumbnail

Article Information

--------------------------------------------------
```

The rank number should remain visually prominent but not dominate the layout.

---

# 34.5 Rank Number

Typography

Font Family

```text
Manrope
```

Font Size

```text
26px
```

Font Weight

```text
800
```

Color

```text
rgba(0,108,73,0.18)
```

Minimum Width

```text
36px
```

Alignment

Center

---

# 34.6 Thumbnail

Aspect Ratio

```text
1 : 1
```

Width

```text
72px
```

Height

```text
72px
```

Border Radius

```text
16px
```

Object Fit

```text
cover
```

Image Quality

High-resolution only.

---

# 34.7 Article Title

Typography

Font

```text
Manrope
```

Font Size

```text
16px
```

Weight

```text
600
```

Color

```text
#0B1C30
```

Maximum Lines

```text
2
```

Overflow

CSS line-clamp.

Hover Color

```text
#006C49
```

---

# 34.8 Publication Date

Icon

Material Symbols Outlined

```text
calendar_month
```

Typography

Font

```text
Hanken Grotesk
```

Font Size

```text
13px
```

Weight

```text
500
```

Color

```text
#6B7280
```

---

# 34.9 Hover Interaction

Hover Background

```text
rgba(0,108,73,0.04)
```

Image Scale

```text
1.05
```

Title

Transitions to Primary Green.

Duration

```text
220ms
```

---

# 35. Recent Posts Widget

The Recent Posts Widget provides quick access to the most recently published articles regardless of popularity.

Unlike the Popular News Widget, this component always reflects publication chronology.

---

# 35.1 Widget Title

```text
Recent Posts
```

Leading Icon

```text
schedule
```

---

# 35.2 Item Structure

Each recent article includes:

* Small Thumbnail
* Headline
* Publication Date

Maximum Items

```text
6
```

Spacing Between Items

```text
18px
```

The layout should remain lightweight to encourage quick scanning.

---

# 35.3 Thumbnail

Width

```text
64px
```

Height

```text
64px
```

Radius

```text
12px
```

Object Fit

```text
cover
```

---

# 35.4 Recent Article Typography

Headline

```text
15px
600
```

Metadata

```text
13px
500
```

Maximum Headline

```text
2 Lines
```

Hover

Headline transitions to Primary Green.

---

# 36. Tag Cloud Widget

The Tag Cloud Widget enables users to browse articles through keywords rather than categories.

Tags should represent frequently occurring topics.

Examples include:

```text
Plastic

Recycling

Mangrove

Education

River

Climate

Waste

Tree Planting

Composting

Pollution
```

---

# 36.1 Layout

Tags should wrap automatically using Flexbox.

Gap

```text
10px
```

Row Gap

```text
10px
```

---

# 36.2 Tag Style

Background

```text
#F3F7F5
```

Text

```text
#006C49
```

Border Radius

```text
9999px
```

Padding

```text
8px 16px
```

Font

```text
14px
500
```

Hover

Background becomes

```text
#006C49
```

Text

```text
White
```

Transition

```text
200ms
```

---

# 37. Newsletter Subscription Widget

The Newsletter Widget allows visitors to subscribe to future environmental publications.

This widget should appear only if the subscription feature exists.

---

# 37.1 Widget Title

```text
Subscribe for Updates
```

Description

```text
Receive the latest environmental news and official announcements directly in your inbox.
```

---

# 37.2 Email Input

Height

```text
52px
```

Radius

```text
9999px
```

Placeholder

```text
Enter your email address
```

Border

```text
1px solid rgba(11,28,48,0.08)
```

Focus

Primary Green outline.

---

# 37.3 Subscribe Button

Width

```text
100%
```

Height

```text
50px
```

Background

```text
#006591
```

Text

```text
White
```

Radius

```text
9999px
```

Hover

Background darkens slightly.

---

# 38. Social Share Widget

The Social Share Widget enables visitors to share the Berita page using social platforms.

The widget should remain visually minimal.

Supported Platforms

* Facebook
* Instagram
* X
* WhatsApp
* Telegram

Icons

Material Symbols or official brand icons where permitted.

---

# 38.1 Icon Button

Size

```text
44px
```

Shape

Circle

Background

```text
White
```

Border

```text
1px solid rgba(11,28,48,0.08)
```

Hover

Primary Green background.

Icon

Transitions to White.

Transition

```text
220ms
```

---

# 39. Sticky Sidebar Rules

Sticky behavior should improve usability rather than obstruct reading.

The Sidebar should remain fixed while the News Feed scrolls.

Sticky Offset

```text
100px
```

The Sidebar must stop before overlapping the Footer.

Sticky mode should automatically disable on:

* Tablet
* Mobile
* Small laptop screens below 1024 pixels

The sticky transition should occur seamlessly without visible jumps.

---

# 40. Sidebar Scroll Behavior

When scrolling:

* Widgets retain their spacing.
* No internal widget should become independently scrollable.
* Long category or archive lists should collapse using a "Show More" interaction after ten items.

Expanded state should animate smoothly.

Duration

```text
250ms
```

---

# 41. Sidebar Entrance Animation

Every Sidebar widget should animate independently when entering the viewport.

Animation

Fade + Slide Up

Initial State

```text
Opacity 0

TranslateY(24px)
```

Final State

```text
Opacity 1

TranslateY(0)
```

Duration

```text
500ms
```

Delay Between Widgets

```text
80ms
```

Timing

```text
cubic-bezier(0.22,1,0.36,1)
```

Animations should execute only once.

---

# 42. Sidebar Accessibility

All Sidebar widgets must comply with WCAG 2.1 AA.

Requirements include:

* Keyboard accessibility.
* Visible focus indicators.
* Screen reader labels.
* Logical heading hierarchy.
* Proper semantic HTML elements.
* Sufficient color contrast.
* Minimum touch target of 44 × 44 pixels.

Search fields, category links, archive links, tags, and social icons must all expose descriptive `aria-label` attributes.

No Sidebar interaction should rely solely on color changes to communicate state.

---

# 43. Sidebar Performance Guidelines

Sidebar components should be optimized for performance.

Implementation recommendations include:

* Lazy load thumbnail images.
* Defer loading of analytics-driven widgets until after primary page content is rendered.
* Use Intersection Observer for viewport-based animations.
* Avoid layout shifts by reserving image dimensions.
* Cache category and archive data where appropriate.
* Prevent unnecessary widget re-rendering using memoization strategies where supported by the frontend framework.

The Sidebar should remain lightweight and responsive, ensuring that supporting information enhances rather than delays the primary reading experience.


# 44. Pagination System

The Pagination System controls navigation between multiple pages of news articles. It should provide users with a predictable, accessible, and visually consistent mechanism for browsing historical content without overwhelming the interface.

The default implementation should use traditional numbered pagination. However, the architecture should remain flexible enough to support alternative navigation methods such as "Load More" or Infinite Scroll in future iterations.

Pagination must appear directly below the News Feed and above the Footer.

---

# 44.1 Pagination Layout

Desktop Layout

```text
-------------------------------------------------------------
Previous   1   2   3   4   5   ...   12   Next
-------------------------------------------------------------
```

Alignment

```text
Center
```

Margin Top

```text
64px
```

Margin Bottom

```text
80px
```

Gap Between Controls

```text
12px
```

The Pagination component should remain visually separated from the News Feed by sufficient whitespace.

---

# 44.2 Pagination Container

Display

```text
Flex
```

Alignment

```text
Center
```

Justification

```text
Center
```

Flex Wrap

```text
Wrap
```

Row Gap

```text
12px
```

Column Gap

```text
12px
```

The container should gracefully wrap on smaller devices without creating horizontal scrolling.

---

# 44.3 Page Number Button

Shape

```text
Circle
```

Width

```text
44px
```

Height

```text
44px
```

Border Radius

```text
9999px
```

Background

```text
Transparent
```

Border

```text
1px solid rgba(11,28,48,0.10)
```

Typography

Font Family

```text
Hanken Grotesk
```

Font Size

```text
15px
```

Font Weight

```text
600
```

Text Color

```text
#3C4A42
```

Transition

```text
220ms
```

Every page number should maintain identical dimensions regardless of the number of digits.

---

# 44.4 Active Page

Background

```text
#006C49
```

Text Color

```text
#FFFFFF
```

Border

```text
None
```

Shadow

```text
0 8px 20px rgba(0,108,73,0.20)
```

Hover State

The active page should not change position when hovered.

Only the shadow intensity may increase slightly.

---

# 44.5 Inactive Page Hover

Hover Background

```text
rgba(0,108,73,0.08)
```

Text Color

```text
#006C49
```

Border Color

```text
rgba(0,108,73,0.20)
```

Transform

```text
translateY(-2px)
```

Duration

```text
220ms
```

Hover interactions should remain subtle and professional.

---

# 44.6 Previous and Next Controls

Structure

```text
← Previous

Next →
```

Minimum Width

```text
96px
```

Height

```text
44px
```

Border Radius

```text
9999px
```

Horizontal Padding

```text
18px
```

Background

```text
Transparent
```

Border

```text
1px solid rgba(11,28,48,0.10)
```

Typography

Font Size

```text
15px
```

Weight

```text
600
```

Leading and trailing icons should use Material Symbols Outlined.

Icons

Previous

```text
chevron_left
```

Next

```text
chevron_right
```

---

# 44.7 Disabled State

When the user reaches the first or last page, the corresponding navigation control should become disabled.

Background

```text
Transparent
```

Text Color

```text
#C4C7CC
```

Border

```text
rgba(11,28,48,0.06)
```

Cursor

```text
not-allowed
```

Opacity

```text
0.60
```

Disabled controls must remain visible to preserve layout consistency.

---

# 44.8 Ellipsis Indicator

When the total number of pages exceeds the maximum visible range, an ellipsis should be displayed.

Example

```text
1 2 3 4 5 ... 12
```

The ellipsis should never be interactive.

Typography

```text
16px

Weight 600

Color #6B7280
```

---

# 44.9 Responsive Pagination

Desktop

Display all visible page numbers.

Tablet

Reduce the number of visible page numbers while preserving Previous and Next controls.

Example

```text
Previous

1

2

3

...

12

Next
```

Mobile

Display only:

```text
Previous

Current Page

Next
```

Current Page Indicator Example

```text
Page 3 of 12
```

The pagination layout should never require horizontal scrolling.

---

# 45. Load More Alternative

The frontend architecture should optionally support a "Load More" interaction.

This implementation should remain configurable through application settings.

---

# 45.1 Load More Button

Label

```text
Load More Articles
```

Width

```text
220px
```

Height

```text
52px
```

Border Radius

```text
9999px
```

Background

```text
#006591
```

Text Color

```text
#FFFFFF
```

Font

```text
16px

Weight 600
```

Leading Icon

```text
expand_more
```

Hover Background

```text
#00557A
```

Hover Transform

```text
translateY(-2px)
```

Transition

```text
250ms
```

The button should appear centered below the News Feed.

---

# 45.2 Loading State

While additional articles are loading:

Replace the button label with:

```text
Loading...
```

Display a circular loading indicator.

Spinner Size

```text
20px
```

The button should become temporarily disabled until the loading process completes.

---

# 46. Infinite Scroll Architecture

The application should support Infinite Scroll as an optional enhancement.

Infinite Scroll should never replace standard pagination unless explicitly enabled.

Implementation Guidelines

* Load articles in batches.
* Preserve browser history.
* Maintain scroll position.
* Prevent duplicate requests.
* Display loading skeletons between batches.
* Update the URL state when appropriate.

Infinite Scroll should automatically stop once all available articles have been loaded.

---

# 46.1 Loading Skeleton Between Batches

When additional content is requested, placeholder cards should appear before the new articles are rendered.

Skeleton Structure

* Thumbnail Placeholder
* Category Placeholder
* Metadata Placeholder
* Headline Placeholder
* Summary Placeholder

Animation

```text
Shimmer
```

Duration

```text
1.4s
```

Repeat

Infinite until data is available.

---

# 47. Scroll Progress Indicator

A thin reading progress indicator should appear directly beneath the fixed navigation bar.

Its purpose is to provide subtle feedback about the user's reading progress through the page.

---

# 47.1 Indicator Layout

Position

```text
Fixed
```

Top

```text
80px
```

Left

```text
0
```

Width

```text
100%
```

Height

```text
4px
```

Background

```text
rgba(0,0,0,0.04)
```

The component should remain above all page content but below the navigation bar.

---

# 47.2 Progress Bar

Height

```text
100%
```

Initial Width

```text
0%
```

Maximum Width

```text
100%
```

Background

```text
linear-gradient(
90deg,
#006C49,
#006591
)
```

Animation

Width updates continuously based on vertical scroll progress.

Transition

```text
60ms linear
```

The progress calculation should exclude the fixed navigation height.

---

# 48. Back-to-Top Button

The Back-to-Top button improves navigation on long news pages.

It should remain hidden until users have scrolled beyond the Hero section.

---

# 48.1 Button Layout

Position

```text
Fixed
```

Bottom

```text
32px
```

Right

```text
32px
```

Width

```text
56px
```

Height

```text
56px
```

Shape

```text
Circle
```

Background

```text
#006C49
```

Icon

Material Symbols Outlined

```text
keyboard_arrow_up
```

Icon Size

```text
24px
```

Icon Color

```text
#FFFFFF
```

Shadow

```text
0 16px 32px rgba(0,108,73,0.25)
```

Z-Index

```text
100
```

---

# 48.2 Visibility Rules

The button should appear after the user scrolls approximately:

```text
500px
```

Appearance Animation

Fade In + Scale

Hidden State

```text
Opacity: 0

Scale: 0.9
```

Visible State

```text
Opacity: 1

Scale: 1
```

Duration

```text
220ms
```

Clicking the button should smoothly scroll the page to the top.

Scrolling Behavior

```text
smooth
```

---

# 49. Floating Action Area

The page may optionally include a Floating Action Area for contextual actions.

Recommended actions include:

* Share Current Page
* Copy Link
* Print Article List
* Contact DLH

The Floating Action Area should appear only on desktop devices and should not interfere with the Back-to-Top button.

---

# 49.1 Floating Action Button

Shape

```text
Circle
```

Size

```text
52px
```

Border Radius

```text
9999px
```

Background

```text
#FFFFFF
```

Border

```text
1px solid rgba(11,28,48,0.08)
```

Shadow

Elevation Level 3

Hover

Background transitions to Primary Green.

Icons transition to White.

Spacing Between Buttons

```text
12px
```

---

# 50. Navigation Performance Guidelines

The pagination and navigation system should be optimized to ensure fast interactions.

Implementation recommendations include:

* Preserve scroll position when changing pages.
* Avoid full-page reloads where possible.
* Prefetch adjacent pages when network conditions allow.
* Use smooth scrolling for all navigation interactions.
* Debounce repeated pagination requests.
* Cache recently visited pagination responses when supported by the application architecture.

The complete navigation experience should remain responsive, predictable, and accessible across desktop, tablet, and mobile devices while maintaining consistency with the Eco-Gov Modern design language.


# 51. Responsive Design System

The Berita page shall implement a mobile-first responsive architecture while maintaining visual consistency with the Eco-Gov Modern design language. Every component must adapt fluidly to different viewport sizes without compromising readability, accessibility, interaction quality, or performance.

Responsive behavior must be deterministic. No component should rely on arbitrary scaling or browser zoom behavior to achieve responsiveness.

---

# 51.1 Breakpoint System

The implementation shall use the following responsive breakpoints.

| Breakpoint       |       Width Range | Target Devices         |
| ---------------- | ----------------: | ---------------------- |
| Extra Small (XS) |         `< 640px` | Small smartphones      |
| Small (SM)       |   `640px – 767px` | Large smartphones      |
| Medium (MD)      |  `768px – 1023px` | Tablets                |
| Large (LG)       | `1024px – 1279px` | Small laptops          |
| Extra Large (XL) | `1280px – 1535px` | Desktop                |
| 2XL              |        `≥ 1536px` | Large desktop displays |

The layout shall transition only at the defined breakpoints.

---

# 51.2 Container Width

Maximum Content Width

```text id="k9aj2v"
1280px
```

Horizontal Padding

Desktop

```text id="c8jha2"
32px
```

Tablet

```text id="g8jv3s"
24px
```

Mobile

```text id="m5aw3q"
20px
```

Extra Small Mobile

```text id="h0pn46"
16px
```

Content should remain horizontally centered across all viewport sizes.

---

# 51.3 Grid System

Desktop

```text id="ttkxy9"
12 Columns
```

Tablet

```text id="jbm2e0"
8 Columns
```

Mobile

```text id="zkm3he"
4 Columns
```

Column Gutter

Desktop

```text id="i4qfrz"
24px
```

Tablet

```text id="8mxmjh"
20px
```

Mobile

```text id="ywzygt"
16px
```

All layout components shall align to the grid system.

---

# 51.4 Responsive Component Behavior

Navigation Bar

Desktop

Fixed horizontal navigation.

Tablet

Collapsed spacing while maintaining all navigation items.

Mobile

Hamburger navigation drawer.

Hero Section

Desktop

Horizontal composition with floating RSS widget.

Tablet

Reduced typography and spacing.

Mobile

Single-column vertical layout.

Featured News

Desktop

45 / 55 horizontal split.

Tablet

Vertical card layout.

Mobile

Stacked layout with full-width buttons.

News Feed

Desktop

Vertical list.

Tablet

Single-column.

Mobile

Single-column with reduced spacing.

Sidebar

Desktop

Sticky.

Tablet

Static.

Mobile

Moves beneath the News Feed.

Pagination

Desktop

Complete pagination.

Tablet

Reduced page numbers.

Mobile

Previous, Current Page, Next.

No component should introduce horizontal scrolling.

---

# 52. Motion System

The Berita page shall implement a unified motion language.

Animations should communicate hierarchy, continuity, and interaction feedback rather than decoration.

Motion should feel smooth, responsive, and unobtrusive.

---

# 52.1 Motion Principles

Animations should:

* Improve usability.
* Reinforce hierarchy.
* Guide user attention.
* Indicate interaction states.
* Never delay content consumption.

Animations must remain subtle.

---

# 52.2 Standard Animation Duration

Extra Fast

```text id="x2wuvl"
120ms
```

Fast

```text id="3b0mx0"
180ms
```

Normal

```text id="sxtttk"
250ms
```

Slow

```text id="y6imx2"
500ms
```

Entrance

```text id="lvz4y8"
700ms
```

---

# 52.3 Standard Timing Function

Primary

```text id="9g6z8h"
cubic-bezier(0.22,1,0.36,1)
```

Linear

```text id="w5yxfw"
linear
```

Ease Out

```text id="ijm51d"
ease-out
```

The same easing functions should be reused throughout the page.

---

# 52.4 Scroll Animations

Supported Effects

* Fade In
* Fade Up
* Fade Left
* Fade Right
* Scale In

Maximum Translate Distance

```text id="oqz84y"
40px
```

Opacity

```text id="djowkn"
0 → 1
```

Animations should trigger once when elements enter the viewport.

Implementation should use the Intersection Observer API.

---

# 52.5 Hover Motion

Cards

```text id="3ftnxy"
translateY(-4px)
```

Buttons

```text id="wjlwm6"
translateY(-2px)
```

Images

```text id="x4yxmt"
scale(1.04)
```

Icons

```text id="cm7ngp"
scale(1.10)
```

Hover interactions should never exceed these transform values.

---

# 53. Global Animation Rules

Animations should never:

* Loop continuously.
* Distract from reading.
* Delay page rendering.
* Obstruct accessibility.
* Cause layout shifts.

Animations should be disabled or significantly reduced when the operating system requests reduced motion.

Implementation

```css
@media (prefers-reduced-motion: reduce)
```

All transitions should degrade gracefully.

---

# 54. Design Token System

The implementation shall centralize all reusable visual values into a unified token system.

Color Tokens

```text id="njchz0"
--color-primary

--color-secondary

--color-background

--color-surface

--color-surface-dark

--color-text-heading

--color-text-body

--color-border
```

Spacing Tokens

```text id="vc5spz"
--space-4

--space-8

--space-12

--space-16

--space-24

--space-32

--space-48

--space-64

--space-80
```

Radius Tokens

```text id="ml6o4m"
--radius-sm

--radius-md

--radius-lg

--radius-xl

--radius-full
```

Shadow Tokens

```text id="vh6vpg"
--shadow-sm

--shadow-md

--shadow-lg

--shadow-xl
```

Typography Tokens

```text id="tahg3o"
--font-heading

--font-body

--font-size-xs

--font-size-sm

--font-size-md

--font-size-lg

--font-size-xl

--font-size-display
```

Every component must consume design tokens rather than hard-coded values whenever possible.

---

# 55. Accessibility Requirements

The Berita page shall comply with WCAG 2.1 Level AA.

Minimum Contrast Ratio

Normal Text

```text id="eqjlwm"
4.5 : 1
```

Large Text

```text id="kwp2ty"
3 : 1
```

---

# 55.1 Keyboard Accessibility

All interactive components shall support:

* Tab navigation.
* Shift + Tab navigation.
* Enter activation.
* Space activation where appropriate.
* Escape key for dismissible overlays.

Keyboard focus order must match the visual hierarchy.

---

# 55.2 Focus Indicators

Focus Outline

```text id="g6zkza"
2px solid #006C49
```

Offset

```text id="n3k7mk"
4px
```

Focus indicators must never be removed.

---

# 55.3 Screen Reader Support

All controls shall expose:

* `aria-label`
* `aria-current`
* `aria-expanded`
* `aria-hidden`
* `role`
* Semantic HTML elements

Decorative graphics should always be hidden from assistive technologies.

---

# 55.4 Touch Targets

Minimum Interactive Area

```text id="xiwl2b"
44 × 44px
```

Recommended

```text id="z98r6j"
48 × 48px
```

Spacing between touch targets should prevent accidental activation.

---

# 56. Performance Optimization

The Berita page should prioritize fast loading, smooth scrolling, and efficient rendering.

---

# 56.1 Image Optimization

All news images shall:

* Use responsive image sources.
* Support modern image formats.
* Lazy load below-the-fold images.
* Reserve aspect ratio space before loading.

Large images should never block page rendering.

---

# 56.2 JavaScript Optimization

Implementation should:

* Code split where applicable.
* Defer non-critical scripts.
* Minimize layout thrashing.
* Debounce search interactions.
* Throttle scroll listeners.
* Prefer Intersection Observer over scroll event calculations.

---

# 56.3 CSS Optimization

Recommended practices include:

* Utility-first architecture or modular component styles.
* Eliminate unused CSS.
* Reuse design tokens.
* Avoid deeply nested selectors.
* Minimize expensive paint operations.

---

# 56.4 Rendering Performance

Target Frame Rate

```text id="75gcjt"
60 FPS
```

Target Largest Contentful Paint (LCP)

```text id="4fjlwm"
< 2.5 seconds
```

Target Cumulative Layout Shift (CLS)

```text id="w9lxf4"
< 0.1
```

Target Interaction to Next Paint (INP)

```text id="vzgjmk"
< 200ms
```

Implementation should align with current Core Web Vitals recommendations.

---

# 57. Frontend Architecture Guidelines

The Berita page shall be implemented using a modular component architecture.

Each UI element should exist as an independent, reusable component.

Recommended component hierarchy:

```text id="9yop7q"
BeritaPage

├── Navbar

├── HeroSection

├── FeaturedNews

├── NewsFeed

│   ├── NewsCard

│   ├── CategoryChip

│   ├── MetadataRow

│   └── ReadMoreLink

├── Sidebar

│   ├── SearchWidget

│   ├── CategoryWidget

│   ├── ArchiveWidget

│   ├── AirQualityWidget

│   ├── PopularNewsWidget

│   ├── RecentPostsWidget

│   ├── TagCloudWidget

│   ├── NewsletterWidget

│   └── SocialShareWidget

├── Pagination

├── ScrollProgress

├── BackToTopButton

└── Footer
```

Components should communicate through clearly defined interfaces and avoid tight coupling.

---

# 58. GitHub Copilot Agent Implementation Notes

The implementation generated by GitHub Copilot Agent shall adhere to the following principles:

* Build reusable and composable components.
* Follow the Eco-Gov Modern design language consistently.
* Use semantic HTML5 structure.
* Implement responsive behavior according to the defined breakpoint system.
* Consume centralized design tokens instead of hard-coded values.
* Support light visual effects without sacrificing performance.
* Ensure all animations respect `prefers-reduced-motion`.
* Implement keyboard accessibility and screen reader support by default.
* Prevent cumulative layout shifts through reserved media dimensions.
* Use lazy loading and optimized asset delivery.
* Maintain consistent spacing based on the Base-8 spacing system.
* Preserve visual hierarchy exactly as defined throughout this specification.
* Avoid introducing additional decorative elements that are not described in this document.
* Ensure all reusable components can be shared across other pages within the DLH Tulungagung website.

---

# 59. Acceptance Criteria

The Berita page implementation shall be considered complete only when all of the following conditions are satisfied:

* The visual appearance matches the Eco-Gov Modern design specification.
* The layout is fully responsive across all supported breakpoints.
* The Hero, Featured News, News Feed, Sidebar, Pagination, and Footer integrate seamlessly.
* All interactive elements provide appropriate hover, focus, and active states.
* Accessibility requirements comply with WCAG 2.1 AA.
* Performance targets meet modern Core Web Vitals benchmarks.
* No horizontal scrolling occurs at any supported viewport width.
* Typography, spacing, colors, and elevation consistently use the defined design tokens.
* All animations are smooth, purposeful, and respect reduced-motion preferences.
* Components are reusable, maintainable, and suitable for long-term development using GitHub Copilot Agent.

This specification serves as the complete implementation reference for the Berita page. Any future enhancements should extend this document without modifying the established design language, interaction patterns, or architectural principles unless explicitly approved as part of a new design system revision.



