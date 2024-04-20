<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\RoadMapController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\VisiMisiController;

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
})->name('home');;

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/product', function () {
    return view('pages.product');
});


#Blog
Route::get('/blog/moment', function () {
    return view('pages.blog.moment');
});

Route::get('/blog/wastra-nusantara', function () {
    return view('pages.blog.wastra-nusantara');
});

Route::get('/blog/wastra-nusantara/details', function () {
    return view('pages.blog.wastra-details');
});

Route::get('/blog/lifestyle', function () {
    return view('pages.blog.lifestyle');
});


Route::get('/blog/lifestyle/details', function () {
    return view('pages.blog.lifestyle-details');
});




#Profile Brand
Route::get('/our-journey', function () {
    return view('pages.brand.journey');
});

// Route::get('/reseller', function () {
//     return view('pages.brand.reseller');
// });


Route::get('/our-journey', [JourneyController::class, 'index'])->name('journey');

#di juara belum
Route::get('/reseller', [ResellerController::class, 'index'])->name('reseller');

Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi');

Route::get('/road-map', [RoadMapController::class, 'index'])->name('road-map');

Route::get('/cycle', [CycleController::class, 'index'])->name('cycle');

Route::get('/our-founder', [FounderController::class, 'index'])->name('founder');

Route::get('/struktur-organisasi', [StrukturController::class, 'index'])->name('struktur');



Route::get('/media-coverage', [MediaController::class, 'index'])->name('media');

Route::get('/media-coverage/{id}', [MediaController::class, 'show'])->name('media-details');

#gallery


Route::get('/gallery/marketing-activity', [MarketingController::class, 'index'])->name('marketing');
Route::get('/gallery/marketing-activity/{id}', [MarketingController::class, 'show'])->name('marketing-details');

// Route::get('/gallery/marketing-activity/{id}', function () {
//     return view('pages.gallery.marketing-activity');
// });

// Route::get('/gallery/marketing-activity/details', function () {
//     return view('pages.gallery.marketing-details');
// });




Route::get('/gallery/hall-of-fame', function () {
    return view('pages.gallery.hall-of-fame');
});

Route::get('/gallery/hall-of-fame/details', function () {
    return view('pages.gallery.hall-details');
});



Route::get('/gallery/corporate-responsibility', function () {
    return view('pages.gallery.corporate-responsibility');
});

Route::get('/gallery/corporate-responsibility/details', function () {
    return view('pages.gallery.corporate-details');
});





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
    #user biasa
    Route::get('/user/order', function () {
        return view('pages.user.order');
    })->name('dashboard');

    Route::get('/user/riwayat-order', function () {
        return view('pages.user.riwayat-order');
    })->name('dashboard');

    Route::get('/user/whislist', function () {
        return view('pages.user.whislist');
    })->name('dashboard');

    Route::get('/user/akun', function () {
        return view('pages.user.akun');
    })->name('dashboard');

    Route::get('/user/alamat', function () {
        return view('pages.user.akun');
    })->name('dashboard');



    #admin
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/client', function () {
        return view('pages.admin.client');
    })->name('message');

    Route::get('/admin/portofolio', function () {
        return view('pages.admin.portofolio');
    })->name('admin-portofolio');


    #belum perlu rombak db
    Route::get('/admin/series', function () {
        return view('pages.admin.series');
    })->name('admin-series');


    Route::get('/admin/category', function () {
        return view('pages.admin.category');
    })->name('admin-category');

    Route::get('/admin/sub-category', function () {
        return view('pages.admin.sub-category');
    })->name('admin-sub-category');


    #belum lengkap
    Route::get('/admin/customer', function () {
        return view('pages.admin.customer');
    })->name('admin-series');

    Route::get('/admin/journey', function () {
        return view('pages.admin.journey');
    })->name('admin-journey');

    # visi misi belum bisa nampung array
    Route::get('/admin/visi-misi', function () {
        return view('pages.admin.visi-misi');
    })->name('admin-visi-misi');


    # roadmap belum bisa nampung array
    Route::get('/admin/road-map', function () {
        return view('pages.admin.roadmap');
    })->name('admin-roadmap');

    Route::get('/admin/cycle', function () {
        return view('pages.admin.cycle');
    })->name('admin-cycle');

    # founder belum bisa nampung array
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


    Route::get('/admin/reseller', function () {
        return view('pages.admin.reseller');
    })->name('admin-reseller');


    #belum

    Route::get('/admin/media-coverage', function () {
        return view('pages.admin.media');
    })->name('admin-media-coverage');



    Route::get('/admin/lifestyle', function () {
        return view('pages.admin.lifestyle');
    })->name('admin-lifestyle');
});
