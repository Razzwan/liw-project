$(document).ready(function($){

    /*$(".hello").click(function(){
        $(this).load('/ajax');
    });*/

    $(".like").click(function(){
        var
            id = $(this).data('id'),
            for_count = $(this).children(".count"),
            count = parseInt(for_count.html()),
            img = $(this).children(".img"),
            my_like = false;
            if(img.hasClass('like_off')) {
                my_like = true;
            }
        $.get('/ajax/like', {id:id, my_like:my_like}, function(data){
            if(my_like){
                if(data["success"]){
                    for_count.html(count+1);
                    img.removeClass('like_off').addClass('like_on');
                } else {
                    alert("Data save error!!!");
                }
            }else{
                for_count.html(count-1);
                img.removeClass('like_on').addClass('like_off');
            }
        }, "json");
    });

}); //ready end