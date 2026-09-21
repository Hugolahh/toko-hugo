<?php

namespace Database\Seeders;

use app\Models\lowongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'judul_lowongan' => 'Frontend Developer',
            'deskripsi' => 'Mengembangkan antarmuka web menggunakan Tailwind CSS dan Vue/React.',
            'syarat' => 'Menguasai HTML, CSS, JavaScript, dan Git.',
            'lokasi' => 'Banjarbaru',
            'gaji' => '5000000',
            'status' => 'Buka',
        ],
        [
            'judul_lowongan' => 'backend test 2',
            'deskripsi' => 'test 2',
            'syarat' => 'test 2',
            'lokasi' => 'test 2',
            'gaji' => 'test 200000',
            'status' => 'test buka tutup',
        ],
    ];
    foreach ($lowongans as $lowongan) {
        \App\Models\lowongan::create($lowongan);
        }
    }
}
