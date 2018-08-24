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
    <title>Listas</title>
    <link rel="icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/listas.css">
  

</head>
<body>
 
      <section class="seccion1 shadow-sm p-3 mb-5 ">  
          <div class="container">
            <img src="'.$urlFoto->buscarImagenPerfil().'">
            <button class="btn2"><img src="img/camara.png" id="imgCamara"></button>
          </div> 
          
           <ul class="menus" id="items">
                    <li><a href="#">Tweets</a></li>
                    <li><a href="#">Siguiendo</a></li>
                    <li><a href="#">Me gusta</a></li>
                    <li><a href="#" style="color: #47B2F4">Listas</a></li>
                    <li><a href="#">Momentos</a></li>
            </ul>

            <button class="btn btn-2" type="button">Editar Perfil</button>
      </section>


      <section class="seccion2 shadow-sm"></section>


      <section class="seccion3">    
    
        <div>
                <div class="contenedor1">
                    <div><h5><b>'.$_SESSION["nombre"].'</b></h5></div>   
                    <div><p style="font-size:13px; color:#657786">@'.$_SESSION["usuario"].'</p></div>  
                    <div><p style="font-size:13px; color:#657786">Se unió en</p></div>
                </div>  
        </div>

        <div>
            <div class="contenedor2">
                <div style="float:left" id="textoSup"><b>Suscrito a</b></div>
                <div id="textoSup"><a href="#"><b>Miembro de</b></a></div>
                <hr>
                <div style="margin-left: 15px; font-size: 13px; float: left;">
                    <div><a href="#"><b>POO</b></a></div>      
                    <div><p>Descripción</p></div> 
                    <div style="color:#657786"><p> # miembros</p></div>
                </div>
                <div style="float: right;">
                    <a href=""><img src="img/profile.jpg" class="rounded-circle" id="navbar-img-perfil-2"></a>
                </div>   
            </div>          
        </div>

        <div>
            <div class="contenedor3" >
                <div style="margin:15px">
                    <h5><b>Crear una lista</b></h5>
                    <p>Una lista es un grupo administrado de usuarios de Twitter y una forma genial de organizar tus intereses. <a href="#"> Más información</a></p>
                
                    <button type="button" class="btn btn-info btn-lg  btnCrear" data-toggle="modal" data-target="#myModal">Crar nueva lista</button>

                </div>
            </div>
            <br>

            <div class="contenedor4" >
                <div style="margin:15px">
                    <h5><b>A quién seguir.</b></h5>
<!--primer usuario-->                   
                    <div style="float:left;  margin-left: 0">
                        <a href=""><img src="img/profile.jpg" class="rounded-circle" id="navbar-img-perfil-1"></a>
                    </div>

                    <div>
                        <div id="texto3"><p><b>POO</b></p></div>
                        <div id="texto3" style="color:#657786"><p>@POO2periodo2018</p></div>
                        <button class="btn btnSeguir" type="submit">Seguir</button>
                        <hr>
                    </div>    
<!--segundo usuario-->
                    <div style="float:left;  margin-left: 0">
                        <a href=""><img src="img/profile.jpg" class="rounded-circle" id="navbar-img-perfil-1"></a>
                    </div>
                    <div>
                        <div id="texto3"><p><b>POO</b></p></div>
                        <div id="texto3" style="color:#657786"><p>@POO2periodo2018</p></div>
                        <button class="btn btnSeguir" type="submit">Seguir</button>
                        <hr>
                    </div> 
<!--tercero usuario-->
                    <div style="float:left;  margin-left: 0">
                        <a href=""><img src="img/profile.jpg" class="rounded-circle" id="navbar-img-perfil-1"></a>
                    </div>
                    <div>
                        <div id="texto3"><p><b>POO</b></p></div>
                        <div id="texto3" style="color:#657786"><p>@POO2periodo2018</p></div>
                        <button class="btn btnSeguir" type="submit">Seguir</button>
                        <hr>
                    </div> 

                   <a href="#">Encuentra a personas que conoces</a> 

                </div>
            </div>

            <div class="contenedor5" >
                <div style="margin:15px">
                    <h5><b>Tendencias para ti</b></h5>

                    <a href="#"><b>#CasoPandora</b></a><br>
                    <a href="#"><b>Elvin Santos</b></a><br>
                    <a href="#"><b>#HackedByCalleYPoché3</b></a><br>
                    <p>78,6 mil Tweets</p>
                    <a href="#"><b>#8YearsOfOneDirection</b></a><br>
                    <p>3,91 M Tweets</p>
                    <a href="#"><b>Copa Presidente</b></a><br>
                    <p>1.078 Tweets</p>
                    <a href="#"><b>Motagua</b></a><br>
                    <a href="#"><b>#ParoDeTransporte</b></a><br>
                    <p>1.278 Tweets</p>
                    <a href="#"><b>EN VIVO</b></a><br>
                    <p>62,8 mil Tweets</p>
                    <a href="#"><b>#fenafuth2018</b></a><br>
                    <a href="#"><b>#Tegucigalpa</b></a>
                </div>
            </div>
            <br>
            <div class="contenedor6">
                <div id="row-2" class="row">
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
      </section>
     
  
      <script src="js/jquery-3.3.1.js"></script>
      <script src="js/bootstrap.js"></script>
</body>
</html>';
?>