<?php

use App\Http\Controllers\PostController;
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
    return view('inicio');
})->name('inicio');

Route::resource('posts', PostController::class);
Route::get('', [PostController::class, 'nuevoPrueba'])->name("nuevoPost");
Route::post('{id}', [PostController::class, 'editarPrueba'])->name('editarPost');