<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ContadorController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/calculadora/somar', [CalculadoraController::class, 'somar']);
Route::post('/calculadora/subtrair', [CalculadoraController::class, 'subtrair']);
Route::post('/calculadora/dividir', [CalculadoraController::class, 'dividir']);
Route::post('/calculadora/multiplicar', [CalculadoraController::class, 'multiplicar']);
Route::post('/calculadora/calcular', [CalculadoraController::class, 'calcular']);

Route::post('/contador/contar', [ContadorController::class, 'contarPost']);
Route::get('/contador/contar/{de}/{ate}', [ContadorController::class, 'contarGet']);