<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialPapelera;

class InventarioMatrizPapeleriaController extends Controller
{
    
    	public function index1(Request $request)
    {
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizPapeleria.index1',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        	public function index2(Request $request)
    {
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizPapeleria.index2',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        	public function index3(Request $request)
    {
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizPapeleria.index3',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        	public function index4(Request $request)
    {
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizPapeleria.index4',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        	public function index5(Request $request)
    {
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizPapeleria.index5',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        	public function index6(Request $request)
    {
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->paginate(100);
        return view('inventarioMatrizPapeleria.index6',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        public function agregar1($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar1', compact('material', 'proveedors'));
    }

        public function agregar2($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar2', compact('material', 'proveedors'));
    }

        public function agregar3($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar3', compact('material', 'proveedors'));
    }

        public function agregar4($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar4', compact('material', 'proveedors'));
    }

        public function agregar5($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar5', compact('material', 'proveedors'));
    }

        public function agregar6($id)
    {
        $material = MaterialClinica::find($id);
        $proveedors = Proveedor::all()->sortBy('nombre');
        return view('inventarioMatrizPapeleria.agregar6', compact('material', 'proveedors'));
    }






}
