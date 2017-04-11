<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
   protected $table = 'dosen_matakuliah'; // digunakan untuk mendeklarasikan tabel dosen_matakuliah

  protected $guarded =['id'];//mengabaikan aribut id pada saat melakukan insert/delete oleh eloquent

  //protected $fillable = ['dosen_id','matakuliah_id'];

   //DISINI MODEL DOSEN_MATAKULIAH BERELASI DENGAN MODEL DOSEN, JADWAL_MATAKULIAH DAN MATAKULIAH

   public function dosen(){ // UNTUK MENENTUKAN HUBUNGANNYA, DIBUAT FUNGSI DENGAN NAMA DOSEN PADA MODEL DOSEN_MATAKULIAH
	 
       return $this->belongsTo(Dosen::class); // memberikan nilai return dari fungsi belongsTo yang  merelasikan model dosen dengan model dosen_matakuliah
	  }

	 public function jadwal_matakuliah(){ // UNTUK MENENTUKAN HUBUNGANNYA, DIBUAT FUNGSI DENGAN NAMA JADWAL_MATAKULIAH PADA MODEL DOSEN_MATAKULIAH

       return $this->hasMany(Jadwal_matakuliah::class); // memberikan nilai return dari fungsi hasMany yang merelasikan model dosen_matakuliah dengan banyak model jadwal_matakuliah dengan foreign key dosen_matakuliah_id
    }

   public function matakuliah(){ // UNTUK MENENTUKAN HUBUNGANNYA, DIBUAT FUNGSI DENGAN NAMA MATAKULIAH PADA MODEL DOSEN_MATAKULIAH
       
       return $this->belongsTo(Matakuliah::class); // memberikan nilai return dari fungsi belongsTo yang merelasikan banyak model dosen_matakuliah dengan model matakuliah
    }

     public function listDosendanMatakuliah(){
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} (Matakuliah {$dsnMtk->matakuliah->title})";
        }
    return $out;
}
}