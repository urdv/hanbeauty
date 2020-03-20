<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="banner-open">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <div class="page-intro">
                <div class="video-area">
                    <video class="video" autoplay loop muted preload="metadata">
                        <source src="/assets/movie/1027606283-preview.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="details">
                    <h2>한미인의원소개</h2>
                </div>
            </div>
        </div>
        
        <nav class="depth-2">
            <div class="container">
                <ul>
                    <li class="active"><a href="#"><span>탄력/리프팅/V라인</span></a></li>
                    <li><a href="#"><span>기미/색소/홍조</span></a></li>
                    <li><a href="#"><span>보톡스</span></a></li>
                    <li><a href="#"><span>여드름/필링/한관종</span></a></li>
                    <li><a href="#"><span>흉터/모공/튼살</span></a></li>
                    <li><a href="#"><span>제모</span></a></li>
                    <li><a href="#"><span>비만/체형관리</span></a></li>
                    <li><a href="#"><span>피부/항노화주사</span></a></li>
                    <li><a href="#"><span>예방주사&amp;태반</span></a></li>
                    <li><a href="#"><span>스킨케어(별관)</span></a></li>
                    <li><a href="#"><span>필링(별관)</span></a></li>
                </ul>
            </div>    
        </nav>
        <nav class="depth-3">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">레이저 토닝</a></li>
                    <li><a href="#">I2PL</a></li>
                    <li><a href="#">레블라이트si</a></li>
                    <li><a href="#">레블라이트si+하이할라오 12분</a></li>
                    <li><a href="#">피코 토닝</a></li>
                    <li><a href="#">젠틀맥스 프로 제네시스 토닝</a></li>
                    <li><a href="#">젠틀맥스 프로 알렉스 토닝</a></li>
                    <li><a href="#">젠틀맥스 프로 잡티</a></li>
                    <li><a href="#">브이빔 퍼펙타</a></li>
                    <li><a href="#">비타민 이온토 재생관리</a></li>
                    <li><a href="#">4가지 토닝을 한번에</a></li>
                </ul>
            </div>    
        </nav>
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($){
            $(document).ready(function(){
                $('body').addClass('sub');
            });
        })(jQuery);
    </script>
    <script>
        (function($){
            // sub body class add (header scroll 효과적용)
            $(document).ready(function(){
                $('body').addClass('sub');
                setTimeout(function(){
                    $('.page-header').addClass('action');
                }, 500);
            });
            
            // sub lnb dropdown
            $(document).on('click','#lnb .btn-dropdown', function(){
                $(this).toggleClass('on');
                $('#lnb .dropdown').toggleClass('show');
            });
        })(jQuery);
    </script>
</body>
</html>