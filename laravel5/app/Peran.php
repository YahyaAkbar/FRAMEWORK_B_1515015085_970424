<?php namespace App;
use illuminate\Database\Eloquent\Model;

class Peran extends Model
{
	protected $table = 'peran';
	public function pengguna(){
	return $this->belongsToMany(Pengguna::class);
	}
	
}