<?php
    session_start();
    if(isset($_POST["usuario"])){
        $archivoUsuario = fopen("../data/usuarios.json", "r");
        while($linea = fgets($archivoUsuario)){
            $registroUsuario = json_decode($linea, true);
            if($registroUsuario["usuario"] == $_POST["usuario"]
                && $registroUsuario["password"] == $_POST["password"]){
                    $_SESSION["nombre"] = $registroUsuario["nombre"];
                    $_SESSION["usuario"] = $registroUsuario["usuario"];
                    echo '{"codigo":"0"}';
                    exit();
                }
        }
        echo '{"codigo":"1"}';
    }

?>