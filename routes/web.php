<?php

use App\Http\Controllers\MainApp\AboutController;
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

Route::get('/BrosurTKdanPG', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('brosur.tkbrosur');
})->name('brosurtkdanpg');

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
