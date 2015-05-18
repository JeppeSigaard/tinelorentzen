$(function(){

    var topLogo = $('header .top-logo');

    if($('body').hasClass('home')){

        $(window).on('scroll',function(){

            if ($(window).scrollTop() > $(window).height()){

                topLogo.addClass('visible');

            }

            else{

                topLogo.removeClass('visible');

            }


        });

    }

    else{
        topLogo.addClass('visible-noanim');
    }



    topLogo.on('click',function(e){
        e.preventDefault();

        var href = $(this).children('a').attr('href');

        if($('body').hasClass('home')){

            $('html,body').animate({scrollTop : 0},$(window).scrollTop() / 7);

        }

        else{

            document.location.href = href;

        }
    });
});
