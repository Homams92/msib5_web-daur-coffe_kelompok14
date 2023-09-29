<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menucontroller;
use App\Http\Controllers\cartcontroller;


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
    return view('welcome');
});

Route::get('/menucontroller', [menucontroller::class, 'index']);
Route::get('/cartcontroller', [cartController::class, 'index']);
Route::post('/cart/add', [cartController::class, 'add']);
Route::patch('/crt/update/{cart}', [cartController::class, 'update']);
Route::delete('/cart/remove/{cart}', [cartController::class, 'remove']);