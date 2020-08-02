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

Route::get('/', 'Main\MainController@index');


Route::get('/detailprivate', function () {
    return view('detailprivate');
});

Route::get('/detailpaket', function () {
    return view('detailpaket');
});

Route::get('/detailartikel', function () {
    return view('detailartikel');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/payment', function () {
    return view('payment');
});
//ADMIN

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/privat', function () {
    return view('admin.privat.privat');
});

Route::get('/admin/tambahprivat', function () {
    return view('admin.privat.tambahprivat');
});

Route::get('/admin/paket', function () {
    return view('admin.paket.paket');
});

Route::get('/admin/tambahpaket', function () {
    return view('admin.paket.tambahpaket');
});

Route::get('/admin/gallery', function () {
    return view('admin.gallery.gallery');
});

Route::get('/admin/tambahgallery', function () {
    return view('admin.gallery.tambahgallery');
});

Route::get('/admin/artikel', function () {
    return view('admin.artikel.artikel');
});

Route::get('/admin/tambahartikel', function () {
    return view('admin.artikel.tambahartikel');
});




Route::get('/admin/pesanan', function () {
    return view('admin.pesanan.pesanan');
});

Route::get('/admin/detailpesanan', function () {
    return view('admin.pesanan.detailPesanan');
});

Route::get('/admin/user', function () {
    return view('admin.user.user');
});

//PIMPINAN
Route::get('/pimpinan', function () {
    return view('pimpinan.dashboard');
});

Route::get('/pimpinan/produk', function () {
    return view('pimpinan.produk.produk');
});

Route::get('/pimpinan/kategori', function () {
    return view('pimpinan.kategori.kategori');
});

Route::get('/pimpinan/tambahkategori', function () {
    return view('pimpinan.kategori.tambahkategori');
});


Route::get('/pimpinan/tambahproduk', function () {
    return view('pimpinan.produk.tambahproduk');
});

Route::get('/pimpinan/pesanan', function () {
    return view('pimpinan.pesanan.pesanan');
});

Route::get('/pimpinan/detailpesanan', function () {
    return view('pimpinan.pesanan.detailPesanan');
});

Route::get('/pimpinan/user', function () {
    return view('pimpinan.user.user');
});

//USER


Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user/pesanan', function () {
    return view('user.pesanan.pesanan');
});

Route::get('/user/detailpesanan', function () {
    return view('user.pesanan.detailpesanan');
});

Route::get('/user/profil', function () {
    return view('user.profil.profil');
});



//LOGIN

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/daftaruser', function () {
    return view('login.daftaruser');
});


//CETAK


Route::get('/admin/pesanan/cetak', 'LaporanController@cetakAdminDatapesanan')->name('cetakAdminDatapesanan');
