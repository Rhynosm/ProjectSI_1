<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostnController;
use App\Http\Controllers\PostaController;
use App\Http\Controllers\PostpController;
use App\Http\Controllers\PostqController;
use App\Http\Controllers\PostgController;
use App\Http\Controllers\PosttController;
use App\Http\Controllers\PostiController;
use App\Http\Controllers\PostjController;
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

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/postn', \App\Http\Controllers\PostnController::class);
Route::resource('/dashboard', dashboard::class);
Route::resource('/postp', \App\Http\Controllers\PostpController::class);
Route::resource('/postq', \App\Http\Controllers\PostqController::class);
Route::resource('/posta', \App\Http\Controllers\PostaController::class);
Route::resource('/postg', \App\Http\Controllers\PostgController::class);
Route::resource('/postt', \App\Http\Controllers\PosttController::class);
Route::resource('/posti', \App\Http\Controllers\PostiController::class);
Route::resource('/postj', \App\Http\Controllers\PostjController::class);
Route::get('posts/view/pdf', [PostController::class, 'view_pdf']);
Route::get('postn/view/pdf', [PostnController::class, 'view_pdf']);
Route::get('posta/view/pdf', [PostaController::class, 'view_pdf']);
Route::get('postp/view/pdf', [PostpController::class, 'view_pdf']);
Route::get('postq/view/pdf', [PostqController::class, 'view_pdf']);
Route::get('postg/view/pdf', [PostgController::class, 'view_pdf']);
Route::get('postt/view/pdf', [PosttController::class, 'view_pdf']);
Route::get('posti/view/pdf', [PostiController::class, 'view_pdf']);
Route::get('postj/view/pdf', [PostjController::class, 'view_pdf']);
Route::get('/', function () {
    return view('welcome');
});





