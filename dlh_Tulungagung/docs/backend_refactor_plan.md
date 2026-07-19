# Rencana Perombakan Backend (Standardisasi & Skalabilitas CMS)

Dokumen ini adalah panduan langkah-demi-langkah yang dirancang secara ringan, spesifik, dan modular agar dapat dieksekusi dengan mudah dan presisi oleh AI Agent/Model yang lebih hemat (low-cost model).

---

## 🛠️ LANGKAH 1: Pembuatan Modul Agenda (Jadwal Agenda)
Kriteria: Mencatat jadwal kegiatan dinas.

1.  **Jalankan Command:**
    ```bash
    php artisan make:model Agenda -m
    ```
2.  **Edit File Migration Agenda:**
    Tambahkan kolom berikut pada file migrasi yang baru dibuat:
    ```php
    Schema::create('agendas', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->dateTime('start_date');
        $table->dateTime('end_date')->nullable();
        $table->string('location')->nullable();
        $table->string('organizer')->nullable();
        $table->enum('status', ['planned', 'ongoing', 'completed', 'cancelled'])->default('planned');
        $table->foreignId('related_post_id')->nullable()->constrained('news')->nullOnDelete();
        $table->timestamps();
        $table->softDeletes();
    });
    ```
3.  **Edit Model `App\Models\Agenda.php`:**
    ```php
    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'location', 'organizer', 'status', 'related_post_id'];
    protected $casts = ['start_date' => 'datetime', 'end_date' => 'datetime'];
    ```

---

## 🛠️ LANGKAH 2: Pembuatan Modul SKM (Survei Kepuasan Masyarakat)
Kriteria: Mencatat nilai indeks SKM per periode/tahun.

1.  **Jalankan Command:**
    ```bash
    php artisan make:model SkmScore -m
    ```
2.  **Edit File Migration SKM:**
    ```php
    Schema::create('skm_scores', function (Blueprint $table) {
        $table->id();
        $table->integer('year');
        $table->string('period')->nullable(); // Contoh: "Semester I" atau "Tahunan"
        $table->decimal('score', 5, 2); // Nilai SKM
        $table->string('category'); // Contoh: "Sangat Baik"
        $table->text('description')->nullable();
        $table->string('report_file')->nullable(); // PDF Laporan SKM
        $table->timestamps();
        $table->softDeletes();
    });
    ```
3.  **Edit Model `App\Models\SkmScore.php`:**
    ```php
    protected $fillable = ['year', 'period', 'score', 'category', 'description', 'report_file'];
    ```

---

## 🛠️ LANGKAH 3: Pemisahan Struktur Organisasi & Jabatan
Kriteria: Menghubungkan Bidang (Departments) secara hierarkis dan membuat master Jabatan (Positions) relasional dengan Pejabat (Officials).

1.  **Tambah Hierarki pada Bidang (Departments):**
    Jalankan command:
    ```bash
    php artisan make:migration add_parent_id_to_departments_table --table=departments
    ```
    Isi file migrasi:
    ```php
    Schema::table('departments', function (Blueprint $table) {
        $table->foreignId('parent_id')->nullable()->after('id')->constrained('departments')->nullOnDelete();
    });
    ```

2.  **Buat Model & Migrasi Master Jabatan (Positions):**
    Jalankan command:
    ```bash
    php artisan make:model Position -m
    ```
    Isi file migrasi `positions`:
    ```php
    Schema::create('positions', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('code')->nullable();
        $table->foreignId('department_id')->nullable()->constrained('departments')->nullOnDelete();
        $table->integer('sort_order')->default(0);
        $table->timestamps();
    });
    ```

3.  **Relasikan Pejabat (Officials) ke Jabatan Baru:**
    Jalankan command:
    ```bash
    php artisan make:migration alter_officials_table_add_position_id --table=officials
    ```
    Isi file migrasi:
    ```php
    Schema::table('officials', function (Blueprint $table) {
        $table->foreignId('position_id')->nullable()->after('department_id')->constrained('positions')->nullOnDelete();
    });
    ```

4.  **Update Definisi Relasi pada Model:**
    - Di `App\Models\Department.php`:
      ```php
      public function parent() { return $this->belongsTo(Department::class, 'parent_id'); }
      public function children() { return $this->hasMany(Department::class, 'parent_id'); }
      public function positions() { return $this->hasMany(Position::class); }
      ```
    - Di `App\Models\Position.php`:
      ```php
      public function department() { return $this->belongsTo(Department::class); }
      public function officials() { return $this->hasMany(Official::class); }
      ```
    - Di `App\Models\Official.php`:
      ```php
      public function positionRelation() { return $this->belongsTo(Position::class, 'position_id'); }
      ```

