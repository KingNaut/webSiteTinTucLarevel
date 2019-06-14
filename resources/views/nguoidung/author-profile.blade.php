@extends('layouts.nguoidung')
@section('content')
<!--header start-->


<!-- page title start -->
<section class="pageTitle noBreadcrumbs">

    <div class="titleWrapper">
        <div class="container">
            <h1>Author Profile</h1>
        </div>
    </div>

</section><!--// page title end -->

<!-- Main Content Area Start-->
<main class="u-grayBg">

    <!-- Author posts area-->
    <section class="authorProfilePage authorProfileContent u-paddingTop60 u-paddingBottom60">
        <div class="container">

            <div class="sectionBody">
                <div class="row u-flex" data-sticky_parent>
                    <div class="col-md-8">
                        <div class="authorContainer">

                            <div class="authorProfileInfo u-shadow-0x0x5--05 u-whiteBg">
                                <figure>
                                    <img src="{{URL::asset('nguoidung/img/p29-110x110.jpg')}}" alt="">
                                </figure>
                                <div class="infoWrap">
                                    <div class="top">
                                        <div class="text">
                                            <h4 class="name"><a href="#">Puffinthemes Team</a></h4>
                                            <span class="mail"><a href="mailto:puffinthemes@gmail.com">puffinthemes@gmail.com</a></span>
                                        </div>
                                        <ul class="socialMediaLink">
                                            <li><a href="#"><span class="ion-social-tumblr"></span></a></li>
                                            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                                            <li><a href="#"><span class="ion-social-tumblr"></span></a></li>
                                            <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="about__author">
                                        <p>A content strategist sits at a table with a stack of user personas, there drawing bubbles on a page, mapping the information a web user is going to need, how they’re going to use and in what order.</p>
                                    </div>
                                </div>
                            </div> <!--// authorProfileInfo end-->

                            <div class="recentPostContainer">

                                <!-- post row -->
                                <div class="row">

                                    <!-- post item -->
                                    <div class="col-sm-12">
                                        <article class="recentPost u-noOverFolow defPost styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom40 galleryPostFormat">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb owl-carousel galleryThumb">
                                                    <img data-transition='.3' data-hover-opacity="8" src="{{URL::asset('nguoidung/img/p5-770x390.jpg')}}" alt="">
                                                    <img data-transition='.3' data-hover-opacity="8" src="{{URL::asset('nguoidung/img/p10-770x390.jpg')}}" alt="">
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font17" datetime="2018-03-25">March 6, 2019</time>
                                                </div>
                                            </header>
                                            <!-- Post header start -->
                                            <div class="defPost__content u-padding0x40">
                                                <h3 class="  u-fontWeight600 u-marginBottom10"><a class="textDark" href="single-blog">Hawaii in 6K – Inspirational Speech – Make
                                                        Your Life Extraordinary!</a></h3>
                                                <ul class="defPost__author_category u-font17 u-xs-font14 u-fontWeight600">
                                                    <li class="defPost__author u-inlineBlock"><a href="author-profile">Puffinthemes</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft15 u-marginLeft10 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="category-main">Life Style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop20 u-paddingBottom25">
                                                    <p>A content strategist sits at a table with a stack of user personas, drawing bubbles on a page, mapping the information a web user is going to need, how they’re going to use and in what order. A graphic designer stands at their desk, drafting content blocks wireframe, anticipating the needs before them on the page.</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer u-padding0x40 clear">
                                                <div class="read-more pull-left">
                                                    <a class="u-font17 u-relative u-fontWeight600" href="single-blog">Read More</a>
                                                </div>
                                                <div class="postAction styleOne pull-right u-relative">
                                                    <div class="postAction__share c-socialMediaParent u-inlineBlock u-font20 u-cursorPointer u-marginRight10">
                                                        <span class="u-xs-font0"><span class="ion-android-share-alt"></span></span>
                                                        <ul class="postAction__share-list c-t-socialMedia text-right u-font18">
                                                            <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                            <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                            <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                            <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div data-tooltip="405" class="postAction__view u-inlineBlock u-font20 u-cursorPointer c-hasToolTip hidden-xs">
                                                        <a href="#"><span class="ion-eye"></span></a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </article>
                                    </div><!--// post item end-->

                                </div><!--// post row end -->

                                <!-- post row -->
                                <div class="row u-flex">

                                    <!-- post item -->
                                    <div class="col-sm-6 u-marginTop30 u-flex">
                                        <article class="defPost u-noOverFolow defPost defPost--oneHalf u-flex u-flex--contentSpace u-flex--dir_col u-heightBlock styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom30">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb imageZoom__parent">
                                                    <a href="#"><img class="imageZoom__el" src="{{URL::asset('nguoidung/img/p6-370x220.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font15" datetime="2018-03-25">March 6, 2019</time>
                                                </div>
                                            </header>
                                            <div class="defPost__content u-padding0x30">
                                                <h5 class="  u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                    <a class="textDark" href="single-blog.html">How to Wear Yellow: 10 Street
                                                        Style To Celebrate...</a>
                                                </h5>
                                                <ul class="defPost__author_category u-font15">
                                                    <li class="defPost__author u-inlineBlock"><a href="author-profile.html">Puffinthemes</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft10 u-marginLeft5 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="category-main.html">Life Style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop15 u-paddingBottom10">
                                                    <p>Dependent certainty off discovere him his times tolerably offending. Hame fm attention remainde sometim additions recommend.</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer clear u-padding0x30">
                                                <div class="read-more pull-left">
                                                    <a class="u-font15 u-relative u-fontWeight600" href="single-blog">Read More</a>
                                                </div>
                                                <div class="postAction styleOne pull-right u-relative">
                                                    <div class="postAction__share c-socialMediaParent u-inlineBlock u-font20 u-cursorPointer u-marginRight10">
                                                        <span class="u-xs-font0"><span class="ion-android-share-alt"></span></span>
                                                        <ul class="postAction__share-list c-t-socialMedia text-right u-font18">
                                                            <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                            <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                            <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                            <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div data-tooltip="405" class="postAction__view u-inlineBlock u-font20 u-cursorPointer c-hasToolTip hidden-xs">
                                                        <a href="#"><span class="ion-eye"></span></a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </article>
                                    </div><!--// post item end-->

                                    <!-- post item -->
                                    <div class="col-sm-6 u-marginTop30 u-flex">
                                        <article class="defPost u-noOverFolow defPost--oneHalf u-flex u-flex--contentSpace u-flex--dir_col u-heightBlock styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom30">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb imageZoom__parent">
                                                    <a href="#"><img class="imageZoom__el" src="{{URL::asset('nguoidung/img/p7-370x220.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font15" datetime="2018-03-25">March 6, 2019</time>
                                                </div>
                                            </header>
                                            <div class="defPost__content u-padding0x30">
                                                <h5 class="  u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                    <a class="textDark" href="#">A beautiful place for Thinkers
                                                        and Dreamers</a>
                                                </h5>
                                                <ul class="defPost__author_category u-font15">
                                                    <li class="defPost__author u-inlineBlock"><a href="author-profile">Puffinthemes</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft10 u-marginLeft5 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="category-main">Life Style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop15 u-paddingBottom10">
                                                    <p>Dependent certainty off discovere him his times tolerably offending. Hame fm attention remainde sometim additions recommend.</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer clear u-padding0x30">
                                                <div class="read-more pull-left">
                                                    <a class="u-font15 u-relative u-fontWeight600" href="single-blog">Read More</a>
                                                </div>
                                                <div class="postAction styleOne pull-right u-relative">
                                                    <div class="postAction__share c-socialMediaParent u-inlineBlock u-font20 u-cursorPointer u-marginRight10">
                                                        <span class="u-xs-font0"><span class="ion-android-share-alt"></span></span>
                                                        <ul class="postAction__share-list c-t-socialMedia text-right u-font18">
                                                            <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                            <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                            <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                            <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div data-tooltip="405" class="postAction__view u-inlineBlock u-font20 u-cursorPointer c-hasToolTip hidden-xs">
                                                        <a href="#"><span class="ion-eye"></span></a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </article>
                                    </div><!--//post item end -->

                                </div><!--// post row end -->

                                <!-- post row -->
                                <div class="row u-marginTop30">

                                    <!-- post item -->
                                    <div class="col-sm-12">
                                        <article class="defPost styleOne mdHeightControl defPost--oneHalf  u-whiteBg u-shadow-0x0x5--05">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <header class="defPost__postHeader u-relative">
                                                        <figure class="defPost__postThumb imageZoom__parent">
                                                            <a href="#"><img class="imageZoom__el" src="{{URL::asset('nguoidung/img/p8-370x390.jpg')}}" alt=""></a>
                                                        </figure>
                                                        <div class="defPost__date ff-Playfair textWhite">
                                                            <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                            <time class="u-font15" datetime="2018-03-25">March 6, 2019</time>
                                                        </div>
                                                    </header>
                                                </div>
                                                <div class="col-sm-6 u-noOverFolow">
                                                    <div class="defPost__content u-paddingRight30 u-xs-paddingLeft30">
                                                        <h4 class="u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                            <a class="textDark" href="#">What’s the best cheap more
                                                                compact camera with...</a>
                                                        </h4>
                                                        <ul class="defPost__author_category u-font15">
                                                            <li class="defPost__author u-inlineBlock"><a href="author-profile">Tustas Galaburda</a></li>
                                                            <li class="defPost__category u-relative u-paddingLeft15 u-marginLeft10 u-inlineBlock">
                                                                <ul class="ff-openSans  u-inlineBlock">
                                                                    <li class="u-inlineBlock"><a href="category-main">Life Style</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <div class="postText u-paddingTop20 u-paddingBottom20">
                                                            <p>Dependent certainty off discoveres himes his times tolerably offending. Hame from attention remainde sometimes additions recommend. Direction has strangers now believing. Respect enjoyed gay exposed is parlors towards.</p>
                                                        </div>
                                                    </div>
                                                    <footer class="defPost__footer defPost__footer--alt clear u-paddingRight30 u-paddingBottom30 u-xs-paddingLeft30 ">
                                                        <div class="read-more pull-left">
                                                            <a class="u-font15 u-relative u-fontWeight600" href="#">Read More</a>
                                                        </div>
                                                        <div class="postAction styleOne pull-right u-relative">
                                                            <div class="postAction__share c-socialMediaParent u-inlineBlock u-font20 u-cursorPointer u-marginRight10">
                                                                <span class="u-xs-font0"><span class="ion-android-share-alt"></span></span>
                                                                <ul class="postAction__share-list c-t-socialMedia text-right u-font18">
                                                                    <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                                    <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                                    <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                                    <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div data-tooltip="405" class="postAction__view u-inlineBlock u-font20 u-cursorPointer c-hasToolTip hidden-xs">
                                                                <a href="#"><span class="ion-eye"></span></a>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>
                                    </div><!--// post item end-->

                                </div><!--// post row end -->

                                <!-- post row -->
                                <div class="row u-flex">

                                    <!-- post item -->
                                    <div class="col-sm-6 u-marginTop30 u-flex">
                                        <article class="defPost u-noOverFolow defPost--oneHalf u-flex u-flex--contentSpace u-flex--dir_col u-heightBlock styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom30">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb imageZoom__parent">
                                                    <a href="#"><img class="imageZoom__el" src="{{URL::asset('nguoidung/img/p11-370x220.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font15" datetime="2018-03-25">March 6, 2019</time>
                                                </div>
                                            </header>
                                            <div class="defPost__content u-padding0x30">
                                                <h5 class="  u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                    <a class="textDark" href="#">Tips to Increas the Long evity
                                                        of Your Laptop</a>
                                                </h5>
                                                <ul class="defPost__author_category u-font15">
                                                    <li class="defPost__author u-inlineBlock"><a href="author-profile">Puffinthemes</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft10 u-marginLeft5 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="category-main">Life Style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop15 u-paddingBottom10">
                                                    <p>Dependent certainty off discovere him his times tolerably offending. Hame fm attention remainde sometim additions recommend.</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer clear u-padding0x30">
                                                <div class="read-more pull-left">
                                                    <a class="u-font15 u-relative u-fontWeight600" href="single-blog">Read More</a>
                                                </div>
                                                <div class="postAction styleOne pull-right u-relative">
                                                    <div class="postAction__share c-socialMediaParent u-inlineBlock u-font20 u-cursorPointer u-marginRight10">
                                                        <span class="u-xs-font0"><span class="ion-android-share-alt"></span></span>
                                                        <ul class="postAction__share-list c-t-socialMedia text-right u-font18">
                                                            <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                            <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                            <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                            <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div data-tooltip="405" class="postAction__view u-inlineBlock u-font20 u-cursorPointer c-hasToolTip hidden-xs">
                                                        <a href="#"><span class="ion-eye"></span></a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </article>
                                    </div><!-- post item end-->

                                    <!-- post item -->
                                    <div class="col-sm-6 u-marginTop30 u-flex">
                                        <article class="defPost u-noOverFolow defPost--oneHalf u-flex u-flex--contentSpace u-flex--dir_col u-heightBlock styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom30">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb imageZoom__parent">
                                                    <a href="#"><img class="imageZoom__el" src="{{URL::asset('nguoidung/img/p12-370x220.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font15" datetime="2018-03-25">March 6, 2019</time>
                                                </div>
                                            </header>
                                            <div class="defPost__content u-padding0x30">
                                                <h5 class="  u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                    <a class="textDark" href="#">The smart speaker that answers
                                                        almost any question</a>
                                                </h5>
                                                <ul class="defPost__author_category u-font15">
                                                    <li class="defPost__author u-inlineBlock"><a href="author-profile">Puffinthemes</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft10 u-marginLeft5 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="category-main">Life Style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop15 u-paddingBottom10">
                                                    <p>Dependent certainty off discovere him his times tolerably offending. Hame fm attention remainde sometim additions recommend.</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer clear u-padding0x30">
                                                <div class="read-more pull-left">
                                                    <a class="u-font15 u-relative u-fontWeight600" href="single-blog">Read More</a>
                                                </div>
                                                <div class="postAction styleOne pull-right u-relative">
                                                    <div class="postAction__share c-socialMediaParent u-inlineBlock u-font20 u-cursorPointer u-marginRight10">
                                                        <span class="u-xs-font0"><span class="ion-android-share-alt"></span></span>
                                                        <ul class="postAction__share-list c-t-socialMedia text-right u-font18">
                                                            <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                            <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                            <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                            <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div data-tooltip="405" class="postAction__view u-inlineBlock u-font20 u-cursorPointer c-hasToolTip hidden-xs">
                                                        <a href="#"><span class="ion-eye"></span></a>
                                                    </div>
                                                </div>
                                            </footer>
                                        </article>
                                    </div><!--// post item end-->

                                </div><!--// post row end -->

                            </div> <!--// recentPostContainer end-->

                            <div class="sectionLoadMore text-center u-marginTop30">
                                <a href="#" class="btnWhite u-whiteBg u-borderRadius4 u-inlineBlock u-upperCase u-font17">Load More</a>
                            </div>
                        </div> <!--// authorContainer end -->

                    </div> <!--// col-8 end-->

                    <div class="col-md-4 u-xs-paddingTop30 u-sm-paddingTop30">
                        <aside class="sideBar styleOne rightSideBar">

                            <!-- widget(about) -->
                            <section class="widget aboutWidget styleOne u-whiteBg u-shadow-0x0x5--05">
                                <h4 class="widgetTitle textDark text-center">About Me</h4>
                                <div class="aboutWidget__body u-paddingTop30">
                                    <figure class="authorWidget__photo u-marginBottom25">
                                        <img src="{{URL::asset('nguoidung/img/p21-280x150.jpg')}}" alt="">
                                    </figure>
                                    <div class="aboutWidget__info c-socialMediaParent">
                                        <p>Hi, I'm <em>John Doe</em>. I’m a professional blogger from American. I love writing, travel , ice cream and cyan color</p>
                                        <ul class="aboutWidget__socialMedia c-t-socialMedia u-font18">
                                            <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                            <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                            <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                            <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section><!--// widget end -->

                            <!-- widget(popularPost) -->
                            <section class="widget popularPostWidget styleOne u-whiteBg u-shadow-0x0x5--05">
                                <h4 class="widgetTitle textDark  text-center">Popular Post</h4>
                                <ul class="popularPostWidget__body u-marginTop30">

                                    <li>
                                        <figure class="popularPostWidget__thumb">
                                            <a href="#"><img data-transition=".3" data-hover-opacity="8"  src="{{URL::asset('nguoidung/img/p22-80x85.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="popularPostWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Today I choose life. Every the morning when…</a></h3>
                                            <ul class="popularPostWidget__author_category">
                                                <li class="popularPostWidget__author"><a href="#">Mike Doe</a></li>
                                                <li class="popularPostWidget__category u-relative">
                                                    <ul class="ff-openSans">
                                                        <li><a href="#">Life Style</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <figure class="popularPostWidget__thumb">
                                            <a href="#"><img data-transition=".3" data-hover-opacity="8"  src="{{URL::asset('nguoidung/img/p23-80x85.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="popularPostWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Today I choose life. Every the morning when…</a></h3>
                                            <ul class="popularPostWidget__author_category">
                                                <li class="popularPostWidget__author"><a href="#">Mike Doe</a></li>
                                                <li class="popularPostWidget__category u-relative">
                                                    <ul class="ff-openSans">
                                                        <li><a href="#">Life Style</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <figure class="popularPostWidget__thumb">
                                            <a href="#"><img data-transition=".3" data-hover-opacity="8"  src="{{URL::asset('nguoidung/img/p24-80x85.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="popularPostWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Today I choose life. Every the morning when…</a></h3>
                                            <ul class="popularPostWidget__author_category">
                                                <li class="popularPostWidget__author"><a href="#">Mike Doe</a></li>
                                                <li class="popularPostWidget__category u-relative">
                                                    <ul class="ff-openSans">
                                                        <li><a href="#">Life Style</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <figure class="popularPostWidget__thumb">
                                            <a href="#"><img data-transition=".3" data-hover-opacity="8"  src="{{URL::asset('nguoidung/img/p25-80x85.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="popularPostWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Today I choose life. Every the morning when…</a></h3>
                                            <ul class="popularPostWidget__author_category">
                                                <li class="popularPostWidget__author"><a href="#">Mike Doe</a></li>
                                                <li class="popularPostWidget__category u-relative">
                                                    <ul class="ff-openSans">
                                                        <li><a href="#">Life Style</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </section><!--// widget end -->

                            <!-- widget(recent event) -->
                            <section class="widget recentEventWidget styleOne u-whiteBg u-shadow-0x0x5--05">
                                <h4 class="widgetTitle textDark  text-center">Recent Event</h4>
                                <ul class="recentEventWidget__body u-marginTop30">

                                    <li>
                                        <div class="recentEventWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Tomorrow I chooses life. Every the Night when…</a></h3>
                                            <ul class="recentEventWidget__date_vanue">
                                                <li class="recentEventWidget__date"><a href="#">January 25, 2018</a></li>
                                                <li class="recentEventWidget__vanue u-relative"><a href="#">NYC, USA</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="recentEventWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Tomorrow I chooses life. Every the Night when…</a></h3>
                                            <ul class="recentEventWidget__date_vanue">
                                                <li class="recentEventWidget__date"><a href="#">January 25, 2018</a></li>
                                                <li class="recentEventWidget__vanue u-relative"><a href="#">NYC, USA</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="recentEventWidget__content">
                                            <h3 class="  u-font17"><a class="textDark" href="#">Tomorrow I chooses life. Every the Night when…</a></h3>
                                            <ul class="recentEventWidget__date_vanue">
                                                <li class="recentEventWidget__date"><a href="#">January 25, 2018</a></li>
                                                <li class="recentEventWidget__vanue u-relative"><a href="#">NYC, USA</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </section><!--// widget end -->

                            <!-- widget(newsLetter) -->
                            <div  data-sticky_column>
                                <section class="widget newsLetterWidget styleOne u-whiteBg u-shadow-0x0x5--05">
                                    <h4 class="widgetTitle textDark text-center">Newsletter</h4>
                                    <div class="newsLetterWidget__body u-marginTop30 ff-openSans">
                                        <p>Your email address will not be this published. Required fields are marked</p>
                                        <form action="#" class="newsLetterWidget__form">
                                            <input type="email" class="emailHunter u-borderRadius4" placeholder="Your Mail Here">
                                            <input type="submit" class="btnWidget u-borderRadius4" value="Subcribe">
                                        </form>
                                    </div>
                                </section>
                            </div><!--// widget end -->

                        </aside>
                    </div> <!--// col-4 end(sideBar) -->
                </div>
            </div><!--//Section body-->
        </div>
    </section><!--// Recent post End -->

</main>

@endsection