<?php
    session_start();
    $following = array();
    if(isset($_SESSION["usuario"])){
        if(file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
            $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "r");
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                $following[] = $registro;
            }
            fclose($archivo);
            echo json_encode($following);
        }else{
            $followers["mensaje"] = "No Sigues a nadie aun"; 
            echo json_encode($followers);
        }
    }else{
        $followers["mensaje"] = "Error con la sesion";
        echo json_encode($followers);
    }



?>