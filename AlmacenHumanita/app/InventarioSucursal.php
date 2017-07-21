<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioSucursal extends Model
{
    protected $table = 'inventario_sucursals';
    protected $fillable = ['materialclinica_id','user_id', 'nombre_user', 'nombre_material', 'area', 'existencia','maximo','minimo'];


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

		public function scopeName($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre_material'), 'LIKE', "%$name%");
			}
			
		}



}
