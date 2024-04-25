<?php

use App\Http\Controllers\CervezaController;
use App\Http\Controllers\GuaroController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RonController;
use App\Http\Controllers\TequilaController;
use App\Http\Controllers\WhiskyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogedController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/loged', [LogedController::class, 'index'])->name('loged');
Route::get('producto/create', [ProductoController::class,'create'])->name('producto.create');
Route::post('producto/store', [ProductoController::class,'store'])->name('producto.store');
Route::get('producto', [ProductoController::class,'index'])->name('producto.index');
Route::get('producto/edit/{id}', [ProductoController::class,'edit'])->name('producto.edit');
Route::post('producto/update/{id}', [ProductoController::class,'update'])->name('producto.update');
Route::delete('producto/delete/{id}', [ProductoController::class,'delete'])->name('producto.delete');
Route::get('/guaro', [GuaroController::class, 'guaro'])->name('guaro');
Route::get('/ron', [RonController::class, 'ron'])->name('ron');
Route::get('/tequila', [TequilaController::class, 'tequila'])->name('tequila');
Route::get('/cerveza', [CervezaController::class, 'cerveza'])->name('cerveza');
Route::get('/whisky', [WhiskyController::class, 'whisky'])->name('whisky');


