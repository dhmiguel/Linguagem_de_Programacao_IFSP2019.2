<!DOCTYPE html>
<html>
  <head>
     <title>Atividade Boas Vindas</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
    <div class="container border m-4">
        <h1>Informe Seus Dados</h1>
        
        <form action="BoasVindas.php" method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required> <br/>
            
            <label>Idade:</label>
            <input type="number" name="idade" min="1" max="150" required> <br/>
            
            <label>Sexo: </label>
            <input type="radio"  name="sexo" value="f" required>Feminino
            <input type="radio" name="sexo" value="m" required>Masculino <br/>
            
            <input type="submit" value="Enviar"><br/>
               
            
            
        
        
        </form>
         
        
        
    </div>
  </body>
</html>
