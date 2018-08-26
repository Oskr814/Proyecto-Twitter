$(document).ready(function(){
    $.ajax({
        url: "ajax/cargar-followers.php",
        method: "POST",
        dataType:"json",
        success: function(respuesta){
            if(respuesta["mensaje"]){
                $("#followers").append('<b>'+respuesta["mensaje"]+'</b>');
            }else{
                for(var i = respuesta.length-1 ; i>=0 ; i--){
                    $("#followers").prepend(`
                    <div id="div-followers">
                    <a id="link-follower">${i+1}. <img class="inline rounded-circle follower-img-perfil" src="${respuesta[i].imgUsuario}" id="img-follower${i+1}">
                        <p class="inline" id="name-follower${i+1}"><b>${respuesta[i].nombre}</b></p>
                        <p class="inline" id="user-follower${i+1}">${respuesta[i].usuario}</p> 
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
                case "name-follower1":
                case "user-follower1":
                case "img-follower1":
                    parametros = "nombre="+$("#name-follower1").text()+"&"
                                +"usuario="+$("#user-follower1").text()+"&"
                                +"imgUsuario="+$("#img-follower1").attr("src"); 
                    break;
                case "name-follower2":
                case "user-follower2":
                case "img-follower2":
                    parametros = "nombre="+$("#name-follower2").text()+"&"
                                +"usuario="+$("#user-follower2").text()+"&"
                                +"imgUsuario="+$("#im-follower2").attr("src");
                    break;
                case "name-follower3":
                case "user-follower3":
                case "img-follower3":
                    parametros = "nombre="+$("#name-follower3").text()+"&"
                                +"usuario="+$("#user-follower3").text()+"&"
                                +"imgUsuario="+$("#im-follower3").attr("src");
                    break;
                case "name-follower4":
                case "user-follower4":
                case "img-follower4":
                    parametros = "nombre="+$("#name-follower4").text()+"&"
                                +"usuario="+$("#user-follower4").text()+"&"
                                +"imgUsuario="+$("#im-follower4").attr("src");
                    break;
                case "name-follower5":
                case "user-follower5":
                case "img-follower5":
                    parametros = "nombre="+$("#name-follower5").text()+"&"
                                +"usuario="+$("#user-follower5").text()+"&"
                                +"imgUsuario="+$("#im-follower5").attr("src");
                    break;
                case "name-follower6":
                case "user-follower6":
                case "img-follower6":
                    parametros = "nombre="+$("#name-follower6").text()+"&"
                                +"usuario="+$("#user-follower6").text()+"&"
                                +"imgUsuario="+$("#im-follower6").attr("src");
                    break;
                case "name-follower7":
                case "user-follower7":
                case "img-follower7":
                    parametros = "nombre="+$("#name-follower7").text()+"&"
                                +"usuario="+$("#user-follower7").text()+"&"
                                +"imgUsuario="+$("#im-follower7").attr("src");
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