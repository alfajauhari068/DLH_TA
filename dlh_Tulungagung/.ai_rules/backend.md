# Backend Engineering Operational Rules

- **Framework**: Laravel 10.x (PHP 8.2+).
- **ORM Strictness**: Use Eloquent models; avoid raw SQL strings.
- **Validation**: Validate all request parameters via FormRequests before processing.
- **Database Safety**: Never drop production migrations; write incremental migration scripts.
