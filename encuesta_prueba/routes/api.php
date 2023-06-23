<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Encuestas;
use App\Models\Preguntas;
use App\Models\Respuestas;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get("/encuestas",[\App\Http\Controllers\EncuestaController::class, 'index']);
Route::get("/encuestas/{encuesta}",[\App\Http\Controllers\EncuestaController::class, 'show']);
Route::delete("/encuestas/{encuesta}",[\App\Http\Controllers\EncuestaController::class, 'destroy']);
Route::post("/encuestas",[\App\Http\Controllers\EncuestaController::class, 'store']);
Route::put("/encuestas/{encuesta}",[\App\Http\Controllers\EncuestaController::class, 'update']);

Route::get("/preguntas",[\App\Http\Controllers\PreguntaController::class, 'index']);
Route::get("/preguntas/{pregunta}",[\App\Http\Controllers\PreguntaController::class, 'show']);
Route::delete("/preguntas/{pregunta}",[\App\Http\Controllers\PreguntaController::class, 'destroy']);
Route::post("/preguntas",[\App\Http\Controllers\PreguntaController::class, 'store']);
Route::put("/preguntas/{pregunta}",[\App\Http\Controllers\PreguntaController::class, 'update']);

Route::get("/respuestas",[\App\Http\Controllers\RespuestaController::class, 'index']);
Route::get("/respuestas/{respuesta}",[\App\Http\Controllers\RespuestaController::class, 'show']);
Route::delete("/respuestas/{respuesta}",[\App\Http\Controllers\RespuestaController::class, 'destroy']);
Route::post("/respuestas",[\App\Http\Controllers\RespuestaController::class, 'store']);
Route::put("/respuestas/{respuesta}",[\App\Http\Controllers\RespuestaController::class, 'update']);
