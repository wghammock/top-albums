<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

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

// http://localhost/api
Route::get('/', function () {
        dd('here');
});


Route::controller(AlbumController::class)->group(function () {
    Route::get('/albums', 'index');
    // Route::get('/albums/{id}', 'show');
    // Route::post('/albums', 'store');
    // delete etc :)
});
