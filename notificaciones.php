<?php
  include("validar-sesion.php"); 
  include("navbar.php");
?>
<?php echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificaciones</title>
    <link rel="icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/notificaciones.css">
</head>
<body>
<section class="seccion1">
<div class="container">
    <div class="row">
        <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3 col-izq">
                    <div>                                           
                    <div id="tendencias">
                    <h5><b>Tendencias para ti</b></h5>
                    </div>
                    </div>
        </div>


        <div class="col-sm-7 col-md-7 col-lg-6  col-xl-6 col-central">
            <div class="row">
                
                <div class="contenedor2">
                    <div style="float:left" id="textoSup"><b>Todo</b></div>
                    <div id="textoSup"><a href="#"><b>Menciones</b></a></div>
                    <hr>
                    
                    <div id="tweets">
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-der">
            <div class="row row-d1">
              <b>A quién seguir</b><a href="" class="sug-link">Actualizar</a><a href="" class="sug-link">Ver todos</a>
              <div id="sugerencias"></div>
              
            </div>
       

            <div class="contenedor4">
            <div id="row-2" class="row">
                <footer class="col-12">
                    <div class="pie-pagina">
                        <a href="#" class="pie-pagina">2018 Twitter</a>
                        <a href="landing.html" class="pie-pagina">Sobre nosotros</a>
                        <a href="centroAyuda" class="pie-pagina">Centro de Ayuda</a>                       
                        <a href="#" class="pie-pagina">Condiciones</a> 
                        <a href="#" class="pie-pagina">Política de Privacidad</a>
                        <a href="cookies.html" class="pie-pagina">Cookies</a>
                        <a href="#" class="pie-pagina">Informacíon sobre anuncios</a>                     
                    </div>
                </footer>
            </div>    
        </div>


        </div>
      <!---->
</div>
</seccion>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/controlador-notificaciones.js"></script>
    <script src="js/controlador-trends.js"></script>
    <script src="js/controlador-home.js"></script>
    
</body>
</html>';
?>