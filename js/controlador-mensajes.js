$(document).ready(function(){
    //Peticion ajax para enviar un msj
    $("#btn-enviar-mensaje").click(function(){
        var parametros = "destinatario="+$("#destinatario").val()+"&"
                        +"emisor="+$("#nav-nombre").text()+"&"
                        +"usuarioEmisor="+$("#nav-usuario").text()+"&"
                        +"imgEmisor="+$("#navbar-img-perfil-1").attr("src")+"&"
                        +"mensaje="+$("#mensaje").val();
                        console.log(parametros);
        $.ajax({
            url: "ajax/mensajes.php",
            method: "POST",
            dataType: "json",
            data: parametros,
            success: function(respuesta){
                $("#mensajes").append( `
                <div id="div-msj">
                <img class="rounded-circle user-porfile-mensaje" src="${respuesta.imgDestinatario}" alt=""><b>${respuesta.nombreDestinatario}</b><span class="sug-user">${respuesta.destinatario}</span><i class="tipo-msj">${respuesta.tipo}</i><br>
                <p id="modal-mensaje">Tú: ${respuesta.mensaje}</p>
                </div>
                `);
    
            },
            error: function(error){
                console.log(error);
            }
        });
    });

    $.ajax({
        url: "ajax/cargar-mensajes.php",
        method: "POST",
        dataType: "json",
        success: function(respuesta){
            console.log(respuesta);
                for(var i=0 ; i<respuesta.length ; i++){
                    if(respuesta[i].tipo == "enviado"){
                        $("#mensajes").append( `
                            <div id="div-msj">
                                <img class="rounded-circle user-porfile-mensaje" src="${respuesta[i].imgEmisor}" alt=""><b>${respuesta[i].emisor}</b><span class="sug-user">${respuesta[i].usuarioEmisor}</span><i class="tipo-msj">${respuesta[i].tipo}</i><br>
                                <p id="modal-mensaje">Tú: ${respuesta[i].mensaje}</p>
                            </div>
                            
                        `);
                    }else if(respuesta[i].tipo == "recibido"){ 
                        
                        $("#mensajes").append( `
                            <div id="div-msj">
                            <img class="rounded-circle user-porfile-mensaje" src="${respuesta[i].imgEmisor}" alt=""><b>${respuesta[i].emisor}</b><span class="sug-user">${respuesta[i].usuarioEmisor}</span><i class="tipo-msj">${respuesta[i].tipo}</i><br>
                            <p id="modal-mensaje">El: ${respuesta[i].mensaje}</p>
                            </div>
                            
                        `);
                    }
                       
                }
            
            
            

        },
        error: function(error){
            console.log(error);
        }
    });




});

