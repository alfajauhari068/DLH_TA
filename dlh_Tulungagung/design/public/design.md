Frontend Design Specification
Home Page – Department of Environment (DLH) Website
Design System

Skyline Modern

1. Introduction
1.1 Purpose

This document defines the complete frontend design specification for the Home Page of the Department of Environment (DLH) website.

The objective of this document is to provide a single source of truth for every visual element, layout behavior, component relationship, spacing rule, interaction pattern, typography rule, color application, responsive behavior, accessibility requirement, and implementation guideline that must be followed during frontend development.

This document is intended to eliminate ambiguity during implementation by providing explicit design instructions that can be interpreted consistently by GitHub Copilot Agent, AI-assisted development tools, and human developers.

Every interface element described in this document must be implemented exactly as specified.

No visual interpretation should be introduced unless explicitly documented.

1.2 Scope

This specification governs every visual aspect of the Home Page including but not limited to:

Overall page composition
Layout hierarchy
Section organization
Responsive behavior
Typography system
Color system
Elevation system
Shape language
Component appearance
Visual rhythm
Content spacing
Image treatment
Motion behavior
Accessibility
User interaction
Visual consistency

This document does not define backend logic, database structure, authentication flow, API implementation, or server-side business logic.

1.3 Supported Technologies

The design defined in this document must be fully compatible with:

Laravel Blade Template Engine
HTML5
CSS3
Bootstrap 5.x
Tailwind CSS
Vanilla JavaScript
Alpine.js (optional)
Laravel Vite

No framework-specific UI library should alter the visual appearance defined in this document.

2. Design Philosophy
2.1 Design Language

The Home Page adopts the Skyline Modern Design System, a modern government-oriented visual language emphasizing professionalism, transparency, trustworthiness, and clarity.

The interface should communicate confidence while remaining approachable to citizens from diverse backgrounds.

The overall appearance must avoid excessive visual complexity, unnecessary decoration, or distracting animation.

The design language should emphasize clean alignment, generous white space, structured information hierarchy, and consistent visual rhythm.

2.2 Core Principles

Every interface element must follow these principles.

Clarity

Users must understand every interface element immediately.

No decorative element should reduce readability.

Primary actions should always be visually obvious.

Navigation must remain intuitive.

Consistency

All components must share identical visual behavior.

Spacing must remain consistent.

Padding values must never be arbitrary.

Corner radius must follow design tokens.

Typography hierarchy must remain identical across all pages.

Accessibility

Every interface element must remain accessible.

Color contrast must satisfy WCAG AA requirements.

Interactive elements must support keyboard navigation.

Focus indicators must remain visible.

Touch targets must be sufficiently large.

Simplicity

Avoid unnecessary visual complexity.

Avoid decorative gradients unless explicitly specified.

Avoid multiple competing accent colors.

Every element must serve a functional purpose.

Professionalism

Visual presentation should reflect the identity of a government institution.

Animations must be subtle.

Typography must remain highly legible.

Icons must communicate meaning rather than decoration.

Scalability

The design system must support future expansion.

New pages must inherit identical visual language.

All reusable components should preserve consistent spacing, typography, elevation, and interaction behavior.

3. Brand Identity

Skyline Modern represents a transition from traditional government websites toward a contemporary digital experience.

The identity emphasizes:

Trust
Transparency
Technology
Environmental sustainability
Public service
Simplicity
Reliability

The visual language combines modern enterprise software aesthetics with approachable government communication.

The interface should feel calm rather than energetic.

Blue serves as the dominant identity color because it communicates professionalism, authority, reliability, and confidence.

4. Color System
4.1 Color Philosophy

Color is used primarily to establish hierarchy rather than decoration.

Every color must have a semantic purpose.

The interface should rely primarily on neutral surfaces, allowing content to remain the primary focus.

Strong colors should only highlight important actions.

4.2 Primary Color

Primary Color

#005AB4

Purpose:

Primary buttons
Links
Active navigation
Primary icons
Selected controls
Interactive emphasis
Important highlights

Primary color must never dominate large background areas.

Its primary role is guiding user attention.

4.3 Primary Container
#0A73E0

Used for

Highlight cards
Featured banners
Promotional sections
Information panels

Primary containers should maintain excellent contrast with white typography.

4.4 Secondary Color
#465F88

Used for

Supporting actions
Secondary buttons
Neutral icons
Supplementary interface elements

Secondary colors should never compete visually with the primary color.

4.5 Tertiary Color
#964400

Used sparingly for:

Environmental campaign highlights
Special announcements
Informational accents

Tertiary color must never become the dominant visual identity.

4.6 Surface Colors

Surface colors establish visual depth.

Surface
#F9F9FF

Default page background.

Surface Lowest
#FFFFFF

Used for

Cards
Dialogs
Floating components
Surface Low
#F1F3FC

Used for

Alternate section backgrounds
Soft containers
Highlight blocks
Surface Container
#EBEDF7

Used for

Neutral content containers
Statistic cards
Information groups
Surface High
#E6E8F1

Used for elevated interface groups.

Surface Highest
#E0E2EB

Reserved for overlays requiring stronger separation.

4.7 Text Colors

Primary Text

#181C22

Used for:

Headlines
Titles
Body text
Important labels

Secondary Text

#414753

Used for:

Descriptions
Supporting information
Metadata
Card subtitles

Inverse Text

#EEF0FA

Used on dark surfaces.

4.8 Border Colors

Outline

#717785

For standard borders.

Outline Variant

#C1C6D5

For dividers and subtle separators.

Borders should remain visually subtle.

Heavy borders should be avoided.

4.9 Error Colors

Error

#BA1A1A

Used exclusively for:

Validation
Errors
Critical alerts

Error colors should never appear in decorative contexts.

5. Typography System
5.1 Typeface

The entire website uses:

Inter

No secondary font family should be introduced.

The font must remain consistent across every page.

5.2 Typography Philosophy

Typography establishes hierarchy through:

Size
Weight
Spacing

Color should not be relied upon to create hierarchy.

Typography should remain highly readable across all screen sizes.

5.3 Headline Large

Font Family

Inter

Weight

700

Size

32px

Line Height

40px

Usage

Hero title
Major section titles
Landing headlines
5.4 Headline Medium

Weight

600

Size

24px

Line Height

32px

Usage

Section titles
Card headers
Important headings
5.5 Body Large

Weight

400

Size

16px

Line Height

24px

Usage

Article summaries
Hero descriptions
Paragraphs
5.6 Body Medium

Weight

400

Size

14px

Line Height

20px

Usage

Metadata
Supporting text
Secondary descriptions
5.7 Label Medium

Weight

500

Size

12px

Line Height

16px

Usage

Buttons
Chips
Tags
Labels
6. Shape Language

The Skyline Modern Design System follows a soft rounded design language.

Rounded corners create a modern yet approachable appearance while preserving a professional government identity.

Corner radii must always use predefined design tokens.

No arbitrary radius values are permitted.

Token	Radius
Small	4px
Default	8px
Medium	12px
Large	16px
Extra Large	24px
Full	9999px

The selected radius must remain consistent for identical component types across the entire website.


7. Layout System
7.1 Layout Philosophy

The Home Page layout must prioritize content readability, structured information hierarchy, and responsive adaptability across all supported devices.

The layout should guide users naturally from the top of the page to the bottom through clearly separated content sections with consistent spacing and visual rhythm.

Every section must function as an independent content block while maintaining visual continuity with adjacent sections.

The layout must never appear cramped, cluttered, or visually overwhelming.

All sections should breathe through generous whitespace, consistent padding, and balanced proportions.

7.2 Layout Structure

The Home Page shall follow a vertical stacking layout.

The overall page hierarchy is:

Header

↓

Hero Section

↓

Quick Access Services

↓

Department Introduction

↓

Environmental Statistics

↓

Featured Programs

↓

Latest News

↓

Public Services

↓

Environmental Campaign

↓

Photo Gallery

↓

Interactive Information

↓

Partner & Collaboration

↓

Call To Action

↓

Footer

Every section must occupy its own logical container.

Sections should never visually merge into one another.

Each section should have a clear beginning and ending.

7.3 Container System

Every content section must be wrapped inside a responsive container.

The container is responsible for:

Maximum content width
Horizontal alignment
Responsive scaling
Internal padding

The page background may span the full viewport width, but textual content must remain constrained inside the container.

7.4 Maximum Width

Recommended maximum widths:

Screen Size	Container Width
Mobile	100%
Tablet	100%
Laptop	1140px
Desktop	1280px
Large Desktop	1440px

Content should never stretch excessively on ultra-wide displays.

Instead, whitespace should expand outside the content container.

7.5 Horizontal Padding

Container padding must remain responsive.

Recommended values:

Mobile

16px

Small Tablet

20px

Tablet

24px

Desktop

32px

Large Desktop

40px

Padding must always prevent content from touching the viewport edge.

8. Responsive Grid System
8.1 Philosophy

The responsive grid system provides consistent alignment and proportional spacing across all screen sizes.

The grid must be fluid.

No component should depend on fixed positioning.

8.2 Desktop Grid

Desktop layouts use

12 Columns

Characteristics:

Equal-width columns
Consistent gutter
Flexible resizing
Responsive scaling
8.3 Tablet Grid

Tablet layouts use

8 Columns

The reduced number of columns improves readability while maintaining flexibility.

8.4 Mobile Grid

Mobile layouts use

4 Columns

The mobile interface should maximize readability rather than density.

8.5 Grid Gutter

Standard gutter

16px

The gutter should remain consistent throughout the website.

Large gaps should only be introduced through section spacing, not grid gutters.

8.6 Column Alignment

Components should align consistently to the grid.

Avoid arbitrary horizontal positioning.

All cards inside a row should share equal widths whenever possible.

9. Responsive Breakpoints

The following breakpoints govern every component.

Breakpoint	Width
Extra Small	0–575px
Small	576–767px
Medium	768–991px
Large	992–1199px
Extra Large	1200–1399px
Ultra Large	≥1400px

Every component must adapt smoothly between breakpoints.

Layout shifts should be minimal.

10. Vertical Rhythm
10.1 Philosophy

Vertical spacing creates visual hierarchy.

Spacing should communicate relationships between content.

Related elements stay closer together.

Unrelated elements remain visually separated.

10.2 Section Spacing

Recommended section spacing:

Desktop

96px

Tablet

72px

Mobile

56px

These values define the space between major sections.

10.3 Internal Section Padding

Each section should include internal vertical padding.

Desktop

64px

Tablet

48px

Mobile

40px

10.4 Card Padding

Standard card

24px

Compact card

20px

Small card

16px

Padding should remain symmetrical.

10.5 Component Spacing

Spacing between related components:

Buttons

16px

Cards

24px

Form Fields

20px

Titles and Paragraphs

16px

Image and Caption

12px

Badge and Title

8px

Icon and Text

8px

11. White Space System

Whitespace is a primary design element.

It improves:

Readability
Focus
Navigation
Visual comfort

Whitespace must never be treated as empty space.

Instead, it functions as an active layout component.

Avoid filling every available area with content.

12. Section Composition Rules

Every homepage section should follow the same structural hierarchy.

Section

↓

Container

↓

Section Header

↓

Content Grid

↓

Supporting Content

↓

Section Footer (Optional)

This hierarchy must remain consistent throughout the website.

12.1 Section Header

Each major section begins with a header.

The header consists of:

Small Label (optional)

↓

Section Title

↓

Section Description

↓

Optional Action Button

Alignment may vary depending on section type, but internal hierarchy remains identical.

12.2 Section Title

Titles should:

Clearly identify the section
Use Headline Medium typography
Maintain high contrast
Avoid decorative styling
Never exceed two lines on desktop
12.3 Section Description

Descriptions provide context.

They should:

Remain concise
Improve understanding
Support the title
Never compete visually with the title
13. Visual Hierarchy

Every page must establish a clear reading order.

Hierarchy should be created using:

Typography

↓

Spacing

↓

Color

↓

Elevation

↓

Motion

Never rely on color alone.

14. Content Alignment

Text alignment should follow these principles.

Headlines

Left aligned

Paragraphs

Left aligned

Buttons

Centered text

Cards

Internal left alignment

Statistics

Centered values

Navigation

Horizontal alignment

Consistency is mandatory.

15. Section Width Rules

Different content types require different widths.

Long Text

Maximum width

720px

Hero Text

Maximum width

640px

Cards

Fill available grid space.

Statistics

Equal width.

News Cards

Equal height whenever possible.

16. Background Alternation

To improve visual separation, adjacent sections should alternate between surface colors.

Example:

White

↓

Surface Low

↓

White

↓

Surface Container

↓

White

↓

Surface Low

This subtle alternation creates rhythm without introducing excessive visual complexity.

17. Image Placement Rules

Images must support content rather than dominate it.

Images should:

Maintain consistent aspect ratios.
Scale responsively.
Never appear stretched or distorted.
Preserve adequate whitespace around them.
Use rounded corners consistent with the design system.
Avoid unnecessary decorative frames.

Hero images may extend beyond the standard content width when required, but all textual content must remain aligned within the responsive container.


18. Home Page Information Architecture
18.1 Purpose

The Home Page serves as the primary gateway to the Department of Environment (DLH) website.

It is the first interface encountered by visitors and must immediately communicate the institution's identity, public services, environmental initiatives, latest information, and digital accessibility.

The Home Page should provide users with a clear overview of the department while encouraging deeper exploration into other sections of the website.

The layout must balance informative content with efficient navigation, ensuring that users can quickly locate important services without feeling overwhelmed.

Every section must have a distinct purpose and contribute to a cohesive user journey.

18.2 Home Page Objectives

The Home Page shall achieve the following objectives:

Introduce the Department of Environment.
Establish institutional credibility.
Highlight public services.
Promote transparency.
Showcase environmental programs.
Present the latest news and announcements.
Encourage citizen participation.
Provide quick access to frequently used services.
Direct visitors toward important information.
Strengthen the government's digital identity.

Every visual component must contribute to at least one of these objectives.

Decorative content without informational value should be avoided.

18.3 Content Hierarchy

The Home Page follows a structured hierarchy designed to prioritize the most important information.

Priority order:

1. Government Identity

2. Main Navigation

3. Hero Information

4. Quick Public Services

5. Department Overview

6. Environmental Programs

7. Latest News

8. Environmental Statistics

9. Public Information

10. Gallery

11. Collaboration

12. Footer Information

Users should be able to understand the website's purpose without excessive scrolling.

19. Home Page Structure

The Home Page must be constructed using the following sequence.

Page Wrapper

│

├── Header

├── Hero Banner

├── Quick Access Services

├── About Department

├── Environmental Statistics

├── Featured Programs

├── Latest News

├── Public Services

├── Environmental Campaign

├── Environmental Gallery

├── Interactive Information

├── Partners & Collaboration

├── Call To Action

└── Footer

The order above is mandatory.

The sequence should not be rearranged unless explicitly required by future design revisions.

20. Section Independence

Every section must function as an independent module.

Each section should have:

Independent layout.
Independent spacing.
Independent responsive behavior.
Independent animation.
Independent content source.

This modular approach allows future maintenance without affecting adjacent sections.

No section should rely on another section for structural integrity.

21. Section Layout Pattern

Every major section follows the same structural hierarchy.

Section

↓

Container

↓

Section Header

↓

Primary Content

↓

Supporting Content (Optional)

↓

Call-To-Action (Optional)

Maintaining this pattern ensures consistency throughout the Home Page.

22. Section Header Specification

Every major section should begin with a standardized section header.

The section header contains:

Small Label (Optional)

↓

Section Title

↓

Section Description

↓

Optional Button

The header establishes context before presenting the primary content.

22.1 Section Label

The label serves as a visual identifier.

Characteristics:

Uppercase.
Small typography.
Medium font weight.
Primary color.
Increased letter spacing.

Examples:

Latest News
Public Service
Statistics
Environmental Program

Labels should remain concise.

22.2 Section Title

The title communicates the primary purpose of the section.

Characteristics:

Headline Medium typography.
High contrast.
Maximum two lines.
Left aligned.

Titles should immediately describe the content below.

22.3 Section Description

Descriptions explain the purpose of the section.

Characteristics:

Body Large typography.
Neutral color.
Comfortable reading width.
Maximum three lines.

Descriptions should never duplicate the title.

22.4 Section Action

Some sections may include an optional action.

Examples:

View All
Explore More
Read More

Action buttons should align horizontally with the section title on desktop.

On mobile devices they should appear below the description.

23. Content Width Rules

Each content type has its own recommended maximum width.

Section Header

Maximum width

720px

Hero Content

Maximum width

640px

Paragraph

Maximum width

700px

Cards

Expand according to grid.

Statistics

Uniform width.

24. Grid Behaviour by Section

Different sections use different grid layouts.

Hero

Desktop

2 Columns

Tablet

1 Column

Mobile

1 Column

Quick Services

Desktop

4 Columns

Tablet

2 Columns

Mobile

2 Columns

Statistics

Desktop

4 Columns

Tablet

2 Columns

Mobile

2 Columns

Programs

Desktop

3 Columns

Tablet

2 Columns

Mobile

1 Column

News

Desktop

3 Columns

Tablet

2 Columns

Mobile

1 Column

Gallery

Desktop

4 Columns

Tablet

2 Columns

Mobile

2 Columns

Partner Logos

Desktop

5–6 Columns

Tablet

4 Columns

Mobile

2–3 Columns

25. Reading Flow

The visual reading order should naturally follow this sequence:

Navigation

↓

Hero

↓

Primary Action

↓

Quick Services

↓

Department Information

↓

Programs

↓

News

↓

Gallery

↓

Footer

The design must never force users to search for important information.

Critical content should appear before promotional content.

26. Visual Weight Distribution

The Home Page should gradually decrease visual intensity.

Recommended distribution:

Hero
██████████

Quick Service
████████

Statistics
███████

Programs
██████

News
██████

Gallery
█████

Partners
████

Footer
██

The Hero section carries the greatest visual emphasis.

Each subsequent section should become progressively lighter.

This approach naturally guides the visitor through the page.

27. Section Background Strategy

Adjacent sections should alternate between neutral surface colors.

Example:

Hero
White

↓

Quick Services
Surface Low

↓

About
White

↓

Statistics
Surface Container

↓

Programs
White

↓

News
Surface Low

↓

Gallery
White

↓

Partners
Surface Container

↓

Footer
Dark Surface

The alternation should remain subtle.

Strong background colors should only appear in promotional or call-to-action sections.

28. Visual Balance

Each section must maintain visual equilibrium.

