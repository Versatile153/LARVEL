<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
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

route::post('/upload',[BlogController::class,'updatefile']);
Route::resource('/blog','App\Http\Controllers\BlogController');
// Route::resource('/page','App\Http\Controllers\PageController');
// Route::post('/upload',[BlogController::class,'update']);
// Route::get('/blog/create',[BlogController::class,'create']);
// Route::get('/blog',[BlogController::class,'index']);
// Route::get('/blog/show',[BlogController::class,'show']);
// Route::get('/blog/{edit}/edit',[BlogController::class,'edit']);
// Route::get('/blog/{$blog->id}',[BlogController::class,'delete']);
// Route::post('/blog/show',[BlogController::class,'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
