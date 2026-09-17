<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;

Route::resource('lowongan', LowonganController::class);
Route::resource('welcome', LowonganController::class);