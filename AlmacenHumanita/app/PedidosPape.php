<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosPape extends Model
{
    protected $table = 'pedidos_papes';

	 protected $fillable = ['materialpapelera_id', 'user_id', 'nombre_user', 'nombre_material', 'area', 
	 'cantidad', 'observaciones',];

    public function inventariosucursalpapeleria()
		{
	    return $this->belongsToMany('App\inventariosucursalpapeleria')
	      ->withTimestamps();
		}


	 public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}
}
