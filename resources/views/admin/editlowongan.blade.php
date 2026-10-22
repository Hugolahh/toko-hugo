<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lowongan</title>
</head>
<body>
    <h1>Edit Lowongan</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lowongan.update', $lowongan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="judul_lowongan">Posisi:</label>
            <input type="text" id="judul_lowongan" name="judul_lowongan" value="{{ old('judul_lowongan', $lowongan->judul_lowongan) }}" required>
        </div>
        <div>
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" id="deskripsi" name="deskripsi" value="{{ old('deskripsi', $lowongan->deskripsi) }}" required>
        </div>
        <div>
            <label for="syarat">Syarat:</label>
            <input type="text" id="syarat" name="syarat" value="{{ old('syarat', $lowongan->syarat) }}" required>
        </div>
        <div>
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi', $lowongan->lokasi) }}" required>
        </div>
        <div>
            <label for="gaji">Gaji:</label>
            <input type="text" id="gaji" name="gaji" value="{{ old('gaji', $lowongan->gaji) }}" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ old('status', $lowongan->status) }}" required>
        </div>
        <div>
            <button type="submit">Simpan Perubahan</button>
            <button type="button">
                <a href="{{ route('lowongan.index', $lowongan->id) }}" style="text-decoration: none;">Batal</a>
            </button>
        </div>
    </form>
</body>
</html>