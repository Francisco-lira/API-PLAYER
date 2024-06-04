<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\PlayerController;





Route::get('/',[ExemploController::class ,'index']);


// Route::group(['middleware' => ['JWTToken']], function () {

//   Route::post('/',[AgendaController::class ,'cadastrar']);

// });

// Route::get('/player',[ExemploController::class ,'index']);

Route::get('/musicas',[PlayerController::class ,'index']);

Route::put('/musicas/atualizar/{id}',[PlayerController::class ,'atualizar']);
Route::delete('/musicas/deletar/{id}',[PlayerController::class ,'deletar']);
Route::get('/musicas/{id}',[PlayerController::class ,'buscar']);






