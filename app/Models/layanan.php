<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table = 'layanans';
    protected $fillable = ['nama_layanan', 'harga', 'deskripsi'];
    public $timestamps = false;
}
