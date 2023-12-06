<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index() {
        $this->authorize('acessoAdmin', User::class);

        $usuarios = User::paginate(5);
        $numeroUsuarios = User::all()->count();

        return view('admin.adminUsuarios', compact('usuarios', 'numeroUsuarios'));
    }

    public function cadastrarUsuario(Request $request) {
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }

    public function excluirUsuario($id) {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('admin.usuarios')->with('sucesso', 'usuário removido com sucesso');
    }

    public function cadastrarUsuarioAdmin(Request $request) {
        //return dd($request);
        $usuario = $request->all();
        $usuario['password'] = bcrypt($request->password);
        $usuario = User::create($usuario);

        return redirect()->route('admin.usuarios')->with('sucesso', 'usuário cadastrado com sucesso');
    }

    public function atualizarUsuario(Request $request) {
        $usuario = User::find($request->id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('admin.usuarios')->with('sucesso', 'Usuário atualizado com sucesso');
    }
}
