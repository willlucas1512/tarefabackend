<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClientesController extends Controller
{
   public function criarCliente(Request $request){

    	$novoClientes = new Clientes;
    	$novoClientes->nome = $request->nome;
    	$novoClientes->endereco = $request->endereco;
    	$novoClientes->telefone = $request->telefone;
    	$novoClientes->status = $request->status;
    	$novoClientes->limite = $request->limite;
    	$novoClientes->codigo = $request->codigo;

    	$novoClientes->save();
    }

    	public function getCliente() {
    		$cliente = Clientes::all();
    		return response()->json([$cliente]);
    	}
    	public function findCliente($id) {
    		$cliente = Clientes::findorfail($id);
    		return response()->json([$cliente]);
    	}
    	public function updateCliente(Request $request, $id) {
    		$cliente = Clientes::findorfail($id);

    		if ($request->nome) {
    			$cliente->nome = $request->nome;
    		}
    		if ($request->endereco) {
    			$cliente->endereco = $request->endereco;
    		}
    		if ($request->telefone) {
    			$cliente->telefone = $request->telefone;
    		}
    		if ($request->status){
    			$cliente->status = $request->status;
    		}
    		if ($request->limite){
    			$cliente->limite = $request->limite;
    		}
    	
    	    $cliente->save();
    }
    public function deleteCliente($id){
    	Clientes::destroy($id);
    }
 //
}