Avoid:

Heavy content on one side.
Uneven card heights where avoidable.
Excessive empty space.
Dense clusters of elements.

The page should feel balanced from top to bottom.

29. Responsive Section Behaviour

Every section must adapt independently.

Typical adaptations include:

Multi-column layouts collapsing into fewer columns.
Horizontal content stacking vertically.
Reduction of internal spacing.
Resizing typography.
Scaling images proportionally.
Repositioning action buttons.

Content order should remain logical on all devices.

30. Empty State Readiness

Although the Home Page is designed to display dynamic content, every dynamic section must gracefully handle situations where no data is available.

Examples include:

No latest news.
No environmental programs.
No gallery images.
No upcoming events.

In these cases, the layout should remain intact.

Instead of removing the section entirely, display a well-designed empty state containing:

An informative icon or illustration.
A concise explanatory message.
Optional call-to-action directing users to related content.

Empty states must preserve spacing, alignment, and overall page rhythm to avoid abrupt visual gaps.


31. Header & Navigation Specification
31.1 Purpose

The Header is the primary navigation component of the Department of Environment (DLH) website.

It is the first interactive element encountered by users and remains the primary navigation mechanism throughout the browsing experience.

The Header must communicate institutional identity while providing fast access to every major website section.

It should remain visually clean, lightweight, and highly readable without competing with the Hero section.

The Header must function consistently across Desktop, Tablet, and Mobile devices.

31.2 Design Principles

The Header should embody the following principles:

Professional government appearance.
Clear institutional branding.
Simple navigation hierarchy.
Minimal visual noise.
High accessibility.
Responsive adaptability.
Consistent spacing.
Fast recognition.
Excellent usability.

The Header should never appear crowded.

Navigation items should remain immediately recognizable without requiring user effort.

31.3 Header Composition

The Header consists of the following hierarchy:

Header

├── Top Bar (Optional)

├── Main Navigation

│   ├── Logo

│   ├── Primary Navigation

│   ├── Search

│   ├── Utility Actions

│   └── Mobile Menu Button

Each component serves a unique purpose and should remain visually separated.

32. Header Height

Recommended heights:

Device	Height
Desktop	80px
Tablet	72px
Mobile	64px

Header height should never fluctuate while navigating between pages.

Consistency improves recognition and usability.

33. Header Width

The Header background spans the full viewport width.

However, all content inside the Header must remain constrained within the responsive container.

Example:

Viewport
────────────────────────────────────────

████████████████████████████████████████

Container
      ┌─────────────────────────────┐
      │ Logo     Navigation     CTA │
      └─────────────────────────────┘

████████████████████████████████████████
34. Header Background

Default background:

Surface Lowest

White

The background should appear clean and unobtrusive.

The Header must not use gradients.

Background images are prohibited.

35. Header Border

A subtle bottom divider should separate the Header from page content.

Characteristics:

Thin
Neutral
Low contrast

Heavy borders should never be used.

36. Sticky Header

The Header should become sticky after the user begins scrolling.

Behavior:

Fixed to the top of the viewport.
Smooth transition.
Preserve full functionality.
Maintain consistent height.

The sticky behavior should not obstruct page content.

36.1 Sticky Background

When sticky:

Background becomes fully opaque.
Slight shadow appears.
Blur effect may be used sparingly.
Navigation remains readable.
36.2 Sticky Shadow

The shadow should be soft and subtle.

Purpose:

Improve separation from page content.
Increase readability during scrolling.

Heavy shadows are prohibited.

37. Logo Area
37.1 Purpose

The Logo Area communicates the institution's identity.

It should immediately establish trust and authenticity.

The logo is the most important branding element within the Header.

37.2 Logo Composition

The Logo Area consists of:

Institution Logo

+

Institution Name

+

Optional Subtitle

Example:

[Logo]

Department of Environment

Tulungagung Regency
37.3 Logo Size

Desktop

48–56px

Tablet

44–48px

Mobile

40–44px

The logo should scale proportionally.

It must never appear stretched.

37.4 Institution Name

Typography:

Headline Medium

or

Body Large SemiBold

The institution name should remain clearly readable.

37.5 Subtitle

Optional.

May display:

Regency
Province
Government identity

The subtitle should use a smaller typography.

38. Primary Navigation

The navigation menu provides access to all primary website sections.

Example navigation structure:

Home

Profile

Services

News

Public Information

Gallery

Contact

Navigation labels should remain concise.

Avoid lengthy menu names.

38.1 Navigation Alignment

Desktop:

Centered vertically.

Horizontal layout.

Tablet:

Horizontal when space permits.

Mobile:

Collapsed into an off-canvas menu.

38.2 Navigation Spacing

Horizontal spacing between menu items:

24–32px

The spacing should create a balanced appearance.

39. Navigation Typography

Typography:

Body Large

Medium Weight

Text should maintain excellent readability.

Uppercase should not be used.

Title Case is preferred.

40. Navigation States

Every navigation item must support the following states.

Default

Hover

Focus

Active

Disabled

40.1 Default State

Text color:

On Surface

No underline.

No excessive decoration.

40.2 Hover State

Hover behavior:

Smooth color transition.
Primary color.
Optional underline animation.

Hover should provide clear feedback without excessive motion.

40.3 Active State

The current page should be visually distinguishable.

Recommended indicators:

Primary color.
Bottom indicator.
Medium font weight.

Only one navigation item should appear active.

40.4 Focus State

Keyboard navigation must remain fully supported.

Focus indicators should remain clearly visible.

Focus should never rely solely on color.

41. Dropdown Navigation

If a navigation item contains child pages, it should display a dropdown menu.

Example:

Services

↓

Licensing

↓

Waste Collection

↓

Environmental Complaints

↓

Downloads
41.1 Dropdown Appearance

Background:

White

Rounded corners:

Medium

Soft shadow

Internal padding:

16px

Vertical spacing:

8px

41.2 Dropdown Animation

Recommended animation:

Fade + Slide

Duration:

200–250ms

Animations should feel responsive and lightweight.

42. Search Area

The Header should include an optional search component.

Purpose:

Provide direct access to website content.

Examples:

News
Regulations
Services
Documents
42.1 Search Field

Characteristics:

Rounded corners.

Light border.

Search icon.

Placeholder text.

Accessible label.

42.2 Search Placeholder

Examples:

Search news...

Search services...

Search information...

Placeholder text should remain descriptive.

43. Utility Actions

Optional utility actions include:

Language Switcher

Accessibility Shortcut

Dark Mode (future)

Emergency Contact

Citizen Portal

Each utility action should remain visually secondary.

44. Call-to-Action Button

The Header may contain one primary button.

Examples:

Public Services

Report Complaint

Digital Services

Contact Us

The button should use the Primary Color.

Only one primary action is recommended.

45. Mobile Navigation

Desktop navigation should transform into an off-canvas menu on smaller screens.

Structure:

Logo

+

Hamburger Button

Clicking the button opens:

Home

Profile

Services

News

Gallery

Contact

Public Information
45.1 Mobile Drawer

Characteristics:

Full-height.

Slide from the right.

Surface Lowest background.

Soft shadow.

Independent scrolling.

45.2 Mobile Menu Spacing

Each navigation item should have generous vertical spacing.

Touch targets must remain comfortable.

45.3 Touch Target Size

Minimum interactive area:

44 × 44 pixels

Preferred:

48 × 48 pixels

This improves usability on touch devices.

46. Accessibility

The Header must support:

Keyboard navigation.
Screen readers.
Visible focus indicators.
Proper semantic landmarks.
Skip-to-content functionality.
High contrast.

Every interactive element must include an accessible label where necessary.

47. Responsive Behavior Summary
Component	Desktop	Tablet	Mobile
Logo	Full	Full	Compact
Navigation	Horizontal	Horizontal / Compact	Off-canvas
Search	Visible	Optional	Icon / Drawer
CTA Button	Visible	Visible	Inside Drawer
Utility Actions	Full	Compact	Drawer

The Header must preserve functionality across all viewport sizes while maintaining the Skyline Modern visual identity.


48. Hero Section Specification
48.1 Purpose

The Hero Section is the visual centerpiece of the Home Page and serves as the primary communication area between the Department of Environment (DLH) and website visitors.

Its purpose is not merely decorative but strategic. It must immediately communicate the institution's identity, mission, public value, and key digital services within the first few seconds of the user's visit.

The Hero Section should establish trust, introduce the government's commitment to environmental sustainability, and guide users toward meaningful actions.

Unlike commercial landing pages that prioritize marketing, the government Hero Section should prioritize clarity, accessibility, and public information.

The Hero Section should create a strong first impression while remaining calm, professional, and highly readable.

48.2 Objectives

The Hero Section must accomplish the following objectives:

Introduce the Department of Environment.
Display the official government identity.
Present the department's vision or key environmental message.
Highlight important digital services.
Encourage citizens to explore the website.
Increase engagement with environmental programs.
Direct users toward frequently accessed services.
Promote current environmental campaigns when available.

The Hero Section should never appear overloaded with information.

Only the most important information should be displayed.

48.3 Section Position

The Hero Section must always appear immediately below the Main Navigation.

Structure:

Header

↓

Hero Section

↓

Quick Access Services

No other content should be placed above the Hero Section except the Header.

48.4 Section Width

The Hero background spans the full viewport width.

However, textual content must remain inside the responsive content container.

Illustrations or decorative images may extend beyond the container boundaries if necessary, provided they do not interfere with readability.

48.5 Section Height

Recommended minimum heights:

Device	Minimum Height
Desktop	680–760px
Laptop	640–700px
Tablet	600–640px
Mobile	Auto (minimum 560px)

The Hero Section should occupy approximately the first visible screen on desktop devices.

Excessive vertical height should be avoided.

49. Hero Layout

The Hero Section adopts a two-column responsive layout.

Desktop structure:

┌──────────────────────────────────────────────────────────────┐

 Hero Text                     Hero Illustration

└──────────────────────────────────────────────────────────────┘

Desktop column ratio:

Text

45%

Image

55%

The image area receives slightly more space because it supports the visual identity.

Tablet Layout

The layout gradually transitions toward a stacked arrangement.

Hero Text

↓

Hero Illustration
Mobile Layout

The Hero becomes a single-column layout.

Recommended order:

Headline

↓

Description

↓

Buttons

↓

Statistics

↓

Illustration

The reading order should prioritize textual information before imagery.

50. Hero Background
50.1 Philosophy

The Hero background should reinforce professionalism while avoiding visual distraction.

Backgrounds should support the content rather than compete with it.

The Hero should remain bright, clean, and spacious.

50.2 Background Color

Primary recommendation:

Surface

White

Alternative:

Soft neutral surface.

Strong saturated backgrounds should be avoided.

50.3 Background Gradient

A subtle linear gradient may be used.

Characteristics:

Very low opacity.
Soft transition.
Dominated by neutral tones.
Minimal visual noise.

Large colorful gradients should never dominate the Hero.

50.4 Decorative Shapes

Optional abstract decorative shapes may be introduced.

Examples:

Soft circles.
Organic environmental curves.
Blurred geometric forms.
Transparent botanical patterns.

Decorative elements must remain behind the primary content.

They should never reduce readability.

51. Hero Content Hierarchy

Every Hero follows the same information hierarchy.

Government Label

↓

Main Heading

↓

Supporting Description

↓

Primary Actions

↓

Optional Statistics

↓

Supporting Information

The order above is mandatory.

52. Government Label

The Hero begins with a small institutional label.

Example:

Government of Tulungagung Regency

or

Department of Environment

Characteristics:

Small typography.
Medium weight.
Primary color.
Letter spacing.
Uppercase optional.

The label introduces institutional identity before the headline.

53. Main Headline

The headline is the most important textual element within the Hero.

It communicates the department's primary mission.

Examples:

Building a Cleaner, Greener, and More Sustainable Tulungagung

or

Creating a Healthy Environment for Present and Future Generations

The headline should be:

Clear.
Inspirational.
Professional.
Citizen-oriented.

Marketing language should be avoided.

53.1 Headline Length

Recommended:

Two to three lines.

Maximum:

Four lines.

Long paragraphs should never be used as headlines.

53.2 Typography

Desktop:

Headline Large

Tablet:

Scaled proportionally.

Mobile:

Reduced while preserving hierarchy.

54. Hero Description

The description explains the department's mission.

Typical content:

Environmental protection.
Public services.
Waste management.
Sustainability.
Community participation.

The description should complement the headline rather than repeat it.

54.1 Description Width

Maximum width:

600px

This improves reading comfort.

54.2 Typography

Body Large

Comfortable line height.

Neutral text color.

55. Hero Call-to-Action Area

The Hero should provide one primary action and one optional secondary action.

Examples:

Primary:

Explore Services

Secondary:

Latest News

or

Learn More
55.1 Button Arrangement

Desktop:

Horizontal

[Primary]

[Secondary]

Tablet:

Horizontal when space allows.

Mobile:

Vertical stacking.

55.2 Primary Button

Characteristics:

Filled.
Primary color.
Rounded corners.
Medium elevation.
Clear hover feedback.

The primary button represents the most important user action.

55.3 Secondary Button

Characteristics:

Outline.
Neutral border.
Transparent background.
Primary hover state.

The secondary button should remain visually subordinate to the primary button.

56. Hero Supporting Statistics

Optional statistics may reinforce institutional credibility.

Examples:

Programs

120+

↓

Public Services

35

↓

Environmental Villages

48

↓

Citizen Reports

12,000+

Statistics should remain concise.

Avoid excessive numerical information.

56.1 Statistic Cards

Each statistic may appear inside a lightweight card.

Characteristics:

White background.
Rounded corners.
Soft shadow.
Equal width.
Consistent spacing.
57. Hero Illustration

The illustration communicates environmental identity.

It should visually reinforce the department's mission.

Suitable themes include:

Nature.
Recycling.
Green cities.
Clean rivers.
Trees.
Public parks.
Waste management.
Environmental officers.
Citizens participating in environmental activities.

Illustrations should be authentic and contextually relevant to the department.

Generic corporate imagery should be avoided.

57.1 Illustration Style

Preferred styles:

High-quality photography.
Flat vector illustration.
Semi-realistic illustration.
Modern government illustration.

The selected style should remain consistent across the website.

57.2 Image Quality

Images must be:

High resolution.
Responsive.
Optimized for performance.
Properly cropped.
Consistent in visual tone.

Images must never appear blurry or pixelated.

57.3 Aspect Ratio

Recommended:

16:9

or

4:3

The ratio should remain consistent within the Hero Section.



58. Hero Media Container
58.1 Purpose

The Hero Media Container is responsible for presenting the primary visual representation of the Department of Environment (DLH). It occupies the right side of the Hero Section on desktop devices and transitions below the textual content on tablet and mobile devices.

Unlike decorative illustrations found on commercial websites, the Hero Media Container should communicate authenticity, public service, environmental responsibility, and institutional credibility.

The media should reinforce the department's mission rather than distract users.

58.2 Media Composition

The Hero Media Container may contain one of the following:

High-quality environmental photography.
Official government activity documentation.
Environmental campaign photography.
Modern flat illustration.
Hybrid illustration combined with photography.
Lightweight animation (optional).

Only one primary visual should be displayed at a time.

The visual should remain the focal point of the Hero without overpowering the textual content.

58.3 Image Position

Desktop:

The image should align to the right side of the Hero layout.

Tablet:

Centered below the textual content.

Mobile:

Centered beneath the Hero actions.

The image must maintain proportional scaling across all viewport sizes.

58.4 Safe Area

A visual safe area must be preserved around the Hero image.

No critical content should touch:

Container edges.
Decorative backgrounds.
Floating cards.
Navigation overlap.

The illustration should appear spacious and unobstructed.

59. Hero Carousel (Optional)
59.1 Purpose

When multiple featured announcements or environmental campaigns need to be highlighted, the Hero Section may function as a carousel.

The carousel should rotate only the Hero content while preserving the same structural layout.

Frequent movement should be avoided.

The carousel should enhance communication rather than create distraction.

59.2 Slide Structure

Every slide must contain:

Government Label

↓

Headline

↓

Description

↓

Primary Button

↓

Secondary Button

↓

Hero Image

The layout must remain identical between slides.

Only the content changes.

59.3 Maximum Number of Slides

Recommended:

3 slides

Acceptable maximum:

5 slides

More than five slides significantly reduces content visibility and user engagement.

59.4 Auto Rotation

If automatic rotation is enabled:

Initial delay: approximately 5–7 seconds.
Smooth transition.
Pause on hover (desktop).
Pause while focused via keyboard.
Resume after user interaction only when appropriate.

Users must remain in control of the experience.

59.5 Manual Navigation

The carousel should provide manual navigation.

Recommended controls include:

Previous button.
Next button.
Pagination indicators.

Controls should be easily discoverable without dominating the Hero.

59.6 Pagination Indicators

Indicators should:

Display current slide position.
Remain unobtrusive.
Support mouse, keyboard, and touch interaction.
Include clear focus indicators.

The active indicator should use the Primary Color.

Inactive indicators should use neutral colors.

60. Floating Information Cards
60.1 Purpose

Floating Information Cards provide quick access to key environmental information without requiring users to scroll further.

They supplement the Hero content by presenting concise, high-value information.

Examples include:

Air Quality Index.
Waste Collection Schedule.
Environmental Complaint Portal.
Upcoming Campaign.
Emergency Contact.
Green Open Space Statistics.

These cards should never replace the main Hero message.

60.2 Placement

Desktop:

Cards may overlap the Hero illustration slightly while maintaining sufficient spacing.

Tablet:

Cards should appear below the illustration.

Mobile:

Cards should stack vertically beneath the Hero image.

Cards must never obstruct important visual elements.

60.3 Card Composition

Each floating card should contain:

Icon

↓

Title

↓

Short Description

↓

Optional Action

Cards should remain concise.

Large paragraphs are prohibited.

60.4 Card Appearance

Characteristics:

Surface Lowest background.
Medium corner radius.
Soft elevation.
Consistent padding.
High contrast typography.

Cards should appear lightweight.

Heavy visual decoration should be avoided.

61. Environmental Highlight Badges

Optional highlight badges may be displayed within the Hero Section.

Examples:

Eco Program.
Smart Environment.
Digital Services.
Public Information.
Green City Initiative.

Badges should reinforce important themes.

They should not become the dominant visual element.

61.1 Badge Style

Characteristics:

Pill-shaped.
Small typography.
Medium font weight.
Primary or Secondary background.
High contrast text.

Badges should remain visually subtle.

62. Hero Scroll Indicator
62.1 Purpose

