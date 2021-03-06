<?php
  include("validar-sesion.php"); 
?>
<?php
  echo  '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro de ayuda</title>
    <link rel="icon" href="img/Index/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css//FontAwesome/css/all.css">
    <link rel="stylesheet" href="css/ayuda.css">
  

</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light ">
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a href="#"><img src="img/pajaroazul.PNG"></a>
          <ul class="navbar-nav mr-auto menus" >
                <li class="nav-item ">
                    <a class="nav-link" href="#" style="color:fff; font-weight:bold">Centro de ayuda</a>
                </li>  

                <li class="nav-item active ">
                    <a href="#" >Temas de ayuda</a>
                        <ul class="submenu">
                            <li><a href="#">Uso de Twitter</a></li>
                            <hr>
                            <li><a href="#">Administrar tu cuenta</a></li>
                            <hr>
                            <li><a href="#">Seguridad y prevención</a></li>
                            <hr>
                            <li><a href="#">Reglas y políticas</a></li>   
                        </ul>
                </li>
                 
                <li class="nav-item ">
                    <a href="#" >Guías</a>
                        <ul class="submenu">
                            <li><a href="#">Preguntas frecuentes para usuarios nuevos</a></li>
                            <hr>
                            <li><a href="#">Primeros pasos</a></li>
                            <hr>
                            <li><a href="#">Glosario</a></li>  
                        </ul>
                </li>             
          </ul>

          <button class="btn btn-primary my-2 my-sm-0" type="submit">Comunicate con nosotros</button>
            <a href=""><img src="img/profile.jpg" alt="" class="rounded-circle" id="navbar-img-perfil-1"></a>
          
        </div>
