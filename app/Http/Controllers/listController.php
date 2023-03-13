<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\Venda;
use Illuminate\Http\Request;
class listController extends Controller
{
    public $produto;

    public function listagem(Request $request){

        $listProduto = estoque::all();

        return response()->json($listProduto);

    }

    public function listagemVenda(Request $request){

        $listVenda = venda::all();

        return response()->json($listVenda);

    }

    public function adicionarPedido(Request $request)
    {

        return response()->json($request);

    }


}