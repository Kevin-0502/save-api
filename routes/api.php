<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsApiController;
use App\Http\Controllers\UsersApiController;
use App\Http\Controllers\ExpensesApiController;

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

Route::controller(UsersApiController::class)->group(function(){
    Route::get('/users','index');
    Route::get('/users/{id}','show');
    Route::get('/users/code/{code}','code');
    Route::post('/users','store');
});

Route::controller(ProductsApiController::class)->group(function(){
    Route::get('/products','index');
    Route::get('/products/{id}','show');
    Route::get('/products/code/{code}','code');
    Route::post('/products','store');
});

Route::controller(ExpensesApiController::class)->group(function(){
    Route::get('/expenses','index');
    Route::post('/expenses','store');
    Route::get('/expenses/{id}','show');
    Route::get('/expenses/user/{code}','code');
});
