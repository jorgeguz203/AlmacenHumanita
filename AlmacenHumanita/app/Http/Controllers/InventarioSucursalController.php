<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\MaterialPapelera;
use Auth;   
use App\User;
use App\InventarioSucursal;

class InventarioSucursalController extends Controller
{



    public function inventario(Request $request){

        $user = Auth::User()->find('id');
        $materialclinico = InventarioSucursal::name($request->get('name'))->orderBy('nombre_material','ASC')->paginate(150);
        return view('inventarios.inventario', compact('materialclinico', 'user'));
    }

}
