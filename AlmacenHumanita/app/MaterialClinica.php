<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialClinica extends Model
	{

	protected $table = 'materialclinica';

	protected $primaryKey = 'id';

	 protected $fillable = ['nombre', 'descripcion', 'maximo', 'minimo', 'existencia', 'fecha_caducidad', 'area', 'seccion', 'unidad_medida', 'numero_referencia', 'presentacion'];

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

		public function entrada_matrizs()
		{
	    return $this->belongsToMany('App\EntradaMatris')
	      ->withTimestamps();
		}

		public function InventarioSucursal()
{
    return $this->belongsToMany('App\InventarioSucursal')
      ->withTimestamps();
}

		public function scopeName($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre'), 'LIKE', "%$name%");
			}
			
		}


}
