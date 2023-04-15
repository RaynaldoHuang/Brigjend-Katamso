<?php

use App\Http\Controllers\Admin\AdminAchievementController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminUnitController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrosurController as AdminBrosurController;
use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MainApp\AboutController;
use App\Http\Controllers\MainApp\BrosurController;
use App\Http\Controllers\MainApp\ContactController;
use App\Http\Controllers\MainApp\HomeController;
use App\Http\Controllers\MainApp\PrestasiController;
use App\Http\Controllers\MainApp\UnitController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('beranda');

Route::get('/UnitTKdanPG', [UnitController::class, 'unitTkDanPg'])->name('unittkdanpg');

Route::get('/BrosurTKdanPG', [BrosurController::class, 'tkDanPg'])->name('brosurtkdanpg');

Route::get('/TentangKami', [AboutController::class, 'index'])->name('tentangkami');

Route::get('/BrigjendKatamso2', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('tentangkami.about1');
})->name('brigjendkatamso2');

Route::get('/FilosofiLogo', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('tentangkami.logo');
})->name('filosofilogo');

Route::get('/KupuKupuTransformationCenter', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('ktc.ktc');
})->name('kupukupu');

Route::get('/SBMPTN&SNMPTN', [PrestasiController::class, 'sbmptn'])->name('lulusannegeri');

Route::get('/PrestasiAkademik', [PrestasiController::class, 'akademik'])->name('akademik');

Route::get('/PrestasiNonAkademik', [PrestasiController::class, 'nonAkademik'])->name('nonakademik');

Route::get('/Kontak', [ContactController::class, 'index'])->name('kontakbk');


// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('admin.forgot-password');
    Route::get('reset-password', [AuthController::class, 'resetPassword'])->name('admin.reset-password');

    // Dashboard Main
    Route::get('dashboard', [DashboardController::class, 'main'])->name('admin.dashboard');

    // Carousel
    Route::get('carousel', [CarouselController::class, 'view'])->name('admin.carousel');

    Route::get('carousel/create', [CarouselController::class, 'create'])->name('admin.carousel.create');
    Route::post('carousel/store', [CarouselController::class, 'store'])->name('admin.carousel.store');

    Route::get('carousel/{id}', [CarouselController::class, 'edit'])->name('admin.carousel.edit');
    Route::put('carouse/{id}', [CarouselController::class, 'update'])->name('admin.carousel.update');

    Route::post('carousel', [CarouselController::class, 'destroy'])->name('admin.carousel.destroy');

    // Admin
    Route::get('access', [AdminController::class, 'index'])->name('admin.access');

    Route::get('access/create', [AdminController::class, 'create'])->name('admin.access.create');
    Route::post('access/store', [AdminController::class, 'store'])->name('admin.access.store');

    Route::get('access/{id}', [AdminController::class, 'edit'])->name('admin.access.edit');
    Route::put('access/{id}', [AdminController::class, 'update'])->name('admin.access.update');
    Route::post('access', [AdminController::class, 'changePassword'])->name('admin.access.change-password');

    // Contact
    Route::get('contact', [AdminContactController::class, 'view'])->name('admin.contact');

    Route::get('contact/create', [AdminContactController::class, 'create'])->name('admin.contact.create');
    Route::post('contact/store', [AdminContactController::class, 'store'])->name('admin.contact.store');

    Route::get('contact/{id}', [AdminContactController::class, 'edit'])->name('admin.contact.edit');
    Route::put('contact/{id}', [AdminContactController::class, 'update'])->name('admin.contact.update');

    Route::post('contact', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');

    // Brosur
    Route::get('brosur', [AdminBrosurController::class, 'view'])->name('admin.brosur');

    Route::get('brosur/create', [AdminBrosurController::class, 'create'])->name('admin.brosur.create');
    Route::post('brosur/store', [AdminBrosurController::class, 'store'])->name('admin.brosur.store');

    Route::get('brosur/{unitId}', [AdminBrosurController::class, 'edit'])->name('admin.brosur.edit');
    Route::put('brosur/{unitId}', [AdminBrosurController::class, 'update'])->name('admin.brosur.update');

    Route::post('brosur', [AdminBrosurController::class, 'destroy'])->name('admin.brosur.destroy');

    // Achievements
    Route::get('achievement', [AdminAchievementController::class, 'view'])->name('admin.achievement');

    Route::get('achievement/create', [AdminAchievementController::class, 'create'])->name('admin.achievement.create');
    Route::post('achievement/store', [AdminAchievementController::class, 'store'])->name('admin.achievement.store');

    Route::get('achievement/{id}', [AdminAchievementController::class, 'edit'])->name('admin.achievement.edit');
    Route::put('achievement/{id}', [AdminAchievementController::class, 'update'])->name('admin.achievement.update');

    Route::post('achievement', [AdminAchievementController::class, 'destroy'])->name('admin.achievement.destroy');

    // Berita & Kegiatan
    Route::get('news', [AdminNewsController::class, 'view'])->name('admin.news');

    Route::get('news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::post('news/store', [AdminNewsController::class, 'store'])->name('admin.news.store');

    Route::get('news/{id}', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('news/{id}', [AdminNewsController::class, 'update'])->name('admin.news.update');

    Route::post('news', [AdminNewsController::class, 'destroy'])->name('admin.news.destroy');

    // Units
    Route::get('units', [AdminUnitController::class, 'view'])->name('admin.units');
});
