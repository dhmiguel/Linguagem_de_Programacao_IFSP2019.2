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
        <?php
            $dim = $_POST['dim'];
            $linhas = $_POST['linhas'];
            $colunas = $_POST['colunas'];
            $cont_col = 0;
            
            if($dim == 'uni'){
                echo "<h1>Tabela Unidimensional com $linhas linha(s): </h1>";
                
                echo "<table class='table table-striped table-dark'>";
                
                for($i=1 ; $i <= $linhas ; $i++){
                    echo "<tr><th> Linha $i </th></tr>";
                    
                }
                echo "</table>";
                
            } 
            else{
                echo "<h1>Tabela com $linhas linha(s) e $colunas colunas: </h1>";
                
                echo "<table class='table table-striped table-dark'>";
                
                for($i = 1; $i <= ($linhas * $colunas); $i++){
                    if($cont_col == 0){
                        echo "<tr>";
        
                    }
                    echo "<th>Célula $i </th>";
                    $cont_col++;
                    if($cont_col == $colunas){
                        echo "</tr>";
                        $cont_col = 0;
                    }
                    
                }
                 echo "</table>";
                
            }
                 
             
        ?>   
         
        
        
    </div>
  </body>
</html>