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

}
