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
    <title>Momentos</title>
    <link rel="icon" href="img/Index/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/momentos.css">
  

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


        <div style="max-width: 200px;"> 
           <ul class="menus" id="items" >
                    <li><a href="#">Tweets <span id="contador-tweets"></span></a></li>
                    <li><a href="#">Siguiendo</a></li>
                    <li><a href="#">Me gusta</a></li>
                    <li><a href="#" >Listas <span id="contador-listas"></a></li>
                    <li><a href="#" style="color: #47B2F4 !important">Momentos</a></li>
            </ul>
        </div> 

        <button class="btn btn-2" type="button"><a href="configuracion.php" style=" color: #6E7D86 !important"> Editar Perfil</a></button>
    </section>


    <section class="seccion2 shadow-sm"></section>


    <section class="seccion3">    
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3 col-izq">
                            <div style="padding: 50px;">                                           
                                <div><h5 id="nombre"><b>'.$_SESSION["nombre"].'</b></h5></div>   
                                <div><p style="font-size:13px; color:#657786" id="usuario-lista">@'.$_SESSION["usuario"].'</p></div>  
                                <div><p style="font-size:13px; color:#657786">Se unió en '.$_SESSION["date"].'</p></div>
                            </div>
                </div>    

                <div class="col-sm-7 col-md-7 col-lg-6  col-xl-6 col-central">
                        <div class="row">
                            <div>
                        
                                <div style="float:left; margin-bottom: 15px" id="textoSup"><b>Momentos</b></div>  <br>
                                <hr>

                                <div style="float: left;">
                                    <a href=""><img src="img/momentos/sistemas-logo.png" class="img-rounded" id="momento"></a>
                                </div> 

                                <div style="margin-left: 15px; font-size: 13px; float: left;">
                                    <div><a href="#"><b>POO</b></a></div>    
                                    <div  style="color:#657786"><p>Publicado· Hace # horas</p></div>                    
                                    <div  style="color:#657786"><p>Descripción</p></div>                    
                                </div>

                                    <ul class="menus2" style="float: right;">
                                        <li><a href="#" ><i class="fas fa-angle-down"></i> </a>
                                            <ul class="submenu">
                                                <li><a href="#">Ver estadísticas</a></li>
                                                <hr>
                                                <li><a href="#">Twittear Momento</a></li>
                                                <li><a href="#">Compartir por mensaje directo</a></li>
                                                <li><a href="#">Copiar enlace al Momento</a></li> 
                                                <li><a href="#">Insertar Momento</a></li> 
                                                <hr>
                                                <li><a href="#">Editar Momento  </a> </li> 
                                                <li><a href="#">Eliminar Momento</a> </li> 
                                            </ul>
                                        </li>  
                                    </ul>
                            </div>          
                        </div>
                </div>

                <div class="col-xl-3 col-der">
                            <div class="row row-d1">    
                                    <div style="margin:15px">
                                    <h5><b>Crear momento</b></h5>
                                    <p>Usa Tweets para contar historias y compartirlas con el mundo.<a href="#"> Más información</a></p>
                                
                                    <button class="btn btnCrear" type="submit">Crear nuevo momento</button>
                                    </div>
                            </div>

                            <div class="row row-d2">       
                                <b>A quién seguir</b><a href="" class="sug-link">Actualizar</a><a href="" class="sug-link">Ver todos</a>
                                <div id="sugerencias"></div>           
                            </div>    

                            <div class="row row-d2">
                                <div style="margin:15px">
                                <h5><b>Tendencias para ti</b></h5>
                    
                                <div id="tendencias">
                                </div>
                                </div>          
                            </div>

                            
                                <div id="row-3" class="row">
                                    <footer class="col-12">
                                        <div class="pie-pagina">
                                            <a href="#" class="pie-pagina">2018 Twitter</a>
                                            <a href="landing.html" class="pie-pagina">Sobre nosotros</a>
                                            <a href="#" class="pie-pagina">Centro de Ayuda</a>                       
                                            <a href="#" class="pie-pagina">Condiciones</a> 
                                            <a href="#" class="pie-pagina">Política de Privacidad</a>
                                            <a href="cookies.html" class="pie-pagina">Cookies</a>
                                            <a href="#" class="pie-pagina">Informacíon sobre anuncios</a>                     
                                        </div>
                                    </footer>
                                </div>    
                </div>
            </div>
        </div>

</section>
     
  
      <script src="js/jquery-3.3.1.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/controlador-profile.js"></script>
      <script src="js/controlador-trends.js"></script>
      <script src="js/controlador-configuraciones.js"></script>
      <script src="js/controlador-listas.js"></script>
      <script src="js/controlador-momentos.js"></script>
      <script src="js/controlador-home.js"></script>
</body>
</html>';
?>