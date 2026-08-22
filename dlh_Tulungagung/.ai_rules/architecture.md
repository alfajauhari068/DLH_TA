# System Architecture Operational Rules

- **Framework**: Laravel 10.x MVC pattern.
- **Single Source of Truth**: All specs MUST derive from docs/.
- **Decoupling**: Blade views handle presentation; Controllers handle request orchestrations; Models handle Eloquent ORM.
- **Pattern-Driven Layouts**: Use LANDING_PATTERN, LISTING_PATTERN, and DETAIL_PATTERN for public views.
