<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
     public function materialclinica()
{
    return $this->belongsToMany('App\MaterialClinica')
      ->withTimestamps();
}
}
