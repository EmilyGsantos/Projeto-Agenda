<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agendaTarefas extends Controller
{
    public function index(){
        $dadosAgenda = AgendarTarefa::all();
        return view('paginas.agenda')->With('dadosa', $agendardados);
    }//fim do index


    public function store(Request $request)
    {
        $nnomeTarefa = $request->input('nomeTarefa');
        $dataeHora = $request->input('datahora');


        $model = new AgendarTarefa();
        $model->nomeTarefa = $nnomeTarefa;
        $model->datahora = $dataeHora;
        $model->save();

        return redirect('/agenda');

    }//fim da função store
}// fim do metodo
