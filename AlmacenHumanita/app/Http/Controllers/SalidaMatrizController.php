<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialClinica;
use App\InventarioMatrizClinica;
use App\User;
use App\SalidaMatriz;

class SalidaMatrizController extends Controller
{
    
	public function reducir($id)
    {
        $material = MaterialClinica::find($id);
        $users = User::all();
       	return view('inventarioMatrizClinica.reducir', compact('material', 'users'));
    }

    public function reducirclinicos($id)
    {
        $material = MaterialClinica::find($id);
        $users = User::all();
       	return view('inventarioMatrizClinica.reducirclinicos', compact('material', 'users'));
    }

public function updateinvsalida (Request $request, $id)
    {
    	    $this->validate($request, [
    	    'materialclinica_id' => 'required',
    	    'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

    	$user=User::find(request('user_id'));
    	$material = MaterialClinica::find(request('materialclinica_id'));
    	$salida= new SalidaMatriz;
    	$salida->materialclinica_id = request('materialclinica_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
		$salida->save();

		$material = MaterialClinica::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialClinica::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizClinica.index', compact('material'));
                        
    }   

    public function updateinvsalidaclinicos (Request $request, $id)
    {
    	    $this->validate($request, [
    	    'materialclinica_id' => 'required',
    	    'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',
            

        ]);

    	$user=User::find(request('user_id'));
    	$material = MaterialClinica::find(request('materialclinica_id'));
    	$salida= new SalidaMatriz;
    	$salida->materialclinica_id = request('materialclinica_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->descripcion = request('descripcion');
        $salida->nombre_user = $user->name;
		$salida->save();

		$material = MaterialClinica::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialClinica::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizClinica.indexclinicos', compact('material'));

                        
    } 

        public function show($id)
    {
        $material = MaterialClinica::find($id);
        $historiales = SalidaMatriz::all();
        return view('inventarioMatrizClinica.historialSa',compact('material','historiales'));
    }

    public function showclinicos($id)
    {
        $material = MaterialClinica::find($id);
        $historiales = SalidaMatriz::all();
        return view('inventarioMatrizClinica.historialSaclinicos',compact('material','historiales'));
    }


}
