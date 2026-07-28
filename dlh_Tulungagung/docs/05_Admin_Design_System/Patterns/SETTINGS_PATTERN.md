# Rencana & Panduan Penerjemahan Halaman Admin CMS (Fase 4)

Dokumen ini berisi panduan teknis langkah-demi-langkah bagi AI Agent dengan model termurah/rendah untuk menerjemahkan seluruh antarmuka CMS Admin (Halaman Dashboard, CRUD Modul, Form-form, Sidebar, dan Header) sepenuhnya ke dalam bahasa Indonesia.

---

## 🎨 LANGKAH 1: Penerjemahan Komponen CRUD Global
Buka folder `resources/views/components/admin/crud/` dan ubah teks-teks bahasa Inggris berikut:

1.  **File `empty-state.blade.php`:**
    -   Ubah `No records found.` menjadi `Tidak ada data yang ditemukan.`

2.  **File `search.blade.php`:**
    -   Ubah `Search...` pada placeholder menjadi `Cari...`
    -   Ubah teks tombol `<button>` dari `Search` menjadi `Cari`

3.  **File `form-actions.blade.php`:**
    -   Ubah `Save` pada tombol kirim menjadi `Simpan`
    -   Ubah `Cancel` pada tombol batal menjadi `Batal`

4.  **File Layout Utama `resources/views/layouts/admin.blade.php`:**
    -   Ubah default `@yield('subtitle', 'Manage DLH Tulungagung services and content in one central interface.')` menjadi `@yield('subtitle', 'Kelola layanan dan konten Dinas Lingkungan Hidup Kabupaten Tulungagung dalam satu antarmuka terpusat.')`

---

## 📂 LANGKAH 2: Update Sidebar (Menu Utama & Penambahan Modul Baru)
Buka file `resources/views/components/admin/sidebar.blade.php`. Kita harus menerjemahkan seluruh menu navigasi sekaligus menambahkan menu untuk modul baru (**Agenda** dan **SKM Scores**) yang dibuat pada Fase 2.

Ubah variabel array `$menuGroups` menjadi seperti berikut:

```php
    $menuGroups = [
        'Workspace' => [
            ['label' => 'Dashboard', 'route' => 'dashboard', 'permission' => 'Dashboard.View', 'icon' => 'grid-1x2', 'badge' => null],
        ],
        'Manajemen Konten' => [
            ['label' => 'Berita', 'route' => 'admin.news.index', 'permission' => 'News.View', 'icon' => 'newspaper', 'badge' => \App\Models\News::count()],
            ['label' => 'Galeri', 'route' => 'admin.galleries.index', 'permission' => 'Gallery.View', 'icon' => 'images', 'badge' => \App\Models\Gallery::count()],
            ['label' => 'Agenda Kegiatan', 'route' => 'admin.agendas.index', 'permission' => 'News.View', 'icon' => 'calendar-event', 'badge' => \App\Models\Agenda::count()],
            ['label' => 'Publikasi', 'route' => 'admin.publications.index', 'permission' => 'Publication.View', 'icon' => 'journal-text', 'badge' => null],
            ['label' => 'Dokumen PPID', 'route' => 'admin.ppid.index', 'permission' => 'PPID.View', 'icon' => 'envelope-open', 'badge' => \App\Models\PpidDocument::count()],
            ['label' => 'Program', 'route' => 'admin.programs.index', 'permission' => 'Program.View', 'icon' => 'briefcase', 'badge' => null],
        ],
        'Data Master' => [
            ['label' => 'Layanan Publik', 'route' => 'admin.services.index', 'permission' => 'Service.View', 'icon' => 'tools', 'badge' => \App\Models\Service::count()],
            ['label' => 'Survei Kepuasan (SKM)', 'route' => 'admin.skm-scores.index', 'permission' => 'Settings.View', 'icon' => 'bar-chart-line', 'badge' => \App\Models\SkmScore::count()],
            ['label' => 'Struktur Bidang', 'route' => 'admin.departments.index', 'permission' => 'Settings.View', 'icon' => 'diagram-3', 'badge' => null],
            ['label' => 'Master Jabatan', 'route' => 'admin.positions.index', 'permission' => 'Settings.View', 'icon' => 'person-badge', 'badge' => null],
            ['label' => 'Data Pejabat', 'route' => 'admin.officials.index', 'permission' => 'Settings.View', 'icon' => 'person-lines-fill', 'badge' => null],
            ['label' => 'Halaman Statis', 'route' => 'admin.pages.index', 'permission' => 'Page.View', 'icon' => 'file-earmark-text', 'badge' => null],
            ['label' => 'Daftar Pengguna', 'route' => 'admin.users.index', 'permission' => 'Users.View', 'icon' => 'people', 'badge' => null],
        ],
        'Pengaturan' => [
            ['label' => 'Konfigurasi Website', 'route' => 'admin.settings.index', 'permission' => 'Settings.View', 'icon' => 'gear', 'badge' => null]
        ]
    ];
```

