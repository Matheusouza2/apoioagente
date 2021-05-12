<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function TelaInicial(){
        return view('index');
    }

    public function controle()
    {
        if(Auth::check() === true){
            $usuarios = User::all();
            return view('agente/controle')->with('usuarios',$usuarios);
        }
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        DB::table('usuario')
            ->where('id', $request->user)
            ->update(['permissao' => $request->permissao]);

        return redirect()->back();
    }

    public function detalhe(User $user)
    {
        $dados = DB::select('select * from comissao where usuario = ?', [$user->id]);
        $dados2 = DB::select('select * from publicacao where usuario = ?', [$user->id]);

        return view('agente.detalhes')->with('dados', $dados)->with('dadosPub', $dados2)->with('user', $user);
    }

    public function support()
    {
        return view('agente.support');
    }
}
