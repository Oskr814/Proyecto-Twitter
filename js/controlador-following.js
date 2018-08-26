$(document).ready(function(){
    $.ajax({
        url: "ajax/cargar-following.php",
        method: "POST",
        dataType:"json",
        success: function(respuesta){
            if(respuesta["mensaje"]){
                $("#following").append('<b>'+respuesta["mensaje"]+'</b>');
            }else{
                for(var i = respuesta.length-1 ; i>=0 ; i--){
                    $("#following").prepend(`
                    <div id="div-following">
                    <a id="link-following">${i+1}. <img class="inline rounded-circle following-img-perfil" src="${respuesta[i].urlFotoPerfil}" id="img-following${i+1}">
                        <p class="inline" id="name-following${i+1}"><b>${respuesta[i].nombre}</b></p>
                        <p class="inline" id="user-following${i+1}">${respuesta[i].usuario}</p> 
                        <br> 
                    </a>
                    </div>
                                             
                    `);
                }
            }
           
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
            switch(usuarioSeleccionado){  //Estatico, primera version
                case "name-following1":
                case "user-following1":
                case "img-following1":
                    parametros = "nombre="+$("#name-following1").text()+"&"
                                +"usuario="+$("#user-following1").text()+"&"
                                +"imgUsuario="+$("#img-following1").attr("src"); 
                    break;
                case "name-following2":
                case "user-following2":
                case "img-following2":
                    parametros = "nombre="+$("#name-following2").text()+"&"
                                +"usuario="+$("#user-following2").text()+"&"
                                +"imgUsuario="+$("#im-following2").attr("src");
                    break;
                case "name-following3":
                case "user-following3":
                case "img-following3":
                    parametros = "nombre="+$("#name-following3").text()+"&"
                                +"usuario="+$("#user-following3").text()+"&"
                                +"imgUsuario="+$("#im-following3").attr("src");
                    break;
                case "name-following4":
                case "user-following4":
                case "img-following4":
                    parametros = "nombre="+$("#name-following4").text()+"&"
                                +"usuario="+$("#user-following4").text()+"&"
                                +"imgUsuario="+$("#im-following4").attr("src");
                    break;
                case "name-following5":
                case "user-following5":
                case "img-following5":
                    parametros = "nombre="+$("#name-following5").text()+"&"
                                +"usuario="+$("#user-following5").text()+"&"
                                +"imgUsuario="+$("#im-following5").attr("src");
                    break;
                case "name-following6":
                case "user-following6":
                case "img-following6":
                    parametros = "nombre="+$("#name-following6").text()+"&"
                                +"usuario="+$("#user-following6").text()+"&"
                                +"imgUsuario="+$("#im-following6").attr("src");
                    break;
                case "name-following7":
                case "user-following7":
                case "img-following7":
                    parametros = "nombre="+$("#name-following7").text()+"&"
                                +"usuario="+$("#user-following7").text()+"&"
                                +"imgUsuario="+$("#im-following7").attr("src");
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
});