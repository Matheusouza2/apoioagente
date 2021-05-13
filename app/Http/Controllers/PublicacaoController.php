<?php

namespace App\Http\Controllers;

use App\Publicacao;
use App\Comentario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PublicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() === true){
            $publicacoes = Publicacao::select('publicacao.*', 'usuario.nome as nome', 'usuario.id as id_user', 'usuario.foto')
                                    ->join('usuario', 'publicacao.usuario', '=', 'usuario.id')
                                    ->orderBy('publicacao.id', 'desc')
                                    ->get();
            $comentarios = Comentario::select('comentarios.comentario', 'usuario.nome as nome', 'comentarios.data', 'comentarios.publicacao')
                                    ->join('usuario', 'comentarios.usuario', '=', 'usuario.id')
                                    ->orderBy('comentarios.comentario', 'desc')
                                    ->get();

            return view('comunidade')->with('publicacoes', $publicacoes)->with('comentarios', $comentarios);
        }
        
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['usuario'] = Auth::user()->id;
        $request['data'] = Carbon::createFromFormat('Y-m-d', Carbon::now()->toDateString());
        $publicacao = Publicacao::create($request->except(['_token']));

        $retorno = Publicacao::select('publicacao.*', 'usuario.nome as nome')
                                ->join('usuario', 'publicacao.usuario', '=', 'usuario.id')
                                ->where('publicacao.id', $publicacao->id)
                                ->first();
        
        return response()->json($retorno);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function show(publicacao $publicacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function edit(publicacao $publicacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicacao $publicacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $pub = Publicacao::find($request->id);
        $pub->delete();

        return redirect()->back()->with('success', 'Publicação apagada com sucesso');
    }
}
