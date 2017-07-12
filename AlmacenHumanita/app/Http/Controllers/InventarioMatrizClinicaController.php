<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;

class InventarioMatrizClinicaController extends Controller
{

	public function index(Request $request)
    {
        $materiales = MaterialClinica::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizClinica.index',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function indexclinicos(Request $request)
    {
        $materiales = MaterialClinica::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizClinica.indexclinicos',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


public function reducir($id, $existenciaRed)
    {
        $material = MaterialClinica::find($id);
        $existencia = $material->pluck('existencia');

        $nuevaExistencia = $existencia - $existenciaRed;

         DB::table('materialclinica')->where('id',$id)->update(['existencia' => $nuevaExistencia]);

       return view('inventarioMatrizClinica.index');
    }

    public function reducirclinicos($id, $existenciaRed)
    {
        $material = MaterialClinica::find($id);
        $existencia = $material->pluck('existencia');

        $nuevaExistencia = $existencia - $existenciaRed;

         DB::table('materialclinica')->where('id',$id)->update(['existencia' => $nuevaExistencia]);

       return view('inventarioMatrizClinica.indexclinicos');
    }


    

    
    
}
