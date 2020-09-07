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

class PlacarController extends Controller
{
    public function index(){
        $partida = table_partida::get();
         foreach ($partida as $r){
           $arrayName = array(
                'time1' =>$time1 = table_nomedotimes::all()->where('id','=',$r->timesid1),
                'time2'=>$time2 = table_nomedotimes::all()->where('id','=',$r->timesid2)
            );
            
         }
          return [
            'inforcaodapartida' =>$partida,
            'Times'=>$arrayName
        ];
    }
        /** 
         * @response 400
         * {
         * "mensagem" :"fail",
         * "Nomecampo":"jogadorid",
         * "erro" :"Campo nome do compo esta vazio"
         * }
         * 
         */
    public function store(Request $request){
     
        if (empty($request->jogadorid)) {
            return [
                'mensagem' =>"fail",
                'Nomecampo'=>"jogadorid",
                'erro' =>"Campo jogador esta vazio"
                ];
            }
        if (empty($request->timesid1)) {
            return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"timeid",
                        'error' => 'Campo times  esta vazio'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]);
            }
        if ($request->timesid1 == $request->vencedor || $request->timesid2 == $request->vencedor) {
            return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"vencedor",
                        'error' => 'Campo times vencendor  informado não está na partida!'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]);
            }
        if ($request->timesid1 == $request->vencedor || $request->timesid2 == $request->vencedor) {
            return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"perdedor",
                        'error' => 'Campo times perdedor  informado não está na partida!'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]);
            }
            $resultadojogador = table_jogadores::all()
                                                    ->where('id','=', $request->jogadorid);
        if ($resultadojogador->isEmpty()) {
            
            return response()->json(
            [
                'mensagem' =>"fail",
                'Nomecampo'=>"jogadorid",
                'error' => 'Jogador informando não existe na base de dados!'
            ]
            , 400, 
            [
                'X-Header-One' => 'Header Value'
            ]);
        }
        
            $time = table_nomedotimes::all()->where('id','=', $request->timesid);
        if ($time->isEmpty()) {
           
                return response()->json(
                    [
                        'mensagem' =>"fail",
                        'Nomecampo'=>"timeid",
                        'error' => 'Time  informado nao existe na base de DADOS!'
                    ]
                    , 400, 
                    [
                        'X-Header-One' => 'Header Value'
                    ]);
           
        }
        $ResultadoTable_Elencos =  DB::table('table_elencos')
                                                            ->where('jogadorid','=',$request->jogadorid)
                                                            ->where('timeid','=',$request->timeid)
                                                            ->get();    
        if ($ResultadoTable_Elencos->isEmpty()) {
            
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"timeid/Jogadorid",
                    'error' => 'Time/Jogador  informado nao  tem vinculo no mesmo elenco!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
        
        }
        else{
            $placarData = $request->all();
            $placar = new table_placares();
            $placar->Create($placarData);
            return [
                'mensagem' =>"Success"
            ];
            
        }
       
          
          return view('admin.time.store');
                  
    }
         
         
                  
}
