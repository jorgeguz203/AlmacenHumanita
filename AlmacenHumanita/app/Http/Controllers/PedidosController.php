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

class PedidosController extends Controller
{
    public function create_toma($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidosMuestras',compact('material'));
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



    public function showsuc(){

      $pedidos = Pedidos::all();
      return view('pendientesSucursal.pendientesClinico',compact('pedidos'));


    public function showadmin(){

        $user = User::all();
        $pedidos = Pedidos::all();
        return view('pendientesAdmin.pendienteClinico',compact('user', 'pedidos'));
    }

        public function showadminpape(){

        $user = User::all();
        $pedidos = PedidosPape::all();
        return view('pendientesAdmin.pendientePapeleria',compact('user', 'pedidos'));

    }
}
