$(document).ready(function(){

    $.ajax({
        url: "ajax/llamar-tweets.php",
        type: "POST",
        dataType:'json',
        success: function(datos)
        {  var fecha = new Date();
            for(var i = datos.length-1 ; i>=0 ; i--){
                $("#tweets").prepend(`
                <div style="float:left">
                <a href=""><img src="${datos[i].urlImagen}" class="rounded-circle" id="navbar-img-perfil-1"></a>
                </div>

                <div id="texto3"><p><b>${datos[i].nombre}</b></p></div>
                <div id="texto3" style="color:#657786"><p>${datos[i].usuario}</p></div> 
                <div id="texto3" style="color:#657786"><p>Publicado el ${fecha.getDate()}/${fecha.getMonth()}//${fecha.getFullYear()} a las ${fecha.getHours()} horas</p></div>
                <br>
                <div id="tweet"><p>${datos[i].tweet}</p></div>

                <div style="margin-left:80px">
                    <img src="img/tweet/comentar.png" style="margin-right:55px">
                    <img src="img/tweet/compartir.png" style="margin-right:55px">
                    <img src="img/tweet/like.png" style="margin-right:55px">
                    <img src="img/tweet/estadisticas.png">
                </div>
                <hr>                           
                `);
            }
            
        },
        error: function(error){
            console.log(error);
        }
        
    });

});