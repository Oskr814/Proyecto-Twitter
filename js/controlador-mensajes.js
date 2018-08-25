$("#btn-enviar-mensaje").click(function(){
    var parametros = "destinatario="+$("#destinatario").val()+"&"
                    +"emisor="+$("#nav-nombre").text()+"&"
                    +"usuarioEmisor="+$("#nav-usuario").text()+"&"
                    +"imgEmisor="+$("#navbar-img-perfil-1").attr("src")+"&"
                    +"mensaje="+$("#mensaje").val();
                    console.log(parametros);
    $.ajax({
        url: "ajax/mensajes.php",
        method: "",
        dataType: "",
        data: parametros,
        success: function(respuesta){

        },
        error: function(error){
            console.log(error);
        }
    });
});