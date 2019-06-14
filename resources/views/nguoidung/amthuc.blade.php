
@extends('layouts.nguoidung')
@section('content')
    <section class="pageTitle noBreadcrumbs hasLink">
        <div class="titleWrapper">
            <div class="container">
                <h1>Ẩm Thực</h1>
            </div>
        </div>
    </section><!--// page title end -->
    <!-- Main Content Area Start-->
    <main class="u-grayBg">
        <div class="categoryPostPage categoryPostContent u-paddingTop60 u-paddingBottom60">
            <div class="container">

                <div class="sectionBody">
                    <div class="row u-flex" data-sticky_parent>

                        <div class="col-md-8">
                            <div class="recentPostContainer">

                                @foreach ($baiviets as $baiviet)
                                    <article class="defPost styleFour u-marginBottom40">
                                        <div class="row">
                                            <div class="col-sm-4 u-lg-paddingRight45">
                                                <figure class="imageZoom__parent">
                                                    <a href="baiviet/{{$baiviet->duongdanbv}}"><img class="imageZoom__el" src="{{URL::asset($baiviet->linkanhmota)}}" alt=""></a>
                                                </figure>
                                            </div>
                                            <div class="col-sm-8 n-lg-marginLeft20">
                                                <div class="defPost__content">
                                                    <ul class="defPost__category">
                                                        <li><a href="/amthuc"> {{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=',$baiviet->macm)
														->get('tencm')[0]->tencm
		                                }}</a> </li>
                                                    </ul>
                                                    <h4 class="  u-marginBottom5 u-marginTop20 u-fontWeightBold">
                                                        <a href="baiviet/{{$baiviet->duongdanbv}}">{{$baiviet->tenbv}}</a>
                                                    </h4>
                                                    <ul class="defPost__meta">

                                                        <li class="author">

                                                            By:
                                                            {{
                                        DB::table('users')	->select('name')
                                                            ->where('id','=',$baiviet->matv)
                                                            ->get('name')[0]->name
                                    }}


                                                        </li>

                                                        </li>

                                                        <li class="post-date">
                                                            <time datetime="2014-10-10">{{$baiviet->updated_at}}</time>
                                                        </li>
                                                    </ul>
                                                    <div class="postText u-marginTop15">
                                                        <p>{{$baiviet->tomtatnoidungbv}}</p>
                                                    </div>
                                                    <div class="postBottom">
                                                        <a href="baiviet/{{$baiviet->duongdanbv}}" class="btnBorder u-borderRadius4">Reading</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article> @endforeach
                                    <div class="sectionLoadMore text-right">
                                        <a href="#" class="btnBorder u-whiteBg u-borderRadius4 u-inlineBlock u-upperCase u-font17">Xem Tiếp
                                            <span class="u-marginLeft5 u-font20 u-relative u-top2 u-inlineBlock">
                                            <i class="ion-ios-arrow-forward"></i>
                                        </span>
                                        </a>
                                    </div>
                            </div> <!--//recentPostContainer end-->
                        </div> <!--//col-8 end-->


                        <div class="col-md-4">
                            <aside class="sideBar styleFour rightSideBar">
                                <!--widget(Social Media) -->
                                <section class="widget socialMedia styleTwo">
                                    <h4 class="widgetTitle textDark c-headingUnderLine c-headingUnderLine--styleTwo">Stay Connected</h4>
                                    <div class="socialMediaWidget__body u-marginTop30">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="#">
                                                    <span class="icon"><i class="ion-social-facebook"></i></span>
                                                    <span class="count">256.6K</span>
                                                    <span class="status">Like</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#">
                                                    <span class="icon"><i class="ion-social-twitter"></i></span>
                                                    <span class="count">256.6K</span>
                                                    <span class="status">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="rss" href="#">
                                                    <span class="icon"><i class="ion-social-rss"></i></span>
                                                    <span class="count">256.6K</span>
                                                    <span class="status">Following</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </section><!--//widget end -->

                                <!--widget (popular post) -->
                                <section class="widget popularPostWidget styleTwo">
                                    <h4 class="widgetTitle textDark c-headingUnderLine c-headingUnderLine--styleTwo">Popular Post</h4>
                                    <ul class="popularPostWidget__body u-marginTop30">

                                        <li>
                                            <figure class="popularPostWidget__thumb">
                                                <a href="#"><img data-transition=".3" data-hover-opacity="8" src="{{URL::asset('nguoidung/img/p153-80x90.jpg')}}" alt=""></a>
                                            </figure>
                                            <div class="popularPostWidget__content">
                                                <ul class="popularPostWidget__category u-relative">
                                                    <li><a href="#">Fashion</a></li>
                                                    <li><a href="#">Life Style</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">8 Classic Homemade Cake
                                                    Recipe Every Baker Will Love</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p75-25x25.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffinthemes</a>
                                                    at <span>25 Jully, 2018</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <figure class="popularPostWidget__thumb">
                                                <a href="#"><img data-transition=".3" data-hover-opacity="8" src="{{URL::asset('nguoidung/img/p154-80x90.jpg')}}" alt=""></a>
                                            </figure>
                                            <div class="popularPostWidget__content">
                                                <ul class="popularPostWidget__category u-relative">
                                                    <li><a href="#">Fashion</a></li>
                                                    <li><a href="#">Life Style</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">Today I choose life. Every the morning when…</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p75-25x25.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffinthemes</a>
                                                    at <span>25 Jully, 2018</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <figure class="popularPostWidget__thumb">
                                                <a href="#"><img data-transition=".3" data-hover-opacity="8" src="{{URL::asset('nguoidung/img/p155-80x90.jpg')}}" alt=""></a>
                                            </figure>
                                            <div class="popularPostWidget__content">
                                                <ul class="popularPostWidget__category u-relative">
                                                    <li><a href="#">Fashion</a></li>
                                                    <li><a href="#">Life Style</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">The 66 Best Places for a
                                                    French Soup in Paris</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p75-25x25.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffinthemes</a>
                                                    at <span>25 Jully, 2018</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <figure class="popularPostWidget__thumb">
                                                <a href="#"><img data-transition=".3" data-hover-opacity="8" src="{{URL::asset('nguoidung/img/p156-80x90.jpg')}}" alt=""></a>
                                            </figure>
                                            <div class="popularPostWidget__content">
                                                <ul class="popularPostWidget__category u-relative">
                                                    <li><a href="#">Fashion</a></li>
                                                    <li><a href="#">Life Style</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">20 Blissfully Easy Desserts
                                                    You Can Make With Your ...</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p75-25x25.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffinthemes</a>
                                                    at <span>25 Jully, 2019</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </section><!--//widget end-->

                                <!-- widget(popular category)-->
                                <section class="widget popularCategoryWidget styleThree">
                                    <h4 class="widgetTitle textDark c-headingUnderLine c-headingUnderLine--styleTwo">Popular Categories</h4>
                                    <div class="popularCategoryWidget__body u-marginTop30">
                                        <ul>
                                            <li><a class="collapsed hasChildUl" data-toggle="collapse" aria-expanded="true"  href="#cat-colps-1">Fashion</a>
                                                <ul id="cat-colps-1" class="collapse" aria-expanded="true">
                                                    <li><a href="#">Inspiration</a></li>
                                                    <li><a href="#">Travel</a></li>
                                                    <li><a href="#">Photography</a></li>
                                                    <li><a href="#">Feature Post</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="collapsed hasChildUl"  data-toggle="collapse" href="#cat-colps-2" aria-expanded="true">Life Style</a>
                                                <ul aria-expanded="true" id="cat-colps-2" class="collapse">
                                                    <li><a href="#">Fashion</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="noChildUl"  href="#">Inspiration</a></li>
                                            <li><a class="noChildUl"  href="#">Travel</a></li>
                                            <li><a class="noChildUl"  href="#">Photography</a></li>
                                            <li><a class="noChildUl"  href="#">Feature Post</a></li>
                                        </ul>
                                    </div>
                                </section><!--//widget end-->

                                <!-- widget(popular category)-->
                                <section class="widget newsLetterWidget styleFour">
                                    <h4 class="widgetTitle textDark c-headingUnderLine c-headingUnderLine--styleTwo">Newsletter</h4>
                                    <div class="newsLetterWidget__body u-marginTop30">
                                        <p>Your email address will not be this published. Required fields are marked</p>
                                        <form action="#" class="newsLetterWidget__form">
                                            <input type="email" class="emailHunter" placeholder="Your Mail Here">
                                            <button type="submit" class="btnWidget"><span class="ion-paper-airplane"></span></button>
                                        </form>
                                    </div>
                                </section><!--//widget end-->


                                <div  data-sticky_column>

                                    <!-- widget (image banner)-->
                                    <section class="widget singleImageWidget styleTwo">
                                        <div class="singleImageWidget__body">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{URL::asset('nguoidung/img/p157-350x280.jpg')}}" alt="">
                                                </a>
                                                <figcaption>
                                                    <div>
                                                        <h4 class="  u-fontWeightBold u-margin0 textWhite">Place Your Banner Text</h4>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </section><!--//widget end-->

                                </div>
                            </aside>
                        </div> <!-- sidebar col -->

                    </div><!--// row end -->
                </div>
            </div>
        </div><!--//post area End -->
    </main>
@endsection
