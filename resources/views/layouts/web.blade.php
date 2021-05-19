<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KusuriKall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/fv.png" type="image/x-icon">
    <link rel="icon" href="assets/img/fv.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="saas-classic">
    <!-- preloader - start -->
    <div id="preloader" class="saas-classic-preloader"></div>
    <div class="up">
        <a href="#" id="scrollup" class="saas-classic-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>
    <!-- Start of nav section
        ============================================= -->
    <header id="header_main" class="saas_two_main_header">
        <div class="container">
            <div class="s_main_menu">
                <div class="row">
                    <div class="col-md-2">
                        <div class="brand_logo">
                            <a href="!#"><img src="assets/img/saas-c/logo/medcall-logo4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="main_menu_list clearfix float-right">
                            <nav class="s2-main-navigation  clearfix ul-li">
                                <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    @if (Auth::guest())
                                    <li><a href="{{ url('/login') }}">{{ __('lang.login')}}</a></li>
                                    @else
                                    <li><a href="{{ url('/dashboard') }}">{{ __('lang.myreminders')}}</a></li>
                                    @endif
                                </ul>
                            </nav>
                            @if (Auth::guest())
                            <div class="saas_sign_up_btn text-center">
                                <a href="#!">無料お試し</a>
                            </div>
                            @else
                            
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- //desktop menu -->
            <div class="s2-mobile_menu relative-position">
                <div class="s2-mobile_menu_button s2-open_mobile_menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="s2-mobile_menu_wrap">
                    <div class="mobile_menu_overlay s2-open_mobile_menu"></div>
                    <div class="s2-mobile_menu_content">
                        <div class="s2-mobile_menu_close s2-open_mobile_menu">
                            <i class="far fa-times-circle"></i>
                        </div>
                        <div class="m-brand-logo text-center">
                            <a href="!#"><img src="assets/img/saas-c/logo/medcall-logo4.png" alt=""></a>
                        </div>
                        <nav class="s2-mobile-main-navigation  clearfix ul-li">
                            <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                <li><a href="#saas_two_service">Service</a></li>
                                <li><a href="#saas_two_feature">Features</a></li>
                                <li><a href="#s2-pricing">Pricing</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @yield('content')


    <footer id="saas_two_footer" class="saas_two_footer_section relative-position">
        <div class="footer_content pera-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="s2_footer_widget clearfix ul-li-block  saas2-headline">
                            <div class="s2_footer_about">
                                <div class="s2-footer_logo">
                                    <img src="assets/img/saas-c/logo/medcall-logo4.png" alt="">
                                </div>
                                <div class="footer_about">
                                    30 Commercial Road Fratton
                                    PORTSMOUTH Hampshire PO1 1AA
                                    UNITED KINGDOM
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s2_footer_widget clearfix ul-li-block saas2-headline">
                            <div class="s2_footer_menu">
                                <h3 class="s2_widget_title">

                                </h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="{{ Route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of footer section
        ============================================= -->
    <!-- JS library -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/pagenav.js"></script>
    <script src="assets/js/jquery.barfiller.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>