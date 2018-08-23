$(document).ready(function(){
    $(window).click(function(e) {
        if(e.target.id == "post-tweet"){
            $("#btn-post-tweet-twittear").attr("style", "");
            $("#post-tweet-img").attr("style", "display:none;");
            $(".row-c1").attr("style", "height: 150px;");
        }else{
            if(e.target.id=="btn-post-tweet-twittear"){
                $.ajax({
                    url: "ajax/postear-tweet.php",
                    dataType:"json",
                    method:"POST",
                    success: function(respuesta){

                    },
                    error: function(error){

                    }
                });
            }
                $("#btn-post-tweet-twittear").attr("style", "display:none;");
                $("#post-tweet-img").attr("style", "");
                $(".row-c1").attr("style", "");
        }
    });
    
});