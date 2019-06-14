@extends('layouts.nguoidung')
@section('header','King Naut')
@section('content')

    <main class="u-grayBg">

        <!-- featured post start -->
        <div class="featuredPostArea u-paddingTop30">
            <div class="container">
                <div class="row u-row20">

                    <!-- post item -->
                    <div class="col-sm-7 u-col20">
                        <article class="featuredPost styleFour u-bottomOverlay u-bottomOverlay--eventNone u-xs-marginBottom20">
                            <div class="featuredPost__thumb">
                                <img src="{{URL::asset(DB::table('baiviets')
                                                        ->select('linkanhmota')
														->where('id','=',1)
														->get('linkanhmota')[0]->linkanhmota)}}" alt="" height="550px">
                            </div>
                            <div class="featuredPost__content">
                                <ul class="featuredPost__category">
                                    <li><a href="{{URL::asset(
		                			DB::table('chuyenmucs')	->select('duongdancm')
														->where('id','=','1')
														->get('duongdancm')[0]->duongdancm
		                                )}}">{{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=','1')
														->get('tencm')[0]->tencm
		                                }}</a></li>
                                </ul>
                                <h5 class="  u-fontWeightBold u-margin0 u-font25">
                                    <a  href="{{URL::asset('/baiviet/'.
		                			DB::table('baiviets')	->select('duongdanbv')
														->where('id','=',1)
														->get('duongdanbv')[0]->duongdanbv
		                                )}}">{{
		                			DB::table('baiviets')	->select('tenbv')
														->where('id','=','1')
														->get('tenbv')[0]->tenbv
		                                }}</a>
                                </h5>
                                <div class="featuredPost__meta">
                                    <div class="featuredPost__author">
                                        <img class="author-pic" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                        <a href="#" class="author-name"> {{
		                			DB::table('users')	->select('name')
														->where('id','=','1')
														->get('name')[0]->name
		                                }}</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!--//post item end-->
                    <div class="col-sm-5 u-col20">
                        <article class="featuredPost featuredPost--min styleFour smControl u-bottomOverlay u-bottomOverlay--eventNone">
                            <div class="featuredPost__thumb">
                                <img src="{{URL::asset(
		                			DB::table('baiviets')	->select('linkanhmota')
														->where('id','=',3)
														->get('linkanhmota')[0]->linkanhmota
		                                )}}" alt="" height="275px">
                            </div>
                            <div class="featuredPost__content">
                                <ul class="featuredPost__category">
                                    <li><a href="#">{{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=','4')
														->get('tencm')[0]->tencm
		                                }}</a></li>
                                </ul>
                                <h5 class="  u-fontWeightBold u-margin0">
                                    <a  href="{{URL::asset('/baiviet/'.
		                			DB::table('baiviets')	->select('duongdanbv')
														->where('id','=',3)
														->get('duongdanbv')[0]->duongdanbv
		                                )}}">{{
		                			DB::table('baiviets')	->select('tenbv')
														->where('id','=','3')
														->get('tenbv')[0]->tenbv
		                                }}</a>
                                </h5>
                                <div class="featuredPost__meta">
                                    <div class="featuredPost__author">
                                        <img class="author-pic" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                        <a href="#" class="author-name"> {{
		                			DB::table('users')	->select('name')
														->where('id','=','1')
														->get('name')[0]->name
		                                }}</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!--//post item end-->

                    <!-- post item -->
                    <div class="col-sm-5 u-col20">
                        <article class="featuredPost featuredPost--min styleFour smControl u-bottomOverlay u-bottomOverlay--eventNone">
                            <div class="featuredPost__thumb">
                                <img src="{{URL::asset(
		                			DB::table('baiviets')	->select('linkanhmota')
														->where('id','=',2)
														->get('linkanhmota')[0]->linkanhmota
		                                )}}" alt="" height="275px">
                            </div>
                            <div class="featuredPost__content">
                                <ul class="featuredPost__category">
                                    <li><a href="#">{{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=','3')
														->get('tencm')[0]->tencm
		                                }}</a></li>
                                </ul>
                                <h5 class="  u-fontWeightBold u-margin0">
                                    <a  href="{{URL::asset('/baiviet/'.
		                			DB::table('baiviets')	->select('duongdanbv')
														->where('id','=',2)
														->get('duongdanbv')[0]->duongdanbv
		                                )}}">{{
		                			DB::table('baiviets')	->select('tenbv')
														->where('id','=','2')
														->get('tenbv')[0]->tenbv
		                                }}</a>
                                </h5>
                                <div class="featuredPost__meta">
                                    <div class="featuredPost__author">
                                        <img class="author-pic" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                        <a href="#" class="author-name"> {{
		                			DB::table('users')	->select('name')
														->where('id','=','1')
														->get('name')[0]->name
		                                }}</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div><!--//post item end-->

                </div>
            </div>
        </div><!--//featured post end -->

        <!-- Trending Post start -->
        <section class="trendingPost sec-pad60">
            <div class="container">
                <div class="sectionContainer-bg">
                    <header class="sectionHeader text-center u-marginBottom40">
                        <h2 class="  u-fontWeightBold textDark u-inlineBlock u-marginBottom50 c-headingUnderLine c-headingUnderLine--styleTwo">NEWS <span class="textHighLight"> POST</span></h2>
                    </header>

                    <div class="sectionBody">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div  class="trendingPostWrapper">


                                        @foreach($bvdau as $top3)
                                        <!--post item -->
                                        <div class="trendingPost__item col-sm-4 u-xs-marginBottom30">
                                            <article class="trendingPost styleTwo u-relative u-noOverFolow">
                                                <div class="u-noOverFolow">
                                                    <header class="trendingPost__header">
                                                        <figure class="trendingPost__thumb">
                                                            <a href="nguoidungs/{{$top3->duongdanbv}}"><img  src="{{URL::asset($top3->linkanhmota)}}" height="250px" alt=""></a>
                                                        </figure>
                                                    </header>
                                                    <div class="trendingPost__content">
                                                        <h5 class="u-font21   u-marginBottom5 u-marginTop0 u-fontWeightBold">
                                                            <a  href="nguoidungs/{{$top3->duongdanbv}}">{{$top3->tenbv}}</a>
                                                        </h5>
                                                        <div class="trendingPost__meta">
                                                            <div class="trendingPost__author">
                                                                <img class="author-pic" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                                                <a href="#" class="author-name">{{
                                                                DB::table('chuyenmucs')
		                			                    ->select('tencm')
														->where('id','=',$top3->macm)
														->get('tencm')[0]->tencm
                                                                }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div><!--//post item end-->
                                            @endforeach

                                    </div> <!--//trendingPostWrapper end-->
                                </div><!--// row end -->
                            </div>
                        </div>
                    </div> <!--//sectionBody end -->
                </div>
            </div>
        </section><!--//Trending Post end -->

        <!-- Recent post area start -->
        <div class="recentPostArea u-paddingTop20">
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
                                                <a href="baiviet/{{$baiviet->duongdanbv}}"><img class="imageZoom__el" src="{{URL::asset($baiviet->linkanhmota)}}" height="250" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="col-sm-8 n-lg-marginLeft20">
                                            <div class="defPost__content">
                                                <ul class="defPost__category">
                                                    <li><a href="/{slug}"> {{
		                			                    DB::table('chuyenmucs')
		                			                    ->select('tencm')
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

                                                    <li class="post-date">
                                                        <time datetime="2014-10-10">{{$baiviet->updated_at}}</time>
                                                    </li>
                                                <br>
                                                    <li class="author">Lượt xem:  {{$baiviet->luotxem}} </li>
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

                                    <nav>
                                        {!! $baiviets->links() !!}
                                    </nav>
                            </div> <!--//recentPostContainer end-->
                        </div> <!--//col-8 end-->

                        <div class="col-md-4">
                            <aside class="sideBar styleFour rightSideBar u-xs-paddingTop30">
                                <!--widget(Social Media) -->
                                <section class="widget socialMedia styleTwo">
                                    <h4 class="widgetTitle textDark c-headingUnderLine c-headingUnderLine--styleTwo">Kết Nối</h4>
                                    <div class="socialMediaWidget__body u-marginTop30">
                                        <ul>
                                            <li>
                                                <a class="facebook" href="https://www.facebook.com/Amateurcook-Gi%C3%BAp-b%E1%BA%A1n-v%C3%A0o-b%E1%BA%BFp-468405823621749/?modal=admin_todo_tour">
                                                    <span class="icon"><i class="ion-social-facebook"></i></span>
                                                    <span class="count">256.6K</span>
                                                    <span class="status">Like</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="https://www.facebook.com/Amateurcook-Gi%C3%BAp-b%E1%BA%A1n-v%C3%A0o-b%E1%BA%BFp-468405823621749/?modal=admin_todo_tour">
                                                    <span class="icon"><i class="ion-social-twitter"></i></span>
                                                    <span class="count">256.6K</span>
                                                    <span class="status">Following</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="rss" href="https://www.facebook.com/Amateurcook-Gi%C3%BAp-b%E1%BA%A1n-v%C3%A0o-b%E1%BA%BFp-468405823621749/?modal=admin_todo_tour">
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
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Tomato</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">8 Classic Homemade Cake
                                                        Recipe Every Baker Will Love</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffintheme</a>
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
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Biriyani</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">Today I choose life. Every the morning when…</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffintheme</a>
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
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Burger</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">The 66 Best Places for a
                                                        French Soup in Paris</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author"> Puffintheme</a>
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
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Burger</a></li>
                                                </ul>
                                                <h3 class="  u-font17"><a class="textDark" href="#">20 Blissfully Easy Desserts
                                                        You Can Make With Your ...</a></h3>
                                                <div class="popularPostWidget__meta">
                                                    <img class="" src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                                    <a href="#" class="popularPost__author">Puffintheme</a>
                                                    at <span>25 Jully, 2019</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </section><!--//widget end-->

                                <!-- widget(popular category)-->


                                <!-- widget(popular category)-->



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
                                                        <h4 class="  u-fontWeightBold u-margin0 textWhite">Đặt quảng cáo tại đây vui lòng liên hệ.</h4>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </section><!--//widget end-->

                                </div>
                            </aside>
                        </div> <!-- sidebar col -->
                    </div>
                </div>


                <footer class="sectionFooter u-paddingTop10 u-paddingBottom80">

                </footer>

            </div>
        </div><!--//Recent post area End -->


        <!-- instagram gallery start -->
        <div class="instagramGal instagramGal--fluid">
            <div class="container-fluid">
                <div class="sectionBody">
                    <div class="row">
                        <div class="col-sm-2 col-xs-6 u-padding0">
                            <div class="instagramGal__block styleTwo multiply">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/p158-240x240.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6 u-padding0">
                            <div class="instagramGal__block styleTwo multiply">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/p159-240x240.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6 u-padding0">
                            <div class="instagramGal__block styleTwo multiply">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/p160-240x240.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6 u-padding0">
                            <div class="instagramGal__block styleTwo multiply">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/p161-240x240.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6 u-padding0">
                            <div class="instagramGal__block styleTwo multiply">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/p162-240x240.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6 u-padding0">
                            <div class="instagramGal__block styleTwo multiply">
                                <figure>
                                    <a href="#"><img src="{{URL::asset('nguoidung/img/p163-240x240.jpg')}}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div><!--//sectionBody end -->
            </div>
        </div><!--// instagram gallery end -->

    </main>

@endsection