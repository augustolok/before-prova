<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JogadorRequest;
use App\table_cartoes;
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

class ClassificacaoController extends Controller
{
    public function index(){
        $arrayClassificacao = array();
        $arrayClassificacaoidtime = array();
        $cartoeresultado = array();
        $contador=0;
        $nomedotimes =  DB::table('table_nomedotimes')
                                                    ->get(); 
        foreach($nomedotimes as $rownomedotimes){
            $classificacao =  DB::table('table_partidas')
                                                    ->select(DB::raw('COUNT(vencendor) as vencendor'))
                                                    ->where('vencendor',$rownomedotimes->id)
                                                    ->get(); 

            foreach($classificacao as $rownclassificacao){
                // Compara se $a é maior que $b
                function cmp($a, $b) {
                    return $a['vencendor'] > $b['vencendor'];
                }

                // Ordena
                usort($array, 'cmp');

                // Mostra os valores
                echo '<pre>';
                print_r( $array );
                echo '</pre>';
                            
                            }
                        
                        }
                                
                    }                                       
        
}
