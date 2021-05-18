<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function TelaInicial(){
        if(Auth::check()){
            return redirect()->route('comissao');
        }
        return view('index');
    }

    public function controle()
    {
        if(Auth::check() === true){
            $usuarios = User::orderBy('id')->get();
            return view('admin.controle')->with('usuarios',$usuarios);
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
        $coments = DB::select('select * from comentarios where usuario = ?', [$user->id]);

        return view('admin.detalhes')->with(['dados' => $dados, 'dadosPub' => $dados2, 'user' => $user, 'coments' => $coments]);
    }

    public function support()
    {
        return view('support');
    }

    public function storeNotificacao(Request $request)
    {
        $id = DB::table('notificacao')->insertGetId([
            'titulo' => $request->title,
            'mensagem' =>  $request->mensagem, 
            'tipo' => $request->tipo, 
            'formato' => $request->formato, 
            'pergunta' => $request->pergunta
        ]);
        $users = User::all();
        foreach ($users as $user){
            DB::insert('insert into notificacao_usuario (notificacao, usuario, aceite) values (?, ?, ?)', [$id, $user->id, 0]);
        }

        return redirect()->back()->with('success', 'Alerta cadastrado com sucesso!!');
    }

    public function delNotificacao(Request $request)
    {
        dd($request);
    }

    public function notificacao()
    {
        $alerts = DB::select('select nu.notificacao, n.titulo, n.mensagem, u.nome, nu.aceite from notificacao_usuario nu INNER JOIN notificacao n ON n.id = nu.notificacao INNER JOIN usuario u ON nu.usuario = u.id');
        $notifications = DB::select('select * from notificacao');
        
        return view('admin.notificacoes')->with(['alerts' => $alerts, 'notify' => $notifications]);
    }
}
