(function($) {
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
})(jQuery);
