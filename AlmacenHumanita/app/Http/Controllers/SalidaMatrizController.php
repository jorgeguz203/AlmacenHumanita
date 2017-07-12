<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\SalidaMatriz;
use App\User;


class SalidaMatrizController extends Controller
{

public function reducir($id){

	$material = MaterialClinica::find($id);
	$users = User::all();

   return view('inventarioMatrizClinica.reducir', compact('material','users'));
}

public function reducirInv($id, $existenciaRed){

    $material = MaterialClinica::find($id);
    $existencia = $material->pluck('existencia');
    $nuevaExistencia = $existencia - $existenciaRed;
    DB::table('materialclinica')->where('id',$id)->update(['existencia' => $nuevaExistencia]);

   return view('inventarioMatrizClinica.index');
    }


    public function agregaSalida(Request $request)
    {
        $this->validate($request, [
            'cantidad' => 'required',
            'User_id' => 'required',
            

        ]);

        SalidaMatriz::create($request->all());

        return redirect()->route('materialClinica.index')
                        ->with('Se ha creado el material con éxito!');
    }




}
