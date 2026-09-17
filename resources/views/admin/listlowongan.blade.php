<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Lowongan</title>
</head>
<body>
    <a href="{{ route('lowongan.create') }}">Add lowongan</a>
    
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Posisi</th>
                <th>Deskripsi</th>
                <th>Syarat</th>
                <th>Lokasi</th>
                <th>Gaji</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowongans as $lowongan)
            <tr>
                <td>{{ $lowongan->id }}</td>
                <td>{{ $lowongan->judul_lowongan }}</td>
                <td>{{ $lowongan->deskripsi }}</td>
                <td>{{ $lowongan->syarat }}</td>
                <td>{{ $lowongan->lokasi }}</td>
                <td>{{ $lowongan->gaji }}</td>
                <td>{{ $lowongan->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>