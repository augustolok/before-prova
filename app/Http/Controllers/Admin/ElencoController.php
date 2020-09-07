<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JogadorRequest;
use App\table_elenco;
use App\table_elencos;
use App\table_jogadores;
use App\table_nomedotimes;
use App\table_partida;
use App\table_placares;
use App\table_times;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use DB;

class ElencoController extends Controller
{
    public function index(){

        $jogador = table_jogadores::all();
        $time = table_nomedotimes::all();
   
    return response()
                ->json([
                        'time' => $time,
                        'jogador' => $jogador
                        ]);
        return view('admin.time.store');
    }
    public function store(Request $request){
        $acesseexterno = $request->acesseexterno;
        
            $jogadorData = $request->all();
            $jogador = new table_elencos();
         if (empty($request->timeid)) {
            return [
                'mensagem' =>"fail",
                'Nomecampo'=>"idtime",
                'erro' =>"Campo idtime vazio"
            ];
            
         }
         if (empty($request->jogadorid)) {
            
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"jogadorid",
                    'error' => 'Campo jogadorid vazio!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
         }
         else
         {
            $resultadojogador = table_jogadores::all()
                                                    ->where('id','=', $request->jogadorid);
            if ($resultadojogador->isEmpty()) {
               
               return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"jogadorid",
                    'error' => 'jogadorid informado nao existe na base de DADOS!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
            }
            else {
                   
                }
        
         }
        
         if (empty($request->timeid)) {
           
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"timeid",
                    'error' => 'Campo timeid vazio!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
        }
        else
        {   
            $resultadotime = table_elencos::all()->where('timeid','=', $request->timeid);
            $resultadotimeCount = $resultadotime->count();
            if ($resultadotimeCount>=5) {
                
                return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"Quantidade maxima jogador",
                        'error' => 'Esse time tem 5 jogadores exclua um,  para poder inserir um novo!'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]);
            }
            else {
               
            }
        }
        
        $jogadorData = $request->all();
        $jogador = new table_elencos();
        $jogador->Create($jogadorData);
        return [
            'mensagem' =>"Success"
        ];

        
        //return view('admin.jogadores.store');
    }
}
