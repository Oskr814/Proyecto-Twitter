$(document).ready(function(){

    $.ajax({
        url: "ajax/llamar-tweets.php",
        type: "POST",
        dataType:'json',
        success: function(datos)
        {   var tendencias = Array();
            for(var i = 0 ; i<datos.length ; i++){
                tendencias[i] = datos[i].hashtag;
            }
            var contenedor = Array(tendencias.length);
            var ordenado = Array();
            var contador = Array();
            for(var i = 0 ;i<contenedor.length; i++){
                contenedor[i] = Array();
            }
            for(var i = 0; i<tendencias.length ; i++){
                contenedor[i][0] = datos[i].hashtag;
                contenedor[i][1] = 0;
            }

            for(var i = 0; i<tendencias.length; i++){
                for(var j=0; j<tendencias.length; j++){
                    if(contenedor[i][0] == tendencias[j]){
                        contenedor[i][1]++;
                    }
                }   
            }
            for(var i = 0; i<contenedor.length; i++){
                if(ordenado.indexOf(contenedor[i][0]) === -1){
                    ordenado.push(contenedor[i][0]);
                    contador.push(contenedor[i][1]);
                }
            }
            for(var i = 0; i<ordenado.length ; i++){
                $("#tendencias").append(`
                <a href="#"><b class="tendencia">${ordenado[i]}</b></a><br>
                <span class="contador-tendendcias" style="font-size: 12px !important;">${contador[i]} Tweets</span><br>

                `);
            }
            
        },
        error: function(error){
            console.log(error);
        }
        
    });

});