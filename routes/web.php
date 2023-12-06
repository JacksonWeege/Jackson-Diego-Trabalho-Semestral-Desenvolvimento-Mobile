<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MercadoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'filtraCategoria'])->name('site.categoria');

Route::get('/carrinho'  , [CarrinhoController::class, 'carrinhoLista'   ])->name('site.carrinho');
Route::post('/carrinho' , [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addCarrinho');
Route::post('/remover'  , [CarrinhoController::class, 'removeCarrinho'  ])->name('site.removeCarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizaCarrinho');
Route::get('/limpar'    , [CarrinhoController::class, 'limparCarrinho'  ])->name('site.limparCarrinho');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth' , [LoginController::class, 'auth'  ])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::view('/cadastro', 'login.cadastro')->name('cadastro.form');
Route::post('/efetuarcadastro', [UsuarioController::class, 'cadastrarUsuario'])->name('usuario.cadastro');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/usuarios' , [UsuarioController  ::class, 'index'])->name('admin.usuarios');
Route::get('/admin/produtos' , [ProdutoController  ::class, 'index'])->name('admin.produtos');
Route::get('/admin/mercados' , [MercadoController  ::class, 'index'])->name('admin.mercados');
Route::get('/admin/categoria', [CategoriaController::class, 'index'])->name('admin.categorias');

Route::post('/admin/produto/cadastrar'  , [ProdutoController  ::class, 'cadastrarProduto'     ])->name('admin.cadastrar.produto');
Route::post('/admin/mercado/cadastrar'  , [MercadoController  ::class, 'cadastrarMercado'     ])->name('admin.cadastrar.mercado');
Route::post('/admin/categoria/cadastrar', [CategoriaController::class, 'cadastrarCategoria'   ])->name('admin.cadastrar.categoria');
Route::post('/admin/usuario/cadastrar'  , [UsuarioController  ::class, 'cadastrarUsuarioAdmin'])->name('admin.cadastrar.usuario');

Route::delete('/admin/produto/delete/{id}'  , [ProdutoController  ::class, 'excluirProduto'  ])->name('admin.deletar.produto');
Route::delete('/admin/mercado/delete/{id}'  , [MercadoController  ::class, 'excluirmercado'  ])->name('admin.deletar.mercado');
Route::delete('/admin/categoria/delete/{id}', [CategoriaController::class, 'excluirCategoria'])->name('admin.deletar.categoria');
Route::delete('/admin/usuario/delete/{id}'  , [UsuarioController  ::class, 'excluirUsuario'  ])->name('admin.deletar.usuario');

Route::put('/admin/produto/atualizar'  , [ProdutoController  ::class, 'atualizarProduto'  ])->name('admin.atualizar.produto');
Route::post('/admin/mercado/atualizar'  , [MercadoController  ::class, 'atualizarMercado'  ])->name('admin.atualizar.mercado');
Route::post('/admin/categoria/atualizar', [CategoriaController::class, 'atualizarCategoria'])->name('admin.atualizar.categoria');
Route::post('/admin/usuario/atualizar'  , [UsuarioController  ::class, 'atualizarUsuario'  ])->name('admin.atualizar.usuario');