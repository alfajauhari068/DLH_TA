# Rencana Integrasi & Standardisasi CMS UI (Phase 2)

Dokumen ini berisi panduan teknis langkah-demi-langkah bagi AI Agent untuk memperbarui antarmuka CMS Admin (CRUD Forms), mengintegrasikan relasi database yang baru dibuat, serta menstandarisasi tata letak form menggunakan DLH Design System (Grid 8/4).

---

## 🎨 LANGKAH 1: Pembuatan Komponen Form Global (Blade Components)
Untuk mempermudah penggunaan ulang tata letak 8-kolom (Main Content) dan 4-kolom (Sidebar), kita harus memindahkan partial khusus News menjadi Komponen Global.

1.  **Pindahkan Partials ke Komponen Global:**
    Buat folder baru jika belum ada: `resources/views/components/admin/form/`
    Buat komponen-komponen berikut:
    -   `card.blade.php`: Wadah putih standar admin (radius-16px, padding-24px, shadow-sm).
    -   `seo-card.blade.php`: Input metadata SEO lanjutan (canonical, OG tags, JSON Schema).
    -   `publish-card.blade.php`: Panel kontrol status publikasi (Draft, Published, Archived, Date Picker).
    -   `featured-image-card.blade.php`: Dropzone/input unggah berkas gambar atau PDF.

---

## 🔗 LANGKAH 2: Update Kontroler & Form Berita (News Category Many-to-Many & SEO)
Mengubah cara penyimpanan kategori dari satu kategori menjadi banyak kategori, serta mengintegrasikan SEO baru.

1.  **Modifikasi `NewsController@store` dan `@update`:**
    -   Ubah input `category_id` menjadi array `category_ids`.
    -   Gunakan `$news->categories()->sync($request->category_ids)` saat menyimpan data.
    -   Pastikan kolom SEO baru (`canonical_url`, `og_title`, `og_description`, `twitter_card`, `schema_json`) divalidasi dan disimpan.
2.  **Edit View `admin/news/create` & `edit`:**
    -   Ubah input kategori menjadi multi-select (Select2/Bootstrap Multi-select) atau checkbox list.
    -   Tambahkan input SEO baru ke dalam `seo-card`.

---

## 📁 LANGKAH 3: Standardisasi CRUD Lama dengan Layout Modern (Grid 8/4)
Ubah halaman Create dan Edit untuk seluruh modul berikut agar mengikuti DLH Design System:
-   **Gallery:** Main (8) -> Form Judul, Deskripsi, Multi-upload. Sidebar (4) -> Status, Kategori.
-   **Publications:** Main (8) -> Judul, Deskripsi, File PDF. Sidebar (4) -> Status, Dokumen Type.
-   **Pages:** Main (8) -> Judul, TinyMCE Editor, Editor SEO. Sidebar (4) -> Status, Template Layout.
-   **Services:** Main (8) -> Nama Layanan, Detail Alur, Persyaratan. Sidebar (4) -> Status, Icon/File SOP.
-   **Users & Settings:** Rapikan agar menggunakan form card yang elegan dengan spacing `mb-6` dan radius `16px`.

---

## 🏢 LANGKAH 4: Integrasi Modul Kepegawaian (Departments Hierarchy & Position Relation)
1.  **Update `DepartmentController` (Bidang):**
    -   Tambahkan input dropdown `parent_id` (menginduk ke Bidang Utama mana) saat membuat/mengedit Bidang.
2.  **Buat CRUD `Position` (Master Jabatan):**
    -   Buat controller `PositionController` dan view untuk CRUD Jabatan.
    -   Setiap jabatan dihubungkan ke `department_id` melalui dropdown.
3.  **Update CRUD `Official` (Pejabat):**
    -   Ubah input teks biasa "Position" pada form Pejabat menjadi dropdown pilihan Jabatan yang dinamis (mengambil relasi dari tabel `positions`).

---

## 📅 LANGKAH 5: Implementasi CRUD Agenda & SKM (Modul Baru)
1.  **Buat Controller:**
    -   `php artisan make:controller Admin\AgendaController --resource`
    -   `php artisan make:controller Admin\SkmScoreController --resource`
2.  **Daftarkan Rute di `routes/web.php`:**
    ```php
    Route::resource('agendas', AgendaController::class);
    Route::resource('skm-scores', SkmScoreController::class);
    ```
3.  **Buat View CRUD Halaman Admin:**
    -   Gunakan grid 8/4 untuk Agenda (Main: Form Event; Sidebar: Waktu & Lokasi).
    -   Gunakan grid 8/4 untuk SKM (Main: Form Nilai SKM & Deskripsi; Sidebar: Tahun, Kategori, Upload PDF Laporan).

---

## 📁 LANGKAH 6: Pengaktifan Polymorphic Media Library (Upload File Terpadu)
Integrasikan Trait `HasMedia` agar setiap berkas yang diunggah tercatat secara rapi di database.

1.  **Modifikasi Method Upload di Controller:**
    -   Setiap kali file diunggah (News featured image, Official photo, SKM PDF), simpan record data file-nya di tabel `media` terlebih dahulu.
    -   Hubungkan record media tersebut ke entitas target menggunakan:
        ```php
        $model->media()->syncWithPivotValues($mediaId, ['role' => 'featured']);
        ```