The Scroll Indicator informs users that additional content exists below the Hero Section.

It should encourage exploration without demanding attention.

62.2 Position

Desktop:

Centered at the bottom of the Hero.

Tablet:

Bottom center.

Mobile:

Optional.

The indicator should never overlap Hero buttons.

62.3 Appearance

Recommended composition:

Mouse Icon

↓

Small Arrow

↓

"Scroll Down"

Typography should use Label Medium.

Opacity should remain slightly reduced to avoid visual competition.

62.4 Animation

Recommended animation:

Gentle vertical movement.
Small amplitude.
Smooth looping.
Approximately 2–3 seconds per cycle.

Abrupt or exaggerated motion should be avoided.

63. Hero Motion System
63.1 Philosophy

Motion within the Hero Section should support comprehension, not decoration.

Animations must feel natural, subtle, and purposeful.

Users should immediately understand the interface without waiting for animations to complete.

63.2 Initial Load Animation

Recommended sequence:

Navigation

↓

Government Label

↓

Headline

↓

Description

↓

Buttons

↓

Statistics

↓

Illustration

Each element should appear progressively with minimal delay.

63.3 Hover Motion

Hover effects should be applied only to interactive elements.

Examples include:

Buttons.
Floating cards.
Navigation controls.

Hover effects may include:

Slight elevation.
Soft shadow increase.
Subtle color transition.
Minimal scale increase.

Large movements should be avoided.

63.4 Transition Duration

Recommended timing:

Fast: 150 ms.
Standard: 250 ms.
Slow: 350 ms.

Transitions should remain consistent throughout the website.

64. Responsive Adaptation
Desktop

Two-column layout.

Illustration occupies the right side.

Statistics may appear inline.

Buttons remain horizontal.

Tablet

Single-column layout.

Text appears above the illustration.

Buttons remain horizontal where space permits.

Statistics wrap into multiple rows.

Mobile

Single-column layout.

Content order:

Government Label

↓

Headline

↓

Description

↓

Primary Button

↓

Secondary Button

↓

Statistics

↓

Illustration

↓

Floating Cards

All content should remain fully visible without horizontal scrolling.

65. Accessibility Requirements

The Hero Section must satisfy the following accessibility requirements:

Text must meet WCAG AA contrast ratios.
Interactive elements must support keyboard navigation.
Images require descriptive alternative text.
Carousel controls must include accessible labels.
Automatic movement must not interfere with screen reader usage.
Motion-sensitive users should not be forced to experience continuous animation.

All essential information presented visually must also be available as text.

66. Performance Considerations

Hero media assets should be optimized to minimize loading time.

Recommendations include:

Responsive image sizes.
Modern image formats where supported.
Lazy loading for non-critical assets.
Priority loading for the primary Hero image.
Compression without noticeable quality degradation.

Animations should rely primarily on hardware-accelerated properties such as opacity and transform.

Avoid animations that trigger unnecessary layout recalculations.

67. Hero Consistency Rules

To preserve a unified visual identity across the entire DLH website, every Hero implementation must adhere to the following rules:

Maintain identical structural hierarchy.
Use consistent spacing values defined by the Skyline Modern Design System.
Reuse typography tokens without modification.
Apply only approved color tokens.
Avoid introducing additional decorative elements not defined in this specification.
Ensure all interactive elements follow the global interaction and accessibility guidelines.
Preserve the balance between textual content and visual media.
Keep the Hero focused on institutional communication rather than promotional aesthetics.

The Hero Section represents the visual identity of the Department of Environment and establishes the first impression of the website. Therefore, every implementation must prioritize clarity, professionalism, responsiveness, and long-term maintainability over excessive visual complexity.


Part 6 — Quick Access Services Specification
68. Quick Access Services
68.1 Purpose

The Quick Access Services section provides immediate entry points to the most frequently used digital services offered by the Department of Environment (DLH).

This section exists to reduce the number of navigation steps required for citizens to access essential public services.

Instead of forcing visitors to browse through multiple pages, the Quick Access Services section exposes the department's most important services directly on the Home Page.

This section functions as a digital service gateway and therefore must remain highly visible, intuitive, and immediately understandable.

The design should prioritize usability over decoration.

68.2 Objectives

The Quick Access Services section should accomplish the following objectives:

Reduce navigation complexity.
Increase service discoverability.
Encourage digital public service adoption.
Provide immediate access to frequently used services.
Improve overall website usability.
Promote digital transformation initiatives.
Shorten user interaction paths.
Strengthen public engagement.

Every service card should communicate its purpose within a few seconds.

Users should never need to guess the function of a service.

68.3 Section Placement

The Quick Access Services section should always appear immediately below the Hero Section.

Structure:

Header

↓

Hero Section

↓

Quick Access Services

↓

Department Overview

This placement ensures that users encounter essential services before scrolling into informational content.

68.4 Background Strategy

The section background should create subtle visual separation from the Hero Section.

Recommended background:

Surface Low

or

Surface Container Low

The background should remain light and unobtrusive.

Avoid saturated backgrounds.

68.5 Section Width

The section should occupy the full viewport width.

All content must remain inside the responsive container.

Content should never extend beyond the maximum container width defined by the global layout system.

69. Section Composition

The section consists of the following hierarchy:

Quick Access Section

↓

Container

↓

Section Header

↓

Service Grid

↓

Optional Supporting Information

Each component should maintain clear spacing from adjacent elements.

70. Section Header

The header introduces the purpose of the service section.

Structure:

Label

↓

Title

↓

Description
70.1 Label

Examples:

Digital Services

Citizen Services

Public Services

Online Services

The label should use:

Primary Color
Label Medium typography
Medium font weight
70.2 Title

Example:

Quick Access to Public Services

The title should immediately explain the section's purpose.

Typography:

Headline Medium

70.3 Description

Example:

Access essential environmental services quickly through our integrated digital platform.

The description should remain concise.

Maximum:

Three lines.

71. Service Grid
71.1 Grid Philosophy

The service grid presents all primary services with equal visual importance.

No individual service should dominate unless explicitly designated as featured.

Each card should maintain identical dimensions whenever possible.

Visual consistency is mandatory.

71.2 Desktop Layout

Recommended layout:

Four columns

Example:

┌──────┐ ┌──────┐ ┌──────┐ ┌──────┐
│Card 1│ │Card 2│ │Card 3│ │Card 4│
└──────┘ └──────┘ └──────┘ └──────┘
71.3 Tablet Layout

Recommended:

Two columns.

Cards should maintain equal height.

71.4 Mobile Layout

Recommended:

Two columns.

If service descriptions become too narrow, the layout may transition into a single-column arrangement.

The interface should prioritize readability over density.

72. Service Card
72.1 Purpose

Each Service Card represents one digital public service.

The card acts as a direct navigation element.

Users should immediately recognize:

What the service is.
Why it is useful.
How to access it.
72.2 Card Structure

Each card consists of:

Icon

↓

Service Title

↓

Short Description

↓

Optional Arrow Indicator

This structure should remain identical for all service cards.

72.3 Card Dimensions

Cards should maintain:

Equal width.
Equal height.
Equal internal spacing.
Equal corner radius.

Cards should never appear visually inconsistent.

72.4 Card Background

Background:

Surface Lowest

The card should contrast gently against the section background.

72.5 Border

Cards may use:

Outline Variant

or

No border with subtle shadow.

Both approaches must remain visually lightweight.

72.6 Corner Radius

Use the global design token:

Medium

The same radius must be applied consistently across all service cards.

72.7 Padding

Internal padding should be generous.

Recommended spacing:

24px

Content should never touch card edges.

73. Service Icon
73.1 Purpose

The icon provides immediate visual recognition.

Icons should communicate meaning before users read the title.

73.2 Icon Style

Recommended icon style:

Outlined
Rounded
Modern
Minimal

Icons should remain consistent throughout the website.

Mixing icon styles is prohibited.

73.3 Icon Size

Desktop:

40–48px

Tablet:

36–40px

Mobile:

32–36px

Icons should scale proportionally.

73.4 Icon Container

Icons may appear inside:

Circular container.
Rounded square.
Soft colored background.

The container should use low-opacity primary colors.

The icon should remain the visual focal point.

74. Service Title

The title identifies the service.

Examples:

Environmental Complaint

Waste Collection Schedule

Permit Services

Public Information

Environmental Licensing

Document Downloads

Titles should:

Be concise.
Remain highly readable.
Avoid abbreviations where possible.

Typography:

Body Large

Medium Weight

75. Service Description

Descriptions provide additional context.

Example:

Submit environmental complaints through our integrated digital reporting platform.

Descriptions should:

Use Body Medium typography.
Maximum two lines.
Avoid technical terminology.
Remain citizen-friendly.
76. Interactive States

Each card must support the following states:

Default

Hover

Focus

Pressed

Disabled

76.1 Default State

The default state should appear calm and approachable.

No excessive shadows.

No movement.

76.2 Hover State

Hover should provide immediate feedback.

Recommended behavior:

Slight elevation.
Soft shadow increase.
Border color transition.
Primary icon color.
Smooth animation.

Hover effects should remain subtle.

76.3 Focus State

Keyboard users must clearly identify the focused card.

Focus indicators should remain highly visible.

Focus should never rely solely on color changes.

76.4 Pressed State

Click interaction should feel responsive.

Recommended effects:

Slight scale reduction.
Shadow reduction.
Fast transition.
77. Card Animation

Animations should enhance usability rather than decoration.

Recommended animation:

Fade

Translate Y

Maximum movement:

8px

Animation duration:

200–250ms

Cards should never bounce or rotate.

78. Featured Service

One service may optionally be highlighted.

Examples:

Online Complaint

Environmental Licensing

Emergency Hotline

Digital Public Service

The featured service may include:

Slightly stronger shadow.
Primary accent.
Badge.
Slightly larger icon.

Only one featured card should exist within the section.

79. Accessibility

Each service card must satisfy the following requirements:

Fully keyboard accessible.
Proper semantic link or button element.
Visible focus state.
Accessible label.
Sufficient touch target size.
Clear contrast between text and background.

Icons should not be the sole means of conveying meaning.

Every icon must be accompanied by descriptive text.

80. Responsive Behaviour
Desktop
Four-column grid.
Equal card height.
Horizontal spacing maintained.
Tablet
Two-column grid.
Cards expand proportionally.
Internal spacing preserved.
Mobile
Two-column or single-column layout depending on content density.
Icons scale appropriately.
Text remains readable without truncation.
Touch targets remain comfortable.

The section should preserve its visual hierarchy and usability regardless of screen size.

81. Empty State

If no services are available, the section should not collapse.

Instead, display:

Service placeholder icon.
Informative message.
Optional button directing users to the complete services page.

The layout should remain visually balanced even when content is unavailable.

82. Consistency Rules

To maintain a unified design language across the website:

Every Service Card must use identical spacing tokens.
All icons must originate from the same icon library.
Typography must follow the Skyline Modern Design System.
Card dimensions should remain consistent.
Hover animations must use the global motion system.
No custom colors may be introduced outside the approved design tokens.
All interactive elements must follow the global accessibility guidelines.
Service ordering should prioritize user needs rather than internal organizational structure.

The Quick Access Services section is one of the most frequently used areas of the Home Page and must therefore prioritize clarity, speed, accessibility, and consistency over visual complexity.


Part 7 — Department Overview (About DLH) Specification
83. Department Overview
83.1 Purpose

The Department Overview section serves as the institutional introduction of the Department of Environment (DLH). This section provides visitors with a concise understanding of the department's identity, responsibilities, mission, and commitment to environmental sustainability.

Unlike the Hero Section, which is designed to capture attention, the Department Overview focuses on building institutional trust and providing meaningful context about the organization.

This section should help first-time visitors understand who the department is, what responsibilities it carries, and why its role is important to the community.

The presentation should be informative, structured, and easy to scan.

83.2 Objectives

The Department Overview section shall accomplish the following objectives:

Introduce the Department of Environment.
Build institutional credibility.
Explain the department's primary responsibilities.
Present the department's vision and mission.
Promote environmental awareness.
Encourage users to explore the Profile pages.
Establish trust before presenting additional services and information.

The content should remain concise and avoid lengthy institutional narratives.

83.3 Section Placement

The Department Overview section should appear immediately after the Quick Access Services section.

Page hierarchy:

Hero

↓

Quick Access Services

↓

Department Overview

↓

Environmental Statistics

This placement ensures that visitors first gain quick access to digital services and then receive institutional context.

83.4 Background Strategy

The Department Overview should return to a clean, neutral surface after the lightly emphasized Quick Access Services section.

Recommended background:

Surface Lowest
White

The section should feel spacious and calm.

84. Layout Structure

The Department Overview adopts a two-column responsive layout.

Desktop:

┌──────────────────────────────────────────────────────────────┐

 Text Content                 Supporting Media

└──────────────────────────────────────────────────────────────┘

Column ratio:

Text

55%

Media

45%

The text receives slightly more space because it contains the primary information.

Tablet Layout

The section transitions into a stacked layout.

Text

↓

Media
Mobile Layout

The layout becomes a single-column arrangement.

Recommended order:

Section Header

↓

Description

↓

Vision & Mission Highlights

↓

Primary Action

↓

Supporting Image

The reading order should prioritize textual content.

85. Section Composition

The Department Overview consists of the following structure:

Section

↓

Container

↓

Section Header

↓

Institution Description

↓

Key Highlights

↓

Primary Action

↓

Supporting Image

Every element should remain visually balanced.

86. Section Header

The section header introduces the institution.

Structure:

Label

↓

Title

↓

Description
86.1 Label

Example:

About the Department

The label should use:

Primary Color.
Label Medium typography.
Medium font weight.
86.2 Title

Example:

Committed to a Cleaner and Sustainable Environment

The title should clearly communicate the department's role.

Typography:

Headline Medium.

Maximum:

Two lines.

86.3 Description

The description should provide a concise overview of the department.

Example topics include:

Environmental management.
Waste management.
Pollution control.
Natural resource conservation.
Public environmental services.

The description should not exceed three short paragraphs or approximately 180 words.

Typography:

Body Large.

Maximum width:

680px.

87. Institutional Highlights

The Department Overview should include a concise list of institutional strengths.

Examples:

Environmental Protection Programs.
Sustainable Waste Management.
Digital Public Services.
Community Participation.
Environmental Monitoring.
Regulatory Compliance.

These highlights should help users understand the department's primary areas of responsibility.

87.1 Highlight Presentation

Highlights may be presented as:

Icon with text.
Checklist.
Small information cards.
Vertical list.

The chosen presentation style should remain consistent.

87.2 Iconography

Each highlight should include a meaningful icon.

Examples:

Leaf.
Recycle.
Water.
Tree.
Earth.
Shield.
Building.
Community.

Icons should reinforce understanding without replacing text.

88. Vision and Mission Summary

The Home Page should present a concise summary rather than the complete Vision and Mission statements.

Recommended structure:

Vision

↓

One-sentence summary

↓

Mission

↓

Three to five key commitments

The complete Vision and Mission should be accessible through the dedicated Profile page.

89. Supporting Statistics (Optional)

A compact group of institutional metrics may be included.

Examples:

Years of Service

↓

Number of Programs

↓

Environmental Awards

↓

Partner Organizations

These statistics should reinforce institutional credibility.

89.1 Statistic Presentation

Each metric should include:

Large Number

↓

Short Label

Descriptions should remain concise.

90. Supporting Image

The media element should complement the textual content.

Recommended content:

Department headquarters.
Environmental officers.
Public environmental activities.
Waste management operations.
Tree planting campaigns.
River cleaning initiatives.

The image should be authentic and representative of the department's work.

90.1 Image Style

Preferred characteristics:

High-resolution.
Natural lighting.
Consistent color grading.
Professional composition.

Avoid generic stock photography whenever possible.

90.2 Image Treatment

The image should include:

Rounded corners.
Soft shadow.
Responsive scaling.

Decorative frames are unnecessary.

91. Primary Call-to-Action

The section should conclude with a clear action encouraging users to learn more.

Examples:

Learn More About DLH.
View Organizational Profile.
Explore Our Responsibilities.
Read Our Vision and Mission.

The action should use the Primary Button style defined in the global component guidelines.

92. Visual Hierarchy

The Department Overview should follow the following reading order:

Label

↓

Title

↓

Description

↓

Highlights

↓

Statistics (Optional)

↓

Primary Action

↓

Supporting Image

This hierarchy should remain consistent across all viewport sizes.

93. Motion and Interaction

Animations should remain subtle.

Recommended entrance sequence:

Section Header

↓

Description

↓

Highlights

↓

Statistics

↓

Button

↓

Image

Each element should appear progressively with minimal delay.

Hover effects should be limited to interactive elements such as buttons and highlight cards.

94. Accessibility

The Department Overview must satisfy the following accessibility requirements:

Proper semantic section structure.
Descriptive headings.
Sufficient text contrast.
Keyboard-accessible interactive elements.
Alternative text for all images.
Icons supplemented by descriptive text.

The section should remain fully understandable even if images are unavailable.

95. Responsive Behaviour
Desktop
Two-column layout.
Text on the left.
Image on the right.
Highlights displayed in one or two columns depending on available space.
Tablet
Stacked layout.
Highlights arranged in two columns.
Image displayed below textual content.
Mobile
Single-column layout.
Full-width content.
Highlights stacked vertically or arranged in two compact columns.
Button spans the available width when appropriate.

Spacing should remain consistent with the global spacing system.

96. Consistency Rules

To preserve a cohesive institutional identity:

Typography must use Skyline Modern tokens.
Images must maintain consistent aspect ratios.
Highlight icons must originate from the approved icon library.
The section must use only approved color tokens.
Spacing must follow the global layout system.
No decorative effects should overshadow informational content.
All interactive elements must follow the global motion and accessibility guidelines.

The Department Overview should function as a bridge between the service-oriented introduction of the Home Page and the more detailed informational sections that follow, strengthening user trust while encouraging deeper exploration of the Department of Environment website.


Part 8 — Environmental Statistics & Achievements Specification
97. Environmental Statistics & Achievements
97.1 Purpose

The Environmental Statistics & Achievements section presents measurable indicators of the Department of Environment's performance, public service impact, and environmental initiatives.

This section transforms institutional achievements into concise, data-driven visual information that can be quickly understood by citizens.

Unlike narrative content, statistical information provides objective evidence of government performance and reinforces institutional transparency.

The purpose of this section is not to overwhelm users with numerical data but to communicate meaningful indicators of environmental progress through a clean, structured, and visually engaging presentation.

