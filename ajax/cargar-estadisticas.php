<?php
    session_start();
    $numFollow = 0;
    $numTweets = 0;
    $numSeg = 0;
    $usuarios = array();
    $estadisticas = array();
    if(isset($_SESSION["usuario"])){
        if(file_exists("../data/tweets/@".$_SESSION["usuario"]."tweets.json")){
            $archivo = fopen("../data/tweets/@".$_SESSION["usuario"]."tweets.json", "r");
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                if($registro["usuario"] == "@".$_SESSION["usuario"]){
                    $numTweets++;
                }
                
            }
        }

        if(file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
            $archivo = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "r");
            while($linea = fgets($archivo)){
                $numFollow++;
            }
        }
        
        if(file_exists("../data/usuarios.json")){
            $archivo = fopen("../data/usuarios.json", "r");
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                $usuarios[] = $registro;
            }
            fclose($archivo);
            for($i=0 ; $i<count($usuarios) ; $i++){ 
                if(file_exists("../data/following/@".$usuarios[$i]["usuario"]."following.json")){
                    $archivo = fopen("../data/following/@".$usuarios[$i]["usuario"]."following.json", "r");
                    while($linea = fgets($archivo)){
                        $registro = json_decode($linea, true);
                        if('@'.$_SESSION["usuario"] == $registro["usuario"]){
                            $numSeg++;
                        }
                    }
                }
            }

        }



        $estadisticas["numTweets"] = $numTweets;
        $estadisticas["numFollow"] = $numFollow;
        $estadisticas["numSeg"] = $numSeg;
        $estadisticas["mensaje"] = "Exito";
        echo json_encode($estadisticas);
    }else  
        echo '{"mensaje":"Error"}';

?>