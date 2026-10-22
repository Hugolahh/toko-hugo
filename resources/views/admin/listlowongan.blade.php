<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Lowongan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div>
    <header>
        @if (Route::has('login'))
            <nav style="display: flex; justify-content: flex-end; gap: 10px; padding: 10px;">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        style="background-color: #000000; color: #ffffff; border-radius: 8px; padding: 8px 20px; text-decoration: none; font-size: 14px; font-weight: 500; display: inline-block;"
                    >
                        Dashboard
                    </a>
                    @else
                    <a
                        href="{{ route('login') }}"
                        style="background-color: #000000; color: #ffffff; border-radius: 8px; padding: 8px 20px; text-decoration: none; font-size: 14px; font-weight: 500; display: inline-block;"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            style="background-color: #000000; color: #ffffff; border-radius: 8px; padding: 8px 20px; text-decoration: none; font-size: 14px; font-weight: 500; display: inline-block;"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
</div>

    <a href="{{ route('lowongan.create') }}" class="underline">Add lowongan</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif


    <table style="width: 95%; text-align: center; border-collapse: collapse; margin: 0 auto;">
        <thead>
            <tr>
                <th style="border: 1px solid black;">Nomor</th>
                <th style="border: 1px solid black;">Posisi</th>
                <th style="border: 1px solid black;">Deskripsi</th>
                <th style="border: 1px solid black;">Syarat</th>
                <th style="border: 1px solid black;">Lokasi</th>
                <th style="border: 1px solid black;">Gaji</th>
                <th style="border: 1px solid black;">Status</th>
                <th style="border: 1px solid black;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowongans as $lowongan)
            <tr>
                <td style="border: 1px solid black;">{{ $lowongan->id }}</td>
                <td style="border: 1px solid black;">{{ $lowongan->judul_lowongan }}</td>
                <td style="border: 1px solid black;">{{ $lowongan->deskripsi }}</td>
                <td style="border: 1px solid black;">{{ $lowongan->syarat }}</td>
                <td style="border: 1px solid black;">{{ $lowongan->lokasi }}</td>
                <td style="border: 1px solid black;">{{ $lowongan->gaji }}</td>
                <td style="border: 1px solid black;">{{ $lowongan->status }}</td>
                <td style="border: 1px solid black;">
                <a href="{{ route('lowongan.show', $lowongan->id) }}" class="underline">Detail</a>
                <a href="{{ route('lowongan.edit', $lowongan->id) }}" class="underline">Edit</a>
                <form action="{{ route('lowongan.destroy', $lowongan->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lowongan?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-link" style="color:#d02455">Hapus</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

