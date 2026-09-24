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

    <a href="{{ route('lowongan.create') }}">Add lowongan</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif


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
                <th>Aksi</th>
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
                <td>
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

