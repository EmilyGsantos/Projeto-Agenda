
<x-layout title="Formulario de Cadastro">
 <div class="cointainer">
      @foreach($dados as $dado) <!--// os dados que estão vindo da  conttroller se tornam a variavel $dado -->
        <li class="list-group-item">{{$dado->nome}}</li>
        <li class="list-group-item">{{$dado->telefone}}</li>
        <li class="list-group-item">{{$dado->email}}</li>
        <li class="list-group-item">{{$dado->senha}}</li>
        <br><br>
      @endforeach
   </div>

   
  <h1>Cadastre-se</h1><br>
    <form action="cadastrar/user" method="POST">
      @csrf  <!--segurança-->

      <label>Nome:</label>
      <input type="text"  id="nome" name="nome" placeholder="infrome seu nome" required/><br>
      <label>Telefone:</label>
      <input type="text" id="telefone" name="telefone" placeholder="11 9999-999" required/><br>
      <label>Email:</label>
      <input type="email"  id="email" name="email" required/><br>
      <label>Senha:</label>
      <input type="password"  id="senha" name="senha" required/><br>  
      <button type="submit">Enviar</button>
    </form>
</x-layout>