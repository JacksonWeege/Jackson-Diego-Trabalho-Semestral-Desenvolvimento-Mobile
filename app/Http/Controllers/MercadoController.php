<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercado;
use App\Models\User;

class MercadoController extends Controller
{
    public function index() {
        $this->authorize('acessoAdmin', User::class);

        $mercados = Mercado::paginate(5);
        $numeroMercados = Mercado::all()->count();

        return view('admin.adminMercados', compact('mercados', 'numeroMercados'));
    }

    public function excluirMercado($id) {
        $mercado = Mercado::find($id);
        $mercado->delete();
        return redirect()->route('admin.mercados')->with('sucesso', 'Mercado removido com sucesso');
    }

    public function cadastrarMercado(Request $request) {
        $mercado = $request->all();
        $mercado = Mercado::create($mercado);

        return redirect()->route('admin.mercados')->with('sucesso', 'Mercado cadastrado com sucesso');
    }

    public function atualizarMercado(Request $request) {
        $mercado = Mercado::find($request->id);
        $mercado->nome = $request->nome;
        $mercado->cidade = $request->cidade;
        $mercado->bairro = $request->bairro;
        $mercado->save();

        return redirect()->route('admin.mercados')->with('sucesso', 'Mercado atualizado com sucesso');
    }
}
