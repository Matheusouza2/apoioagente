<?php
if (App::environment('production')) {
    URL::forceScheme('https');
}
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@telaInicial')->name('telaInicial');

Route::post('/login', 'UserController@login')->name('login');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::post('/put', 'UserController@put')->name('cadastro');

//Route::get('/contribua', function(){return view('contribua');})->name('contribua');

//Route::get('/sobre', function(){return view('sobre');})->name('sobre');

//Route::get('/desenvolvedor', function(){return view('desenvolvedor');})->name('desenvolvedor');

/**
 * AGENTES
 */
Route::middleware(['auth'])->prefix('agente')->group(function () {
    
    Route::get('/comissao', function (){ return view('comissao'); })->name('comissao');
    /**
    * COMISSÃO
    */
    Route::post('/comissao/store', 'ComissaoController@store')->name('cadastroComissao');
    Route::get('/comissao/mostrar', 'ComissaoController@show')->name('showComissao');
    Route::get('/comissao/mostrar/mes', 'ComissaoController@showMonth')->name('showComissaoMonth'); 
    Route::post('/comissao/procurar/mes', 'ComissaoController@searchMonth')->name('searchMonth');
    Route::delete('/comissao/delete/{comissao}', 'ComissaoController@delete')->name('delComissao');

    /**
     * SERVIÇOS
     */
    Route::get('/detran', function () {
        return view('services.detran');
    });
    Route::get('/agua', function () {
        return view('services.agua');
    });
    Route::get('/energia', function () {
        return view('services.energia');
    });
    Route::get('/fatura', function () {
        return view('services.faturas');
    });
    Route::get('/boleto', function () {
        return view('services.boletos');
    });

    /**
     * MENU
     */
    Route::get('/netflix', function () {
        return redirect()->back()->with('info', 'A revenda de planos Netflix está em construção, aguarde o lançamento');
    });

    Route::get('/desktop', function () {
        return redirect()->back()->with('info', 'O sistema desktop entá em construção, aguarde o lançamento');
    });

    /**
     * COMUNIDADE | PUBLICAÇÕES E COMENTARIOS
     */
    Route::get('/comunidade', 'PublicacaoController@index')->name('comunidade');
    Route::post('/comunidade/publicar', 'PublicacaoController@store')->name('storePublicacao');
    Route::get('/comunidade/delete/id/{id}', 'PublicacaoController@delete')->name('delPub');

    //COMENTARIOS
    Route::post('/comunidade/comentar', 'ComentarioController@store')->name('storeComentario');  

    /**
    * SUPPORT
    */
    Route::get('/suporte', 'DashboardController@support')->name('suporteView');

    /**
    * CONTROLE MASTER
    */
    Route::get('/controle', 'DashboardController@controle')->name('controleUsuarios');
    Route::post('/controle/edit', 'DashboardController@edit')->name('editUser');
    Route::get('/controle/detalhe/{user}', 'DashboardController@detalhe')->name('detalhes');
});