<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {

	Route::get('/', function () {
   		return view('welcome');
	});

	Route::get('/home', 'HomeController@index');


	/*Route::resource('users','UserController');*/

	/*Admin Usuarios*/
	Route::get('users',['as'=>'users.index','uses'=>'UserController@index']);
	Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create']);
	Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store']);
	Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
	Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit']);
	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update']);
	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy']);

	//admin root
	Route::get('root',['as'=>'root.index','uses'=>'RootController@index','middleware' => ['permission:admin-admin']]);
	Route::get('root/{id}',['as'=>'root.show','uses'=>'RootController@show']);
	Route::get('root/{id}/edit',['as'=>'root.edit','uses'=>'RootController@edit','middleware' => ['permission:admin-admin']]);
	Route::patch('root/{id}',['as'=>'root.update','uses'=>'RootController@update','middleware' => ['permission:admin-admin']]);

	//admin de clinica
	Route::get('almacenclinica',['as'=>'almacenclinica.index','uses'=>'almacenclinicaController@index','middleware' => ['permission:admin-admin-clinica']]);
	Route::get('almacenclinica/{id}',['as'=>'almacenclinica.show','uses'=>'almacenclinicaController@show']);
	Route::get('almacenclinica/{id}/edit',['as'=>'almacenclinica.edit','uses'=>'almacenclinicaController@edit','middleware' => ['permission:admin-admin-clinica']]);
	Route::patch('almacenclinica/{id}',['as'=>'almacenclinica.update','uses'=>'almacenclinicaController@update','middleware' => ['permission:admin-admin-clinica']]);

	//admin papeleria
	Route::get('almacenpapeleria',['as'=>'almacenpapeleria.index','uses'=>'almacenpapeController@index','middleware' => ['permission:admin-admin-papelera']]);
	Route::get('almacenpapeleria/{id}',['as'=>'almacenpapeleria.show','uses'=>'almacenpapeController@show']);
	Route::get('almacenpapeleria/{id}/edit',['as'=>'almacenpapeleria.edit','uses'=>'almacenpapeController@edit','middleware' => ['permission:admin-admin-papelera']]);
	Route::patch('almacenpapeleria/{id}',['as'=>'almacenpapeleria.update','uses'=>'almacenpapeController@update','middleware' => ['permission:admin-admin-papelera']]);



	//Roles
	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create']);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store']);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit']);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update']);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy']);



	//ADMIN MaterialClinica

	Route::get('materialClinica',['as'=>'materialClinica.index','uses'=>'MaterialClinicaController@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('materialClinica/create',['as'=>'materialClinica.create','uses'=>'MaterialClinicaController@create','middleware' => ['permission:item-create']]);
	Route::post('materialClinica/create',['as'=>'materialClinica.store','uses'=>'MaterialClinicaController@store','middleware' => ['permission:item-create']]);
	Route::get('materialClinica/{id}',['as'=>'materialClinica.show','uses'=>'MaterialClinicaController@show']);
	Route::get('materialClinica/{id}/edit',['as'=>'materialClinica.edit','uses'=>'MaterialClinicaController@edit','middleware' => ['permission:item-edit']]);
	Route::patch('materialClinica/{id}',['as'=>'materialClinica.update','uses'=>'MaterialClinicaController@update','middleware' => ['permission:item-edit']]);
	Route::delete('materialClinica/{id}',['as'=>'materialClinica.destroy','uses'=>'MaterialClinicaController@destroy','middleware' => ['permission:item-delete']]);



	//ADMIN MaterialPapelera

	Route::get('materialPapelera',['as'=>'materialPapelera.index','uses'=>'MaterialPapeleraController@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('materialPapelera/create',['as'=>'materialPapelera.create','uses'=>'MaterialPapeleraController@create','middleware' => ['permission:item-create']]);
	Route::post('materialPapelera/create',['as'=>'materialPapelera.store','uses'=>'MaterialPapeleraController@store','middleware' => ['permission:item-create']]);
	Route::get('materialPapelera/{id}',['as'=>'materialPapelera.show','uses'=>'MaterialPapeleraController@show']);
	Route::get('materialPapelera/{id}/edit',['as'=>'materialPapelera.edit','uses'=>'MaterialPapeleraController@edit','middleware' => ['permission:item-edit']]);
	Route::patch('materialPapelera/{id}',['as'=>'materialPapelera.update','uses'=>'MaterialPapeleraController@update','middleware' => ['permission:item-edit']]);
	Route::delete('materialPapelera/{id}',['as'=>'materialPapelera.destroy','uses'=>'MaterialPapeleraController@destroy','middleware' => ['permission:item-delete']]);



	//ADMIN Proveedor

	Route::get('proveedor',['as'=>'proveedor.index','uses'=>'ProveedorController@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('proveedor/create',['as'=>'proveedor.create','uses'=>'ProveedorController@create','middleware' => ['permission:item-create']]);
	Route::post('proveedor/create',['as'=>'proveedor.store','uses'=>'ProveedorController@store','middleware' => ['permission:item-create']]);
	Route::get('proveedor/{id}',['as'=>'proveedor.show','uses'=>'ProveedorController@show']);
	Route::get('proveedor/{id}/edit',['as'=>'proveedor.edit','uses'=>'ProveedorController@edit','middleware' => ['permission:item-edit']]);
	Route::patch('proveedor/{id}',['as'=>'proveedor.update','uses'=>'ProveedorController@update','middleware' => ['permission:item-edit']]);
	Route::delete('proveedor/{id}',['as'=>'proveedor.destroy','uses'=>'ProveedorController@destroy','middleware' => ['permission:item-delete']]);	

});



