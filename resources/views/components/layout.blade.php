<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</head>
<body>
  <style>
    body{
      background-color:#d8f3dc;
    }

    .form-agenda{
        background-color:#ffe1a8;
        border-color:#f4a261;
        border-radius:12px;
        
        top: 20%;
        left: 49%;
          
    }
  </style>
   
    <h1>{{$title}}</h1>

    <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cadastrar">Home</a>
          </li>
          <li>
           <a class="nav-link active" aria-current="page" href="agenda">Agenda</a>
          </li>
        </ul>
    </div>
  </nav>
    <div>
       {{$slot}}<!--Quem vai ser substituida pelo conteudo-->
    </div>

    </div>
    <!-- FOOTER --> 
    <footer class=" bg-success text-white pt-5 pb-4">
      <p class="float-end"><a href="#">De volta ao topo</a></p>
      <div class="cointainer text-center text-md-left">
        <div class="row text-center text-md-left"></div>
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
</footer>
</body>
</html>