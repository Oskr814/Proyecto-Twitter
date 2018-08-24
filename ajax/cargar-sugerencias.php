<?php
    session_start();
    $usuarios = array();
    $following = array();
    if(isset($_SESSION["usuario"])){
        if($_POST["codigo"] == 0){
            if(file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
                $followingfile = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "r");
                while($linea = fgets($followingfile)){
                    $registro = json_decode($linea, true);
                    $following[] = $registro;
                }
                fclose($followingfile);
                $archivo = fopen("../data/usuarios.json", "r");
                while($linea = fgets($archivo)){
                    $registro = json_decode($linea, true);
                    if($registro["usuario"] != $_SESSION["usuario"]){
                        $excluir;
                        for($i = 0 ; $i<count($following) ; $i++){
                            if("@".$registro["usuario"] == $following[$i]["usuario"]){
                                $excluir = 1;
                            }
                        }
                        if($excluir != 1){
                            $usuarios[] = $registro;
                        }
                        $excluir = 0;
                    }
                    
                    
                }
                
                fclose($archivo);
                echo json_encode($usuarios);
            }else{ //Si no existe el archivo
                $archivo = fopen("../data/usuarios.json", "r");
                while($linea = fgets($archivo)){
                    $registro = json_decode($linea, true);
                    if($registro["usuario"] != $_SESSION["usuario"]){
                        $usuarios[] = $registro;
                    }
                }
                
                fclose($archivo);
                echo json_encode($usuarios);    
            }
            
        }else{ //Peticion foto usuario
                if(file_exists("../data/following/@".$_SESSION["usuario"]."following.json")){
                    $followingfile = fopen("../data/following/@".$_SESSION["usuario"]."following.json", "r");
                    while($linea = fgets($followingfile)){
                        $registro = json_decode($linea, true);
                        $following[] = $registro;
                    }
                    fclose($followingfile);
                    $archivo = fopen("../data/porfile-photos/porfile-photos.json", "r");
                    while($linea = fgets($archivo)){
                        $registro = json_decode($linea, true);
                        if($registro["usuario"] != $_SESSION["usuario"]){
                            $excluir;
                            for($i = 0 ; $i<count($following) ; $i++){
                                if("@".$registro["usuario"] == $following[$i]["usuario"]){
                                    $excluir = 1;
                                }
                            }
                            if($excluir != 1){
                                $usuarios[] = $registro;
                            }
                            $excluir = 0;
                        }
                        
                        
                    }
                    
                fclose($archivo);
                echo json_encode($usuarios);
                
        
                }else{ //Si no existe el archivo
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
            
            }
    }
?>