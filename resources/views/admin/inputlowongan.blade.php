<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('lowongan.store') }}" method="POST">
    @csrf
    <div>
        <label>Posisi:</label>
        <input type="text" name="judul_lowongan" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <input type="text" name="deskripsi" required>
    </div>
    <div>
        <label>Syarat:</label>
        <input type="text" name="syarat" required>
    </div>
    <div>
        <label>Lokasi:</label>
        <input type="text" name="lokasi" required>
    </div>
    <div>
        <label>Gaji:</label>
        <input type="text" name="gaji" required>
    </div>
    <div>
        <label>Status:</label>
        <input type="text" name="status" required>
    </div>
    <div>
        <label>Submit:</label>
        <input type="submit" value="Submit">
    </div>
    </form>
</body>
</html>