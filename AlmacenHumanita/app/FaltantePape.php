<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaltantePape extends Model
{
    	protected $table = 'faltante_papes';

	 protected $fillable = ['materialpapelera_id', 'user_id', 'nombre_user', 'nombre_material', 'area', 'cantidad', 'faltante', 'observaciones'];


    public function materialpapeleria()
		{

	    return $this->belongsToMany('App\MaterialPapelera')
	      ->withTimestamps();
		}

	 public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}
}
