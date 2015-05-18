$(function(){



    $('a.nav-keyboard').on('click',function(e){
        e.preventDefault();

        if($('section.blogroll').length && $('body').hasClass('home')){

            $('html, body').animate({scrollTop : $('.blogroll-nav ').offset().top - $('header').innerHeight()},300);

        }

        else{
            window.location.href = $('#home_url').attr('href') + '#blog';
        }

    });

    if(window.location.hash == '#blog' && $('body').hasClass('home')){

        $('html, body').animate({scrollTop : $('.blogroll-nav').offset().top  - $('header').innerHeight()},300);

    }

    $(window).on('load',function(){

        var $container = $('.blogroll main');
        // initialize
        $container.masonry({
            itemSelector: 'a',
            columnWidth: 'a.preview-width-maker',
            percentPosition: true,
        });

    });

});
