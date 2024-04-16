<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortofolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/product', function () {
    return view('pages.product');
});

#Profile Brand
Route::get('/our-journey', function () {
    return view('pages.brand.journey');
});

Route::get('/reseller', function () {
    return view('pages.brand.reseller');
});

Route::get('/visi-misi', function () {
    return view('pages.brand.visi-misi');
});

Route::get('/our-founder', function () {
    return view('pages.brand.founder');
});

Route::get('/struktur-organisasi', function () {
    return view('pages.brand.organisasi');
});

Route::get('/road-map', function () {
    return view('pages.brand.road-map');
});

Route::get('/cycle', function () {
    return view('pages.brand.cycle');
});

Route::get('/media-coverage', function () {
    return view('pages.brand.media');
});

Route::get('/media-coverage/details', function () {
    return view('pages.brand.media-detail');
});

#gallery

Route::get('/gallery/testimoni', function () {
    return view('pages.gallery.testimoni');
});

#Informasi
Route::get('/faq', function () {
    return view('pages.informasi.akun');
})->name('faq');


Route::get('/kontak-kami', function () {
    return view('pages.informasi.kontak');
})->name('kontak-kami');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/client', function () {
        return view('pages.admin.client');
    })->name('message');

    Route::get('/dashboard/portofolio', function () {
        return view('pages.admin.portofolio');
    })->name('admin-portofolio');
});
