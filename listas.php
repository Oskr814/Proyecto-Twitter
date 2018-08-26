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
    <link rel="icon" href="img/Index/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/listas.css">
  

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
           <ul class="menus" id="items">
                    <li><a href="perfil.php">Tweets <span id="contador-tweets"></span></a></li>
                    <li><a href="#">Siguiendo</a></li>
                    <li><a href="#">Me gusta</a></li>
                    <li><a href="#" style="color: #47B2F4 !important">Lista <span id="contador-listas"></span></a></li>
                    <li><a href="momentos.php">Momentos</a></li>
            </ul>

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
                    <div style="width:100%; background-color: #fff;">          
                        <div style="float:left; margin-bottom: 15px" id="textoSup"><b>Suscrito a</b></div>
                             <div id="textoSup" style="float:left"><a href="#"><b>Miembro de</b></a></div>
                             <br>
                             <div id="listas">
                             </div>                                    
                     </div>   
                    </div>    
                </div>
                
                <div class="col-xl-3 col-der">
                    <div class="row row-d1"> 
                            
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
                    <br>

                    <div class="row row-d2">       
                                <b>A quién seguir</b><a href="" class="sug-link">Actualizar</a><a href="" class="sug-link">Ver todos</a>
                                <div id="sugerencias"></div>           
                    </div> 

                    <div class="row row-d2">
                        <div style="margin:15px">
                            <h5><b>Tendencias para ti</b></h5>       
                            <div id="tendencias"> </div>
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
      <script src="js/controlador-trends.js"></script>
      <script src="js/controlador-configuraciones.js"></script>
      <script src="js/controlador-profile.js"></script>
      <script src="js/controlador-listas.js"></script>
       <script src="js/controlador-home.js"></script>
</body>
</html>';
?>