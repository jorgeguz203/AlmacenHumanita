<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';

	 protected $fillable = ['materialclinica_id', 'user_id', 'nombre_user', 'nombre_material', 'area', 
	 'inmunologia', 'uroanalisis', 'hematologia', 'bacteriologia', 'bioquimica', 'hormonas', 'cantidad', 'observaciones', 'extras'];


    public function inventariosucursal()
		{

	    return $this->belongsToMany('App\inventariosucursal')
	      ->withTimestamps();
		}
}
