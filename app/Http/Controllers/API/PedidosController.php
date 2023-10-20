<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PedidosController extends Controller
{ 

    public function store(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                "id_cliente" => "required",
                "valor_frete" => 'required',
                "data_entrega" => "required"
            ]
        );

        if ($validation->fails()) {
            $data = [
                "status" => 422,
                "message" => $validation->messages()
            ];
            return response()->json($data, 422);
        } else {
            //Verifica se o cliente existe 

            $cliente = Cliente::find($request->id_cliente); 
            if ($cliente) {
                $pedido = Pedido::create(
                    [
                        'id_cliente' => $cliente->id,
                        'valor_frete' => $request->valor_frete,
                        'data_entrega' => $request->data_entrega
                    ]
                ); 

                if ($pedido) {
                    $data = [
                        "status" => 200,
                        "message" => "Pedido registrado com sucesso"
                    ];
                    return response()->json($data, 200);
                } else {
                    $data = [
                        "status" => 500,
                        "message" => "Pedido não foi registrado,algo deu errado"
                    ];
                    return response()->json($data, 500);
                }
            }else{
                $data = [
                    "status" => 404,
                    "message" => "ID de Cliente informado não existe"
                ];
                return response()->json($data,404);
            }
        }
    }


    public function edit($id){
        $pedido = Pedido::find($id);
        if($pedido){
            $data = [
                "status"=>200,
                "mensagem"=>$pedido
            ];
            return response()->json($data,200);
        }else{
            $data=[
                "status"=>404,
                "mensagem"=>"Pedido não encontrado"
            ];
            return response()->json($data,404);
        }
    }

    public function update(Request $request,int $id){
        $validation = Validator::make(
            $request->all(),
            [
                "id_cliente" => "required",
                "valor_frete" => 'required',
                "data_entrega" => "required"
            ]
        );

        if ($validation->fails()) {
            $data = [
                "status" => 422,
                "errors" => $validation->messages()
            ];
            return response()->json($data, 422);
        } else {
            //Verifica se o cliente existe
            $id_cliente = $request->id_cliente;

            $cliente = Cliente::find($id_cliente);
            if ($cliente) {
                $pedido = Pedido::find($id);  

                if ($pedido) {
                    $pedido->update(
                        [
                            'id_cliente' => $id_cliente,
                            'valor_frete' => $request->valor_frete,
                            'data_entrega' => $request->data_entrega
                        ]
                    );
                    $data = [
                        "status" => 200,
                        "message" => "Pedido registrado com sucesso"
                    ];
                    return response()->json($data, 200);
                } else {
                    $data = [
                        "status" => 500,
                        "message" => "Pedido não foi registrado,algo deu errado"
                    ];
                    return response()->json($data, 500);
                }
            }
        }
    }

    public function delete(int $id){
        $pedido=Pedido::find($id);
        if($pedido){
            $pedido->delete();
            return response()->json([
                "status"=>200,
                "mensagem"=>"Pedido deletado com sucesso"
            ]);
        }else{
            return response()->json([
                "status"=>404,
                "mensagem"=>"Pedido não encontrado"
            ]);
        }
    }
}