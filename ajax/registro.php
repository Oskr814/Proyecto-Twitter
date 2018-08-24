<?php
    session_start();
    $respuesta = array();
    $valido = array();
    if(isset($_POST["nombre"])){
        $archivoUsuario = fopen("../data/usuarios.json", "r");
        while($linea = fgets($archivoUsuario)){
            $registro = json_decode($linea, true);
            if($registro["usuario"] == $_POST["usuario"]){ 
                $valido["usuario"] = 0;
                break;
            }else
            $valido["usuario"] = 1;         
        }
        $archivoEmail = fopen("../data/usuarios.json", "r");
        while($linea = fgets($archivoEmail)){
            $registro = json_decode($linea, true);
            if($registro["email"] == $_POST["email"]){ 
                $valido["email"] = 0;
                break;
            }else
                $valido["email"] = 1;        
        }

        if($valido["usuario"] == 1 && $valido["email"] == 1){
            $archivoUsuarios = fopen("../data/usuarios.json", "a+");
            fwrite($archivoUsuarios, json_encode($_POST)."\n");
            fclose($archivoUsuarios);
            $respuesta["codigoRespuesta"] = 0;
            $_SESSION["nombre"] = $_POST["nombre"];
            $_SESSION["usuario"] = $_POST["usuario"]; 
            
        }else if($valido["usuario"] == 0 && $valido["email"] == 0){
            $respuesta["mensajeUsuario"] = "El nombre de usuario ya existe";
            $respuesta["mensajeEmail"] = "El correo de usuario ya existe";
            $respuesta["codigoRespuesta"] = 1;
        }else if($valido["usuario"] == 0){
            $respuesta["mensajeUsuario"] = "El nombre de usuario ya existe.";
            $respuesta["codigoRespuesta"] = 1;
        }else if($valido["email"] == 0){
            $respuesta["mensajeEmail"] = "El correo de usuario ya existe.";
            $respuesta["codigoRespuesta"] = 1;
        }

        echo json_encode($respuesta);    
    }
    

    




?>