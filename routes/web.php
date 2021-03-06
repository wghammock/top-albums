<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashController::class, 'index']) -> name('welcome');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Handle bad request so we can catch and fix
// where people are falling through the cracks
Route::fallback(function () {
    // log the bad request
    // redirct to the custom 404 page
});