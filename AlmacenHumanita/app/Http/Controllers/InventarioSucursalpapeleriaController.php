<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\MaterialPapelera;
use Auth;   
use App\User;
use App\InventarioSucursalpapeleria;
use Carbon\Carbon;
use App\PedidosPape;

class InventarioSucursalpapeleriaController extends Controller
{

            public function inventariopape(Request $request){

        $user = Auth::User()->find('id');
        $materialpapeleria = InventarioSucursalpapeleria::name($request->get('name'))->orderBy('nombre_material','ASC')->paginate(10000);
        $materialpapelerias = MaterialPapelera::name($request->get('name'))->orderBy('nombre','ASC')->paginate(10000);
        return view('inventarios.inventariopape', compact('materialpapeleria', 'user', 'materialpapelerias'))->with('i')->with('a')
        ->with('b')
        ->with('c')
        ->with('d')
        ->with('e');
    }


    public function modificaExistencia(Request $request){
    	$existencia = $request->get('existencia');
    	$id = $request->get('materia_id');
        $ped = InventarioSucursalpapeleria::find($id); 
        if($existencia < $ped->maximo){
            $ped->update(['existencia' => $existencia]);
            $tiempo=Carbon::now();
            PedidosPape::insert(['materialpapelera_id' => $ped->materialpapelera_id, 
                'user_id' => $ped->user_id, 
                'nombre_user' => $ped->nombre_user,
                'nombre_material' => $ped->nombre_material,
                'area' => $ped->area,
                'cantidad' => $ped->maximo - $existencia,
                'observaciones' => null,
                'created_at'=>$tiempo]);
        } if ($existencia == $ped->maximo){
            $ped->update(['existencia' => $existencia]);
        }else {
            $existencia = $ped->existencia;
        }

        

        return response()->json([
            'id' => $id,
            'existencia' => $existencia
        ]);
    }

}

