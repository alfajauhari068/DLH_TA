# Frontend Engineering Operational Rules

- **Stack**: Blade templates + Tailwind CSS JIT + Bootstrap 5 (grid & offcanvas only) + Vite.
- **Component Reuse**: Reuse Blade partials (x-guest.service-card, x-navbar, x-footer).
- **No Inline Styles**: Never use inline style="..." for color hex codes or spatial margins. Use Tailwind utilities.
- **No DOM Mutations**: Do not mutate server-rendered Blade directives with arbitrary client-side DOM rewrites.
