<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mahasiswa;
use App\pengguna;


class MahasiswaController extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Muhamad yahya akbar";
    	$mahasiswa->nim = "1515015085";
    	$mahasiswa->alamat = "Jl. Suryanata";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";   
    }
    public function semua_mahasiswa() {
        $mahasiswa = mahasiswa::all();  //untuk menampilkan semua data 
        foreach ($mahasiswa as $mhs) {  //panggilnya pakai foreach
        echo "nama :" .$mhs->nama;
        echo "<br>";
        echo "username :" .$mhs->pengguna->username; 
        echo "<p>";}
    } 
    public function mahasiswa(){
        $mahasiswa = mahasiswa::all();
        foreach ($mahasiswa as $mhs) {
        echo "Nama:".$mhs->nama;
        echo "<br>";
        echo "Username:".$mhs->pengguna->username;
        echo "<br>";
    }
}
}