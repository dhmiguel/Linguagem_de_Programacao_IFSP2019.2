<!DOCTYPE html>
<html>
  <head>
     <title>Atividade Par ou ímpar</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <div class="container border m-4">
         
        <h1>Verificar se o número é par ou ímpar</h1>
        
        <form action="ParImpar.php" method="post">
            <p>
                Número: <input type="number" name="valor" min="1" max="100" required/>
            
            </p>
            
            
            <p>
                <input type="submit" value="Verificar"/>
            
            </p>
                
        
        </form>
        
    </div>
  </body>
</html>
