<?php

use Illuminate\Support\Facades\Route;


//ROTA TESTE
// Route::get('/Painel', function(){
//     return view('painel.dashboard');
// });


//Agrupando as rotas
Route::group(['namespace' => 'App\Http\Controllers'], function () {

//ROTA PARA UTILIZAÇÃO DO CONTROLLER DO FIREBASE
Route::get('/firebase', 'FirebaseController@index');


//=========================================AUTENTICAÇÃO=====================================================

//ROTA PARA A TELA DE ENTRADA
Route::get('/', 'Login\AutenticacaoController@index')->name('Autenticacao.index');

//ROTA PARA A TELA DE LOGAR
Route::get('/Logar', 'Login\AutenticacaoController@logar')->name('Autenticacao.logar');

//ROTA PARA A TELA DE REGISTRO
Route::post('/Registrar', 'Login\AutenticacaoController@registro')->name('Autenticacao.registro');

//ROTA PARA A TELA DO PAINEL DE CONTROLE
Route::get('/Painel', 'Painel\PainelController@index')->name('Painel.index');

//=========================================AUTENTICAÇÃO=====================================================

//==========================================INCIDENTES======================================================

//ROTA PARA EXIBIR O MENU DE INCIDENTES
Route::get('/Painel/Incidentes', 'Painel\IncidenteController@index')->name('Painel.Incidentes.index');

//ROTA PARA EXIBIR A LISTA DE INCIDENTES
Route::get('/Painel/Incidentes/list', 'Painel\IncidenteController@list')->name('Painel.Incidentes.list');

//ROTA PARA TELA DE CADASTRO DE UM REGISTRO
Route::get('/Painel/Incidentes/list/create', 'Painel\IncidenteController@create')->name('Painel.Incidentes.create');

//ROTA PARA CADASTRAR UM REGISTRO
Route::post('/Painel/Incidentes/list/store', 'Painel\IncidenteController@store')->name('Painel.Incidentes.store');

//ROTA PARA TELA DE ALTERAÇÃO DE UM REGISTRO
Route::get('/Painel/Incidentes/list/edit/{incidente}', 'Painel\IncidenteController@edit')->name('Painel.Incidentes.edit');

//ROTA PARA ALTERAR UM REGISTRO
Route::put('/Painel/Incidentes/edit/{incidente}', 'Painel\IncidenteController@update')->name('Painel.Incidentes.update');

//ROTA PARA EXCLUIR DE UM REGISTRO
Route::delete('/Painel/Incidentes/destroy/{incidente}', 'Painel\IncidenteController@destroy')->name('Painel.Incidentes.destroy');

//ROTA PARA O MAPA
Route::get('/Painel/Incidentes/mapa', 'Painel\IncidenteController@mapa')->name('Painel.Incidentes.mapa');

//==========================================INCIDENTES======================================================

//============================================USUARIOS======================================================

//ROTA PARA EXIBIR O MENU DE USUARIOS
Route::get('/Painel/Usuarios', 'Painel\UsuarioController@index')->name('Painel.Usuarios.index');

//ROTA PARA EXIBIR A LISTA DE USUARIOS
Route::get('/Painel/Usuarios/list', 'Painel\UsuarioController@list')->name('Painel.Usuarios.list');

//ROTA PARA TELA DE CADASTRO DE UM USUARIO
Route::get('/Painel/Usuarios/list/create', 'Painel\UsuarioController@create')->name('Painel.Usuarios.create');

//ROTA PARA CADASTRAR UM USUARIO
Route::post('/Painel/Usuarios/store', 'Painel\UsuarioController@store')->name('Painel.Usuarios.store');

//ROTA PARA TELA DE ALTERAÇÃO DE UM USUARIO
Route::get('/Painel/Usuarios/list/edit/{usuario}', 'Painel\UsuarioController@edit')->name('Painel.Usuarios.edit');

//ROTA PARA ALTERAR UM USUARIO
Route::put('/Painel/Usuarios/edit/{usuario}', 'Painel\UsuarioController@update')->name('Painel.Usuarios.update');

//ROTA PARA EXCLUIR DE UM USUARIO
Route::delete('/Painel/Usuarios/destroy/{usuario}', 'Painel\UsuarioController@destroy')->name('Painel.Usuarios.destroy');

//============================================USUARIOS======================================================

});
