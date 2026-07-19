# PANDUAN EKSEKUSI TRANSLASI TEMA WARNA ADMIN CMS DLH TULUNGAGUNG
*Dokumen ini dirancang untuk dieksekusi oleh AI Agent / Model LLM yang lebih murah untuk mengubah skema warna Dashboard Admin menjadi lebih modern, profesional, dan premium.*

---

## 🎨 DESAIN PALETTE & FILOSOFI WARNA (EMERALD & SLATE)
Sebagai instansi Dinas Lingkungan Hidup (DLH), warna dasar hijau harus dipertahankan namun diubah dari hijau konvensional (`#1e7e34`) menjadi **Modern Emerald & Cool Slate** yang banyak digunakan pada aplikasi web premium modern (seperti Vercel, Stripe, dan Tailwind UI).

| Komponen | CSS Variable | Kode Hex | Deskripsi Visual |
| :--- | :--- | :--- | :--- |
| **Primary** | `--primary` | `#059669` | Emerald Green Modern (Segar, Profesional) |
| **Secondary** | `--secondary` | `#0f172a` | Slate Dark Blue (Elegan, Kontras Tinggi) |
| **Success** | `--success` | `#10b981` | Hijau Terang untuk Status Berhasil |
| **Warning** | `--warning` | `#f59e0b` | Amber/Oranye untuk Status Pending/Perhatian |
| **Danger** | `--danger` | `#ef4444` | Merah Modern untuk Error/Hapus |
| **Info** | `--info` | `#06b6d4` | Cyan untuk Notifikasi/Info |
| **Background** | `--background` | `#f8fafc` | Slate-50 (Sangat Bersih dan Teduh di Mata) |
| **Surface** | `--surface` | `#ffffff` | Putih Bersih untuk Kartu (Card) & Form |
| **Surface Muted** | `--surface-muted` | `#f1f5f9` | Slate-100 untuk Background Penunjang |
| **Surface Border** | `--surface-border` | `#e2e8f0` | Slate-200 untuk Border Tipis Halus |
| **Text Primary** | `--text-primary` | `#0f172a` | Slate-900 (Warna Teks Utama yang Tajam) |
| **Text Secondary** | `--text-secondary`| `#475569` | Slate-600 (Warna Deskripsi/Sub-informasi) |

---

## 📋 LANGKAH-LANGKAH EKSEKUSI

### LANGKAH 1: Update Variabel CSS Utama
Buka file CSS utama:
[resources/css/app.css](file:///d:/laravel/DLH%20Tulungagung/dlh_Tulungagung/resources/css/app.css)

Cari blok kode `:root` (di sekitar baris 50-80) dan ganti isi variabel warna dengan kode baru berikut:

```css
:root {
    --primary: #059669;
    --secondary: #0f172a;
    --success: #10b981;
    --warning: #f59e0b;
    --danger: #ef4444;
    --info: #06b6d4;
    
    --space-1: 8px;
    --space-2: 12px;
    --space-3: 16px;
    --space-4: 24px;
    --space-5: 32px;
    --space-6: 40px;
    --space-7: 48px;
    
    --sidebar-width: 280px;
    --topbar-height: 72px;
    --card-radius: 16px; /* Diperkecil sedikit agar lebih sleek */
    --card-padding: 24px;
    
    --surface: #ffffff;
    --background: #f8fafc;
    --surface-muted: #f1f5f9;
    --surface-border: #e2e8f0;
    --text-primary: #0f172a;
    --text-secondary: #475569;
    --muted: #64748b;
    --text-muted: #64748b;
    --border-radius: 0.75rem; /* Setara rounded-xl agar konsisten */
}
```

---

### LANGKAH 2: Sesuaikan Tampilan Sidebar Admin (Premium Dark Mode Sidebar)
Untuk membuat dashboard terlihat sangat premium, kita akan merubah warna sidebar dari yang semula putih bersih menjadi **Dark Slate** kontras tinggi. Hal ini memisahkan area navigasi dengan area kerja secara visual.

Buka komponen Sidebar:
[resources/views/components/admin/sidebar.blade.php](file:///d:/laravel/DLH%20Tulungagung/dlh_Tulungagung/resources/views/components/admin/sidebar.blade.php)

Ubah class utama pada tag `<aside>` atau `<div>` sidebar:
1. Ganti background dari `bg-white` menjadi `bg-slate-900`.
2. Ganti warna teks menu non-aktif menjadi `text-slate-400 hover:text-white hover:bg-slate-800`.
3. Ganti warna teks menu aktif menjadi `bg-emerald-600 text-white shadow-sm shadow-emerald-600/20`.
4. Ganti logo dan pemisah (divider) agar menggunakan warna slate abu-abu (misal `border-slate-800`).

*(Catatan untuk AI Eksekutor: Pastikan menggunakan utility Tailwind CSS seperti `bg-slate-900`, `text-slate-400`, `hover:bg-slate-800` karena project ini menggunakan integrasi Tailwind CSS compiler).*

---

### LANGKAH 3: Sesuaikan Topbar / Header
Buka komponen Topbar:
[resources/views/components/admin/topbar.blade.php](file:///d:/laravel/DLH%20Tulungagung/dlh_Tulungagung/resources/views/components/admin/topbar.blade.php)

Sesuaikan warna komponen agar menyatu dengan nuansa Slate-50:
1. Pastikan background menggunakan `bg-white/80 backdrop-blur-md` agar efek kaca transparan terlihat elegan di atas latar belakang halaman `--background` yang baru.
2. Ganti border bawah agar menggunakan `border-slate-100` or `border-surface-border`.
3. Tombol pencarian (Search Input) menggunakan background `bg-slate-50 border-slate-200/80` agar terlihat lebih menyatu dibanding abu-abu bawaan.

---

### LANGKAH 4: Update Global UI Shadows & Hover Effects (resources/css/app.css)
Masih di file `resources/css/app.css`, cari bagian `@theme` (baris 9-47) dan perbarui nilai *shadow* agar bayangan terlihat sangat halus (soft shadow) layaknya dashboard modern:

```css
@theme {
    /* ... variabel warna lainnya ... */
    
    --shadow-soft: 0 10px 30px -10px rgba(15, 23, 42, 0.04), 0 1px 3px rgba(15, 23, 42, 0.02);
    --shadow-hover: 0 20px 40px -15px rgba(15, 23, 42, 0.08), 0 1px 10px rgba(15, 23, 42, 0.03);
}
```

---

## ⚡ PETUNJUK PENGUJIAN / VALIDASI KINERJA
Setelah AI Agent selesai menerapkan perubahan di atas:
1. Pastikan server dev `npm run dev` berjalan untuk me-recompile Tailwind CSS.
2. Buka Dashboard Admin dan periksa:
   - Apakah sidebar berwarna gelap (Slate 900) dengan efek hover yang lembut?
   - Apakah seluruh tombol primer (`btn-primary`) berubah dari hijau tua tua pudar menjadi Emerald Green segar (`#059669`)?
   - Apakah bayangan di bawah kartu data terlihat tipis, halus, dan elegan?
3. Pastikan tidak ada teks berwarna gelap yang tertimbun di atas background sidebar yang gelap (masalah kontras warna).
