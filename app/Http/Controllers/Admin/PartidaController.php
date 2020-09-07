<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JogadorRequest;
use App\table_elenco;
use App\table_jogadores;
use App\table_nomedotimes;
use App\table_partida;
use App\table_placares;
use App\table_times;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use DB;

class PartidaController extends Controller
{
    
    public function index(){
        $time = table_nomedotimes::all();
     
          return response()
                  ->json([
                          'time' => $time
                          ]);
          return view('admin.time.store');
                  
      }
      public function store(Request $request){
        
        if (empty($request->timesid1)) {
           
            return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"timeid",
                        'error' => 'Campo times id 1 esta vazio!'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]);    
            }
        if (empty($request->timesid2)) {
            
                return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"timesid2",
                        'error' => 'Campo timesid2  esta vazio!'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]); 
            }
        if (empty($request->datahorafim)) {
        
        return response()->json(
            [
                'mensagem' =>"fail",
                'Nomecampo'=>"datahorafim",
                'error' => 'Campo data hora fim  esta vazio!'
            ]
            , 400, 
            [
                'X-Header-One' => 'Header Value'
            ]);
        }
         $time = table_nomedotimes::all()->where('id','=', $request->timesid1);
        if ($time->isEmpty()) {
           
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"timeid1",
                    'error' => 'Time numero 1 informado nao existe na base de DADOS!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
        }
         $time2 = table_nomedotimes::all()->where('id','=', $request->timesid2);
        if ($time2->isEmpty()) {
            
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"timeid2",
                    'error' => 'Time numero 2 informado nao existe na base de DADOS!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
        }
         if (empty($request->datahorainicio)) {
            return [
                'mensagem' =>"fail",
                'Nomecampo'=>"datahorainicio",
                'erro' =>"Campo data hora inicio vazio"
            ];
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"datahorainicio",
                    'error' => 'Campo data hora inicio vazio!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
        }
         

    $partidaData = $request->all();
    $partida = new table_partida();
    $partida->Create($partidaData);
    return [
        'mensagem' =>"Succes"
    ];
       
    }
}
