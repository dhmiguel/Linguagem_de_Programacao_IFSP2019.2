<!DOCTYPE html>
<html>
  <head>
     <title>Home | Smash Entreterimento</title>
     <meta charset="utf-8" />
     <meta name="auhtor" content="Diego Miguel"/>
     <meta name="description" content="Projeto intermediario de Linguagem de Programacao utilizando php"/>
     <meta name="keywords" content="php,projeto,linguagem de programacao,ifsp,guarulhos"/>
     <meta name="generator" content="Visual Studio Code"/>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1" />
   
  </head>
  <body>
    <!--Barra de Navegação-->
    <nav class="navbar navbar-light" style="background-color: #87CEFA;">
      <p class="display-4 text-dark" style="color: #363636;display: block; margin-left: auto; margin-right: auto; font-family: 'Exo 2', sans-serif;">Smash</p>
        <div class="nav justify-content-center" >
          <img src="./imagens/smash-1.png" width="230" height="auto"  style="display: block; margin-left: auto; margin-right: auto;">
        </div>
      <p class="display-4 text-dark" style="color: #363636; display: block; margin-left: auto; margin-right: auto; font-family: 'Exo 2', sans-serif;">Entreterimento</p> 
    </nav>
    <br/>
    <!--Inicio Carrousel-->
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide w-50 mx-auto px-3 " data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./imagens/stranger_things.jpg" class="d-block w-100 h-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Séries</h5>
          <p class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Stranger Things - Original Netflix</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="./imagens/maze-runner.jpg" class="d-block w-100 h-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Filmes</h5>
          <p class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Triologia Maze Runner</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="./imagens/black_mirror.jpg" class="d-block w-100 h-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Séries</h5>
          <p class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Black Mirror</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="./imagens/capita_marvel.jpg" class="d-block w-100 h-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Filmes</h5>
          <p class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Capitã Marvel</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="./imagens/game_of_thrones.jpg" class="d-block w-100 h-100 rounded" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Séries</h5>
          <p class="text-white bg-dark" style="font-family: 'Exo 2', sans-serif;">Game Of Thrones</p>
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--Fim Carrousel-->
<br/>

<!--Conteúdo Principal-->
<div class="card text-center">
  <div class="card-header">
    <h2 style="font-family: 'Exo', sans-serif;">Confira algumas informações sobre seus filmes e séries favoritos !</h2>
  </div>
  <div class="card-body">
    <h4 class="card-title" style="font-family: 'Exo', sans-serif;">Preencha o formulário abaixo:</h4>
    <p class="card-text">
      <form action="Listar.php" method="post">
        <h5 style="display: inline; font-family: 'Exo', sans-serif;">Escolha a Categoria:</h5>
        <select name="categoria" id="categoria"  required>
          <option value="" disabled selected >Selecione...</option>
          <option value="" disabled>Filmes</option>
          <option value="Maze-runner" >Maze Runner</option>
          <option value="Capita-marvel" >Capitã Marvel</option>
          <option value="Como_treinar_seu_Dragao" >Como treinar o seu dragão</option>
          <option value="Rei-leao" >O Rei Leão</option>
          <option value="Annabelle" >Annabelle</option>
          <option value="Toy-story" >ToyStory</option>
          <option value="" disabled>Séries</option>
          <option value="Friends" >Friends</option>
          <option value="Breaking-bed" >Breaking Bad</option>
          <option value="Got" >Game of Thrones</option>
          <option value="Stranger-things" >Stranger Things</option>
          <option value="Greys-anatomy" >Grey's Anatomy</option>
          <option value="Black-mirror" >Black Mirror</option>
          <option value="La-casa-de-papel" >La Casa de Papel</option>
        </select>
        <button type="button submit" class="btn btn-outline-primary">Enviar</button>
      </form> 
    </p>
  </div>
</div>

    <!--Footer--> 
    <footer class="page-footer" style="background-color: #87CEFA; font-size: 24px; font-family: 'Exo 2', sans-serif;">
      <div class="footer-copyright text-center py-3">
        © 2019 Diego Miguel Arruda de Moura
        <a class="footer " href="https://github.com/dhmiguel" target="_blank">
            <img src="./imagens/git_logo.png" style="padding: 0px; margin: 6px;" width="30" height="30"  alt="">
        </a>
      </div>
    </footer>
  </body>
</html>
