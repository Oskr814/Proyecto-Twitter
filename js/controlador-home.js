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
                $("#post-tweet-img").attr('style',"font-size:20px; color: #1da1f2;");
                if (datos.codigo==1) {
                    urlImagen = datos.ruta;
                }
            },
            error: function(error){
                console.log(error);
            }
        });
    });
    //Guardar tweet
    $("#btn-post-tweet-twittear").click(function(){
        var textoTweet = $("#post-tweet").val();
        var textoTweetEmoji = "";
        if(textoTweet.includes(":)")){
            textoTweetEmoji = textoTweet.replace(":)", "<img src='img/emojis/emoji1.png'>");
        }else if(textoTweet.includes("XD")){
            textoTweetEmoji = textoTweet.replace("XD", "<img src='img/emojis/emoji2.png'>");
        }else if(textoTweet.includes(":P")){
            textoTweetEmoji = textoTweet.replace(":P", "<img src='img/emojis/emoji3.png'>");
        }else if(textoTweet.includes(":(")){
            textoTweetEmoji = textoTweet.replace(":(", "<img src='img/emojis/emoji4.png'>");
        }else if(textoTweet.includes(":*")){
            textoTweetEmoji = textoTweet.replace(":*", "<img src='img/emojis/emoji5.png'>");
        }else if(textoTweet.includes("X_X")){
            textoTweetEmoji = textoTweet.replace("X_X", "<img src='img/emojis/emoji6.png'>");
        }else if(textoTweet.includes("|**|")){
            textoTweetEmoji = textoTweet.replace("|**|", "<img src='img/emojis/emoji7.png'>");
        }else if(textoTweet.includes(":G")){ 
        textoTweetEmoji = textoTweet.replace(":G", "<img src='img/emojis/emoji8.png'>");
        }else
            textoTweetEmoji = textoTweet;

        var parametros = "nombre="+$("#nombre-home").text()+"&"
                        +"usuario="+$("#usuario-home").text()+"&"
                        +"tweet="+textoTweetEmoji+"&"
                        +"hashtag="+$("#post-tweet-hashtag").val()+"&"
                        +"urlImagen="+urlImagen+"&"
                        +"imgUsuario="+$("#img-perfil-2").attr("src");
        $.ajax({
            url: "ajax/guardar-tweet.php",
            type: "POST",
            dataType:"json",
            data: parametros, 
            success: function(respuesta){  
                $("#respuesta").html("");
                var postSinImagen;
                if(respuesta.urlImagen == ""){
                    postSinImagen = "display:none";
                }else{
                    postSinImagen = ""; 
                }
                $("#timeline").prepend(`
                <div class="timeline-post">
                    <img class="rounded-circle user-porfile-timeline" src="${respuesta.imgUsuario}" alt=""><b>${respuesta.nombre}</b><span class="sug-user">${respuesta.usuario}</span><br>
                    <p class="timeline-text" id="text-post1">${respuesta.tweet}</p>
                    <a id="hashtag" class="timeline-text">${respuesta.hashtag}</a>
                    <div id="img-post1">
                    <img class="timeline-img" src="${respuesta.urlImagen}" alt="" style="${postSinImagen}">
                    </div>
                    <div id="" class="feedback"><i class="far fa-comment"></i></div>
                    <div id="" class="feedback"><i class="fas fa-retweet"></i></div>
                    <div id="" class="feedback"><i class="far fa-heart"></i></div>
                    <div id="" class="feedback"><i class="far fa-envelope"></i></div>
                </div>
                `);
                urlImagen = "";
                $.ajax({
                    url: "ajax/cargar-estadisticas.php",
                    method: "POST",
                    dataType: "json",
                    success: function(respuesta){
                        $("#numTweets").html(respuesta.numTweets);
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
        $("#post-tweet-hashtag").attr("style", "display:none;");
        $("#btn-post-tweet-twittear").attr("style", "display:none;");
        $("#subir-img").attr("style", "display:none;");
        $("#post-tweet").val("");
        $("#post-tweet-hashtag").val("");
        $("#post-photo").replaceWith($("#post-photo").val('').clone(true));
        $("#post-tweet-img").attr('');
        
    });
    //Peticion ajax para cargar tweets usuario al momento de que el documento esta listo
    $.ajax({
        url: "ajax/cargar-tweets.php",
        method: "POST",
        dataType: "json",
        success: function(respuesta){
            if(respuesta["codigo"] == 0){
                $("#respuesta").html(respuesta["mensaje"]);
            }else{
                $("#respuesta").html("");
            }
                
            var postSinImagen;
                for(var i = respuesta.length-1 ; i>=0 ; i--){
                    if(respuesta[i].urlImagen == ""){
                        postSinImagen = "display:none";
                    }else{
                        postSinImagen = "";
                    }
                    
                    $("#timeline").append(`
                            <div class="timeline-post">
                                <img class="rounded-circle user-porfile-timeline" src="${respuesta[i].imgUsuario}" alt=""><b>${respuesta[i].nombre}</b><span class="sug-user">${respuesta[i].usuario}</span><br>
                                <p class="timeline-text" id="text-post1">${respuesta[i].tweet}</p>
                                <a id="hashtag" class="timeline-text">${respuesta[i].hashtag}</a>
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
          $.ajax({
                url: "ajax/cargar-sugerencias.php",
                method: "POST",
                dataType: "json",
                data: "codigo=1",
                success: function(respuesta){
                    if(respuesta.length==0){
                       $("#sugerencias").html("No hay sugerencias que mostrar");
                    }else if(respuesta.length<3){
                        for(var i=0 ; i<respuesta.length; i++){
                            $("#sugerencias").append(`
                            <a class="sug-link" id="sug-link${i+1}">
                            <div class="sugerencias">
                                <img id="img-user-sug${i+1}" class="rounded-circle img-sug" src="${respuesta[i].urlFotoPerfil}" alt=""><b id="name-sug${i+1}" class="name-sug">${respuestaPeticion1[i].nombre}</b><span class="sug-user" id="user-name-sug${i+1}">@${respuesta[i].usuario}</span><br>
                                <button id="btn-seguir${i+1}" class="btn btn-sugerencias" type="button">Seguir</button>
                            </div>
                            </a>
                        `); 
                        }
                    }else{
                        for(var i = 0 ; i<3 ; i++){
                            var x = Math.floor((Math.random() * respuesta.length));
                            while(x==y){
                                x = Math.floor((Math.random() * respuesta.length));
                            }
                            $("#sugerencias").append(`
                                <div class="sugerencias">
                                    <a class="sug-link" id="sug-link${i+1}">
                                        <img id="img-user-sug${i+1}" class="rounded-circle img-sug" src="${respuesta[x].urlFotoPerfil}" alt=""><b id="name-sug${i+1}" class="name-sug">${respuestaPeticion1[x].nombre}</b><span class="sug-user" id="user-name-sug${i+1}">@${respuesta[x].usuario}</span><br>
                                        <button id="btn-seguir${i+1}" class="btn btn-sugerencias" type="button">Seguir</button>
                                    </a>
                                </div>
                            `);
                            var y = x;
                        }
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

    //Agregar a lista siguiendo
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
                    //Crear lista seguidores
                    var parametros = "nombre="+$("#nombre-home").text()+"&"
                                    +"usuario="+$("#usuario-home").text()+"&"
                                    +"imgUsuario="+$("#img-perfil-2").attr("src")+"&"
                                    +"followed="+respuesta.usuario;
                    $.ajax({
                        url: "ajax/followers.php",
                        dataType: "json",
                        method: "POST",
                        data: parametros,
                        success: function(respuesta){
                            console.log(respuesta);
                        },
                        error: function(error){
                            console.log(error)
                        }
                    });
                },
                error: function(error){
                    console.log(error);
                }
            });


        }
        
                
    });
    //Cargar estadisticas usuario
    $.ajax({
        url: "ajax/cargar-estadisticas.php",
        method: "POST",
        dataType: "json",
        success: function(respuesta){
            $("#numTweets").html(respuesta.numTweets);
            $("#numFollow").html(respuesta.numFollow);
            $("#numSeg").html(respuesta.numSeg);
        },
        error: function(error){
            console.log(error);
        }
    });

    //Cargar perfil usuario seleccionado
    $(window).click(function(e) {
        var usuarioSeleccionado = e.target.id;
        console.log(usuarioSeleccionado);
        var parametros = "";
        switch(usuarioSeleccionado){
            case "name-sug1":
            case "user-name-sug1":
            case "img-user-sug1":
                parametros = "nombre="+$("#name-sug1").text()+"&"
                            +"usuario="+$("#user-name-sug1").text()+"&"
                            +"imgUsuario="+$("#img-user-sug1").attr("src"); 
                break;
            case "name-sug2":
            case "user-name-sug2":
            case "img-user-sug2":
                parametros = "nombre="+$("#name-sug2").text()+"&"
                            +"usuario="+$("#user-name-sug2").text()+"&"
                            +"imgUsuario="+$("#img-user-sug2").attr("src");
                break;
            case "name-sug3":
            case "user-name-sug3":
            case "img-user-sug3":
                parametros = "nombre="+$("#name-sug3").text()+"&"
                            +"usuario="+$("#user-name-sug3").text()+"&"
                            +"imgUsuario="+$("#img-user-sug3").attr("src");
                break;
        }

        if(parametros != ""){
            $.ajax({
                url: "ajax/cargar-perfil-seleccionado.php",
                method: "POST",
                dataType: "json",
                data: parametros,
                success: function(respuesta){
                    console.log(respuesta);
                    if(respuesta.codigo == 1){
                        location.href = "perfilseleccionado.php";
                    }
                },
                error: function(error){
                    console.log(error);
                }
            });
        }
                
    });

    //Procesar busqueda
    $("#busqueda").click(function(){
        var parametro = "busqueda="+$("#input-busqueda").val();
        console.log(parametro);
        $.ajax({
            url: "ajax/cargar-busqueda.php",
            method: "POST",
            dataType: "json",
            data: parametro,
            success: function(respuesta){
                if(respuesta.codigo == 1){
                    location.href = "busqueda.php";
                }
            },
            error: function(error){
                console.log(error);
            }
        });
    });
});

