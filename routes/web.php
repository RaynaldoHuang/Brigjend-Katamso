<?php

use App\Http\Controllers\MainApp\ContactController;
use App\Http\Controllers\MainApp\HomeController;
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

Route::get('/UnitTKdanPG', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('Unit.unittk');
})->name('unittkdanpg');

Route::get('/BrosurTKdanPG', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('brosur.tkbrosur');
})->name('brosurtkdanpg');

Route::get('/TentangKami', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('tentangkami.about');
})->name('tentangkami');

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

Route::get('/SBMPTN&SNMPTN', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('Prestasi.negeri');
})->name('lulusannegeri');

Route::get('/PrestasiAkademik', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('Prestasi.akademik');
})->name('akademik');

Route::get('/PrestasiNonAkademik', function () {
    $contact = Contact::all();
    view()->share('contacts', $contact);

    return view('Prestasi.nonakademik');
})->name('nonakademik');

Route::get('/Kontak', [ContactController::class, 'index'])->name('kontakbk');
