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
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Estilos para alguns atributos principais-->
    <style>
        #logo-1{
            font-family: 'Comfortaa', cursive;
            font-size: 60px;
            color: red;
            
        }
        #logo-2{
            font-family: 'Comfortaa', cursive;
            font-size: 60px;
            color:white;  
        }
        #menu{
            background-color: black;
        }   
    </style>
    <title>TopCine | Comprar </title>
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
        <?php
            //Inclui o arquivo que trabalha com as funções de manipulação com o Banco de dados
            include "DB_funcoes.php";
           
            if(isset($_GET['opc'])){

                $opc = $_GET['opc'];
            }
            else{
                echo "<p>Erro!</p>";
            }
            //Trecho de código para a opção escolhida "I"
            if($opc == "I"){
                $argumentos = "ORDER BY NOME";

                $tabela =  Select_db("ingressos", "*", $argumentos);
                echo "<div class='row'>";

                for ($i = 0; $i < count($tabela); $i++){
                    echo "<div class='col-sm-6'>";

                    echo " <div class='card' style='width: 18rem; border: none;'>
                            <img class='card-img-top' src=' ". $tabela[$i]['FOTO'] ."'/100px180/?text=Image cap' alt='Imagem de capa do card' style='border-radius: 20px;'/>
                            <div class='card-body'>
                                <h5 class='card-title' style='font-family: Exo, sans-serif;'>" . $tabela[$i]['NOME'] ."</h5>
                                <span class='text-danger' style='font-size: 24px;'>R$ ". number_format($tabela[$i]['VALOR'],2,",",".") ."</span> <br /></br>
                                <a href='Comprar.php?opc=CI&id=". $tabela[$i]['ID'] ."' class='btn btn-dark'>Comprar</a>
                            </div>
                        </div>
                       </div>"; 

                }
                echo "</div>";

            }

            if($opc == "CI"){
                $id = $_GET['id'];
                $qtd = 0;    
			
			if (isset($_COOKIE['carrinho'])) {
				$carrinho = $_COOKIE['carrinho']; 
				$carrinho = unserialize($carrinho); 
				$i = count($carrinho); 
				for ( $j = 0; $j < $i; $j++  ) {
					if ( $id == $carrinho[$j][0] ) {
						echo "<script>alert('Aviso: Produto já existia no Carrinho!');</script>";
						$i = $j;	
                        $qtd = $carrinho[$j][1];
                    }
                }
			}
			else {
				
			$i = 0;
			}
            $qtd++;                 
			$carrinho[$i][0] = $id;		
			$carrinho[$i][1] = $qtd;		
			$carrinho = serialize($carrinho);	
			setcookie('carrinho', $carrinho);	
		  			
			echo "<script>alert('Produto incluído no Carrinho!');</script>";
				
			echo "<script>location.replace('Carrinho.php');</script>";
	}




        ?>

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