---

## 📝 LANGKAH 3: Penerjemahan Halaman CRUD Modul secara Manual / Script
Setiap modul CRUD memiliki file view index, create, edit, show di dalam `resources/views/admin/{nama_modul}/`. Lakukan penerjemahan teks statis pada elemen UI menggunakan peta terjemahan berikut:

### Kamus Terjemahan UI Admin:
-   `Create {Module}` / `Add {Module}` -> `Tambah {Modul}` (contoh: `Create News` -> `Tambah Berita`)
-   `Edit {Module}` -> `Ubah {Modul}` (contoh: `Edit Page` -> `Ubah Halaman`)
-   `View` -> `Lihat`
-   `Delete` -> `Hapus`
-   `Are you sure you want to delete...?` -> `Apakah Anda yakin ingin menghapus...?`
-   `Trash` / `Trash Bin` -> `Tempat Sampah`
-   `Restore` -> `Pulihkan`
-   `Force Delete` -> `Hapus Permanen`
-   `Actions` -> `Aksi`
-   `Status` -> `Status`
-   `Draft` -> `Draf`
-   `Published` -> `Diterbitkan`
-   `Archived` -> `Diarsipkan`
-   `Title` -> `Judul`
-   `Summary` -> `Ringkasan`
-   `Content` -> `Isi / Konten`
-   `Featured Image` -> `Gambar Utama`
-   `Category` -> `Kategori`
-   `Author` -> `Penulis`
-   `Published At` -> `Tanggal Diterbitkan`
-   `Year` -> `Tahun`
-   `Period` -> `Periode`
-   `Score` -> `Nilai`
-   `Description` -> `Deskripsi / Keterangan`
-   `Report Document` -> `Dokumen Laporan`
-   `Actions` -> `Aksi`
-   `Cancel` -> `Batal`

---

## 🤖 AUTOMATION SCRIPT (Opsional & Sangat Direkomendasikan)
Untuk mempercepat kerja Model AI yang lebih murah, Anda dapat membuat file PHP script sementara `translate_admin.php` di root direktori dengan kode di bawah ini lalu menjalankannya menggunakan perintah `php translate_admin.php` untuk menerjemahkan kata-kata umum secara otomatis:

```php
<?php
// translate_admin.php

$dir = __DIR__ . '/resources/views/admin';

$replacements = [
    'Create News' => 'Tambah Berita',
    'Edit News' => 'Ubah Berita',
    'Create Gallery' => 'Tambah Galeri',
    'Edit Gallery' => 'Ubah Galeri',
    'Create Page' => 'Tambah Halaman',
    'Edit Page' => 'Ubah Halaman',
    'Create Program' => 'Tambah Program',
    'Edit Program' => 'Ubah Program',
    'Create Service' => 'Tambah Layanan',
    'Edit Service' => 'Ubah Layanan',
    'Create Publication' => 'Tambah Publikasi',
    'Edit Publication' => 'Ubah Publikasi',
    'Create User' => 'Tambah Pengguna',
    'Edit User' => 'Ubah Pengguna',
    'Create Official' => 'Tambah Pejabat',
    'Edit Official' => 'Ubah Pejabat',
    'Create Agenda' => 'Tambah Agenda',
    'Edit Agenda' => 'Ubah Agenda',
    'Create SKM Score' => 'Tambah Nilai SKM',
    'Edit SKM Score' => 'Ubah Nilai SKM',
    'Are you sure?' => 'Apakah Anda yakin?',
    'Delete' => 'Hapus',
    'Restore' => 'Pulihkan',
    'Force Delete' => 'Hapus Permanen',
    'Actions' => 'Aksi',
    'View' => 'Lihat',
    'Cancel' => 'Batal',
    'Save' => 'Simpan',
    'Update' => 'Perbarui',
    'No records found.' => 'Tidak ada data ditemukan.',
    'Search...' => 'Cari...',
    'Search' => 'Cari',
];

function translateFiles($directory, $replacements) {
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $content = file_get_contents($file->getPathname());
            $original = $content;
            
            foreach ($replacements as $search => $replace) {
                // Exact word match replace inside tags
                $content = str_replace('>'.$search.'<', '>'.$replace.'<', $content);
                $content = str_replace('"'.$search.'"', '"'.$replace.'"', $content);
                $content = str_replace('\''.$search.'\'', '\''.$replace.'\'', $content);
            }
            
            if ($content !== $original) {
                file_put_contents($file->getPathname(), $content);
                echo "Translated: " . $file->getFilename() . "\n";
            }
        }
    }
}

translateFiles($dir, $replacements);
echo "Selesai menerjemahkan massal!\n";
```
Perintah untuk menjalankannya:
```bash
php translate_admin.php
rm translate_admin.php
```
Setelah script dijalankan, periksa file sisa secara manual untuk kata-kata bahasa Inggris spesifik lainnya yang belum tercakup di script.
