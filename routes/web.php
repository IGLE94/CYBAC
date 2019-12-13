<?php

// App\User::create([
// 	'name' => 'Geremias',
// 	'email' => 'geremias@gmail.com',
// 	'password' => '12341234'
// ]);

Route::view('/', 'home')->name('home');


// Route::get('orders', ['as' => 'orders.index', 'uses' => 'OrdenController@index']);
// Route::get('orders/crear', ['as' => 'orders.crear', 'uses' => 'OrdenController@create']);
// Route::post('orders', ['as' => 'orders.store', 'uses' => 'OrdenController@store']);
// Route::get('orders/{id}', ['as' => 'orders.show', 'uses' => 'OrdenController@show']);
// Route::get('orders/{id}/edit', ['as' => 'orders.edit', 'uses' => 'OrdenController@edit']);
// Route::put('orders/{id}', ['as' => 'orders.update', 'uses' => 'OrdenController@update']);
// Route::delete('orders/{id}', ['as' => 'orders.destroy', 'uses' => 'OrdenController@destroy']);

Route::patch('ordenes/{id}/status', 'OrdenController@status')->name('ordenes.status');

Route::resource('ordenes', 'OrdenController');
Route::resource('clientes', 'ClientesController')->except('destroy');
Route::resource('servicios', 'ServicioController')->except('show', 'destroy');
Route::resource('equipos', 'EquiposController')->except('show', 'destroy');
Route::get('downloadPDF/{id}/download', 'DownloadPDFController@downloadPDF')->name('downloadPDF');

Auth::routes(['register' => false]);



// Rutas para el proyecto 2
Route::resource('usuarios', 'UsuariosController')->except('destroy');
Route::resource('empresas', 'EmpresasController')->except('destroy');
Route::resource('proyectos', 'ProyectosController')->except('destroy');
Route::resource('tipos', 'TiposController')->except('show', 'destroy');

Route::get('assignProjects/{id}/asignar', 'ProjectsController@assignProjects')->name('assignProjects');
Route::put('assignUser/{id}', 'ProjectsController@assignUser')->name('assignUser');
Route::get('projectIndex/{id}', 'ProjectsController@projectIndex')->name('projectIndex');

Route::resource('categorias', 'CategoriasController')->except('show', 'destroy');

Route::get('actividades/{id}/create', 'ActividadesController@create')->name('actividades.create');
Route::put('actividades/{id}', 'ActividadesController@store')->name('actividades.store');