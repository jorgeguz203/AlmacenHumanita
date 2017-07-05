<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialPapelera extends Model
{

	protected $table = 'materialpapeleras';

	 protected $fillable = ['nombre', 'descripcion', 'maximo', 'minimo', 'existencia', 'area', 'unidad_medida', 'numero_referencia', 'presentacion'];
    
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
