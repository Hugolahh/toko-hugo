<?php

use App\Exports\LowonganExport;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

// PDF Export Route
Route::get('pdflowongan', [PDFController::class, 'generatePDF'])
    ->name('lowongan.pdf');

// Excel Export Route
Route::get('excellowongan', function () {
    return Excel::download(new LowonganExport, 'data-lowongan.xlsx');
})->name('lowongan.excel');

Route::resource('lowongan', LowonganController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
