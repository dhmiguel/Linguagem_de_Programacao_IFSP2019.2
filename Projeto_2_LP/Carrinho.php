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
        <?php
            include "DB_funcoes.php";
            

            $opc = ''; //Feito para corrigir o erro de "Undefined variable"

            if(isset($_POST['opc'])){
                $opc = $_POST['opc'];
            }

            if(isset($_COOKIE['carrinho'])){
                $carrinho = $_COOKIE['carrinho'];
                $carrinho = unserialize($carrinho);
                $total = 0;
                echo " <h5 class='p-2 m-2 bg-dark text-white text-center' style='font-size:2em;'>Seu Pedido:</h5>
				<div class='container'>
	                 <div class='row'>
			 			 <div class='col text-center font-weight-bold'>Código</div>
			 			 <div class='col text-center font-weight-bold'>Nome</div>
			 			 <div class='col text-center font-weight-bold'>Valor</div>
			 			 <div class='col text-center font-weight-bold'>Quantidade</div>
			 			 <div class='col text-center font-weight-bold'>Remover</div>
                    </div>";
                    
                for($i = 0 ; $i < count($carrinho); $i ++){
                    $id = $carrinho[$i][0];
                    $argumentos = "WHERE ID = '$id'";
                    $tabela = Select_db('ingressos', '*', $argumentos);
                    echo "<div class='row'>
								<div class='col text-center'>". $tabela[0]['ID'] ."</div>
								<div class='col text-center'>". $tabela[0]['NOME'] ."</div>
								<div class='col text-center'>R$ ". number_format($tabela[0]['VALOR'],2,',','.') ."</div>
								<div class='col text-center'>
								<form action='Carrinho.php?opc=CA&i=$i' method='post'>
									<input type='number' name='quant' value='". $carrinho[$i][1] ."' min='1' max='10' />
									<input type='image' src='Imagens/Reload.png' alt ='Atualizar' />
								</form></div>
								<div class='col text-center'><a href='Carrinho.php?opc=CR&i=$i'><img src='Imagens/Delete.png' alt='Remover' /></a></div>
							</div>";
						$total = $total + ( $tabela[0]['VALOR'] * $carrinho[$i][1] );
                } 
                echo "<div class='row'>
							<div class='col text-center'></div>
							<div class='col text-right font-weight-bold'>Total:</div>
							<div class='col text-center font-weight-bold'> R$ ".number_format($total,2,',','.')."</div>
							<div class='col text-center'></div>
							<div class='col text-center'></div>
						</div>";
			echo "</div>";
						
		}
		else {
			echo "<h6 class='p-2 m-2 bg-danger text-white text-center'>Carrinho Vazio!</h6>";
		}
		
        echo "<p class='m-2'><input type='submit' value='Esvaziar Carrinho' onClick=location.replace('Carrinho.php?opc=CX') /> </p>";
           	
        if($opc == "CR"){
            $i = $_GET['i'];

            $carrinho = $_COOKIE['carrinho'];
            $carrinho = unserialize($carrinho);

            //Remove o item via unset
            unset($carrinho[$i]);
            $carrinho = serialize($carrinho);
            setcookie('carrinho',$carrinho);

            echo "<script>alert('Produto excluído do Carrinho!');</script>";
			
			echo "<script>location.replace('Carrinho.php');</script>";
        }

        elseif ( $opc == "CA" ) {		
            $i = $_GET['i'];	
            $quant = $_POST['quant'];
    
            $carrinho = $_COOKIE['carrinho'];	
            $carrinho = unserialize($carrinho);
            $carrinho[$i][1] = $quant;//Atualiza item			
            //Recarrega cookie
            $carrinho = serialize($carrinho);
            setcookie('carrinho', $carrinho);
    
                echo "<script>alert('Quantidade Atualizada!');</script>";
                
                echo "<script>location.replace('Carrinho.php');</script>";				
    
        }

        else if ( $opc == "CX" ) {	# PEDIDO_ESVAZIAR
			//Limpar Cookie Carrinho:
			setcookie('carrinho', '', time()-1);
			
			echo "<script>alert('Carrinho Esvaziado!');</script>";
			echo "<script>location.replace('Carrinho.php');</script>";			

        }
    

    ?>
        
    </div>

   <!--Footer--> 
   <footer class="page-footer" style="background-color: black; font-size: 24px; font-family: 'Comfortaa', cursive; color: white;">
        <div class="footer-copyright text-center py-3">
          © 2019 Diego Miguel Arruda de Moura
          <a class="footer " href="https://github.com/dhmiguel" target="_blank">
              <img src="./imagens/logo_git.png" style="padding: 0px; margin: 6px;" width="40" height="40" alt="Github"/>
          </a>
        </div>
    </footer> 
</body>
</html>