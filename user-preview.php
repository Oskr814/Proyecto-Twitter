<?php
    echo '
    
            <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3 col-izq">
                <div>
                    <div>
                    <img id="portada" src="img/gta.jpg">
                    </div>
                    <div class="info-user">
                        <a href=""><img src="data/porfile-photos/default-profile.jpg" alt="" class="rounded-circle" id="img-perfil-2"></a>
                        <div class="nombre-usuario">
                            <b id="nombre-home">'.$_SESSION["nombre"].'</b><br>
                            <a href="#" id="usuario-home" style="font-size:14px;">@'.$_SESSION["usuario"].'</a>
                        </div>
                        
                        <ul id="user-porfile-preview">
                        <li>
                            Tweets
                            <ul><li>#</li></ul>
                        </li>
                        <li>
                            Siguiendo
                            <ul><li>#</li></ul>
                        </li>
                        <li>
                            Seguidores
                            <ul><li>#</li></ul>
                        </li>
                        </ul>
                    </div>
                </div>
                <div id="tendencias">
                <b>Tendecias para tí</b><br>
                <span class="tendecias">#Tendencia</span>
                </div>
            </div>';
?>