$(function(){
    if($('.blog-spinner').length){
        $( '.blog-spinner').flickity({
            prevNextButtons: false,
            wrapAround: true,
            pageDots: false,
            cellSelector: '.spinner-item',
            setGallerySize: false,
        });
        
        $('.blog-spinner-controls').on( 'click', 'span', function() {
          var index = $(this).index();
          $( '.blog-spinner').flickity( 'select', index );
        });
    }
});

