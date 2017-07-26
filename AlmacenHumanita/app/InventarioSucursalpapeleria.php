<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioSucursalpapeleria extends Model
{
        protected $table = 'inventario_sucursalpapelerias';
    protected $fillable = ['materialclinica_id','user_id', 'nombre_user', 'nombre_material', 'existencia','maximo','minimo'];


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

		public function pedidospape()
		{
	    return $this->belongsToMany('App\PedidosPape')
	      ->withTimestamps();
		}

		
		public function scopeName($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre_material'), 'LIKE', "%$name%");
			}
			
		}

		public function scopeNames($query, $name){
			if (trim($name) != ""){
				$query->where(\DB::raw('nombre'), 'LIKE', "%$name%");
			}
			
		}

}
