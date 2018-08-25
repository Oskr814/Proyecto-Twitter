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
                    <li><a href="perfil.php">Tweets <span id="contador-tweets"></span></a></li>
                    <li><a href="#">Siguiendo</a></li>
                    <li><a href="#">Me gusta</a></li>
                    <li><a href="#" style="color: #47B2F4 !important">Listas</a></li>
                    <li><a href="momentos.php">Momentos</a></li>
            </ul>

             <button class="btn btn-2" type="button"><a href="configuracion.php" style=" color: #6E7D86 !important"> Editar Perfil</a></button>
      </section>


      <section class="seccion2 shadow-sm"></section>


      <section class="seccion3">    
    
        <div>
                <div class="contenedor1">
                    <div><h5 id="nombre-lista"><b>'.$_SESSION["nombre"].'</b></h5></div>   
                    <div><p style="font-size:13px; color:#657786" id="usuario-lista">@'.$_SESSION["usuario"].'</p></div>  
                    <div><p style="font-size:13px; color:#657786">Se unió en '.$_SESSION["date"].'</p></div>
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
    
    <!-- ventana modal-->    
                    <button type="button" class="btn btn-info btn-lg  btnCrear" data-toggle="modal" data-target="#myModal">Crar nueva lista</button>
                   
                <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                    
                <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title"><b>Crear una nueva lista</b></h5>  
                            <button type="button" class="close" data-dismiss="modal">&times;</button>                
                          </div>

                          <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nombre de la lista:</label>
                                        <input type="text" class="form-control" id="nombre-lista">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Descripción:</label> 
                                        <input type="text" class="form-control" id="descripcion">
                                        <p style="color: #6E7F8D">Menos de 100 caracteres, opcional</p>
                                    </div>
                                </form>
                                    <br>
                                    <h5><b>Privacidad</b></h5>
                                    <hr>
                                <form>
                                    <div class="radio">
                                        <label><input type="radio" name="tipo-privacidad" checked>Pública </label><label style="color: #6E7F8D">·Cualquiera puede seguir esta lista</label>
                                    </div>

                                    <div class="radio">
                                        <label><input type="radio" name="tipo-privacidad">Privada </label><label style="color: #6E7F8D">·Solo tú puedes acceder a esta lista</label>
                                    </div>
                                </form>
                          </div>
                          <div class="modal-footer">
                            <button id="btn-guardar" type="button" class="btn btn-default" data-dismiss="modal">Guardar</button>
                          </div>
                        </div>
                    
                      </div>
                    </div>
    <!-- fin ventana modal-->

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

            <div class="contenedor5">
            <div style="margin:15px">
                <h5><b>Tendencias para ti</b></h5>

            <div id="tendencias">
            </div>
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
      <script src="js/controlador-trends.js"></script>
      <script src="js/controlador-configuraciones.js"></script>
      <script src="js/controlador-profile.js"></script>
</body>
</html>';
?>