<?php
    class imagenes{
        public function buscarImagenPortada(){
            $archivo = fopen("data/portada-photos/portada-photos.json","r");
            $registro;
            $codigoEjecucion = 1;
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                if($registro["usuario"]==$_SESSION["usuario"]){
                    $codigoEjecucion = 0;
                    break;
                }
            }
            if($codigoEjecucion==0){
            return $registro["urlFotoPortada"];
            }else
            return "data/portada-photos/default-portada.jpg";
        }

        public function buscarImagenPerfil(){
            $archivo = fopen("data/porfile-photos/porfile-photos.json","r");
            $registro;
            $codigoEjecucion = 1;
            while($linea = fgets($archivo)){
                $registro = json_decode($linea, true);
                if($registro["usuario"]==$_SESSION["usuario"]){
                    $codigoEjecucion = 0;
                    break;
                }
            }
            if($codigoEjecucion==0){
                return $registro["urlFotoPerfil"];
                }else
                return "data/porfile-photos/default-porfile.jpg";
        }
    }
    

?>