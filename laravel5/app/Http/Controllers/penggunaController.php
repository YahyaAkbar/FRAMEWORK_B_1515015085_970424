<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pengguna;

class penggunaController extends Controller
{
   public function awal()
  {
     return "Hello dari penggunaController";
  }
public function tambah()
{
	return $this->simpan();
}  
public function simpan()
{
	$pengguna = new pengguna();
	$pengguna->username = 'yahya';
	$pengguna->password = 'akbar';
	$pengguna->save();
	return "data dengan username {$pengguna->username} telah disimpan";
}
}