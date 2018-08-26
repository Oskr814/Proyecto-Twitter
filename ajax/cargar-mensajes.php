<?php
    session_start();
    $mensajes = array();
    if(isset($_SESSION["usuario"])){
        if(file_exists("../data/mensajes/@".$_SESSION["usuario"]."mensajes.json")){
            $archivo = fopen("../data/mensajes/@".$_SESSION["usuario"]."mensajes.json", "r");
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                $mensajes[] = $registro;
            }
            fclose($archivo);
            echo json_encode($mensajes);
        }else{
            $mensajes["codigo"] = 0;
            $mensajes["mensaje"] = "No hay mensajes que mostrar";
            echo json_encode($mensajes);
        }
            
    }else{
        $mensajes["codigo"] = 0;
        $mensajes["mensaje"] = "Erro en la sesion";
        echo json_encode($mensajes);
    }



?>