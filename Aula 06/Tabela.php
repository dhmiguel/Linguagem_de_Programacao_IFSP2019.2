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
            <h1>Tabela de Imagens</h1>
        
            <table class="table">
                <?php
                    $colunas = $_POST['col'];
                    $cont_col = 0;
                
                    for($i = 1 ; $i <= 20 ; $i++){
                        if($cont_col==0){
                            echo "<tr>";
                        }
                        echo "<td class='text-center'> <img src='Imagens/$i.png'/> </td>";
                        $cont_col++;
                        if($cont_col == $colunas){
                            echo "</tr>";
                            $cont_col = 0;
                        }
                    }
                
                ?>
        
            </table>
            <input type="submit" value="Voltar" onclick="history.go(-1)"/>
    </div>
  </body>
</html>