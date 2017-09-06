<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialClinica;
use App\Proveedor;
use App\Cotizacion;

class CotizacionController extends Controller
{
    public function create($id){

    	$material = MaterialClinica::find($id);
    	$proveedors = Proveedor::all()->sortBy('nombre');
    	return view('cotizacion.create',compact('material','proveedors'));

    }

        public function store(Request $request, $id){

    	   	$this->validate($request, [
    	    'materialclinica_id' => 'required',
            'nombre_material' => 'required',
            'nombre_proveedor1',
            'precio1',
            'nombre_proveedor2',
            'precio2',
            'nombre_proveedor3',
            'precio3',
            'nombre_proveedor4',
            'precio4',
            'nombre_proveedor5',
            'precio5',


        ]);

    	$input = $request->all();

        $coti = Cotizacion::create($input);

    	        return redirect()->route('materialClinica.index')
                        ->with('Se ha creado la cotización con éxito!');

    }



    public function historial($id){

    	$material = MaterialClinica::find($id);
    	$cotizacion = Cotizacion::all();
    	return view('cotizacion.historial',compact('material', 'cotizacion'));

    }



}
