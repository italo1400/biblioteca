<?php

use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\EmprestimosController;
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
Route::get('/', [EmprestimosController::class, 'list'])->middleware('auth');
Route::post('/emprestimo', [EmprestimosController::class, 'create'])->name('cadastrar_emprestimo')->middleware('auth');
Route::post('/emprestimo/deletar/{id}', [EmprestimosController::class, 'delete'])->name('deletar_emprestimo')->middleware('auth');

Route::get('/livro', [LivrosController::class, 'list'])->middleware('auth');
Route::get('/livro/{id}', [LivrosController::class, 'detail'])->middleware('auth');
Route::post('/livro/edit/{id}', [LivrosController::class, 'edit'])->name('editar_livro')->middleware('auth');
Route::post('/livro/create', [LivrosController::class, 'create'])->name('cadastrar_livro')->middleware('auth');
Route::post('/livro/deletar/{id}', [LivrosController::class, 'delete'])->name('deletar_livro')->middleware('auth');

Route::get('/funcionario',[FuncionariosController::class, 'list'])->middleware('auth');
Route::get('/funcionario/{id}', [FuncionariosController::class, 'detail'])->middleware('auth');
Route::post('/funcionario/edit/{id}', [FuncionariosController::class, 'edit'])->name('editar_funcionario')->middleware('auth');
Route::post('/funcionario', [FuncionariosController::class, 'create'])->name('cadastrar_funcionario')->middleware('auth');
Route::post('/funcionario/deletar/{id}', [FuncionariosController::class, 'delete'])->name('deletar_funcionario')->middleware('auth');