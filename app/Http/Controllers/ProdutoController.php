<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Produto;
use App\Models\Mercado;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index() {
        $this->authorize('acessoAdmin', User::class);

        $produtos = Produto::paginate(5);
        $numeroProdutos = Produto::all()->count();
        $mercados = Mercado::all();
        $categorias = Categoria::all();
        return view('admin.adminProdutos', compact('produtos', 'numeroProdutos', 'mercados', 'categorias'));
    }

    public function excluirProduto($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('admin.produtos')->with('sucesso', 'Produto removido com sucesso');
    }

    public function cadastrarProduto(Request $request) {
        //return dd($request);
        $produto = $request->all();
        $produto['slug'] = Str::slug($request->nome);
        
        $produto = Produto::create($produto);
        return dd($request);

        return redirect()->route('admin.produtos')->with('sucesso', 'Produto cadastrado com sucesso');
    }

    public function atualizarProduto(Request $request) {
        //return dd($request);
        $produto = Produto::find($request->id);
        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->preco = $request->preco;
        $produto->peso = $request->peso;
        $produto->medida = $request->medida;
        $produto->slug = Str::slug($request->nome);
        $produto->imagem = $request->imagem;
        $produto->id_mercados = $request->id_mercados;
        $produto->id_categorias = $request->id_categorias;
        //return dd($produto);
        $produto->save();

        return redirect()->route('admin.produtos')->with('sucesso', 'Produto atualizado com sucesso');
    }
}
