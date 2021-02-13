<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('about/', [HomeController::class, 'about']);
Route::get('hello/{name}/{age}', [HomeController::class, 'hello']);

Route::get('calculator/{num1}/{num2}', function ($num1, $num2) {
    return "ผลบวกของเลข $num1 และ $num2 คือ".($num1+ $num2);
});
