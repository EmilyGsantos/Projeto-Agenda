<x-layout title="Consultar usuário">
 @csrf

 <br><br>
    <table class="table table-success border-secundary">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">telefone</th>
        <th scope="col">e-mail</th>
        <th scope="col">senha</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
       @foreach($iduser as $id)
        <tr>
            <th scope="row">{{$id->id}}</th>
            <td>{{$id->nome}}</td>
            <td>{{$id->telefone}}</td>
            <td>{{$id->email}}</td>
            <td>{{$id->senha}}</td>
        <td>
            <a href="/editar/{{$id->id}}">
              
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
           </a>
        </td>
        </tr>
    </tbody>
  @endforeach
</table>
  
  <a class="btn btn-primary" href="cadastrar">Voltar</a> 
</x-layout>