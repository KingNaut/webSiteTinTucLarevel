<!DOCTYPE html>
<html class="html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{URL::asset('nguoidung/img/favicon.png')}}" />

    <title>    @yield('header') </title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{URL::asset('nguoidung/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('nguoidung/vendor/owl.carousel2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('nguoidung/vendor/owl.carousel2/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('nguoidung/vendor/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('nguoidung/vendor/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('nguoidung/css/escritor.min.css')}}">
    <!-- endinject -->

</head>

<body class="homeOne">

<!-- Mobile menu area start -->
<div class="mobileMenuWrap">
    <button  id="JS-closeButton"><i class="ion-close-round" aria-hidden="true"></i></button>
    <nav class="MobileMenu">
        <ul>
            <li  href="#cat-col-1">Ẩm Thực</a>

            </li>
            <li><a class="collapsed hasChildUl"  data-toggle="collapse" href="#cat-col-2" aria-expanded="true">Du Lịch Ẩm Thực</a>
                <ul aria-expanded="true" id="cat-col-2" class="collapse">
                    <li><a href="#"> Chế Biến Món Ngon</a></li>
                    <li><a href="#"> Lựa Chọn Nhà Hàng </a></li>
                </ul>
            </li>
            <li><a class="collapsed hasChildUl"  data-toggle="collapse" href="#cat-col-3" aria-expanded="true">Tin Ẩm Thực</a>
            </li>
            <li><a class="noChildUl"  href="#">Contact us</a></li>
            <li><a class="collapsed hasChildUl"  data-toggle="collapse" href="#cat-col-4" aria-expanded="true">Blog</a>
                <ul aria-expanded="true" id="cat-col-4" class="collapse">
                    <li><a href="#">Single Blog</a></li>
                    <li><a href="#">Single Blog Full</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <div class="socialMediaLink">
        <ul>
            <li><a href="#"><span class="ion-social-facebook"></span></a></li>
            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
            <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
            <li><a href="#"><span class="ion-social-tumblr"></span></a></li>
        </ul>
    </div>
</div><!--// Mobile menu area end -->

<!--header start-->
<header class="topHeader topHeader--styleOne">
    <!-- site main navigation -->
    <nav class="mainNav">
        <div class="topHeader__logo text-center u-shadow-0x0x5--05 hidden-sm hidden-xs u-relative u-zIndex-p10">
            <div class="container">

                <!-- site logo -->
                <div class="siteLogo u-padding30x0">
                    <a href="#">
                        <img src="{{URL::asset('nguoidung/img/logo.png')}}" alt="">
                    </a>
                </div><!--// site logo end-->
            </div>
        </div>

        <div id="JS-headerFixed" class="topHeader__menu u-table u-table--FW gray-border-b">
            <div class="topHeader__container u-tableCell">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-xs-8">
                            <!-- Start menu Navigation -->
                            <div class="topHeader__nav hidden-sm hidden-xs"  >
                                <ul>
                                    <li><a href="/"> Trang Chủ</a></li>

                                    <li ><a href="/am-thuc">Ẩm Thực Mọi Miền</a>

                                    </li>
                                    <li ><a href="/du-lich-am-thuc">Du Lịch Ẩm Thực</a>

                                    </li>

                                    <li ><a href="/tin-am-thuc">Tin Ẩm Thực</a></li>
                                    <li><a href="/che-bien-mon-ngon"> Chế Biến Món Ngon</a></li>

                                </ul>
                            </div>
                            <!-- End menu Navigation -->
                            <div class="smallDeviceTop visible-sm visible-xs">
                                <div class="buttonArea">
                                    <button
                                            tton id="JS-openButton" class="sideMenuTrigger" type="button"><i class="ion-navicon"></i></button>
                                </div>
                                <div class="siteLogo">
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/logo-3.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div> <!--// col end-->

                        <div class="col-sm-3 col-xs-4">
                            <div class="topHeader__action">
                                <ul class="pull-right">

                                    <!-- header search btn-->
                                    <li class="JS-searchTrigger topHeader__searchTrigger">
                                        <span class="ion-ios-search-strong"></span>
                                    </li> <!--// header search btn end-->

                                    <!-- user dropdown -->
                                    <!--<li class="dropdown__login isLogIn">
                                        <span class="logInCtrl dropdown-toggle" data-toggle="dropdown"><img src="{{URL::asset('nguoidung/img/user.png')}}" alt=""></span>
                                        <div class="dropdown-menu hasUserMenu">
                                            <div class="userMenu">
                                                <ul>
                                                    <li><a href="#">Dashboard</a></li>
                                                    <li><a href="#">Profile Edite</a></li>
                                                    <li><a href="#">Sign out</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>-->

                                </ul>
                            </div>
                        </div> <!--// col end-->
                    </div>
                </div>
            </div>
        </div>

    </nav>

    <!--header search area -->
    <div class="topHeader__searchArea">
        <div class="topHeader__searchForm">
            <button class="formCloseBtn JS-formClose"><span class="ion-close-round"></span></button>
            <form class="topHeader__searchFormWrapper" action="#">
                <button class="searchAction"><span class="ion-ios-search-strong"></span></button>
                <input class="formInput" type="text" placeholder="Search here">
            </form>
        </div>
    </div><!--// header search area end-->

</header><!--// header end-->

@yield('content')
<!-- Footer start -->
<footer class="siteFooter styleOne">

    <aside class="footerWidgetArea u-paddingTop60 u-marginBottom20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 footerWidgetsWrapper colOne">
                    <!-- widget (about) -->
                    <div class="widget aboutWidget styleOne text-center">
                        <div class="aboutWidget__body">
                            <figure class="aboutWidget__photo u-marginBottom25">
                                <img src="{{URL::asset('nguoidung/img/logo-white.png')}}" alt="" >
                            </figure>

                            <div class="aboutWidget__info c-socialMediaParent textWhite">
                                <p> Chân Thành cảm ơn  bạn đọc.<br class="hidden-xs">Những phải hồi của bạn sẽ giúp web ngày càng phát triển hơn </p>
                            </div>
                        </div>
                    </div> <!--// about wedget end -->
                </div>
            </div>
        </div>
    </aside>



    <div class="footerBottom dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyightText">
                        <p>© 2019 <a href="#">King_Naut</a> Inc.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="footerMediaLink c-socialMediaParent">
                        <ul class="c-t-socialMedia u-font18">
                          <a href="/lien-he" >Liên Hệ  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp</a>
                            <li ><a class="c-facebook" href="https://www.facebook.com/kingnaut"><span class="ion-social-facebook"></span></a></li>
                            <li ><a class="c-twitter" href="https://www.facebook.com/kingnaut"><span class="ion-social-twitter"></span></a></li>
                            <li ><a class="c-googlePlus" href="https://www.facebook.com/kingnaut"><span class="ion-social-googleplus"></span></a></li>
                            <li ><a class="c-tumblr" href="https://www.facebook.com/kingnaut"><span class="ion-social-tumblr"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--// footerBottom end -->

</footer>
<!--// Footer end -->

<!-- inject:js -->
<script src="{{URL::asset('nguoidung/vendor/jquery/jquery-1.12.0.min.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/sticky-master/jquery.sticky.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/sticky-kit/jquery.sticky-kit.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::asset('nguoidung/vendor/nicescroll-master/jquery.nicescroll.min.js')}}"></script>
<script src="{{URL::asset('nguoidung/js/escritor.js')}}"></script>
<!-- endinject -->

</body>

<!-- Mirrored from tf.brainmade.co/live/escritor/html/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Jan 2019 11:41:03 GMT -->
</html>
