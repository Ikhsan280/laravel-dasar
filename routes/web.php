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
    return '<h1>Halo</h1>' .
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

Route::get('user/{name?}/{hobi?}', function ($nama = "Ikhsan", $hobi = "Gamers") {
    return "Nama saya <b>$nama</b><br>  " .
        "Hobi saya <b>$hobi</b>";
});

Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {
    if ($makanan == null && $minuman == null && $cemilan == null) {
        $s = "Anda Tidak Pesan, Silahkan Pulang";
    }
    if ($makanan != null) {
        $s = "Pesanan <br>"
            . "anda pesan makan :<b> $makanan </b> <br>";
    }
    if ($makanan != null && $minuman != null) {
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

Route::get('profile', function () {
    $nama = "Abdul";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    $nama = "Ikhsan Muhammad Ramadan";
    $umur = "17 Tahun";
    $alamat = "JL.Kopo Cirangrang";
    $sekolah = "SMK ASSALAAM";
    $kelas = "XII RPL 2";
    $hobi = "Bermain game";
    return view('biodata', compact('nama', 'umur', 'alamat', 'sekolah', 'kelas', 'hobi'));
});

route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Loren Ipsun 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Loren Ipsun 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Loren Ipsun 3', 'content' => 'Content Ketiga'],
    ];

    return view('blog', compact('posts'));
});

route::get('data
', function () {
    $pilih = [
        ['id' => 1,
            'name' => 'Ujang Ubed',
            'username' => 'ujang_Ubed',
            'email' => 'ujangubed@gmail.com',
            'alamat' => 'Bandung',
            'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Fisika',
                'mapel3' => 'Kimia'],
        ],

        ['id' => 2,
            'name' => 'Ujang Codet',
            'username' => 'Ujang_codet',
            'email' => 'ujangcodet@gmail.com',
            'alamat' => 'Jakarta',
            'mapel' => [
                'mapel1' => 'B.Indo',
                'mapel2' => 'B.Jepang',
                'mapel3' => 'B.Inggris'],
        ],

        ['id' => 3,
            'name' => 'Ujang bacok',
            'username' => 'ujang_bacok',
            'email' => 'ujangbacok@gmail.com',
            'alamat' => 'Solo',
            'mapel' => [
                'mapel1' => 'Kimia',
                'mapel2' => 'Fisika',
                'mapel3' => 'Bahsa Indonesia'],
        ],
        ['id' => 4,
            'name' => 'ujang Bedog',
            'username' => 'Ujang_Bedog',
            'email' => 'ujangbedog@gmail.com',
            'alamat' => 'Tasik',
            'mapel' => [
                'mapel1' => 'IPA',
                'mapel2' => 'IPS',
                'mapel3' => 'B.Ingris'],
        ],
        ['id' => 5,
            'name' => 'Ujang Tato',
            'username' => 'Ujang Tato',
            'email' => 'ujangtato@gmail.com',
            'alamat' => 'Aceh',
            'mapel' => [
                'mapel1' => 'Sejarah',
                'mapel2' => 'Ipa',
                'mapel3' => 'Olahraga'],
        ],
    ];
    return view('data', compact('pilih'));
});

Route::get('/cari', function () {
    $query = App\Models\Biodatas::all();
    return view('biodatas', compact('query'));

    return $query;
});

Route::get('/test-post', function () {
    $query = App\Models\Post::all();

    return view('test-post', compact('query'));
});
