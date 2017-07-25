<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\InventarioSucursal;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function create_toma($id)
    {
        $tomas = InventarioSucursaL::find('id');
        return view('pedidos.pedidosMuestras',compact('tomas'));
    }

        public function store_toma(Request $request)
    {
        $this->validate($request, [
            'materialclinica_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
            'inmunologia',
            'uroanalisis',
              'hematologia',
              'bacteriologia',
              'bioquimica',
              'hormonas',
              'cantidad'=> 'required',
              'observaciones',
              'extras',
        ]);

        $input = $request->all();
        $pedido = Pedidos::create($input);
	

        return redirect()->route('inventarios.inventario')
                        ->with('Se ha creado el material con éxito!');
    }
}
