<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Pedido;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientesController extends Controller
{
    //

    public function index()
    {
        $clientes = Cliente::all();

        if ($clientes->count() > 0) {
            $data = [
                'status' => 200,
                'clientes' => $clientes
            ];
            return response()->json($data, 200);
        } else {
            $data = [
                'status' => 404,
                'status_message' => 'Nenhum registro encontrado'
            ];
            // return response()->json($data, 404);
            return response()->json($data, 404);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
            $cliente = Cliente::create([
                'name' => $request->name
            ]);

            if ($cliente) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Cliente adicionado com sucesso'
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'Algo deu errado'
                ], 500);
            }
        }
    }
 

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            $data = [
                'status' => 200,
                'clientes' => $cliente
            ];
            return response()->json($data, 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Cliente não encontrado'
            ], 404);
        }
    }

    public function update(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
            $cliente = Cliente::find($id);
            if ($cliente) {
                $cliente->update([
                    'name' => $request->name
                ]);

                return response()->json([
                    'status' => 200,
                    'message' => 'Cliente updated com sucesso'
                ], 200);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Algo deu errado'
                ], 404);
            }
        }
    }

    public function delete($id){ 
        $cliente = Cliente::find($id);
        $pedido =  DB::table("pedidos")->where("id_cliente", $id)->delete();
        if($cliente){
            $cliente->delete(); 
            return response()->json([
                'status' => 200,
                'message' => 'Cliente deletado com sucesso'
            ], 200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Algo deu errado'
            ], 404);
        } 
    }
}