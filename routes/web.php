<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\unitController;

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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('unit',[unitController::class, 'index'] );
Route::get('unit/create',[unitController::class, 'create']);
Route::post('unit', [unitController::class, 'store']);
Route::get('unit/{id}/edit', [unitController::class, 'edit']);
Route::put('unit/{id}', [unitController::class, 'update']);
Route::delete('unit/{id}', [unitController::class, 'destroy']);


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
