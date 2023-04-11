<?php

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

Route::get('/', function () {
    return view('Home.isi');
})->name('beranda');

Route::get('/UnitTKdanPG', function () {
    return view('Unit.unittk');
})->name('unittkdanpg');

Route::get('/BrosurTKdanPG', function () {
    return view('brosur.tkbrosur');
})->name('brosurtkdanpg');

Route::get('/TentangKami', function () {
    return view('tentangkami.about');
})->name('tentangkami');

Route::get('/BrigjendKatamso2', function () {
    return view('tentangkami.about1');
})->name('brigjendkatamso2');

Route::get('/FilosofiLogo', function () {
    return view('tentangkami.logo');
})->name('filosofilogo');

Route::get('/KupuKupuTransformationCenter', function () {
    return view('ktc.ktc');
})->name('kupukupu');

Route::get('/SBMPTN&SNMPTN', function () {
    return view('Prestasi.negeri');
})->name('lulusannegeri');

Route::get('/PrestasiAkademik', function () {
    return view('Prestasi.akademik');
})->name('akademik');

Route::get('/PrestasiNonAkademik', function () {
    return view('Prestasi.nonakademik');
})->name('nonakademik');

Route::get('/Kontak', function () {
    return view('kontak.kontak');
})->name('kontakbk');

// test
