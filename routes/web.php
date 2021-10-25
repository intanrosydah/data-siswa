<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendataanController;

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

Route::get('/intan', function () {
    return view('welcome');
});
Route::get('/data',[pendataanController::class,'createData'])->name('tambahdata');
Route::post('/store',[pendataanController::class,'store'])->name('store');
Route::get('/paginate',[pendataanController::class,'paginateData'])->name('paginate');
Route::get('/list',[pendataanController::class,'listData']);
Route::get('/masuk',[pendataanController::class,'masukData']);
Route::get('/edit/{id}',[pendataanController::class,'editData'])->name('edit');
Route::post('/delete/{id}',[pendataanController::class,'delete'])->name('delete');
Route::get('/update/{id}',[pendataanController::class,'update'])->name('update');
Route::post('/updating',[pendataanController::class,'updating'])->name('updating');




