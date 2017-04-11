<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DosenMatkulController extends Controller
{
      public function awal()
    {
    	return "Hello dari DosenController";
   	}
     public function tambah()
  	{
   	return $this->simpan();
    }
    public function simpan()
    {
    	$DosenMatkul = new dosenmatkuliah();
    	$DosenMatkul->title = 'Pemrograman visual';
    	$DosenMatkul->dosen_id = '3';
    	$DosenMatkul->matkul_id = '2';
    	$DosenMatkul->save();
   	return "Data dengan dosen matakuliah {$DosenMatkul->title} telah disimpan";
   }
}
