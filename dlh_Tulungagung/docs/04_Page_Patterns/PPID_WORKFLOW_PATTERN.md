PPID & Contact Page Design Specification
Part 1 — Design Philosophy, Responsive Architecture, Layout Foundation & Global Rules
PPID & Contact Page
Complete Frontend Design Specification
Eco-Gov Modern Design System
Kabupaten Tulungagung Environmental Agency Website (DLH)
1. Design Philosophy

The PPID (Pejabat Pengelola Informasi dan Dokumentasi) & Contact page serves as the primary transparency and communication gateway between citizens and the Department of Environment of Tulungagung Regency.

Unlike a typical contact page, this interface functions as an official government service portal that combines:

Public information request services
Complaint submission access
Official institutional contact
Office location
Public communication channels
Contact persons from multiple divisions

Therefore, the interface must emphasize professionalism, trust, clarity, accessibility, and ease of interaction while maintaining the Eco-Gov Modern visual language implemented across the entire website.

The overall experience should reduce friction during information requests while presenting institutional credibility through clean layouts, structured information hierarchy, and subtle modern visual effects.

The page should never appear crowded despite containing a significant amount of information.

Large white spaces, consistent spacing scales, generous typography, and carefully organized content blocks are mandatory throughout the page.

2. Design Principles

The entire page must consistently follow these principles.

2.1 Clarity First

Every section must communicate one primary purpose.

Never mix multiple actions within a single visual container.

Examples:

Hero = Introduction + Primary Actions
Contact Section = Official Contact Information
Map = Location
Form = Information Request
Contact Person = Human Communication

Each section must remain visually independent.

2.2 Government Professionalism

Avoid consumer-style marketing layouts.

Avoid exaggerated gradients.

Avoid oversized illustrations.

Avoid playful animations.

Maintain a clean governmental appearance while still feeling modern.

2.3 Visual Calmness

This page includes many input fields.

To reduce cognitive load:

use large vertical spacing
use low-contrast backgrounds
use generous padding
avoid unnecessary decorations

White space is considered an active design element.

2.4 Trust Through Structure

Institutional trust is established through predictable organization.

Users should immediately understand:

Where they are.

How to contact the office.

How to request information.

Who is responsible.

Where the office is located.

No section should require interpretation.

2.5 Mobile First Experience

Although desktop remains important for government institutions, the layout must be designed primarily for smartphone users.

More than 70% of visitors are expected to access the portal using Android devices.

Every component must therefore scale gracefully without horizontal scrolling.

3. Responsive Layout Architecture

The entire page must be built using a responsive 12-column layout system.

Maximum container width:

1280px

Desktop content width:

1200–1280px

Tablet:

100%

minus

32px horizontal padding

Mobile:

100%

minus

20px horizontal padding

Breakpoints
Small Mobile

320px–375px

Container Padding

16px

Grid

1 Column

Gap

20px

Mobile

376px–576px

Container

20px

Grid

1 Column

Gap

24px

Tablet Portrait

577px–768px

Grid

6 Columns

Padding

32px

Tablet Landscape

769px–991px

Grid

8 Columns

Padding

40px

Laptop

992px–1279px

Grid

12 Columns

Padding

48px

Desktop XL

1280px+

Grid

12 Columns

Maximum Width

1280px

Auto Margin

Center

4. Vertical Rhythm

Every section follows one spacing scale.

Large Sections

120px

Medium Sections

80px

Small Sections

64px

Component Gap

32px

Small Gap

24px

Compact Gap

16px

Tiny Gap

8px

No arbitrary spacing values may be introduced outside this system unless absolutely necessary for pixel-perfect alignment.

5. Global Background System

The page background is intentionally minimal.

Body Background

#F8F9FF

This color should remain consistent throughout the application.

No section should introduce competing background colors.

Alternating sections may instead use:

#FFFFFF

or

#F6F8FC

to create subtle visual separation.

Large decorative backgrounds are prohibited.

6. Surface System

Three elevation levels are used.

Surface Level 1

Primary Cards

#FFFFFF

Shadow

0 10px 25px rgba(15,23,42,0.05)
Surface Level 2

Secondary Cards

#F9FAFC

Used for:

Metadata
Contact blocks
Information panels
Surface Level 3

Interactive Inputs

#F1F3FC

Used for:

Icons
Input groups
Upload area
Checkboxes
Empty states
7. Border System

Primary Border

1px solid #DCE3F1

Focus Border

#0059B3

Hover Border

