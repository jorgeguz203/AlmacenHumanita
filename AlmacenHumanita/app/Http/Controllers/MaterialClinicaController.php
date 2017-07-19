<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\User;
use App\InventarioSucursal;

class MaterialClinicaController extends Controller
{
  
    public function index(Request $request)
    {

        $materiales = MaterialClinica::name($request->get('name'))->orderBy('nombre','ASC')->paginate(150);
        return view('materialClinica.index',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

   
    public function create()
    {
        return view('materialClinica.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'maximo' => 'required',
            'minimo' => 'required',
            'unidad_medida',
            'descripcion',
            'existencia'=> 'required',
            'area',
            'seccion',
            'fecha_caducidad',
            'numero_referencia',
            'presentacion',

        ]);


        $input = $request->all();

        $material = MaterialClinica::create($input);

        $user = User::all();
        foreach ($user as $us){
            InventarioSucursal::insert(array('materialclinica_id' => $material->id, 'User_id' => $us->id,
                'existencia' => 0));
        }

        return redirect()->route('materialClinica.index')
                        ->with('Se ha creado el material con éxito!');
    }

   
    public function show($id)
    {
        $material = MaterialClinica::find($id);
        return view('materialClinica.show',compact('material'));
    }

   
    public function edit($id)
    {
        $material = MaterialClinica::find($id);
        return view('materialClinica.edit',compact('material'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'maximo' => 'required',
            'minimo' => 'required',
            'unidad_medida' => 'required',
            'descripcion',
            'existencia',
            'area',
            'seccion',
            'fecha_caducidad',
            'numero_referencia',
            'presentacion',
        ]);

        MaterialClinica::find($id)->update($request->all());

        return redirect()->route('materialClinica.index')
                        ->with('Se ha modificado el material con éxito!');
    }

    
    public function destroy($id)
    {
        MaterialClinica::find($id)->delete();
        return redirect()->route('materialClinica.index')
                        ->with('Se ha eliminado con éxito');
    }

}

