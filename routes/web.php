<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\CadastrarObraController;
use App\Http\Controllers\Dashboard\CadastrarUsuarioController;
use App\Http\Controllers\Dashboard\ListarUsuarioController;
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
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/cadastrarobra', [CadastrarObraController::class, 'index']);
Route::get('/listarusuario', [ListarUsuarioController::class, 'index']);
Route::get('/cadastrarusuario', [CadastrarUsuarioController::class, 'index']);

Route::get('/post', [CadastrarObraController::class, 'save'])->name('post.save');
//Route::get('/post/save', 'Dashboard\CadastrarObraController@save')->name('post.save');
//Route::resource('usuarios', ListarUsuarioController::class);




