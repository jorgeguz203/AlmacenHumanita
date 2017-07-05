<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    public function materialclinica()
{
    return $this->belongsToMany('App\MaterialClinica')
      ->withTimestamps();
}

public function roles(){
        return $this->belongsToMany('App\Role');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function materialpapeleras()
{
    return $this->belongsToMany('App\MaterialPapelera')
      ->withTimestamps();
}
}
