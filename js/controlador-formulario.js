
var password1;
var password2;
var parametros;
function validarNombre(name){
    if(name.length == 0 ){
        document.getElementById("invalid-name").classList.remove("hidden");
        document.getElementById("name").style.borderBottomColor = "red"
        document.getElementById("img-valid-name").classList.add("hidden");
        document.getElementById("img-invalid-name").classList.remove("hidden");
    }else{ 
    document.getElementById("invalid-name").classList.add("hidden"); 
        document.getElementById("name").style.borderBottomColor = "green";
        document.getElementById("img-valid-name").classList.remove("hidden");
        document.getElementById("img-invalid-name").classList.add("hidden");
    }
       
}

function validarNombreUsuario(user_name){
    if(user_name.length == 0 ){
        document.getElementById("invalid-user-name").classList.remove("hidden");
        document.getElementById("user-name").style.borderBottomColor = "red"
        document.getElementById("img-valid-user-name").classList.add("hidden");
        document.getElementById("img-invalid-user-name").classList.remove("hidden");
    }else{ 
    document.getElementById("invalid-user-name").classList.add("hidden"); 
        document.getElementById("user-name").style.borderBottomColor = "green";
        document.getElementById("img-valid-user-name").classList.remove("hidden");
        document.getElementById("img-invalid-user-name").classList.add("hidden");
    }
       
}

function validarEmail(email){
    
    var emailValido = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!(emailValido.test(email))){
        document.getElementById("invalid-email").classList.remove("hidden");
        document.getElementById("email").style.borderBottomColor = "red";
        document.getElementById("img-valid-mail").classList.add("hidden");
        document.getElementById("img-invalid-mail").classList.remove("hidden");
    }else{
        document.getElementById("invalid-email").classList.add("hidden");
        document.getElementById("email").style.borderBottomColor = "green";
        document.getElementById("img-valid-mail").classList.remove("hidden");
        document.getElementById("img-invalid-mail").classList.add("hidden");
    }
}

function capturarContraseña(contraseña){
    password1 = contraseña;

}

function validarContraseña(contraseña){
    password2 = contraseña;
    if(password1 != password2){
        document.getElementById("invalid-password").classList.remove("hidden");
        document.getElementById("password1").style.borderBottomColor = "red";
        document.getElementById("password2").style.borderBottomColor = "red";
        document.getElementById("img-valid-password").classList.add("hidden");
        document.getElementById("img-invalid-password").classList.remove("hidden");
   }else{
        document.getElementById("invalid-password").classList.add("hidden");
        document.getElementById("password1").style.borderBottomColor = "green";
        document.getElementById("password2").style.borderBottomColor = "green";
        document.getElementById("img-valid-password").classList.remove("hidden");
        document.getElementById("img-invalid-password").classList.add("hidden");
    }
}

function validarCampos(){
    var camposVacios = 0;
    if(document.getElementById("name").value == ""){
        document.getElementById("invalid-name").classList.remove("hidden");
        document.getElementById("name").style.borderBottomColor = "red";
        camposVacios++;
    }
    if(document.getElementById("user-name").value == ""){
        document.getElementById("invalid-user-name").classList.remove("hidden");
        document.getElementById("user-name").style.borderBottomColor = "red";
        camposVacios++;
    }
    if(document.getElementById("email").value == ""){
        document.getElementById("email").style.borderBottomColor = "red";
        camposVacios++;
    }
     if(document.getElementById("password1").value == ""){
        document.getElementById("password1").style.borderBottomColor = "red";
        camposVacios++;
    }
     if(document.getElementById("password2").value == ""){
        document.getElementById("password2").style.borderBottomColor = "red";
        camposVacios++;
    } 
    
    if(document.getElementById("date").value == ""){
        document.getElementById("date").style.borderBottomColor = "red";
        camposVacios++;
    }
    if(camposVacios == 0){
        return true;
    }else
        return false;
    
    
}


/*Jquery*/
$("#btn-registro-usuario").click(function(){
    if(validarCampos() == true){
        parametros = "nombre="+$("#name").val()+"&"
                       +"usuario="+$("#user-name").val()+"&"
                       +"email="+$("#email").val()+"&"
                       +"password="+$("#password1").val()+"&"
                       +"date="+$("#date").val()+"&";
        $.ajax({
            url: "ajax/registro.php",
            data: parametros,
            dataType: "json",
            method: "POST",
            success: function(respuesta){
                console.log(respuesta);
                if(respuesta.codigoRespuesta == 0){
                    window.location = "home.php"
                }else{
                    if(respuesta.mensajeUsuario!=null){
                        $("#invalid-user-name").html(respuesta.mensajeUsuario);
                        document.getElementById("invalid-user-name").classList.remove("hidden");
                        document.getElementById("user-name").style.borderBottomColor = "red";
                    }
                    if(respuesta.mensajeEmail!=null){
                        $("#invalid-email").html(respuesta.mensajeEmail);
                        document.getElementById("invalid-email").classList.remove("hidden");
                        document.getElementById("email").style.borderBottomColor = "red";
                    }
                    
                }
            },
            error: function(error){
                console.log(error);
            }
        });
      
   }
});



