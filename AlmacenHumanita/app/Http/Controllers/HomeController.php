<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MaterialClinica;
use App\MaterialPapelera;


class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $materiales = MaterialClinica::all();
        $materialess = MaterialPapelera::all();
        return view('home',compact('materiales', 'materialess'));
    }
}
