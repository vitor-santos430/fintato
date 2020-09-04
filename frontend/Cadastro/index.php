<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aqui você terá total controle de suas finanças, vem para Fintato.com">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Home · Fintato</title>
	 <style>
		#task-bar1402685299{

			display: none;
		}
	 </style>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <script src="bootstrap/js/bootstrap.min.js" ></script>

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


           #navbar{
            background-color: #218F86;
           }

            /* Page content */
            .content {
            padding: 16px;
            }

            /* The sticky class is added to the navbar with JS when it reaches its scroll position */
            .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            }
            .py-5{
            background:#218F86;

            }

            nav#navbar.sticky{
            background-color: rgb(1 87 88 / 0.9) !important;
            }

        </style>
        <!-- Custom styles for this template -->
        <link href="pricing.css" rel="stylesheet">
  </head>
      <body>

        <div class="py-5">
            <center>
                <img src="img/fintato.png" alt="Menu Sticky Fintato!" width="200" id="img_menu_sticky">

            </center>
        </div>

        <nav id="navbar" class="navbar navbar-expand-md navbar-dark fixed-top" >
          <div class="container">
            <a class="navbar-brand" href="home">Fintato</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="#caracteristicas">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#planos">Planos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#TeamFintato">Team Fintato</a>
                </li>
              </ul>
              <a class="btn btn-outline-light" href="login">Entrar</a>
            </div>
          </div>
        </nav>



        <div class="container">


          <!-- START THE FEATURETTES -->
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" id="caracteristicas">
              <h2 class="display-5">Cadastro</h2>
          </div>

          <form>
            <div class="form-group">
              <label for="name">Nome Completo</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Ex: Alice Barbosa Pereira">
            </div>
              <div class="form-group ">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Ex: fintato@Fintato.com">
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Digite novamente</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
              </div>
            </div>

            <button type="submit" class="btn btn-primary " style="background:#218F86">Entrar</button>
          </form>

<!-- END THE FEATURETTES -->

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
              <div class="col-12 col-md">
                <!--img class="mb-2" src="docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24"-->
                <small class="d-block mb-3 text-muted">Fintato - 2020</small>
              </div>

              <div class="col-6 col-md">
                <h5>Planos</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#planos">Gratuito</a></li>
                  <li><a class="text-muted" href="#planos">TURBO</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Características</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#caracteristicas">Cálculo de Despesas Mensais</a></li>
                  <li><a class="text-muted" href="#caracteristicas">Cálculo de Rentabilidade</a></li>
                  <li><a class="text-muted" href="#caracteristicas">Despesas de cartões</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Sobre</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#TeamFintato">Team Fintato</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script>






        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("navbar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");

            } else {
                navbar.classList.remove("sticky");

            }
        }
        </script>
    </body>
</html>
