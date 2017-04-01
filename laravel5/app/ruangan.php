<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan';
    protected $fillable = ['title'];
    public function Jadwal_matakuliah(){
    	return $this->HasMany(Jadwal_mahasiswa::class);
    }
}

