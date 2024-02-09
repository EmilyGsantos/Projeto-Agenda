
<x-layout  title="Agenda de tarefas" >


    <h1 class="text-center" style="color: #52796f;">Cadastre-se</h1>
   
  <div class="bg-light border border-4 border-secundary-subtle  m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
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
           <input class="form-control" type="email"  id="email" name="email" placeholder="agendalaravel0@gmail.com" required/><br>
         </div>
          <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Senha:</label>
           <input class="form-control" type="password"  id="senha" name="senha" required/><br>  
          </div>
         <div class="col-12">
           <button class="btn btn-outline-primary " type="submit">Cadastrar</button>
         </div>
        </form>
      </div>
    </div>   
</body>
</html>
</x-layout>