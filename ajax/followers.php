<?php
    session_start();
    $seguidores = array();
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


?>