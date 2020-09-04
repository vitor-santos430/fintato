
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Faça login em Fintato.com">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <link rel="shortcut icon" href="img/logo.png" />
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
    <link href="frontend/Login/signin.css" rel="stylesheet">

    <?php 
      session_start(); 
      unset($_SESSION['user']);
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
                <a class="nav-link" href="cadastro">Inicie Grátis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadastro">Plano Turbo</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <form class="form-signin" method="post">
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
  <button class="btn btn-lg text-light btn-block" style="background-color: #218F86;" type="submit" name="entrar">Entrar</button>
  <p class="mt-5 mb-3 text-muted">Fintato - 2020</p>

      <?php
      
      if(isset($_POST['entrar']))
      {
          $ch = curl_init("https://fintato.000webhostapp.com/api/usuario/login/");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $dados = array(
                'email'=>$_POST['email'],
                'senha'=>$_POST['senha']
            );

            curl_setopt($ch, CURLOPT_POST, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

            $resultado = curl_exec($ch);

            curl_close($ch);

            $retorno = json_decode($resultado,1);
            if(isset($retorno['dados']['msg'])){
                echo $retorno['dados']['msg'];
                $_SESSION['user'] = array(
                    'key'=>$retorno['dados']['accessKey'],
                    'id'=>$retorno['dados']['id']
                );

                echo '<br><a href="forms_editar.php?id='.$_SESSION['user']['id'].'">Editar dados</a>';
                echo "<script>window.location.href = 'painel';</script>";
            }else{
                echo $retorno['dados'];
            }
      }
      
      ?>

</form>
    
    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
