<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="banner-open">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <!-- page-header -->
        <div class="page-header">
            <!--<div class="page-intro">
                <div class="figure" style="background-image: url(/assets/images/sub/bg_page_header.jpg);"></div>
                <div class="video-area">
                    <video class="video" autoplay loop muted preload="metadata">
                        <source src="/assets/movie/1027606283-preview.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="details">
                    <h2>한미인의원소개</h2>
                </div>
            </div>-->
        </div>
        
        <nav class="depth-2">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">메뉴 1-1</a></li>
                    <li><a href="#">메뉴 1-2</a></li>
                    <li><a href="#">메뉴 1-3</a></li>
                    <li><a href="#">메뉴 1-4</a></li>
                    <li><a href="#">메뉴 1-5</a></li>
                    <li><a href="#">메뉴 1-6</a></li>
                </ul>
            </div>    
        </nav>
        <nav class="depth-3">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">메뉴 1-1-1</a></li>
                    <li><a href="#">메뉴 1-1-2</a></li>
                    <li><a href="#">메뉴 1-1-3</a></li>
                    <li><a href="#">메뉴 1-1-4</a></li>
                    <li><a href="#">메뉴 1-1-5</a></li>
                    <li><a href="#">메뉴 1-1-6</a></li>
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
    <!--script>
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
    </script-->
</body>
</html>