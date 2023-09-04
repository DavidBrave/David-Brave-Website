<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', HomeController::class)->name('ShowMe');
Route::get('/', [HomeController::class, 'ShowMe']);
Route::redirect('/index', '/');


Route::prefix('project')->group(function () {
    Route::prefix('game')->group(function () {
        Route::get('/chess', [GameController::class, 'Chess']);
    });


    
});

