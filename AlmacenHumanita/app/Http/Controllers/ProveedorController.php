<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proveedor;

class ProveedorController extends Controller
{

    public function index(Request $request)
    {
        $proveedores = Proveedor::name($request->get('name'))->orderBy('nombre','ASC')->paginate(100);
        return view('proveedor.index',compact('proveedores'))



            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

 
    public function create()
    {
        return view('proveedor.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'nombre_contacto' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'RFC' => 'required',
            'direccion' => 'required',
            'horario',

        ]);

        Proveedor::create($request->all());

        return redirect()->route('proveedor.index')

                        ->with('Se ha creado el proveedor exitosamente!');


    }


    public function show($id)
    {

        $proveedor = Proveedor::find($id);
        return view('proveedor.show',compact('proveedor'));

    }

  
    public function edit($id)
    {

        $proveedor = Proveedor::find($id);
        return view('proveedor.edit',compact('proveedor'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',

            'nombre_contacto' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'RFC' => 'required',
            'direccion' => 'required',
            'horario',
        ]);

        Proveedor::find($id)->update($request->all());

        return redirect()->route('proveedor.index')

                        ->with('se ha modificado exitosamente!');

    }

 
    public function destroy($id)
    {

        Proveedor::find($id)->delete();
        return redirect()->route('proveedor.index')
                        ->with('se ha eliminado exitosamente');

    }
}