#7BA8F7

Success

#22C55E

Warning

#F59E0B

Danger

#EF4444

Disabled

#E5E7EB
8. Radius System

Buttons

12px

Inputs

8px

Cards

16px

Large Containers

24px

Map Container

24px

Avatar

999px

Badge

999px

The radius hierarchy must remain consistent to reinforce the Eco-Gov Modern visual language.

9. Shadow System

Rest State

0 8px 20px rgba(15,23,42,.05)

Hover State

0 18px 35px rgba(15,23,42,.10)

Floating Elements

0 25px 50px rgba(15,23,42,.12)

Glass Overlay

0 15px 40px rgba(0,0,0,.08)

Shadows must remain soft and diffused, avoiding dark or overly pronounced effects.

10. Typography System

Two font families are mandatory throughout the interface:

Headings

Manrope

Weights:

600
700
800
Body Text

Hanken Grotesk

Weights:

400
500
600

This combination establishes a clear distinction between institutional headings and readable body content while maintaining consistency with the Eco-Gov Modern design language.

Typography Scale
Element	Font	Weight	Size	Line Height
Hero Title	Manrope	800	44px	56px
Section Title	Manrope	700	32px	42px
Card Title	Manrope	600	20px	30px
Body Large	Hanken Grotesk	500	18px	30px
Body	Hanken Grotesk	400	16px	28px
Label	Hanken Grotesk	600	14px	22px
Helper Text	Hanken Grotesk	400	13px	20px
Caption	Hanken Grotesk	400	12px	18px
11. Color Palette

The following colors are mandatory across the PPID & Contact page:

Role	HEX	Usage
Primary	#0059B3	Primary buttons, active states, highlights
Primary Hover	#004A96	Button hover
Secondary	#475D7A	Secondary actions and icons
Accent	#F59E0B	Status indicators, highlights
Success	#22C55E	Validation success
Warning	#F59E0B	Informational warnings
Danger	#EF4444	Error states
Background	#F8F9FF	Global page background
Surface	#FFFFFF	Cards and containers
Surface Low	#F1F3FC	Inputs and icon holders
Border	#DCE3F1	Dividers and outlines
Text Primary	#0B1C30	Headings
Text Secondary	#5C6B7A	Supporting text
Text Disabled	#AAB4C2	Disabled labels


12. Navigation Specification

The PPID & Contact page shall use the same global navigation component implemented across every page of the DLH Tulungagung website. No visual deviation is permitted except for the active navigation state.

The navigation bar represents institutional identity and must remain fixed at the top of the viewport throughout the user session.

12.1 Navbar Position

Position

Fixed

Top

0

Left

0

Width

100%

Height

80px

Z-index

1000

The navbar must remain visible during page scrolling.

It should never disappear.

12.2 Navbar Background

Initial State

background:
rgba(255,255,255,.82)

Backdrop Filter

blur(18px)

Border Bottom

1px solid #E7EDF6

After scrolling beyond 40px:

Background opacity increases.

rgba(255,255,255,.95)

Shadow

0 6px 18px rgba(15,23,42,.05)

Transition Duration

250ms

Ease

ease
12.3 Logo Area

Located on the far left.

Contains:

DLH Logo
Website Title
Subtitle

Structure

Logo

↓

Institution Name

↓

Website Subtitle

Logo Size

Desktop

52px

Tablet

46px

Mobile

42px

Gap

14px

Institution Name

Font

Manrope

Weight

700

Size

18px

Subtitle

13px

Color

#5C6B7A
12.4 Navigation Menu

Desktop Menu

Beranda

Profil

Layanan

Berita

PPID

Kontak

Gap

36px

Typography

15px

Weight 600

Text Color

Inactive

#475D7A

Hover

#0059B3

Transition

200ms
12.5 Active Menu

The PPID navigation item must display:

Text

#0059B3

Bottom Indicator

Height

2px

Width

100%

Border Radius

999px

Animation

Scale X

0

↓

1

Duration

220ms
12.6 Mobile Navigation

Below

992px

Navigation transforms into a hamburger menu.

Drawer Width

320px

Maximum

85vw

Background

#FFFFFF

Overlay

rgba(0,0,0,.35)

The drawer slides in from the right.

Animation

300ms
13. Hero Section

The Hero introduces the PPID & Contact services.

Unlike a marketing landing page, this Hero emphasizes institutional credibility and immediate access to public services.

No decorative illustrations should dominate the composition.

The focus remains on typography and official actions.

