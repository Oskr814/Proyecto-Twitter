<?php
  include("validar-sesion.php");
  include("navbar.php");
  $archivo = fopen("data/usuarios.json", "a+");
  $usuario;
  while($linea = fgets($archivo)){
    $usuario = json_decode($linea, true);
    if($usuario["usuario"]==$_SESSION["usuario"]){
        break;
    }
  }
  echo'<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Twitter/Configuracion</title>
      <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/custom-configuracion.css">
  </head>
  <body>
        <div class="container">
            <div class="row">
                  <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3 col-izq">
                    <div>
                        <div>
                        <img id="portada" src="'.$urlFoto->buscarImagenPortada().'">
                        </div>
                        <div class="info-user">
                            <a href=""><img src="'.$urlFoto->buscarImagenPerfil().'" alt="" class="rounded-circle" id="img-perfil-2"></a>
                            <div class="nombre-usuario">
                                <b id="nombre-home">'.$_SESSION["nombre"].'</b><br>
                                <a href="#" id="usuario-home" style="font-size:14px;">@'.$_SESSION["usuario"].'</a>
                            </div>
                            
                            <ul id="user-porfile-preview">
                              <li>
                                Tweets
                                <ul><li>#</li></ul>
                              </li>
                              <li>
                                Siguiendo
                                <ul><li>#</li></ul>
                              </li>
                              <li>
                                Seguidores
                                <ul><li>#</li></ul>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <div id="ajustes">
                      <ul class="conf-list">
                        <li id="menu-ajustes-cuenta">Cuenta<i class="fas fa-chevron-right" style="font-size:12px; position: absolute; right: 25px;"></i></li>
                        <li id="menu-seguridad">Privacidad y seguridad<i class="fas fa-chevron-right" style="font-size:12px; position: absolute; right: 25px;"></i></li>
                        <li id="menu-notificaciones-correo">Notificaciones por correo<i class="fas fa-chevron-right" style="font-size:12px; position: absolute; right: 25px;"></i></li>
                        <li id="menu-notificaciones">Notificaciones<i class="fas fa-chevron-right" style="font-size:12px; position: absolute; right: 25px;"></i></li>
                        <li id="menu-cuentas-silenciadas">Cuentas silenciadas<i class="fas fa-chevron-right" style="font-size:12px; position: absolute; right: 25px;"></i></li>
                        <li id="menu-cuentas-bloqueadas">Cuentas bloquedas<i class="fas fa-chevron-right" style="font-size:12px; position: absolute; right: 25px;"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-7 col-md-7 col-lg-6  col-xl-6 col-central">
                    <div class="row row-c1">
                      <div id="timeline">
                        <div id="div-cuenta" class="">
                            <div style="font-weight: bold;font-size: 20px;">Cuenta</div><hr>
                            <div class="ajustes-cuenta">
                                Nombre de usuario:  '.$usuario["nombre"].' <br>
                                <span style="position:relative; left:135px">@'.$usuario["usuario"].'</span><br>
                                Correo electronico: '.$usuario["email"].' <br><br>
                                Idioma: Español <br><br><hr>
                                <form method="post" id="form-foto-perfil" enctype="multipart/form-data" >
                                <b>Subir foto de perfil:</b><br><input type="file" name="perfil"><br>
                                </form>
                                <form method="post" id="form-foto-portada" enctype="multipart/form-data" >
                                <b>Subir foto de portada:</b><br><input type="file" name="portada"><br>
                                </form>
                                <div id="respuesta"></div> 
                            </div>
                            <div style="font-weight: bold;font-size: 20px;">Contenido<hr></div>
                            <div class="ajustes-cuenta">
                                Ciudad: <select name="" id="">
                                    <option value="0801">Tegucigalpa</option>
                                    <option value="0714">Danli</option>
                                  </select> <br><br>
                                  <a href="#">Desactiva tu cuenta</a>
                            </div>
                            
                        </div>
                        <div id="div-seguridad" class="oculto">
                            <div style="font-weight: bold;font-size: 20px;">Seguridad</div><hr>
                            Buscar
                            <div style="position:relative; left: 20px;">
                                <input type="checkbox" name="" id="seguridad-buscar" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar"> Ocultar contenido que pueda herir la sensibilidad de algunas personas</label>
                                <p style="font-size:11px; padding: 0 10px; position:relative; left:0px;">Esto impide que Tweets con contenido que potencialmente pueda herir la sensibilidad de algunas personas, sea mostrado en tus resultados de búsqueda.</p>
                                <input type="checkbox" name="" id="seguridad-cuentas-bloqueadas" checked><label style="font-size:14px; display: inline;" for="seguridad-cuentas-bloquedas"> Elimina cuentas bloquedas y silenciadas</label>
                            </div><hr>
                            Contenido Multimedia
                            <div style="position:relative; left: 20px;">
                                <input type="checkbox" name="" id="seguridad-buscar" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar"> Mostrar contendio multimedia que puede contener material delicado</label>
                            </div>
                          </div>
                        <div id="div-notificaciones-correo" class="oculto">
                          <div><h3>Nofificaciones por correo</h3><hr></div>
                          <h4>Actividad relacionada contigo y sus Tweets</h4>
                          Enviarme un correo electronico cuando <br>
                          <div class="notificaciones-correo">
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Tienes notificacoines nuevas</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Te envia un mensaje directo</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Alguien te envia un tweet por correo</label><hr>
                          </div>
                          
                          <h4>Actividad de tu red</h4>
                          Recibiras correos electronicos con <br>
                          <div class="notificaciones-correo">
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Historial y Tweets relevantes</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Actualizaciones sobre repercusion de tus Tweets</label><hr>
                          </div>
                          

                        </div>
                        <div id="div-notificaciones" class="oculto">
                          <h3>Notificaciones</h3>
                          Silencia notificaciones de personas:
                          <div class="notificaciones">
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Que no sigues</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Que no te siguen</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Cuya cuenta es nueva</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Que aun usan la foto de perfil predeterminada</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Que no han confirmado su correo electronico</label><br>
                              <input type="checkbox" name="" id="notificaciones-correo-nuevas" checked><label style="font-size:14px; display: inline;" for="seguridad-buscar">Qye no han confirmado su numero de telefono</label><br><br>
                              <button id="btn-guardar-notificaciones" class="btn">Guardar cambios</button><hr>
                          </div>
                        </div>
                        <div id="div-cuentas-silenciadas" class="oculto">
                            <h4>Cuentas que has silenciado </h4>
                            <p style="color:#8E8787; font-size: 14px;">Has ocultado de tu cronología los Tweets de estas cuentas y no recibirás de ellas notificaciones push ni mensajes de texto. También has ocultado de tus notificaciones las respuestas y menciones de cuentas que silenciaste.</p><hr>
                            <div id="cuentas-bloqueadas" style="text-align:center">No has silenciado ninguna cuenta que estés siguiendo actualmente.</div>
                        </div>
                        <div id="div-cuentas-bloqueadas" class="oculto">
                          <h4>Cuentas que estas bloqueando</h4>
                          <p style="color:#8E8787; font-size: 14px;">Has bloqueado estas cuentas. No verás sus Tweets en tu cronología. Además, las cuentas bloqueadas no podrán seguirte ni ver tu perfil mientras estén conectadas a Twitter. Más información sobre bloquear.</p><hr>
                          <div id="cuentas-bloqueadas" style="text-align:center">No has bloqueado ninguna cuenta</div>
                        </div>
                        


                        </div>
                        
                          
                            
                      </div>
                    </div>
                    
                  </div>
                  
            
        </div>
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/controlador-configuraciones.js"></script>
        
  </body>
  </html>';
?>

