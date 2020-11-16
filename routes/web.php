<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\CadInstrutoresController;
use App\Http\Controllers\categController;
use App\Http\Controllers\RecepController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\veicController;

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

Route::get('/',HomeController::class)->name('Home');
Route::post('painel', [UsuarioController::class, 'login'])->name('usuario.login');

//agenda
Route::get('agenda',  [agendaController::class, 'index'])->name('agenda.index');

//instrutores
Route::get('instrutores',  [CadInstrutoresController::class, 'index'])->name('instrutores.index');
Route::post('instrutores', [CadInstrutoresController::class, 'insert'])->name('instrutores.insert');
Route::get('instrutores/inserir', [CadInstrutoresController::class, 'create'])->name('instrutores.inserir');
Route::get('instrutores/{item}/edit', [CadInstrutoresController::class, 'edit'])->name('instrutores.edit');
Route::put('instrutores/{item}', [CadInstrutoresController::class, 'editar'])->name('instrutores.editar');
Route::delete('instrutores/{item}', [CadInstrutoresController::class, 'delete'])->name('instrutores.delete');
Route::get('instrutores/{item}/delete', [CadInstrutoresController::class, 'modal'])->name('instrutores.modal');


//recepcionistas
Route::get('recep',  [RecepController::class, 'index'])->name('recep.index');
Route::post('recep', [RecepController::class, 'insert'])->name('recep.insert');
Route::get('recep/inserir', [RecepController::class, 'create'])->name('recep.inserir');
Route::get('recep/{item}/edit', [RecepController::class, 'edit'])->name('recep.edit');
Route::put('recep/{item}', [RecepController::class, 'editar'])->name('recep.editar');
Route::delete('recep/{item}', [RecepController::class, 'delete'])->name('recep.delete');
Route::get('recep/{item}/delete', [RecepController::class, 'modal'])->name('recep.modal');


//listar usuarios
Route::get('usuario',  [userController::class, 'index'])->name('user.index');
Route::post('usuario', [userController::class, 'insert'])->name('user.insert');
Route::delete('usuario/{item}', [userController::class, 'delete'])->name('user.delete');
Route::get('usuario/{item}/delete', [userController::class, 'modal'])->name('user.modal');


//categorias
Route::get('categorias',  [categController::class, 'index'])->name('categorias.index');
Route::post('categorias', [categController::class, 'insert'])->name('categorias.insert');
Route::get('categorias/inserir', [categController::class, 'create'])->name('categorias.inserir');
Route::get('categorias/{item}/edit', [categController::class, 'edit'])->name('categorias.edit');
Route::put('categorias/{item}', [categController::class, 'editar'])->name('categorias.editar');
Route::delete('categorias/{item}', [categController::class, 'delete'])->name('categorias.delete');
Route::get('categorias/{item}/delete', [categController::class, 'modal'])->name('categorias.modal');


//veiculos
Route::get('veiculos',  [veicController::class, 'index'])->name('veiculos.index');
Route::post('veiculos', [veicController::class, 'insert'])->name('veiculos.insert');
Route::get('veiculos/inserir', [veicController::class, 'create'])->name('veiculos.inserir');
Route::get('veiculos/{item}/edit', [veicController::class, 'edit'])->name('veiculos.edit');
Route::put('veiculos/{item}', [cveicController::class, 'editar'])->name('veiculos.editar');
Route::delete('veiculos/{item}', [veicController::class, 'delete'])->name('veiculos.delete');
Route::get('veiculos/{item}/delete', [veicController::class, 'modal'])->name('veiculos.modal');

Route::get('home-admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/', [UsuarioController::class, 'logout'])->name('usuarios.logout');
Route::put('admin/{usuario}', [AdminController::class, 'editar'])->name('admin.editar');



