<?php
    session_start();
    $usuarios = array();
    if(isset($_SESSION["usuario"])){
        if($_POST["codigo"] == 0){
            $archivo = fopen("../data/usuarios.json", "r");
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                if($registro["usuario"] != $_SESSION["usuario"]){
                    $usuarios[] = $registro;
                }
                
            }
            fclose($archivo);
            echo json_encode($usuarios);
        }else{
            $archivo = fopen("../data/porfile-photos/porfile-photos.json", "r");
            while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
                if($registro["usuario"] != $_SESSION["usuario"]){
                    $usuarios[] = $registro;
                }
            }
            fclose($archivo);
            echo json_encode($usuarios);
        }
    }else{
        echo json_encode($usuarios);
    }
        

?>