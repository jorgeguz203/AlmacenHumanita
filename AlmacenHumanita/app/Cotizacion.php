<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $table = 'cotizacions';

    protected $fillable = ['materialclinica_id', 'proveedor_id', 'nombre_material', 'nombre_proveedor2', 'nombre_proveedor3', 'nombre_proveedor4', 
	 'nombre_proveedor5'];


	 	public function materialclinica()
		{
	    return $this->belongsToMany('App\MaterialClinica')
	      ->withTimestamps();
		}

		public function proveedor()
		{
	    return $this->belongsToMany('App\Proveedor')
	      ->withTimestamps();
		}
}
