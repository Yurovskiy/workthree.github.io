    $(document).ready(function(){
        
        var $menu = $("#navMenu");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 104 && $menu.hasClass("defaultMenu") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("defaultMenu")
                           .addClass("fixed")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 106 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed")
                           .addClass("defaultMenu")
                           .fadeIn('fast');
                });
            }
        });//scroll

    });//jQuery
