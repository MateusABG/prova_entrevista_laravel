<?php

use App\Http\Controllers\API\ClientesController;
use App\Http\Controllers\API\PedidosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 

//Aqui chamo minhas APIs


//CLIENTE 
//API de registro de clientes ativos
Route::post("clientes",[ClientesController::class,'store']);  

//API de atualização de dados de cliente
Route::post("clientes/{id}/update",[ClientesController::class,'update']);

//API de atualização de dados de cliente
Route::delete("clientes/{id}/delete",[ClientesController::class,'delete']);


//PEDIDOS 

//API de registro de pedidos novos
Route::post("pedidos",[PedidosController::class,'store']);

//API de atualização de dados de pedido
Route::post("pedidos/{id}/update",[PedidosController::class,'update']);

//API de atualização de dados de pedido
Route::delete("pedidos/{id}/delete",[PedidosController::class,'delete']);