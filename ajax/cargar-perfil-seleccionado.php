<?php
    session_start();
    $imgUsuario;
    $respuesta = array();
    if(isset($_POST["usuario"])){
        $archivo = fopen("../data/porfile-photos/porfile-photos.json", "r");
        while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
            if("@".$registro["usuario"] == $_POST["usuario"]){
                $imgUsuario = $registro["urlFotoPerfil"];
            }else{
                $imgUsuario = "data/porfile-photos/default-porfile.jpg";
            }
        }
        fclose($archivo);
        $_SESSION["usuarioSeleccionado"] = $_POST["usuario"];
        $_SESSION["nombreUsuarioSeleccionado"] = $_POST["nombre"];
        $_SESSION["imgUsuario"] = $_POST["imgUsuario"];
        $respuesta["mensaje"] = "Exito";
        $respuesta["codigo"] = 1;
        echo json_encode($respuesta);
    }else{
        $respuesta["mensaje"] = "Error";
        $respuesta["codigo"] = 0;
        echo json_encode($respuesta);
    }



?>