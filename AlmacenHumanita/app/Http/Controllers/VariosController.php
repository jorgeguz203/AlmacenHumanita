<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Varios;
use Auth;

class VariosController extends Controller
{

    public function modificaExistencia(Request $request){
    	$extra = $request->get('extra');
    	$seccion = $request->get('seccion');
    	$user_id = Auth::user()->id;


        $input = [
        	'user_id' => $user_id, 
        	'seccion' => $seccion, 
        	'extra' => $extra, 
        ];
        $varios = Varios::create($input);

    	return back();
    }

}
