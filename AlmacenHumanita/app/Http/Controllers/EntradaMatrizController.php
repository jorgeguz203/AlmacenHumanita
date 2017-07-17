<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialClinica;
use App\InventarioMatrizClinica;
use App\Proveedor;
use App\EntradaMatriz;

class EntradaMatrizController extends Controller
{	
    public function agregar($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
       	return view('inventarioMatrizClinica.agregar', compact('material', 'proveedors'));
    }

    public function agregarclinicos($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
       	return view('inventarioMatrizClinica.agregarclinicos', compact('material', 'proveedors'));
    }

public function updateinventrada (Request $request, $id)
    {
    	    $this->validate($request, [
    	    'materialclinica_id' => 'required',
    	    'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'fecha_caducidad',
            'presentacion',
            'observaciones',

        ]);

    	$proveedor=Proveedor::find(request('Proveedor_id'));
    	$material = MaterialClinica::find(request('materialclinica_id'));
    	$entrada= new EntradaMatriz;
    	$entrada->materialclinica_id = request('materialclinica_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->fecha_caducidad = request('fecha_caducidad');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
		$entrada->save();

		$material = MaterialClinica::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialClinica::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizClinica.index', compact('material'));
                        
    }   

    public function updateinventradaclinicos (Request $request, $id)
    {
    	    $this->validate($request, [
    	    'materialclinica_id' => 'required',
    	    'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'fecha_caducidad',
            'presentacion',
            'observaciones',

        ]);

    	$proveedor=Proveedor::find(request('Proveedor_id'));
    	$material = MaterialClinica::find(request('materialclinica_id'));
    	$entrada= new EntradaMatriz;
    	$entrada->materialclinica_id = request('materialclinica_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->fecha_caducidad = request('fecha_caducidad');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
		$entrada->save();

		$material = MaterialClinica::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialClinica::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizClinica.indexclinicos', compact('material'));

                        
    } 

         public function show($id)
    {
        $material = MaterialClinica::find($id);
        $historiales = EntradaMatriz::all();
        return view('inventarioMatrizClinica.historialEn',compact('material','historiales'));
    }

    public function showclinicos($id)
    {
        $material = MaterialClinica::find($id);
        $historiales = EntradaMatriz::all();
        return view('inventarioMatrizClinica.historialEnclinicos',compact('material','historiales'));
    }


}