Statistics should reinforce public trust while encouraging users to explore more detailed reports available elsewhere on the website.

97.2 Objectives

The Environmental Statistics section shall achieve the following objectives:

Present institutional performance indicators.
Demonstrate measurable environmental achievements.
Improve public transparency.
Increase institutional credibility.
Communicate progress through concise metrics.
Encourage exploration of detailed statistical reports.
Provide quick insight into environmental conditions and departmental performance.

Only meaningful metrics should be displayed.

Avoid displaying excessive or redundant numerical information.

97.3 Section Placement

The Environmental Statistics section should appear immediately after the Department Overview.

Page hierarchy:

Department Overview

↓

Environmental Statistics

↓

Featured Programs

This placement allows users to first understand the department before reviewing measurable outcomes.

97.4 Background Strategy

The Environmental Statistics section should be visually distinguished from surrounding sections.

Recommended background:

Surface Container

or

Surface Low

The section should appear slightly elevated while remaining integrated with the overall page.

Strong background colors are discouraged.

98. Layout Structure

The section adopts a centered content layout.

Structure:

Section

↓

Container

↓

Section Header

↓

Statistics Grid

↓

Achievement Highlight (Optional)

↓

Secondary Action (Optional)

Each element should maintain generous spacing to enhance readability.

99. Section Header

The section header introduces the purpose of the displayed metrics.

Structure:

Label

↓

Title

↓

Description
99.1 Label

Examples:

Environmental Performance

Public Statistics

Environmental Indicators

Institutional Achievements

Typography:

Label Medium
Primary Color
Medium Weight
99.2 Title

Example:

Environmental Performance at a Glance

The title should communicate that the following content represents measurable institutional performance.

Typography:

Headline Medium

Maximum:

Two lines.

99.3 Description

The description should briefly explain the significance of the displayed statistics.

Example:

Explore key environmental indicators and institutional achievements that reflect our commitment to sustainable environmental management.

Maximum length:

Three lines.

Typography:

Body Large.

100. Statistics Grid
100.1 Philosophy

The Statistics Grid presents multiple key indicators using a consistent card layout.

Each metric should receive equal visual emphasis.

No statistic should dominate unless intentionally designated as a featured indicator.

100.2 Desktop Layout

Recommended:

Four equal-width statistic cards.

Example:

┌─────┐ ┌─────┐ ┌─────┐ ┌─────┐
│Card │ │Card │ │Card │ │Card │
└─────┘ └─────┘ └─────┘ └─────┘
100.3 Tablet Layout

Recommended:

Two columns.

Cards should retain equal height.

100.4 Mobile Layout

Recommended:

Two columns.

If the content becomes visually dense, a single-column arrangement may be used.

101. Statistic Card
101.1 Purpose

Each Statistic Card represents a single key performance indicator (KPI).

The card should present information in a manner that is immediately understandable.

Users should be able to interpret the metric without reading lengthy explanations.

101.2 Card Structure

Each Statistic Card consists of:

Icon

↓

Primary Value

↓

Label

↓

Optional Supporting Description

This hierarchy must remain consistent across all statistic cards.

101.3 Card Appearance

Characteristics:

Surface Lowest background.
Medium corner radius.
Soft shadow.
Uniform dimensions.
Consistent internal spacing.

Cards should appear lightweight and modern.

101.4 Internal Padding

Recommended:

24px

Padding should remain symmetrical.

102. Statistic Icon

Icons provide immediate visual context.

Examples:

Recycle.
Tree.
Water Drop.
Globe.
Leaf.
Factory.
Community.
Waste Bin.
Air Quality.
Renewable Energy.

Icons should be visually consistent with the global icon system.

102.1 Icon Container

Icons may be placed inside:

Circular background.
Rounded square.
Soft colored container.

The icon container should use a low-opacity primary or secondary color.

103. Primary Value

The primary value is the focal point of each card.

Examples:

125+

18,500

92%

350 ha

48

1,200

Typography:

Headline Large.

Weight:

Bold.

The value should occupy the highest level of visual hierarchy.

104. Label

The label explains the meaning of the value.

Examples:

Environmental Programs.
Public Complaints Resolved.
Waste Collected.
Green Open Spaces.
Community Volunteers.
Air Quality Monitoring Stations.

Typography:

Body Large.

Medium Weight.

Labels should remain concise.

105. Supporting Description (Optional)

A short explanatory sentence may be included.

Example:

Updated monthly based on official environmental reports.

Typography:

Body Medium.

Maximum:

Two lines.

106. Counter Animation
106.1 Purpose

Animated counters provide subtle visual engagement when statistics first enter the viewport.

Animations should emphasize numerical progression without distracting users.

106.2 Behavior

The counter animation should:

Trigger only once when the section becomes visible.
Count upward smoothly.
Finish within approximately one second.
Avoid excessive speed.

Animations should not repeat during normal scrolling.

106.3 Formatting

Large numbers should be formatted for readability.

Examples:

18,500

125+

1.2M

92%

Avoid displaying long, unformatted numerical strings.

107. Achievement Highlight

An optional featured achievement may appear below the statistics grid.

Purpose:

Highlight significant institutional accomplishments.

Examples:

National Environmental Award.
ISO Certification.
Green City Recognition.
Public Service Excellence Award.

Only one featured achievement should appear within the section.

107.1 Layout

Recommended composition:

Achievement Icon

↓

Achievement Title

↓

Brief Description

↓

Optional Button

The highlight should appear visually distinct while remaining consistent with the Skyline Modern design language.

108. Data Integrity

Statistics displayed on the Home Page should:

Reflect official institutional data.
Remain current.
Be synchronized with backend data sources.
Display update timestamps where appropriate.

Placeholder values should not be used in production.

109. Motion and Interaction

Statistic Cards should include subtle interactions.

Hover behavior:

Slight elevation.
Soft shadow enhancement.
Gentle upward translation (maximum 6–8px).

Counter animation should occur independently of hover effects.

Animations should never interfere with readability.

110. Accessibility

The Environmental Statistics section must support:

Semantic heading structure.
Screen reader compatibility.
Accessible numerical labels.
Keyboard navigation for interactive elements.
High contrast text.
Descriptive icon alternatives where required.

Users relying on assistive technologies should receive equivalent information.

111. Responsive Behaviour
Desktop
Four-column grid.
Equal-height cards.
Balanced spacing.
Optional achievement banner displayed beneath the grid.
Tablet
Two-column grid.
Cards expand proportionally.
Achievement banner spans full container width.
Mobile
Two-column or single-column layout depending on available width.
Counter values remain prominent.
Labels wrap naturally without truncation.
Internal spacing remains generous.

The section should remain visually balanced across all devices.

112. Consistency Rules

To maintain consistency across the website:

All Statistic Cards must share identical dimensions whenever possible.
Counter animations must follow the global motion system.
Icons must originate from the approved icon library.
Typography must follow Skyline Modern tokens.
Only approved color tokens may be used.
Numerical formatting must remain consistent.
Data must prioritize clarity over quantity.
Decorative effects should never compete with the displayed metrics.

The Environmental Statistics & Achievements section should present institutional performance in a transparent, credible, and easily understandable manner while reinforcing the Department of Environment's commitment to accountability and sustainable development.



Part 9 — Featured Programs & Environmental Initiatives Specification
113. Featured Programs & Environmental Initiatives
113.1 Purpose

The Featured Programs & Environmental Initiatives section showcases the Department of Environment's flagship programs, strategic initiatives, public campaigns, and sustainability projects.

This section highlights the department's active contributions toward environmental protection, waste management, biodiversity conservation, climate resilience, and community participation.

Unlike the Environmental Statistics section, which emphasizes measurable outcomes, the Featured Programs section focuses on communicating ongoing initiatives and encouraging public engagement.

The section should inspire confidence, increase awareness, and motivate citizens to participate in environmental activities.

113.2 Objectives

The Featured Programs section shall achieve the following objectives:

Present ongoing environmental programs.
Promote sustainability initiatives.
Increase public awareness.
Encourage citizen participation.
Showcase institutional priorities.
Highlight successful environmental campaigns.
Direct users to detailed program information.

Programs should be presented clearly without overwhelming visitors.

Only the most relevant and impactful programs should appear on the Home Page.

113.3 Section Placement

The Featured Programs section should appear immediately after the Environmental Statistics section.

Page hierarchy:

Environmental Statistics

↓

Featured Programs

↓

Latest News

This sequence creates a logical transition from institutional performance metrics to ongoing environmental initiatives.

113.4 Background Strategy

The Featured Programs section should return to a neutral background.

Recommended:

Surface Lowest
White

This contrast differentiates it from the preceding statistics section.

114. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Program Card (Optional)

↓

Programs Grid

↓

View All Button

Each component should maintain generous spacing.

115. Section Header

Structure:

Label

↓

Title

↓

Description
115.1 Label

Examples:

Environmental Programs

Featured Initiatives

Sustainability Projects

Green Campaigns

Typography:

Label Medium
Primary Color
Medium Weight
115.2 Title

Example:

Building a Sustainable Future Through Environmental Action

Typography:

Headline Medium.

Maximum:

Two lines.

115.3 Description

Example:

Discover our flagship environmental initiatives designed to improve ecological sustainability and community well-being.

Maximum:

Three lines.

Typography:

Body Large.

116. Featured Program Card (Optional)
116.1 Purpose

One program may be visually emphasized to highlight an important environmental initiative.

Examples include:

National Clean River Campaign.
Zero Waste Initiative.
Smart Waste Management Program.
Green School Movement.
Urban Tree Planting Campaign.

Only one Featured Program Card should be displayed.

116.2 Layout

Desktop:

Two-column layout.

Image

↓

Program Information

or

Program Information

↓

Image

The image and content should maintain equal visual importance.

Tablet

Stacked layout.

Mobile

Single-column layout.

Image appears above the content.

116.3 Card Composition

The Featured Program Card should contain:

Program Category

↓

Program Title

↓

Program Summary

↓

Program Highlights

↓

Primary Button

↓

Supporting Image
116.4 Appearance

Characteristics:

Surface Lowest background.
Large rounded corners.
Soft elevation.
Spacious internal padding.
Responsive image.

The card should appear visually prominent while maintaining consistency with the Skyline Modern Design System.

117. Programs Grid
117.1 Purpose

The Programs Grid presents additional environmental initiatives in a compact and scannable format.

Each program should receive equal visual emphasis.

117.2 Desktop Layout

Recommended:

Three columns.

Example:

┌──────┐ ┌──────┐ ┌──────┐
│Card 1│ │Card 2│ │Card 3│
└──────┘ └──────┘ └──────┘
Tablet Layout

Recommended:

Two columns.

Mobile Layout

Single-column.

Cards should occupy the available width.

118. Program Card
118.1 Purpose

Each Program Card represents one environmental initiative.

Users should immediately understand:

Program name.
Purpose.
Current status.
Category.
118.2 Card Structure

Each Program Card contains:

Program Image

↓

Category Badge

↓

Program Title

↓

Program Summary

↓

Status

↓

Learn More Button

This hierarchy should remain consistent.

118.3 Card Background

Background:

Surface Lowest.

118.4 Border Radius

Use the global design token:

Large

118.5 Shadow

Apply a subtle shadow consistent with the global elevation system.

Avoid heavy visual effects.

119. Program Image

The program image provides contextual understanding.

Examples:

Waste collection.
Recycling.
Tree planting.
River cleaning.
Environmental education.
Biodiversity conservation.

Images should represent actual departmental activities whenever possible.

119.1 Aspect Ratio

Recommended:

16:9

The aspect ratio should remain consistent across all cards.

119.2 Image Treatment

Images should include:

Rounded top corners.
Responsive scaling.
Optimized file size.
Consistent color grading.
120. Category Badge

Each program should include a category badge.

Examples:

Waste Management.
Climate Action.
Biodiversity.
Public Participation.
Education.
Conservation.
Air Quality.

Characteristics:

Pill shape.
Small typography.
Medium weight.
Primary or Secondary background.

Badges should remain visually lightweight.

121. Program Title

The title identifies the initiative.

Examples:

Clean River Restoration Program

Green Village Development

Smart Recycling Initiative

Community Composting Project

Typography:

Body Large.

Medium Weight.

Maximum:

Two lines.

122. Program Summary

Provide a concise description.

Maximum:

Three lines.

Typography:

Body Medium.

The summary should explain the objective rather than operational details.

123. Program Status

Programs may display a status indicator.

Examples:

Active.
Upcoming.
Completed.
Ongoing.
Registration Open.

Status indicators should use semantic color tokens while maintaining sufficient contrast.

123.1 Status Style

Structure:

Colored Indicator

↓

Status Text

The indicator should remain compact and unobtrusive.

124. Primary Action

Each Program Card should include one action.

Examples:

Learn More.
View Details.
Join Program.
Register Now.

Buttons should use the Secondary or Text Button style unless the program requires special emphasis.

125. Motion and Interaction

Hover behavior:

Slight elevation.
Soft shadow enhancement.
Smooth image zoom (maximum 1.05×).
Button color transition.

Animations should remain subtle and performance-friendly.

126. Accessibility

Program Cards must support:

Keyboard navigation.
Descriptive image alternative text.
Visible focus indicators.
Accessible button labels.
Semantic HTML structure.
High contrast typography.

Information conveyed by color should also be communicated through text.

127. Responsive Behaviour
Desktop
Featured Program displayed in two-column layout.
Programs Grid uses three columns.
Tablet
Featured Program stacks vertically.
Programs Grid transitions to two columns.
Mobile
Featured Program becomes a single-column card.
Programs Grid displays one card per row.
Buttons expand to comfortable touch widths when appropriate.

All cards should maintain consistent spacing and equal visual rhythm.

128. Empty State

If no active programs are available:

Display:

Environmental illustration.
Informative message.
Optional button linking to the Programs page.

The layout should preserve the section's spacing and overall structure.

129. Consistency Rules

To maintain consistency across the website:

Every Program Card must use the approved spacing tokens.
Images must maintain identical aspect ratios.
Category badges must follow the global badge component specification.
Typography must use Skyline Modern design tokens.
Motion must follow the global animation system.
Icons and visual elements must originate from approved libraries.
Buttons must follow the global component specification.
Colors must use only approved semantic tokens.

The Featured Programs & Environmental Initiatives section should communicate the Department of Environment's ongoing efforts in a clear, engaging, and trustworthy manner while encouraging citizens to learn more and actively participate in environmental sustainability initiatives.


Part 10 — Latest News & Announcements Specification
130. Latest News & Announcements
130.1 Purpose

The Latest News & Announcements section serves as the primary communication channel for publishing official information from the Department of Environment (DLH). It delivers timely updates, policy announcements, environmental activities, public notices, and institutional news to citizens.

This section should reinforce transparency, improve public awareness, and encourage visitors to remain informed about environmental developments and government initiatives.

Unlike the Featured Programs section, which focuses on long-term initiatives, the Latest News section emphasizes current events, recently published articles, and time-sensitive announcements.

The design should prioritize readability, credibility, and efficient information scanning.

130.2 Objectives

The Latest News & Announcements section shall achieve the following objectives:

Publish official departmental news.
Communicate environmental campaigns.
Announce public activities.
Disseminate government information.
Promote transparency.
Increase citizen engagement.
Encourage users to read complete articles.

Only recent and relevant news should appear on the Home Page.

Older content should remain accessible through the dedicated News page.

130.3 Section Placement

The Latest News & Announcements section should appear immediately after the Featured Programs section.

Page hierarchy:

Featured Programs

↓

Latest News

↓

Public Services

This sequence presents active environmental initiatives before reporting recent developments.

130.4 Background Strategy

Recommended background:

Surface Low

or

Surface Container Low

The subtle background contrast helps distinguish the News section from adjacent content.

131. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Article (Optional)

↓

News Grid

↓

View All Button

Each component should maintain consistent spacing according to the Skyline Modern spacing system.

132. Section Header

Structure:

Label

↓

Title

↓

Description

↓

Optional View All Button
132.1 Label

Examples:

Latest News

News & Updates

Official Announcements

Environmental News

Typography:

Label Medium.
Primary Color.
Medium Weight.
132.2 Title

Example:

Latest News from the Department of Environment

Typography:

Headline Medium.

Maximum:

Two lines.

132.3 Description

Example:

Stay informed with the latest environmental initiatives, government announcements, and community activities.

Maximum:

Three lines.

Typography:

Body Large.

133. Featured Article (Optional)
133.1 Purpose

One recently published article may be highlighted to emphasize significant announcements.

Examples:

Major environmental policy.
National environmental award.
Emergency environmental notice.
Large-scale public campaign.
Strategic institutional announcement.

Only one Featured Article should appear.

133.2 Desktop Layout

Recommended:

Two-column layout.

Featured Image

↓

Article Information

or

Article Information

↓

Featured Image

Both arrangements are acceptable, provided visual balance is maintained.

133.3 Tablet Layout

Stacked layout.

Image displayed above the content.

133.4 Mobile Layout

Single-column.

Image followed by textual information.

134. Featured Article Structure

The Featured Article should contain:

Category

↓

Publication Date

↓

Article Title

↓

Summary

↓

Author (Optional)

↓

Read More Button

↓

Featured Image
135. News Grid
135.1 Purpose

The News Grid presents additional recent articles in a compact, scannable format.

Each article should receive equal visual emphasis.

135.2 Desktop Layout

Recommended:

Three-column grid.

┌──────┐ ┌──────┐ ┌──────┐
│Card 1│ │Card 2│ │Card 3│
└──────┘ └──────┘ └──────┘
135.3 Tablet Layout

Recommended:

Two columns.

135.4 Mobile Layout

Single-column.

Each article occupies the full available width.

136. News Card
136.1 Purpose

Each News Card represents one published article.

Users should immediately understand:

Article topic.
Publication date.
News category.
Importance.
136.2 Card Structure

Each card consists of:

Article Image

↓

Category Badge

↓

Publication Date

↓

Article Title

↓

Summary

↓

Read More Link

This hierarchy should remain consistent.

136.3 Card Appearance

Characteristics:

Surface Lowest background.
Medium corner radius.
Soft shadow.
Uniform dimensions.
Responsive image.

Cards should maintain equal visual weight.

137. Article Image

Images should provide contextual understanding.

Examples:

Official ceremonies.
Environmental campaigns.
Tree planting.
River cleaning.
Waste management.
Community activities.
Government meetings.

Images should represent actual events whenever possible.

137.1 Aspect Ratio

Recommended:

16:9

Maintain a consistent aspect ratio across all article cards.

137.2 Image Treatment

