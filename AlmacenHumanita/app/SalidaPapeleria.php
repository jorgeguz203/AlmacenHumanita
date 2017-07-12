<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalidaPapeleria extends Model
{
        protected $table = 'salida_papelerias';

	protected $fillable = ['materialpapeleras_id','user_id','cantidad', 'nombre_user','descripcion'];

		public function materialpapelera()
		{
	    return $this->belongsToMany('App\materialpapelera')
	      ->withTimestamps();
		}

	 public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}
}
