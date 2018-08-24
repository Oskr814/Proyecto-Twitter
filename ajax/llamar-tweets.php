<?php
    session_start();
    $dir = '../data/tweets';
    $tweets = array();
    $files = scandir($dir);
    $arroba = '@';
    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            if(stripos($path, $arroba)){
                $archivo = fopen($path, "r");
                 while($linea = fgets($archivo)){
                    $registro = json_decode($linea, true);
                    $tweets[] = $registro;
            }
            fclose($archivo);
            
           }
        }
    }  echo json_encode($tweets);  
?>