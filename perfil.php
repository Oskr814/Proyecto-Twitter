<?php
  include("validar-sesion.php");
  include("navbar.php");
  
?>
<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="icon" href="img/Index/icono.ico">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/perfil.css">
  

</head>
<body>
      <section class="seccion1 shadow-sm p-3 mb-5 ">  
            <div class="vacio">      
                       
            </div> 
            <img class="imgPerfil" src="'.$urlFoto->buscarImagenPerfil().'">


          <!--  <div class="container" id="portada">
                    <img src="'.$urlFoto->buscarImagenPerfil().'">
                    <button class="btn2"><img src="img/camara.png" id="imgCamara"></button>
            <div> -->
            <ul class="menus" id="items" >
                    <li><a href="#" style="color: #47B2F4 !important">Tweets <span id="contador-tweets"></span></a></li>
                    <li><a href="#">Siguiendo</a></li>
                    <li><a href="#">Me gusta</a></li>
                    <li><a href="listas.php" >Listas <span id="contador-listas"></a></li>
                    <li><a href="momentos.php">Momentos</a></li>
            </ul>
            <button class="btn btn-2" type="button"><a href="configuracion.php" style=" color: #6E7D86 !important"> Editar Perfil</a></button>

      </section>

      <section class="seccion2 shadow-sm"></section>


      <section class="seccion3">    
        <div class="contenedor1">
            <div><h5><b>'.$_SESSION["nombre"].'</b></h5></div>   
             <div><p style="font-size:13px; color:#657786">@'.$_SESSION["usuario"].'</p></div> 
            <div><p style="font-size:13px; color:#657786">Se unió en '.$_SESSION["date"].'</p></div>
        </div>  

        <div class="contenedor2">
            <div style="float:left" id="textoSup"><b>Tweets</b></div>
            <div id="textoSup"><a href="#"><b>Respuestas</b></a></div>
            <hr>
            
        <div id="tweets">
        </div>

        <div class="navbar-img-logo" style="margin-bottom:15px"><img src="img/pajaronegro.png" ></div>
        </div>
        
        <div class="contenedor3">
            <div style="margin:15px">
                <h5><b>Tendencias para ti</b></h5>

            <div id="tendencias">
            </div>
         </div>
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

      </section>
     
  
      <script src="js/jquery-3.3.1.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/controlador-profile.js"></script>
      <script src="js/controlador-trends.js"></script>
      <script src="js/controlador-configuraciones.js"></script>
      <script src="js/controlador-listas.js"></script>
</body>
</html>';
?>