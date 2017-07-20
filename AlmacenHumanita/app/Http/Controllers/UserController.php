<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;
use Hash;
use App\MaterialClinica;
use App\InventarioSucursal;
use App\MaterialPapelera;
use App\InventarioSucursalpapeleria;



class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('name','ASC')->paginate(100);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_name','id');
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|regex:/^.*(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).*$/|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        $invcli = MaterialClinica::all();
        foreach ($invcli as $invc){
            InventarioSucursal::insert(array('materialclinica_id' => $invc->id, 'User_id' => $user->id, 
                'nombre_material' => $invc->nombre,
                'nombre_user' => $user->name,
                'existencia' => 0));
        }

                $invpap = MaterialPapelera::all();
        foreach ($invpap as $invp){
            InventarioSucursalpapeleria::insert(array('materialpapelera_id' => $invp->id, 'User_id' => $user->id, 'nombre_material' => $invp->nombre,
                'nombre_user' => $user->name, 'existencia' => 0));
        }

        return redirect()->route('users.index')
                        ->with('Se ha creado la sucursal con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('display_name','id');
        $userRole = $user->roles->pluck('id','id')->toArray();

        return view('users.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|min:6|regex:/^.*(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).*$/|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();

        
        foreach ($request->input('roles') as $key => $value) {
            $user->attachRole($value);
        }

        return redirect()->route('users.index')
                        ->with('Se ha modificado la sucursal con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('Se ha eliminado la sucursal con éxito!');
    }


    public function editinvSuc(Request $request, $id)
    {
        $user = User::find($id);
        $mats = InventarioSucursal::all();
    
        return view('users.editinv',compact('mats','user'));
    }

    public function editinvPap(Request $request, $id)
    {
        $user = User::find($id);
        $mats = InventarioSucursalpapeleria::all();
     
        return view('users.editinvpap',compact('mats','user'));
    }



     public function editinvSuc2(Request $request,$user, $id)
    {
       
        $user = User::find($id);
        $mats = InventarioSucursal::find($id);

     
        return view('users.editinv2',compact('user','mats'));
    }



     public function editinvPap2(Request $request,$user, $id)
    {
        $user = User::find($id);
        $mats = InventarioSucursalpapeleria::find($id);
     
        return view('users.editinvpap2',compact('user','mats'));
    }


    public function updateSuc(Request $request, $id)
    {
        $this->validate($request, [
            'User_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material' => 'required',
            'maximo' => 'required',
            'minimo' => 'required',
            'existencia' => 'required',
  
        ]);
        InventarioSucursal::find($id)->update($request->all());

        $h = request('User_id');
   
        return redirect()->route('users.editinv',$h)
                        ->with('Se ha modificado el material con éxito!');
    }


    public function updatePap(Request $request, $id)
    {
            $this->validate($request, [
            'User_id' => 'required',
            'nombre_user' => 'required',
            'nombre_material' => 'required',
            'maximo' => 'required',
            'minimo' => 'required',
            'existencia' => 'required',
  
        ]);
        InventarioSucursalpapeleria::find($id)->update($request->all());

        $h = request('User_id');
   
        return redirect()->route('users.editinvpap',$h)
                        ->with('Se ha modificado el material con éxito!');
    }


}