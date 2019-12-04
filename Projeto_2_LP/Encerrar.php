<?php
    session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['senha'] )){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);

        session_destroy();
    }

    echo "<script>
            alert('Sessão Encerrada!');
            window.location.href='index.php';
        </script>";
?>