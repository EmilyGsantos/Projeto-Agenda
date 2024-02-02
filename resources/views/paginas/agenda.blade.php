<x-layout>
<div class="cointainer">
      @foreach($dadosAgenda as $dado) <!--// os dados que estão vindo da  conttroller se tornam a variavel $dado -->
        <li class="list-group-item">{{$dado->nomeTarefa}}</li>
        <li class="list-group-item">{{$dado->dataehora}}</li>
       
        <br><br>
      @endforeach
   </div>
    <h1>Agenda</h1>


    <form action="agenda/tarefa" method="POST">
      @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nome da Tarefa</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="nomeTarefa" id="nomeTarefa">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Data e Hora</label>
      <input type="datetime" name="datahora" id="datahora">
    </div>
    
    <button type="submit" class="btn btn-primary">Criar Tarefa</button>
  </form>
</x-layout>