(function($){
    $(document).ready(function(){
        setTimeout(function(){
            $('.introduction').addClass('play');
        }, 500);
    });
    // 헤더 슬라이드
    $('.intro-slide').bxSlider({
        mode: 'fade',
        auto: true,
        pause: 8000,
        touchEnabled: false,
        controls: true,
        onSliderLoad: function(currentIndex) {
            var $currentElem = $('.intro-slide .intro-item:not(.bx-clone):eq(0)');
            $currentElem.addClass('active');
        },
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
            $('.intro-slide .intro-item.active').removeClass('active');
        },
        onSlideAfter: function($slideElement, oldIndex, newIndex) {
            $slideElement.addClass('active');
        }
    });
    
    // 예약 많은 시술
    $(document).ready(function(){
        var sliderOpt = {
            auto: true,
            pause: 5000,
            pager: false,
            slideWidth: 170,
            minSlides: 2,
            maxSlides: 2,
            moveSlides: 1,
            touchEnabled: false
        };
        var popularitySlider = $('.popularity-list').bxSlider(sliderOpt);
        $(window).on('load resize', function() {
            var conWidth = $('.popularity-procedure .section-header .container').outerWidth();
            //console.log(conWidth);
            popularitySlider.reloadSlider(sliderOpt);
            if ( conWidth >= 530 ) {
                popularitySlider.reloadSlider({
                    auto: true,
                    pause: 5000,
                    pager: false,
                    slideWidth: 250,
                    minSlides: 3,
                    maxSlides: 3,
                    moveSlides: 1,
                    touchEnabled: false
                });
            }
            if ( conWidth >= 768 ) {
                popularitySlider.reloadSlider({
                    auto: true,
                    pause: 5000,
                    pager: false,
                    slideWidth: 300,
                    minSlides: 6,
                    maxSlides: 6,
                    moveSlides: 1,
                    touchEnabled: false
                });
            }
        });
    });

    // 인스타 리스트
    $(document).ready(function(){
        var sliderOpt = {
            auto: true,
            pause: 3000,
            pager: false,
            controls: false,
            slideWidth: 250,
            minSlides: 3,
            maxSlides: 3,
            moveSlides: 1,
            autoHover: true,
            touchEnabled: true,
            slideMargin: 10
        };
        var instaSlider = $('.insta-list').bxSlider(sliderOpt);
        $(window).on('load resize', function() {
            var conWidth = $('.hanbeauty-insta .section-content .container-fluid').outerWidth();
            instaSlider.reloadSlider(sliderOpt);
            if ( conWidth >= 768 ) {
                instaSlider.reloadSlider({
                    auto: true,
                    pause: 3000,
                    pager: false,
                    controls: false,
                    slideWidth: 250,
                    minSlides: 5,
                    maxSlides: 5,
                    moveSlides: 1,
                    autoHover: true,
                    touchEnabled: true,
                    slideMargin: 10
                });
            }
            if ( conWidth >= 1200 ) {
                instaSlider.reloadSlider({
                    auto: true,
                    pause: 3000,
                    pager: false,
                    controls: false,
                    slideWidth: 300,
                    minSlides: 7,
                    maxSlides: 7,
                    moveSlides: 1,
                    autoHover: true,
                    touchEnabled: true,
                    slideMargin: 20
                });
            }
        });
    });

    // 유튜브 리스트
    $(document).ready(function(){
        $('.hanbeauty-youtube .tab-menu ul li a').click(function(e){
            var index =  $(this).parent().index();
            $('.hanbeauty-youtube .tab-menu ul li a').parent().removeClass('active');
            $('.hanbeauty-youtube .tab-pane').removeClass('active');
            $(this).parent().addClass('active');
            $($(this).attr('href')).addClass('active');
            e.preventDefault(e);
        });
    });
})(jQuery);