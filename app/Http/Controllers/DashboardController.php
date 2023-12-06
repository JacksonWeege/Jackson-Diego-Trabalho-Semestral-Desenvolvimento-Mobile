<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Produto;

class DashboardController extends Controller
{
    public function index() {
        $usuarios = User::all()->count();

        //grafico 1 usuários
        $usersData = User::select([
            DB::raw('EXTRACT(YEAR FROM created_at) as ano'),
            DB::raw('count(*) as total')
        ])->groupBy('ano')->orderBy('ano', 'asc')->get();
        //preparar arrays
        foreach($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
        }
        //formatar para chartJs
        $userLabel = "'Comparativo de cadastros de Usuários'";
        $userAno   = implode(',', $ano);
        $userTotal = implode(',', $total);

        //grafico 2 categorias
        //$catData = Categoria::all();   nao otimizado
        $catData = Categoria::with('produtos')->get();  //otimizado
        //preparar array
        foreach($catData as $cat) {
            $catNome[]  = "'".$cat->nome."'";
            //$catTotal[] = Produto::where('id_categorias', $cat->id)->count();  nao otimizado
            $catTotal[] = $cat->produtos->count();  //otimizado
        }
        //formatar para chartJs
        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
