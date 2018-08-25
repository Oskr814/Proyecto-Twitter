$(document).ready(function(){
    $("#btn-guardar").click(function(){
        var  parametros = "nombre="+$("#nombre").text()+"&"
                            +"usuario="+$("#usuario-lista").text()+"&"
                            +"nombreLista="+$("#nombre-lista").val()+"&"
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

    $.ajax({
    url: "ajax/cargar-lista.php",
    dataType: "json",
    method: "POST",
   
    success: function(respuesta){
    var contador = 0;
    for (let i = 0; i < respuesta.length; i++) {
        contador++;
     $('#listas').prepend(
      `<div>
        <div style="margin-left: 15pxs">
          <div><a href="#"><b>${respuesta[i].nombreLista}</b></a></div>      
          <div><p>${respuesta[i].descripcion}</p></div> 
          <div style="color:#657786"><p> # miembros</p></div>
        </div>
            <div style="float: right; padding:10px">
                <a href=""><img src="${respuesta[i].urlImagen}" class="rounded-circle" id="navbar-img-perfil-2"></a>
            </div>   
        </div>   
            <hr>`         
        );             
    }
    
    $('#contador-listas').append(
        `
        ${contador}
        `
    );

    },
    onerror: function(error){
        console.log(error);
    }
         
    });




});