<!DOCTYPE html>
<html>
  <head>
     <title>Maior</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <div class="container border m-4">
         <h1>Resultado:</h1>
         
        <?php
            $valor1 = $_POST['val1'];//Post sempre em letras maiúsculas
            $valor2 = $_POST['val2'];//criação de variáveis em php
            
            if( $valor1 > $valor2 )
                
                echo "<h3> $valor1 é maior que $valor2 ! </h3>";//imprimindo na tela
            else if( $valor2 > $valor1 )
                
                echo "<h3> $valor2 é maior que $valor1 ! </h3>";//imprimindo na tela
            else if( $valor1 == $valor2 )
                
                echo "<h3> $valor1 e $valor2 são iguais ! </h3>";//imprimindo na tela
        
        ?>
        
        
    </div>
  </body>
</html>