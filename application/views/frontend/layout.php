<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description"
        content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
        content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Coffee</title>
    <!-- Favicon -->
    <link rel="icon" href="public/restaurant/img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="public/vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="public/vendor/css/revolution-settings.min.css">
    <link rel="stylesheet" href="public/vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="public/vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/vendor/css/swiper.min.css">
    <link rel="stylesheet" href="public/vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="public/vendor/css/LineIcons.min.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="public/vendor/css/select2.min.css">
    <link rel="stylesheet" href="public/vendor/css/jquery-ui.bundle.css">
    <link rel="stylesheet" href="public/restaurant/css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">



    <!--Preloader-->

    <div class="loader" id="loader-fade">
        <div class="loader-wrapper">
            <img src="public/restaurant/img/loader.gif" alt="image">
        </div>
    </div>
    <!--End Preloader-->


    <!--Header Start-->
    <header class="cursor-light">

        <!--Navigation-->
        <nav class="navbar navbar-top-default nav-radius navbar-expand-lg">
            <div class="container">
                <a href="javascript:void(0)" title="Logo" class="logo scroll">
                    <!--Logo Default-->
                    <img src="public/restaurant/img/logo.png" alt="logo" class="logo-dark logo-default">
                    <img src="public/restaurant/img/logo2.png" alt="logo" class="logo-light logo-scrolled">
                </a>

                <!--Nav Links-->
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link scroll" href="#home">Trang chủ</a>
                        <a class="nav-link scroll" href="#about">Thông tin</a>
                        <a class="nav-link scroll" href="#ourmenu">Sản phẩm</a>
                        <a class="nav-link scroll" href="#ourblog">Tin tức</a>
                        <a class="nav-link scroll" href="#contactus">Liên hệ</a>
                        <!-- <a class="nav-link scroll" href="#reservation">Reservation</a> -->
                    </div>
                    <div> <span class="open_search"><i class="fas fa-search"></i> </span></div>

                    <div class="search_block">
                        <div class="search_box animated wow fadeInUp">
                            <div class="inner">
                                <input type="text" name="search" id="search" class="search_input" autocomplete="off"
                                    placeholder="Enter Your Keywords.." />

                                <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i>
                                </button>

                            </div>
                        </div>
                        <div class="search-overlay"></div>

                    </div>

                    <!-- search input-->
                </div>

            </div>

            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="parallax-btn sidemenu_btn" id="sidemenu_toggle">
                <div class="animated-wrap sidemenu_btn_inner">
                    <div class="animated-element">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </a>
        </nav>

        <!--Side Nav-->
        <div class="side-menu">
            <div class="inner-wrapper">
                <span class="btn-close link" id="btn_sideNavClose"></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link  scroll" href="#home">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  scroll" href="#about">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  scroll" href="#gallery">Thư viện</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  scroll" href="#ourblog">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  scroll" href="#contactus">Liên hệ</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link  scroll" href="#reservation">Reservation</a>
                        </li> -->
                    </ul>
                </nav>

                <div class="side-footer text-white w-100">
                    <ul class="social-icons-simple">
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i
                                    class="fab fa-facebook-f"></i> </a> </li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i
                                    class="fab fa-instagram"></i> </a> </li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0)"><i
                                    class="fab fa-twitter"></i> </a> </li>
                    </ul>
                    <p class="text-white">&copy; VNPT</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->



    </header>
    <!--Header end-->

    <!--Footer End-->

    <?php
	ob_start();
	if (isset($com, $view)) {
		$this->load->view('frontend/components/' . $com . '/' . $view);
	} else
		$this->load->view('frontend/components/Error404/index');
	?>
    <!--FOOTER-->
    <?php
	$this->load->view('frontend/modules/footer');
	?>

    <!--G0 Top-->
    <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
    <!--End Go Top-->


    <!-- JavaScript -->
    <script src="public/vendor/js/bundle.min.js"></script>

    <!-- Plugin Js -->
    <script src="public/vendor/js/jquery.fancybox.min.js"></script>
    <script src="public/vendor/js/owl.carousel.min.js"></script>
    <script src="public/vendor/js/swiper.min.js"></script>
    <script src="public/vendor/js/jquery.cubeportfolio.min.js"></script>
    <script src="public/vendor/js/jquery.appear.js"></script>
    <script src="public/vendor/js/hover-item.js"></script>
    <script src="public/vendor/js/isotope.pkgd.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="public/vendor/js/jquery.themepunch.tools.min.js"></script>
    <script src="public/vendor/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="public/vendor/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="public/vendor/js/extensions/revolution.extension.video.min.js"></script>
    <script src="public/vendor/js/parallaxie.min.js"></script>
    <!-- custom script -->
    <script src="public/vendor/js/select2.min.js"></script>
    <script src="public/vendor/js/date.js"></script>
    <script src="public/vendor/js/jquery.hoverdir.js"></script>
    <script src="public/vendor/js/jquery-ui.bundle.js"></script>
    <script src="public/vendor/js/flip.js"></script>

    <!--contact form-->
    <script src="public/vendor/js/contact_us.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>
    <script src="public/restaurant/js/map.js"></script>
    <script src="public/restaurant/js/script.js"></script>

</body>

</html>