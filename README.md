# Toko Hugo

Aplikasi web yang dikembangkan menggunakan Laravel untuk mendukung kebutuhan pengelolaan data pada sebuah toko atau usaha kecil. Project ini dibuat sebagai tugas sekolah dengan fokus pada pemanfaatan teknologi informasi untuk mengelola data secara lebih terstruktur dan efisien.

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Tailwind CSS
- Vite
- Composer

## Persyaratan Sistem

Sebelum menjalankan aplikasi, pastikan perangkat Anda sudah memiliki:

- PHP 8.x
- Composer
- MySQL atau database yang kompatibel
- Node.js dan npm
- Web browser

## Cara Install

1. Clone repository ini

    ```bash
    git clone <url-repository>
    cd toko-hugo
    ```

2. Install dependency PHP

    ```bash
    composer install
    ```

3. Install dependency frontend

    ```bash
    npm install
    ```

4. Salin file environment

    ```bash
    cp .env.example .env
    ```

5. Generate application key

    ```bash
    php artisan key:generate
    ```

6. Konfigurasikan database pada file `.env`

7. Jalankan migrasi database

    ```bash
    php artisan migrate
    ```

8. Jalankan aplikasi

    ```bash
    php artisan serve
    ```

9. Jalankan frontend development server

    ```bash
    npm run dev
    ```

## Cara Menjalankan

Setelah server berjalan, buka browser dan akses:

```bash
http://localhost:8000
```

## Struktur Folder

- `app/` : logika aplikasi dan controller
- `database/` : migration dan seeder
- `resources/` : file tampilan dan frontend
- `routes/` : routing aplikasi
- `public/` : file publik yang diakses langsung oleh browser

## Status Proyek

Proyek ini masih dalam tahap pembelajaran dan pengembangan lebih lanjut sesuai kebutuhan. Diharapkan dapat menjadi contoh aplikasi sederhana yang bermanfaat untuk tugas sekolah maupun portofolio proyek.
