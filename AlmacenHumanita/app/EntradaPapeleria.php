<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradaPapeleria extends Model
{
       protected $table = 'entrada_papelerias';

	protected $fillable = ['materialpapeleras_id','Proveedor_id','cantidad', 'nombre_proveedor', 'presentacion', 'observaciones'];

		public function materialpapelera()
		{
	    return $this->belongsToMany('App\MaterialPapelera')
	      ->withTimestamps();
		}

	 public function proveedors()
		{
	    return $this->belongsToMany('App\Proveedor')
	      ->withTimestamps();
		}
}
