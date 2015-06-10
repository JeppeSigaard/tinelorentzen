$(function(){

    if($('.hero').length){
    //var myScroll = new IScroll('body');
        var minusBottom = 170;

        if($(window).width() > 480){
        /*$('body').stellar({
            horizontalScrolling: false,
            verticalOffset:70,
            responsive: true,
            hideDistantElements: true,
            scrollProperty: 'scroll',
        });*/
        }

    var pageHeight = $(window).height();
    $('.hero').css('height',pageHeight - minusBottom);

    if($(window).width() > 320){

    $(window).on('scroll',function(){

        var winHeight = $(window).scrollTop();

        //$('.bg-image').css('top', winHeight / 1.2);
        //$('.hero>div').css('margin-top', winHeight / 2);

    }).on('resize',function(){

        pageHeight = $(this).height();
        $('.hero').css('height',pageHeight - minusBottom);
    });

    }
    }
});
