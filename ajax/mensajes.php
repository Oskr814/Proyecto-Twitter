<?php
    $imgDestinatario = "";
    if(isset($_POST["destinatario"])){
        $usuario;
        $respuesta = array();
        $archivo = fopen("../data/usuarios.json", "r");
        while($linea = fgets($archivo)){
            $registro = json_decode($linea, true);
            if("@".$registro["usuario"]==$_POST["destinatario"]){
                $usuario = true;
                $fotoPerfil = fopen("../data/porfile-photos/porfile-photos.json", "r");
                while($linea = fgets($fotoPerfil)){
                    $registro = json_decode($linea, true);
                    if("@".$registro["usuario"] == $_POST["destinatario"]){
                        $imgDestinatario = $registro["urlFotoPerfil"];
                        break;
                    }
                }
                fclose($fotoPerfil);
                $nombreDestinatario = fopen("../data/usuarios.json", "r");
                while($linea = fgets($nombreDestinatario)){
                    $registro = json_decode($linea, true);
                    if("@".$registro["usuario"] == $_POST["destinatario"]){
                        $nombreDestinatario = $registro["nombre"];
                        break;
                    }
                }
                break;
            }else
                $usuario = false;
        }
        fclose($archivo);
        if($usuario){
            if(!file_exists("../data/mensajes/".$_POST["destinatario"]."mensajes.json")){
                $archivo = fopen("../data/mensajes/".$_POST["destinatario"]."mensajes.json", "w");
                fclose($archivo);
            }
            $archivo = fopen("../data/mensajes/".$_POST["destinatario"]."mensajes.json", "a+");
            $_POST["tipo"] = "recibido";
            fwrite($archivo, json_encode($_POST)."\n");
            fclose($archivo);

            if(!file_exists("../data/mensajes/".$_POST["usuarioEmisor"]."mensajes.json")){
                $archivo = fopen("../data/mensajes/".$_POST["usuarioEmisor"]."mensajes.json", "w");
                fclose($archivo);
            }
            $archivo = fopen("../data/mensajes/".$_POST["usuarioEmisor"]."mensajes.json", "a+");
            $_POST["nombreDestinatario"] = $nombreDestinatario;
            $_POST["imgDestinatario"] = $imgDestinatario;
            $_POST["tipo"] = "enviado";
            fwrite($archivo, json_encode($_POST)."\n");
            fclose($archivo);
            $_POST["mensajeRespuesta"] = "Exito!";
            $_POST["codigo"] = "1";
            echo json_encode($_POST);
        }else{
            $respuesta["mensaje"] = "Erro1!";
            $respuesta["codigo"] = "0"; 
            echo json_encode($respuesta);
        }
            
    }else{
        $respuesta["mensaje"] = "Erro2!";
        $respuesta["codigo"] = "0";
        echo json_encode($respuesta);
    }
        

?>