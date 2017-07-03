<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialClinica extends Model
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
