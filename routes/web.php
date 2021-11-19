<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/login', [LoginController::class, 'showFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout', [LoginController::class, 'logout']);

Route::prefix('rooms')->group(function () {
    Route::get('room', [RoomController::class, 'showRoom'])->name('show.room');
    Route::get('create', [RoomController::class, 'createRoom'])->name('create.room');
    Route::get('update', [RoomController::class, 'updateRoom'])->name('update.room');

       
        
});   

Route::get('/home', function (){
    return view('frontend.home');
})->name('frontend.home');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/calender', function(){
    return view('frontend.calender');
})->name('calender');
