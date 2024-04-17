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
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/client', function () {
        return view('pages.admin.client');
    })->name('message');

    Route::get('/admin/portofolio', function () {
        return view('pages.admin.portofolio');
    })->name('admin-portofolio');


    Route::get('/admin/founder', function () {
        return view('pages.admin.founder');
    })->name('admin-founder');

    Route::get('/admin/struktur-organisasi', function () {
        return view('pages.admin.struktur');
    })->name('admin-struktur');

    Route::get('/admin/corporate-responsibility', function () {
        return view('pages.admin.responsibility');
    })->name('admin-responsibility');

    Route::get('/admin/market', function () {
        return view('pages.admin.market');
    })->name('admin-market');

    Route::get('/admin/event', function () {
        return view('pages.admin.event');
    })->name('admin-event');

    Route::get('/admin/testimonial', function () {
        return view('pages.admin.testimonial');
    })->name('admin-testimonial');

    Route::get('/admin/kontak', function () {
        return view('pages.admin.kontak');
    })->name('admin-kontak');




    #belum

    Route::get('/admin/media-coverage', function () {
        return view('pages.admin.media-coverage');
    })->name('admin-media-coverage');



    Route::get('/admin/lifestyle', function () {
        return view('pages.admin.lifestyle');
    })->name('admin-portofolio');
});
