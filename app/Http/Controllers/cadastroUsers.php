<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUserModel;//importar a classe que eu quero utilizar

class cadastroUsers extends Controller
{
   // recebendo o conteudo do banco de dados
   public function index(){
    $dados = cadastrarUserModel::all();

     return view('paginas.cadastrar')->With('dados',$dados);
   }//fim do metodo index

   public function store(Request $request)
   {
      //passando os dados do forms para as  variaveis que seram lançadas no banco 
      $nomeUsuario = $request->input('nome');
      $telUsuario = $request->input('telefone');
      $emailUsuario = $request->input('email');
      $senhaUsuario = $request->input('senha');

      //inserir no banco de dados 
      $model = new cadastrarUserModel();
      $model->nome = $nomeUsuario;
      $model->telefone = $telUsuario;
      $model->email = $emailUsuario;
      $model->senha = $senhaUsuario;
      $model->save();//armazenar os dados no BD

      return redirect('/cadastrar');
   }//fim do metodo

}//fim da classe
