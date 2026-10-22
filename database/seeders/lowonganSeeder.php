<?php

namespace Database\Seeders;

use App\Models\lowongan;
use Illuminate\Database\Seeder;

class lowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lowongans = [
            [
                'judul_lowongan' => 'Backend Developer',
                'deskripsi' => 'Merancang dan mengembangkan API serta layanan backend, mengintegrasikan sistem, dan memastikan performa serta keamanan aplikasi.',
                'syarat' => 'Menguasai PHP atau Node.js, REST API, database relasional, Git, dan dasar keamanan aplikasi. Pengalaman Laravel menjadi nilai tambah.',
                'lokasi' => 'Banjarbaru',
                'gaji' => 'Rp 6.000.000 - Rp 10.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'Frontend Developer',
                'deskripsi' => 'Membangun antarmuka web yang responsif dan mudah digunakan, serta mengintegrasikan frontend dengan API backend.',
                'syarat' => 'Menguasai HTML, CSS, JavaScript, Git, dan React atau Vue. Memahami responsive design dan dasar aksesibilitas.',
                'lokasi' => 'Banjarbaru / Hybrid',
                'gaji' => 'Rp 5.500.000 - Rp 9.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'UI/UX Designer',
                'deskripsi' => 'Melakukan riset kebutuhan pengguna, menyusun user flow dan wireframe, serta membuat prototipe dan desain antarmuka.',
                'syarat' => 'Menguasai Figma, memahami user research, usability testing, design system, dan mampu menyertakan portofolio desain.',
                'lokasi' => 'Banjarbaru / Hybrid',
                'gaji' => 'Rp 5.000.000 - Rp 8.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'Customer Support IT',
                'deskripsi' => 'Membantu pengguna mengatasi kendala aplikasi dan perangkat, mencatat tiket bantuan, serta meneruskan masalah teknis ke tim terkait.',
                'syarat' => 'Komunikatif, mampu menganalisis masalah dasar komputer dan jaringan, serta terbiasa membuat dokumentasi atau laporan.',
                'lokasi' => 'Banjarbaru',
                'gaji' => 'Rp 4.000.000 - Rp 6.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'DevOps Engineer',
                'deskripsi' => 'Mengelola pipeline CI/CD, otomasi deployment, infrastruktur cloud, serta pemantauan ketersediaan layanan.',
                'syarat' => 'Menguasai Linux, Docker, Git, CI/CD, dan dasar cloud. Pengalaman dengan Kubernetes atau Terraform menjadi nilai tambah.',
                'lokasi' => 'Banjarbaru / Remote',
                'gaji' => 'Rp 8.000.000 - Rp 14.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'System Analyst',
                'deskripsi' => 'Menganalisis proses bisnis dan kebutuhan pengguna, menyusun spesifikasi sistem, serta menjembatani komunikasi antara pengguna dan tim pengembang.',
                'syarat' => 'Mampu menyusun dokumentasi kebutuhan dan diagram proses, berpikir analitis, serta memiliki kemampuan komunikasi yang baik.',
                'lokasi' => 'Banjarbaru / Hybrid',
                'gaji' => 'Rp 7.000.000 - Rp 11.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'Database Analyst',
                'deskripsi' => 'Menganalisis kebutuhan data, merancang struktur database, menjaga kualitas data, dan membantu optimasi query serta laporan.',
                'syarat' => 'Menguasai SQL dan database relasional, memahami normalisasi dan pemodelan data. Pengalaman PostgreSQL atau MySQL diutamakan.',
                'lokasi' => 'Banjarbaru',
                'gaji' => 'Rp 6.500.000 - Rp 10.000.000',
                'status' => 'Buka',
            ],
            [
                'judul_lowongan' => 'QA Engineer',
                'deskripsi' => 'Menyusun skenario pengujian, melakukan pengujian manual dan otomatis, mencatat bug, serta berkolaborasi dengan tim pengembang.',
                'syarat' => 'Memahami software testing dan API testing, teliti dalam mendokumentasikan temuan, serta mengenal Selenium atau Playwright menjadi nilai tambah.',
                'lokasi' => 'Banjarbaru / Hybrid',
                'gaji' => 'Rp 5.500.000 - Rp 9.000.000',
                'status' => 'Buka',
            ],
        ];

        foreach ($lowongans as $dataLowongan) {
            lowongan::updateOrCreate(
                ['judul_lowongan' => $dataLowongan['judul_lowongan']],
                $dataLowongan
            );
        }
    }
}
