<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\User;

class CategoriaController extends Controller
{
    public function index() {
        $this->authorize('acessoAdmin', User::class);

        $categorias = Categoria::paginate(5);
        $numeroCategorias = Categoria::all()->count();

        return view('admin.adminCategorias', compact('categorias', 'numeroCategorias'));
    }

    public function excluirCategoria($id) {
        $categoria = categoria::find($id);
        $categoria->delete();

        return redirect()->route('admin.categorias')->with('sucesso', 'categoria removida com sucesso');
    }

    public function cadastrarCategoria(Request $request) {
        $categoria = $request->all();
        $categoria = categoria::create($categoria);

        return redirect()->route('admin.categorias')->with('sucesso', 'categoria cadastrada com sucesso');
    }

    public function atualizarCategoria(Request $request) {
        $categoria = Categoria::find($request->id);
        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        $categoria->save();

        return redirect()->route('admin.categorias')->with('sucesso', 'Categoria atualizada com sucesso');
    }
}
