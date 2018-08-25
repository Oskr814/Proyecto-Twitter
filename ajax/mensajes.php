<?php
    if(isset($_POST["destinatario"])){
        $usuario;
        $respuesta = array();
        $archivo = fopen("../data/usuarios.json", "r");
        while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
            if($registro["usuario"]==$_POST["destinatario"]){
                $usuario = true;
                break;
            }else
                $usuario = false;
        }
        fclose($archivo);
        if(!file_exists("../data/mensajes/"+$_POST["destinatario"]+"mensajes.json")){
            $archivo = fopen("../data/mensajes/"+$_POST["destinatario"]+"mensajes.json", "w");
            fclose($archivo);
        }
        $archivo = fopen("../data/mensajes/"+$_POST["destinatario"]+"mensajes.json", "a+");
        fwrite($archivo, json_encode($_POST));
        fclose($archivo);
        $respuesta["mensaje"] = "Exito!";
        $respuesta["codigo"] = "1";
        echo json_encode($respuesta);
    }else
        $respuesta["mensaje"] = "Erro!";
        $respuesta["codigo"] = "0";


?>