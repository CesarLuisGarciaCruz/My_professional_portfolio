<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;




/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home/agregar',[HomeController::class,'agregarCarrito'])->name('car.add');
Route::get('/forgot', [ForgotController::class, 'index'])->name('forgot');
Route::get('/newuser', [NewUserController::class, 'index'])->name('newuser');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get(uri: '/restaurant', action: [RestaurantController::class, 'index'])->name(name: 'restaurant');
Route::get('/item', [ItemController::class, 'index'])->name('item');
Route::get('/car', [CarController::class, 'index'])->name('car');







