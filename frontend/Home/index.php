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
              <h2 class="display-5">Caracteristicas</h2>
          </div>

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Um pouco sobre o Fintato <span class="text-muted">O tempo é precioso</span></h2>
              <p class="lead">Fintato é uma solução para você que não consegue controlar suas finanças, você poderá simular meses futuros, analisando se estará no vermelho ou não, sem contar de modelos para que suas finanças pessoais fiquem boas. Nós te auxiliamos a ter uma vida melhor.</p>
            </div>
            <div class="col-md-5">
              <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/gestao.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
          </div>


          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mt-5" id="planos">
            <h1 class="display-4">Planos</h1>
            <p class="lead">Fintato. Você com menos gastos!</p>
            </div>
            
           <div class="card-deck mb-3 text-center">
            

            <div class="card mb-4 shadow-sm">
              <div class="card-header bg-dark text-light" >
                <h4 class="my-0 font-weight-normal">Grátis</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">R$0 <small class="text-muted">/ Mês</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>+ Adicione despesas ILIMITADAS</li>
                  <li>+ Adicione receitas ILIMITADAS</li>
                  <li>+ Tenha Visão da Sua situação financeira</li>
                  <li>+ Não precisa se matar com fórmulas de Excel</li>
                </ul>
                <button type="button" class="btn btn-lg btn-dark btn-block text-light" onclick="window.location.href = 'cadastro_enterprise.php'">Não Perca Tempo</button>
              </div>
            </div>

            <div class="card mb-4 shadow-sm">
              <div class="card-header text-light" style="background-color: #218F86;">
                <h4 class="my-0 font-weight-normal">TURBO</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">R$20 <small class="text-muted">/ Mês</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>+ Adicione despesas ILIMITADAS</li>
                  <li>+ Adicione receitas ILIMITADAS</li>
                  <li>+ Tenha Visão da Sua situação financeira</li>
                  <li>+ Não precisa se matar com fórmulas de Excel</li>
                  <li>+ Modelos Econômicos</li>
                  <li>+ Sem Anuncios</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block text-light" style="background-color: #015758;" onclick="window.location.href = 'cadastro_enterprise.php'">Não Perca Tempo</button>
              </div>
            </div>
            
          </div>


          <hr class="featurette-divider" id="TeamFintato">

          <!-- Three columns of text below the carousel -->
          <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
              <h2 class="display-4">Team Fintato</h2>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/logo.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
              <h2>Inovadores</h2>
              <p></p>
            </div><!-- /.col-lg-4 -->
            
            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/IN.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
              <h2>Empenhados</h2>
              <p></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
              <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="img/TATO.png" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
              <h2>Ousados</h2>
              <p></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

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
