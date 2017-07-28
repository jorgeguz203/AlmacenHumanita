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
use App\FaltantePape;

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
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
              'cantidad'=> 'required',
              'observaciones',
        ]);

        $input = $request->all();
        $pedido = PedidosPape::create($input);
	

        return redirect('http://127.0.0.1:8000/inventariopapeleria')
                        ->with('Se ha creado el material con éxito!');

    }


    public function showpap(){

      $pedidos = PedidosPape::orderBy('nombre_material', 'ASC')->get();
      $faltante = FaltantePape::orderBy('nombre_material', 'ASC')->get();
      return view('pendientesSucursal.pendientePape',compact('pedidos', 'faltante'));

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

     public function faltantePape($id){

        $pedido = PedidosPape::find($id);
        return view('faltantes.faltantePape',compact('pedido'));
    }

    public function faltantestorePape(Request $request, $id){

            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
              'cantidad'=> 'required',
              'observaciones',

        ]);

        $input = $request->all();
        $pedido = FaltantePape::create($input);

        $ped = PedidosPape::find($id);
        $ped->cantidad = $ped->cantidad - request('faltante');
        PedidosPape::where('id',$id)->update(['cantidad' => $ped->cantidad]);
        $ped->save();

        $p=PedidosPape::find($id);
        $tiempo=Carbon::now();
        HistorialPedidosPape::insert(array('materialpapelera_id'=>$p->materialclinica_id,
        'user_id'=>$p->user_id, 
        'nombre_user'=>$pedido->nombre_user, 
        'nombre_material'=>$p->nombre_material, 
        'area'=>$p->area, 
        'cantidad'=>$p->cantidad, 
        'observaciones'=>$p->observaciones, 
        'created_at'=>$tiempo));


        PedidosPape::find($id)->delete();

        return redirect()->route('pendientesSucursal.pendientePape')
                        ->with('Se ha eliminado con éxito');
    }

        public function destroyfaltantePape($ids)
    {
        $faltante=FaltantePape::find($ids);
        $tiempo=Carbon::now();
        HistorialPedidosPape::insert(array('materialpapelera_id'=>$faltante->materialpapelera_id,
        'user_id'=>$faltante->user_id, 
        'nombre_user'=>$faltante->nombre_user, 
        'nombre_material'=>$faltante->nombre_material, 
        'area'=>$faltante->area, 
        'cantidad'=>$faltante->faltante, 
        'observaciones'=>$faltante->observaciones, 
        'created_at'=>$tiempo));
        FaltantePape::find($ids)->delete();
        
        return redirect()->route('pendientesSucursal.pendientePape')
                        ->with('Se ha entregado con éxito');
    }
}

