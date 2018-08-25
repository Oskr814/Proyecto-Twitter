<?php
    session_start();
    $seguidores = array();
    $respuesta = array();
    if(isset($_SESSION["usuario"])){
        if(!file_exists("../data/followers/".$_POST["followed"].".json")){
            $archivo = fopen("../data/followers/".$_POST["followed"].".json","w");
            fclose($archivo);
        }
        $seguidores["nombre"] = $_POST["nombre"];
        $seguidores["usuario"] = $_POST["usuario"];
        $seguidores["imgUsuario"] = $_POST["imgUsuario"];
        $archivo = fopen("../data/followers/".$_POST["followed"].".json","a+");
        fwrite($archivo, json_encode($seguidores));
        fclose($archivo);
        $respuesta["mensaje"] = "Exito!";
        $respuesta["codigo"] = "1";
        echo json_encode($respuesta);
    }else{
        $respuesta["mensaje"] = "Error!";
        $respuesta["codigo"] = "0";
        echo json_encode($respuesta);
    }

        
        
    


?>