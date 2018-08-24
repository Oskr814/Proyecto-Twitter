$(document).ready(function(){
    $(window).click(function(e) {
        
        if(e.target.id == "post-tweet" || e.target.id == "post-photo" ){
            $("#post-tweet-hashtag").attr("style", "");
            $("#btn-post-tweet-twittear").attr("style", "");
            $("#subir-img").attr("style", "");
        }
                
    });
    var urlImagen;
    $("input[name='post-photo']").change(function(){
        var formData = new FormData($("#form-post-photo")[0]);
        $.ajax({
            url: "ajax/upload-post-photo.php",
            type: "POST",
            dataType:'json',
            data: formData, 
            contentType: false,
            processData: false,
            success: function(datos)
            { 
                if (datos.codigo==1) {
                    urlImagen = datos.ruta;
                }
            },
            error: function(error){
                console.log(error);
            }
        });
    });

    $("#btn-post-tweet-twittear").click(function(){
        var parametros = "nombre="+$("#nombre-home").text()+"&"
                        +"usuario="+$("#usuario-home").text()+"&"
                        +"tweet="+$("#post-tweet").val()+"&"
                        +"hashtag="+$("#post-tweet-hashtag").val()+"&"
                        +"urlImagen="+urlImagen+"&"
                        +"imgUsuario="+$("#img-perfil-2").attr("src");
        $.ajax({
            url: "ajax/guardar-tweet.php",
            type: "POST",
            dataType:"json",
            data: parametros, 
            success: function(respuesta)
            {   
                $("#timeline").prepend(`
                <div class="timeline-post">
                    <img class="rounded-circle user-porfile-timeline" src="${respuesta.imgUsuario}" alt=""><b>${respuesta.nombre}</b><span class="sug-user">${respuesta.usuario}</span><br>
                    <p class="timeline-text" id="text-post1">${respuesta.tweet}</p>
                    <div id="img-post1">
                    <img class="timeline-img" src="${respuesta.urlImagen}" alt="">
                    </div>
                </div>
                <div class="contenedor-feedback">
                    <div id="" class="feedback"><i class="far fa-comment"></i></div>
                    <div id="" class="feedback"><i class="fas fa-retweet"></i></div>
                    <div id="" class="feedback"><i class="far fa-heart"></i></div>
                    <div id="" class="feedback"><i class="far fa-envelope"></i></div>
                </div>
                `);;
            },
            error: function(error){
                console.log(error);
            }
        });
        $("#post-tweet-hashtag").attr("style", "display:none;");
        $("#btn-post-tweet-twittear").attr("style", "display:none;");
        $("#subir-img").attr("style", "display:none;");
    });
    
    $.ajax({
        url: "ajax/cargar-tweets.php",
        method: "POST",
        dataType: "json",
        success: function(respuesta){
            for(var i = respuesta.length-1 ; i>=0 ; i--){ 
                $("#timeline").append(`
                <div id="div-timeline-post">
                        <div class="timeline-post">
                            <img class="rounded-circle user-porfile-timeline" src="${respuesta[i].imgUsuario}" alt=""><b>${respuesta[i].nombre}</b><span class="sug-user">${respuesta[i].usuario}</span><br>
                            <p class="timeline-text" id="text-post1">${respuesta[i].tweet}</p>
                            <div id="img-post1">
                            <img class="timeline-img" src="${respuesta[i].urlImagen}" alt="">
                            </div>
                        </div>
                        <div class="contenedor-feedback">
                            <div id="" class="feedback"><i class="far fa-comment"></i></div>
                            <div id="" class="feedback"><i class="fas fa-retweet"></i></div>
                            <div id="" class="feedback"><i class="far fa-heart"></i></div>
                            <div id="" class="feedback"><i class="far fa-envelope"></i></div>
                        </div>
                    </div>
                </div>
                `);
            }
        },
        error: function(error){
            console.log(error);
        }
    });
});