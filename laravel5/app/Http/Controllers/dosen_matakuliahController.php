<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahController extends Controller
{
public function awal()
 {
	 return "hello dari Dosen matakuliah controller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $dosenmatkul = new dosen_matakuliah();
	 $dosenmatkul->dosen_id = '1';
	 $dosenmatkul ->matakuliah_id = '1';
	 $dosenmatkul->save();
	 return "data dosen matkul dengan ID {$dosenmatkul->dosen_id} telah disimpan";
 }
}