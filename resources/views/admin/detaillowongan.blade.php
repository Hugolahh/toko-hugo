<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Lowongan</title>
</head>
<body>
    <h1>Detail Lowongan</h1>

    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $lowongan->id }}</td>
            </tr>
            <tr>
                <th>Posisi</th>
                <td>{{ $lowongan->judul_lowongan }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $lowongan->deskripsi }}</td>
            </tr>
            <tr>
                <th>Syarat</th>
                <td>{{ $lowongan->syarat }}</td>
            </tr>
            <tr>
                <th>Lokasi</th>
                <td>{{ $lowongan->lokasi }}</td>
            </tr>
            <tr>
                <th>Gaji</th>
                <td>{{ $lowongan->gaji }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $lowongan->status }}</td>
            </tr>
        </tbody>
    </table>

    <div>
        <button>
            <a href="{{ route('lowongan.index') }}" style="text-decoration: none;" style="text-decoration: none;">Kembali ke Daftar</a>
        </button>
        <button>
            <a href="{{ route('lowongan.edit', $lowongan->id) }}" style="text-decoration: none;" style="text-decoration: none;">Edit Lowongan</a>
        </button>
    </div>
</body>
</html>