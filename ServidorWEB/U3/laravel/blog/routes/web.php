<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

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

Route::get('/', function () { return view('inicio'); })->name('inicio');

Route::get('posts/nuevoPrueba', [PostController::class, 'redirectPrueba'])->name('NuevoLibro');

Route::get('posts/editarPrueba/${id}', [PostController::class, 'editarPrueba'])->name('EditarLibro');

Route::resource('posts', PostController::class);