# Rencana Sinkronisasi Frontend & Backend (Fase 3)

Dokumen ini berisi panduan teknis langkah-demi-langkah bagi AI Agent dengan model termurah/rendah untuk menyinkronkan data Backend CMS Admin dengan halaman Guest/Frontend, memperbaiki properti model yang tidak sesuai, serta membuat modul halaman frontend baru yang belum diimplementasikan.

---

## 🔧 LANGKAH 1: Penyelarasan Model Accessors (News, Gallery, & Download)
Untuk mencegah error `undefined property` pada frontend tanpa merombak file blade secara masif, kita perlu menambahkan Eloquent Accessors pada model-model berikut:

1.  **Model `App\Models\News`:**
    Buka `app/Models/News.php` dan tambahkan accessors berikut:
    -   `getUrlAttribute()`: Mengembalikan rute detail berita (`route('news.detail', $this->slug)`).
    -   `getImageUrlAttribute()`: Mengembalikan URL lengkap gambar utama (`$this->featured_image ? asset('storage/' . $this->featured_image) : asset('images/default-news.jpg')`).
    -   `getCategoryNameAttribute()`: Mengembalikan nama kategori pertama dari relasi Many-to-Many (`$this->categories->first()->name ?? 'Uncategorized'`).

2.  **Model `App\Models\Gallery`:**
    Buka `app/Models/Gallery.php` dan tambahkan accessors berikut:
    -   `getImageUrlAttribute()`: Mengembalikan URL gambar cover album (`$this->cover_image ? asset('storage/' . $this->cover_image) : asset('images/default-gallery.jpg')`).
    -   `getAlbumNameAttribute()`: Mengembalikan label kategori/album default, misalnya `'Kegiatan'`.

3.  **Model `App\Models\Download`:**
    Buka `app/Models/Download.php` dan tambahkan accessors berikut:
    -   `getUrlAttribute()`: Mengembalikan URL lengkap untuk mengunduh berkas (`asset('storage/' . $this->file)`).
    -   `getSizeAttribute()`: Menghitung secara dinamis ukuran berkas dari penyimpanan lokal jika tersedia (format ke KB/MB), jika tidak kembalikan `'Unknown'`.

---

## 📞 LANGKAH 2: Rute & Kontroler Halaman Baru
Tambahkan rute-rute baru di `routes/web.php` dan buatlah fungsi pengontrol di `FrontendController.php` untuk menampilkan modul-modul yang baru saja dibuat di Fase 2:

1.  **Definisikan Rute Baru di `routes/web.php` (Frontend/Guest Section):**
    ```php
    Route::get('/agenda', [FrontendController::class, 'agendas'])->name('agendas');
    Route::get('/skm', [FrontendController::class, 'skm'])->name('skm');
    Route::get('/struktur-organisasi', [FrontendController::class, 'officials'])->name('officials');
    Route::get('/layanan/{slug}', [FrontendController::class, 'serviceDetail'])->name('services.detail');
    ```

2.  **Tambahkan Methods di `app/Http/Controllers/FrontendController.php`:**
    -   `agendas()`: Mengambil data agenda terbaru (status: upcoming, ongoing, completed) dengan paginasi.
    -   `skm()`: Mengambil data skor SKM (`SkmScore`) diurutkan berdasarkan tahun teratas.
    -   `officials()`: Mengambil dinamis data departemen/bidang (`Department`) beserta pejabat (`Official`) yang terhubung dengannya untuk menyusun bagan organisasi terstruktur.
    -   `serviceDetail($slug)`: Mengambil satu detail data layanan (`Service`) berdasarkan slug-nya untuk ditampilkan pada halaman detail tersendiri.

---

## 🎨 LANGKAH 3: Pembuatan View Halaman Frontend Baru

1.  **Halaman Detail Layanan (`resources/views/frontend/service-detail.blade.php`):**
    -   Menampilkan informasi lengkap layanan publik: Persyaratan, Alur/Prosedur Kerja, Durasi Penyelesaian, Biaya, Narahubung, Jam Kerja, serta Lokasi Kantor Pelayanan.
    -   Tautkan list card layanan pada halaman `/layanan` agar mengarah ke `/layanan/{slug}`.

2.  **Halaman Agenda (`resources/views/frontend/agendas.blade.php`):**
    -   Buat layout timeline modern berisi list kegiatan DLH.
    -   Pisahkan/kelompokkan secara visual antara agenda **Mendatang (Upcoming/Ongoing)** dengan agenda **Telah Selesai (Completed/Cancelled)**.

3.  **Halaman Survei Kepuasan Masyarakat (`resources/views/frontend/skm.blade.php`):**
    -   Tampilkan skor/nilai IKM secara grafis (misal dengan progress bar bergaya hijau premium atau tabel historis).
    -   Cantumkan klasifikasi Mutu Pelayanan (A: Sangat Baik, B: Baik, dst) sesuai dengan skor tersebut.
    -   Sediakan tombol unduh untuk PDF Laporan Resmi SKM.

4.  **Halaman Struktur Organisasi (`resources/views/frontend/officials.blade.php`):**
    -   Buat susunan hierarki pegawai dinas: Kepala Dinas di bagian teratas (Level Eksekutif).
    -   Di bawahnya tampilkan jajaran Kepala Bidang (Kabid), Sekretaris, dan jajaran Seksi/Sub-bidang secara terurut berdasarkan relasi parent-child Departemen.
    -   Tampilkan foto profil resmi pegawai, nama lengkap, jabatan struktural, serta email/telepon.

---

## 🧪 LANGKAH 4: Verifikasi & Uji Coba Akhir
-   Pastikan tidak ada error PHP fatal atau `undefined relationship` di beranda (`/`).
-   Uji tombol unduh dokumen publik di `/dokumen` dan pastikan file berhasil terbuka.
-   Validasi halaman dinamis `/layanan/{slug}` untuk memastikan data detail ter-render dengan benar.
