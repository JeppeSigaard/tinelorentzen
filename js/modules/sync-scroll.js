$(function(){if($('.site-nav').length){

    var lastScrollTop = 0,
        fancyScroll = $('.site-nav');
    
    $(window).on('scroll', function () {

        if($('.site-footer').offset().top < $(window).scrollTop() + $(window).height()){
            fancyScroll.addClass('bottom');
        }
        
        else{
            
            fancyScroll.removeClass('bottom');
        }

        var st = $(this).scrollTop(),
            diff = st - lastScrollTop,
            scrollStop = $(window).innerHeight() + $(window).scrollTop(),
            fancyHeight = fancyScroll.offset().top + fancyScroll.innerHeight(),
            fancyScrollAmount = fancyScroll.scrollTop() + diff;

        if(fancyScroll.hasClass('bottom')){
        }
        
		else if(!fancyScroll.hasClass('bottom')){

			fancyScroll.scrollTop(fancyScrollAmount);


		}

		else{
			fancyScroll.scrollTop(0);
		}

		lastScrollTop = st;
    });
    
    $(window).load(function(){
        
        if($('.site-content').innerHeight() < $('.site-nav').innerHeight()){
        
            $('.site-content').css({
                height: $('.site-nav').innerHeight(),
            });

        }
        
    });

}});
