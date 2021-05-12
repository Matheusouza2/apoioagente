<?php

namespace App\Http\Controllers;

use App\Comissao;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class ComissaoController extends Controller
{
    public function store(Request $request)
    {
        
        $request['valor'] = str_replace(',', '.', $request['valor']);
        $request['data'] = Carbon::createFromFormat('Y-m-d', Carbon::now()->toDateString());
        $request['usuario'] = Auth::user()->id;
        $comissaoId = Comissao::create($request->except(['_token']));

        return response()->json($comissaoId);
    }

    public function show()
    {
        $dateNow = Carbon::createFromFormat('Y-m-d', Carbon::now()->toDateString());
        $comissao = DB::table('comissao')->where('data', $dateNow)->where('usuario', Auth::user()->id)->get();
        
        foreach ($comissao as $comis){
            if(strlen($comis->valor) <= 2){
                $comis->valor = $comis->valor.'.00';
            }
            $dataModif = \DateTime::createFromFormat('Y-m-d', $comis->data);
            $comis->data = $dataModif->format('d').'/'.$dataModif->format('m').'/'.$dataModif->format('Y');
        }
        
        return response()->json($comissao);
        
    }

    public function showMonth()
    {
        $comissao = DB::table('comissao')->where('usuario', Auth::user()->id)->get();
        foreach ($comissao as $comis){
            $dataModif = \DateTime::createFromFormat('Y-m-d', $comis->data);
            $comis->data = $dataModif->format('m').'/'.$dataModif->format('Y');
        }

        $colecao = collect($comissao)->groupBy(function ($comissaoModif, $key) { 
            return $comissaoModif->data;
        })->map(function ($comissaoModif, $key) {
            return $comissaoModif->sum('valor');
        });
        
        return response()->json($colecao);
    }

    public function searchMonth(Request $request)
    {
        $comissao = Comissao::select('data',DB::raw('SUM(valor) as valor'))->where('usuario', Auth::user()->id)->where(DB::raw("to_char(data, 'MM/YYYY')"), $request['mes'])->groupBy('data')->get();
        
        return response()->json($comissao);        
    }

    public function delete(Comissao $comissao)
    {
        $com = Comissao::find($comissao['id']);
        $com->delete();

        return response()->json('Sucesso', 200);
        
    }
}