13.1 Hero Layout

Desktop

Two Columns

6 : 6

Left

Hero Content

Right

Quick Action Cards

Tablet

Single Column

Mobile

Single Column

Every element stacks vertically.

13.2 Hero Width

Container

1280px

Padding Top

160px

Padding Bottom

120px

Mobile

Top

120px

Bottom

80px
13.3 Hero Background

Background

#F8F9FF

No illustrations.

No gradients.

Only subtle abstract blurred circles may be placed behind the content.

Maximum opacity

6%

Blur

120px

These decorative elements must never interfere with readability.

14. Hero Left Content

Content Order

Breadcrumb

↓

Badge

↓

Title

↓

Description

↓

Action Buttons
14.1 Breadcrumb

Example

Home

/

PPID & Kontak

Font

13px

Color

#7B8794

Hover

Primary Blue

14.2 Hero Badge

Rounded Pill

Height

38px

Horizontal Padding

18px

Background

#EAF3FF

Text

#0059B3

Leading Icon

Material Symbol

contact_support

Icon

18px

Typography

14px

Weight 600
14.3 Hero Title

Example

Portal PPID &
Pusat Layanan Kontak

Maximum Width

700px

Typography

Manrope

800

44px

56px

Mobile

34px

44px

Text Color

#0B1C30
14.4 Hero Description

Maximum Width

620px

Typography

18px

Line Height

32px

Color

#5C6B7A

The description should explain:

PPID services
information requests
complaint services
contact accessibility

without becoming longer than four lines on desktop.

15. Hero Right Area

Instead of an image, the right side presents quick institutional actions.

This improves usability and shortens the user's path to essential services.

Layout

Desktop

2 × 2 Grid

Gap

24px

Tablet

2 Columns

Mobile

1 Column
16. Primary Action Cards

The first screen must immediately expose the two most important government services.

PPID

LAPOR!

Additional actions may include

WhatsApp

Email

Each action appears as a modern elevated card rather than a traditional button.

Card Size

Desktop

260 × 130px

Tablet

100%

Mobile

100%

Minimum Height

110px

Radius

18px

Background

#FFFFFF

Border

1px solid #DCE3F1

Shadow

shadow-sm
Internal Layout
Icon

↓

Title

↓

Short Description

↓

Arrow

Padding

28px
Icon Container

Size

56px

Radius

16px

Background

#F1F3FC

Icon

28px

Primary Blue

Card Hover

Translate

-6px

Shadow

shadow-lg

Border

Primary Blue

Icon Background

#0059B3

Icon

White

Arrow slides

6px

Duration

250ms
17. Official Contact Section

This section begins immediately after the Hero.

Purpose

Display official communication channels before users complete the form.

Desktop Layout

2 Columns

5 : 7

Left

Contact Information

Right

Interactive Map

Gap

40px

Tablet

1 Column

Mobile

1 Column

Map appears below the contact information.

18. Contact Information Container

Background

#FFFFFF

Radius

24px

Padding

40px

Mobile

24px

Border

1px solid #DCE3F1

Shadow

0 12px 30px rgba(15,23,42,.05)
Section Header

Structure

Badge

↓

Heading

↓

Description

Heading

Official Contact

Typography

32px

700

Description

16px

Color

#5C6B7A
19. Contact Information Items

Each contact item follows the same structure.

Icon

↓

Title

↓

Value

Spacing

28px

between items.

Icon

Container

48px

Circle

Background

#F1F3FC

Icon

22px

Primary Blue

Contact Types

The following information should be displayed in order:

Office Address

Multi-line address with clear formatting.

Telephone

Clickable on supported devices.

Email

Opens the default email client.

Office Hours

Example:

Monday–Thursday

07.30–16.00

Friday

07.00–14.30

WhatsApp Service

Displayed using a subtle badge indicating availability.

Example status:

Online Service

Badge Color

#DCFCE7

Text

#15803D

Social Media Links

Displayed as compact icon buttons.

Platforms may include:

Facebook
Instagram
YouTube
X (Twitter)

Each icon uses the standard rounded container style and follows the same hover interaction pattern as the rest of the design system.


20. Interactive Map Section

The Interactive Map is intended to provide immediate geographical context for the Department of Environment office location. It must function not merely as an embedded map but as an informative location module integrated with the Eco-Gov Modern design system.

The map should occupy a dominant visual position within the Contact Information section while remaining visually balanced with the adjacent institutional contact panel.

