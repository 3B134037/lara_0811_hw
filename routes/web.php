<?php

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

//    Route::get('/', function () {
//        return view('welcome');
//});
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/', function () {return view('home');})->name('home.index');

Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/about', function () {return view('about');})->name('about.index');

Route::get('/news',[NewsController::class,'index'])->name('news.index');
Route::get('/news', function () {return view('news');})->name('news.index');