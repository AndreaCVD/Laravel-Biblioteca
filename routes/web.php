<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CategoriesController::class, 'index']);

Route::group(['prefix' => 'books'], function(){
    Route::get('',[BookController::class, 'index']) -> name('index');
    Route::get('{idBooks}',[BookController::class, 'show']) -> name('show');
});