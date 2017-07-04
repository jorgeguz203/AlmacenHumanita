<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialClinica extends Model
	{

	protected $table = 'materialclinica';

	 protected $fillable = ['nombre', 'descripcion', 'maximo', 'minimo', 'existencia', 'fecha_caducidad', 'area', 'unidad_medida', 'numero_referencia', 'presentacion'];

	public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}

	 public function proveedors()
		{
	    return $this->belongsToMany('App\Proveedor')
	      ->withTimestamps();
		}

}
