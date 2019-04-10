<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cinema Pojok</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/elegant-fonts.css') }}">
    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/swiper.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
    <style>
        .hero-slider {
            height: 100vh !important;
        }
        .swiper-pagination {
            display: none !important;
        }
        .mymodal-btn {
            border-color: white;
            color: white;
            transition: all 250ms;
        }
        .mymodal-btn:hover {
            background-color: white;
        }
        .mymodal-overlay {
            transition: all 300ms;
            opacity: 0;
            visibility: hidden;
            z-index: 50;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .mymodal-overlay > .mymodal {
            width: 60%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 4px ;
            height: 70%;
            background-color: white;
        }
        .mymodal-overlay.myactive {
            visibility: visible !important;
            opacity: 1 !important;
        }
        .mybtn-close{
            display: block;
            text-align: right;
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center py-0">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="{{ asset('front/images/logo2.png') }}" alt="logo" height="90" style="object-fit:scale-down;"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li><a href="{{ route('index.index') }}">Home</a></li>
                                <li><a href="{{ route('daftar') }}">Film</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
    
    @yield('content')
    
    <footer class="site-footer">
        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->
    <!-- <script src="{{ asset('front/js/jquery.js') }}"></script> -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/circle-progress.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/jquery.countTo.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/jquery.barfiller.js') }}"></script>
    <script type='text/javascript' src="{{ asset('front/js/custom.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(".mymodal-btn").click(function(){
                $(this).next().addClass("myactive");
            });
            $(".mymodal .mybtn-close").click(function(){
                $(this).parents(".mymodal-overlay").removeClass("myactive");
                $(this).parent().find("iframe").remove();
                $('.mybtn-close').after('<iframe src="{{ $film->trailer }}" class="col-12" style="height: 100%;padding: 0 !important;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            });
        });
            </script>
</body>
</html>