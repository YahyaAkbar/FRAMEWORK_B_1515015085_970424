<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
    protected $table = 'Dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    public function dosen(){
	return $this->BelongsTo(Dosen::class);
	}	
	public function matakuliah(){
	//return $this->BelongsTo(Matakuliah::class);
	return $this->belongsTo('App\Matakuliah', 'id');
	}	
	public function jadwal_matakuliah(){
	return $this->HasMany(Jadwal_matakuliah::class);
	}
}

