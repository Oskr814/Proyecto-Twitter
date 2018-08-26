<?php
    session_start();
    if(isset($_SESSION["usuario"]))
    header("Location: home.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter. Es lo que está pasando.</title>
    <link rel="icon" href="img/Index/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row h-100 w-100">
            <!--Lado Izquierdo-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 background_izq lado-inferior">
                <div class="izquierdo">
                    <div class="lado_izq"><label><img src="img/Index/lupa.png"> Sigue lo que te interesa.</label></div>
                    <div class="lado_izq"><label><img src="img/Index/usuarios.png"> Entérate de lo que está hablando la gente.</label></div>
                    <div class="lado_izq"><label><img src="img/Index/comentarios.png "> Únete a la convesarción.</label></div>  
                </div>
            
            </div>

            <!--Lado Derecho-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 lado-superior">
                <div>
                    <div class="input-user-login">
                        <input id="usuario" class="ocultar"type="text" placeholder="Teléfono, correo electrónico o nombre de usuario">
                        <input id="password" class="ocultar"type="password" placeholder="Contraseña">
                        <button class="btn btn-light ocultar" id="btn-light-1">Iniciar sesión</button>
                        <div class="a-forget-pass ocultar">
                            <a href="#">¿Olvidaste tu contraseña?</a> 
                        </div>
                    </div>
                </div>
                <div class="lado_der">
                    <div id="contenido-der">
                        <img src="img/Index/img1.png"><br><br>
                        <div class="text-promo">
                            <h1>Descubre lo que está<br> pasando en el mundo en este momento</h1><br>
                        </div>
                        <h2 style="font-weight:bold; font-size:16px">Únete hoy a Twitter.</h2><br>
                        <div class="btn-gurpo">
                            <button type="button" class="btn btn-primary" id="btn-primary-1" onclick="redirijirFormulario();">Registrarse</button><br>
                            <button type="button" class="btn btn-light" id="btn-light-2"><a class="link-landing" href="landing.html" class="pie-pagina">Iniciar sesión</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="row-2" class="row">
            <footer class="col-12">
                <div class="pie-pagina">
                    <a href="landing.php" class="pie-pagina">Sobre nosotros</a>
                    <a href="#" class="pie-pagina">Centro de Ayuda</a> 
                    <a href="#" class="pie-pagina">Blog</a>
                    <a href="status.php" class="pie-pagina">Estado</a>
                    <a href="#" class="pie-pagina">Empleos</a>
                    <a href="#" class="pie-pagina">Condiciones</a> 
                    <a href="#" class="pie-pagina">Política de Privacidad</a>
                    <a href="cookies.php" class="pie-pagina">Cookies</a>
                    <a href="#" class="pie-pagina">Informacíon sobre anuncios</a>
                    <a href="#" class="pie-pagina">Marca</a> 
                    <a href="#" class="pie-pagina">Aplicacioens</a>
                    <a href="#" class="pie-pagina">Anunciarse</a>
                    <a href="#" class="pie-pagina">Marketing</a> 
                    <a href="#" class="pie-pagina">Empresas</a>
                    <a href="#" class="pie-pagina">Desarrolladores</a>
                    <a href="#" class="pie-pagina">Directorio</a>
                    <a href="#" class="pie-pagina">Configuración</a>
                    <a href="#" class="pie-pagina">2018 Twitter</a>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.3.1.js"></script>
   <script src="js/controlador.js"></script> 
</body>
</html>