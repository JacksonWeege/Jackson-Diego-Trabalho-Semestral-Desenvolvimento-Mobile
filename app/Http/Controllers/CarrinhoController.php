<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho;

class CarrinhoController extends Controller
{
    public function carrinhoLista() {
        $itens = \Cart::getContent();
        return view('carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request) {
         \Cart::add([
             'id' => $request->id,
             'name' => $request->name,
             'price' => $request->price,
             'quantity' => abs($request->quantity),
             'attributes' => array(
                 'img' => $request->img
             )
         ]);

        return redirect()->route('site.carrinho')->with('sucesso', $request->name.' adicionado ao carrinho');
    }

    public function removeCarrinho(Request $request) {
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('sucesso', $request->name.' removido do carrinho');
    }

    public function atualizaCarrinho(Request $request) {
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity)
            ]
        ]);
        return redirect()->route('site.carrinho')->with('sucesso', $request->name.' atualizado');
    }

    public function limparCarrinho() {
        \Cart::clear();
        return redirect()->route('site.carrinho')->with('aviso', 'seu carrinho está vazio');
    }
}
