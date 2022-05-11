<?php

use App\Http\Controllers\TicktController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[TicktController::class,'index']);
Route::get('add',[TicktController::class,'add']);
Route::post('addshift',[TicktController::class,'addshift']);
Route::post('find',[TicktController::class,'find']);