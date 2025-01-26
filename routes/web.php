<?php

use App\Livewire\Berita\BeritaCreate;
use App\Livewire\Berita\BeritaEdit;
use App\Livewire\Berita\BeritaIndex;
use App\Livewire\Kategori\KategoriIndex;
use App\Livewire\Menu\MenuCreate;
use App\Livewire\Menu\MenuIndex;
use App\Livewire\SubKategori\SubKategoriIndex;
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


    Route::get('/subkategori/{kategori_id}', SubKategoriIndex::class)->name('subkategori');
    Route::get('/kategori', KategoriIndex::class)->name('kategori');
    Route::get('/kategori', KategoriIndex::class)->name('kategori');
    Route::get('/berita', BeritaIndex::class)->name('berita');
    Route::get('/berita/create', BeritaCreate::class)->name('berita.create');
    Route::get('/berita/{berita}/edit', BeritaEdit::class)->name('berita.edit');

    Route::get('/menu', MenuIndex::class)->name('menu');
    // Route::get('/menu/create', MenuCreate::class)->name('menu.create');

    // Laravel File Manager routes

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});