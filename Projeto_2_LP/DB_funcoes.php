<?php
    //Conexão com o banco de Dados
    $_SESSION['conexao'] = mysqli_connect("localhost", "root", "","db_cinema");

    if(mysqli_connect_error() <> 0){
        $php_errormsg = mysqli_connect_error();
        echo "<p>Erro ao conectar com o banco de dados!</p>";
        echo "<p> $php_errormsg</p>";
        return;
    }

    mysqli_query($_SESSION['conexao'],"SET NAMES 'utf8'");
	mysqli_query($_SESSION['conexao'],"SET character_set_connection=utf8");
	mysqli_query($_SESSION['conexao'],"SET character_set_client=utf8");
	mysqli_query($_SESSION['conexao'],"SET character_set_results=utf8");

    function Inserir_db($tabela, $campos, $valores)	{
		$inserir_sql = "INSERT into $tabela ($campos) values ($valores)";

		if(mysqli_query($_SESSION['conexao'],$inserir_sql)) {
			return true;
		}
	}
    function Select_db($tabela, $campos, $argumentos) {
		
		$select_sql = "SELECT $campos from $tabela $argumentos";		
		$retorno = mysqli_query($_SESSION['conexao'], $select_sql); # retorna registros (SELECT)
		$lista = array();
		while($reg = mysqli_fetch_assoc($retorno))	{
			array_push($lista, $reg);
		}
		return $lista;
	}

	function Update_db($tabela, $alteracoes, $argumentos) {
		
		$update_sql = "UPDATE $tabela SET $alteracoes $argumentos";			
		if(mysqli_query($_SESSION['conexao'],$update_sql)) {
			return true;
		}
	}

	function Delete_db($tabela, $argumentos) {
		$delete_sql = "DELETE from $tabela $argumentos";

		if(mysqli_query($_SESSION['conexao'], $delete_sql)) {
			return true;
		}
	}

	function Inserir_login($tabela, $campos, $valores){
		$inserir_login = "INSERT into $tabela ($campos) values ($valores)";

		if(mysqli_query($_SESSION['conexao'],$inserir_login)) {
			return true;
		}
	}
?>