Images should include:

Rounded top corners.
Responsive scaling.
Optimized loading.
Consistent visual quality.
138. Category Badge

Each article should include one category.

Examples:

Announcement.
Activity.
Public Information.
Environmental Campaign.
Waste Management.
Air Quality.
Climate Action.

Characteristics:

Pill shape.
Small typography.
Medium font weight.
Semantic background color.

Badges should remain visually unobtrusive.

139. Publication Metadata

Each article should display concise metadata.

Recommended information:

Publication date.
Optional publication time.
Optional author.
Optional reading time.

Metadata should appear above the article title.

Typography:

Label Medium.

Neutral color.

140. Article Title

The title is the primary textual element.

Characteristics:

Body Large.
SemiBold.
Maximum two lines.
High contrast.

Titles should communicate the article topic clearly.

Avoid sensational or promotional wording.

141. Article Summary

Summaries provide a brief overview.

Maximum:

Three lines.

Typography:

Body Medium.

Summaries should encourage users to open the full article.

142. Read More Action

Each News Card should include a secondary action.

Examples:

Read More.
View Article.
Learn More.

The action should use a text button or link style.

Primary buttons should not be used for every article.

143. Filtering (Optional)

If enabled, the Home Page may include lightweight category filters.

Examples:

All.
News.
Announcements.
Activities.
Campaigns.

Filters should appear above the News Grid.

They should remain horizontally scrollable on mobile devices.

144. Pagination Strategy

The Home Page should display only a limited number of articles.

Recommended:

One Featured Article.
Three to six News Cards.

Additional articles should be accessed through:

View All News.
News archive.
Pagination on the dedicated News page.

The Home Page should not contain pagination controls.

145. Motion and Interaction

Hover behavior:

Slight card elevation.
Soft shadow enhancement.
Subtle image zoom (maximum 1.05×).
Smooth color transition on links.

Animations should remain subtle and responsive.

146. Accessibility

The Latest News section must support:

Semantic article elements.
Keyboard-accessible cards and links.
Descriptive image alternative text.
Visible focus indicators.
Screen reader compatibility.
High contrast typography.

Publication metadata should remain understandable for assistive technologies.

147. Responsive Behaviour
Desktop
Featured Article in two-column layout.
Three-column News Grid.
Tablet
Featured Article stacked vertically.
Two-column News Grid.
Mobile
Featured Article displayed as a single-column card.
One News Card per row.
Images scale proportionally.
Text wraps naturally without truncation.

Spacing should remain consistent across all devices.

148. Empty State

If no recent news is available:

Display:

News illustration.
Informative message.
Optional button directing users to the News archive.

The layout should remain balanced and visually complete.

149. Consistency Rules

To maintain consistency across the website:

Every News Card must share identical spacing tokens.
Images must maintain consistent aspect ratios.
Category badges must follow the global badge specification.
Typography must use Skyline Modern design tokens.
Metadata formatting must remain consistent.
Motion must follow the global animation system.
Buttons and links must follow the global component guidelines.
Only approved color tokens may be used.

The Latest News & Announcements section should function as the department's official public information hub, presenting timely updates in a clear, accessible, and trustworthy manner while encouraging visitors to explore detailed news content.



Part 11 — Digital Public Services Specification
150. Digital Public Services
150.1 Purpose

The Digital Public Services section provides centralized access to the Department of Environment's online public services. It is designed to help citizens complete administrative processes efficiently without visiting government offices whenever possible.

Unlike the Quick Access Services section, which serves as a gateway to frequently used features, the Digital Public Services section provides a broader overview of all major digital services available through the department.

This section should emphasize accessibility, transparency, efficiency, and citizen convenience while maintaining a professional government appearance.

The overall design should communicate trust, simplicity, and ease of use.

150.2 Objectives

The Digital Public Services section shall achieve the following objectives:

Centralize access to digital services.
Reduce administrative barriers.
Promote online public services.
Increase digital service adoption.
Improve service discoverability.
Encourage self-service interactions.
Support transparent government processes.
Provide clear pathways to service completion.

The section should present services in a structured and easily understandable format.

150.3 Section Placement

The Digital Public Services section should appear immediately after the Latest News & Announcements section.

Page hierarchy:

Latest News

↓

Digital Public Services

↓

Environmental Campaign

This placement allows users to consume institutional information before accessing detailed digital services.

150.4 Background Strategy

Recommended background:

Surface Lowest

White

The clean background reinforces the section's functional purpose.

151. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Service (Optional)

↓

Service Categories

↓

Service Cards

↓

Secondary Actions

Each component should maintain consistent spacing and alignment.

152. Section Header

Structure:

Label

↓

Title

↓

Description

↓

Optional Action
152.1 Label

Examples:

Digital Services

Online Public Services

Citizen Services

Integrated Services

Typography:

Label Medium.
Primary Color.
Medium Weight.
152.2 Title

Example:

Access Our Digital Public Services

Typography:

Headline Medium.

Maximum:

Two lines.

152.3 Description

Example:

Complete environmental services quickly through our integrated online platform.

Maximum:

Three lines.

Typography:

Body Large.

153. Featured Digital Service (Optional)
153.1 Purpose

One service may be emphasized to highlight strategic or frequently accessed services.

Examples:

Environmental Complaint Portal.
Waste Collection Request.
Environmental Permit Application.
Public Information Request.
Licensing Services.

Only one Featured Service should appear.

153.2 Layout

Desktop:

Two-column layout.

Service Information

↓

Illustration

Tablet:

Stacked.

Mobile:

Single-column.

153.3 Composition

The Featured Service should include:

Service Icon

↓

Service Title

↓

Summary

↓

Key Benefits

↓

Primary Button

↓

Supporting Illustration
154. Service Categories
154.1 Purpose

Categories organize multiple public services into understandable groups.

Categories help users quickly locate the service they need.

154.2 Examples

Examples include:

Environmental Licensing.
Public Complaints.
Waste Services.
Public Information.
Environmental Monitoring.
Downloads.
Community Participation.

Categories should remain concise.

154.3 Presentation

Categories may appear as:

Tabs.
Filter Chips.
Horizontal Navigation.
Compact Navigation Buttons.

The chosen presentation should remain consistent.

155. Service Grid
155.1 Desktop Layout

Recommended:

Three columns.

155.2 Tablet Layout

Two columns.

155.3 Mobile Layout

Single-column.

Cards occupy the full available width.

156. Digital Service Card
156.1 Purpose

Each card represents one online public service.

Users should immediately understand:

Service name.
Service purpose.
Service availability.
How to access it.
156.2 Card Structure

Each card contains:

Service Icon

↓

Service Name

↓

Short Description

↓

Status

↓

Estimated Processing Time (Optional)

↓

Primary Action
156.3 Card Appearance

Characteristics:

Surface Lowest.
Medium corner radius.
Soft shadow.
Uniform height.
Spacious padding.

Cards should appear approachable and trustworthy.

157. Service Icon

Icons should communicate service type immediately.

Examples:

File.
Document.
Shield.
Complaint.
Recycling.
Calendar.
Download.
Clipboard.
Building.
Search.

Icons should originate from the approved icon library.

158. Service Name

Examples:

Environmental Complaint Portal

Online Licensing

Public Information Request

Waste Pickup Request

Environmental Permit

Document Download Center

Typography:

Body Large.

SemiBold.

Maximum:

Two lines.

159. Service Description

Provide a concise explanation.

Maximum:

Three lines.

Typography:

Body Medium.

Descriptions should focus on citizen benefits rather than internal administrative procedures.

160. Service Status

Each service may display availability.

Examples:

Available.
Available 24/7.
Under Maintenance.
Coming Soon.
Limited Service.

Status indicators should combine:

Semantic color.
Text label.
Optional status icon.

Color alone should not communicate status.

161. Estimated Processing Time (Optional)

Some services may display an estimated completion time.

Examples:

Within 1 Business Day

3–5 Business Days

Immediate Response

Real-Time

Scheduled Service

This information improves transparency and user expectations.

162. Primary Action

Each Digital Service Card should provide one clear action.

Examples:

Access Service.
Apply Now.
Submit Request.
Start Application.
Report Now.
Download Form.

Buttons should follow the Primary or Secondary Button specification depending on service priority.

163. Downloads and Resources

The section may optionally include quick access to downloadable resources.

Examples:

Application Forms.
Environmental Guidelines.
Regulations.
Annual Reports.
Service Manuals.

Downloads should be presented separately from interactive services to avoid confusion.

164. Complaint Portal Integration

The Environmental Complaint Portal is one of the department's most critical digital services.

If included, it should receive additional visual emphasis through:

Featured positioning.
Primary accent.
Supporting illustration.
Slightly larger card size.

Only this strategically important service may receive enhanced emphasis.

165. Motion and Interaction

Hover behavior:

Slight elevation.
Soft shadow enhancement.
Icon color transition.
Button color transition.

Animations should remain subtle and consistent with the global motion system.

166. Accessibility

The Digital Public Services section must support:

Keyboard navigation.
Screen reader compatibility.
Accessible button labels.
Descriptive icons.
Semantic landmarks.
Visible focus indicators.
High contrast typography.

Interactive elements should satisfy minimum touch target requirements.

167. Responsive Behaviour
Desktop
Featured Service in two-column layout.
Three-column Service Grid.
Tablet
Featured Service stacked vertically.
Two-column Service Grid.
Mobile
Featured Service displayed as a single-column card.
One Service Card per row.
Buttons expand horizontally where appropriate.
Categories become horizontally scrollable when necessary.

All interactions should remain comfortable on touch devices.

168. Empty State

If no digital services are currently available:

Display:

Digital service illustration.
Informative message.
Optional contact button directing users to alternative service channels.

The layout should preserve visual balance and spacing.

169. Consistency Rules

To maintain consistency across the website:

All Service Cards must share identical dimensions where possible.
Icons must originate from the approved icon library.
Typography must follow Skyline Modern tokens.
Buttons must follow the global component specification.
Motion must follow the global animation system.
Status indicators must use approved semantic color tokens.
Download resources must remain visually distinct from interactive services.
No decorative effects should reduce usability.

The Digital Public Services section should serve as the primary digital gateway for citizens, offering clear, efficient, and trustworthy access to the Department of Environment's online services while maintaining consistency with the Skyline Modern Design System.


170. Environmental Campaign & Community Engagement
170.1 Purpose

The Environmental Campaign & Community Engagement section promotes public participation in environmental conservation initiatives organized by the Department of Environment (DLH).

This section serves as a bridge between government programs and community involvement by presenting environmental campaigns, volunteer activities, educational initiatives, awareness programs, and public participation opportunities.

Unlike the Digital Public Services section, which focuses on administrative interactions, this section emphasizes collaboration, environmental responsibility, and civic engagement.

The presentation should encourage participation while maintaining the professional tone expected of a government website.

170.2 Objectives

The Environmental Campaign section shall achieve the following objectives:

Promote environmental awareness.
Encourage community participation.
Increase volunteer engagement.
Highlight environmental campaigns.
Support environmental education.
Strengthen collaboration between citizens and government.
Showcase ongoing sustainability initiatives.
Direct users toward campaign registration pages.

Campaigns should appear inviting without adopting a commercial marketing style.

170.3 Section Placement

The Environmental Campaign section should appear immediately after the Digital Public Services section.

Page hierarchy:

Digital Public Services

↓

Environmental Campaign

↓

Environmental Gallery

This sequence transitions users from administrative services to community engagement opportunities.

170.4 Background Strategy

Recommended background:

Surface Container Low

or

Surface Low

The subtle tonal variation helps distinguish this section from surrounding content while maintaining the Skyline Modern visual language.

171. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Campaign

↓

Campaign Grid

↓

Community Participation Banner (Optional)

↓

Primary Action

Each element should maintain generous spacing to preserve readability and visual rhythm.

172. Section Header

Structure:

Label

↓

Title

↓

Description
172.1 Label

Examples:

Environmental Campaigns
Community Engagement
Public Participation
Green Movement

Typography:

Label Medium
Primary Color
Medium Weight
172.2 Title

Example:

Join Our Environmental Sustainability Initiatives

Typography:

Headline Medium.

Maximum:

Two lines.

172.3 Description

Example:

Participate in environmental programs, educational campaigns, and volunteer activities that contribute to a cleaner and healthier environment.

Maximum:

Three lines.

Typography:

Body Large.

173. Featured Campaign
173.1 Purpose

One campaign may be highlighted to increase visibility for high-priority initiatives.

Examples include:

National Tree Planting Movement.
Clean River Campaign.
Plastic Reduction Initiative.
Green School Program.
Earth Day Celebration.
Community Recycling Drive.

Only one Featured Campaign should be presented.

173.2 Desktop Layout

Recommended:

Two-column layout.

Campaign Information

↓

Campaign Image

or

Campaign Image

↓

Campaign Information

The image and textual information should maintain equal visual balance.

173.3 Tablet Layout

Stacked vertically.

173.4 Mobile Layout

Single-column.

The campaign image appears above the textual information.

174. Featured Campaign Structure

The Featured Campaign should contain:

Campaign Badge

↓

Campaign Title

↓

Campaign Summary

↓

Campaign Highlights

↓

Event Date (Optional)

↓

Primary Button

↓

Campaign Image
175. Campaign Grid
175.1 Purpose

The Campaign Grid presents additional campaigns and participation opportunities.

Each campaign should receive equal visual importance.

175.2 Desktop Layout

Recommended:

Three-column grid.

175.3 Tablet Layout

Two-column grid.

175.4 Mobile Layout

Single-column.

Cards should occupy the full available width.

176. Campaign Card
176.1 Purpose

Each Campaign Card represents one environmental initiative or community event.

Users should immediately understand:

Campaign objective.
Participation opportunity.
Campaign schedule.
Registration availability.
176.2 Card Structure

Each Campaign Card contains:

Campaign Image

↓

Category Badge

↓

Campaign Title

↓

Summary

↓

Schedule

↓

Participation Status

↓

Action Button
176.3 Card Appearance

Characteristics:

Surface Lowest background.
Large corner radius.
Soft elevation.
Equal dimensions.
Spacious internal padding.

Cards should remain lightweight and easy to scan.

177. Campaign Categories

Campaigns may include categories such as:

Tree Planting.
Recycling.
Waste Management.
Environmental Education.
Community Service.
Climate Action.
Biodiversity.
Public Awareness.

Categories should appear as compact badges.

178. Campaign Schedule

Campaign timing may be displayed.

Examples:

12 August 2026

↓

08:00 – 12:00

↓

Tulungagung City Park

Schedule information should remain concise.

179. Participation Status

Campaigns may display participation availability.

Examples:

Registration Open.
Limited Seats.
Registration Closed.
Ongoing.
Completed.

Status indicators should combine text with semantic color tokens.

Users should never rely solely on color to understand campaign availability.

180. Event Countdown (Optional)

High-priority campaigns may include a countdown component.

Purpose:

Increase awareness of upcoming events.

Structure:

Days

Hours

Minutes

The countdown should update dynamically and stop once the event begins.

Only one campaign should display a countdown at a time.

181. Community Participation Banner

An optional banner may encourage broader citizen engagement.

Examples:

Become an Environmental Volunteer.
Join Community Clean-Up Activities.
Participate in Green Village Programs.
Register for Environmental Education Workshops.

The banner should appear below the Campaign Grid.

181.1 Banner Layout

Structure:

Illustration

↓

Headline

↓

Supporting Description

↓

Primary Action

Desktop:

Two-column layout.

Mobile:

Single-column layout.

182. Primary Actions

Examples include:

Register Now.
Join Campaign.
Learn More.
Become a Volunteer.
View Schedule.

Buttons should follow the Primary Button specification.

Only one primary action should appear per campaign.

183. Motion and Interaction

Hover behavior:

Slight elevation.
Shadow enhancement.
Subtle image zoom (maximum 1.05×).
Button transition.
Badge color transition where appropriate.

Animations should remain subtle and performance-friendly.

184. Accessibility

The Environmental Campaign section must support:

Semantic article or section elements.
Keyboard navigation.
Screen reader compatibility.
Descriptive image alternative text.
Accessible button labels.
Visible focus indicators.
High contrast typography.

Countdown components should expose meaningful textual alternatives for assistive technologies.

185. Responsive Behaviour
Desktop
Featured Campaign in two-column layout.
Three-column Campaign Grid.
Community Banner in two-column layout.
Tablet
Featured Campaign stacked vertically.
Two-column Campaign Grid.
Banner adapts proportionally.
Mobile
Featured Campaign displayed as a single-column card.
One Campaign Card per row.
Banner becomes vertically stacked.
Countdown resizes appropriately without reducing readability.

Spacing should remain consistent across all breakpoints.

186. Empty State

If no active campaigns are available:

Display:

Environmental illustration.
Informative message.
Optional button linking to the Campaign Archive or Community Programs page.

The section should retain its overall structure and spacing.

187. Consistency Rules

To maintain consistency across the website:

Campaign Cards must share identical dimensions where possible.
Images must maintain a consistent aspect ratio.
Category badges must follow the global badge specification.
Buttons must follow the Skyline Modern component guidelines.
Motion must follow the global animation system.
Typography must use approved design tokens.
Status indicators must use semantic color tokens.
Decorative effects should never reduce readability or usability.

The Environmental Campaign & Community Engagement section should inspire public participation through a structured, informative, and visually engaging presentation while maintaining the professionalism, accessibility, and consistency expected of the Department of Environment's official digital platform.



188. Environmental Gallery & Multimedia
188.1 Purpose

The Environmental Gallery & Multimedia section showcases visual documentation of the Department of Environment's activities, environmental programs, public participation, conservation efforts, and institutional achievements.

This section strengthens public trust by presenting authentic documentation of departmental activities while creating a more engaging browsing experience.

Unlike the Latest News section, which emphasizes textual information, the Gallery focuses on visual storytelling through photographs, videos, and multimedia assets.

The presentation should remain professional, organized, and optimized for performance across all devices.

188.2 Objectives

The Environmental Gallery section shall achieve the following objectives:

Showcase departmental activities.
Document environmental initiatives.
Highlight community participation.
Increase institutional transparency.
Improve visual engagement.
Promote environmental awareness.
Encourage users to explore additional media.

Only high-quality and relevant media should appear on the Home Page.

The complete multimedia archive should remain accessible through the dedicated Gallery page.

188.3 Section Placement

The Environmental Gallery section should appear immediately after the Environmental Campaign section.

Page hierarchy:

Environmental Campaign

↓

Environmental Gallery

↓

Partners & Collaboration
188.4 Background Strategy

