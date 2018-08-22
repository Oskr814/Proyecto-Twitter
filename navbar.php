<?php
    include("validar-sesion.php");
    echo '
        <link rel="stylesheet" href="css/custom-navbar.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/FontAwesome/css/all.css">
        <div class="container-fluid">
                    <nav class="navbar navbar-expand-md fixed-top  bg-light">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <img class="navbar-img-logo" src="img/img1.png" alt="">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="home.php"><i class="icon fas fa-home"></i>Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#"><i class="icon far fa-bell"></i>Notificaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="icon far fa-envelope"></i>Mensajes</a>
                            </li>
                            <li class="nav-item">
                                
                            </li>
                            <li>
                                <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar en Twitter" aria-label="Search">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="data/porfile-photos/default-profile.jpg" alt="" class="rounded-circle" id="navbar-img-perfil-1">
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#"><b>'.$_SESSION["nombre"].'</b><br>
                                    <span>@'.$_SESSION["usuario"].'</span>
                                    </a><hr>
                                    <a class="dropdown-item" href="#">Perfil</a>
                                    <a class="dropdown-item" href="#">Listas</a>
                                    <a class="dropdown-item" href="#">Momentos</a><hr>
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
                <script src="js/jquery-3.3.1.js"></script>
                <script src="js/bootstrap.min.js"></script>';



?>