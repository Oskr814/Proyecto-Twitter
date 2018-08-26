<?php
    session_start();
    $tweets = array();
    if(isset($_SESSION["usuarioSeleccionado"])){
        if(file_exists("../data/tweets/@".$_SESSION["usuarioSeleccionado"]."tweets.json")){
            
            $archivo = fopen("../data/tweets/@".$_SESSION["usuarioSeleccionado"]."tweets.json", "r");
            while($linea = fgets($archivo)){
                $registroArchivoSession = json_decode($linea, true);
                $tweets[] = $registroArchivoSession;
            }
            fclose($archivo);
            
        echo json_encode($tweets);
    }else{
        $tweets["codigo"] = 0; //No hay tweets que mostrar
        $tweets["mensaje"] = "Tu cronologia se encuentra vacía. Sigue a las personas y a los temas que te interesan para ver sus tweets aqui";
        echo json_encode($tweets);
    }
    

}else
    echo '{"codigo":"0"}';

?>