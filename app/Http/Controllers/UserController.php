<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function store(Request $request)
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
            $now = Carbon::createFromFormat('Y-m-d', Carbon::now()->toDateString());
            DB::update('update usuario set ultimo_login = ? where id = ?', [$now, Auth::user()->id]);
            if(empty(DB::select('select id from badges where badge = ? AND usuario = ?', ['fal fa-certificate text-succes', Auth::user()->id]))){
                DB::insert('insert into badges (badge, usuario) values (?, ?)', ['fal fa-certificate text-succes', Auth::user()->id]);
            }
            return redirect()->route('comissao');
        }
        return redirect()->back()->with('error', 'Verifique o email e senha digitados e tente novamente');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function show()
    {
        return view('perfil')->with('');
    }

    public function put(Request $request, User $user)
    {
        $data = explode('/', $request['nascimento']);
        $user->nascimento = $data[2].'-'.$data[1].'-'.$data[0];
        $user->nome = $request['nome'];
        $user->email = $request['email'];

        if($request->password != null){
            $user->password = Hash::make($request['password']);
        }
        
        $user->save();

        return redirect()->back();
    }

    public function storeImage(Request $request)
    {
        $imageName = time().'.'.$request->file('img')->extension();

        $request->img->storeAs('public/images/'.Auth::user()->id, $imageName);

        DB::update('update usuario set foto = ? where id = ?', [$imageName, Auth::user()->id]);

        return back()->with('foto',$imageName);
    }

    public function perfilPub(Request $request)
    {
        $usuario = User::find($request->id);
        $badges = DB::select('select * from badges where usuario = ?', [$usuario->id]);
        return view('perfilPublic')->with(['usuario' => $usuario, 'badges' => $badges]);
    }
}
 