<?php

use App\Http\Controllers\Fornecedores\FornecedorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Produtos\ProdutoController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login.formulario')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login.acao')->middleware('guest');

Route::get('/logout', [LoginController::class, 'destory'])->name('logout')->middleware('auth');

Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index')->middleware('auth');
Route::get('/fornecedor/criar', [FornecedorController::class, 'create'])->name('fornecedor.create')->middleware('auth');
Route::post('/fornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store')->middleware('auth');
Route::get('/fornecedor/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show')->middleware('auth');
Route::get('/fornecedor/{id}/editar', [FornecedorController::class, 'edit'])->name('fornecedor.edit')->middleware('auth');
Route::put('/fornecedor/{id}/editar', [FornecedorController::class, 'update'])->name('fornecedor.update')->middleware('auth');
Route::get('/fornecedor/{id}/destroy', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy')->middleware('auth');

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index')->middleware('auth');
Route::get('/produto/criar', [ProdutoController::class, 'create'])->name('produto.create')->middleware('auth');
Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store')->middleware('auth');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show')->middleware('auth');
Route::get('/produto/{id}/editar', [ProdutoController::class, 'edit'])->name('produto.edit')->middleware('auth');
Route::put('/produto/{id}/editar', [ProdutoController::class, 'update'])->name('produto.update')->middleware('auth');
Route::get('/produto/{id}/destroy', [ProdutoController::class, 'destroy'])->name('produto.destroy')->middleware('auth');

Route::get('/', function(){
    return redirect('/fornecedor');
});
