<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Models\category;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::resource('category',CategoryController::class);
Route::resource('order', OrdersController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
