<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalidaMatriz extends Model
{
    protected $table = 'salida_matrizs';

	protected $fillable = ['materialclinica_id','user_id','cantidad', 'nombre_user','descripcion'];

		public function materialclinica()
		{
	    return $this->belongsToMany('App\materialclinica')
	      ->withTimestamps();
		}

	 public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}
}
