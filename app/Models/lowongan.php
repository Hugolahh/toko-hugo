<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    protected $table = 'lowongans';
    protected $fillable = ['judul_lowongan','deskripsi','syarat','lokasi','gaji','status',];
    public $timestamps = false;
}
