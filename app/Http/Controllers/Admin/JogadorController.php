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

class JogadorController extends Controller
{
    public function index(){

        $jogador =  table_jogadores::all();
        return view('admin.jogadores.index',compact('jogador'));
    }
    public function store(Request $request){
       
       
         if (empty($request->Nome)) {
          
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"Nome",
                    'error' => 'Campo nome vazio!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);    
        
         }
         if (empty($request->CPF)) {
           
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"CPF",
                    'error' => 'Campo CPF vazio!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]); 
            
         }
         if (empty($request->Numerodacamiseta)) {
            
            return response()->json(
                [
                    'mensagem' =>"fail",
                    'Nomecampo'=>"Numerodacamiseta",
                    'error' => 'Campo Numero da camiseta vazio!'
                ]
                , 400, 
                [
                    'X-Header-One' => 'Header Value'
                ]);
            
         }
        
        
            $jogadorData = $request->all();
            $jogador = new table_jogadores();
            $jogador->Create($jogadorData);
        
         
        
        //return view('admin.jogadores.store');
    }
    public function new(){
        return view('admin.jogadores.store');
    }
}
