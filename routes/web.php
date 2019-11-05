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

Route::resource('ordenes', 'OrdenController');
Route::resource('clientes', 'ClientesController');
Route::resource('servicios', 'ServicioController')->except('show');
Route::resource('equipos', 'EquiposController')->except('show');
Route::get('downloadPDF/{id}/download', 'DownloadPDFController@downloadPDF')->name('downloadPDF');

Auth::routes();
// ['register' => false]

