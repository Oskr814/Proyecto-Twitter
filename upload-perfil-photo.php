<?php
    session_start();
    $carpeta = "data/porfile-photos";
    opendir($carpeta);
    $destino = $carpeta."/".$_SESSION["usuario"]."jpg";
    copy($_FILES['foto-perfil']['tmp_name'], $destino);
    header("Location: ../home.php");
?>