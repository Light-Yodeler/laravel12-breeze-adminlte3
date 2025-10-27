# Laravel 12 + Breeze + AdminLTE v3 Starter

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?logo=laravel)
![AdminLTE](https://img.shields.io/badge/AdminLTE-v3-3C8DBC?logo=bootstrap)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)

Starter kit siap pakai untuk membangun aplikasi web dengan **Laravel 12**, autentikasi berbasis **Breeze (Blade)**, dan tampilan admin profesional menggunakan **AdminLTE v3**.

---

## 📌 Fitur

- ✅ Laravel 12 (dengan PHP 8.2+)
- ✅ Autentikasi lengkap via **Laravel Breeze**:
  - Login / Register
  - Email Verification
  - Password Reset
  - Remember Me
- ✅ Integrasi **AdminLTE v3** (versi 3.2+) dengan tema default
- ✅ Layout admin responsif & mobile-friendly
- ✅ Halaman dashboard contoh setelah login
- ✅ Struktur Blade yang rapi (`layouts`, `partials`, `components`)
- ✅ Mendukung semua fitur Laravel (queues, mail, cache, dll)

---

## 🚀 Instalasi Cepat

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & npm (untuk asset compilation)
- Database (MySQL/PostgreSQL/SQLite)

### Langkah-langkah

```bash
# 1. Clone repositori
git clone https://github.com/Light-Yodeler/laravel12-breeze-adminlte3.git
cd laravel12-breeze-adminlte3

# 2. Install dependensi PHP
composer install

# 3. Salin .env dan generate key aplikasi
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database di file .env
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=your_db
# DB_USERNAME=your_user
# DB_PASSWORD=your_pass

# 5. Jalankan migrasi (dan seeder jika ada)
php artisan migrate --seed

# 6. Install & compile asset frontend (AdminLTE + Bootstrap + JS)
npm install
npm run build

# 7. Jalankan server lokal
php artisan serve
```
