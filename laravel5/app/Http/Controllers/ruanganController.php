<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
 public function awal()
 {
	 return "hello dari ruangancontroller";
 }
 public function tambah()
 {
	 return $this->simpan();
 }
 public function simpan()
 {
	 $ruangan = new ruangan();
	 $ruangan->title = 'kelasb2015';
	 $ruangan->save();
	 return "data rungan dengan judul {$ruangan->title} telah disimpan";
 }
}