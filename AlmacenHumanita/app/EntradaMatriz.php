<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradaMatriz extends Model
{
        protected $table = 'entrada_matrizs';

	protected $fillable = ['materialclinica_id','Proveedor_id','cantidad', 'nombre_proveedor','fecha_caducidad', 'presentacion', 'observaciones'];

		public function materialclinica()
		{
	    return $this->belongsToMany('App\materialclinica')
	      ->withTimestamps();
		}

	 public function proveedors()
		{
	    return $this->belongsToMany('App\Proveedor')
	      ->withTimestamps();
		}
}
