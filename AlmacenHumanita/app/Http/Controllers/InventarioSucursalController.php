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
        $materialclinico = InventarioSucursal::name($request->get('name'))->orderBy('nombre_material','ASC')->paginate(10000);
        $materialclinicos = MaterialClinica::name($request->get('name'))->orderBy('nombre','ASC')->paginate(10000);
        return view('inventarios.inventario', compact('materialclinico', 'user', 'materialclinicos'));
    }


    public function modificaExistencia(Request $request){
    	$existencia = $request->get('existencia');
    	$id = $request->get('materia_id');
    	InventarioSucursal::where('id',$id)->update(['existencia' => $existencia]); 

    	return response()->json([
            'id' => $id,
            'existencia' => $existencia
        ]);
    }

}
