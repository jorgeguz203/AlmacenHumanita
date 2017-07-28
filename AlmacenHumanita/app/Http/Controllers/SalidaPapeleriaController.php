<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaterialPapelera;
use App\InventarioMatrizPapeleria;
use App\User;
use App\SalidaPapeleria;

class SalidaPapeleriaController extends Controller
{
    public function reducir1($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizPapeleria.reducir1', compact('material', 'users'));
    }

       public function reducirped($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizClinica.reducirpapeleria', compact('material', 'users'));
    }


    public function reducir2($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizPapeleria.reducir2', compact('material', 'users'));
    }

    public function reducir3($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizPapeleria.reducir3', compact('material', 'users'));
    }

    public function reducir4($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizPapeleria.reducir4', compact('material', 'users'));
    }

    public function reducir5($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizPapeleria.reducir5', compact('material', 'users'));
    }

    public function reducir6($id)
    {
        $material = MaterialPapelera::find($id);
        $users = User::all();
        return view('inventarioMatrizPapeleria.reducir6', compact('material', 'users'));
    }

    public function updateinvsalida1 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index1', compact('material'));
                        
    } 

        public function updateinvsalidaped (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('pendientesAdmin.pendientePapeleria', compact('material'));
                        
    } 

    public function updateinvsalida2 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index2', compact('material'));
                        
    } 

    public function updateinvsalida3 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index3', compact('material'));
                        
    } 

    public function updateinvsalida4 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index4', compact('material'));
                        
    } 

    public function updateinvsalida5 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index5', compact('material'));
                        
    } 

    public function updateinvsalida6 (Request $request, $id)
    {
            $this->validate($request, [
            'materialpapelera_id' => 'required',
            'user_id' => 'required',
            'cantidad'=> 'required',
            'nombre_user',
            'descripcion',

        ]);

        $user=User::find(request('user_id'));
        $material = MaterialPapelera::find(request('materialpapelera_id'));
        $salida= new SalidaPapeleria;
        $salida->materialpapelera_id = request('materialpapelera_id');
        $salida->user_id = request('user_id');
        $salida->cantidad = request('cantidad');
        $salida->nombre_user = $user->name;
        $salida->descripcion = request('descripcion');
        $salida->save();

        $material = MaterialPapelera::find($id);
        $material->existencia = $material->existencia - request('cantidad');
        MaterialPapelera::where('id',$id)->update(['existencia' => $material->existencia]);
        $material->save();

        return redirect()->route('inventarioMatrizPapeleria.index6', compact('material'));
                        
    } 

    public function shows1($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = SalidaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialSa1',compact('material','historiales'));
    }

    public function shows2($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = SalidaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialSa2',compact('material','historiales'));
    }

    public function shows3($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = SalidaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialSa3',compact('material','historiales'));
    }

    public function shows4($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = SalidaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialSa4',compact('material','historiales'));
    }

    public function shows5($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = SalidaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialSa5',compact('material','historiales'));
    }

    public function shows6($id)
    {
        $material = MaterialPapelera::find($id);
        $historiales = SalidaPapeleria::all();
        return view('inventarioMatrizPapeleria.historialSa6',compact('material','historiales'));
    }
}
