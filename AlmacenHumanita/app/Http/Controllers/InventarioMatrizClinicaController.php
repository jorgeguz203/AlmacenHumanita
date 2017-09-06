<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;

class InventarioMatrizClinicaController extends Controller
{

	public function index(Request $request)
    {
        $materiales = MaterialClinica::name($request->get('name'))->orderBy('nombre','ASC')->paginate(1000);
        return view('inventarioMatrizClinica.index',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function indexclinicos(Request $request)
    {
        $materiales = MaterialClinica::name($request->get('name'))->orderBy('nombre','ASC')->paginate(1000);
        return view('inventarioMatrizClinica.indexclinicos',compact('materiales'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    
    
}
