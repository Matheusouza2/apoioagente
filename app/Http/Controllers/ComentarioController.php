<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    
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
        $comentario = Comentario::create($request->except(['_token']));
        $comentario['usuario'] = User::select('nome')->where('id', $comentario->usuario)->first();

        return response()->json($comentario, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(comentario $comentario)
    {
        //
    }

    public function searchForPub($idPub)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(comentario $comentario)
    {
        //
    }
}
