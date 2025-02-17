<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Of_tabController;
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
Route::apiResource('endpoints', 'App\Http\Controllers\Api\EndpointController');
Route::apiResource('endpoints', 'App\Http\Controllers\Api\EndpointController');
Route::get('/layers', 'App\Http\Controllers\Api\EndpointController@getLayers');
Route::get('/api/endpoints/{tableName}', 'EndpointController@show');
Route::get('/layerAttributes/{tableName}', 'App\Http\Controllers\Api\EndpointController@getLayerAttributes');