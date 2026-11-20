<?php

namespace App\Exports;

use App\Models\lowongan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LowonganExport implements FromCollection, WithHeadings, WithMapping
{
    private int $no = 0;

    public function collection(): Collection
    {
        return lowongan::query()
            ->select('judul_lowongan', 'deskripsi', 'syarat', 'lokasi', 'gaji', 'status')
            ->orderBy('id')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Nomor',
            'Posisi',
            'Deskripsi',
            'Syarat',
            'Lokasi',
            'Gaji',
            'Status',
        ];
    }

    public function map(mixed $row): array
    {
        if (! $row instanceof lowongan) {
            throw new \UnexpectedValueException('Lowongan export rows must be lowongan models.');
        }

        $this->no++;

        return [
            $this->no,
            $row->judul_lowongan,
            $row->deskripsi,
            $row->syarat,
            $row->lokasi,
            $row->gaji,
            $row->status,
        ];
    }
}
