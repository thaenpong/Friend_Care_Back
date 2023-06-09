<?php

use App\Http\Controllers\reqtaxicontroller;
use App\Http\Controllers\AuthController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/confirm', [reqtaxicontroller::class, 'insertreq']);
Route::get('/list/{id}', [reqtaxicontroller::class, 'list']);
Route::get('/listdetail/{id}', [reqtaxicontroller::class, 'listdetail']);
Route::get('/cancle/{id}', [reqtaxicontroller::class, 'cancle']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
