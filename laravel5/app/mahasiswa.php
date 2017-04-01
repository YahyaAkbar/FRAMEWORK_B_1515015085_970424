<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];

    public function pengguna(){
    	return $this->belongsTo(pengguna::class); //kebalikan dari hasone di pengguna
    	}
    public function jadwal_mahasiswa(){
    	return $this->hasMany(Jadwal_matakuliah::class); //Mahasiswa (one) ke Jadwal matakuliah (many)
    }	
}