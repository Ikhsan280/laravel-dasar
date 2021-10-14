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
    return view('welcome');
});


route::get('/about', function () {
    return '<h1>Halo</h1>'.
    'Selamat Datang di webapp saya <br>'
    . 'Laravel, emang keren.';
});

Route::get('profil', function () {
    return view('ikhsan/profil');
});

Route::get('hobi', function () {
    return view('ikhsan/hobi');
});

Route::get('suka', function () {
    return view('ikhsan/kesukaan');
});

Route::get('tentang', function () {
    return view('ikhsan/tentang');
});

Route::get('tujuan', function () {
    return view('ikhsan/tujuan');
});

Route::get('index', function () {
    return view('ikhsan/index');
});

Route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b> $hal </b>";
});

Route::get('user/{name?}', function ($nama = "Ikhsan") {
    return "Nama saya <b>$nama</b>";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null,$minuman = null,$cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $s = "Anda Tidak Pesan, Silahkan Pulang";
    }
            if ($makanan != null ) {
            $s = "Pesanan <br>"
            . "anda pesan makan :<b> $makanan </b> <br>";
        }
        if ($makanan != null && $minuman != null ) {
            $s = "Pesanan <br>"
            . "anda pesan makan :<b> $makanan </b><br>"
            . "anda pesan minum :<b> $minuman </b><br>";
        }

        if ($makanan != null && $minuman != null && $cemilan != null) {
            $s = "Pesanan <br>"
            . "anda pesan makan : <b>$makanan </b><br>"
            . "anda pesan minum : <b>$minuman </b><br>"
            . "anda pesan cemilan : <b>$cemilan</b>";
}

    return "$s";
});
