<?php
    session_start();
    $numFollow = 0;
    $respuesta = array();
   if(isset($_POST["usuario"])){
    if(!file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
        $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "w");
    }
    $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "a+");
        fwrite($archivo, json_encode($_POST)."\n");
        fclose($archivo);
        $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "r");
        while($linea = fgets($archivo)){
            $numFollow++;
        }
        $respuesta["numFollow"] = $numFollow;
        $respuesta["mensaje"] = "Siguiendo";
        $respuesta["codigo"] = "1";
        $respuesta["usuario"] = $_POST["usuario"];
        echo json_encode($respuesta); //Satisfactorio
   }else{
        $respuesta["mensaje"] = "Error";
        $respuesta["codigo"] = "1";
        echo json_encode($respuesta); //Ocurrio un error, ver error en peticion ajax 
   }    
    
?>