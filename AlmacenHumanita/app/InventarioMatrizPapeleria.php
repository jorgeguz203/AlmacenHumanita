<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioMatrizPapeleria extends Model
{

	protected $fillable = ['materialpapeleria_id','Proveedor_id','cantidad', 'presentacion', 'observaciones'];

	public function scopeName($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre'), 'LIKE', "%$name%");
			}
			
		}
}
