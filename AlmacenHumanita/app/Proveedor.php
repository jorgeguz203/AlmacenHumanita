<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{

	protected $table = 'proveedors';

	 protected $fillable = ['nombre', 'nombre_contacto', 'email', 'telefono', 'RFC', 'direccion'];


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



}
