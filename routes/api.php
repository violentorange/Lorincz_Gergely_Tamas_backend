<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EstateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//Route::apiResource('ingatlan', EstateController::class)->only(['index','show']);

Route::get('ingatlan', [EstateController::class, 'index']);
Route::post('ingatlan', [EstateController::class,'store']);
Route::delete('ingatlan/{estate}', [EstateController::class, 'destroy']);

Route::get('categories/{category}/estates', [CategoryController::class, 'estatesOfCategory']);