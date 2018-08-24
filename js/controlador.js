function redirijirFormulario(){
    location.href="Formulario.php";
}

$("#btn-light-1").click(function(){
    var parametros = "usuario="+$("#usuario").val()+"&"+"password="+$("#password").val();
    $.ajax({
       url: "ajax/login.php",
       data: parametros,
       method: "POST",
       dataType: "json",
       success: function(respuesta){
           if(respuesta.codigo == 0){
           window.location = "home.php";
            }else
            alert("usuario o contraseña incorrecto");
       },
       error: function(error){
           console.log(error);
       }
    });
});