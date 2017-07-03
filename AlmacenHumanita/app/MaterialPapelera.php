<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialPapelera extends Model
{
    
	public function users()
{
    return $this->belongsToMany('App\User')
      ->withTimestamps();
}

public function proveedors()
{
    return $this->belongsToMany('App\Proveedor')
      ->withTimestamps();
}


}
