# DLH Tulungagung — Portal Informasi & CMS

Aplikasi web **Dinas Lingkungan Hidup (DLH) Kabupaten Tulungagung** yang dikembangkan sebagai portal informasi publik sekaligus **Content Management System (CMS)** untuk pengelolaan konten website oleh administrator.

> **Status pengembangan:** development  
> **Branch dokumentasi:** `develop`  
> **Framework:** Laravel 10  
> **PHP:** ^8.2  
> **Database:** MySQL  
> **Frontend:** Blade, Bootstrap 5.3, Tailwind CSS 4, Vite  

---

## 1. Tentang Proyek

Project ini merupakan pengembangan ulang website DLH Tulungagung dari sisi arsitektur aplikasi, pengelolaan konten, dan antarmuka pengguna. Sistem tidak hanya menyediakan halaman informasi publik, tetapi juga menyediakan CMS agar administrator dapat mengelola konten tanpa melakukan perubahan langsung pada source code.

Secara konseptual, sistem terdiri dari dua area utama:

```text
                    DLH TULUNGAGUNG
                           │
              ┌────────────┴────────────┐
              │                         │
       PUBLIC WEBSITE              ADMIN CMS
              │                         │
        Blade Frontend          Authentication
              │                         │
              │                  Administrator Role
              │                         │
              └────────────┬────────────┘
                           │
                       Laravel 10
                           │
                 Controllers / Models
                           │
                        Database
```

Frontend mengambil data dari database melalui controller dan model Laravel. Administrator mengelola data melalui route `/admin/*` yang dilindungi authentication dan role `Administrator`.

---

## 2. Tujuan Sistem

Sistem dikembangkan untuk:

- menyediakan portal informasi DLH Tulungagung;
- menyediakan informasi layanan publik dan dokumen yang dapat diakses masyarakat;
- menyediakan publikasi berita, galeri, program, agenda, dan informasi kelembagaan;
- menyediakan CMS untuk pengelolaan konten oleh administrator;
- memisahkan area publik dan area administrasi;
- menyediakan struktur data yang lebih terorganisasi melalui Laravel Eloquent dan migration;
- mendukung pengelolaan media dan dokumen melalui sistem upload;
- menyediakan data awal melalui database seeder untuk kebutuhan pengembangan dan pengujian.

---

## 3. Fitur Utama

### Website Publik

| Modul | Fungsi |
|---|---|
| Beranda | Menampilkan hero aktif, berita terbaru, galeri, layanan unggulan, program, dan publikasi |
| Profil | Menampilkan halaman profil DLH berbasis konten CMS |
| Berita | Daftar dan detail berita dengan kategori |
| Galeri | Daftar galeri dan detail item galeri |
| Publikasi | Daftar dan detail publikasi yang berstatus published |
| Dokumen | Menampilkan dokumen yang dapat diunduh |
| Layanan | Menampilkan layanan publik dan detail layanan |
| Program | Menampilkan program DLH |
| Agenda | Menampilkan agenda kegiatan |
| SKM | Menampilkan data Survei Kepuasan Masyarakat |
| Struktur Organisasi | Menampilkan struktur organisasi |
| Profil Pejabat | Menampilkan pejabat berdasarkan struktur/departemen |
| Halaman Dinamis | Menampilkan halaman berdasarkan slug |
| Kontak | Halaman informasi kontak |
| PPID | Mengarahkan pengguna ke layanan PPID eksternal |

### CMS Administrator

| Modul | Fungsi |
|---|---|
| Dashboard | Ringkasan administrasi sistem |
| Users | Pengelolaan pengguna administrator |
| News | CRUD berita, trash, restore, dan force delete |
| Gallery | CRUD galeri, trash, restore, dan force delete |
| Publications | CRUD publikasi, trash, restore, dan force delete |
| Programs | CRUD program, trash, restore, dan force delete |
| Services | CRUD layanan, trash, restore, dan force delete |
| PPID | Pengelolaan data PPID |
| Pages | Pengelolaan halaman dinamis |
| Hero Section | Pengelolaan hero/slider beranda |
| Menus | Pengelolaan menu navigasi |
| Menu Items | Pengelolaan item menu |
| Departments | Pengelolaan departemen |
| Positions | Pengelolaan jabatan |
| Officials | Pengelolaan pejabat |
| Agendas | Pengelolaan agenda |
| SKM Scores | Pengelolaan nilai SKM |
| Organization Structure | Pengelolaan dokumen struktur organisasi |
| Settings | Pengaturan website |
| Media | Upload dan penyimpanan media/dokumen |

---

## 4. Arsitektur Aplikasi

Project menggunakan pola arsitektur MVC Laravel:

