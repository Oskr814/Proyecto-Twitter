<?php
    include("ajax/cargar-perfil.php");
    $urlFoto = new imagenes();
    echo '
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/FontAwesome/css/all.css">
        <link rel="stylesheet" href="css/custom-navbar.css">
        <div class="container-fluid">
                    <nav class="navbar navbar-expand-md fixed-top  bg-light">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <img class="navbar-img-logo" src="img/img1.png" alt="">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="home.php"><i class="icon fas fa-home"></i>Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="notificaciones.php"><i class="icon far fa-bell"></i>Notificaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal"><i class="icon far fa-envelope"></i>Mensajes</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                            <li>
                                <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar en Twitter" aria-label="Search">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="'.$urlFoto->buscarImagenPerfil().'" alt="" class="rounded-circle" id="navbar-img-perfil-1">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="perfil.php"><b>'.$_SESSION["nombre"].'</b><br>
                                    <span>@'.$_SESSION["usuario"].'</span>
                                    </a><hr>
                                    <a class="dropdown-item" href="perfil.php">Perfil</a>
                                    <a class="dropdown-item" href="listas.php">Listas</a>
                                    <a class="dropdown-item" href="momentos.php">momentos</a><hr>
                                    <a class="dropdown-item" href="configuracion.php">Configuracion y privacidad</a>
                                    <a class="dropdown-item" href="#">Cento de ayuda</a>
                                    <a class="dropdown-item" id="logout" href="logout.php">Cerrar sesión</a>
                                    </div>
                                </div>
                                
                                    <button class="btn btn-twittear my-2 my-sm-0" type="button">Twittear</button>
                                </form>
                            </li>
                        </ul>
                        
                        </div>
                    </nav>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
                ';



?>