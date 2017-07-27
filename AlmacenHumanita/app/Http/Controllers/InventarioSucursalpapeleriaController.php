<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\MaterialPapelera;
use Auth;   
use App\User;
use App\InventarioSucursalpapeleria;

class InventarioSucursalpapeleriaController extends Controller
{

            public function inventariopape(Request $request){

        $user = Auth::User()->find('id');
        $materialpapeleria = InventarioSucursalpapeleria::name($request->get('name'))->orderBy('nombre_material','ASC')->paginate(150);
        $materialpapelerias = MaterialPapelera::name($request->get('name'))->orderBy('nombre','ASC')->paginate(150);
        return view('inventarios.inventariopape', compact('materialpapeleria', 'user', 'materialpapelerias'));
    }


    public function modificaExistencia(Request $request){
    	$existencia = $request->get('existencia');
    	$id = $request->get('materia_id');
    	InventarioSucursalpapeleria::where('id',$id)->update(['existencia' => $existencia]); 

    	return back();
    }

}

