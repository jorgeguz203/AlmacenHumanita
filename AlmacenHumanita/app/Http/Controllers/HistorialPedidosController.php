<?php

namespace App\Http\Controllers;
use App\MaterialClinica;
use App\MaterialPapelera; 
use App\HistorialPedidos;
use App\HistorialPedidosPape;

use Illuminate\Http\Request;

class HistorialPedidosController extends Controller
{
     public function showHistInv($id){

        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::all();
        return view('inventarios.historialinventario',compact('historiales','materiales'));
    }

    public function showHistInvPap($id){

        $materiales = MaterialPapelera::find($id);
        $historiales = HistorialPedidosPape::all();
        return view('inventarios.historialinventariopape',compact('historiales','materiales'));
    }
}
