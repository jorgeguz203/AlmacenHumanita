<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialPapelera;

class MaterialPapeleraController extends Controller
{

    public function index(Request $request)
    {
        $materiales = MaterialPapelera::name($request->get('name'))->orderBy('nombre','ASC')->paginate(10);
        return view('materialPapelera.index',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('materialPapelera.create');
    }

 
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'maximo' => 'required',
            'minimo' => 'required',
            'unidad_medida' => 'required',
            'descripcion',
            'existencia',
            'area',
            'numero_referencia',
            'presentacion',

        ]);

        MaterialPapelera::create($request->all());

        return redirect()->route('materialPapelera.index')
                        ->with('Se ha creado el material con éxito!');
    }


    public function show($id)
    {
        $material = MaterialPapelera::find($id);
        return view('materialPapelera.show',compact('material'));
    }


    public function edit($id)
    {
        $material = MaterialPapelera::find($id);
        return view('materialPapelera.edit',compact('material'));
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
            'numero_referencia',
            'presentacion',
        ]);

        MaterialPapelera::find($id)->update($request->all());

        return redirect()->route('materialPapelera.index')
                        ->with('Se ha modificado el material con éxito!');
    }


    public function destroy($id)
    {
        MaterialPapelera::find($id)->delete();
        return redirect()->route('materialPapelera.index')
                        ->with('Se ha eliminado con éxito');
    }

}
