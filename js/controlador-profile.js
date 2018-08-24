$(document).ready(function(){

$.ajax({
    url: "ajax/cargar-tweets.php",
    method: "POST",
    dataType: "json",
    success: function(respuesta){
        var fecha = new Date();
        var contador = 0;
        for (let i = 0; i < respuesta.length; i++) {
            contador++;
         $('#tweets').prepend(
          `
                <div style="float:left">
                <a href=""><img src="img/profile.jpg" class="rounded-circle" id="navbar-img-perfil-1"></a>
                </div>

                <div id="texto3"><p><b>${respuesta[i].nombre}</b></p></div>
                <div id="texto3" style="color:#657786"><p>${respuesta[i].usuario}</p></div> 
                <div id="texto3" style="color:#657786"><p>${fecha.getDate()}</p></div>
                <br>
                <div id="tweet"><p>${respuesta[i].tweet}</p></div>

                <div style="margin-left:80px">
                    <img src="img/tweet/comentar.png" style="margin-right:55px">
                    <img src="img/tweet/compartir.png" style="margin-right:55px">
                    <img src="img/tweet/like.png" style="margin-right:55px">
                    <img src="img/tweet/estadisticas.png">
                </div>
                <hr>`         
        );             
    }

    $('#contador-tweets').append(
        `
        ${contador}
        `
    );

    },
    error: function(error) {
        console.log(error);
    }
});


});