<?php
    session_start();
    $followers = array();
    if(isset($_SESSION["usuario"])){
        if(file_exists("../data/followers/@".$_SESSION["usuario"].".json")){
            $archivo = fopen("../data/followers/@".$_SESSION["usuario"].".json", "r");
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                $followers[] = $registro;
            }
            fclose($archivo);
            echo json_encode($followers);
        }else{
            $followers["mensaje"] = "No tienes ningun seguidor aun"; 
            echo json_encode($followers);
        }
    }else{
        $followers["mensaje"] = "Error con la sesion";
        echo json_encode($followers);
    }



?>