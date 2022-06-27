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

Route::get('/login',[HomeController::class,'loginn'])->name('login');
Route::post('/login',[HomeController::class, 'loginSubmitted'])->name('login');
Route::get('/reg',[HomeController::class,'registration'])->name('reg');
Route::post('/reg',[HomeController::class,'regSubmitted'])->name('reg');
Route::get('/dash',[HomeController::class,'dashboard'])->name('dash');

 
Route::get('/Edit/{id}',[HomeController::class,'Edit']);
Route::post('/Edit',[HomeController::class,'EditSubmitted'])->name('Edit');

Route::get('/Delete/{id}',[HomeController::class, 'Delete'])->name('Delete');

