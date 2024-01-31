<?php

use Illuminate\Support\Facades\Route;

/*
|Direcionamento de telas 
*/

Route::get('/cadastrar',[\App\Http\Controllers\cadastroUsers::class,'index']);

//redirecionando a pag do formulario usa o mesmo controlador
Route::post('/cadastrar/user',[\App\Http\Controllers\cadastroUsers::class,'store']);//Toda vez que o botão enviar for acionado


//rota da pagina de agenda

