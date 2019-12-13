(function($) {
    var offset = $('.navbar').offset().top;
    var $meuMenu = $('.navbar'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {

        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('navbar-fixed');
        } else {
            $meuMenu.removeClass('navbar-fixed');
        }
    });

    var localhost = $('#localhost').val();
    $('.plus').on('click',function(){
        if(!$(this).parent().find('.box-local').is(':visible')){
            $(this).attr("src",localhost+"/assets/img/plusb.png");
            $(this).parent().find('.box-local').css('display','block');
        }else{
            $(this).attr("src",localhost+"/assets/img/plus.png");
            $(this).parent().find('.box-local').css('display','none');
        }
    });

    var owl = $(".owl-banner");
    owl.owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        touchDrag: false,
        mouseDrag: false,
        responsive:{
            0:{
                items:1,
            },
            900:{
                items:1,
            }
        }
    });

    var owlprod = $(".owl-produtos");
    owlprod.owlCarousel({
        loop:true,
        margin:100,
        responsiveClass:true,
        touchDrag: false,
        mouseDrag: false,
        responsive:{
            0:{
                items:1,
            },
            900:{
                items:3,
            }
        }
    });
    
    $('.owl-produtos-e').on('click',function(e) {
        e.preventDefault();
        owlprod.trigger('next.owl.carousel');
    });
    $('.owl-produtos-d').on('click',function(e) {
        e.preventDefault();
        owlprod.trigger('prev.owl.carousel'); 
    });
})(jQuery);