The implementation should support responsive resizing without affecting aspect ratio or causing overflow.

20.1 Layout Structure

Desktop Layout

Left Column
Official Contact Information

Right Column
Interactive Map

Desktop Ratio

5 : 7

Tablet

Single Column

Contact Information

↓

Map

Mobile

Single Column

The map must always appear directly below the contact information.

20.2 Map Container

Background

#FFFFFF

Border Radius

24px

Border

1px solid #DCE3F1

Shadow

0 16px 40px rgba(15,23,42,.06)

Overflow

Hidden

Width

100%
20.3 Responsive Height

Desktop

560px

Laptop

520px

Tablet

480px

Large Mobile

360px

Small Mobile

300px

The map height should never fall below 280px.

20.4 Embedded Map

Preferred Source

Google Maps Embed

Alternative

OpenStreetMap

The embedded map should:

allow zoom
allow drag
allow fullscreen
support keyboard accessibility
preserve responsive scaling

The iframe must completely fill its parent container.

20.5 Loading State

Before the map loads, display a skeleton placeholder.

Placeholder

Light gray block

↓

Animated shimmer

↓

Location icon

↓

Loading text

Animation Duration

1.4s

Loop

Infinite
20.6 Glass Information Overlay

A floating information card should appear above the bottom-right corner of the map.

Purpose

Provide quick office information without requiring users to zoom into the map.

Overlay Position

Desktop

Bottom

24px

Right

24px

Mobile

Bottom

16px

Left

16px

Right

16px

Background

rgba(255,255,255,.82)

Backdrop Blur

12px

Radius

18px

Border

1px solid rgba(255,255,255,.5)

Shadow

0 15px 35px rgba(15,23,42,.12)

Padding

20px
20.7 Overlay Content

Structure

Location Icon

↓

Office Name

↓

Address

↓

Open in Google Maps Button

Office Name

Font

Manrope

600

18px

Address

14px

#5C6B7A

Primary Button

Label

Open in Maps

Icon

north_east

Height

42px

Radius

12px
20.8 Fullscreen Control

A floating icon button should appear at the top-right of the map.

Container

44px × 44px

Background

White

Radius

12px

Icon

fullscreen

Hover

Primary Blue

Clicking opens the map in fullscreen mode.

21. Information Request Section

This section represents the core functionality of the PPID page.

The objective is to guide citizens through a structured, friction-free information request process.

Unlike conventional government forms, the interface should feel approachable, spacious, and easy to complete.

21.1 Section Layout

Container Width

920px

Alignment

Centered

Background

#FFFFFF

Radius

28px

Padding

Desktop

56px

Tablet

40px

Mobile

24px

Border

1px solid #DCE3F1

Shadow

0 20px 40px rgba(15,23,42,.06)
21.2 Section Header

Structure

Badge

↓

Heading

↓

Description

Badge

Information Request

Heading

Submit a Public Information Request

Typography

32px

700

Manrope

Description

Maximum Width

620px

Centered

22. Form Layout

Desktop

2 Columns

Column Ratio

1 : 1

Gap

32px

Tablet

Single Column

Mobile

Single Column

Fields should stack vertically without horizontal scrolling.

23. Input Component Specification

All form components must share a consistent visual language.

Height

54px

Radius

10px

Border

1px solid #DCE3F1

Background

White

Padding

16px

Typography

16px

Placeholder

#94A3B8

Transition

200ms
23.1 Label

Position

Above input

Typography

14px

600

Bottom Margin

8px

Required Label

Display

*

Color

Danger Red

23.2 Input Focus

Border

Primary Blue

Shadow

0 0 0 4px rgba(0,89,179,.12)

Transition

200ms
24. Required Fields

The form should minimally contain:

Full Name
National Identity Number (NIK)
Email Address
Phone Number
Institution (Optional)
Occupation
Address
Requested Information
Purpose of Information
Preferred Delivery Method
Attachment Upload
Consent Checkbox

Each field must include helper text when appropriate.

25. Textarea Specification

Minimum Height

150px

Maximum Height

320px

Resize

Vertical

Padding

16px

Line Height

30px
26. Select Dropdown

Height

54px

Trailing Icon

expand_more

Dropdown Radius

12px

Hover

Primary Border

Selected Option

Blue Background

White Text

27. Upload Component

Purpose

Allow supporting document submission.

Accepted Formats

PDF
DOC
DOCX
JPG
PNG

Maximum File Size

10 MB

Layout

Upload Icon

↓

