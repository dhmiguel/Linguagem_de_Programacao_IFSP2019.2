<?php
    //Iniciando as sessões
    session_start();
    include "DB_funcoes.php";

    //Verificação se as variaveis estiverem vazias, não executa nada
    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location: index.php');
        exit();
    }

    //Pegando o usuário e senha por POST via formulário na págna Entrar.php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //SELECT para pegar os usuários do BD e verificar 
    $sql = "SELECT * FROM usuarios WHERE `login` = '$usuario' AND SENHA = '$senha'";

    $retorno = mysqli_query($_SESSION['conexao'], $sql);
    
    if(mysqli_num_rows($retorno) > 0){
        //Atribuição de uma sessão para o login
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        //Após o login concluído, redireciona para a página Restriro.php
        header('Location: Restrito.php');
    }

    //Caso não retorne dados válidos do BD, a sessão é desfeita e o usuário é redirecionado para a index
    else{
        unset ($_SESSION['usuario']);
        unset ($_SESSION['senha']);
        header ('Location: index.php');
    }

?>
