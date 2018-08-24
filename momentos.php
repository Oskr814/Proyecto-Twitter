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
    <link rel="icon" href="img/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/momentos.css">
  

</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light ">
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img class="navbar-img-logo" src="img/img1.1.png">
          <ul class="navbar-nav mr-auto menus" style="margin-left:75px">
                <li class="nav-item active ">
                  <i class="fas fa-home"></i> <a class="nav-link" href="#" id="imgIconos">Inicio</a>
                </li>
                 
                <li class="nav-item ">
                    <i class="far fa-bell"></i> <a class="nav-link" href="#" id="imgIconos">Notificaciones</a>
                </li>

                <li class="nav-item ">
                    <i class="far fa-envelope"></i><a class="nav-link" href="#" id="imgIconos">Mensajes</a>
                </li>
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar en Twitter" aria-label="Search">
            <a href=""><img src="img/profile.jpg" alt="" class="rounded-circle" id="navbar-img-perfil-1"></a>

            <div class="row">
                <div class="col-md-7 col-md-offset-2">
                    <button type="button" class="btn btn-default dropdown-toggle">imagen<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">HTML</a></li>
                      <li><a href="#">CSS</a></li>
                      <li><a href="#">JavaScript</a></li>
                    </ul>
                </div>    
            </div>      


            <button class="btn btn-primary my-2 my-sm-0" type="submit">Twittear</button>
          </form>
        </div>
</nav>


      <section class="seccion1 shadow-sm p-3 mb-5 ">  
          <div class="container">
            <img src="img/perfilPOO.jpg">
            <button class="btn2"><img src="img/camara.png" id="imgCamara"></button>
          </div> 
        <div style="max-width: 350px;"> 
           <ul class="menus" style="margin-left:325px; position: absolute; margin-top:160px; font-size: 14px; padding: 5px 0px; font-weight: bold" >
                    <li><a href="#">Tweets</a></li>
                    <li><a href="#">Siguiendo</a></li>
                    <li><a href="#">Me gusta</a></li>
                    <li><a href="#" >Listas</a></li>
                    <li><a href="#" style="color: #47B2F4">Momentos</a></li>
            </ul>
        </div> 

            <button class="btn btn-2" type="submit">Editar Perfil</button>
      </section>


      <section class="seccion2 shadow-sm"></section>


      <section class="seccion3">    
    
        <div>
                <div class="contenedor1">
                    <div><h5><b>POO</b></h5></div>   
                    <div><p style="font-size:13px; color:#657786">@POO2periodo2018</p></div> 
                    <div><p style="font-size:13px; color:#657786">Se unió en</p></div>
                </div>  
        </div>

        <div>
            <div class="contenedor2">
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

        <div>
            <div class="contenedor3" >
                <div style="margin:15px">
                    <h5><b>Crear momento</b></h5>
                    <p>Usa Tweets para contar historias y compartirlas con el mundo.<a href="#"> Más información</a></p>
                
                    <button class="btn btnCrear" type="submit">Crear nuevo momento</button>
                </div>
            </div>
        

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