Instruction Text

↓

Browse Button

↓

Supported Formats

Height

180px

Radius

18px

Border

2px dashed #DCE3F1

Background

#F8FAFF

Hover State

Border

Primary Blue

Background

#F2F8FF

Drag Active

Background

#EAF3FF

Border

Primary Blue

Upload Success

Border

Success Green

Icon

Check Circle

Filename

Displayed below

Progress Bar

Animated

28. Checkbox Component

Checkbox Size

20px

Radius

6px

Inactive

White

Border

Gray

Checked

Primary Blue

Icon

check

White

Consent Text

Placed on the right side.

Links such as the privacy policy should use the Primary Blue color and underline on hover.

29. Validation System

Validation must occur in real time where appropriate, while preserving accessibility and minimizing user frustration.

Validation triggers:

On blur
On submit
Real-time for email format and required fields
Success State

Border

#22C55E

Leading Icon

check_circle

Helper Text

Green

Error State

Border

#EF4444

Leading Icon

error

Message

Displayed directly below the input.

Warning State

Border

Gold

Helper Text

Amber

Used for incomplete but non-blocking issues.

Disabled State

Background

#F3F4F6

Cursor

not-allowed

Text

#AAB4C2
30. Submit Button

Width

Desktop

Auto

Minimum Width

220px

Mobile

100%

Height

56px

Radius

14px

Background

Primary Blue

Text

White

Leading Icon

send

Hover

Darker Blue

Pressed

Scale

0.98

Loading State

Replace icon with a circular spinner while preserving button width to avoid layout shift.


31. Contact Person Directory

The Contact Person Directory is the final primary content section of the PPID & Contact page. It provides citizens with direct institutional contact points for each organizational division, strengthening transparency, accountability, and service accessibility.

Unlike a standard team showcase, this directory must communicate official responsibility rather than personal branding.

Every card should emphasize institutional identity while remaining approachable through the use of professional portraits, structured information hierarchy, and restrained visual styling.

The directory must support future scalability, allowing administrators to add, remove, or reorder contact persons without altering the page layout.

31.1 Section Layout

Container

Max Width
1280px

Alignment

Centered

Top Padding

120px

Bottom Padding

120px

Background

#F8F9FF
Section Header

Structure

Badge

↓

Heading

↓

Description

Badge

Official Contact

Heading

Contact Person by Division

Description

Explain that users may contact the responsible officer according to the relevant service or organizational unit.

Maximum Width

680px

Text Alignment

Center
31.2 Responsive Grid

Desktop (≥1280px)

4 Columns

Laptop (992–1279px)

3 Columns

Tablet (768–991px)

2 Columns

Mobile (<768px)

1 Column

Grid Gap

32px

Cards must maintain equal height within the same row.

31.3 Contact Card Specification

Width

100%

Minimum Height

320px

Background

#FFFFFF

Border

1px solid #DCE3F1

Border Radius

20px

Padding

28px

Shadow (Rest)

0 10px 24px rgba(15,23,42,.05)

Shadow (Hover)

0 22px 40px rgba(15,23,42,.10)

Overflow

Hidden

Transition

250ms ease
31.4 Side Accent Border

Each contact card should include a vertical accent border positioned on the left edge to visually distinguish organizational divisions.

Width

6px

Border Radius

999px

Suggested Color Mapping

Environmental Management

#0059B3

Waste Management

#16A34A

Pollution Control

#F59E0B

Administration

#64748B

Secretariat

#7C3AED

If no division-specific color is defined, the default Primary Blue should be used.

31.5 Avatar Specification

Shape

Circle

Desktop Size

72px × 72px

Tablet

64px × 64px

Mobile

56px × 56px

Border

3px solid #FFFFFF

Shadow

0 6px 16px rgba(15,23,42,.10)

Portrait Guidelines

Neutral background
Professional attire
Front-facing composition
Consistent lighting
High resolution
Square aspect ratio

If no photo is available, display a generated initials avatar using the division accent color.

31.6 Card Content Hierarchy

Each card must follow this structure:

Accent Border

↓

Avatar

↓

Officer Name

↓

Position

↓

Division Badge

↓

Contact Information

↓

Primary Actions

This hierarchy must remain consistent across all cards.

31.7 Officer Name

Typography

Font
Manrope

Weight
700

Size
20px

Line Height
30px

Color

#0B1C30

Maximum Lines

2

Overflow

Ellipsis
31.8 Position

Typography

Hanken Grotesk

16px

500

