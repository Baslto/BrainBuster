<?php

use App\Http\Controllers\QuizController;
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

Route::get('/main-menu', function() {
    return view('main-menu');
});

Route::get('/play', [QuizController::class, 'create']);
Route::get('/myQuiz', [QuizController::class, 'myQuiz']);
Route::get('/allQuiz', [QuizController::class, 'allQuiz']);
Route::get('/createQuiz', [QuizController::class, 'createQuiz']);
