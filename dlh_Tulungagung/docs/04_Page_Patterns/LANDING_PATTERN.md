# Landing Page Pattern Specification

**Specification ID:** ESS-PAT-001  
**Status:** Approved  
**Domain:** Guest Landing Page Pattern  

---

## 1. Specification & Responsibility
Defines the required section order, vertical spacing, asymmetric column splits, and background decor for the Guest Landing Page.

---

## 2. Implementation Rules (RFC 2119)
- **Section Sequence:** **MUST** strictly follow this order:
  1. components.navbar (Fixed 72px glass header)
  2. guest.sections.hero (6-layer hero with 640px left content bounds)
  3. guest.sections.services (4:5 split cards grid)
  4. guest.sections.featured-news (70/30 news column split)
  5. guest.sections.gallery (Masonry 1 Hero + 4 Small grid)
  6. guest.sections.statistics (5 col image + 7 col dashboard)
  7. guest.sections.cta (7 col CTA card + 5 col visual stack)
  8. layouts.footer (Deep green topographic footer)
- **Section Rhythm:** Every section **MUST** be separated by uniform padding py-14 md:py-20 lg:py-28.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Homepage Master Index Layout Assembly -->
@extends('layouts.app')

@section('content')
    @include('guest.sections.hero')
    @include('guest.sections.services')
    @include('guest.sections.featured-news')
    @include('guest.sections.gallery')
    @include('guest.sections.statistics')
    @include('guest.sections.cta')
@endsection
`

---

## 4. AI Coding Agent Guidance
- Do NOT insert custom sections out of order. Maintain the acceptance-tested section flow.

---

## 5. Future Maintenance & Scalability Notes
- Additional landing page sections MUST be implemented as independent Blade partials inside esources/views/guest/sections/.