---

## 🛠️ LANGKAH 4: Pembuatan Polymorphic Media Library (Centralized Media)
Kriteria: Menyimpan satu data media yang dapat direuse oleh berbagai modul (News, Pages, Officials, dll).

1.  **Jalankan Command Pembuatan Model & Migrasi Media:**
    ```bash
    php artisan make:model Media -m
    ```
2.  **Edit File Migration Media:**
    ```php
    Schema::create('media', function (Blueprint $table) {
        $table->id();
        $table->string('file_name');
        $table->string('original_name');
        $table->string('mime_type');
        $table->unsignedBigInteger('size');
        $table->string('disk')->default('public');
        $table->string('path');
        $table->string('alt_text')->nullable();
        $table->text('caption')->nullable();
        $table->string('type')->default('image'); // image, document, video, etc
        $table->timestamps();
        $table->softDeletes();
    });
    ```
3.  **Buat Tabel Pivot Polymorphic (Mediaables):**
    Jalankan command:
    ```bash
    php artisan make:migration create_mediaables_table
    ```
    Isi file migrasi `mediaables`:
    ```php
    Schema::create('mediaables', function (Blueprint $table) {
        $table->foreignId('media_id')->constrained()->cascadeOnDelete();
        $table->unsignedBigInteger('mediaable_id');
        $table->string('mediaable_type');
        $table->string('role')->default('featured'); // featured, gallery, attachment
        
        $table->primary(['media_id', 'mediaable_id', 'mediaable_type', 'role']);
    });
    ```
4.  **Edit Model `App\Models\Media.php`:**
    ```php
    protected $fillable = ['file_name', 'original_name', 'mime_type', 'size', 'disk', 'path', 'alt_text', 'caption', 'type'];
    ```
5.  **Tambahkan Trait Relasi Polymorphic untuk Dipakai di Model Lain:**
    Buat file trait `App\Traits\HasMedia.php`:
    ```php
    <?php
    namespace App\Traits;
    use App\Models\Media;

    trait HasMedia {
        public function media() {
            return $this->morphToMany(Media::class, 'mediaable', 'mediaables');
        }
        public function featuredImage() {
            return $this->morphToMany(Media::class, 'mediaable', 'mediaables')->wherePivot('role', 'featured');
        }
    }
    ```

---

## 🛠️ LANGKAH 5: Tambah Kolom SEO Tingkat Lanjut ke Berita & Halaman
Kriteria: Menyediakan kolom meta open-graph dan canonical untuk SEO.

1.  **Jalankan Command:**
    ```bash
    php artisan make:migration add_advanced_seo_columns_to_news_and_pages
    ```
2.  **Edit File Migration:**
    ```php
    public function up(): void
    {
        foreach (['news', 'pages'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->string('canonical_url')->nullable()->after('seo_description');
                $table->string('og_title')->nullable()->after('canonical_url');
                $table->text('og_description')->nullable()->after('og_title');
                $table->string('twitter_card')->nullable()->default('summary_large_image')->after('og_description');
                $table->json('schema_json')->nullable()->after('twitter_card');
            });
        }
    }
    ```

---

## 🛠️ LANGKAH 6: Ubah Relasi Kategori Berita menjadi Many-to-Many
Kriteria: 1 Berita bisa memiliki banyak kategori.

1.  **Jalankan Command:**
    ```bash
    php artisan make:migration create_news_news_category_table
    ```
2.  **Edit File Migration Pivot:**
    ```php
    Schema::create('news_news_category', function (Blueprint $table) {
        $table->foreignId('news_id')->constrained()->cascadeOnDelete();
        $table->foreignId('news_category_id')->constrained()->cascadeOnDelete();
        $table->primary(['news_id', 'news_category_id']);
    });
    ```
3.  **Update Model:**
    - Di `App\Models\News.php` ganti `category()` menjadi:
      ```php
      public function categories() { return $this->belongsToMany(NewsCategory::class, 'news_news_category', 'news_id', 'news_category_id'); }
      ```
    - Di `App\Models\NewsCategory.php`:
      ```php
      public function news() { return $this->belongsToMany(News::class, 'news_news_category', 'news_category_id', 'news_id'); }
      ```

---

## 🚀 LANGKAH AKHIR: Eksekusi Migrasi
Jalankan perintah ini di terminal setelah semua file di atas tersimpan:
```bash
php artisan migrate
```
