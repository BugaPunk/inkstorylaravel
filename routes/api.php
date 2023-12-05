<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductosApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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
Route::get('v1/productos',[ProductosApiController::class,'index']);
Route::get('comics',[ComicController::class,'index']);
Route::get('comics',[ComicController::class,'store']);