<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/criarproduto', 'ProdutosController@criarProduto');
Route::get('getproduto','ProdutosController@getProduto');
Route::get('findproduto/{id}','ProdutosController@findProduto');
Route::put('updateproduto/{id}','ProdutosController@updateProduto');
Route::delete('deleteproduto/{id}','ProdutosController@deleteProduto');

Route::post('/criarcliente', 'ClientesController@criarCliente');
Route::get('getcliente','ClientesController@getCliente');
Route::get('findcliente/{id}','ClientesController@findCliente');
Route::put('updatecliente/{id}','ClientesController@updateCliente');
Route::delete('deletecliente/{id}','ClientesController@deleteCliente');
