<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat','username','password'];
	
public function Pengguna()
	{
	return $this->belongsTo(Pengguna::class); //kebalikan dari hasone di pengguna
	}

public function jadwal_mahasiswa()
{
	return  $this->hasMany(Jadwal_matakuliah::class); //one to Many dari Mahasiswa (one) ke Jadwal matakuliah (many)
}	
	
public function listMahasiswaDanNim()
{
	$out = [];
	foreach ($this->all() as $mhs) {
		$out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
	}
	return $out;
}		
}
