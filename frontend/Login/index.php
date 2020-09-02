<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Entre · Caishen</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="frontend/login/signin.css" rel="stylesheet">

    <?php 
      session_start(); 
      unset($_SESSION['logado']);
     ?>
  </head>
  <body class="text-center">

  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #218F86;">
        <div class="container">
        <a class="navbar-brand" href="home">Fintato</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro_gratis.php">Inicie Grátis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro_enterprise.php">Enterprise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro_pro.php">Pro</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <form class="form-signin" action="login.php" method="post">
      <!--img class="mb-4" src="docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"-->
      <h1 class="h3 mb-3 font-weight-normal">Faça login em Fintato</h1>
      <label for="inputEmail" class="sr-only">Endereço de Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>
      <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Lembre de mim
    </label>
  </div>
  <button class="btn btn-lg text-light btn-block" style="background-color: #218F86;" type="submit" name="btn">Entrar</button>
  <p class="mt-5 mb-3 text-muted">Fintato - 2020</p>

      <?php
      
      if(isset($_POST['btn']))
      {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        require("controllers/validaLogins.php");
      }
      
      ?>

</form>
    
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
