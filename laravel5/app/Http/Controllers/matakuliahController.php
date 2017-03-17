<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class matakuliahController extends Controller
{
public function awal()
 {
	 return "hello dari pelajaran matakuliah controller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $matakuliah = new matakuliah();
	 $matakuliah->title = 'Kripto';
	 $matakuliah ->keterangan = 'percobaan pertama';
	 $matakuliah->save();
	 return "data matkul dengan judul {$matakuliah->title} telah disimpan";
 }
}