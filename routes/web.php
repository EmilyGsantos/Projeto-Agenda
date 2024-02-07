<?php

use Illuminate\Support\Facades\Route;

/*
|Direcionamento de telas 
*/

Route::get('/cadastrar',[\App\Http\Controllers\cadastroUsers::class,'index']);

//redirecionando a pag do formulario usa o mesmo controlador
Route::post('/cadastrar/user',[\App\Http\Controllers\cadastroUsers::class,'store']);//Toda vez que o botão enviar for acionado


//rota da pagina de login
Route::get('/login',[\App\Http\Controllers\Auth\loginUser::class,'index']);
Route::post('login/user',[\App\Controllers\Auth\loginUser::class,'store']);

//rota da agenda
Route::get('/agenda',[\App\Http\Controllers\agendaTarefas::class,'index']);
Route::post('agenda/tarefa',[\App\Http\Controllers\agendaTarefas::class,'store']);

// rota do editar
Route::get('/editar/{id}',[\App\Http\Controllers\cadastroUsers::class,'editar']);

// rota do consultar
Route::get('/consultar',[\App\Http\Controllers\cadastroUsers::class,'consultar']);

//rota do atualizar 
Route::get('/atualizar/{id}',[\App\Http\Controllers\cadastroUsers::class,'atualizar']);

//rota do excluir
Route::get('/excluir/{id}',[\App\Http\Controllers\cadastroUsers::class,'excluir']);
