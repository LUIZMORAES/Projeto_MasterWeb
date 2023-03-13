<?php

use App\Http\Controllers\listController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::group(['middleware' => 'api'], function (Request $router) {

//     Route::get('/', function(){
//         return response()->json(['message' => 'Teste API ', 'status' => 'Conectado']);
//     });

// });

Route::get('/', function(){
    return response()->json(['message' => 'Teste API ', 'status' => 'Conectado']);
});

//Lista do estoque
Route::get('/lista',[listController::class,'listagem']);

//Lista de venda
Route::get('/listavenda',[listController::class,'listagemVenda']);
Route::post('/adicionarpedido',[listController::class,'adicionarPedido']);