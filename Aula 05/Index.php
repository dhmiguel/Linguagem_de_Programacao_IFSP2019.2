<!DOCTYPE html>
<html>
  <head>
     <title>Atividade Tabela</title>
     <meta charset="utf-8" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
      
      <script>
        function ExibeOpcoes(opc){
            dimensao.className = "w-75 container border m-2 p-2 visible";
            if (opc == 'uni'){
                lblcol.className = "invisible";
                qtdcol.className = "invisible";
            }
            else{
                lblcol.className = "visible";
                qtdcol.className = "visible";
                
            }
        }
      
      
      </script>
      
      
  </head>

  <body>
    <div class="container border m-4">
        <form action="Tabela.php" method="post">
            <h1>Montar Tabela</h1>
            <p>Selecione a dimensão: </p>
            <p>
                <input type="radio" name="dim" value="uni" onclick="ExibeOpcoes(this.value)" required/>Unidimensional (uma coluna)
            </p>
            
            <p>
                <input type="radio" name="dim" value="bid" onclick="ExibeOpcoes(this.value)"  required>Bidimensional (várias colunas)
            </p>
            
            <div id="dimensao" class="w-75 container border m-2 p-2 invisible">
                <p class="font-weight-bold">
                    Preencha as dimensões da tabela:                
                </p>
                
                <p>
                    Quantidade de linhas:
                    <input type="number" name="linhas" min="1" max="10" value="1" required/>
                </p>
                
                <p>
                    
                <label id="lblcol">Quantidade de colunas:</label>
               
                    <input id="qtdcol" type="number" name="colunas" min="2" max="10" value="2" required/>
                
                
                </p>
            
            </div>
            
            <p><input type="submit" name="Enviar" value="Enviar">
                <input type="reset" value="Limpar" onclick="location.reload()"/>
            
            </p>        
        </form>
         
        
        
    </div>
  </body>
</html>
