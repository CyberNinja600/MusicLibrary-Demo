<?php

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



use App\Http\Controllers\Api\FeaturingController; 
Route::get('/featuring-userAPI', [FeaturingController::class, 'index']);


use App\Http\Controllers\Api\SonginfoArtistsTableController;
Route::post('/songinfo-artists-tableAPI', [SonginfoArtistsTableController::class,'featureArtistname']);



//file handle, can't use API
use App\Http\Controllers\Api\SongInfoController;
Route::post('/uploadsonginfo', [SongInfoController::class, 'store']);

