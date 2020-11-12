<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
        return view('welcome');
    });



Route::get('index/', [\App\Http\Controllers\HomePageController::class, 'index']);
Route::get('backform/', [\App\Http\Controllers\CatController::class, 'backform']);
Route::get('NewsCategories/', [\App\Http\Controllers\CatController::class, 'index'])->name('news');
Route::get('news/{id}', [\App\Http\Controllers\NewsController::class, 'index'])->where('id', '\d+')->name('news');
Route::get('news/{cat_id}/{new_id}', [\App\Http\Controllers\NewsController::class, 'cshow'])->where('new_id', '\d+');


Route::get('new/{id}', [\App\Http\Controllers\NewsController::class, 'show'])->where('id', '\d+');


Route::group(['prefix'=>'admin'], function() {
    route::get('news', [\App\Http\Controllers\admin\NewsController::class, 'index']);
    route::get('news/create', [\App\Http\Controllers\admin\NewsController::class, 'create']);
    route::get('news/edit{id}', [\App\Http\Controllers\admin\NewsController::class, 'edit'])->where('id', '\d+');
    route::get('news/delete{id}', [\App\Http\Controllers\admin\NewsController::class, 'destroy'])->where('id', '\d+');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
