$(function(){

    var pageHeight = $(window).height();
    $('.hero').css('height',pageHeight);

    if($(window).width() > 320){

    $(window).on('scroll',function(){

        var winHeight = $(window).scrollTop();

        $('.bg-image').css('top', winHeight / 1.2);
        $('.hero>div').css('margin-top', winHeight / 2);

    }).on('resize',function(){

        pageHeight = $(this).height();
        $('.hero').css('height',pageHeight);
    });

    }

});
