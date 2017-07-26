<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialPedidos extends Model
{


	protected $table = 'historial_pedidos';

	 protected $fillable = ['materialclinica_id', 'user_id', 'nombre_user', 'nombre_material', 'area', 'seccion',
	 'inmunologia', 'uroanalisis', 'hematologia', 'bacteriologia', 'bioquimica', 'hormonas', 'cantidad', 'observaciones', 'extras'];


    public function materialclinica()
		{

	    return $this->belongsToMany('App\materialclinica')
	      ->withTimestamps();
		}

	 public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}
}
