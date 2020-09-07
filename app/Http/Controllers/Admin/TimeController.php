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
class TimeController extends Controller
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
        $acesseexterno = $request->acesseexterno;
        if ($acesseexterno == 0) {
           
         if (empty($request->Nomedotime)) {
            return [
                'all' =>"fail",
                'Nomecampo'=>"Nomedotime",
                'erro' =>"Campo nome vazio"
            ];
         }
         
            $timeData = $request->all();
            $time = new table_nomedotimes();
            $resutlado = $time->Create($timeData);
            return [
                'all' =>"Success"
            ];
        }
        
        //return view('admin.jogadores.store');
    }
}
