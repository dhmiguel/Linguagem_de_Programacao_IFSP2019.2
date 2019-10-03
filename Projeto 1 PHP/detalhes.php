<!DOCTYPE html>
<html>
  <head>
     <title>Detalhes | Smash Entreterimento</title>
     <meta charset="utf-8" />
     <meta name="auhtor" content="Diego Miguel"/>
     <meta name="description" content="Projeto intermediario de Linguagem de Programacao utilizando php"/>
     <meta name="keywords" content="php,projeto,linguagem de programacao,ifsp,guarulhos"/>
     <meta name="generator" content="Visual Studio Code"/>
     <link rel="stylesheet" href="./css/bootstrap.css"/>
     <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
     <script src="./js/bootstrap.js"></script> 
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
      <!--Início do bloco de códigos em PHP-->
      <?php
        //Pegando a categoria via GET selecionado no botão na página listar.php
        $categoria = $_GET['categoria'];
        //Exibição de um título

        echo "<div class= 'card bg-light text-dark'>";
            echo"<div class='card-body display-4'>Elenco $categoria </div>";
        echo "</div>";

        //Incluindo uma segunda matriz para ser tratada nesta página em PHP
        include "Matriz2.inc";

        //Estrutura FOR para percorrer toda a matriz
        for($i = 0; $i<count($matriz_elenco); $i++){

            //Verificação se a primeira linha e primeira coluna da matriz condiz com a seleção feita pelo usuário na Index
            if($matriz_elenco[$i][0] == $categoria )
           //Exibição do conteúdo 
           echo "
              <div class='card m-4 p-2' style='width: 18rem; display: inline-block;'>
                  <img class='card-img-top' src=' ".$matriz_elenco[$i][3]."'/100px180/?text=Image cap' alt='Imagem de capa do card'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$matriz_elenco[$i][1]."</h5>
                    </div>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item'>".$matriz_elenco[$i][2]."</li>
                    </ul>        
            </div>";
            
        }
    
      ?>
      <!--Fim do trecho de códigos em PHP-->

      <!--Botão para voltar para a página anterior-->
      <button type="button" class="btn btn-primary btn-lg btn-block" onclick="history.go(-1)">Voltar</button>
      
    </div>

   <!--Footer--> 
   <footer class="page-footer " style="background-color: #87CEFA; font-size: 24px; font-family: 'Exo 2', sans-serif;">
      <div class="footer-copyright text-center py-3">
        © 2019 Diego Miguel Arruda de Moura <br/>
        
        <a class="footer " href="https://github.com/dhmiguel" target="_blank">
            <img src="./imagens/git_logo.png"  width="30" height="30"  alt="">
        </a>
      </div>
    </footer>
  </body>
</html>