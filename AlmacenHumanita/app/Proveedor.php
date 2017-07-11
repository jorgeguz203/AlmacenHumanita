<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{

	protected $table = 'proveedors';

	 protected $fillable = ['nombre', 'nombre_contacto', 'email', 'telefono', 'RFC', 'direccion', 'horario'];


     public function materialclinica()
{
    return $this->belongsToMany('App\MaterialClinica')
      ->withTimestamps();
}



	    public function materialpapeleras()
	{
	    return $this->belongsToMany('App\MaterialPapelera')
	      ->withTimestamps();
	}

			public function scopeName($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre'), 'LIKE', "%$name%");
			}
			
		}


}
