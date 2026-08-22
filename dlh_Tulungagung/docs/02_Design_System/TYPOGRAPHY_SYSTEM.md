# Typography System Specification

**Specification ID:** ESS-DS-003  
**Status:** Approved  

---

## 1. Specification & Responsibility
Governs font families, typographic hierarchy, font sizes, line heights, and letter spacing rules.

---

## 2. Implementation Rules (RFC 2119)
- **Typeface:** **MUST** use Inter or standard clean system sans-serif.
- **Hierarchy:**
  - Page Titles (H1): 	ext-4xl lg:text-5xl font-black text-gray-900 leading-tight.
  - Section Headings (H2): 	ext-3xl lg:text-4xl font-black text-gray-900 leading-tight.
  - Card Titles (H3/H4): 	ext-xl font-bold text-gray-900.
  - Body Text: 	ext-base text-gray-700 leading-relaxed or 	ext-sm text-gray-500.
  - Eyebrow Badges: 	ext-xs font-bold uppercase tracking-widest.

---

## 3. Code Examples & Markup Snippets

`html
<!-- Typography Stack Example -->
<span class="inline-block px-4 py-2 bg-light-green text-primary font-bold text-xs uppercase tracking-widest rounded-full mb-4">
    Kabar & Publikasi
</span>
<h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4 leading-tight">
    Berita Terkini Lingkungan
</h2>
<p class="text-gray-500 text-lg leading-relaxed max-w-2xl">
    Rangkuman peristiwa dan langkah nyata kami dalam pelestarian ekosistem.
</p>
`

---

## 4. AI Coding Agent Guidance
- Always pair headings with appropriate leading-tight or leading-snug to prevent awkward line breaks.

---

## 5. Future Maintenance & Scalability Notes
- Support fluid typography scaling (clamp()) for ultra-large display titles in future design iterations.
