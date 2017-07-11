<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\InventarioMatrizClinica;

class InventarioMatrizClinica extends Model
{
    protected $table = 'materialclinica_proveedors';

	protected $fillable = ['Proveedor_id','cantidad', 'presentacion', 'observaciones'];



}
