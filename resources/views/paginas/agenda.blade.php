<x-layout title="Agenda">
<div class="cointainer">
      @foreach($dadosAgenda as $agendardados) <!--// os dados que estão vindo da  conttroller se tornam a variavel $dado -->
        <li class="list-group-item">{{ $agendardados->nomeTarefa}}</li>
        <li class="list-group-item">{{ $agendardados->datahora}}</li>
       
        <br><br>
      @endforeach
   </div>

   <h1>Crie sua tarefa abaixo:</h1><br><br>
    <div class="text-center">
      <form  class="form-agenda shadow-lg  rounded " action="agenda/tarefa" method="POST">
        @csrf
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nome da Tarefa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nomeTarefa" id="nomeTarefa">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Data e Hora</label>
        <div class="col-sm-10"> 
         <input type="date" class="form-control" name="datahora" id="datahora">
       </div>
     </div>
      <button type="submit" class="btn btn-primary" >Criar Tarefa</button>
      <a type="submit" class="btn btn-primary" >Excluir</a>
      <a type="submit" class="btn btn-primary" >Consultar</a>
    </form><br>

</div>
</x-layout>