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

//halaman utama

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

//cara routes ini untuk kasus yg tidak banyak proses/persiapan me-load form
Route::get('tugas4', function () {
    return view('htmltugas4');
});

Route::get('praktikum2', function () {
    return view('htmlprak2');
});

//cara controller dan routes ini untuk kasus yg banyak proses/persiapan me-load form
Route::get('ets',"ViewController@showEts");

Route::get('isianfaktorial',"ViewController@showForm");
Route::post('hasilfaktorial',"ViewController@resultFactorial");

//route CRUD pegawai
//menampilkan data dari database
Route::get('/pegawai','PegawaiController@index');
//input data ke database
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
//update data di database
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
//hapus data di database
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//route CRUD tugas
//menampilkan data dari database
Route::get('/tugas','TugasController@index');
//input data ke database
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
//update data di database
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
//hapus data di database
Route::get('/tugas/hapus/{id}','TugasController@hapus');
