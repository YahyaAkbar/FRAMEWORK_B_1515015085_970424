<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Hello-world', function () {
    return 'Hello-world';
}); 

Route::get('kelas_b/Framework/{mhs?}', function ($pengguna) {
    return "selamat Datang $mhs";
});
Route::get('pengguna','penggunaController@awal');
Route::get('pengguna/tambah','penggunaController@tambah');

Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');

Route::get('ruangan','ruangancsontroller@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');

Route::get('dosenmatakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosenmatakuliah/tambah','dosen_matakuliahcontroller@tambah');

Route::get('jadwalmatakuliah','jadwal_matakuliahcontroller@awal');
Route::get('jadwalmatakuliah/tambah','jadwal_matakuliahcontroller@tambah');