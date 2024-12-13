<?php

use App\Livewire\Berita\BeritaIndex;
use App\Livewire\Kategori\KategoriIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/kategori', KategoriIndex::class)->name('kategori');
Route::get('/berita', BeritaIndex::class)->name('berita');
