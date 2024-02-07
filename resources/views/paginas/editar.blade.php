<x-layout title="Atualizar usuario">
@csrf

<div class="bg-light border border-4 border-secundary-subtle m-5 ">
    <form class="row g-2" action="../atualizar/{{$dadoedit->id}}" method="get"> <!--os dados daqui vem da função editar-->
            <label> Id: </label>
            <input type="number" id="id" name="id" value="{{$dadoedit->id}}" disabled required/><br>

            <label> Nome: </label>
            <input type="text" id="id" name="id" value="{{$dadoedit->id}}" disabled required/><br>

            <label> Telefone:</label>
            <input type="number" id="id" name="id" value="{{$dadoedit->id}}" disabled required/><br>

            <label>E-mail: </label>
            <input type="number" id="id" name="id" value="{{$dadoedit->id}}" disabled required/><br>

            <label>Senha:</label>
            <input type="number" id="id" name="id" value="{{$dadoedit->id}}" disabled required/><br>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Excluir</button>
        
 </div>
</form>

 <!--Alerta modal-->
    <div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Deseja realmente excluir este usuário {{$dadoedit->nome}}?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
            <a type="button" class="btn btn-warning" href="/excluir/{{$dadoedit->id}}">Sim</a>
        </div>
        </div>
    </div>
    </div>
</x-layout>