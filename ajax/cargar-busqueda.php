<?php
    session_start();
    $respuesta = array();
    if(isset($_POST["busqueda"])){
        $archivo = fopen("../data/usuarios.json", "r");
        while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
           if($registro["usuario"] == $_POST["busqueda"] || $registro["nombre"] == $_POST["busqueda"]){
               $_SESSION["busqueda"] = $registro;
                $respuesta["codigo"] = "1";
                break;
           }
        }
        fclose($archivo);
        $archivo = fopen("../data/porfile-photos/porfile-photos.json", "r");
        while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
           if($registro["usuario"] == $_SESSION["busqueda"]["usuario"]){
               $_SESSION["busquedaImgU"] = $registro["urlFotoPerfil"];
                $respuesta["codigo"] = "1";
                break;
           }
        }
        fclose($archivo);
        echo json_encode($respuesta);
    }else{
        $respuesta["codigo"] = "0";
        echo json_encode($respuesta);
    }


?>