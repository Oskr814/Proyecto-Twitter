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