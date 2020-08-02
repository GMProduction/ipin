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

Route::get('/admin/privat', 'Admin\ProdukController@indexPrivat');

Route::get('/admin/privat/tambahprivat', function () {
    return view('admin.privat.tambahprivat');
});

Route::get('/admin/privat/editprivat/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/privat/editprivat/{id}', 'Admin\ProdukController@editForm');

Route::get('/admin/paket', 'Admin\ProdukController@indexOpen');

Route::post('/admin/produk/adddata', 'Admin\ProdukController@addForm');

Route::get('/admin/paket/tambahpaket', function () {
    return view('admin.paket.tambahpaket');
});
Route::get('/admin/paket/editpaket/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/paket/editpaket/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/produk/hapus/{id}', 'Admin\ProdukController@hapus');

Route::get('/admin/gallery', 'Admin\GalleryController@index');

Route::get('/admin/gallery/tambahgallery', 'Admin\GalleryController@addForm');
Route::post('/admin/gallery/tambahgallery', 'Admin\GalleryController@addForm');
Route::get('/admin/gallery/editgallery/{id}', 'Admin\GalleryController@editForm');
Route::post('/admin/gallery/editgallery/{id}', 'Admin\GalleryController@editForm');
Route::post('/admin/gallery/hapus/{id}', 'Admin\GalleryController@hapus');

Route::get('/admin/artikel', 'Admin\ArtikelController@index');
Route::get('/admin/artikel/tambahartikel', 'Admin\ArtikelController@addForm');
Route::post('/admin/artikel/tambahartikel', 'Admin\ArtikelController@addForm');
Route::get('/admin/artikel/editartikel/{id}', 'Admin\ArtikelController@editForm');
Route::post('/admin/artikel/editartikel/{id}', 'Admin\ArtikelController@editForm');
Route::post('/admin/artikel/hapus/{id}', 'Admin\ArtikelController@hapus');


Route::get('/admin/pesanan', 'Admin\TransaksiController@index');
Route::get('/admin/pesanan/detailpesanan/{id}', 'Admin\TransaksiController@detail');
Route::post('/admin/pesanan/detailpesanan/{id}', 'Admin\TransaksiController@detail');

Route::get('/admin/user', 'Admin\UserController@index');

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

Route::post('/post-register', 'Auth\AuthController@register');
Route::post('/post-login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');
