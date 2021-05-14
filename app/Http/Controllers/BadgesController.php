<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BadgesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badges = DB::select('select * from badges');
        return view('badges')->with('badges', $badges);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $badges = DB::select('select * from badges');
        return view('admin.badgesCreate')->with('badges', $badges);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::insert('insert into badges (badge, title, tipo, usuario) values (?, ?, ?, ?)', [$request->badge, $request->title, $request->tipo, $request->usuario]);
        
        return redirect()->back();
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
        DB::delete('delete from badges where id = ?', [$request['id']]);
        return redirect()->back();
    }
}
