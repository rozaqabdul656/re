<?php

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
    return view('index');
});

Auth::routes();
//Route::get('/', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

// route::get('/','dashboardController@index');
// route::get('/home','dashboardController@index');

route::resource('/logout','LoginController');
route::resource('/peserta','anggotaController');

route::put('/editpeserta','anggotaController@edit');

Route::resource('/setting', 'settingController');

Route::post('/tryoutsoal', 'tryoutController@soal');

Route::get('/back-tryoutsoal', 'tryoutController@back');


Route::resource('/hasiltryout', 'hasiltryoutController');

Route::get('/login', 'Controller@login');
Route::get('/register', 'Controller@register');

Route::resource('/fitur-tryout', 'soalController');

Route::resource('/register-peserta', 'registerController');
Route::get('/daftar-peserta', 'registerController@peserta');

Route::get('/tolaktryout', 'toController@akses');

Route::resource('/tryout', 'toController');

Route::get('/tryout-start/{data}/{datas}', 'toController@go');


Route::get('/hasil-tryout', 'toController@hasil');

Route::get('/materi', 'materiController@index');

Route::resource('/materi-pateron', 'materiController');

Route::get('/rangkuman/{data}',function ($data){
	return view('materi.create-materi',compact('data'));
});

Route::get('/delete-materi/{data}','materiController@destroy');


Route::get('/delete-bidang/{data}','bidangController@destroy');

Route::get('/rangkuman-user/{data}/{datas}/{datab}','rangkumanController@show');

Route::get('/rangkuman-hapus/{data}/{datas}/{datab}','rangkumanController@delete');

Route::get('/rangkuman-detail','rangkumanController@detail');
Route::put('/rangkuman-ubah','rangkumanController@ubah');

Route::get('/rangkuman-hasil','rangkumanController@indexuser');

Route::get('/rangkuman-upload/{data}/{datas}','rangkumanController@rangkuman_upload');



Route::resource('/rangkuman-pateron','rangkumanController');

Route::resource('/soals', 'soalController_2');

Route::resource('/paket-belajar', 'bidangController');

Route::get('/paket-belajar', 'bidangController@index');

Route::get('/video', 'videoController@index');
Route::resource('/video', 'videoController');

Route::post('videoupload', 'videoController@store');
Route::get('/delete-video/{data}','videoController@destroy');
Route::get('/detail-video/{data}','videoController@tampil');



Route::get('/delete-jenis/{data}','crudtryoutController@destroy');
  

Route::resource('/produk', 'produkController');
Route::get('/modul', 'produkController@modul');


Route::get('/study/{data}', 'produkController@belajar');
Route::get('/study-free/{data}', 'produkController@belajarfree');


Route::get('/pembahasan', 'produkController@pembahasan');


Route::get('/jenis-tryout', 'crudtryoutController@index');
Route::resource('/jenis-tryout', 'crudtryoutController');

Route::get('fitur-tryout/detail/{data}','soalController@detail');

Route::get('fitur-tryout/detail/{data}/{datas}','soalController@indexsoal');
Route::get('/pembayaran', 'pembayaranssController@index');
Route::get('pembayaran/detail/{data}/{datas}','pembayaranssController@detail');
Route::get('konfirmasi/{data}/{datas}','pembayaranssController@konfirmasi');
Route::get('pembayaran-tf/detail/{data}/{datas}','pembayarantfController@detail');
Route::get('konfirmasi-tf/{data}/{datasbidang}','pembayarantfController@konfirmasi');
Route::get('produk-detail/{data}','produkController@detail');
Route::resource('/pembayaran-free','pembayaranssController');
Route::resource('/pembayaran-tf','pembayarantfController');
Route::get('/video-belajar/{data}','videoController@tampil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
