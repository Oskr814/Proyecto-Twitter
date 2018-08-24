$(document).ready(function(){

    $.ajax({
        url: "ajax/llamar-tweets.php",
        type: "POST",
        dataType:'json',
        success: function(datos)
        { 
            for(var i = datos.length-1 ; i>=0 ; i--){
                $("#tendencias").append(`
                <a href="#"><b>${datos[i].hashtag}</b></a><br>                           
                `);
            }
            
        },
        error: function(error){
            console.log(error);
        }
        
    });

});