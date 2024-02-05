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



