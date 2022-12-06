<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\LoginController;

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
// mengelompokan route-route yang akan di beri hak akses 'isguest'
Route::middleware('isGuest')->group(function () {
    Route::get('/', [TodoController::class,'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('login.baru');
    Route::get('/register',[TodoController::class, 'register'])->name('login'); 
    Route::post('/register',[registerController::class, 'register']);
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware('isLogin')->group(function (){
    Route::get('/dashboard', [TodoController::class, 'dashboard'])->name('dashboard'); 
    Route::get('/create', [TodoController::class, 'create'])->name('create');
    Route::post('/store' ,[Todocontroller::class, 'store'])->name('store');
    Route::get('/data',[TodoController::class, 'data'])->name('data');
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');    //method satu route boleh lebih dari satu path dinamis
    Route::patch('/update/id', [TodoController::class,'update'])->name('update');
    
    Route::delete('/destroy/{id}',[Todocontroller::class,'destroy'])->name('destroy');
    Route::patch('/complated/{id}',[Todocontroller::class,'updateToComplated'])->name('update-complated');
});
  


//end buat route