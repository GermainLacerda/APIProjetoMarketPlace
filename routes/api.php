<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AuthController;

// Rota pública para login e produtos
Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [UserController::class, 'store']);


// Route::post('/register', [UserController::class, 'store']);
Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/produtos/{id}', [ProductController::class, 'show']);
Route::get('/categorias', [CategoryController::class, 'index']);


Route::middleware('auth:sanctum')->group(function () {
    // CRUD de produtos e usuários autenticado

    Route::apiResource('users', UserController::class);

    Route::post('/produtos', [ProductController::class, 'store']);


    // Informações do usuário autenticado
    Route::get('/me', [AuthController::class, 'me']);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // Rota de teste (opcional)
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

