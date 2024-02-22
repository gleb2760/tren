<?php

use App\Http\Controllers\BronController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\BusStopController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnaliticController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user', function () {
    return view('gleb');
});

Route::group([
    'prefix'=>'busstop'
],function (){
    Route::get('/',[BusStopController::class, 'index']);
    Route::post('/', [BusStopController::class, 'store']);
    Route::delete('/{id}', [BusStopController::class, 'delete']);
});

Route::group([
    'prefix'=>'bron'
],function (){
    Route::get('/',[BronController::class, 'index']);
    Route::post('/', [BronController::class, 'create']);
    Route::delete('/{id}', [BronController::class, 'delete']);
});

Route::group([
    'prefix'=>'bus'
], function (){
    Route::get('/', [BusController::class, 'index']);
    Route::post('/', [BusController::class, 'store']);
    Route::delete('/{id}', [BusController::class, 'delete']);
});

Route::group([
   'prefix'=>'city'
], function (){
    Route::get('/', [CityController::class, 'index']);
    Route::post('/', [CityController::class, 'create']);
    Route::delete('/{id}', [CityController::class,'delete']);
});

Route::group([
    'prefix'=>'route'
], function (){
    Route::get('/', [RoutesController::class, 'index']);
    Route::post('/', [RoutesController::class, 'create']);
    Route::delete('/{id}', [RoutesController::class,'delete']);
});

Route::group([
    'prefix'=>'analitic'
], function (){
    Route::get('/', [AnaliticController::class, 'dashboard']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/auth', [UserController::class, 'index']);
});
