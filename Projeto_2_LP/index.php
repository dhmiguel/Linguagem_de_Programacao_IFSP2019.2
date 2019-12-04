<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Diego Miguel"/>
    <meta name="description" content="Projeto Final Linguagem de Programacao I PHP"/>
    <meta name="keywords" content="php, projeto, lp1, ifsp, guarulhos"/>
    <meta name="generator" content="Visual Studio Code"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
    <title>TopCine | Home </title>
</head>
<body>
    <!--Início menu-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="menu" >
       <span id="logo-1">Top</span>
       <span id="logo-2">Cine</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php" style="font-family: 'Comfortaa', cursive; padding: 25px;"> Home <span class="sr-only">(Página atual)</span></a>
                    <a class="nav-item nav-link" href="Carrinho.php" style="font-family: 'Comfortaa', cursive; padding: 25px;">Carrinho</a>
                    <a class="nav-item nav-link" href="Entrar.php" style="font-family: 'Comfortaa', cursive; padding: 25px;">Login</a>
                    
                </div>
            </div>
    </nav>
    
    <!--Fim menu-->

    <div class="container m-4 p-2 mx-auto">
    
    <!-- Exibição de um card para o conteúdo -->

        <div class="card p-2" style="width: 17rem; margin-left: auto; margin-right: auto;">
            <img class="card-img-top" src="./imagens/movies.png" height="30%" alt="Imagem de capa do card"/>
                <div class="card-body">
                    <h5 class="card-title">Ingressos</h5>
                    <p class="card-text">Compre ingressos e curta seu filme!</p>
                    <a href="Comprar.php?opc=I" class="btn btn-dark">Comprar</a>
                </div>
        </div>
    </div>    

   <!--Footer--> 
   <footer class="page-footer" style="background-color: black; font-size: 24px;  font-family: 'Comfortaa', cursive; color: white;">
        <div class="footer-copyright text-center py-3">
          © 2019 Diego Miguel Arruda de Moura
          <a class="footer " href="https://github.com/dhmiguel" target="_blank">
              <img src="./imagens/logo_git.png" style="padding: 0px; margin: 6px;" width="40" height="40" alt="Github"/>
          </a>
        </div>
    </footer> 
</body>
</html>