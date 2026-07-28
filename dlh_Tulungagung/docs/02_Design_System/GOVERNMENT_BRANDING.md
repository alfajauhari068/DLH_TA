# Government Branding & Trust Signals

**Specification ID:** ESS-DS-008  
**Status:** Approved  
**Domain:** Identity, Trust, and Tone  

---

## 1. Specification & Responsibility
This document governs official identity assets, trust indicators, regional emblem usage, and content tone of voice for DLH Kabupaten Tulungagung.

---

## 2. Implementation Rules (RFC 2119)
- **MUST** display the official Dinas Lingkungan Hidup logo in the header with a height strictly bounded to 32px - 40px.
- **SHALL** display the government domain trust indicator (.tulungagung.go.id) and official seal in the footer.
- **MUST** maintain an authoritative, citizen-centric, and empathetic **Tone of Voice**: professional, clear, inclusive, and free of bureaucratic jargon.
- **SHALL NOT** alter the official logo aspect ratio or modify its primary brand colors.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Example Header Branding with Subtitle -->
<a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-3">
    <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo DLH Tulungagung" class="h-[36px] w-auto drop-shadow-sm">
    <div class="d-flex flex-column justify-content-center">
        <h1 class="text-xs font-black text-gray-800 mb-0 tracking-tight">DINAS LINGKUNGAN HIDUP</h1>
        <small class="text-primary font-bold text-[9px] tracking-widest uppercase">Kabupaten Tulungagung</small>
    </div>
</a>
`

---

## 4. AI Coding Agent Guidance
- Always include fallback image handling (onerror) for government logos.
- Never use informal or colloquial language in static copy or toast messages.

---

## 5. Future Maintenance & Scalability Notes
- If regional brand guidelines update, update asset paths in config/globalSettings.php rather than hardcoding in Blade files.
