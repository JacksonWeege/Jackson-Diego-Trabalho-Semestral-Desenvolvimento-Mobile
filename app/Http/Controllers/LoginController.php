<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request) {
        $credenciais = $request->validate([
            'email'  => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'O Campo Email é obrigatório!',
            'senha.required' => 'O Campo Senha é obrigatório!',
        ]
    );

        if(Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('erro', 'Usuário ou Senha inválida');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('site.index');
    }
}
