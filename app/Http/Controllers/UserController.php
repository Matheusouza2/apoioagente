<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function put(Request $request)
    {
        $user = new User();

        $userVerify = User::where('email', $request['email'])->first();
        $request['permissao'] = 'A';
        if($userVerify === null){
            $request['password'] = Hash::make($request['password']);
            $user->create($request->except(['_token']));
            return redirect('/')->with('success', 'Usuário cadastrado com sucesso, seja bem vindo a nossa plataforma !');
        }else{
            return redirect('/')->with('error', 'Já consta um cadastro com o E-mail informado !');
        }

    }

    public function login(Request $request)
    {
        $usuario = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($usuario)){
            $valorMes = DB::select('select sum(valor) as ganho from comissao where usuario = ?', [Auth::user()->id]);
            return redirect()->route('comissao')->with('ValorGanho', $valorMes[0]->ganho);
        }
        return redirect()->back()->with('error', 'Verifique o email e senha digitados e tente novamente');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
