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
}

