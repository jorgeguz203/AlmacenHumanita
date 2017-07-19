<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioSucursalpapeleria extends Model
{
        protected $table = 'inventario_sucursalpapelerias';
    protected $fillable = ['materialpapelera_id','User_id','existencia'];


    	public function materialpapelera()
		{
	    return $this->belongsToMany('App\materialpapelera')
	      ->withTimestamps();
		}


	 public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}
}
