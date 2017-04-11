<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'Matakuliah';
    protected $fillable = ['title','keterangan'];
	protected $guarded=['id'];

	public function dosen_matakuliah(){
	return $this->HasMany(Dosen_matakuliah::class); //one to many dari matakulaih (one) ke dosen matakuliah (many)
	}

    public function getUsernameAttribute(){
    	return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
    return $out;
    }
}	
	