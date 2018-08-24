<?php
    session_start();
    $tweets = array();
    if(isset($_SESSION["usuario"])){
        $archivo = fopen("../data/tweets/@".$_SESSION["usuario"]."tweets.json", "r");
        while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
            $tweets[] = $registro;
        }
        fclose($archivo);
        echo json_encode($tweets);
    }

?>