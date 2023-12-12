<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [SessionsController::class, 'create']);
Route::post('/login', [SessionsController::class,  'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('/game', function() {
    return view('game');
});