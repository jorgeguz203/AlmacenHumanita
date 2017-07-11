<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\InventarioMatrizClinica;

class InventarioMatrizClinicaController extends Controller
{

	public function index(Request $request)
    {
        $materiales = MaterialClinica::orderBy('id','DESC')->paginate(5);
        return view('inventarioMatrizClinica.index',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


        public function create()
    {
        
        return view('inventarioMatrizClinica.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'cantidad' => 'required',
            'presentacion' => 'required',
            'observaciones' ,
            
        ]);

        InventarioMatrizClinica::create($request->all());

        return redirect()->route('inventarioMatrizClinica.index')
                        ->with('Se ha creado el material con éxito!');
    }



    public function show($id)
    {
        $material = InventarioMatrizClinica::find($id);
        return view('inventarioMatrizClinica.show',compact('material'));
    }

   
    public function edit($id)
    {
        $material = MaterialClinica::find($id);
        return view('inventarioMatrizClinica.edit',compact('material'));
    }

    

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
            'existencia',
           
        ]);

        MaterialClinica::find($id)->update($request->all());

        return redirect()->route('materialClinica.index')
                        ->with('Se ha modificado el material con éxito!');
    }



public function agregar($id, $existenciaAum)
    {
        $material = MaterialClinica::find($id);
        $existencia = $material->pluck('existencia');

        $nuevaExistencia = $existencia + $existenciaAum;

         DB::table('materialclinica')->where('id',$id)->update(['existencia' => $nuevaExistencia]);

       return view('inventarioMatrizClinica.index');
    }



public function reducir($id, $existenciaRed)
    {
        $material = MaterialClinica::find($id);
        $existencia = $material->pluck('existencia');

        $nuevaExistencia = $existencia - $existenciaRed;

         DB::table('materialclinica')->where('id',$id)->update(['existencia' => $nuevaExistencia]);

       return view('inventarioMatrizClinica.index');
    }


    

    
    
}
