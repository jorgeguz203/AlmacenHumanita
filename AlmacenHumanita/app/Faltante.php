<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faltante extends Model
{
    	protected $table = 'faltantes';

	 protected $fillable = ['materialclinica_id', 'user_id', 'nombre_user','nombre_material','area','inmunologia','uroanalisis','bacteriologia','bioquimica','hormonas','seccion', 'cantidad','faltante','observaciones'];


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
