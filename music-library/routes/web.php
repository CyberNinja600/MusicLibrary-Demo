<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::get('/upload', [App\Http\Controllers\UploadController::class, 'index'])->name('upload');


// upload function
Route::post('/upload-song', [MusicUploadController::class, 'uploadSong']);


use App\Http\Controllers\SongInfoController;
Route::post('/uploadsonginfo', [SongInfoController::class, 'store']);


use App\Http\Controllers\SonginfoArtistsTableController;
Route::post('/songinfo-artists-table', [SonginfoArtistsTableController::class,'featureArtistname']);