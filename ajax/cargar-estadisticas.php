<?php
    session_start();
    $numFollow = 0;
    $numTweets = 0;
    $estadisticas = array();
    if(isset($_SESSION["usuario"])){
        if(file_exists("../data/tweets/@".$_SESSION["usuario"]."tweets.json")){
            $archivo = fopen("../data/tweets/@".$_SESSION["usuario"]."tweets.json", "r");
            while($linea = fgets($archivo)){
                $numTweets++;
            }
        }

        if(file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
            $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "r");
            while($linea = fgets($archivo)){
                $numFollow++;
            }
        }

        $estadisticas["numTweets"] = $numTweets;
        $estadisticas["numFollow"] = $numFollow;
        $estadisticas["mensaje"] = "Exito";
        echo json_encode($estadisticas);
    }else  
        echo '{"mensaje":"Error"}';

?>