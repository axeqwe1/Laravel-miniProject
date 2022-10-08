<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Models\category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\TransferMoneyController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('category',CategoryController::class);
Route::resource('order', OrdersController::class);
Route::resource('user',UserOrderController::class);
Route::resource('transfermoney',TransferMoneyController::class);
Route::resource('orderitem',OrderItemController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


