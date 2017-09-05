<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\Controller;
use App\InventarioSucursal;
use Illuminate\Http\Request;
use App\MaterialClinica;
use App\MaterialPapelera;
use Auth;   
use App\User;
use App\Pedidos;
use App\PedidosPape;
use App\HistorialPedidos;
use Carbon\Carbon;
use App\Faltante;

use App\HistorialPedidosPape;

use App\Varios;


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
            'seccion',
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
	

        return redirect('http://127.0.0.1:8000/inventario');
    }

        public function create_inmunologia($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidosinmunologia',compact('material'));
    }

            public function create_uroanalisis($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidosuroanalisis',compact('material'));
    }

            public function create_hematologia($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidoshematologia',compact('material'));
    }

            public function create_bacteriologia($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidosbacteriologia',compact('material'));
    }

            public function create_bioquimica($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidosbioquimica',compact('material'));
    }

            public function create_hormonas($id)
    {
        $material = MaterialClinica::find($id);
        return view('pedidos.pedidoshormonas',compact('material'));
    }

            public function store_cli(Request $request)
    {
        $this->validate($request, [
            'materialclinica_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
            'seccion',
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
  

        return redirect('home');
                        
    }



    public function showsuc(){

      $pedidos = Pedidos::orderBy('nombre_material', 'ASC')->get();
      $faltante = Faltante::orderBy('nombre_material', 'ASC')->get();
      return view('pendientesSucursal.pendientesClinico',compact('pedidos', 'faltante'));

}

    public function showlab(){

      $pedidos = Pedidos::orderBy('nombre_material', 'ASC')->get();
      $faltante = Faltante::orderBy('nombre_material', 'ASC')->get();
      $varios = Varios::orderBy('extra', 'ASC')->get();

      return view('pendientesSucursal.pendienteLab',compact('pedidos', 'faltante', 'varios'));

}
    public function showadmin(){

        $user = User::all();
        $pedidos = Pedidos::orderBy('nombre_material', 'ASC')->get();
        $materiales = MaterialClinica::orderBy('nombre', 'ASC')->get();
        return view('pendientesAdmin.pendienteClinico',compact('user', 'pedidos', 'materiales'));
    }

        public function showadminpape(){

        $user = User::all();
        $pedidos = PedidosPape::orderBy('nombre_material', 'ASC')->get();
        $materiales = MaterialPapelera::orderBy('nombre', 'ASC')->get();
        return view('pendientesAdmin.pendientePapeleria',compact('user', 'pedidos', 'materiales'));

    }

        public function showadminlab(){

        $user = User::all();
        $pedidos = Pedidos::orderBy('nombre_material', 'ASC')->get();
        $varios = Varios::orderBy('extra', 'ASC')->get();
        $materiales = MaterialClinica::orderBy('nombre', 'ASC')->get();
        return view('pendientesAdmin.pendienteLab',compact('user', 'pedidos', 'varios', 'materiales'));
    }


    public function destroy($id)
    {
        $pedido=Pedidos::find($id);
        $tiempo=Carbon::now();
        HistorialPedidos::insert(array('materialclinica_id'=>$pedido->materialclinica_id,
        'user_id'=>$pedido->user_id, 
        'nombre_user'=>$pedido->nombre_user, 
        'nombre_material'=>$pedido->nombre_material, 
        'area'=>$pedido->area, 
        'seccion'=>$pedido->seccion,
        'inmunologia'=>$pedido->inmunologia, 
        'uroanalisis'=>$pedido->uroanalisis, 
        'hematologia'=>$pedido->hematologia, 
        'bacteriologia'=>$pedido->bacteriologia, 
        'bioquimica'=>$pedido->bioquimica, 
        'hormonas'=>$pedido->hormonas, 
        'cantidad'=>$pedido->cantidad, 
        'observaciones'=>$pedido->observaciones, 
        'extras'=>$pedido->extras,
        'created_at'=>$tiempo));
        Pedidos::find($id)->delete();
        return redirect()->route('pendientesSucursal.pendientesClinico')
                        ->with('Se ha entregado con éxito');
    }

        public function destroylab($id)
    {
        $pedido=Pedidos::find($id);
        $tiempo=Carbon::now();
        HistorialPedidos::insert(array('materialclinica_id'=>$pedido->materialclinica_id,
        'user_id'=>$pedido->user_id, 
        'nombre_user'=>$pedido->nombre_user, 
        'nombre_material'=>$pedido->nombre_material, 
        'area'=>$pedido->area, 
        'seccion'=>$pedido->seccion,
        'inmunologia'=>$pedido->inmunologia, 
        'uroanalisis'=>$pedido->uroanalisis, 
        'hematologia'=>$pedido->hematologia, 
        'bacteriologia'=>$pedido->bacteriologia, 
        'bioquimica'=>$pedido->bioquimica, 
        'hormonas'=>$pedido->hormonas, 
        'cantidad'=>$pedido->cantidad, 
        'observaciones'=>$pedido->observaciones, 
        'extras'=>$pedido->extras,
        'created_at'=>$tiempo));
        Pedidos::find($id)->delete();
        return back();
    }

    public function destroyvarios($id){
        Varios::find($id)->delete();
        return redirect()->route('pendientesSucursal.pendienteLab')
                        ->with('Se ha entregado con éxito');
    }

    public function faltante($id){

        $pedido = Pedidos::find($id);
        return view('faltantes.faltanteSuc',compact('pedido'));
    }

    public function faltantestore(Request $request, $id){

            $this->validate($request, [
            'materialclinica_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
            'seccion',
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
        $pedido = Faltante::create($input);

                $ped = Pedidos::find($id);
        $ped->cantidad = $ped->cantidad - request('faltante');
        Pedidos::where('id',$id)->update(['cantidad' => $ped->cantidad]);
        $ped->save();

        $p=Pedidos::find($id);
        $tiempo=Carbon::now();
        HistorialPedidos::insert(array('materialclinica_id'=>$p->materialclinica_id,
        'user_id'=>$p->user_id, 
        'nombre_user'=>$pedido->nombre_user, 
        'nombre_material'=>$p->nombre_material, 
        'area'=>$p->area, 
        'seccion'=>$pedido->seccion,
        'inmunologia'=>$p->inmunologia, 
        'uroanalisis'=>$p->uroanalisis, 
        'hematologia'=>$p->hematologia, 
        'bacteriologia'=>$p->bacteriologia, 
        'bioquimica'=>$p->bioquimica, 
        'hormonas'=>$p->hormonas, 
        'cantidad'=>$p->cantidad, 
        'observaciones'=>$p->observaciones, 
        'extras'=>$p->extras,
        'created_at'=>$tiempo));

        Pedidos::find($id)->delete();

        return redirect()->route('pendientesSucursal.pendientesClinico')
                        ->with('Se ha eliminado con éxito');
    }

        public function destroyfaltante($ids)
    {
        $faltante=Faltante::find($ids);
        $tiempo=Carbon::now();
        HistorialPedidos::insert(array('materialclinica_id'=>$faltante->materialclinica_id,
        'user_id'=>$faltante->user_id, 
        'nombre_user'=>$faltante->nombre_user, 
        'nombre_material'=>$faltante->nombre_material, 
        'area'=>$faltante->area, 
        'seccion'=>$faltante->seccion,
        'inmunologia'=>$faltante->inmunologia, 
        'uroanalisis'=>$faltante->uroanalisis, 
        'hematologia'=>$faltante->hematologia, 
        'bacteriologia'=>$faltante->bacteriologia, 
        'bioquimica'=>$faltante->bioquimica, 
        'hormonas'=>$faltante->hormonas, 
        'cantidad'=>$faltante->faltante, 
        'observaciones'=>$faltante->observaciones, 
        'extras'=>$faltante->extras,
        'created_at'=>$tiempo));
        Faltante::find($ids)->delete();
        return redirect()->route('pendientesSucursal.pendientesClinico')
                        ->with('Se ha entregado con éxito');
    }

        public function faltanteLab($id){

        $pedido = Pedidos::find($id);
        return view('faltantes.faltanteLab',compact('pedido'));
    }

        public function faltantestorelab(Request $request, $id){

            $this->validate($request, [
            'materialclinica_id' => 'required',
            'user_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material'=> 'required',
            'area'=> 'required',
            'seccion',
            'inmunologia',
            'uroanalisis',
            'hematologia',
              'bacteriologia',
              'bioquimica',
              'hormonas',
              'cantidad'=> 'required',
              'observaciones',
              'faltante'=>'required',
              'extras',
        ]);

        $input = $request->all();
        $pedido = Faltante::create($input);

        $ped = Pedidos::find($id);
        $ped->cantidad = $ped->cantidad - request('faltante');
        Pedidos::where('id',$id)->update(['cantidad' => $ped->cantidad]);
        $ped->save();

        $p=Pedidos::find($id);
        $tiempo=Carbon::now();
        HistorialPedidos::insert(array('materialclinica_id'=>$p->materialclinica_id,
        'user_id'=>$p->user_id, 
        'nombre_user'=>$pedido->nombre_user, 
        'nombre_material'=>$p->nombre_material, 
        'area'=>$p->area, 
        'seccion'=>$pedido->seccion,
        'inmunologia'=>$p->inmunologia, 
        'uroanalisis'=>$p->uroanalisis, 
        'hematologia'=>$p->hematologia, 
        'bacteriologia'=>$p->bacteriologia, 
        'bioquimica'=>$p->bioquimica, 
        'hormonas'=>$p->hormonas, 
        'cantidad'=>$p->cantidad, 
        'observaciones'=>$p->observaciones, 
        'extras'=>$p->extras,
        'created_at'=>$tiempo));
        Pedidos::find($id)->delete();


        return redirect()->route('pendientesSucursal.pendienteLab')
                        ->with('Se ha eliminado con éxito');
    }


        public function destroyfaltanteLab($ids)
    {
        $faltante=Faltante::find($ids);
        $tiempo=Carbon::now();
        HistorialPedidos::insert(array('materialclinica_id'=>$faltante->materialclinica_id,
        'user_id'=>$faltante->user_id, 
        'nombre_user'=>$faltante->nombre_user, 
        'nombre_material'=>$faltante->nombre_material, 
        'area'=>$faltante->area, 
        'seccion'=>$faltante->seccion,
        'inmunologia'=>$faltante->inmunologia, 
        'uroanalisis'=>$faltante->uroanalisis, 
        'hematologia'=>$faltante->hematologia, 
        'bacteriologia'=>$faltante->bacteriologia, 
        'bioquimica'=>$faltante->bioquimica, 
        'hormonas'=>$faltante->hormonas, 
        'cantidad'=>$faltante->faltante, 
        'observaciones'=>$faltante->observaciones, 
        'extras'=>$faltante->extras,
        'created_at'=>$tiempo));
        Faltante::find($ids)->delete();
        return redirect()->route('pendientesSucursal.pendienteLab')
                        ->with('Se ha entregado con éxito');
    }





    public function showHistCli($id){

        $sucursales = User::find($id);
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('pendientesAdmin.historialPendientesClinico',compact('materiales', 'sucursales'));
    }

     public function showHistCli2($id){

        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('pendientesAdmin.historialPendientesClinico2',compact('historiales','materiales'));
    }


    public function showHistPap($id){

        $sucursales = User::find($id);
        $materiales = MaterialPapelera::orderBy('nombre','ASC')->get();
        return view('pendientesAdmin.historialPendientesPape',compact('materiales', 'sucursales'));
    }

     public function showHistPap2($id){


        $materiales = MaterialPapelera::find($id);
        $historiales = HistorialPedidosPape::orderBy('nombre_material','ASC')->get();
        return view('pendientesAdmin.historialPendientesPape2',compact('historiales','materiales'));
    }



    public function historialinmunologia(){
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('historialeslab.historialinmunologia',compact('materiales','historial'));
    }
        public function historialinmunologiamaterial($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialinmunologiamaterial',compact('materiales','historiales'));
    }
       public function historialinmunologialab($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialinmunologialab',compact('materiales','historiales'));
    }


    public function historialuroanalisis(){
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('historialeslab.historialuroanalisis',compact('materiales','historial'));
    }
            public function historialuroanalisismaterial($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialuroanalisismaterial',compact('materiales','historiales'));
    }


        public function historialhematologia(){
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('historialeslab.historialhematologia',compact('materiales','historial'));
    }

                public function historialhematologiamaterial($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialhematologiamaterial',compact('materiales','historiales'));
    }



            public function historialbacteriologia(){
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('historialeslab.historialbacteriologia',compact('materiales','historial'));
    }
                public function historialbacteriologiamaterial($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialbacteriologiamaterial',compact('materiales','historiales'));
    }


                public function historialbioquimica(){
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('historialeslab.historialbioquimica',compact('materiales','historial'));
    }
                    public function historialbioquimicamaterial($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialbioquimicamaterial',compact('materiales','historiales'));
    }



                    public function historialhormonas(){
        $materiales = MaterialClinica::orderBy('nombre','ASC')->get();
        return view('historialeslab.historialhormonas',compact('materiales','historial'));
    }
                    public function historialhormonasmaterial($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialhormonasmaterial',compact('materiales','historiales'));
    }



           public function historialuroanalisislab($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialuroanalisislab',compact('materiales','historiales'));
    }

           public function historialhematologialab($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialhematologialab',compact('materiales','historiales'));
    }

           public function historialbacteriologialab($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialbacteriologialab',compact('materiales','historiales'));
    }

           public function historialbioquimicalab($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialbioquimicalab',compact('materiales','historiales'));
    }

           public function historialhormonaslab($id){
        $materiales = MaterialClinica::find($id);
        $historiales = HistorialPedidos::orderBy('nombre_material','ASC')->get();
        return view('historialeslab.historialhormonaslab',compact('materiales','historiales'));
    }

        public function destroyclinico1($id)
    {
        Pedidos::find($id)->delete();
        return redirect()->route('pendientesAdmin.pendienteClinico')
                        ->with('Se ha eliminado la sucursal con éxito!');
    }

        public function destroypape1($id)
    {
        Pedidos::find($id)->delete();
        return redirect()->route('pendientesAdmin.pendientePapeleria')
                        ->with('Se ha eliminado la sucursal con éxito!');
    }

        public function destroylab1($id)
    {
        Pedidos::find($id)->delete();
        return redirect()->route('pendientesAdmin.pendienteLab')
                        ->with('Se ha eliminado la sucursal con éxito!');
    }



}
