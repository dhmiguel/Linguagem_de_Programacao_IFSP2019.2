<!DOCTYPE html>
<html>
  <head>
     <title>Sinopse | Smash Entreterimento</title>
     <meta charset="utf-8" />
     <meta name="auhtor" content="Diego Miguel"/>
     <meta name="description" content="Projeto intermediario de Linguagem de Programacao utilizando php"/>
     <meta name="keywords" content="php,projeto,linguagem de programacao,ifsp,guarulhos"/>
     <meta name="generator" content="Visual Studio Code"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
  <nav class="navbar navbar-light" style="background-color: #87CEFA;">
      <p class="display-4 text-dark" style="color: #363636;display: block; margin-left: auto; margin-right: auto; font-family: 'Exo 2', sans-serif;">Smash</p>
        <div class="nav justify-content-center" >
          <img src="./imagens/smash-1.png" width="230" height="auto"  style="display: block; margin-left: auto; margin-right: auto;">
        </div>
      <p class="display-4 text-dark" style="color: #363636; display: block; margin-left: auto; margin-right: auto; font-family: 'Exo 2', sans-serif;">Entreterimento</p> 
    </nav>
    <br/>
    
    <div class="container border m-4 p-2 mx-auto">
      <!--Inicio do bloco de códigos PHP-->
      <?php
        //Pegando via POST a seleção do usuário e armazenando numa variável
        $categoria = $_POST['categoria'];

        //Exibição de um título
        echo "<div class= 'card bg-light text-dark'>";
            echo"<div class='card-body display-4' style='font-family: 'Exo', sans-serif;'>Sinopse $categoria </div>";
        echo "</div>";

        //Incluindo a primeira matriz a ser trabalhada em PHP
        include "matriz.inc";

        //Estrutura FOR para percorrer toda a matriz
        for($i = 0; $i <count($matriz_entreterimento); $i++){
          //Verificação se a primeira linha e primeira coluna da matriz condiz com a seleção feita pelo usuário na Index
          if($matriz_entreterimento[$i][0] == $categoria)
          //Exibição do conteúdo em cards via bootstrap
          echo "<div class='card mb-3' style='max-width: 100%;'>
          <div class='row no-gutters'>
            <div class='col-md-4'>
              <img src=' ". $matriz_entreterimento[$i][3] ." ' class='card-img m-2'>
            </div>
            <div class='col-md-8'>
              <div class='card-body'>
                <h5 class='card-title m-2 p-2' style='font-family: 'Exo', sans-serif;'>". $matriz_entreterimento[$i][1]." </h5>
                <p class='card-text m-2 p-2' style='font-family: 'Exo', sans-serif;'>". $matriz_entreterimento[$i][2]."</p>
              </div>
            </div>
          </div>
        </div>";
        }
        //Botão para ser redirecionado para a próxima página
        echo "
        <a href='detalhes.php?categoria=$categoria'
        <button type='button' class='btn btn-primary btn-lg btn-block' >Clique aqui e veja o elenco de ".$categoria."</button>  </a>";
      ?>
      <!--Fim do bloco de códigos PHP-->

      <!--Botão para voltar para a página anterior-->
      <button type="button" class="btn btn-primary btn-lg btn-block" style="font-family: 'Exo 2', sans-serif;" onclick="history.go(-1)">Voltar</button>  
    </div>

   <!--Footer--> 
   <footer class="page-footer " style="background-color: #87CEFA; font-size: 24px; font-family: 'Exo 2', sans-serif;">
      <div class="footer-copyright text-center py-3">
        © 2019 Diego Miguel Arruda de Moura
        <a class="footer " href="https://github.com/dhmiguel" target="_blank">
            <img src="./imagens/git_logo.png" width="30" height="30"  alt="">
        </a>
      </div>
    </footer>
  </body>
</html>