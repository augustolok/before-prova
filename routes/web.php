<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/Admin/Jogador','Admin\\JogadorController@index');
Route::get('/Admin/Jogador/new','Admin\\JogadorController@new')->name('jogador.new');
Route::post('/Admin/Jogador/new','Admin\\JogadorController@store')->name('jogador.store');
//Route::get('/Admin/Jogador/update/{id}','Admin\\CentralController@update')->name('jogador.update');
Route::get('/Admin/Time','Admin\\TimeController@index')->name('Time.new');
Route::post('/Admin/Time/new','Admin\\TimeController@store')->name('Time.store');
Route::get('/Admin/Partida','Admin\\PartidaController@index')->name('Partida.new');
Route::post('/Admin/Partida/new','Admin\\PartidaController@store')->name('Partida.store');
Route::get('/Admin/Placar','Admin\\PlacarController@index')->name('Placar.new');
Route::post('/Admin/Placar/new','Admin\\PlacarController@store')->name('Placar.store');
Route::get('/Admin/Elenco','Admin\\ElencoController@index')->name('Elenco.new');
Route::post('/Admin/Elenco/new','Admin\\ElencoController@store')->name('Elenco.store');
Route::get('/Admin/Cartao/{id}','Admin\\CartaoController@index')->name('Cartao.new');
Route::post('/Admin/Cartao/new','Admin\\CartaoController@store')->name('Cartao.store');
Route::get('/Classificacao/time','Admin\\ClassificacaoController@index')->name('Classificacao.time');

