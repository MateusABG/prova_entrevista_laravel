<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main_page');
});

Route::get(
    "/fazer_pedido",
    function () {
        return view("fazer_pedido");
    }
);

Route::get("/paginaDeClientes",function(){
    return view("pagina_de_clientes");
});

Route::get("/adicionarCliente",function(){ 
    return view("adicionar_cliente");
});


Route::get("/editarCliente",function(){ 
    return view("editar_cliente");
});

Route::get("/editarPedido",function(){ 
    return view("editar_pedido");
});