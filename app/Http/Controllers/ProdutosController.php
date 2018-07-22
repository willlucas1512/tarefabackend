<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function criarProduto(Request $request){

    	$novoProduto = new Produto;
    	$novoProduto->nome = $request->nome;
    	$novoProduto->categoria = $request->categoria;
    	$novoProduto->preco = $request->preco;
    	$novoProduto->codigo = $request->codigo;

    	$novoProduto->save();
    }

    	public function getProduto() {
    		$produto = Produto::all();
    		return response()->json([$produto]);
    	}
    	public function findProduto($id) {
    		$produto = Produto::findorfail($id);
    		return response()->json([$produto]);
    	}
    	public function updateProduto(Request $request, $id) {
    		$produto = Produto::findorfail($id);

    		if ($request->nome) {
    			$produto->nome = $request->nome;
    		}
    		if ($request->categoria) {
    			$produto->categoria = $request->categoria;
    		}
    		if ($request->preco) {
    			$produto->preco = $request->preco;
    		}
    		if ($request->codigo){
    			$produto->codigo = $request->codigo;
    		}
    	
    	    $produto->save();
    }
    public function deleteProduto($id){
    	Produto::destroy($id);
    }


}

