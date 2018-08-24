$(document).ready(function(){
    $("#menu-ajustes-cuenta").click(function(){
        $("#div-cuenta").attr("class", "");
        $("#div-seguridad").attr("class", "oculto");
        $("#div-notificaciones-correo").attr("class", "oculto");
        $("#div-notificaciones").attr("class", "oculto");
        $("#div-cuentas-silenciadas").attr("class", "oculto");
        $("#div-cuentas-bloqueadas").attr("class", "oculto");
        

        
    });

    $("#menu-seguridad").click(function(){
        $("#div-cuenta").attr("class", "oculto");
        $("#div-seguridad").attr("class", "");
        $("#div-notificaciones-correo").attr("class", "oculto");
        $("#div-notificaciones").attr("class", "oculto");
        $("#div-cuentas-silenciadas").attr("class", "oculto");
        $("#div-cuentas-bloqueadas").attr("class", "oculto");
    });

    $("#menu-notificaciones-correo").click(function(){
        $("#div-cuenta").attr("class", "oculto");
        $("#div-seguridad").attr("class", "oculto");
        $("#div-notificaciones-correo").attr("class", "");
        $("#div-notificaciones").attr("class", "oculto");
        $("#div-cuentas-silenciadas").attr("class", "oculto");
        $("#div-cuentas-bloqueadas").attr("class", "oculto");
    });

    $("#menu-notificaciones").click(function(){
        $("#div-cuenta").attr("class", "oculto");
        $("#div-seguridad").attr("class", "oculto");
        $("#div-notificaciones-correo").attr("class", "oculto");
        $("#div-notificaciones").attr("class", "");
        $("#div-cuentas-silenciadas").attr("class", "oculto");
        $("#div-cuentas-bloqueadas").attr("class", "oculto");
    });

    $("#menu-cuentas-silenciadas").click(function(){
        $("#div-cuenta").attr("class", "oculto");
        $("#div-seguridad").attr("class", "oculto");
        $("#div-notificaciones-correo").attr("class", "oculto");
        $("#div-notificaciones").attr("class", "oculto");
        $("#div-cuentas-silenciadas").attr("class", "");
        $("#div-cuentas-bloqueadas").attr("class", "oculto");
    });

    $("#menu-cuentas-bloqueadas").click(function(){
        $("#div-cuenta").attr("class", "oculto");
        $("#div-seguridad").attr("class", "oculto");
        $("#div-notificaciones-correo").attr("class", "oculto");
        $("#div-notificaciones").attr("class", "oculto");
        $("#div-cuentas-silenciadas").attr("class", "oculto");
        $("#div-cuentas-bloqueadas").attr("class", "");
    });
});

$("input[name='perfil']").change(function(){
    var formData = new FormData($("#form-foto-perfil")[0]);
    $.ajax({
        url: "ajax/upload-perfil-photo.php",
        type: "POST",
        dataType:'json',
        data: formData, 
        contentType: false,
        processData: false,
        success: function(datos)
        {   console.log(datos.actualizar);
            if (datos.codigo==1) {
                $("#respuesta").html(datos.mensaje);
                $("#img-perfil-2").attr("src", datos.actualizar);
                $("#navbar-img-perfil-1").attr("src", datos.actualizar);
            }else{
                $("#respuesta").html(datos.mensaje);  
            } 
        },
        error: function(error){
            console.log(error);
        }
    });
});

$("input[name='portada']").change(function(){
    var formData = new FormData($("#form-foto-portada")[0]);
    $.ajax({
        url: "ajax/upload-portada-photo.php",
        type: "POST",
        dataType:'json',
        data: formData, 
        contentType: false,
        processData: false,
        success: function(datos)
        {
            console.log(datos.actualizar);
            if (datos.codigo==1) {
                $("#respuesta").html(datos.mensaje);
                $("#portada").attr("src", datos.actualizar);
            }else{
                $("#respuesta").html(datos.mensaje);  
            } 
        }
    });
});