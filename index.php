<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rompecabezas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
  </head>

  <body class="fondo">
    
    <audio id="audioHome" autoplay="autoplay" loop>
       <source src="audios/musicaHome.ogg" type="audio/ogg" />
       <source src="audios/musicaHome.mp3" type="audio/mp3" />
    </audio>
    
    

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4 ">
      <!--<a class="navbar-brand" href="#"><img class="piezas" src="img/piezas.png" alt=""></a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <!--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
            <a class="nav-link" href="#"><img id="imagenRegresa" class="mimagen" src="img/flechaAtras.png" alt=""></a>
          </li>
        </ul>
      </div>
    </nav>
    <a id="downloadAnchorElem" style="display:none"></a>
    

    <div  class="row col-md-12 jumbotron noP">
        <div class="col-md-4 noP"></div>
        <div id="imagenes" class="row col-md-4 noP">   
            <a href="#"><img id="slider1" class="borde imgSldr" src="img/princesa.png"></a>
            <a href="#"><img id="slider2" class="borde imgSldr" src="img/superman.png"></a>
            <a href="#"><img id="slider3" class="borde imgSldr" src="img/frozen.png"></a>
        </div>
        <div class="col-md-4 noP"></div>
    </div>
    
    <div class="row col-md-12 fondoBtn" >
        <div class="col-md-2 col-lg-2 noP"></div>
        <div class="col-md-2 col-lg-2 noP"><a href="#"><img id="atras"  src="img/anterior.png"></a></div>
        <div class="col-md-4 col-lg-4 noP"></div>
        <div class="col-md-2 col-lg-2 noP"><a href="#"><img id="siguiente"  src="img/siguiente.png"></a></div>
        <div class="col-md-2 col-lg-2 noP"></div>
    </div> 
    
    <div class="row" ><button id="tocame" type="button" class="btn btn-default col-md-12">Descargar JSON</button></div>


    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
