<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\MaterialPapelera;
use Auth;   
use App\User;
use App\InventarioSucursal;
use App\Pedidos;

class InventarioSucursalController extends Controller
{



    public function inventario(Request $request){

        $user = Auth::User()->find('id');
        $materialclinico = InventarioSucursal::name($request->get('name'))->orderBy('nombre_material','ASC')->paginate(150);
        $materialclinicos = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('inventarios.inventario', compact('materialclinico', 'user', 'materialclinicos'));
    }

}
