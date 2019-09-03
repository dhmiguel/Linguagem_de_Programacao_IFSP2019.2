<!DOCTYPE html>
<html>
  <head>
     <title>Atividade Total</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <div class="container border m-4">
        <h1>Preencha os Dados do Produto</h1>
        
        <form action="Total.php" method="post">
            <label>Nome do Produto:</label>
            <input type="text" name="nome" required> <br/>
            
            <label>Valor:</label>
            <input type="number" name="val" required> <br/>
            
            <label>Quantidade:</label>
            <input type="number" name="qtd" min="1" max="150" required> <br/>
            
            
            <label>Pagamento: </label><br/>
            <input type="radio"  name="pag" value="v" required>À vista (10% desconto)<br/>
            <input type="radio" name="pag" value="p" required>Parcelado em 2x<br/>
            
            <input type="submit" value="Enviar"><br/>
               
            
            
        
        
        </form>
         
        
        
    </div>
  </body>
</html>
