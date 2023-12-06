<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\User;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $produtos = Produto::paginate(8);
        return view('home', compact('produtos'));
    }

    public function details($slug) {
        $produto = Produto::where('slug', $slug)->first();
        return view('details', compact('produto'));
    }

    public function filtraCategoria($id) {
        $categoria = Categoria::find($id);
        $produtos = Produto::where('id_categorias', $id)->paginate(4);
        return view('categoria', compact('produtos', 'categoria'));
    }
}
