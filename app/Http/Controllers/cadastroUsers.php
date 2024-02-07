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

      return redirect('/consultar');
   }//fim do metodo

   public function atualizar(Request $request)
   {
      cadastrarUserModel::where('id', $id)->update($request->all());
      return redirect('consultar');

   }// fim da função atualizar

   public function excluir(Request $request, $id)
   {
      cadastrarUserModel::where('id', $id)->delete($request->all());
      return redirect('consultar');

   }// fim do excluir


   public function consultar()
   {
    $iduser =  cadastrarUserModel::all();

    return view('paginas.consultar', compact('iduser')); //compact passa os dados de uma pag para outra
  }// fim da função consultar

  public function editar($id)
  {
    $dadoedit = cadastrarUserModel::findOrFail($id);

    return view('paginas.editar', compact('dadoedit'));
  }// fim da função editar
   
}//fim da classe
