<?php

namespace App\Exports;

use App\Models\lowongan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LowonganExport implements FromCollection, WithHeadings, WithMapping
{
    private $no = 0;
    public function collection(): Collection
    {
        return lowongan::select('posisi', 'deskripsi', 'lokasi')->get();

    }

    public function headings(): array
    {
        return [
            'No',
            'Posisi',
            'Deskripsi',
            'Lokasi'
        ];
    }

    public function map($lowongan): array
    {
        $this->no++;
        return [
            $this->no,
            $lowongan->posisi,
            $lowongan->deskripsi,
            $lowongan->lokasi
        ];
    }
}
