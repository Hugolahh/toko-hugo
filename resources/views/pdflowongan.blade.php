<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Lowongan Kerja</title>
    <style>
        @page {
            margin: 20px;
        }

        body {
            color: #1f2937;
            font-family: DejaVu Sans, sans-serif;
            font-size: 7pt;
            line-height: 1.2;
        }

        h1 {
            font-size: 15pt;
            margin: 0 0 3px;
        }

        .generated {
            color: #64748b;
            font-size: 7pt;
            margin-bottom: 10px;
        }

        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #cbd5e1;
            overflow-wrap: break-word;
            padding: 4px;
            text-align: left;
            vertical-align: top;
        }

        th {
            font-size: 7pt;
        }

        tr {
            page-break-inside: avoid;
        }
    </style>
</head>
<body>
    <h1>Daftar Lowongan Kerja</h1>
    <div class="generated">Dicetak pada {{ now()->format('d-m-Y') }}</div>

    <table>
        <thead>
            <tr>
                <th style="width: 4%;">ID</th>
                <th style="width: 14%;">Posisi</th>
                <th style="width: 25%;">Deskripsi</th>
                <th style="width: 27%;">Syarat</th>
                <th style="width: 10%;">Lokasi</th>
                <th style="width: 13%;">Gaji</th>
                <th style="width: 7%;">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lowongans as $lowongan)
                <tr>
                    <td>{{ $lowongan->id }}</td>
                    <td>{{ $lowongan->judul_lowongan }}</td>
                    <td>{{ $lowongan->deskripsi }}</td>
                    <td>{{ $lowongan->syarat }}</td>
                    <td>{{ $lowongan->lokasi }}</td>
                    <td>{{ $lowongan->gaji }}</td>
                    <td>{{ $lowongan->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center;">Belum ada lowongan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
