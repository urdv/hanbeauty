<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
<link rel="stylesheet" href="/assets/css/price.css">
</head>
<body class="banner-open">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <div class="price-wrapper">
        <section class="sub-intro">
            <ul class="sub-slide">
                <li class="slide-item">
                    <div class="content">
                        <div class="backdrop"></div>
                        <div class="summary">
                            <h4>더미 타이틀 텍스트1</h4>
                            <p>더미 서브 텍스트</p>
                            <a href="#">더미 링크 텍스트</a>
                        </div>
                    </div>
                </li>
                <li class="slide-item">
                    <div class="content">
                        <div class="backdrop"></div>
                        <video id="slide-video-2" class="video" loop muted preload="metadata">
                            <source src="https://player.vimeo.com/external/138504815.sd.mp4?s=8a71ff38f08ec81efe50d35915afd426765a7526&profile_id=112" type="video/mp4">
                        </video>
                        <div class="summary">
                            <h4>더미 타이틀 텍스트2</h4>
                            <p>더미 서브 텍스트</p>
                            <a href="#">더미 링크 텍스트</a>
                        </div>
                    </div>
                </li>
                <li class="slide-item">
                    <div class="content">
                        <div class="backdrop"></div>
                        <div class="summary">
                            <h4>더미 타이틀 텍스트3</h4>
                            <p>더미 서브 텍스트</p>
                            <a href="#">더미 링크 텍스트</a>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Content -->
        <div class="price-area">
            <div class="container-fluid">
                <div class="search-form">
                    <h2 class="title-link"><a href="/">한미인의원 강남본점</a></h2>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" id="search-field" class="form-control" placeholder="시술 이름 또는 효과 검색">
                            <label for="search-field" class="sr-only">검색영역</label>
                            <button type="submit" class="btn btn-search">
                                <span class="sr-only">검색버튼</span>
                            </button>
                        </div>
                    </form>
                    <button type="button" class="btn btn-default">
                        <span class="sr-only">메인으로 이동</span>
                    </button>
                </div>
                <nav id="snb">
                    <ul>
                        <li class="active"><a href="#">메뉴1</a></li>
                        <li><a href="#">메뉴2</a></li>
                        <li><a href="#">메뉴3</a></li>
                        <li><a href="#">메뉴4</a></li>
                        <li><a href="#">메뉴5</a></li>
                        <li><a href="#">메뉴6</a></li>
                        <li><a href="#">메뉴7</a></li>
                        <li><a href="#">메뉴8</a></li>
                        <li><a href="#">메뉴9</a></li>
                    </ul>
                </nav>
            </div>
            <!-- 추가 메뉴 등록시 현재줄부터 작업 -->
        </div>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($){
            // sub body class add
            $(document).ready(function(){
                $('body').addClass('price');
            });
            
            // menu scroll effect
            $(window).on('load resize', function(){
                var contWidth = $('body').outerWidth();
                //console.log(contWidth);
                if (992 < contWidth) {
                    $(".price-area").mCustomScrollbar({
                        theme:"minimal-dark"
                    });
                }
            });
            
            // 헤더 슬라이드
            $('.sub-slide').bxSlider({
                mode: 'fade',
                auto: true,
                pause: 6000,
                touchEnabled: false,
                controls: false,
                pager: false,
                onSliderLoad: function(currentIndex) {
                    var $currentElem = $('.sub-slide .slide-item:not(.bx-clone):eq(0)');
                    $currentElem.addClass('active');
                    var slideVideo = document.getElementById('slide-video-'+(currentIndex+1));
                    if (slideVideo) {
                        slideVideo.play();
                    }
                },
                onSlideBefore: function($slideElement, oldIndex, newIndex) {
                    $('.sub-slide .slide-item.active').removeClass('active');
                    var slideVideo = document.getElementById('slide-video-'+(oldIndex+1));
                    if (slideVideo) {
                        slideVideo.pause();
                    }
                },
                onSlideAfter: function($slideElement, oldIndex, newIndex) {
                    $slideElement.addClass('active');
                    var slideVideo = document.getElementById('slide-video-'+(newIndex+1));
                    if (slideVideo) {
                        slideVideo.play();
                    }
                }
            });
        })(jQuery);
    </script>    
</body>
</html>