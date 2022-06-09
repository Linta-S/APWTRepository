<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/about',[HomeController::class,'aboutus'])->name('about');
Route::get('/contactus',[HomeController::class,'contactus'])->name('contactus');
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/teams',[HomeController::class,'team'])->name('teams');
Route::get('/product',[HomeController::class,'product'])->name('product');
