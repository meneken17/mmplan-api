<?php

use App\DienstTemplate;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('locations', 'LocationController');

Route::apiResource('godi_objects', 'GodiObjectController');
Route::apiResource('godi_templates', 'GodiTemplateController');
Route::apiResource('godi_series', 'GodiSeriesController');

Route::apiResource('dienst_objects', 'DienstObjectController');
Route::apiResource('dienst_templates', 'DienstTemplateController');

Route::apiResource('person','PersonController');
Route::apiResource('group','GroupController');
Route::apiResource('time_frame','TimeFrameController');
Route::apiResource('time_slot','TimeSlotController');