Recommended background:

Surface Lowest

White

The neutral background allows multimedia content to become the primary visual focus.

189. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Media (Optional)

↓

Gallery Grid

↓

View All Gallery Button

Each component should follow the global spacing system.

190. Section Header

Structure:

Label

↓

Title

↓

Description

↓

Optional Action
190.1 Label

Examples:

Environmental Gallery
Multimedia
Photo Gallery
Activity Documentation

Typography:

Label Medium
Primary Color
Medium Weight
190.2 Title

Example:

Capturing Environmental Action Across Our Community

Typography:

Headline Medium.

Maximum:

Two lines.

190.3 Description

Example:

Explore photographs and multimedia documentation highlighting environmental initiatives, public participation, and departmental activities.

Maximum:

Three lines.

Typography:

Body Large.

191. Featured Media (Optional)
191.1 Purpose

One image or video may be highlighted to emphasize a significant environmental event or achievement.

Examples include:

National Environmental Award Ceremony.
Large-scale Tree Planting Event.
River Restoration Program.
Environmental Education Festival.
Community Clean-Up Campaign.

Only one Featured Media component should be displayed.

191.2 Layout

Desktop:

Two-column layout.

Featured Media

↓

Media Information

Tablet:

Stacked vertically.

Mobile:

Single-column.

Media displayed above the textual information.

191.3 Composition

The Featured Media component should include:

Media Preview

↓

Media Category

↓

Title

↓

Description

↓

View Media Button
192. Gallery Grid
192.1 Purpose

The Gallery Grid presents a collection of recent photographs and videos.

Each media item should receive equal visual emphasis.

192.2 Desktop Layout

Recommended:

Four-column grid.

Alternative:

Responsive masonry layout when image dimensions vary.

192.3 Tablet Layout

Recommended:

Two-column grid.

192.4 Mobile Layout

Recommended:

Two-column grid.

If image captions become difficult to read, a single-column layout may be used.

193. Gallery Card
193.1 Purpose

Each Gallery Card represents one photograph or multimedia item.

Users should immediately understand:

Media subject.
Activity type.
Date (optional).
Availability of additional details.
193.2 Card Structure

Each Gallery Card contains:

Media Thumbnail

↓

Category Badge

↓

Caption

↓

Optional Date

↓

View Button
193.3 Card Appearance

Characteristics:

Surface Lowest background.
Medium corner radius.
Minimal shadow.
Equal spacing.
Responsive image.

Cards should maintain a clean appearance without unnecessary decorative elements.

194. Image Specification
194.1 Quality

Images must be:

High resolution.
Properly compressed.
Color corrected.
Optimized for responsive loading.
Authentic and representative of departmental activities.

Low-quality or heavily pixelated images are unacceptable.

194.2 Aspect Ratio

Recommended:

4:3
16:9
1:1 (for square layouts)

Aspect ratios should remain consistent within each gallery row.

194.3 Image Treatment

Images should include:

Rounded corners.
Responsive scaling.
Object-fit cropping.
Smooth loading transition.

Image distortion is prohibited.

195. Video Presentation

The Gallery may include videos.

Video thumbnails should display:

Play icon.
Duration.
Title.

Videos should not autoplay.

Users must explicitly initiate playback.

196. Media Categories

Examples:

Activities.
Campaigns.
Education.
Tree Planting.
Waste Management.
Meetings.
Awards.
Community Events.

Categories should appear as compact badges.

197. Lightbox Behaviour

Selecting a media item should open a lightbox or modal viewer.

The lightbox should support:

Large image display.
Caption.
Navigation controls.
Keyboard navigation.
Close button.
Swipe gestures on touch devices.

The background should darken to emphasize the selected media.

197.1 Lightbox Controls

Recommended controls:

Previous.
Next.
Close.
Download (optional).
Fullscreen (optional).

Controls should remain accessible via keyboard.

198. Lazy Loading

Gallery media should implement lazy loading.

Only media visible within or near the viewport should be loaded initially.

This approach improves performance and reduces unnecessary network usage.

199. Motion and Interaction

Hover behavior:

Slight image zoom (maximum 1.05×).
Soft shadow enhancement.
Overlay fade-in.
Caption reveal.
Smooth button transition.

Animations should remain subtle and consistent.

200. Accessibility

The Gallery section must support:

Descriptive alternative text for images.
Keyboard-accessible media selection.
Screen reader compatibility.
Accessible modal controls.
High contrast captions.
Visible focus indicators.

Videos should provide captions or transcripts where appropriate.

201. Responsive Behaviour
Desktop
Four-column grid.
Featured Media in two-column layout.
Tablet
Two-column gallery.
Featured Media stacked vertically.
Mobile
Two-column gallery or single-column where necessary.
Touch-friendly media cards.
Lightbox optimized for touch gestures.
Responsive captions and controls.

The gallery should remain visually balanced regardless of screen size.

202. Empty State

If no media is available:

Display:

Gallery illustration.
Informative message.
Optional button linking to the Multimedia Archive.

The section should preserve spacing and structural consistency.

203. Consistency Rules

To maintain consistency across the website:

Gallery Cards must follow the global spacing system.
Images must use approved aspect ratios.
Badges must follow the global badge specification.
Motion must follow the Skyline Modern animation system.
Typography must use approved design tokens.
Only approved semantic colors may be used.
Lightbox interactions must remain consistent across all media types.
Decorative effects should never compromise performance or accessibility.

The Environmental Gallery & Multimedia section should provide an engaging yet professional visual record of the Department of Environment's activities while maintaining excellent performance, accessibility, and consistency with the Skyline Modern Design System.


204. Partners, Collaboration & Institutional Network
204.1 Purpose

The Partners, Collaboration & Institutional Network section presents the organizations that collaborate with the Department of Environment (DLH) in achieving environmental sustainability, public service improvement, scientific research, environmental education, conservation, and community development.

This section demonstrates that environmental management is achieved through cooperation between government institutions, educational institutions, non-governmental organizations, private sector partners, community organizations, and environmental volunteers.

Unlike the Environmental Gallery section, which focuses on documenting activities, this section emphasizes institutional credibility through strategic partnerships.

The design should communicate professionalism, transparency, and long-term collaboration.

204.2 Objectives

The Partners & Collaboration section shall achieve the following objectives:

Demonstrate institutional cooperation.
Increase public trust.
Showcase strategic partnerships.
Highlight collaborative environmental initiatives.
Introduce participating organizations.
Encourage future collaboration.
Reinforce institutional credibility.

Only active and officially recognized partners should be displayed.

204.3 Section Placement

The Partners & Collaboration section should appear immediately after the Environmental Gallery section.

Page hierarchy:

Environmental Gallery

↓

Partners & Collaboration

↓

Testimonials
204.4 Background Strategy

Recommended background:

Surface Container Lowest

or

Surface Low

The slightly differentiated background subtly separates this institutional section from visually intensive gallery content.

205. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Collaboration (Optional)

↓

Partner Logo Grid

↓

Partner Categories (Optional)

↓

View All Partners Button

Each component should follow the global spacing and layout system.

206. Section Header

Structure:

Label

↓

Title

↓

Description
206.1 Label

Examples:

Our Partners
Institutional Collaboration
Strategic Partnerships
Environmental Network

Typography:

Label Medium
Primary Color
Medium Weight
206.2 Title

Example:

Working Together for a Sustainable Environment

Typography:

Headline Medium.

Maximum:

Two lines.

206.3 Description

Example:

Our environmental initiatives are strengthened through collaboration with government institutions, educational organizations, community groups, and strategic partners.

Maximum:

Three lines.

Typography:

Body Large.

207. Featured Collaboration (Optional)
207.1 Purpose

A major institutional collaboration may be highlighted.

Examples:

Provincial Government.
National Ministry.
Environmental Research Institute.
International Environmental Organization.
University Partnership.
Smart City Collaboration.

Only one Featured Collaboration should appear.

207.2 Desktop Layout

Recommended:

Two-column layout.

Partner Information

↓

Partner Image

Tablet:

Stacked vertically.

Mobile:

Single-column.

207.3 Composition

The Featured Collaboration contains:

Partner Logo

↓

Organization Name

↓

Collaboration Summary

↓

Key Contributions

↓

Learn More Button
208. Partner Categories

Partners may be grouped into categories.

Examples:

Government Agencies.
Educational Institutions.
Universities.
Community Organizations.
Environmental NGOs.
Private Sector.
International Organizations.
Media Partners.

Categories should improve discoverability without increasing visual complexity.

209. Partner Logo Grid
209.1 Purpose

The Partner Logo Grid provides a visual overview of institutional collaborations.

Logos should be treated equally regardless of organizational size.

No partner should receive disproportionate emphasis unless intentionally featured.

209.2 Desktop Layout

Recommended:

Five or six logos per row.

Uniform spacing.

209.3 Tablet Layout

Three to four logos per row.

209.4 Mobile Layout

Two logos per row.

The grid should remain visually balanced.

210. Partner Logo Card
210.1 Structure

Each Partner Logo Card contains:

Organization Logo

↓

Organization Name

↓

Optional Category

↓

Optional Link
210.2 Appearance

Characteristics:

Surface Lowest.
Medium corner radius.
Minimal shadow.
Consistent padding.
Equal dimensions.

Cards should prioritize logo visibility.

211. Logo Guidelines

Partner logos should:

Maintain original proportions.
Never be stretched.
Never be cropped.
Preserve official branding.
Use transparent backgrounds whenever possible.

Monochrome logo versions may be used when consistency requires.

211.1 Logo Size

Logos should occupy approximately:

60–70% of the available card width.

Whitespace around logos should remain consistent.

212. Collaboration Summary

Where appropriate, a brief explanation of the collaboration may be displayed.

Examples:

Environmental education partnership.
Waste management collaboration.
Research and innovation.
Community empowerment.
Climate resilience program.

Descriptions should remain concise.

Maximum:

Two lines.

213. Partner Links

Partners may optionally link to:

Official websites.
Partnership details.
Collaboration reports.

Links should open in a new browser tab when directing users to external websites.

External links should be clearly indicated.

214. Logo Carousel (Optional)

If the number of partners is large, a responsive carousel may replace the static grid.

Carousel characteristics:

Automatic scrolling.
Manual navigation.
Pause on hover.
Touch swipe support.
Keyboard navigation.

Scrolling speed should remain slow and comfortable.

215. Motion and Interaction

Hover behavior:

Slight elevation.
Shadow enhancement.
Logo scale increase (maximum 1.03×).
Optional border color transition.

Animations should remain subtle.

216. Accessibility

The Partners section must support:

Alternative text for every logo.
Keyboard navigation.
Screen reader compatibility.
Descriptive external links.
Visible focus indicators.
High contrast labels.

Logos alone should never communicate critical information.

217. Responsive Behaviour
Desktop
Five or six logos per row.
Featured Collaboration displayed in two-column layout.
Tablet
Three or four logos per row.
Featured Collaboration stacked vertically.
Mobile
Two logos per row.
Cards resized proportionally.
Touch-friendly spacing maintained.

Logo clarity must remain consistent across all screen sizes.

218. Empty State

If no institutional partners are available:

Display:

Collaboration illustration.
Informative message.
Optional contact button encouraging partnership inquiries.

The layout should preserve structural consistency.

219. Consistency Rules

To maintain consistency across the website:

All logo cards must maintain equal dimensions.
Logo proportions must never be modified.
Typography must use Skyline Modern design tokens.
Motion must follow the approved animation system.
Colors must use approved semantic tokens.
Partner categories must follow the global badge specification.
External links must follow accessibility guidelines.
Decorative effects should never reduce logo legibility.

The Partners, Collaboration & Institutional Network section should communicate the Department of Environment's collaborative ecosystem in a structured, trustworthy, and professional manner while reinforcing institutional credibility and maintaining full consistency with the Skyline Modern Design System.


220. Citizen Testimonials & Success Stories
220.1 Purpose

The Citizen Testimonials & Success Stories section presents authentic feedback, community experiences, and documented success stories related to the Department of Environment's programs, public services, and environmental initiatives.

The objective of this section is to strengthen institutional credibility by demonstrating real community impact through verified experiences rather than promotional statements.

Unlike the Partners & Collaboration section, which highlights institutional cooperation, this section focuses on the experiences of citizens, volunteers, community leaders, schools, environmental organizations, and public service users.

The presentation should remain professional, trustworthy, and evidence-based while avoiding excessive marketing language.

220.2 Objectives

The Testimonials section shall achieve the following objectives:

Increase institutional credibility.
Demonstrate measurable public impact.
Showcase community participation.
Highlight successful environmental initiatives.
Build public confidence.
Encourage participation in future programs.
Support transparency through authentic experiences.

Testimonials should always represent genuine experiences.

Fabricated or anonymous testimonials should not be displayed.

220.3 Section Placement

The Citizen Testimonials section should appear immediately after the Partners & Collaboration section.

Page hierarchy:

Partners & Collaboration

↓

Citizen Testimonials

↓

Interactive Environmental Map

This placement allows visitors to understand institutional partnerships before viewing public experiences.

220.4 Background Strategy

Recommended background:

Surface Lowest

or

Surface Container Lowest

The section should appear calm, clean, and readable.

Avoid visually distracting backgrounds.

221. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Success Story (Optional)

↓

Testimonials Carousel

↓

View More Stories Button

Every component should follow the Skyline Modern spacing system.

222. Section Header

Structure:

Label

↓

Title

↓

Description
222.1 Label

Examples:

Citizen Voices
Community Stories
Public Testimonials
Environmental Success Stories

Typography:

Label Medium
Primary Color
Medium Weight
222.2 Title

Example:

Communities Making a Difference Together

Typography:

Headline Medium.

Maximum:

Two lines.

222.3 Description

Example:

Read authentic experiences from citizens, schools, organizations, and volunteers participating in environmental programs across the region.

Maximum:

Three lines.

Typography:

Body Large.

223. Featured Success Story
223.1 Purpose

One community success story may receive visual emphasis.

Examples:

Green Village Transformation.
Community Waste Bank Success.
School Environmental Program.
River Restoration Achievement.
Community Recycling Initiative.

Only one Featured Success Story should appear.

223.2 Desktop Layout

Recommended:

Two-column layout.

Story Image

↓

Story Information

Tablet:

Stacked vertically.

Mobile:

Single-column.

223.3 Composition

The Featured Story should contain:

Story Image

↓

Category

↓

Title

↓

Story Summary

↓

Impact Highlights

↓

Read Story Button
224. Testimonials Carousel
224.1 Purpose

The Testimonials Carousel presents multiple verified citizen testimonials in a compact and engaging format.

Only one testimonial should receive primary focus at a time.

224.2 Desktop Layout

Recommended:

Display three testimonial cards simultaneously.

The center card may receive slight visual emphasis.

224.3 Tablet Layout

Display two testimonial cards.

224.4 Mobile Layout

Display one testimonial card.

Swipe navigation should be supported.

225. Testimonial Card
225.1 Purpose

Each Testimonial Card represents one verified public experience.

Users should immediately understand:

Who provided the testimonial.
Their role.
Their experience.
Related program.
225.2 Card Structure

Each Testimonial Card contains:

Profile Photo

↓

Person Name

↓

Role or Organization

↓

Program Badge

↓

Testimonial Quote

↓

Publication Date (Optional)
225.3 Card Appearance

Characteristics:

Surface Lowest background.
Medium corner radius.
Soft elevation.
Comfortable padding.
Equal dimensions.

Cards should prioritize readability.

226. Profile Photo

Profile images should:

Be circular.
High resolution.
Properly cropped.
Professionally presented.

If no profile image is available, display a generated initials avatar following the Skyline Modern avatar specification.

227. Person Information

Displayed information may include:

Full Name.
Community Organization.
School.
Institution.
Volunteer Group.

Avoid displaying excessive personal information.

Typography:

Body Large.

SemiBold.

228. Program Badge

Examples:

Recycling.
Environmental Education.
Waste Bank.
Tree Planting.
Climate Action.
Public Service.
Green School.

Badges should follow the global badge specification.

229. Testimonial Content

The testimonial should remain concise.

Recommended length:

50–120 words.

Typography:

Body Medium.

The content should focus on genuine experiences rather than promotional language.

230. Rating Display (Optional)

If ratings are collected through official surveys, a rating indicator may be displayed.

Examples:

Five-star rating.
Satisfaction score.
Service evaluation percentage.

Ratings should only be displayed when supported by verified institutional data.

231. Story Highlights

The Featured Story may include measurable outcomes.

Examples:

Waste reduced.
Trees planted.
Volunteers involved.
Households served.
Community participation rate.

Metrics should remain concise.

232. Carousel Behaviour

The carousel should support:

Manual navigation.
Keyboard navigation.
Swipe gestures.
Automatic progression (optional).
Pause on hover.
Visible navigation indicators.

Automatic transitions should occur slowly and never interrupt user interaction.

233. Motion and Interaction

Hover behavior:

Slight elevation.
Shadow enhancement.
Quote icon transition.
Button transition.

Animations should remain subtle and professional.

234. Accessibility

The Testimonials section must support:

Keyboard navigation.
Screen reader compatibility.
Accessible carousel controls.
Alternative text for profile photos.
Visible focus indicators.
High contrast typography.

Carousel navigation should remain usable without a pointing device.

235. Responsive Behaviour
Desktop
Three testimonial cards.
Featured Story displayed in two-column layout.
Tablet
Two testimonial cards.
Featured Story stacked vertically.
Mobile
One testimonial card.
Swipe navigation.
Full-width cards.
Comfortable touch controls.

Spacing should remain consistent across all viewport sizes.

236. Empty State

If no testimonials are currently available:

Display:

Community illustration.
Informative message.
Optional button directing users to environmental programs or community participation pages.

The section should maintain structural consistency.

237. Testimonial Verification Guidelines

To maintain public trust:

Testimonials should originate from verified participants.
Content should not be edited in a way that changes its meaning.
Anonymous testimonials should be avoided unless required for privacy.
Images should be used only with appropriate permission.
Publication dates should reflect actual submission or publication dates.
Moderation should remove offensive, discriminatory, or misleading content while preserving authentic feedback.
238. Consistency Rules

To maintain consistency across the website:

Testimonial Cards must maintain equal dimensions.
Avatar styles must follow the global avatar component specification.
Typography must use Skyline Modern design tokens.
Motion must follow the approved animation system.
Badges must follow the global badge specification.
Only approved semantic color tokens may be used.
Carousel behavior must remain consistent with other sliders used throughout the website.
Decorative effects should never reduce readability.

