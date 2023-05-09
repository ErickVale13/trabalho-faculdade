<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('autenticacao.login');
    }

    public function store(Request $request)
    {
        if(Auth::attempt(['username' => $request->get('usuario'), 'password' => $request->get('senha')])){
            return redirect()->route('fornecedor.index');
        }

        return redirect()->route('login.formulario');
    }

    public function destory(){
        Auth::logout();

        return redirect()->route('login.formulario');
    }
}
