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
                    <a class="nav-item nav-link" href="index.php" style="font-family: 'Comfortaa', cursive; padding: 30px;"> Home <span class="sr-only">(Página atual)</span></a>
                    <a class="nav-item nav-link" href="Carrinho.php" style="font-family: 'Comfortaa', cursive; padding: 30px;">Carrinho</a>
                    <a class="nav-item nav-link" href="Entrar.php" style="font-family: 'Comfortaa', cursive; padding: 30px;">Login</a>
                   <a href="Encerrar.php" style="padding: 25px; margin-left: 100%;"><button type="button" class="btn btn-danger">Encerrar Sessão</button></a>
                </div>
            </div>
    </nav>
    
    <!--Fim menu-->

    <div class="container m-4 p-2 mx-auto">
    
    <?php
        include "DB_funcoes.php";


        echo "<div class='p-2 btn-group'>
        <button type='button' class='btn btn-dark'
              onclick=location.replace('Restrito.php?opc=C')>Cadastrar</button>
        <button type='button' class='btn btn-dark'
              onclick=location.replace('Restrito.php?opc=A')>Alterar</button>	
        <button type='button' class='btn btn-dark'
              onclick=location.replace('Restrito.php?opc=E')>Excluir</button>	  
        <button type='button' class='btn btn-dark'
            onclick=location.replace('Restrito.php?opc=L')>Listar</button>	
        </div>";
        $opc = $_GET['opc'];//Utilizada para as opçoes do submenu
        
        if($opc == "C"){
            echo "<h5 class='p-2 m-2 bg-secondary text-white text-center'>Cadastrar</h5>
		  <form action='Restrito.php?opc=I' method='post'>
			<h5 class='text-center'> Nome: <input type='text' name='nome' size='40' maxlength='40' required /> </h5>
			<h5 class='text-center'> Foto: <input type='text' name='foto' size='50' maxlength='70' value='imagens/Ingressos/' required /> </h5>
			<h5 class='text-center'> Valor: R$ <input type='number' name='valor' min='1' max='1000' value='0' required /> </h5>
				<h5 class='text-center'> <input type='submit' value='Cadastrar' /> </h5>
		</form>";

        }
        else if($opc == "I"){
        $nome = $_POST['nome'];
		$foto = $_POST['foto'];
		$valor = $_POST['valor'];

		$campos = "nome, foto, valor";
		$valores = "'$nome', '$foto', '$valor'";
		
		if ( Inserir_db("ingressos", $campos, $valores) == TRUE ) {
			echo "<p class='p-2 m-2 bg-dark text-white'>Filme cadastrado com sucesso!</p>";
		}
		else {
			echo "<p class='p-2 m-2 bg-warning text-white'>Erro ao cadastrar Filme!</p>";
		}
		echo "<p class='m-2'><input type='submit' value='Voltar' onclick=location.replace('Restrito.php') /></p>";
    }
    elseif($opc == "L"){
        $tabela = Select_db("ingressos", "*", "ORDER BY NOME");
		echo " <h5 class='p-2 m-2 bg-dark text-white text-center'>Filmes Cadastrados:</h5>
			<div class='container'>
                 <div class='row'>
		 			 <div class='col text-center font-weight-bold'>Nome</div>
		 			 <div class='col text-center font-weight-bold'>Valor</div>
		 			 <div class='col text-center font-weight-bold'>Detalhes</div>
				</div>";			
				for($i=0; $i < count($tabela); $i++) {		
					echo "<div class='row'>
							<div class='col text-center'>". $tabela[$i]['NOME'] ."</div>
							<div class='col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
							<div class='col text-center'><a href='Restrito.php?opc=D&id=". $tabela[$i]['ID'] ."' ><img src='Imagens/View.png' /></a></div>
						</div>";
				}
		echo "</div>";	
    }
    elseif ( $opc == "D" ) {			
		$id = $_GET['id'];
		$argumentos = " WHERE ID = '$id'";	
		
		$tabela = Select_db("ingressos", "*", $argumentos);	

		echo "<h5 class='p-2 m-2 bg-dark text-white text-center'>". $tabela[0]['NOME'] ."</h5>			  
			  <div class='container'>
                    <div class='row'>
                    	<div class='col text-center my-auto'><img src='". $tabela[0]['FOTO'] ."' width='100' /></div>
						<div class='col text-center font-weight-bold my-auto'>Valor: </div>
					  	<div class='col my-auto'>R$ ". number_format($tabela[0]['VALOR'],2,',','.') ."</div>
					</div>
			  </div>
			<br />
			<button type='submit' class='btn btn-dark' onclick='history.go(-1)'>Voltar</button>";	
	}
	//Opção que executa a alteração 
    elseif ( $opc == "A" ) {		
		
		$tabela = Select_db("ingressos", "*", "");
		echo " <h5 class='p-2 m-2 bg-dark text-white text-center'>Produtos Cadastrados:</h5>
			<div class='container'>
                 <div class='row'>
		 			 <div class='col text-center font-weight-bold'>Nome</div>
		 			 <div class='col text-center font-weight-bold'>Tipo</div>
		 			 <div class='col text-center font-weight-bold'>Valor</div>
		 			 <div class='col text-center font-weight-bold'>Detalhes</div>
				</div>";			
				for($i=0; $i < count($tabela); $i++) {		
					echo "<div class='row'>
							<div class='col text-center'>". $tabela[$i]['NOME'] ."</div>
							<div class='col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
							<div class='col text-center'><a href='Restrito.php?opc=M&id=". $tabela[$i]['ID'] ."' ><img src='imagens/Modify.png' /></a></div>
						</div>";
				}
		echo "</div>";			
	}
	//Opção de Alterar
    elseif ( $opc == "M" ) {	
		$id = $_GET['id'];
		$argumentos = "WHERE ID = '$id' ";
		
		$tabela = Select_db("ingressos", "*", $argumentos);
		
		echo "<h5 class='p-2 m-2 bg-dark text-white text-center'>Atualizar</h5>
			<form action='Restrito.php?opc=U&id=$id' method='post'>
                <h5 class='text-center'> Nome: <input type='text' name='nome' size='40' maxlength='40' value='". $tabela[0]['NOME'] ."' required /> </h5>
                <h5 class='text-center'> Foto: <input type='text' name='foto' size='50' maxlength='50' value='". $tabela[0]['FOTO'] ."' required /> </h5>
                <h5 class='text-center'> Valor: R$ <input type='number' name='valor' min='1' max='1000' value='". $tabela[0]['VALOR'] ."' required /> </h5>
                    <h5 class='text-center'> <input type='submit' value='Atualizar' /> </h5>
		    </form>";
	}
	//Função que executa o Update
    elseif ( $opc == "U" ) {	
		$id = $_GET['id'];	
	
		$nome = $_POST['nome'];
		$foto = $_POST['foto'];
		$valor = $_POST['valor'];

		$alteracoes = " NOME = '$nome', 
						FOTO = '$foto',  
						VALOR = '$valor' ";

		$argumentos = " WHERE ID = '$id'";
		
		if ( Update_db("ingressos", $alteracoes, $argumentos) == TRUE ) {
			echo "<p class='p-2 m-2 bg-dark text-white'>Filme alterado com sucesso!</p>";
		}
		else {
			echo "<p class='p-2 m-2 bg-warning text-white'>Erro ao alterar Filme!</p>";
		}
		echo "<p class='m-2'><input type='submit' value='Voltar' onclick=location.replace('Restrito.php') /></p>";
	}
	//Opção de Deletar
    elseif ( $opc == "E" ) {	
			
		$tabela = Select_db("ingressos", "*", "");
		echo " <h5 class='p-2 m-2 bg-dark text-white text-center'>Produtos Cadastrados:</h5>
			<div class='container'>
                 <div class='row'>
		 			 <div class='col text-center font-weight-bold'>Nome</div>
		 			 <div class='col text-center font-weight-bold'>Valor</div>
		 			 <div class='col text-center font-weight-bold'>Detalhes</div>
				</div>";			
				for($i=0; $i < count($tabela); $i++) {		
					echo "<div class='row'>
							<div class='col text-center'>". $tabela[$i]['NOME'] ."</div>
							<div class='col text-center'>R$ ". number_format($tabela[$i]['VALOR'],2,',','.') ."</div>
							<div class='col text-center'><a href='Restrito.php?opc=X&id=". $tabela[$i]['ID'] ."' ><img src='imagens/Erase.png' /></a></div>
						</div>";
				}
		echo "</div>";	
	}
	//Função que executa o Delete
    elseif ( $opc == "X" ) {	
		$id = $_GET['id'];			
		$argumentos = " WHERE ID = '$id'";
		if ( Delete_db("ingressos", $argumentos) == TRUE ) {
			echo "<p class='p-2 m-2 bg-dark text-white'>Filme excluído com sucesso!</p>";			  
		}
		else {
			echo "<p class='p-2 m-2 bg-warning text-white'>Erro ao excluir Filme!</p>";
		}
		echo "<p class='m-2'><input type='submit' value='Voltar' onclick=location.replace('Restrito.php') /></p>";		
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