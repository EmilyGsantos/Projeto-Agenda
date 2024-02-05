<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendarTarefa;  //chamando a model 

class agendaTarefas extends Controller
{
    public function index(){
        $agendardados = AgendarTarefa::all();

        return view('paginas.agenda')->With('dadosAgenda', $agendardados);
    }//fim do index


    public function store(Request $request)
    {
        $nomeTarefa = $request->input('nomeTarefa');
        $dataeHora = $request->input('datahora');


        $model = new AgendarTarefa();
        $model->nomeTarefa = $nomeTarefa;
        $model->datahora = $dataeHora;
       

        return redirect('/agenda');

    }//fim da função store
}// fim do metodo
