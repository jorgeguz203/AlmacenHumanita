<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Varios extends Model
{
    protected $table = 'Varios';

	 protected $fillable = ['user_id', 'seccion', 'extra'];

    public function users()
		{
	    return $this->belongsToMany('App\User')
	      ->withTimestamps();
		}


}
