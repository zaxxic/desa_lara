<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashwebController;

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

Route::get('/about',[AboutController::class, 'about'])->name('about');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::get('/dashweb',[DashwebController::class, 'dashweb'])->name('dashweb');




// admin desa
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/profile-desa',[ProfilDesaController::class,'profiledesa'])->name('profile-desa');
Route::get('/struktur-karang',[StrukturKarangController::class,'karang'])->name('struktur-karang');
Route::get('/peraturan',[PeraturanController::class,'peraturan'])->name('peraturan');
Route::get('/struktur_desa',[StrukturDesaController::class,'strukturdesa'])->name('struktur_desa');
