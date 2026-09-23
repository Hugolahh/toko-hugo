# Toko Hugo

Project ini adalah aplikasi web sederhana berbasis Laravel yang dibuat untuk kebutuhan tugas sekolah. Aplikasi ini dibuat untuk mengelola data utama pada sebuah toko/usaha dengan tampilan yang mudah dipahami.

## Deskripsi Project

Aplikasi ini berfungsi untuk mengelola beberapa informasi penting, seperti:

- Data produk
- Data karyawan
- Data layanan
- Data lowongan pekerjaan
- Informasi umum toko

Dengan aplikasi ini, proses pencatatan data menjadi lebih rapi, mudah diakses, dan lebih terstruktur.

## Fitur

- Manajemen data produk
- Manajemen data karyawan
- Manajemen data layanan
- Manajemen data lowongan
- Tampilan yang sederhana dan mudah digunakan
- Didesain dengan Laravel dan Tailwind CSS

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Tailwind CSS
- Vite

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

4. Buat file environment

    ```bash
    cp .env.example .env
    ```

5. Generate key aplikasi

    ```bash
    php artisan key:generate
    ```

6. Atur konfigurasi database di file `.env`

7. Jalankan migrasi database

    ```bash
    php artisan migrate
    ```

8. Jalankan aplikasi

    ```bash
    php artisan serve
    ```

## Cara Menjalankan

Buka browser dan akses link berikut:

```bash
http://localhost:8000
```

## Struktur Folder

- `app/` : logika aplikasi dan controller
- `database/` : migration dan seeder
- `resources/` : file tampilan dan frontend
- `routes/` : routing aplikasi
- `public/` : file publik

## Penutup

Project ini dibuat dengan tujuan pembelajaran dan masih bisa dikembangkan lebih lanjut sesuai kebutuhan. Semoga README ini cukup sederhana dan mudah dipahami.

## Lisensi

Project ini dibuat untuk keperluan pembelajaran dan dapat dikembangkan lebih lanjut sesuai kebutuhan.
