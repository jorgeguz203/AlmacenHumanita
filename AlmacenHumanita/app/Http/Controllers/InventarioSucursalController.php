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
use Carbon\Carbon;

class InventarioSucursalController extends Controller
{



    public function inventario(Request $request){

        $user = Auth::User()->find('id');
        $materialclinico = InventarioSucursal::name($request->get('name'))->orderBy('nombre_material','ASC')->paginate(10000);
        $materialclinicos = MaterialClinica::name($request->get('name'))->orderBy('nombre','ASC')->paginate(10000);
        return view('inventarios.inventario', compact('materialclinico', 'user', 'materialclinicos'))->with('i');
    }




    public function modificaExistencia(Request $request){
    	$existencia = $request->get('existencia');
    	$id = $request->get('materia_id');
    	$ped = InventarioSucursal::find($id); 
        if($existencia <= $ped->maximo){
            $ped->update(['existencia' => $existencia]);
            $tiempo=Carbon::now();
            Pedidos::insert(['materialclinica_id' => $ped->materialclinica_id, 
                'user_id' => $ped->user_id, 
                'nombre_user' => $ped->nombre_user,
                'nombre_material' => $ped->nombre_material,
                'area' => $ped->area,
                'seccion' => null,
                'inmunologia' => null,
                'uroanalisis' => null,
                'hematologia' => null,
                'bacteriologia' => null,
                'bioquimica' => null,
                'hormonas' => null,
                'cantidad' => $ped->maximo - $existencia,
                'observaciones' => null,
                'extras' => null,
                'created_at'=>$tiempo]);
        } else {
            $existencia = $ped->existencia;
        }

    	return response()->json([
            'id' => $id,
            'existencia' => $existencia
        ]);



    }

}
