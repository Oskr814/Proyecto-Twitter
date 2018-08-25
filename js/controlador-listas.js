$(document).ready(function(){
$("#btn-guardar").click(function(){
     var  parametros = "nombre="+$("#nombre-lista").val()+"&"
                       +"descripcion="+$("#descripcion").val();

    $("#btn-guardar").attr("disabled",true);
        $.ajax({
            url: "ajax/guardar-lista.php",
            data: parametros,
            dataType: "json",
            method: "POST",
           
        success: function(respuesta){
            console.log(respuesta);
        },
        onerror: function(error){
            console.log(error);
        }
                 
        });



    });
});