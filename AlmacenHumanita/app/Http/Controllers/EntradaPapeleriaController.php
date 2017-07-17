<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialPapelera;
use App\InventarioMatrizPapeleria;
use App\Proveedor;
use App\EntradaPapeleria;

class EntradaPapeleriaController extends Controller
{
    public function agregar1($id)
    {
        $material = MaterialPapelera::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar1', compact('material', 'proveedors'));
    }

        public function agregar2($id)
    {
        $material = MaterialPapelera::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar2', compact('material', 'proveedors'));
    }

        public function agregar3($id)
    {
        $material = MaterialPapelera::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar3', compact('material', 'proveedors'));
    }

        public function agregar4($id)
    {
        $material = MaterialPapelera::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar4', compact('material', 'proveedors'));
    }

        public function agregar5($id)
    {
        $material = MaterialPapelera::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar5', compact('material', 'proveedors'));
    }

        public function agregar6($id)
    {
        $material = MaterialPapelera::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar6', compact('material', 'proveedors'));
    }

    public function update1 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'presentacion',
            'observaciones',

        ]);

        $proveedor=Proveedor::find(request('Proveedor_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $entrada= new EntradaPapeleria;
        $entrada->materialpapelera_id = request('materialpapelera_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
        $entrada->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index1', compact('material'));
                        
    }

    public function update2 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'presentacion',
            'observaciones',

        ]);

        $proveedor=Proveedor::find(request('Proveedor_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $entrada= new EntradaPapeleria;
        $entrada->materialpapelera_id = request('materialpapelera_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
        $entrada->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index2', compact('material'));
                        
    }

    public function update3 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'presentacion',
            'observaciones',

        ]);

        $proveedor=Proveedor::find(request('Proveedor_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $entrada= new EntradaPapeleria;
        $entrada->materialpapelera_id = request('materialpapelera_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
        $entrada->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index3', compact('material'));
                        
    }

    public function update4 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'presentacion',
            'observaciones',

        ]);

        $proveedor=Proveedor::find(request('Proveedor_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $entrada= new EntradaPapeleria;
        $entrada->materialpapelera_id = request('materialpapelera_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
        $entrada->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index4', compact('material'));
                        
    }

    public function update5 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'presentacion',
            'observaciones',

        ]);

        $proveedor=Proveedor::find(request('Proveedor_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $entrada= new EntradaPapeleria;
        $entrada->materialpapelera_id = request('materialpapelera_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
        $entrada->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index5', compact('material'));
                        
    }

    public function update6 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'Proveedor_id' => 'required',
            'numero_factura' => 'required',
            'cantidad'=> 'required',
            'precio'=> 'required',
            'presentacion',
            'observaciones',

        ]);

        $proveedor=Proveedor::find(request('Proveedor_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $entrada= new EntradaPapeleria;
        $entrada->materialpapelera_id = request('materialpapelera_id');
        $entrada->proveedor_id = request('Proveedor_id');
        $entrada->nombre_proveedor = $proveedor->nombre;
        $entrada->numero_factura = request('numero_factura');
        $entrada->cantidad = request('cantidad');
        $entrada->precio = request('precio');
        $entrada->presentacion = request('presentacion');
        $entrada->observaciones = request('observaciones');
        $entrada->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia + request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index6', compact('material'));
                        
    }

    public function show1($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = EntradaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialEn1',compact('material','historiales'));
    }

    public function show2($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = EntradaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialEn2',compact('material','historiales'));
    }

    public function show3($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = EntradaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialEn3',compact('material','historiales'));
    }

    public function show4($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = EntradaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialEn4',compact('material','historiales'));
    }

    public function show5($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = EntradaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialEn5',compact('material','historiales'));
    }

    public function show6($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = EntradaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialEn6',compact('material','historiales'));
    }

}
