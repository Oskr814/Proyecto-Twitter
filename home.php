<?php
  include("validar-sesion.php");
  include("navbar.php");
  
?>
<?php
  echo  '<html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Twitter</title>
            <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/custom-home.css">
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
                          <div id="tendencias">
                            <b>Tendecias para tí</b><br>
                            <span class="tendecias">#Tendencia</span>
                          </div>
                        </div>
                        <div class="col-sm-7 col-md-7 col-lg-6  col-xl-6 col-central">
                          <div class="row">
                            <div class="row-c1">
                            <a href=""><img id="img-perfil-3" class="rounded-circle" src="'.$urlFoto->buscarImagenPerfil().'" alt=""></a>
                            <textarea id="post-tweet" name="" id="" cols="30" rows="2" placeholder="¿Qué está pasando?"></textarea>
                            <input id="post-tweet-hashtag" type="text" placeholder="#hashtag" style="display:none;">
                            <button id="btn-post-tweet-twittear" class="btn btn-twittear my-2 my-sm-0" type="button" style="display:none;" >Twittear</button>
                            <div id="respuesta"></div>
                            <div><label id="subir-img" for="post-photo" style="display:none;"><i id="post-tweet-img" class="far fa-images" style=""></i></label></div>
                            <form method="post" id="form-post-photo" enctype="multipart/form-data">
                              <input id="post-photo" type="file" style="display:none;" name="post-photo">
                            </form>
                              
                            </div>
                          </div>
                          <div class="row row-c2">
                            <a id="nuevos-tweets" href="">Ver # Tweets nuevos</a>
                          </div>
                          <div class="row row-c3">
                            <div id="timeline">
                                
                              </div>
                          </div>
                          
                        </div>
                        <div class="col-xl-3 col-der">
                            <div class="row row-d1">
                                <b>A quién seguir</b><a href="" class="sug-link">Actualizar</a><a href="" class="sug-link">Ver todos</a>
                                <div id="sugerencias"></div>
                                <!--<div class="sugerencias" id="sugerencia1">
                                    <img class="rounded-circle" id="img-sug-1" src="img/profile.jpg" alt=""><b id="sug-username1">Cuenta</b><span class="sug-user" id="sug-@user1">@cuenta</span><br>
                                    <button class="btn btn-sugerencias" type="button">Seguir</button>
                                </div>
                                <div class="sugerencias" id="sugerencia2">
                                    <img class="rounded-circle" id="img-sug-2" src="img/profile.jpg" alt=""><b id="sug-username2">Cuenta</b><span class="sug-user" id="sug-@user2">@cuenta</span><br>
                                    <button class="btn btn-sugerencias" type="button">Seguir</button>
                                </div>
                                
                                <div class="sugerencias" id="sugerencia3">
                                    <img class="rounded-circle" id="img-sug-3" src="img/profile.jpg" alt=""><b id="sug-username3">Cuenta</b><span class="sug-user" id="sug-@user3">@cuenta</span><br>
                                    <button class="btn btn-sugerencias" type="button">Seguir</button>
                                </div>-->
                          </div>
                          <div class="row row-d2">Slide bar</div>
                        </div>
                        <!---->
                  </div>
                  
              </div>
              <script src="js/jquery-3.3.1.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/controlador-home.js"></script>
              
        </body>
        </html>';
?>