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


class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::User()->find('id');
        $materiales = MaterialClinica::all();
        $materialess = MaterialPapelera::all();
        $materialclinico = InventarioSucursal::all();
        $materialpapeleria = InventarioSucursalpapeleria::all();
        return view('home',compact('materiales', 'materialess', 'materialclinico', 'materialpapeleria', 'user'));
    }
}

