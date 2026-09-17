<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan'; // Menentukan nama tabel yang digunakan oleh model
    protected $fillable = ['nama_karyawan', 'jk', 'alamat']; // Menentukan kolom-kolom yang dapat diisi
    public $timestamps = false; // Menonaktifkan kolom created_at dan updated_at
}
