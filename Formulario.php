<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter. Es lo que está pasando.</title>
    <link rel="icon" href="img/Index/icono.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/FontAwesome/css/all.min.css">
    <link rel="stylesheet" href="css/custom-formulario.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="index.html">
                <h2 class="nav-inicio"><i class="fas fa-chevron-left"></i> Regresar</h2>
           
        </a>
        <h2 class="nav-titulo">Twitter <img src="img/Formulario/logo-img.png" width="30" height="30" alt=""> </h2>
    </nav>
    <div class="container">
        <div class="col-12 col-sm-12">
            <div class="formulario">
                <img class="imagen-formulario" src="img/Formulario/img1.png">
                <h2 class="titulo-formulario">Crear tu cuenta</h2>
                <div id="info-usuario" class="">
                    <input id="name" type="text" placeholder="Nombre completo" onkeyup="validarNombre(this.value);"><i id="img-valid-name" class="fas fa-check-circle hidden"></i><i id="img-invalid-name"class="fas fa-times-circle hidden"></i><br><i id="invalid-name" class="invalid hidden">Este campo no puede estar vacío</i>
                    <input id="user-name" type="text" placeholder="Nombre de usuario" onkeyup="validarNombreUsuario(this.value);"><i id="img-valid-user-name" class="fas fa-check-circle hidden"></i><i id="img-invalid-user-name"class="fas fa-times-circle hidden"></i><br><i id="invalid-user-name" class="invalid hidden">Este campo no puede estar vacío</i>
                    <input id = "email" type="text" placeholder="Teléfono o Correo" onkeyup="validarEmail(this.value);" value=""><i id="img-valid-mail" class="fas fa-check-circle hidden"></i><i id="img-invalid-mail"class="fas fa-times-circle hidden"></i><br><i id="invalid-email" class="invalid hidden">Teléfono o email invalido</i>
                    <input id="password1" type="password" placeholder="Nueva contraseña" onkeyup="capturarContraseña(this.value);"><i id="img-valid-password" class="fas fa-check-circle hidden"></i><i id="img-invalid-password"class="fas fa-times-circle hidden"></i>
                    <input id="password2"  type="password" placeholder="Confirmar contraseña" onkeyup="validarContraseña(this.value);"><br><i id="invalid-password" class="invalid hidden">Las contraseñas no coinciden</i>
                    <input id="date" placeholder="Fecha nacimiento" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"><i id="img-valid-date" class="fas fa-check-circle hidden"></i><i id="img-invalid-date"class="fas fa-times-circle hidden"></i><br><br>
                    <a href="#">Ya tienes cuenta?</a><br>
                    <button id="btn-registro-usuario" class="btn btn-light btn-registro" type="button">Siguiente</button><br>
                </div>
            </div>
            <div id="respuesta"></div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/controlador-formulario.js"></script>
</body>
</html>