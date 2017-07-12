<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\InventarioMatrizClinica;
use App\EntradaMatrizController;

class InventarioMatrizClinica extends Model
{
    protected $table = 'materialclinica_proveedors';

	protected $fillable = ['materialclinica_id','Proveedor_id','cantidad', 'presentacion', 'observaciones'];

	public function scopeName($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre'), 'LIKE', "%$name%");
			}
			
		}

}
