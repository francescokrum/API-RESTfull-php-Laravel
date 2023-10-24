<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

Route::delete('/livros/{id}', [LivroController::class,'deletarLivro']);
Route::patch('/livros/{id}', [LivroController::class, 'editarLivro']);
Route::get('/livros/{id}', [LivroController::class, 'listarLivro']);
Route::get('/livros', [LivroController::class,'index']);
Route::post('/livros', [LivroController::class,'cadastroLivro']);


Route::get('/', function(){
    return response ()->json([
        'success' => true
    ]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
