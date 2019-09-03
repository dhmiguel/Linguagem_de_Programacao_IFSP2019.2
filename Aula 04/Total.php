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
            $produto = $_POST['nome'];
            $valor = $_POST['val'];
            $quantidade = $_POST['qtd'];
            $pagamento = $_POST['pag'];
            $total1;
            $total2;
            $total3;
        
                echo "<h3> Produto: $produto</h3> <br/>";
                echo "<h3> Valor: $valor  </h3> <br/>";
                echo "<h3> Quantidade: $quantidade </h3> <br/>";
                
        
                $total1 = $valor * $quantidade;
                $total2 = ($valor * $quantidade) *0.9;
                $total3 = $total1/2;
        
                if ($pagamento == 'v'){
                    echo "<h3> Total : $total1</h3><br/>";
                    
                }
                else{
                    echo "<h3 Total: $total1</h3></br>";
                    echo "<h3> Total Parcelado 2x de $total3</h3><br/>";    
                }
                //LEMBRAR DE REVER A CONCATENAÇÃO CO OS PONTOS . .
                //echo "<h3> Total Parcelado 2x de $total1 /2 </h3><br/>"; EXEMPLO
            
                    
        ?>
        <button type="submit" value="Voltar" onclick="javascript:history.back();">Voltar</button>
    </div>
  </body>
</html>