Color

#5C6B7A

Example

Head of Public Information Service
31.9 Division Badge

Height

32px

Horizontal Padding

14px

Radius

999px

Background

Use a low-opacity version (10–15%) of the assigned division color.

Text

Use the corresponding full-strength division color.

Typography

13px

600
31.10 Contact Metadata

Display information vertically with consistent spacing.

Items may include:

Office Phone
Extension Number
Official Email
WhatsApp
Office Hours

Each row should follow:

Icon

↓

Label

↓

Value

Icon Size

20px

Gap

12px

Text Size

15px
31.11 Action Buttons

Each card may contain up to two actions.

Primary

Send Email

Secondary

WhatsApp

Button Height

42px

Radius

10px

Gap

12px

Desktop

Buttons displayed horizontally.

Mobile

Buttons stacked vertically.

31.12 Hover Interaction

Hover effects should be subtle and reinforce interactivity without distracting the user.

Effects

Card Translation

translateY(-6px)

Border Color

Primary Blue

Avatar Scale

1.03

Shadow

Increase to hover elevation.

Transition

250ms ease
32. Footer Integration

The PPID & Contact page must reuse the global footer component to preserve consistency across the DLH Tulungagung website.

The footer should visually separate itself from the Contact Person section through a subtle top divider.

Top Divider

Height

1px

Color

#E2E8F0

Margin Top

120px
Footer Layout

Desktop

4 Columns

Sections

Institution Overview
Quick Navigation
Public Services
Contact Information

Tablet

2 Columns

Mobile

Single Column

Spacing

40px
33. Loading States

All asynchronous content should display skeleton placeholders to improve perceived performance.

Contact Card Skeleton

Structure

Avatar Skeleton

↓

Title Skeleton

↓

Subtitle Skeleton

↓

Metadata Skeleton

↓

Button Skeleton

Animation

Shimmer

Duration

1.5s

Loop

Infinite
Map Skeleton

Display a neutral placeholder with an animated shimmer until the embedded map has loaded.

Form Skeleton

Placeholder bars should match the dimensions of the final form fields.

Do not display blank white containers while waiting for data.

34. Empty States

If no contact persons are available:

Illustration

Simple outline illustration using the Eco-Gov color palette.

Heading

No Contact Person Available

Description

Explain that contact information is currently being updated.

Primary Action

Return to Homepage

Secondary Action

Contact Main Office
35. Error States

Error messages should be informative, concise, and actionable.

Examples

Map Failed

Unable to load the map.
Please try again later.

Contact Data Failed

Official contact information could not be retrieved.

Form Submission Failed

Your request could not be submitted.
Please review the highlighted fields and try again.

Each error state should include a retry button where applicable.

36. Success States

After a successful information request submission:

Display a confirmation panel containing:

Success icon
Confirmation title
Reference number
Submission timestamp
Estimated response time
Button to return to homepage
Button to submit another request

Background

#ECFDF5

Border

1px solid #22C55E

Icon

Material Symbol

check_circle
37. Animation System

Animations should support usability and visual continuity rather than decoration.

Section Entrance

Trigger

Element enters viewport.

Animation

Opacity
0 → 1

TranslateY
20px → 0

Duration

500ms

Delay

50ms stagger
Button Interaction

Hover

translateY(-2px)

Pressed

scale(0.98)

Focus

Visible focus ring using the Primary Blue color with 4px spread.

Input Focus

Border transitions to Primary Blue.

Apply a soft outer glow using low-opacity blue.

Duration

180–200ms
Card Hover

Elevation increases.

Accent border becomes more saturated.

Action buttons fade in if initially minimized.

Page Transition

When navigating to the PPID page:

Fade In

+

TranslateY(16px)

Duration
350ms

Avoid large parallax effects or exaggerated motion to maintain a professional government interface.

38. Accessibility Requirements

The entire PPID & Contact page must comply with WCAG 2.1 AA guidelines.

Minimum requirements include:

Color contrast ratio of at least 4.5:1 for text.
All interactive elements must be keyboard accessible.
Visible focus indicators for every actionable component.
Form fields must include associated labels.
Error messages must be announced to assistive technologies.
Images and avatars must include meaningful alternative text.
Interactive maps must provide an accessible text alternative containing the office address and a direct external map link.
Touch targets on mobile devices must be at least 44 × 44 px.
Content must remain usable at 200% browser zoom without horizontal scrolling.


39. Complete Design Token System

