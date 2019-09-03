<!DOCTYPE html>
<html>
  <head>
     <title>Resultado</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <div class="container border m-4">
        <h1>Resultado:</h1> 
        
        <?php
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $sexo = $_POST['sexo'];
        
            if ($sexo == 'm')
                echo "<h3> Bem-Vindo $nome! </h3>";
            else 
                echo "<h3> Bem-Vinda $nome!</h3>";
            
            if ( $idade < 16 ) 
               echo "<h3>Voto proibido!</h3>";
                
            else if ( $idade >= 16 && $idade < 18 ) 
               echo "<h3> Voto opcional!</h3>";
                
            else if ( $idade > 70 ) 
               echo "<h3>   Voto opcional!</h3>";
                
        
            else if ( $idade > 18 && $idade<= 70 ) 
               echo "<h3>  Voto Obrigatório! </h3>";
                    
        ?>
        <button type="submit" value="Voltar" onclick="javascript:history.back();">Voltar</button>
    </div>
  </body>
</html>
