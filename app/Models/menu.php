<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menus';
    public $fillable = ['nama_menu', 'harga', 'gambar'];
    public $timestamps = false;
}
