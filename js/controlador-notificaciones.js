$(document).ready(function(){

    $.ajax({
        url: "ajax/llamar-tweets.php",
        type: "POST",
        dataType:'json',
        success: function(datos)
        { 
            console.log(datos);
            
        },
        error: function(error){
            console.log(error);
        }
        
    });

});