The PPID & Contact page must use the global Eco-Gov Modern Design System tokens exclusively. Hardcoded values should be avoided wherever possible to ensure visual consistency, maintainability, and scalability across the entire DLH Tulungagung website.

All spacing, typography, colors, radii, shadows, transitions, and component dimensions must reference these predefined tokens.

39.1 Color Tokens
Brand Colors
Token	Value	Usage
color-primary-50	#EAF3FF	Light backgrounds
color-primary-100	#D8E9FF	Active surfaces
color-primary-300	#7BA8F7	Hover borders
color-primary-500	#0059B3	Primary actions
color-primary-600	#004A96	Hover state
color-primary-700	#003C78	Active state
Neutral Colors
Token	Value
neutral-50	#F8F9FF
neutral-100	#F1F3FC
neutral-200	#E5EAF3
neutral-300	#DCE3F1
neutral-400	#C4CDD8
neutral-500	#94A3B8
neutral-600	#64748B
neutral-700	#475D7A
neutral-800	#334155
neutral-900	#0B1C30
Semantic Colors
Token	Value
Success	#22C55E
Warning	#F59E0B
Error	#EF4444
Info	#0EA5E9
39.2 Typography Tokens
Font Family
Heading
Manrope
Body
Hanken Grotesk
Font Weights
Token	Weight
Regular	400
Medium	500
SemiBold	600
Bold	700
ExtraBold	800
Font Sizes
Token	Size
xs	12px
sm	14px
base	16px
lg	18px
xl	20px
2xl	24px
3xl	32px
4xl	44px
39.3 Spacing Tokens

Spacing must always follow an 8-point grid.

Token	Value
space-1	4px
space-2	8px
space-3	12px
space-4	16px
space-5	20px
space-6	24px
space-8	32px
space-10	40px
space-12	48px
space-16	64px
space-20	80px
space-24	96px
space-30	120px

Arbitrary spacing values should not be introduced unless required for pixel-perfect alignment.

39.4 Radius Tokens
Token	Value
radius-xs	4px
radius-sm	8px
radius-md	12px
radius-lg	16px
radius-xl	24px
radius-full	999px
39.5 Shadow Tokens
Small
0 8px 20px rgba(15,23,42,.05)
Medium
0 15px 30px rgba(15,23,42,.08)
Large
0 25px 45px rgba(15,23,42,.12)
Floating
0 35px 60px rgba(15,23,42,.14)
40. Responsive Android Optimization

The PPID & Contact page must prioritize Android usability. All components should remain readable, accessible, and easy to interact with on screens ranging from 320px to 480px.

40.1 Global Mobile Layout

Maximum Content Width

100%

Horizontal Padding

20px

Vertical Section Padding

72px

Grid

Single Column

No horizontal scrolling is permitted.

40.2 Hero Section

Desktop

Two-column layout.

Android

All elements stack vertically in the following order:

Breadcrumb

↓

Badge

↓

Hero Title

↓

Description

↓

Primary Action Cards

Title

Maximum width

100%

Font Size

34px

Description

16px

Line Height

28px
40.3 Action Cards

Desktop

2 × 2 Grid

Android

Single-column stack.

Card Width

100%

Minimum Height

110px

Gap

16px
40.4 Contact Information

Each contact item occupies a full row.

Icons remain left-aligned.

Long addresses wrap naturally without clipping.

Telephone numbers and email addresses should be selectable and tappable.

40.5 Interactive Map

Height

300–360px

The floating information overlay becomes full-width within the map container to avoid overlapping content on narrow screens.

40.6 Information Request Form

All fields occupy the full available width.

Input Height

54px

Textarea

160px

Submit Button

Width: 100%

Checkbox label wraps naturally into multiple lines without causing layout issues.

40.7 Contact Person Cards

Cards display in a single-column list.

Avatar size

56px

Buttons stack vertically.

Metadata wraps without truncation.

41. Accessibility Standards

The page must comply with WCAG 2.1 AA as a minimum baseline.

Keyboard Navigation

Every interactive element must be reachable using the Tab key.

Focus order should follow the natural reading flow.

The Escape key should close overlays, drawers, and modal dialogs.

Screen Reader Support

All form controls require associated <label> elements.

Icons that convey meaning must include accessible labels.

Decorative icons should be marked with aria-hidden="true".

Embedded maps must include a descriptive title.

Form Accessibility

Each validation error should be associated with its corresponding field using aria-describedby.

Required fields must expose aria-required="true".

Success and error messages should use aria-live="polite".