```text
Request
  │
  ▼
routes/web.php
  │
  ├── Public Routes
  │       │
  │       ▼
  │   FrontendController
  │       │
  │       ▼
  │   Eloquent Models
  │       │
  │       ▼
  │   MySQL Database
  │       │
  │       ▼
  │   Blade Views
  │
  └── Authenticated Routes
          │
          ▼
      Role: Administrator
          │
          ▼
      Admin Controllers
          │
          ▼
      Eloquent Models
          │
          ▼
      MySQL Database
```

### Pemisahan View

```text
resources/views/
├── admin/       # Antarmuka CMS administrator
├── auth/        # Halaman autentikasi
├── components/  # Blade components
├── frontend/    # Halaman publik berbasis data
├── guest/       # Komponen/halaman publik tertentu
├── layouts/     # Layout Blade
├── widgets/     # Komponen widget
└── errors/      # Halaman error
```

Struktur view tersebut menunjukkan adanya pemisahan antara area administrasi dan area publik.

---

## 5. Struktur Direktori Penting

```text
dlh_Tulungagung/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/
│   │       └── Auth/
│   └── Models/
│
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   └── web.php
│
├── storage/
├── tests/
│   ├── Feature/
│   └── Unit/
│
├── .env.example
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

---

## 6. Teknologi yang Digunakan

### Backend

- PHP 8.2+
- Laravel 10
- Laravel Sanctum
- Laravel Tinker
- Guzzle HTTP Client
- Eloquent ORM
- PHPUnit 10

### Frontend

- Blade Template Engine
- Bootstrap 5.3.2
- Tailwind CSS 4.3.2
- Vite 4
- Axios
- PostCSS
- Autoprefixer

### Database

- MySQL
- Laravel Migration
- Laravel Seeder
- Eloquent ORM

Konfigurasi dependency dapat dilihat pada `composer.json` dan `package.json`.

---

## 7. Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan perangkat memiliki:

- PHP >= 8.2
- Composer
- Node.js dan npm
- MySQL/MariaDB
- Git
- ekstensi PHP yang dibutuhkan Laravel

Direkomendasikan menggunakan PHP 8.2 atau versi yang kompatibel dengan dependency pada `composer.lock`.

---

## 8. Instalasi Lokal

### 8.1 Clone Repository

```bash
git clone https://github.com/alfajauhari068/DLH_TA.git
cd DLH_TA/dlh_Tulungagung
```

Untuk mengikuti versi pengembangan yang menjadi dasar dokumentasi ini:

```bash
git checkout develop
```

### 8.2 Install Dependency PHP

```bash
composer install
```

### 8.3 Install Dependency Frontend

```bash
npm install
```

### 8.4 Konfigurasi Environment

Salin file environment:

```bash
cp .env.example .env
```

Pada Windows PowerShell dapat menggunakan:

```powershell
Copy-Item .env.example .env
```

Kemudian sesuaikan konfigurasi database pada `.env`:

```env
APP_NAME="DLH Tulungagung"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dlh_tulungagung
DB_USERNAME=root
DB_PASSWORD=
```

### 8.5 Generate Application Key

```bash
php artisan key:generate
```

### 8.6 Menyiapkan Database

Buat database MySQL terlebih dahulu, kemudian jalankan migration dan seeder:

```bash
php artisan migrate --seed
```

Seeder utama saat ini menginisialisasi data untuk role, user, departemen, pejabat, berita, halaman, galeri, publikasi, download, program, layanan, PPID, kontak, pengaduan, settings, media sosial, menu, visitor log, dan activity log.

> **Catatan:** `migrate --seed` ditujukan untuk lingkungan pengembangan/pengujian. Jangan menjalankannya pada database produksi tanpa memahami dampaknya.

### 8.7 Storage Link

Karena aplikasi menggunakan disk `public` untuk media, buat symbolic link:

```bash
php artisan storage:link
```

### 8.8 Build Asset Frontend

Untuk development:

```bash
npm run dev
```

Untuk build production:

```bash
npm run build
```

### 8.9 Menjalankan Laravel

```bash
php artisan serve
```

Aplikasi secara default dapat diakses melalui:

```text
http://127.0.0.1:8000
```

---

## 9. Autentikasi Administrator

Area administrator menggunakan middleware:

```text
auth
  └── role:Administrator
