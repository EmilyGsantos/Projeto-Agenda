<x-layout tile="Agenda de tarefas">
    <h1>Login</h1>

    <div class="form-login">
      <form action="login/user" method="POST">
        <h3>Bem-Vindo(a)</h3>

        <label for="inputEmail4" class="form-label">Email:</label>
        <input class="form-control" type="email"  id="email" name="email" required/><br>
        <label for="inputPassword4" class="form-label">Senha:</label>
        <input class="form-control" type="password"  id="senha" name="senha" required/><br>  
      </form>
    </div>
</x-layout>