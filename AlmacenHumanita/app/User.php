<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\InventarioSucursal;
use App\Varios;

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

    public function InventarioSucursal()
{
    return $this->belongsToMany('App\InventarioSucursal')
      ->withTimestamps();
}

public function Varios()
{
    return $this->belongsToMany('App\Varios')
      ->withTimestamps();
}

    public function InventarioSucursalpapeleria()
{
    return $this->belongsToMany('App\InventarioSucursalpapeleria')
      ->withTimestamps();
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

        public function pedidos()
        {

        return $this->belongsToMany('App\Pedidos')
          ->withTimestamps();
        }

        public function faltante()
        {

        return $this->belongsToMany('App\Faltante')
          ->withTimestamps();
        }

                public function faltantepape()
        {

        return $this->belongsToMany('App\FaltantePape')
          ->withTimestamps();
        }


}