```

Route dashboard dan CMS berada pada area terproteksi sehingga pengguna harus login dan memiliki role `Administrator`.

URL utama:

```text
/login
/dashboard
/admin/*
```

### Akun Seeder

Repository menyediakan akun administrator melalui `UsersTableSeeder` untuk kebutuhan development. **Jangan menggunakan kredensial bawaan tersebut pada lingkungan produksi.** Setelah instalasi lokal berhasil, segera ganti password administrator.

---

## 10. Routing

Route utama aplikasi terdapat pada:

```text
routes/web.php
```

### Public Route

Contoh endpoint publik:

```text
/
/profil
/layanan
/layanan/{slug}
/berita
/berita/{slug}
/galeri
/galeri/{slug}
/publikasi
/publikasi/{slug}
/dokumen
/agenda
/skm
/struktur-organisasi
/profil-pejabat
/kontak
/halaman/{slug}
```

### Admin Route

CMS menggunakan resource controller untuk sebagian besar modul:

```text
/admin/news
/admin/galleries
/admin/publications
/admin/programs
/admin/services
/admin/ppid
/admin/pages
/admin/settings
/admin/users
/admin/menus
/admin/departments
/admin/positions
/admin/officials
/admin/agendas
/admin/skm-scores
```

Route lengkap dan middleware dapat diperiksa pada `routes/web.php`.

---

## 11. Database dan Migration

Database dibangun menggunakan Laravel Migration. Selain migration bawaan Laravel, terdapat migration khusus aplikasi yang menggunakan penamaan tahun 2026.

Domain data yang direpresentasikan antara lain:

```text
Users / Roles
Departments / Positions / Officials
News / News Categories
Gallery / Gallery Items
Hero Sections
Publications
Downloads
Programs / Program Images
Services
PPID Requests
Contact Messages
Complaints
Settings
Social Media
Menus / Menu Items
Visitor Logs
Activity Logs
SKM Scores
Organization Structure
```

Migration merupakan sumber kebenaran struktur database aplikasi. Jangan membuat perubahan struktur database secara manual tanpa membuat migration yang sesuai.

---

## 12. Seeder

Seeder utama berada pada:

```text
database/seeders/DatabaseSeeder.php
```

Jalankan seluruh seeder:

```bash
php artisan db:seed
```

Atau sekaligus reset dan isi ulang database development:

```bash
php artisan migrate:fresh --seed
```

> `migrate:fresh --seed` akan menghapus seluruh tabel dan data pada database yang ditargetkan. Gunakan hanya pada database development/testing.

---

## 13. Manajemen Media

Upload media dikelola melalui `MediaController` dan menggunakan Laravel Storage dengan disk `public`.

Endpoint upload admin:

```text
POST /admin/media/upload
```

File yang saat ini divalidasi meliputi beberapa format gambar dan dokumen seperti JPEG, PNG, GIF, SVG, PDF, DOC/DOCX, dan XLS/XLSX dengan batas ukuran 10 MB.

Setelah konfigurasi storage selesai, jalankan:

```bash
php artisan storage:link
```

### Catatan keamanan upload

Modul upload merupakan bagian yang perlu mendapat perhatian khusus sebelum deployment publik. Validasi ekstensi/MIME, ukuran file, SVG, lokasi penyimpanan, dan hak akses file harus dipertahankan secara ketat.

---

## 14. Frontend Asset dan Design System

Asset frontend dikelola melalui Vite.

Entry point yang dikonfigurasi:

```text
resources/css/app.css
resources/js/app.js
resources/js/auth.js
```

Konfigurasi terdapat pada:

```text
vite.config.js
```

Stylesheet utama juga memiliki file pendukung:

```text
resources/css/
├── app.css
├── bootstrap-overrides.css
└── tokens.css
```

Pendekatan ini memungkinkan pengembangan UI menggunakan kombinasi Bootstrap dan Tailwind dengan token/override CSS tambahan.

---

## 15. Testing

Project telah menyediakan struktur PHPUnit untuk:

```text
tests/
├── Feature/
└── Unit/
```

Konfigurasi testing terdapat pada `phpunit.xml` dan menggunakan database testing MySQL bernama `dlh_testing` secara default.

Menjalankan seluruh test:

```bash
php artisan test
```

Atau:

```bash
./vendor/bin/phpunit
```

Sebelum menjalankan test, pastikan database testing dan konfigurasi environment sesuai dengan `phpunit.xml`.

---

## 16. Perintah Artisan yang Berguna

```bash
# Menampilkan daftar route
php artisan route:list

# Membersihkan cache aplikasi
php artisan optimize:clear

# Menjalankan migration
php artisan migrate

# Menjalankan seeder
php artisan db:seed

# Reset database development
php artisan migrate:fresh --seed

# Membuat storage link
php artisan storage:link

# Menjalankan test
php artisan test
```

---

## 17. Git Branch

Repository saat ini memiliki beberapa branch pengembangan. Untuk dokumentasi dan struktur aplikasi yang dijelaskan pada README ini, branch yang digunakan sebagai referensi adalah:

```text
develop
```

Branch utama yang tersedia:

```text
main
develop
development_tim
```

**Penting:** isi `main` tidak identik dengan kondisi aplikasi pada `develop`. Karena itu, dokumentasi teknis ini secara eksplisit mengacu pada `develop`.

Sebelum melakukan perubahan besar, pastikan branch aktif benar:

```bash
git branch
```

---

## 18. Alur Pengembangan yang Direkomendasikan

```text
Feature / Bug Fix
       │
       ▼
Development Branch
       │
       ▼
Testing
       │
       ▼
Code Review
       │
       ▼
develop
       │
       ▼
Validasi / UAT
       │
       ▼
main / Production
```

Jangan menjadikan `main` sebagai target perubahan langsung apabila `develop` masih digunakan sebagai branch integrasi pengembangan.

---

## 19. Konfigurasi Environment

File `.env` tidak boleh dimasukkan ke repository karena dapat berisi credential dan konfigurasi sensitif.

Gunakan:

```text
.env.example
```

sebagai template konfigurasi.

Untuk development, konfigurasi penting meliputi:

- `APP_NAME`
- `APP_ENV`
- `APP_KEY`
- `APP_DEBUG`
- `APP_URL`
- `DB_*`
- konfigurasi mail bila fitur email digunakan
- konfigurasi filesystem/storage

Untuk production:

```env
APP_ENV=production
APP_DEBUG=false
```

Pastikan `APP_KEY` production berbeda dari environment development dan tidak dibagikan melalui repository.

---

## 20. Catatan Keamanan

Beberapa area harus diverifikasi sebelum aplikasi dipublikasikan ke internet:

1. **Credential seeder** — akun development bawaan tidak boleh digunakan pada production.
2. **File upload** — validasi file harus diperketat dan storage harus dikonfigurasi dengan benar.
3. **APP_DEBUG** — harus `false` pada production.
4. **Database credential** — tidak boleh disimpan di repository.
5. **Authorization** — seluruh endpoint admin harus tetap berada di balik authentication dan role authorization.
6. **CSRF** — form mutasi data harus menggunakan proteksi CSRF Laravel.
7. **Mass assignment** — model dan controller perlu ditinjau ketika menambah field baru.
8. **Dependency** — `composer.lock` dan `package-lock.json` perlu dijaga konsisten.
9. **Upload SVG/dokumen** — konten yang dapat diproses browser perlu diperhatikan terhadap risiko XSS dan content injection.

README ini mendokumentasikan kondisi repository berdasarkan source code yang tersedia; dokumentasi ini **bukan pengganti security audit penetration testing**.

---

## 21. Status Audit Dokumentasi

README ini disusun berdasarkan audit struktur branch `develop`, termasuk:

- struktur aplikasi Laravel;
- `composer.json` dan `package.json`;
- `routes/web.php`;
- controller frontend dan admin;
- model aplikasi;
- migration database;
- database seeder;
- Blade views;
- konfigurasi Vite;
- konfigurasi PHPUnit;
- environment example;
- struktur branch repository.

Dokumentasi sengaja tidak mengklaim fitur yang belum dapat diverifikasi dari source code.

---

## 22. Roadmap Dokumentasi & Pengembangan

Beberapa area yang layak dilanjutkan:

- menambahkan screenshot halaman publik dan dashboard;
- mendokumentasikan ERD/database relationship;
- mendokumentasikan role dan permission secara rinci;
- menambahkan dokumentasi API apabila endpoint API ditambahkan;
- menambahkan CI untuk automated testing;
- menambahkan deployment guide khusus Railway/VPS;
- menambahkan changelog/release notes;
- memperkuat security review pada modul upload dan authentication;
- menyelaraskan `main` dengan versi aplikasi yang benar-benar siap production.

---

## 23. Lisensi

Project ini menggunakan Laravel sebagai framework dan memiliki dependency yang masing-masing mengikuti lisensinya.

Untuk lisensi project DLH_Tulungagung sendiri, tentukan dan dokumentasikan lisensi sesuai kebijakan pemilik/pengelola sistem sebelum repository dipublikasikan sebagai software open-source.

---

## 24. Referensi Teknis

- Laravel 10: https://laravel.com/docs/10.x
- Laravel Installation: https://laravel.com/docs/10.x/installation
- Laravel Routing: https://laravel.com/docs/10.x/routing
- Laravel Eloquent: https://laravel.com/docs/10.x/eloquent
- Laravel Migrations: https://laravel.com/docs/10.x/migrations
- Laravel Database Seeding: https://laravel.com/docs/10.x/seeding
- Laravel Filesystem: https://laravel.com/docs/10.x/filesystem
- Laravel Testing: https://laravel.com/docs/10.x/testing
- Vite: https://vitejs.dev/
- Bootstrap: https://getbootstrap.com/
- Tailwind CSS: https://tailwindcss.com/

---

## Repository

https://github.com/alfajauhari068/DLH_TA
