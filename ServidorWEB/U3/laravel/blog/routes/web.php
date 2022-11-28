<?php

use App\Http\Controllers\LoginController;
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

Route::get('posts.create', [PostController::class, 'createPost'])->name('NuevoPost');

Route::get('posts/editarPrueba/${id}', [PostController::class, 'editarPrueba'])->name('EditarLibro');

Route::resource('posts', PostController::class);

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');