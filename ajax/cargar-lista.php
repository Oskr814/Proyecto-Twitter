<?php
    session_start();
    $listas = array();
    if(isset($_SESSION["usuario"])){
        if(file_exists("../data/listas/@".$_SESSION["usuario"]."listas.json")){
            $archivo = fopen("../data/listas/@".$_SESSION["usuario"]."listas.json", "r");
            while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
            $listas[] = $registro;
            }
            fclose($archivo);
            echo json_encode($listas);
        }else{
            $listas["codigo"] = 0; //No hay tweets que mostrar
            echo json_encode($listas);
        }
        
    }

?>