The Citizen Testimonials & Success Stories section should present authentic public experiences in a professional, accessible, and trustworthy manner, strengthening community confidence while encouraging broader participation in environmental initiatives.


239. Interactive Environmental Map & Geographic Information
239.1 Purpose

The Interactive Environmental Map & Geographic Information section provides citizens with a visual representation of environmental information through an interactive geographic interface.

This section enables visitors to explore environmental facilities, public service locations, environmental monitoring stations, waste management infrastructure, conservation areas, and other location-based environmental information.

Unlike the Citizen Testimonials section, which emphasizes public experiences, the Interactive Environmental Map focuses on spatial information and environmental data visualization.

The map should be informative, responsive, intuitive, and optimized for both desktop and mobile users while maintaining consistency with the Skyline Modern Design System.

239.2 Objectives

The Interactive Environmental Map shall achieve the following objectives:

Visualize environmental information geographically.
Improve public access to environmental data.
Support environmental transparency.
Assist citizens in locating environmental services.
Display real-time or periodically updated environmental information.
Increase public awareness of environmental infrastructure.
Encourage exploration of location-based services.

Only relevant and officially verified geographic information should be displayed.

239.3 Section Placement

The Interactive Environmental Map should appear immediately after the Citizen Testimonials section.

Page hierarchy:

Citizen Testimonials

↓

Interactive Environmental Map

↓

Environmental Resources
239.4 Background Strategy

Recommended background:

Surface Lowest

The map itself becomes the primary visual element.

Additional decorative backgrounds should be avoided.

240. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Interactive Map

↓

Filter Panel

↓

Location Information Panel

↓

Primary Actions

The layout should remain clean and spacious.

241. Section Header

Structure:

Label

↓

Title

↓

Description
241.1 Label

Examples:

Environmental Map
Geographic Information
Environmental Monitoring
Interactive GIS

Typography:

Label Medium
Primary Color
Medium Weight
241.2 Title

Example:

Explore Environmental Information Across the Region

Typography:

Headline Medium.

Maximum:

Two lines.

241.3 Description

Example:

Locate environmental facilities, monitoring stations, conservation areas, and public services through our interactive geographic information system.

Maximum:

Three lines.

Typography:

Body Large.

242. Interactive Map
242.1 Purpose

The map serves as the primary interactive component of the section.

Users should be able to:

Navigate.
Zoom.
Select locations.
Explore environmental information.
View facility details.

The map should prioritize usability over decorative visual effects.

242.2 Desktop Layout

Recommended:

Large interactive map occupying approximately:

70–75% of the available width.

Supporting information panel:

25–30%.

242.3 Tablet Layout

The map occupies the full width.

Information panels appear below the map.

242.4 Mobile Layout

The map occupies the full width.

Filter controls collapse into expandable components.

Location details appear within bottom sheets or stacked cards.

243. Supported Geographic Layers

The map may display multiple environmental layers.

Examples:

Waste Collection Points.
Recycling Centers.
Temporary Waste Storage Facilities.
Final Disposal Sites.
Air Quality Monitoring Stations.
Water Quality Monitoring Stations.
Environmental Offices.
Public Complaint Locations.
Protected Forest Areas.
Green Open Spaces.
Urban Parks.
River Monitoring Points.
Environmental Education Centers.

Layers should be independently selectable.

244. Layer Controls

Users should be able to:

Enable layers.
Disable layers.
Reset filters.
Display multiple layers simultaneously.

Layer controls should remain simple and understandable.

245. Map Marker Design

Each environmental facility should use a unique marker.

Examples:

Recycling icon.
Tree icon.
Water icon.
Air Quality icon.
Government Building icon.
Complaint icon.
Environmental Laboratory icon.

Markers should remain visually distinguishable without becoming visually crowded.

245.1 Marker States

Markers may support:

Default.
Hover.
Selected.
Clustered.
Disabled.

Transitions should remain smooth.

246. Marker Information Panel

Selecting a marker should display:

Facility Name

↓

Category

↓

Address

↓

Operating Hours

↓

Status

↓

Description

↓

Navigation Button

Information should remain concise.

247. Search Functionality

The map should include location search.

Users may search by:

Facility name.
District.
Village.
Environmental service.
Monitoring station.

Search results should automatically reposition the map.

248. Filter Panel

The Filter Panel may include:

Facility Type.
Operational Status.
Environmental Category.
District.
Service Type.

Filters should update results dynamically.

249. Map Legend

A legend should explain:

Marker icons.
Colors.
Environmental categories.
Monitoring symbols.

The legend should remain collapsible on mobile devices.

250. Clustering Behaviour

When multiple markers appear close together:

Cluster markers automatically.
Display cluster count.
Expand clusters upon zoom.

Marker clustering improves readability and performance.

251. Environmental Information Card

Selecting a location may reveal additional environmental information.

Examples:

Air Quality Index.
Water Quality.
Waste Collection Schedule.
Facility Capacity.
Environmental Program.
Complaint Statistics.

Cards should follow the global card specification.

252. Navigation Integration

Where applicable, facilities may provide:

Open in Maps.
Get Directions.
View Route.

External navigation services should open in a new browser tab or the user's preferred mapping application.

253. Motion and Interaction

Interactive behaviors should include:

Smooth map zoom.
Marker transitions.
Panel slide animations.
Filter transitions.
Soft hover feedback.

Animations should prioritize usability and performance.

254. Accessibility

The Interactive Map section must support:

Keyboard navigation.
Screen reader compatibility.
Accessible map controls.
Descriptive marker labels.
Visible focus indicators.
High contrast controls.

Alternative textual information should be available for users unable to interact with the map.

255. Performance Requirements

The map should:

Lazy load when approaching the viewport.
Load visible markers progressively.
Use marker clustering.
Cache geographic assets.
Optimize tile loading.

Large datasets should never reduce page responsiveness.

256. Responsive Behaviour
Desktop
Split layout.
Large interactive map.
Persistent information panel.
Tablet
Full-width map.
Filter controls above the map.
Information panel below.
Mobile
Full-width responsive map.
Expandable filter drawer.
Bottom-sheet information panel.
Touch-optimized controls.
Comfortable zoom gestures.

The interaction model should remain intuitive across all devices.

257. Empty State

If no geographic information is available:

Display:

Map illustration.
Informative message.
Optional button directing users to Environmental Services.

The section should preserve layout consistency.

258. Consistency Rules

To maintain consistency across the website:

Map controls must follow Skyline Modern component guidelines.
Icons must originate from the approved icon library.
Information cards must follow the global card specification.
Typography must use Skyline Modern design tokens.
Motion must follow the approved animation system.
Colors must use approved semantic tokens.
Filter controls must remain consistent with filtering components used elsewhere on the website.
Decorative effects should never reduce map usability.

The Interactive Environmental Map & Geographic Information section should provide an intuitive, informative, and high-performance geographic interface that enables citizens to explore environmental facilities, monitoring information, and public services while maintaining full consistency with the Skyline Modern Design System.


259. Environmental Resources, Downloads & Knowledge Center
259.1 Purpose

The Environmental Resources, Downloads & Knowledge Center section provides centralized access to official environmental publications, regulations, technical guidelines, educational materials, annual reports, research publications, statistical reports, downloadable forms, and public information documents published by the Department of Environment (DLH).

This section functions as the department's digital knowledge repository, allowing citizens, researchers, educational institutions, government agencies, media organizations, businesses, and environmental communities to obtain reliable environmental information directly from official sources.

Unlike the Interactive Environmental Map section, which emphasizes geographic visualization, the Knowledge Center focuses on structured document management and information accessibility.

The presentation should prioritize discoverability, readability, document organization, and ease of access while maintaining a professional government appearance.

259.2 Objectives

The Knowledge Center shall achieve the following objectives:

Centralize environmental publications.
Improve public access to official documents.
Support government transparency.
Promote environmental education.
Simplify document discovery.
Encourage information sharing.
Provide authoritative environmental references.
Improve digital public services.

Only official and verified documents should be published.

259.3 Section Placement

The Knowledge Center should appear immediately after the Interactive Environmental Map.

Page hierarchy:

Interactive Environmental Map

↓

Environmental Resources

↓

Frequently Asked Questions

This placement transitions visitors from interactive geographic information toward educational and informational resources.

259.4 Background Strategy

Recommended background:

Surface Container Lowest

or

Surface Low

The subtle tonal background visually separates document-heavy content from surrounding sections.

260. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Featured Publication (Optional)

↓

Category Navigation

↓

Search Bar

↓

Resource Grid

↓

View All Resources Button

Each component should follow the Skyline Modern spacing and alignment system.

261. Section Header

Structure:

Label

↓

Title

↓

Description

↓

Optional Action
261.1 Label

Examples:

Environmental Resources
Knowledge Center
Publications
Downloads

Typography:

Label Medium
Primary Color
Medium Weight
261.2 Title

Example:

Access Official Environmental Publications and Resources

Typography:

Headline Medium.

Maximum:

Two lines.

261.3 Description

Example:

Browse official regulations, educational materials, annual reports, technical guidelines, and environmental publications published by the Department of Environment.

Maximum:

Three lines.

Typography:

Body Large.

262. Featured Publication (Optional)
262.1 Purpose

One important publication may receive visual emphasis.

Examples:

Annual Environmental Report.
Regional Environmental Status Report.
Strategic Environmental Plan.
Waste Management Guidelines.
Climate Adaptation Strategy.

Only one Featured Publication should appear.

262.2 Desktop Layout

Recommended:

Two-column layout.

Publication Cover

↓

Publication Information
Tablet Layout

Stacked vertically.

Mobile Layout

Single-column.

Publication cover displayed above the information.

262.3 Composition

The Featured Publication contains:

Publication Cover

↓

Category

↓

Publication Title

↓

Summary

↓

Publication Metadata

↓

Download Button

↓

Preview Button
263. Category Navigation

Documents should be organized into categories.

Examples:

Regulations.
Annual Reports.
Environmental Statistics.
Technical Guidelines.
Public Information.
Educational Materials.
Research.
Forms.
Policy Documents.

Categories may appear as:

Filter Chips.
Horizontal Tabs.
Dropdown Filter.
Segmented Buttons.

The navigation should remain responsive.

264. Search Functionality

Users should be able to search resources using:

Document title.
Keywords.
Category.
Publication year.
Document type.

Search results should update dynamically.

Search should remain fast even with large document collections.

265. Resource Grid
Desktop

Recommended:

Three-column grid.

Tablet

Two-column grid.

Mobile

Single-column.

Cards should occupy the full available width.

266. Resource Card
266.1 Purpose

Each Resource Card represents one downloadable publication.

Users should immediately understand:

Document title.
Category.
Publication year.
File format.
Download availability.
266.2 Card Structure

Each Resource Card contains:

Document Icon or Cover

↓

Category Badge

↓

Title

↓

Summary

↓

Metadata

↓

Actions
266.3 Appearance

Characteristics:

Surface Lowest background.
Medium corner radius.
Soft shadow.
Uniform height.
Comfortable internal spacing.

Cards should emphasize clarity over decoration.

267. Document Cover

Where available, publications should display their official cover.

If no cover exists, display an appropriate document icon based on file type.

Examples:

PDF.
Word.
Spreadsheet.
Presentation.

Icons should follow the approved icon library.

268. Document Metadata

Metadata may include:

Publication Date.
Publication Year.
File Size.
File Format.
Number of Pages.
Language.
Document Version.

Metadata should remain concise.

Typography:

Label Medium.

Neutral color.

269. Document Actions

Each document may provide:

Preview.
Download.
View Details.
Share.

Primary action should prioritize document access.

External downloads should clearly indicate file format.

270. Preview Behaviour

Supported documents may provide inline preview.

Preview modal may include:

Cover.
Title.
Metadata.
First pages.
Download action.

The preview should not replace the full download.

271. Version Management

Documents may display version information.

Examples:

Version 2.0

Updated March 2026

Latest Revision

Older versions should remain archived when required by government policy.

272. File Types

Supported examples:

PDF.
DOCX.
XLSX.
PPTX.
ZIP.

File type indicators should appear consistently throughout the website.

273. Motion and Interaction

Hover behavior:

Slight elevation.
Shadow enhancement.
Cover scale (maximum 1.03×).
Button transition.
Badge transition.

Animations should remain subtle.

274. Accessibility

The Knowledge Center must support:

Keyboard navigation.
Screen reader compatibility.
Accessible download buttons.
Descriptive file names.
Alternative text for publication covers.
Visible focus indicators.
High contrast typography.

Documents should provide accessible PDF versions whenever possible.

275. Performance Requirements

The Knowledge Center should:

Lazy load publication covers.
Cache frequently accessed files.
Optimize document thumbnails.
Compress preview assets.
Load metadata before preview images.

Large publication collections should remain responsive.

276. Responsive Behaviour
Desktop
Featured Publication displayed in two-column layout.
Three-column Resource Grid.
Tablet
Featured Publication stacked vertically.
Two-column Resource Grid.
Mobile
Featured Publication becomes a single-column card.
One Resource Card per row.
Search remains full width.
Categories become horizontally scrollable where appropriate.

Spacing should remain consistent across all breakpoints.

277. Empty State

If no publications are currently available:

Display:

Knowledge Center illustration.
Informative message.
Optional button directing users to the Contact or Public Information page.

The section should maintain structural consistency.

278. Consistency Rules

To maintain consistency across the website:

Resource Cards must maintain equal dimensions whenever possible.
Document icons must originate from the approved icon library.
Typography must use Skyline Modern design tokens.
Motion must follow the approved animation system.
Metadata formatting must remain consistent.
Category badges must follow the global badge specification.
Only approved semantic color tokens may be used.
Decorative effects should never reduce document readability or accessibility.

The Environmental Resources, Downloads & Knowledge Center section should serve as the department's primary digital publication hub, providing structured, accessible, and authoritative environmental information while maintaining full consistency with the Skyline Modern Design System.


279. Frequently Asked Questions (FAQ) & Help Center
279.1 Purpose

The Frequently Asked Questions (FAQ) & Help Center section provides citizens with immediate answers to commonly asked questions regarding the Department of Environment's public services, environmental regulations, complaint procedures, licensing processes, waste management, public information requests, and digital services.

This section is intended to reduce repetitive inquiries, improve self-service capabilities, shorten response times, and help users locate accurate information without requiring direct assistance from departmental staff.

Unlike the Environmental Resources section, which focuses on official documents and publications, the FAQ & Help Center emphasizes concise, practical, task-oriented guidance.

The presentation should prioritize clarity, accessibility, and fast information retrieval while remaining consistent with the Skyline Modern Design System.

279.2 Objectives

The FAQ & Help Center shall achieve the following objectives:

Answer common public questions.
Reduce unnecessary customer service requests.
Improve self-service capabilities.
Simplify service procedures.
Increase accessibility of public information.
Support digital transformation.
Direct users toward appropriate services when additional assistance is required.

Answers should remain concise, accurate, and periodically reviewed.

279.3 Section Placement

The FAQ & Help Center should appear immediately after the Environmental Resources section.

Page hierarchy:

Environmental Resources

↓

FAQ & Help Center

↓

Emergency Contact

This placement allows users to consult official publications before reviewing summarized guidance.

279.4 Background Strategy

Recommended background:

Surface Lowest

or

Surface Container Lowest

The background should remain neutral to maximize readability.

280. Layout Structure

The section consists of:

Section

↓

Container

↓

Section Header

↓

Search Bar

↓

Category Navigation

↓

FAQ Accordion

↓

Quick Help Cards

↓

Contact Escalation

The layout should prioritize ease of navigation and information discovery.

281. Section Header

Structure:

Label

↓

Title

↓

Description
281.1 Label

Examples:

Frequently Asked Questions
Help Center
Need Assistance?
Support Center

Typography:

Label Medium.
Primary Color.
Medium Weight.
281.2 Title

Example:

Find Answers to Common Questions

Typography:

Headline Medium.

Maximum:

Two lines.

281.3 Description

Example:

Search frequently asked questions or browse categorized topics to quickly find the information you need.

Maximum:

Three lines.

Typography:

Body Large.

282. Search Functionality

Users should be able to search using:

Keywords.
Service names.
Regulation names.
Complaint topics.
Licensing topics.
Waste management.
Environmental programs.

Search results should update dynamically without requiring a full page refresh.

Partial keyword matching should be supported.

283. FAQ Categories

Questions should be grouped into logical categories.

Examples:

Public Services.
Environmental Licensing.
Waste Management.
Public Complaints.
Public Information.
Environmental Education.
Regulations.
Technical Support.
Digital Services.

Categories may appear as:

Filter Chips.
Horizontal Tabs.
Compact Buttons.

On mobile devices, categories should become horizontally scrollable.

284. FAQ Accordion
284.1 Purpose

The accordion presents questions in an organized, space-efficient format.

Users should expand only the questions relevant to their needs.

284.2 Accordion Structure

Each FAQ item consists of:

Question

↓

Expand Icon

↓

Answer

↓

Helpful Resources (Optional)

Only the selected item should expand by default.

284.3 Accordion Appearance

Characteristics:

Surface Lowest.
Medium corner radius.
Soft divider.
Comfortable padding.
Clear typography hierarchy.

Expanded content should remain visually connected to its corresponding question.

285. Question Formatting

Questions should:

Be concise.
Use plain language.
Reflect actual user inquiries.
Avoid legal or technical jargon whenever possible.

Typography:

Body Large.

SemiBold.

286. Answer Formatting

Answers should:

Be concise.
Use short paragraphs.
Include numbered steps when appropriate.
Link to related services or documents when necessary.

Maximum recommended length:

200 words.

Typography:

Body Medium.

287. Helpful Resources

Each answer may optionally include:

Related Services.
Downloadable Forms.
Official Regulations.
Contact Information.
Video Tutorials.
Related Articles.

Resources should appear below the answer using lightweight link cards or text links.

288. Quick Help Cards

Below the FAQ section, several Quick Help Cards may provide direct access to common actions.

Examples:

Submit a Complaint.
Apply for Environmental Permits.
Download Public Forms.
Contact Customer Service.
Track Application Status.
View Public Information.

Cards should follow the global card specification.

288.1 Card Structure

Each Quick Help Card contains:

Icon

↓

Title

↓

Short Description

↓

Action Button
289. Contact Escalation

If users cannot find an answer, the section should provide escalation options.

Examples:

Contact the Department.
Live Chat.
WhatsApp Service.
Email Support.
Public Information Officer.
Complaint Center.

Only official communication channels should be displayed.

290. Chatbot Entry Point (Optional)

