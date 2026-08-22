# Service Card Specification

**Specification ID:** ESS-COMP-002  
**Status:** Approved  
**Domain:** Component System â€” Cards  

---

## 1. Specification & Responsibility
Defines the split layout structure and responsive behavior of service cards in the Public Services section.

---

## 2. Implementation Rules (RFC 2119)
- **Ratio & Dimensions:** **MUST** follow a 4:5 split layout (w-full max-w-[400px] h-[480px] bg-white rounded-3xl).
- **Top Image Region:** Height **MUST** be fixed at 220px with overflow-hidden and hover image scale group-hover:scale-105.
- **Bottom Text Region:** **MUST** use p-8 bg-white flex flex-col flex-grow, title 	ext-xl font-bold text-gray-900, description line-clamp-3.
- **Floating Badge Anchor:** **MUST** attach to the bottom-right corner of the image area (-bottom-6 right-6 w-12 h-12 rounded-2xl bg-white shadow-md).

---

## 3. Code Examples & Markup Snippets

`html
<!-- Service Card Blade Component -->
<div class="col-span-1 flex justify-center">
    <a href="{{  }}" class="group relative flex flex-col w-full max-w-[400px] h-[480px] bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100">
        <div class="relative w-full h-[220px] overflow-hidden bg-gray-100 flex-shrink-0">
            <img src="{{  }}" alt="{{  }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
            <div class="absolute -bottom-6 right-6 w-12 h-12 rounded-2xl bg-white flex items-center justify-center text-primary shadow-md group-hover:bg-primary group-hover:text-white transition-colors duration-300 z-10 border border-gray-50">
                <i class="bi {{  }} text-xl"></i>
            </div>
        </div>
        <div class="flex flex-col flex-grow p-8 bg-white relative z-0">
            <h4 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">{{  }}</h4>
            <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">{{  }}</p>
        </div>
    </a>
</div>
`

---

## 4. AI Coding Agent Guidance
- Do NOT convert the service card into a background-image overlay. The 4:5 split layout is mandatory.

---

## 5. Future Maintenance & Scalability Notes
- Preserve text line-clamp-3 to guarantee uniform card height across grid rows regardless of dynamic content length.
