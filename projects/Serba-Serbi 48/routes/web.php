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

/* Awalan/Index Website */
Route::get('/awal/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('awal');});

/* Route Tentang */
Route::get('/{locale}/tentang', function ($locale) {
    App::setLocale($locale);
    return view('tentang');
});


/* Route Info Corona Indonesia */
Route::get('/{locale}/corona', function ($locale) {
    App::setLocale($locale);
    return view('corona.corona');});
Route::get('{locale}/corona/detilprovinsi', function ($locale) {
    App::setLocale($locale);
    return view('corona.detilprovinsi');});
Route::get('id/corona/indonesia', 'Corona@indonesiaid');
Route::get('en/corona/indonesia', 'Corona@indonesiaen');
Route::get('jp/corona/indonesia', 'Corona@indonesiajp');
Route::get('id/corona/provinsi', 'Corona@provinsiid');
Route::get('en/corona/provinsi', 'Corona@provinsien');
Route::get('jp/corona/provinsi', 'Corona@provinsijp');
Route::get('id/corona/dunia', 'Corona@duniaid');
Route::get('en/corona/dunia', 'Corona@duniaen');
Route::get('jp/corona/dunia', 'Corona@duniajp');

/* Route Foto Utama (Foto 48) */
Route::get('/id/foto', 'Utama@fotoid');
Route::get('/en/foto', 'Utama@fotoen');
Route::get('/jp/foto', 'Utama@fotojp');
Route::get('/id/foto/cari', 'Utama@carifotoid');
Route::get('/en/foto/cari', 'Utama@carifotoen');
Route::get('/jp/foto/cari', 'Utama@carifotojp');

Route::get('/fotoedit', 'Fotos@fotoedit');
Route::get('/fotoedit/cari', 'Fotos@cari');
Route::get('/foto/edit/{id}', 'Fotos@foto_edit');

Route::get('{locale}/foto/tambah', function ($locale) {
    App::setLocale($locale);
    return view('foto.foto_tambah');});

Route::get('/foto/hapus/{id}', 'Fotos@foto_hapus');
Route::post('/foto/store', 'Fotos@foto_store');
Route::put('/foto/update/{id}', 'Fotos@foto_update');
    
/* Route Info Utama (Info48) */
Route::get('/info', 'Utama@info');
Route::get('/info/cari', 'Utama@cariinfo');
Route::get('/infoedit', 'Infos@infoedit');
Route::get('/infoedit/cari', 'Infos@cari');
Route::get('/info/tambah', 'Infos@info_tambah');
Route::get('/info/edit/{id}', 'Infos@info_edit');
Route::get('/info/hapus/{id}', 'Infos@info_hapus');
Route::post('/info/store', 'Infos@info_store');
Route::put('/info/update/{id}', 'Infos@info_update');

/* Route Info-Member */
Route::get('/infomemberedit', 'InfoMembers@infomemberedit');
Route::get('/infomember/tambah', 'InfoMembers@infomember_tambah');
Route::get('/infomember/edit/{id}', 'InfoMembers@infomember_edit');
Route::get('/infomember/hapus/{id}', 'InfoMembers@infomember_hapus');
Route::post('/infomember/store', 'InfoMembers@infomember_store');
Route::put('/infomember/update/{id}', 'InfoMembers@infomember_update');
Route::get('/infomember/hapus/{id}', 'InfoMembers@infomember_hapus');

/* Route Info-Grup */
Route::get('/grupinfoedit', 'GrupInfos@grupinfoedit');
Route::get('/grupinfo/tambah', 'GrupInfos@grupinfo_tambah');
Route::get('/grupinfo/edit/{id}', 'GrupInfos@grupinfo_edit');
Route::get('/grupinfo/hapus/{id}', 'GrupInfos@grupinfo_hapus');
Route::post('/grupinfo/store', 'GrupInfos@grupinfo_store');
Route::put('/grupinfo/update/{id}', 'GrupInfos@grupinfo_update');
Route::get('/grupinfo/hapus/{id}', 'GrupInfos@grupinfo_hapus');

/* Route Member */
Route::get('/memberedit', 'Members@memberedit');
Route::get('/memberedit/cari', 'Members@cari');
Route::get('/member/edit/{id}', 'Members@member_edit');

Route::get('{locale}/member/tambah', function ($locale) {
    App::setLocale($locale);
    return view('member.member_tambah');});

Route::get('/member/hapus/{id}', 'Members@member_hapus');
Route::post('/member/store', 'Members@member_store');
Route::put('/member/update/{id}', 'Members@member_update');

/* Route Grup */
Route::get('/grupedit', 'Grups@grupedit');
Route::get('/grupedit/cari', 'Grups@cari');
Route::get('/grup/edit/{id}', 'Grups@grup_edit');

Route::get('{locale}/grup/tambah', function ($locale) {
    App::setLocale($locale);
    return view('grup.grup_tambah');});

Route::get('/grup/hapus/{id}', 'Grups@grup_hapus');
Route::post('/grup/store', 'Grups@grup_store');
Route::put('/grup/update/{id}', 'Grups@grup_update');

/* Route Foto-Grup */
Route::get('/fotogrupedit', 'FotoGrups@fotogrupedit');
Route::get('/fotogrup/edit/{id}', 'FotoGrups@fotogrup_edit');

Route::get('{locale}/fotogrup/tambah', function ($locale) {
    App::setLocale($locale);
    return view('fotogrup.fotogrup_tambah');});

Route::get('/fotogrup/hapus/{id}', 'FotoGrups@fotogrup_hapus');
Route::post('/fotogrup/store', 'FotoGrups@fotogrup_store');
Route::put('/fotogrup/update/{id}', 'FotoGrups@fotogrup_update');

/* Route Foto-Member */
Route::get('/fotomemberedit', 'FotoMembers@fotomemberedit');
Route::get('/fotomember/edit/{id}', 'FotoMembers@fotomember_edit');

Route::get('{locale}/fotomember/tambah', function ($locale) {
    App::setLocale($locale);
    return view('fotomember.fotomember_tambah');});

Route::get('/fotomember/hapus/{id}', 'FotoMembers@fotomember_hapus');
Route::post('/fotomember/store', 'FotoMembers@fotomember_store');
Route::put('/fotomember/update/{id}', 'FotoMembers@fotomember_update');

/* Melakukan pelaksanaan authentikasi pengguna/login */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

