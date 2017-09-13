<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\MaterialPapelera;
use App\InventarioSucursal;
use App\InventarioSucursalpapeleria;
use App\User;
use Auth;
use App\Faltante;
use App\FaltantePape;
use App\Pedidos;
use Carbon\Carbon;


class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $faltante = Faltante::orderBy('nombre_user', 'ASC')->get();
        $faltantepape = FaltantePape::orderBy('nombre_user', 'ASC')->get();
        $user = Auth::User()->find('id');
        $users = User::all();
        $materiales = MaterialClinica::orderBy('nombre', 'ASC')->get();
        $materialess = MaterialPapelera::orderBy('nombre', 'ASC')->get();
        $materialclinico = InventarioSucursal::orderBy('nombre_material', 'ASC')->get();
        $materialpapeleria = InventarioSucursalpapeleria::orderBy('nombre_material', 'ASC')->get();
        return view('home',compact('materiales', 'materialess', 'materialclinico', 'materialpapeleria', 'user', 'users', 'faltante', 'faltantepape'));
    }


    public function hacerpedido(Request $request){
        $cantidad = $request->get('cantidad');
        $id = $request->get('materia_id');
        $seccion = $request->get('seccion');
        $ped = MaterialClinica::find($id);
            $tiempo=Carbon::now();
            Pedidos::insert(['materialclinica_id' => $ped->id, 
                'user_id' => Auth::user()->id, 
                'nombre_user' => Auth::user()->name,
                'nombre_material' => $ped->nombre,
                'area' => $ped->area,
                'seccion' => $seccion,
                'inmunologia' => $ped->inmunologia,
                'uroanalisis' => $ped->uroanalisis,
                'hematologia' => $ped->hematologia,
                'bacteriologia' => $ped->bacteriologia,
                'bioquimica' => $ped->bioquimica,
                'hormonas' => $ped->hormonas,
                'cantidad' => $cantidad,
                'observaciones' => null,
                'extras' => null,
                'created_at'=>$tiempo
            ]);


        return response()->json([
            'id' => $id,
            'cantidad' => $cantidad,
            'seccion' => $seccion
        ]);

    }
}