</nav>


      <section class="seccion1 shadow-sm p-3 mb-5 ">    
            <div class="contenedor1">             
                <p>Hola <span style="color: #fff">@'.$_SESSION["usuario"].'</span>,</p>
                <p style="width: 75%">¿En qué podemos ayudarte?</p>
            </div>
        <div class="contenedor2">
           
            <input type="search" placeholder="Buscar">  
            <button type="submit" id="buscar"><i class="fas fa-search"></i></button>
            <hr id="linea1">
        </div> 
        
      </section>

      <section class="seccion2">
        <div class="contenedor3">             
           <div style="width:170px; display: inline-block; line-height: 0%">
                <p>Uso de Twitter</p>
                <hr id="linea2">
            </div>
            <p style="color: #CED8DF">Administrar tu cuenta</p>
            <p style="color: #CED8DF">Seguridad y prevención</p>
            <p style="color: #CED8DF">Reglas y políticas</p>
            

            <img style="margin-top: 35px" src="img/ayuda/uso-twitter.PNG">
        </div>
        <div class="contenedor4">
            <p id="parrafo1">Todo lo que debes saber para poder usar Twitter como un profesional.</p>

            <table id="tabla1">
                <tr>
                    <td><a href="">Tweets</a></td>
                    <td><a href="">Bloquear y silenciar</a> </td>            
                </tr>
                
                <tr>
                    <td><a href="">Agregar contenido a tu Tweet</a> </td>
                    <td><a href="">Mensajes directos</a> </td>            
                </tr>
                <br>
                
                    <td><a href="">Búsqueda y tendencias</a> </td>
                    <td><a href="">Twitter en tu dispositivo</a> </td>            
                </tr>
                
                <tr>
                    <td><a href="">Seguir y dejar de seguir a usuarios</a> </td>
                    <td><a href="">Integración del sitio web y las app</a> </td>            
                </tr>
            </table> 
            
            <div style="width: 230px; margin-left: 38px"><hr style="background-color:#97E3FF; height: 2px"></div>
            

            <div style="margin-left: 38px">
                <p style="color:black"> Artículos populares:
                    <a href=""> Información sobre las respuestas y las menciones</a>,
                    <a href=""> About Direct Messages</a>,
                    <a href=""> Cómo publicar fotos o GIF en Twitter</a>,
                    <a href=""> Cómo compartir y mirar videos en Twitter</a>
                </p>

            </div>
            
        </div> 

      </section>  


      
      <section class="seccion3">
            <div class="contenedor3">             
                <p style="color: #CED8DF">Uso de Twitter</p>
                <div style="width:250px; display: inline-block; line-height: 0%">
                    <p>Administrar tu cuenta</p>
                    <hr id="linea3">
                </div>             
                <p style="color: #CED8DF">Seguridad y prevención</p>
                <p style="color: #CED8DF">Reglas y políticas</p>
                  
                <img style="margin-top: 35px" src="img/ayuda/administrar-cuenta.PNG">

            </div>

            <div class="contenedor4">
                <p id="parrafo1">Toda la información sobre la configuración de tu perfil y tu cuenta</p>
    
                <table id="tabla1">
                    <tr>
                        <td><a href="">Inicio de sesión y contraseña</a></td>
                        <td><a href="">Cuentas verificadas</a> </td>            
                    </tr>           
                    <tr>
                        <td><a href="">Nombre de usuario, correo electrónico y teléfono</a> </td>
                        <td><a href="">Cuentas suspendidas</a> </td>            
                    </tr> 
                        <td><a href="">Configuración de la cuenta</a> </td>
                        <td><a href="">Desactivar y reactivar una cuenta</a> </td>            
                    </tr>  
                    <tr>
                        <td><a href="">Notificaciones</a> </td>       
                    </tr>
                </table> 
             
                <div style="width: 230px; margin-left: 38px"><hr style="background-color:#97E3FF; height: 2px"></div>
                
    
                <div style="margin-left: 38px">
                    <p style="color:black"> Artículos populares:
                        <a href=""> Cómo restablecer tu contraseña si la perdiste o no la recuerdas</a>,
                        <a href=""> Cómo agregar un número de teléfono a una cuenta</a>,
                        <a href=""> Información sobre las notificaciones en dispositivos móviles</a>
                    </p> 
                </div>
                
            </div> 
    
          </section> 

          <section class="seccion4">
                <div class="contenedor3">             
                    <p style="color: #CED8DF">Uso de Twitter</p>
                    <p style="color: #CED8DF">Administrar tu cuenta</p>
                    <div style="width:270px; display: inline-block; line-height: 0%">
                        <p>Seguridad y prevención</p>
                        <hr id="linea4">
                    </div>                                
                    <p style="color: #CED8DF">Reglas y políticas</p>
                      
                    <img style="margin-top: 35px" src="img/ayuda/seguridad.PNG">   
                </div>
    
                <div class="contenedor4">
                    <p id="parrafo1">Obtén información sobre cómo administrar tu configuración de privacidad para mantenerte seguro</p>
        
                    <table id="tabla1">
                        <tr>
                            <td><a href="">Seguridad y cuentas hackeadas</a></td>
                            <td><a href="">Contenido sensible</a> </td>            
                        </tr>           
                        <tr>
                            <td><a href="">Privacidad</a> </td>
                            <td><a href="">Abuso</a> </td>            
                        </tr>
                            <td><a href="">Spam y cuentas falsas</a> </td>           
                        </tr>  
                        
                    </table> 
                
                    <div style="width: 230px; margin-left: 38px"><hr style="background-color:#97E3FF; height: 2px"></div>
                    
        
                    <div style="margin-left: 38px">
                        <p style="color:black"> Artículos populares:
                            <a href=""> Acerca de la seguridad de la cuenta </a>,
                            <a href=""> Cómo proteger y desproteger tus Tweets</a>,
                            <a href=""> Cómo controlar tu experiencia en Twitter</a>
                        </p> 
                    </div>                  
                </div> 
        
              </section> 


              <section class="seccion5">
                    <div class="contenedor3">             
                        <p style="color: #CED8DF">Uso de Twitter</p>
                        <p style="color: #CED8DF">Administrar tu cuenta</p>
                        <p style="color: #CED8DF">Seguridad y prevención</p>
                        <div style="width:270px; display: inline-block; line-height: 0%">
                            <p>Reglas y políticas</p>
                            <hr id="linea5">
                        </div>                                
                                              
                        <img style="margin-top: 35px" src="img/ayuda/reglas.PNG">   
                    </div>
        
                    <div class="contenedor4" style="top:150px">
                        <p id="parrafo1">Conoce las reglas y las políticas de Twitter</p>
            
                        <table id="tabla1">
                            <tr>
                                <td><a href="">Reglas y políticas de Twitter</a></td>
                                <td><a href="">Pautas de aplicación de las normativas legales</a> </td>            
                            </tr>           
                            <tr>
                                <td><a href="">Políticas y pautas generales</a> </td>
                                <td><a href="">Investigación y experimentos</a> </td>             
                            
                        </table> 

                        <div style="width: 230px; margin-left: 38px"><hr style="background-color:#97E3FF; height: 2px"></div>
                                      
                    </div> 
            
                    <div class="espacio">
                       <div style="margin-right: 75px">
                           <div style="float: left;"> <img src="img/ayuda/visto.PNG"> </div>
                            <div><p>Última vez visto </p></div>
                       </div> 

                       <div ><p> Configuración de la cuenta/<a href="#">Cómo acceder a tus datos de Twitter</a></p> </div> 
                    </div>
                  </section> 

                  <section class="land8"> 
                        <table class="table2">
                            <thead>
                            <tr>
                                <th><a href="#">Sobre nosotros</a></th>
                                <th><a href="#">Empresas</a></th>
                                <th><a href="#">Desarrolladores</a></th>
                                <th><a href="#">Centros de ayuda</a></th>
                                <th><a href="#">Marketing</a></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Compañía</a></td>
                                    <td><a href="#">Acerca de Twitter Ads</a></td>
                                    <td><a href="#">Documentación</a></td>
                                    <td><a href="#">Cómo usar Twitter</a></td>
                                    <td><a href="#">Información útil</a></td>
                                </tr>
    
                                <tr>
                                <td><a href="#">Valores</a></td>
                                <td><a href="#">Segmentación</a></td>
                                <td><a href="#">Foros</a></td>
                                <td><a href="#">Cómo administrar tu cuenta</a></td>
                                <td><a href="#">Casos de éxito</a></td>
                                </tr>
    
                                <tr>
                                    <td><a href="#">Seguridad</a></td>
                                    <td><a href="#">Analitycs</a></td>
                                    <td><a href="#">Comunidades</a></td>
                                    <td><a href="#">Proteccion y seguridad</a></td>
                                    <td><a href="#">Soluciones</a></td>
                                </tr>
    
                                <tr>
                                    <td><a href="#">Blog</a></td>
                                    <td><a href="#">Ayuda de Twitter Ads</a></td>
                                    <td><a href="#">Blog para desarrolladores</a></td>
                                    <td><a href="#">Reglas y politicas</a></td>
                                    <td><a href="#">Colecciones</a></td>
                                </tr>
    
                                    <tr>
                                <td><a href="#">Recursos de la marca</a></td>
                                <td><a href="#">Blog para empresas</a></td>
                                <td><a href="#"></a></td>
                                <td><a href="#">Contáctanos</a></td>
                                <td><a href="#">Blog de marketing</a></td>
                                </tr>
    
                                <tr>
                                    <td><a href="#">Empleos</a></td>
                                    <td><a href="#">Publicidad</a></td>
                                    <td><a href="#"></a></td>
                                    <td><a href="#"></a></td>
                                    <td><a href="#">Flight School</a></td>
                                </tr>
    
                                <tr>
                                    <td><a href="#">Inversores</a></td>
                                </tr>
                        <br>
                                <tr>
                                <td><a href="#">2018 Twitter, inc.</a></td> 
                                <td><a href="#">Cookies</a></td>  
                                <td><a href="#">Privacidad</a></td>  
                                <td><a href="#">Términos y condiciones</a></td>  
                                </tr>   
                            </body>           
                        </table>
                    </section>

       <script src="js/jquery-3.3.1.js"></script>
       <script src="js/bootstrap.js"></script>
       <script src="js/controlador-profile.js"></script>
    </body>
</html>'
?>