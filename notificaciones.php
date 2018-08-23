<?php
    include("navbar.php");
?>
<html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Twitter</title>
            <link rel="shortcut icon" href="img/icono.ico" type="image/x-icon">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/custom-home.css">
        </head>
        <body>
              <div class="container">
                  <div class="row">
                        <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3 col-izq">
                        
                          <div id="tendencias">
                            <b>Tendecias para tí</b><br>
                            <span class="tendecias">#Tendencia</span>
                          </div>
                        </div>
                        <div class="col-sm-7 col-md-7 col-lg-6  col-xl-6 col-central">
                          <b>Todo</b><hr>
                          <div class="row row-c3">
                            <div id="timeline">
                              
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-xl-3 col-der">
                            <div class="row row-d1">
                                <b>A quién seguir</b><a href="" class="sug-link">Actualizar</a><a href="" class="sug-link">Ver todos</a>
                                <div class="sugerencias" id="sugerencia1">
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
                                </div>
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
</html>