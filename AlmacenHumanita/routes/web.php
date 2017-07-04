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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');


	/*Route::resource('users','UserController');*/

	/*Admin Usuarios*/
	Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create']);
	Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store']);
	Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
	Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit']);
	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update']);
	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy']);



	//ADMIN MaterialClinica

	Route::get('materialClinica',['as'=>'materialClinica.index','uses'=>'MaterialClinicaController@index',]);
	Route::get('materialClinica/create',['as'=>'materialClinica.create','uses'=>'MaterialClinicaController@create',]);
	Route::post('materialClinica/create',['as'=>'materialClinica.store','uses'=>'MaterialClinicaController@store']);
	Route::get('materialClinica/{id}',['as'=>'materialClinica.show','uses'=>'MaterialClinicaController@show']);
	Route::get('materialClinica/{id}/edit',['as'=>'materialClinica.edit','uses'=>'MaterialClinicaController@edit']);
	Route::patch('materialClinica/{id}',['as'=>'materialClinica.update','uses'=>'MaterialClinicaController@update']);
	Route::delete('materialClinica/{id}',['as'=>'materialClinica.destroy','uses'=>'MaterialClinicaController@destroy']);



	//ADMIN MaterialPapelera

	Route::get('materialPapelera',['as'=>'materialPapelera.index','uses'=>'MaterialPapeleraController@index']);
	Route::get('materialPapelera/create',['as'=>'materialPapelera.create','uses'=>'MaterialPapeleraController@create']);
	Route::post('materialPapelera/create',['as'=>'materialPapelera.store','uses'=>'MaterialPapeleraController@store']);
	Route::get('materialPapelera/{id}',['as'=>'materialPapelera.show','uses'=>'MaterialPapeleraController@show']);
	Route::get('materialPapelera/{id}/edit',['as'=>'materialPapelera.edit','uses'=>'MaterialPapeleraController@edit']);
	Route::patch('materialPapelera/{id}',['as'=>'materialPapelera.update','uses'=>'MaterialPapeleraController@update']);
	Route::delete('materialPapelera/{id}',['as'=>'materialPapelera.destroy','uses'=>'MaterialPapeleraController@destroy']);



	//ADMIN Proveedor

	Route::get('proveedor',['as'=>'proveedor.index','uses'=>'ProveedorController@index']);
	Route::get('proveedor/create',['as'=>'proveedor.create','uses'=>'ProveedorController@create']);
	Route::post('proveedor/create',['as'=>'proveedor.store','uses'=>'ProveedorController@store']);
	Route::get('proveedor/{id}',['as'=>'proveedor.show','uses'=>'ProveedorController@show']);
	Route::get('proveedor/{id}/edit',['as'=>'proveedor.edit','uses'=>'ProveedorController@edit']);
	Route::patch('proveedor/{id}',['as'=>'proveedor.update','uses'=>'ProveedorController@update']);
	Route::delete('proveedor/{id}',['as'=>'proveedor.destroy','uses'=>'ProveedorController@destroy']);	

});



