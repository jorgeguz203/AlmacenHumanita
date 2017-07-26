<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\InventarioSucursal;
use Illuminate\Http\Request;
use App\MaterialClinica;
use App\MaterialPapelera;
use Auth;   
use App\User;
use App\Pedidos;
use App\PedidosPape;


class PedidosPapeController extends Controller
{
    public function create_papeleria($id)
    {
        $material = MaterialPapelera::find($id);

        return view('pedidos.pedidospape',compact('material'));
    }

        public function store_papeleria(Request $request)
    {
        $this->validate($request, [
            'materialpapeleria_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
              'cantidad'=> 'required',
              'observaciones',
        ]);

        $input = $request->all();
        $pedido = PedidosPape::create($input);
	

        return redirect()->route('inventarios.inventariopape')
                        ->with('Se ha creado el material con éxito!');
    }
}

