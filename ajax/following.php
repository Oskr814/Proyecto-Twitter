<?php
    session_start();
    $respuesta = array();
   if(isset($_POST["usuario"])){
    if(!file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
        $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "w");
    }
    $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "a+");
        fwrite($archivo, json_encode($_POST)."\n");
        fclose($archivo);
        $respuesta["mensaje"] = "Siguiendo";
        $respuesta["codigo"] = "1";
        echo json_encode($respuesta); //Satisfactorio
   }else{
        $respuesta["mensaje"] = "Error";
        $respuesta["codigo"] = "1";
        echo json_encode($respuesta); //Ocurrio un error, ver error en peticion ajax 
   }    
    
?>