Motion Preferences

Users who prefer reduced motion must receive simplified animations.

Use the prefers-reduced-motion media query to:

Disable entrance animations.
Remove hover translations.
Shorten transition durations.
Preserve opacity changes only.
42. HTML Semantic Structure

The PPID & Contact page should use semantic HTML to improve accessibility, SEO, and maintainability.

Recommended structure:

<header>
    <nav>
</header>

<main>

    <section id="hero">

    <section id="official-contact">

    <section id="office-map">

    <section id="information-request">

    <section id="contact-directory">

</main>

<footer>

Each section should contain a single primary heading (<h2>) except the Hero, which uses the page-level <h1>.

Avoid skipping heading levels.

43. Tailwind CSS Implementation Guidelines

The implementation should rely on Tailwind CSS utility classes while maintaining readability.

Layout

Use:

container
mx-auto
grid
flex
gap-*
space-y-*

Avoid excessive nesting.

Spacing

Use Tailwind spacing tokens corresponding to the 8-point grid.

Examples:

p-4
p-6
p-8
px-5
py-16
gap-8

Do not introduce arbitrary values unless absolutely necessary.

Typography

Use utility classes consistently.

Examples:

text-4xl
font-extrabold
leading-tight
tracking-tight
Colors

Use centralized theme colors instead of inline hexadecimal values whenever possible.

Example:

bg-primary
text-primary
border-primary

Avoid repeated inline color declarations.

Responsive Prefixes

Every major layout decision should explicitly define responsive behavior using:

sm:
md:
lg:
xl:
2xl:

Mobile-first implementation is mandatory.

44. Component Naming Convention

Component names should remain descriptive, reusable, and consistent.

Recommended naming:

Navbar

HeroSection

ActionCard

OfficialContactSection

ContactItem

InteractiveMap

MapOverlayCard

InformationRequestForm

InputField

TextareaField

SelectField

UploadArea

SubmitButton

ContactDirectory

ContactPersonCard

Footer

Avoid ambiguous names such as:

Box1

Card2

SectionA

ItemComponent
45. Performance Guidelines

The PPID & Contact page should prioritize fast loading and smooth interactions.

Images
Use WebP where supported.
Provide responsive image sizes.
Enable lazy loading for contact person photos.
Maps

Delay loading of the embedded map until the section approaches the viewport if supported by the implementation.

Display a skeleton placeholder during loading.

Icons

Use Material Symbols as SVG or variable font.

Avoid loading multiple icon libraries.

Fonts

Preload the Manrope and Hanken Grotesk font files.

Use font-display: swap to reduce layout shifts.

JavaScript

Only load scripts required for:

Form validation.
Map interactions.
Drawer navigation.
Submission feedback.

Avoid unnecessary animation libraries.

46. Dark Mode Policy

The initial release of the DLH Tulungagung website will use a light theme only.

Dark mode styles should not be implemented unless explicitly requested in a future version.

However, component architecture should avoid assumptions that would make future dark mode adoption difficult.

Colors should therefore be token-based rather than hardcoded.

47. Frontend Development Constraints

To preserve consistency across the entire website, the following constraints are mandatory:

Do not modify the global navigation component for this page.
Do not introduce new spacing scales outside the design token system.
Do not use gradients as primary backgrounds.
Do not use neumorphism, glass-heavy interfaces, or excessive visual effects.
Do not rely on JavaScript for layout behavior that can be achieved with CSS.
Avoid fixed pixel widths on mobile layouts.
Every interactive element must include hover, focus, active, and disabled states.
All forms must support client-side validation before submission.
Components must remain reusable and modular.
Styling must remain consistent with the Eco-Gov Modern Design System used across the Beranda, Profil, Layanan, and Berita pages.
48. Final Implementation Objective

The completed PPID & Contact page should deliver a user experience that reflects the values of a modern public institution:

Transparency, by presenting official information clearly and accessibly.
Trust, through structured layouts, consistent visual language, and professional presentation.
Efficiency, by minimizing friction in the public information request process.
Accessibility, ensuring all citizens can interact with the service regardless of device or assistive technology.
Scalability, allowing future expansion of contact directories, service forms, and institutional information without requiring structural redesign.

Every component, interaction, spacing rule, and responsive behavior described in this specification is intended to provide GitHub Copilot Agent with sufficient implementation detail to generate a production-ready frontend that remains fully aligned with the Eco-Gov Modern Design System across the entire DLH Tulungagung website.