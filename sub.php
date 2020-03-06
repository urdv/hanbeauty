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
                <div class="figure" style="background-image: url(/assets/images/sub/bg_page_header.jpg);"></div>
                <div class="video-area">
                    <video class="video" autoplay loop muted preload="metadata">
                        <source src="/assets/movie/1027606283-preview.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="details">
                    <h2>한미인의원소개</h2>
                </div>
            </div>
            <nav id="lnb">
                <div class="container">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dropdown">한미인의원소개</button>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="#">한미인의원소개</a></li>
                            <li><a href="#">의사,스텝소개</a></li>
                            <li><a href="#">오시는길,진료시간</a></li>
                            <li><a href="#">공지사항</a></li>
                            <li><a href="#">지점안내</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- tab-bar -->
        <div class="tab-bar">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">의사</a></li>
                    <li><a href="#">스텝</a></li>
                </ul>
            </div>
        </div>
        
    </main>

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
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
                //console.log('a');
            });
        })(jQuery);
    </script>    
</body>
</html>