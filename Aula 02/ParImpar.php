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
            $valor1 = $_POST['valor'];//Post sempre em letras maiúsculas
            
            if( $valor1 %2 ==0 )
                
                echo "<h3> $valor1 é par! </h3>";//imprimindo na tela
            else if( $valor1 %2 ==1 )
                
                echo "<h3> $valor1 é ímpar ! </h3>";//imprimindo na tela

        ?>
        
        
    </div>
  </body>
</html>