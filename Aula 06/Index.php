<!DOCTYPE html>
<html>
  <head>
     <title>Atividade Tabela de Imagem</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <div class="container border m-4">
        <form action="Tabela.php" method="post">
            <h1>Tabela de Imagens</h1>
            <p class="font-weight-bold">Preencha a Quantidade de Colunas:
                <input type="number" min="1" max="5" name="col" required/>
            </p>
            
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar"/>
            
        
        
        </form>
         
        
        
    </div>
  </body>
</html>
