
var password1;
var password2;

function validarEmail(email){
    
    var emailValido = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if(!(emailValido.test(email))){
        document.getElementById("invalid-email").classList.remove("hidden");
    }else
    document.getElementById("invalid-email").classList.add("hidden");
       
}

function capturarContraseña(contraseña){
    password1 = contraseña;

}

function validarContraseña(contraseña){
    password2 = contraseña;
    if(password1 != password2){
        document.getElementById("invalid-password").classList.remove("hidden");
   }else
        document.getElementById("invalid-password").classList.add("hidden");
}
