
<x-layout  title="Agenda de tarefas" >
 <div class="cointainer">
      @foreach($dados as $dado) <!--// os dados que estão vindo da  conttroller se tornam a variavel $dado -->
        <li class="list-group-item">{{$dado->nome}}</li>
        <li class="list-group-item">{{$dado->telefone}}</li>
        <li class="list-group-item">{{$dado->email}}</li>
        <li class="list-group-item">{{$dado->senha}}</li>
        <br><br>
      @endforeach
   </div>

    <h1 class="text-center">Cadastre-se</h1>
   
  <div class="bg-light border border-4 border-secundary-subtle  m-5">
        <form class="row g-2" action="cadastrar/user" method="POST">
          @csrf  <!--segurança-->
          <div class="col-md-5">
           <label for="inputEmail4" class="form-label">Nome:</label>
           <input class="form-control" type="text"  id="nome" name="nome" placeholder="infrome seu nome" required/>
          </div><br>
          <div class="col-md-5"> 
             <label for="inputEmail4" class="form-label">Telefone:</label>
          <input class="form-control" type="text" id="telefone" name="telefone" placeholder="11 9999-999" required/><br>
          </div>
         <div class="col-md-5">
           <label for="inputEmail4" class="form-label">Email:</label>
           <input class="form-control" type="email"  id="email" name="email" required/><br>
         </div>
          <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Senha:</label>
           <input class="form-control" type="password"  id="senha" name="senha" required/><br>  
          </div>
         <div class="col-12">
           <button class="btn btn-outline-primary " type="submit">Enviar</button>
         </div>
        </form>
      </div>
    </div>   
</body>
</html>
</x-layout>