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
    <link rel="stylesheet" href="css/descripcion-listas.css">
  

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
        <section class="seccion1">    
    
                <div>
                        <div class="contenedor1">
                           
                           <div style="float: left;">
                                <div style="margin-left: 15px; margin-top: 15px; float: left;">
                                    <div><h5><b>POO</b></h5></div>   
                                    <div><p style="font-size:13px; color:#657786">Una lista privada de </p></div> 
                                    <div><p style="font-size:13px; color:#657786">descripcion de lista</p></div>
                                    <table style=" border-spacing: 12px; border-collapse: separate">
                                            <tr>
                                            <th>Miembros</th> 
                                            <th>Suscriptores</th>
                                            </tr>
                                            <tr style="color: #27A5F3">
                                                <td><h3>#</h3> </td>
                                                <td><h3>#</h3> </td>
                                            </tr>
                                    </table>                          
                                </div>

                                <div style="float: right; margin-top: 15px">
                                        <a href=""><img src="img/profile.jpg" class="rounded-circle" id="navbar-img-perfil-2"></a>
                                </div>

                            </div>
                       
                            <div style="margin-left: 15px;">                               
                                <button class="btn btn-2" type="submit">Editar</button>
                                <button class="btn btn-2" type="submit">Eliminar</button>
                            </div>
                        </div>  


                        
                </div>
        
                <div>
                    <div class="contenedor2">
                        <div id="textoSup"><b>Tweets</b></div>                        
                        <hr>
                        <h5 style="color: #66757F; text-align: center">Encuentra gente para añadir a tu lista</h5>  
                        
                        <div class="container">                         
                                <form style="float: left;">
                                  <div class="form-group"> 
                                    <input type="text" class="form-control buscar" id="" placeholder="Encuentra usuarios por nombre">
                                  </div>
                                </form>
                                <button class="btn btn-2" type="submit">Buscar</button>
                        </div>

                        <p style="text-align: center; padding: 1em; font-size: 14px">Busca un usuario, nombre o apellido, empresa o marca. También puedes agregar personas desde tu Página de<a href="#"> Seguimiento</a> o desde el perfil de cualquiera.</p>

                    </div>          
                </div>
        
            
                    <div class="contenedor3" >
                        <div style="margin:15px">
                            <h5 id="textoSup"><b>Miembros añadidos recientemente·</b> <a href="#" style="font-size: 12px">Ver todos</a></h5>
                        </div>
                    </div>
  
                    <div class="contenedor3" style="top: 20px;font-size: 16px; color:#9AA5AF">
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

                    <div class="contenedor3" style="top:50px">
                            <div style="margin:15px">
                                <h5 id="textoSup"><b>Más listas de <a href="#">usuario</a>·</b> <a href="#" style="font-size: 12px">Ver todos</a></h5>
                            </div>

                            <div style="margin-left: 15px;">
                                <a href="#">lista</a> <br>
                                <a href="#">Crear nueva lista</a>
                            </div>
                    </div>

                    <div class="list-group contenedor4">
                            <a href="#" class="list-group-item" ><b>Tweets</b></a>
                            <a href="#" class="list-group-item">Miembros de la lista</a>
                            <a href="#" class="list-group-item">Lista de suscriptores</a>
                    </div>



                
              </section>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.js"></script>
</body>
</html>';
?>