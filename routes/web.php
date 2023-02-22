<?php

use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\RegisterController;
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




Route::middleware(['auth:sanctum','verified','cekrole'])->group(function(){

});
//login
Route::get('login',[LoginContoller::class,'tampil'])->name('login');
Route::post('login',[LoginContoller::class,'store'])->name('login');
//register
Route::get('/register',[RegisterController::class,'tampil'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register');


