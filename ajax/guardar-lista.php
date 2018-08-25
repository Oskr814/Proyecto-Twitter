<?php
    $respuesta = array();
    if(isset($_POST["usuario"])){
        if(!file_exists("../data/listas/".$_POST["usuario"]."listas.json")){
            $archivo = fopen("../data/listas/".$_POST["usuario"]."listas.json", "w");
        }
        $archivo = fopen("../data/listas/".$_POST["usuario"]."listas.json", "a+");
        fwrite($archivo, json_encode($_POST)."\n");
        fclose($archivo);
        $respuesta = $_POST;
        $respuesta["codigo"] = 1;
        echo json_encode($respuesta);
    }else{
        $respuesta["codigo"] = 0;
        echo json_encode($respuesta);
    }
?>