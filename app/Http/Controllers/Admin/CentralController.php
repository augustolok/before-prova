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

class CentralController extends Controller
{
    //
     public function index(){

        $jogador =  table_jogadores::all();
        return view('admin.jogadores.index',compact('jogador'));
    }
    public function new(){
        return view('admin.jogadores.store');
    }
    public function newTime(){
        $jogador = table_jogadores::all();
        $time = table_nomedotimes::all();
   
    return response()
                ->json([
                        'time' => $time,
                        'jogador' => $jogador
                        ]);
        return view('admin.time.store');
    }
    public function newPartida(){
      $time = table_nomedotimes::all();
   
        return response()
                ->json([
                        'time' => $time
                        ]);
        return view('admin.time.store');
                
    }
    public function newPlacar(){
        $time = table_nomedotimes::all()->where('id','=', 19);
        if ($time->isEmpty()) {
            return response()->json(
                ['mensagem' =>"fail",
                'Nomecampo'=>"timeid",
                'error' => 'Time  informado nao existe na base de DADO']
            , 400, 
            ['X-Header-One' => 'Header Value']);
        }
       // $partida = table_partida::get();
         //foreach ($partida as $r){
         //   $arrayName = array(
          //      'time1' =>$time1 = table_nomedotimes::all()->where('id','=',$r->timesid1),
          //      'time2'=>$time2 = table_nomedotimes::all()->where('id','=',$r->timesid2)
          //  );
            
         //}
         // return [
           //// 'inforcaodapartida' =>$partida,
           // 'Times'=>$arrayName
        //];
         
         
                  
      }
      public function storePlacar(Request $request){
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
                                                ->where('jogadorid','=',6)
                                                ->where('timeid','=',1)
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
    public function storePartida(Request $request){
        
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
    public function store(Request $request){
        $acesseexterno = $request->acesseexterno;
       
            $jogadorData = $request->all();
            $jogador = new table_jogadores();
         if (empty($request->Nome)) {
            return [
                'mensagem' =>"fail",
                'Nomecampo'=>"Nome",
                'erro' =>"Campo nome vazio"
            ];
         }
         if (empty($request->CPF)) {
            return [
                'mensagem' =>"fail",
                'Nomecampo'=>"CPF",
                'erro' =>"Campo nome vazio"
            ];
         }
         if (empty($request->Numerodacamiseta)) {
            return [
                'mensagem' =>"fail",
                'Nomecampo'=>"Numerodacamiseta",
                'erro' =>"Campo nome vazio"
            ];
         }
        
        
            $jogadorData = $request->all();
            $jogador = new table_jogadores();
            $jogador->Create($jogadorData);
        

        
        //return view('admin.jogadores.store');
    }
    public function storetime(Request $request){
        $acesseexterno = $request->acesseexterno;
        if ($acesseexterno == 0) {
            $jogadorData = $request->all();
            $jogador = new table_nomedotimes();
         if (empty($request->Nomedotime)) {
            return [
                'all' =>"fail",
                'Nomecampo'=>"Nomedotime",
                'erro' =>"Campo nome vazio"
            ];
         }
         
        
            $resutlado = $jogador->Create($jogadorData);
            return [
                'all' =>"Success"
            ];
        }
        
        //return view('admin.jogadores.store');
    }
    public function storetimejogador(Request $request){
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
    public function update(table_jogadores $id ){
        
        
        return view('admin.jogadores.editar',compact('id') );
        //return view('admin.jogadores.store');
    }
}

