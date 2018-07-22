
var password1;
var password2;

function validarNombre(name){
    if(name.length == 0 ){
        console.log("asdas");
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
    
    if(document.getElementById("name").value == ""){
        document.getElementById("invalid-name").classList.remove("hidden");
        document.getElementById("name").style.borderBottomColor = "red";   
    }  

    if(document.getElementById("email").value == ""){
        document.getElementById("email").style.borderBottomColor = "red";
    }
    

    if(document.getElementById("password1").value == ""){
        document.getElementById("password1").style.borderBottomColor = "red";
    }

    if(document.getElementById("password2").value == ""){
        document.getElementById("password2").style.borderBottomColor = "red";
    }

    if(document.getElementById("date").value == ""){
        document.getElementById("date").style.borderBottomColor = "red";
    }
    location.href ="https://www.youtube.com/watch?v=EhVB22S1Zqk";
}