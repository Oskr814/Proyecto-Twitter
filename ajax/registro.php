<?php
    session_start();
    
    if(isset($_POST["nombre"])){
        $archivoUsuarios = fopen("../data/usuarios.json", "a+");
        fwrite($archivoUsuarios, json_encode($_POST)."\n");
        fclose($archivoUsuarios);
        $respuesta["codigoRespuesta"] = 0;
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["usuario"] = $_POST["usuario"];
        
    }else
        $respuesta["codigoRespuesta"] = 1;
    
    echo json_encode($respuesta);

    




?>