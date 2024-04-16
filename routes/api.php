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

Route::apiResource('annotation_points', 'App\Http\Controllers\Api\AnnotationPointController');

Route::apiResource('annotation_zones', 'App\Http\Controllers\Api\AnnotationZoneController');

Route::apiResource('buildings', 'App\Http\Controllers\Api\BuildingController');

Route::apiResource('cables', 'App\Http\Controllers\Api\CableController');

Route::apiResource('closures', 'App\Http\Controllers\Api\ClosureController');

Route::apiResource('closure_zones', 'App\Http\Controllers\Api\ClosureZoneController');

Route::apiResource('fdp_zones', 'App\Http\Controllers\Api\FdpZoneController');

Route::apiResource('ftb_zones', 'App\Http\Controllers\Api\FtbZoneController');