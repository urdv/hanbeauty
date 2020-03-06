(function($){
    // header scroll 관련
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('#header').addClass('scrolled');
        } else {
            $('#header').removeClass('scrolled');
        }
    });

    // nav 관련
    $(document).on('click','#header .btn-nav', function(){
        $(this).toggleClass('btn-close');
        $('body').toggleClass('nav-opened');
    });
    $(document).on('click', '#nav .backdrop, .nav-close', function(){
        $('.btn-nav').removeClass('btn-close');
        $('body').removeClass('nav-opened');
    });

    // gnb 관련
    $(document).on('mouseenter', '#gnb > ul > li > a', function(){
        $(this).parent().addClass('active');
    });
    $(document).on('mouseleave', '#gnb ul li', function(){
        $(this).removeClass('active');
    });

    // nav-slide
    $(document).ready(function(){
        $('.nav-slide ul').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<button class="slick-prev slick-arrow" type="button">PREV</button>',
            nextArrow: '<button class="slick-next slick-arrow" type="button">NEXT</button>',
            responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    prevArrow: '<button class="slick-prev slick-arrow" type="button">PREV</button>',
                    nextArrow: '<button class="slick-next slick-arrow" type="button">NEXT</button>',
                }
            }
            ]
        });
    });

    // nav body scroll 
    $(".nav-body").mCustomScrollbar({
        theme:"dark-3"
    });
    
    
    // banner slider
    $(document).ready(function(){
        $('.banner-slider').bxSlider({
            auto: true,
            mode: 'vertical',
            touchEnabled: false,
            controls: false
        });
        setTimeout(function(){
            $('#banner').addClass('play');
        }, 500);
    });
    
    // banner close
    $(document).on('click', '.btn-banner', function(){
        $('body').removeClass('banner-open');
    });
    
})(jQuery);