The Help Center may include an entry point for the department's AI or virtual assistant.

The chatbot should be presented as:

Floating button (global).
Inline Help Card.
Dedicated assistance banner.

The chatbot should supplement, not replace, official contact channels.

291. Motion and Interaction

Accordion interactions should include:

Smooth height transition.
Expand/collapse icon rotation.
Soft background transition.
Button hover effects.
Focus transitions.

Animations should remain subtle and responsive.

292. Accessibility

The FAQ & Help Center must support:

Semantic accordion elements.
Keyboard navigation.
Screen reader compatibility.
Proper ARIA attributes.
Visible focus indicators.
High contrast typography.

Accordion state changes should be announced appropriately for assistive technologies.

293. Performance Requirements

The FAQ section should:

Load instantly.
Support client-side filtering.
Minimize layout shifts.
Avoid unnecessary animations.
Cache frequently accessed data where appropriate.

Search operations should remain responsive even with large FAQ collections.

294. Responsive Behaviour
Desktop
Search bar spans the container width.
Categories displayed horizontally.
Accordion occupies the primary content width.
Quick Help Cards arranged in three columns.
Tablet
Categories remain horizontally scrollable.
Quick Help Cards displayed in two columns.
Mobile
Full-width search bar.
Scrollable categories.
Single-column accordion.
One Quick Help Card per row.
Comfortable touch targets.

Spacing should remain consistent across all breakpoints.

295. Empty State

If no FAQ entries are available:

Display:

Help illustration.
Informative message.
Contact Support button.

The section should maintain visual consistency with the rest of the page.

296. Content Governance

To maintain information quality:

Questions should be based on actual citizen inquiries.
Answers must be reviewed periodically.
Outdated information should be archived or updated.
Responses should use clear, non-technical language.
References to regulations should include links to official documents where applicable.

Consistency between the FAQ and official publications must always be maintained.

297. Consistency Rules

To maintain consistency across the website:

Accordion components must follow the Skyline Modern component specification.
Typography must use Skyline Modern design tokens.
Motion must follow the approved animation system.
Icons must originate from the approved icon library.
Cards must follow the global card specification.
Category filters must remain consistent with filtering components used throughout the website.
Only approved semantic color tokens may be used.
Decorative effects should never reduce readability or accessibility.

The Frequently Asked Questions & Help Center section should provide a fast, intuitive, and accessible self-service experience that enables citizens to obtain accurate information efficiently while maintaining the professionalism, consistency, and usability expected of the Department of Environment's official digital platform.


298. Emergency Environmental Contact & Quick Response
298.1 Purpose

The Emergency Environmental Contact & Quick Response section provides immediate access to official emergency communication channels for reporting urgent environmental incidents that require rapid government response.

This section is intended for situations that demand immediate attention, including hazardous waste spills, illegal dumping, environmental pollution, forest or land fires, chemical contamination, air pollution incidents, river pollution, wildlife emergencies, and other environmental hazards.

Unlike the Frequently Asked Questions & Help Center, which supports general public inquiries, this section is specifically designed for time-sensitive environmental emergencies and rapid reporting.

The presentation should prioritize visibility, speed of access, clarity of information, and user confidence while maintaining consistency with the Skyline Modern Design System.

298.2 Objectives

The Emergency Environmental Contact section shall achieve the following objectives:

Provide immediate emergency contact information.
Accelerate environmental incident reporting.
Reduce response delays.
Guide citizens through emergency reporting procedures.
Improve emergency communication.
Support environmental protection efforts.
Increase public confidence in emergency response services.

Emergency communication channels should always remain clearly visible and easy to access.

298.3 Section Placement

The Emergency Environmental Contact section should appear immediately after the FAQ & Help Center.

Page hierarchy:

FAQ & Help Center

↓

Emergency Environmental Contact

↓

Newsletter

This placement ensures users can escalate unresolved issues into formal emergency reporting when necessary.

298.4 Background Strategy

Recommended background:

Error Container

or

A lightly tinted semantic warning background using the Skyline Modern error palette.

The section should visually distinguish itself from informational content while remaining professional and accessible.

Avoid excessive use of bright red or alarming visual effects.

299. Layout Structure

The section consists of:

Section

↓

Container

↓

Emergency Header

↓

Emergency Hotline Cards

↓

Quick Incident Reporting

↓

Emergency Procedures

↓

Response Information

The layout should emphasize immediate action.

300. Emergency Header

Structure:

Emergency Badge

↓

Title

↓

Description
300.1 Emergency Badge

Examples:

Emergency Response
Environmental Hotline
Report an Incident
Rapid Response

Typography:

Label Medium.
Error semantic color.
Medium Weight.
300.2 Title

Example:

Report Environmental Emergencies Immediately

Typography:

Headline Medium.

Maximum:

Two lines.

300.3 Description

Example:

If you witness an environmental emergency requiring immediate government response, contact our emergency services using the official communication channels below.

Maximum:

Three lines.

Typography:

Body Large.

301. Emergency Hotline Cards
301.1 Purpose

Each Hotline Card provides direct access to an official emergency communication channel.

Users should immediately understand:

Contact type.
Availability.
Intended purpose.
301.2 Desktop Layout

Recommended:

Three-column grid.

Tablet Layout

Two-column grid.

Mobile Layout

Single-column.

Cards should span the full available width.

301.3 Card Structure

Each Hotline Card contains:

Communication Icon

↓

Channel Name

↓

Availability

↓

Contact Information

↓

Primary Action
301.4 Examples

Examples include:

Emergency Hotline.
WhatsApp Emergency.
Environmental Command Center.
Public Complaint Center.
Fire Coordination.
Hazardous Waste Response.

Only official communication channels should be displayed.

302. Communication Methods

Supported methods may include:

Telephone.
WhatsApp.
SMS.
Email.
Web Reporting Portal.

Each method should display the appropriate communication icon.

303. Availability Status

Availability examples:

24 Hours.
Business Hours.
Emergency Only.
Always Available.

Status should combine:

Text.
Semantic color.
Optional icon.

Availability should never rely solely on color.

304. Quick Incident Reporting

The Quick Incident Reporting component provides rapid access to structured reporting.

The reporting entry may include:

Report Pollution.
Illegal Dumping.
Hazardous Waste.
Forest Fire.
River Pollution.
Air Pollution.
Wildlife Emergency.

Each option should use a recognizable environmental icon.

304.1 Reporting Layout

Desktop:

Grid layout.

Mobile:

Vertical card list.

Each reporting category should be easily distinguishable.

305. Emergency Reporting Workflow

Where applicable, users should be informed of the reporting process.

Example workflow:

Submit Report

↓

Verification

↓

Field Response

↓

Resolution

↓

Status Update

This workflow should reassure citizens that reports are processed systematically.

306. Required Reporting Information

Reporting guidance may encourage users to provide:

Incident location.
Incident description.
Date and time.
Photographs (if safe).
Contact information.
Additional observations.

The interface should clearly indicate required and optional information.

307. Emergency Procedures

The section may include brief safety guidance.

Examples:

Avoid direct contact with hazardous materials.
Maintain a safe distance.
Follow local authority instructions.
Do not attempt dangerous interventions.
Contact emergency services immediately if lives are at risk.

Instructions should remain concise.

308. Response Information

Users may be informed about:

Expected response process.
Service coverage.
Emergency priorities.
Response limitations.

Information should set realistic expectations while encouraging reporting.

309. Motion and Interaction

Hover behavior:

Slight elevation.
Shadow enhancement.
Button transition.
Icon color transition.

Animations should remain subtle.

Emergency actions should appear immediately responsive.

310. Accessibility

The Emergency Contact section must support:

Keyboard navigation.
Screen reader compatibility.
Accessible emergency buttons.
High contrast typography.
Visible focus indicators.
Large touch targets.

Emergency telephone links should be directly callable on supported devices.

311. Performance Requirements

The section should:

Load immediately.
Avoid heavy media.
Prioritize essential information.
Maintain responsive interactions.
Minimize external dependencies.

Emergency information should remain available even under limited network conditions whenever possible.

312. Responsive Behaviour
Desktop
Three-column hotline grid.
Incident reporting grid.
Workflow displayed horizontally.
Tablet
Two-column hotline layout.
Workflow adapts proportionally.
Mobile
Single-column hotline cards.
Vertical reporting list.
Workflow displayed vertically.
Large touch-friendly buttons.
Immediate access to call and messaging actions.

The emergency experience should minimize the number of interactions required to contact the department.

313. Empty State

Emergency contact information should never be absent.

If an emergency service is temporarily unavailable:

Display:

Temporary notice.
Alternative official communication channel.
Estimated restoration information if available.

Users should always have access to at least one emergency contact method.

314. Consistency Rules

To maintain consistency across the website:

Hotline Cards must follow the Skyline Modern card specification.
Typography must use Skyline Modern design tokens.
Motion must follow the approved animation system.
Icons must originate from the approved icon library.
Semantic colors must be used appropriately for emergency indicators.
Buttons must follow the global button specification.
Emergency information should remain concise and highly visible.
Decorative effects should never delay or obscure emergency actions.

The Emergency Environmental Contact & Quick Response section should provide a fast, reliable, and accessible pathway for reporting urgent environmental incidents while maintaining the professionalism, usability, and consistency expected of the Department of Environment's official digital platform.



315. Newsletter Subscription, Social Media & Footer Ecosystem
315.1 Purpose

The Newsletter Subscription, Social Media & Footer Ecosystem section serves as the final interaction area of the Home Page, providing citizens with opportunities to remain informed, access official communication channels, navigate important institutional information, and discover additional government resources.

This section consolidates secondary navigation, official contact information, legal notices, accessibility resources, social media links, newsletter subscriptions, and supporting utilities into a structured footer ecosystem.

Unlike the Emergency Environmental Contact section, which emphasizes immediate action during urgent situations, this section supports long-term communication, institutional transparency, public engagement, and website navigation.

The footer should remain informative without appearing visually heavy or cluttered.

315.2 Objectives

The Footer Ecosystem shall achieve the following objectives:

Encourage ongoing public engagement.
Provide official communication channels.
Improve secondary navigation.
Increase social media visibility.
Support accessibility.
Display legal and institutional information.
Improve discoverability of supporting pages.
Reinforce the Department's official identity.

The footer should serve as the final navigational hub of the Home Page.

315.3 Section Placement

The Footer Ecosystem should appear as the final section of the Home Page.

Page hierarchy:

Emergency Environmental Contact

↓

Newsletter Subscription

↓

Footer

↓

Copyright

No content should appear below the footer except optional system notifications or cookie consent components.

315.4 Background Strategy

Recommended background:

Inverse Surface

or

Dark Surface

Typography:

Inverse On Surface.

This darker background visually separates the footer from the primary page content while improving navigation recognition.

316. Overall Layout Structure

The Footer Ecosystem consists of:

Newsletter Banner

↓

Primary Footer

↓

Secondary Footer

↓

Copyright Bar

Each layer serves a distinct informational purpose.

317. Newsletter Subscription Banner
317.1 Purpose

The Newsletter Banner encourages visitors to subscribe to official updates regarding:

Environmental programs.
Public announcements.
Community activities.
Environmental education.
Government publications.
Public services.

Subscription should remain optional.

317.2 Desktop Layout

Recommended:

Two-column layout.

Subscription Information

↓

Subscription Form
Tablet Layout

Stacked vertically.

Mobile Layout

Single-column.

The subscription form appears below the descriptive content.

317.3 Structure

The Newsletter Banner contains:

Badge

↓

Headline

↓

Supporting Description

↓

Email Input

↓

Subscribe Button
317.4 Input Behaviour

Input fields should support:

Email validation.
Error messaging.
Success confirmation.
Keyboard accessibility.
Autofill support.

The button should remain disabled until the input is considered valid.

318. Social Media Integration
318.1 Purpose

The Footer should provide access to official Department social media platforms.

Only verified official accounts should be displayed.

318.2 Supported Platforms

Examples:

Facebook.
Instagram.
X (formerly Twitter).
YouTube.
TikTok.
LinkedIn.

Only active institutional platforms should appear.

318.3 Presentation

Icons should:

Use the approved icon library.
Maintain equal dimensions.
Include accessible labels.
Open external websites in new browser tabs.

Icons should not dominate the footer visually.

319. Primary Footer

The Primary Footer organizes major navigation into structured columns.

Recommended columns include:

About the Department.
Public Services.
Information Center.
Environmental Programs.
Contact Information.

Each column should maintain equal spacing.

319.1 About the Department

Examples:

Profile.
Organizational Structure.
Vision & Mission.
Strategic Plan.
Leadership.
319.2 Public Services

Examples:

Licensing.
Public Complaints.
Waste Services.
Public Information.
Environmental Monitoring.
319.3 Information Center

Examples:

News.
Publications.
Gallery.
Regulations.
Annual Reports.
319.4 Environmental Programs

Examples:

Campaigns.
Volunteer Activities.
Waste Bank.
Green Schools.
Climate Programs.
319.5 Contact Information

Recommended information:

Office Address.
Telephone.
Email.
Operating Hours.
Emergency Hotline.

Contact information should remain concise.

320. Secondary Footer

The Secondary Footer contains institutional utility links.

Examples:

Privacy Policy.
Terms of Use.
Accessibility Statement.
Cookie Policy.
Sitemap.
Website Disclaimer.
Public Information (PPID).
Open Data Portal.

Links should use Body Medium typography.

321. Accessibility Resources

The footer should provide quick access to accessibility information.

Examples:

Accessibility Statement.
Keyboard Navigation Guide.
Screen Reader Compatibility.
Contact Accessibility Support.

Accessibility resources should remain easy to locate.

322. Government Identity

The footer may display:

Department Logo.
Regency or City Government Logo.
Official Government Seal.

Logos should:

Maintain original proportions.
Use high-quality assets.
Respect official branding guidelines.
323. Copyright Bar

The Copyright Bar appears below the footer.

Recommended information includes:

Copyright notice.
Current year.
Department name.
Government ownership statement.

Example:

© 2026 Department of Environment.
All Rights Reserved.
324. Version Information (Optional)

The footer may display:

Website Version.
Build Number.
Last Updated.
API Version.

Version information should remain visually unobtrusive.

325. Back-to-Top Button

The Footer may include a floating Back-to-Top control.

Behaviour:

Appears after sufficient scrolling.
Smooth scroll animation.
Keyboard accessible.
Touch friendly.
Hidden at the top of the page.

The button should never obscure important content.

326. Motion and Interaction

Interactive elements should include:

Link hover transitions.
Icon color transitions.
Button hover states.
Smooth Back-to-Top animation.
Input focus transitions.

Animations should remain subtle and consistent.

327. Accessibility

The Footer Ecosystem must support:

Semantic footer elements.
Keyboard navigation.
Screen reader compatibility.
Accessible social media labels.
Visible focus indicators.
High contrast typography.
Proper heading hierarchy.

External links should clearly indicate that they leave the official website when appropriate.

328. Performance Requirements

The Footer should:

Load immediately.
Avoid unnecessary animations.
Lazy load decorative assets where appropriate.
Optimize logos and icons.
Cache static assets.

Footer performance should not delay page rendering.

329. Responsive Behaviour
Desktop
Newsletter displayed in two columns.
Footer organized into five columns.
Secondary Footer displayed horizontally.
Copyright centered.
Tablet
Newsletter stacked vertically.
Footer displayed in two or three columns.
Utility links wrap naturally.
Mobile
Newsletter becomes a single-column layout.
Footer sections stacked vertically.
Social icons centered.
Contact information displayed clearly.
Large touch-friendly links.
Back-to-Top button remains easily accessible.

Spacing should remain comfortable across all screen sizes.

330. Empty State

The Footer should never be empty.

If newsletter functionality is temporarily unavailable:

Display:

Informative message.
Alternative communication channels.
Social media links.

Core navigation and contact information should always remain available.

331. SEO & Structured Data Considerations

The Footer should support structured metadata where appropriate.

Recommended structured information includes:

Organization.
Contact Information.
Social Profiles.
Postal Address.
Website.
Government Organization.

Semantic HTML elements should be used throughout the footer structure to improve search engine understanding and accessibility.

332. Consistency Rules

To maintain consistency across the website:

Footer typography must follow Skyline Modern design tokens.
Buttons must follow the global component specification.
Links must maintain consistent hover behavior.
Icons must originate from the approved icon library.
Colors must follow approved semantic tokens.
Motion must follow the Skyline Modern animation system.
Logo usage must comply with official branding guidelines.
Decorative effects should never reduce readability or accessibility.

The Newsletter Subscription, Social Media & Footer Ecosystem should conclude the Home Page with a comprehensive, accessible, and professionally structured navigation hub that reinforces the Department of Environment's identity, improves discoverability of institutional information, and maintains full consistency with the Skyline Modern Design System.

333. Home Page Global Implementation Summary

The Home Page shall be implemented as a cohesive experience using the Skyline Modern Design System and must maintain consistency across every section.

The implementation must adhere to the following global principles:

Use semantic HTML5 elements throughout the page (header, nav, main, section, article, aside, and footer).
Support Laravel Blade templating with reusable partials and layout inheritance.
Ensure compatibility with HTML5, CSS3, Bootstrap 5.x, and Tailwind CSS utility classes where appropriate.
Use CSS Custom Properties (variables) derived from the Skyline Modern design tokens for colors, typography, spacing, border radius, and elevation.
Follow a mobile-first responsive strategy.
Maintain WCAG 2.2 AA accessibility compliance.
Optimize all media using lazy loading and responsive image techniques.
Minimize cumulative layout shift (CLS) by reserving layout space for asynchronous content.
Defer non-critical JavaScript and load interactive components progressively.
Ensure all components degrade gracefully when JavaScript is unavailable wherever possible.
Maintain consistent spacing using an 8px spacing system.
Use a 12-column responsive grid on desktop, transitioning to 8-column (tablet) and 4-column (mobile) layouts.
Standardize animations using CSS transitions and lightweight JavaScript only where interaction requires it.
Avoid unnecessary decorative effects that negatively impact performance or usability.
Ensure all interactive controls provide visible focus states, keyboard accessibility, and appropriate ARIA attributes.
Maintain consistent card dimensions, typography hierarchy, button styles, iconography, and component spacing across all sections.
Structure the Home Page so that each section can be independently maintained, extended, or replaced without affecting the integrity of the overall layout.

These implementation principles establish a robust foundation for GitHub Copilot Agent to generate production-ready frontend code for Laravel applications while preserving design consistency, maintainability, scalability, accessibility, and long-term extensibility.



