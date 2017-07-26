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
use Carbon\Carbon;
use App\HistorialPedidosPape;


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


    public function showpap(){

      $pedidos = PedidosPape::orderBy('nombre_material', 'ASC')->get();
      return view('pendientesSucursal.pendientePape',compact('pedidos'));

    }

        public function destroy($id)
    {
        $pedido=PedidosPape::find($id);
        $tiempo=Carbon::now();
        HistorialPedidosPape::insert(array('materialpapelera_id'=>$pedido->materialpapelera_id,
        'user_id'=>$pedido->user_id, 
        'nombre_user'=>$pedido->nombre_user, 
        'nombre_material'=>$pedido->nombre_material, 
        'area'=>$pedido->area, 
        'cantidad'=>$pedido->cantidad, 
        'observaciones'=>$pedido->observaciones, 
        'created_at'=>$tiempo));

        PedidosPape::find($id)->delete();
        return redirect()->route('pendientesSucursal.pendientePape')
                        ->with('Se ha eliminado con éxito');
    }
}

