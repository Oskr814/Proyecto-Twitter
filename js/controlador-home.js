$(document).ready(function(){
    $(window).click(function(e) {
        
        if(e.target.id == "post-tweet" || e.target.id == "post-photo" ){
            $("#post-tweet-hashtag").attr("style", "");
            $("#btn-post-tweet-twittear").attr("style", "");
            $("#subir-img").attr("style", "");
        }
                
    });
    var urlImagen="";
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
                    
                    $("#respuesta").html(urlImagen);
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
                var postSinImagen;
                if(respuesta.urlImagen == ""){
                    postSinImagen = "display:none";
                }else
                    postSinImagen = "";
                $("#timeline").prepend(`
                <div class="timeline-post">
                    <img class="rounded-circle user-porfile-timeline" src="${respuesta.imgUsuario}" alt=""><b>${respuesta.nombre}</b><span class="sug-user">${respuesta.usuario}</span><br>
                    <p class="timeline-text" id="text-post1">${respuesta.tweet}</p>
                    <div id="img-post1">
                    <img class="timeline-img" src="${respuesta.urlImagen}" alt="" style="${postSinImagen}">
                    </div>
                    <div id="" class="feedback"><i class="far fa-comment"></i></div>
                    <div id="" class="feedback"><i class="fas fa-retweet"></i></div>
                    <div id="" class="feedback"><i class="far fa-heart"></i></div>
                    <div id="" class="feedback"><i class="far fa-envelope"></i></div>
                </div>
              
                    
              
                `);;
                urlImagen = "";
            },
            error: function(error){
                console.log(error);
            }
        });
        $("#post-tweet-hashtag").attr("style", "display:none;");
        $("#btn-post-tweet-twittear").attr("style", "display:none;");
        $("#subir-img").attr("style", "display:none;");
        $("#post-tweet").val("");
        $("#post-photo").replaceWith($("#post-photo").val('').clone(true));
        
    });
    //Peticion ajax para cargar tweets usuario al momento de que el documento esta listo
    $.ajax({
        url: "ajax/cargar-tweets.php",
        method: "POST",
        dataType: "json",
        success: function(respuesta){
            var postSinImagen;
            for(var i = respuesta.length-1 ; i>=0 ; i--){
                if(respuesta[i].urlImagen == ""){
                    postSinImagen = "display:none";
                }else
                    postSinImagen = "";
                $("#timeline").append(`
                        <div class="timeline-post">
                            <img class="rounded-circle user-porfile-timeline" src="${respuesta[i].imgUsuario}" alt=""><b>${respuesta[i].nombre}</b><span class="sug-user">${respuesta[i].usuario}</span><br>
                            <p class="timeline-text" id="text-post1">${respuesta[i].tweet}</p>
                            <div id="img-post1">
                            <img class="timeline-img" src="${respuesta[i].urlImagen}" alt="" style="${postSinImagen}">
                            </div>
                            <div id="" class="feedback"><i class="far fa-comment"></i></div>
                            <div id="" class="feedback"><i class="fas fa-retweet"></i></div>
                            <div id="" class="feedback"><i class="far fa-heart"></i></div>
                            <div id="" class="feedback"><i class="far fa-envelope"></i></div>
                        </div>
                        
             
              
                `);
            }
        },
        error: function(error){
            console.log(error);
        }
    });

    //Peticion ajax para cargar sugerencias de usuarios a quien seguir
    $.ajax({
        url: "ajax/cargar-sugerencias.php",
        method: "POST",
        dataType: "json",
        data: "codigo=0",
        success: function(respuestaPeticion1){
            console.log(respuestaPeticion1);
          $.ajax({
                url: "ajax/cargar-sugerencias.php",
                method: "POST",
                dataType: "json",
                data: "codigo=1",
                success: function(respuesta){
                    console.log(respuesta);
                    for(var i = 0 ; i<3 ; i++){
                        var x = Math.floor((Math.random() * respuesta.length));
                        while(x==y){
                            x = Math.floor((Math.random() * respuesta.length));
                        }
                        $("#sugerencias").append(`
                            <div class="sugerencias">
                                <img id="img-user-sug${i+1}" class="rounded-circle img-sug" src="${respuesta[x].urlFotoPerfil}" alt=""><b id="name-sug${i+1}">${respuestaPeticion1[x].nombre}</b><span class="sug-user" id="user-name-sug${i+1}">@${respuesta[x].usuario}</span><br>
                                <button id="btn-seguir${i+1}" class="btn btn-sugerencias" type="button">Seguir</button>
                            </div>
                        `);
                        var y = x;
                    }
                },
                error: function(error){
                    console.log(error);
                }
            });
            
        },
        error: function(error){
            console.log(error);
        }
    });

    $("#post-tweet").click(function(){
        if($("#post-tweet").val() == "" ){
            $("#btn-post-tweet-twittear").prop("disabled", true);
         }
    });

    $("#post-tweet").keyup(function(){
        if($("#post-tweet").val() != "" ){
            $("#btn-post-tweet-twittear").prop("disabled", false);
         }else
            $("#btn-post-tweet-twittear").prop("disabled", true)
    
    });

    /*Agregar a lista siguiendo*/
    $(window).click(function(e) {
        var btn = e.target.id;
        var parametros;
        switch(btn){
            case "btn-seguir1":
                parametros = "nombre="+$("#name-sug1").text()+"&"
                            +"usuario="+$("#user-name-sug1").text()+"&"
                            +"urlFotoPerfil="+$("#img-user-sug1").attr("src");
                break;
            case "btn-seguir2":
                parametros = "nombre="+$("#name-sug2").text()+"&"
                            +"usuario="+$("#user-name-sug2").text()+"&"
                            +"urlFotoPerfil="+$("#img-user-sug2").attr("src");
                break;
            case "btn-seguir3":
                parametros = "nombre="+$("#name-sug3").text()+"&"
                            +"usuario="+$("#user-name-sug3").text()+"&"
                            +"urlFotoPerfil="+$("#img-user-sug3").attr("src");
                break;
            default:
                break;
        }
        
        if(parametros!=null){
            $.ajax({
                url: "ajax/following.php",
                method: "POST",
                dataType: "json",
                data: parametros,
                success: function(respuesta){
                    $("#"+btn).html(respuesta.mensaje);
                    $("#numFollow").html(respuesta.numFollow);
                },
                error: function(error){
                    console.log(error);
                }
            });
        }
        
                
    });

    $.ajax({
        url: "ajax/cargar-estadisticas.php",
        method: "POST",
        dataType: "json",
        success: function(respuesta){
            $("#numTweets").html(respuesta.numTweets);
            $("#numFollow").html(respuesta.numFollow);
            $("#numSeg").html(Math.floor((Math.random() * 500)));
        },
        error: function(error){
            console.log(error);
        }
    });
    
});