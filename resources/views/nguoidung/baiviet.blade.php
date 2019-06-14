@extends('layouts.nguoidung')
@section('content')

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


    <!-- page title start -->
    <div class="pageTitle hasBreadcrumbs">

        <div class="breadcrumbsArea">
          <div class="container">
            <div class="breadcrumbsWrapper">
              <div class="breadcrumbs">
                <span>
                  <a href="/">Trang chủ</a>
                </span>
                <span class="separetor">/</span>
                <span>
                   <a href="/amthuc"> {{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=',$baiviet['macm'])
														->get('tencm')[0]->tencm
		                                }}</a>
                </span>
                <span class="current">{{$baiviet['tenbv']}}</span>
              </div>
            </div>
          </div>
        </div><!--//breadcrumbs area end-->

    </div><!--//page title end -->

    <main class="u-grayBg">

        <!-- Recent post area start -->
        <div class="singlePostArea u-paddingTop60">
            <div class="container">

                <div class="sectionBody u-paddingBottom60">
                    <div class="row u-flex" data-sticky_parent>
                    <div class="col-md-8">
                            <div class="singlePostContainer">
                                <article class="singlePost styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom40 galleryPostFormat">

                                            <header class="singlePost__postHeader"><!--p5-770x390-->
                                                <figure class="singlePost__postThumb galleryThumb owl-carousel">
                                                    <img data-transition='.3' data-hover-opacity="9" src="{{URL::asset($baiviet['linkanhmota'])}}" alt="">
                                                    <img data-transition='.3' data-hover-opacity="9" src="{{URL::asset($baiviet['linkanhmota'])}}" alt="">
                                                </figure>
                                                <div class="singlePost__date ff-Playfair u-absolute u-top20 u-left20 u-zIndex-p10 textWhite u-padding0x20">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font17" datetime="2017-03-25">{{$baiviet['updated_at']}}</time>
                                                </div>
                                            </header>

                                            <div class="singlePost__content">
                                                <h3 class="  u-fontWeight600 u-marginBottom10 postTitle"><a class="textDark" href="/baiviet/{{$baiviet['duongdanbv']}}">{{$baiviet['tenbv']}}</a></h3>
                                                <ul class="singlePost__author_category u-font17 u-xs-font14 u-fontWeight600">
                                                    <li class="singlePost__author u-inlineBlock"><a href="#">  {{$user->name}}</a></li>
                                                    <li class="singlePost__category u-relative u-paddingLeft15 u-marginLeft10 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="#">{{$chuyenmuc->tencm}}</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                    <div class="postText u-paddingTop20">
                                                        <h4>{{$baiviet['tomtatnoidung']}}</h4>

                                                    {!! $baiviet['noidungbv'] !!}

                                                        <h3>BY: {{$user->name}}</h3>

                                                </div>
                                            </div>


                                            <footer class="singlePost__footer">
                                                <div class="singlePost__share c-socialMediaParent">
                                                    <ul class="aboutWidget__socialMedia c-t-socialMedia u-font18">
                                                        <li ><a class="c-facebook" href="#"><span class="ion-social-facebook"></span></a></li>
                                                        <li ><a class="c-twitter" href="#"><span class="ion-social-twitter"></span></a></li>
                                                        <li ><a class="c-googlePlus" href="#"><span class="ion-social-googleplus"></span></a></li>
                                                        <li ><a class="c-tumblr" href="#"><span class="ion-social-tumblr"></span></a></li>
                                                    </ul>
                                                </div>
                                            </footer>

                                        </article>
                            </div> <!--//PostContainer end-->

                            <div class="postPrevNext u-whiteBg u-shadow-0x0x5--05 hidden-xs">
                                <div class="prevPost col left">
                                    <h6 class="ctrl"><a href="
                                    {{DB::table('chuyenmucs')	->select('duongdancm')
                                            ->where('id','>=',$baiviet['id'])
                                            ->get('duongdancm')[0]->duongdancm}}">
                                            {{
                                    DB::table('chuyenmucs')	->select('tencm')
                                            ->where('id','>=',$baiviet['id'])
                                            ->get('tencm')[0]->tencm}}</a></h6>
                                    <h5><a href="/baiviet/
                                         {{
                                    DB::table('baiviets')	->select('duongdanbv')
                                            ->where('id','>=',$baiviet['id'])
                                            ->get('duongdanbv')[0]->duongdanbv}}">
                                            {{
                                    DB::table('baiviets')	->select('tenbv')
                                            ->where('id','>=',$baiviet['id'])
                                            ->get('tenbv')[0]->tenbv}}</a></h5>
                                </div>
                                <div class="nextPost col right">
                                    <h6 class="ctrl"><a href="{{DB::table('chuyenmucs')	->select('duongdancm')
                                            ->where('id','<=',$baiviet['id'])
                                            ->get('duongdancm')[0]->duongdancm}}">
                                            {{
                                    DB::table('chuyenmucs')	->select('tencm')
                                            ->where('id','<=',$baiviet['id'])
                                            ->get('tencm')[0]->tencm}}</a></h6>
                                    <h5><a href="/baiviet/{{
                                    DB::table('baiviets')	->select('duongdanbv')
                                            ->where('id','<=',$baiviet['id'])
                                            ->get('duongdanbv')[0]->duongdanbv}}">
                                            {{
                                    DB::table('baiviets')	->select('tenbv')
                                            ->where('id','<=',$baiviet['id'])
                                            ->get('tenbv')[0]->tenbv}}</a></h5>
                                </div>
                            </div>

                            <!-- releted post -->
                            <div class="reletedPostArea u-paddingBottom60">
                                <div class="related__top text-center">
                                    <h4 class="u-marginTop55 u-marginBottom30">Có thể bạn sẽ thích </h4>
                                </div>
                                <div class="row u-flex">

                                    <div class="col-sm-6 u-flex u-xs-marginBottom30">
                                        <article class="defPost u-noOverFolow defPost defPost--oneHalf u-flex u-flex--contentSpace u-flex--dir_col u-heightBlock styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom30">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb imageZoom__parent">
                                                    <a href="#"><img class="imageZoom__el" src="{{URL::asset(DB::table('baiviets')
                                                        ->select('linkanhmota')
														->where('id','=',1)
														->get('linkanhmota')[0]->linkanhmota)}}" alt=""></a>
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font15" datetime="2017-03-25">"{{DB::table('baiviets')
                                                        ->select('created_at')
														->where('id','=',1)
														->get('created_at')[0]->created_at}}"</time>
                                                </div>
                                            </header>
                                            <div class="defPost__content u-padding0x30">
                                                <h5 class="  u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                    <a class="textDark" href="{{URL::asset(
		                			DB::table('baiviets')	->select('duongdanbv')
														->where('id','=','1')
														->get('duongdanbv')[0]->duongdanbv
		                                )}}"> {{DB::table('baiviets')
                                                        ->select('tenbv')
														->where('id','=',1)
														->get('tenbv')[0]->tenbv
                                                    }}</a>
                                                </h5>
                                                <ul class="defPost__author_category u-font15">
                                                    <li class="defPost__author u-inlineBlock"><a href="#">{{
		                			DB::table('users')	->select('name')
														->where('id','=','1')
														->get('name')[0]->name
		                                }}</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft10 u-marginLeft5 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="{{URL::asset(
		                			DB::table('chuyenmucs')	->select('duongdancm')
														->where('id','=','1')
														->get('duongdancm')[0]->duongdancm
		                                )}}">{{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=','1')
														->get('tencm')[0]->tencm
		                                }}</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop15 u-paddingBottom10">
                                                    <p>{{DB::table('baiviets')
                                                        ->select('tomtatnoidung')
														->where('id','=',1)
														->get('tomtatnoidung')[0]->tomtatnoidung}}</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer clear u-padding0x30">
                                                <div class="read-more pull-left">
                                                    <a class="u-font15 u-relative u-fontWeight600" href="{{URL::asset(
		                			DB::table('baiviets')	->select('duongdanbv')
														->where('id','=','1')
														->get('duongdanbv')[0]->duongdanbv
		                                )}}">Read More</a>
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
                                    </div>
                                    <div class="col-sm-6 u-flex">
                                        <article class="defPost u-noOverFolow defPost defPost--oneHalf u-flex u-flex--contentSpace u-flex--dir_col u-heightBlock styleOne u-relative u-whiteBg u-shadow-0x0x5--05 u-paddingBottom30">
                                            <header class="defPost__postHeader">
                                                <figure class="defPost__postThumb imageZoom__parent">
                                                    <a href="#"><img class="imageZoom__el" src="{{URL::asset(DB::table('baiviets')
                                                        ->select('linkanhmota')
														->where('id','=',3)
														->get('linkanhmota')[0]->linkanhmota)}}" alt=""></a>
                                                </figure>
                                                <div class="defPost__date ff-Playfair textWhite">
                                                    <span class="timeIcon u-marginRight5"><i class="ion-android-time"></i></span>
                                                    <time class="u-font15" datetime="2017-03-25">{{DB::table('baiviets')
                                                        ->select('created_at')
														->where('id','=',3)
														->get('created_at')[0]->created_at}}</time>
                                                </div>
                                            </header>
                                            <div class="defPost__content u-padding0x30">
                                                <h5 class="  u-fontWeight600 u-marginTop25 u-marginBottom10">
                                                    <a class="textDark" href="{{URL::asset(
		                			DB::table('baiviets')	->select('duongdanbv')
														->where('id','=','3')
														->get('duongdanbv')[0]->duongdanbv
		                                )}}"> {{DB::table('baiviets')
                                                        ->select('tenbv')
														->where('id','=',3)
														->get('tenbv')[0]->tenbv
                                                    }}</a>
                                                </h5>
                                                <ul class="defPost__author_category u-font15">
                                                    <li class="defPost__author u-inlineBlock"><a href="#">{{
		                			DB::table('users')	->select('name')
														->where('id','=','1')
														->get('name')[0]->name
		                                }}</a></li>
                                                    <li class="defPost__category u-relative u-paddingLeft10 u-marginLeft5 u-inlineBlock">
                                                        <ul class="ff-openSans  u-inlineBlock">
                                                            <li class="u-inlineBlock"><a href="{{URL::asset(
		                			DB::table('chuyenmucs')	->select('duongdancm')
														->where('id','=','4')
														->get('duongdancm')[0]->duongdancm
		                                )}}">{{
		                			DB::table('chuyenmucs')	->select('tencm')
														->where('id','=','4')
														->get('tencm')[0]->tencm
		                                }}</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="postText u-paddingTop15 u-paddingBottom10">
                                                    <p>{{DB::table('baiviets')
                                                        ->select('tomtatnoidung')
														->where('id','=',3)
														->get('tomtatnoidung')[0]->tomtatnoidung}}</p>
                                                </div>
                                            </div>
                                            <footer class="defPost__footer clear u-padding0x30">
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
                                        </article>
                                    </div>

                                </div>
                            </div><!--//releted post end-->

                            <!--post response-->
                            <div class="postResponse u-whiteBg u-shadow-0x0x5--05">
                                <h4 class="u-margin0 text-center">Nhận Xét</h4>
                                <div class="responseTab u-marginTop50">

                                    <div class="full__Wrap">
                                        <form action="{{route('post-bl')}}" method="POST">
                                            @csrf
                                            <div class="form__row" >
                                                <textarea placeholder="Viết bình luận của bạn.." name="txtnoidungbl"></textarea>
                                            </div>
                                            <div class="form__row">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input class="input firstChild" type="text" placeholder="Tên của bạn" name="txttennguoibl">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input class="input" type="email" placeholder="Email của bạn" name="txtemailnguoibl">
                                                    </div>
                                                    <input type="hidden" name="txtmabv" value="{{$baiviet['id'] }}" />

                                                </div>
                                            </div>
                                            <div class="form__row">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button type="submit">Gửi Bình Luận</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!--// full__Wrap end -->
                                </div>
                            </div><!--//post response end -->


                            <!-- post comments-->
                            <div class="commentsArea u-shadow-0x0x5--05 u-whiteBg u-marginTop50">
                                <div class="comments__Wrapper">
                                <h4 class="comments__Title text-center u-margin0">25 Bình Luận</h4>
                                   @foreach($binhluan as $bl)
                                    <ol class="comment-list u-marginTop50">
                                        <li class="comment parent">

                                            <article class="comment-body">
                                              <div class="comment-meta">
                                                <div class="author-pic">
                                                  <img src="{{URL::asset('nguoidung/img/p32-110x110.jpg')}}" alt="">
                                                </div>
                                                <div class="comment-metadata">
                                                  <h4 class="author-name"><a href="#">{{$bl->tennguoibl}}</a></h4>
                                                    <time datetime="2018-02-14 20:00">{{$bl->updated_at}}</time>
                                                    </div>

                                              </div>
                                              <div class="comment-content">
                                                <p>{{$bl->noidungbl}}</p>
                                              </div>
                                            </article>

                                        </li>

                                    </ol>@endforeach
                                </div>
                            </div>
                        </div> <!--//col-8 end-->

                        <div class="col-md-4 hidden-xs">
                            <aside class="sideBar styleOne rightSideBar">

                                <!-- widget(about) -->
                                <section class="widget aboutWidget styleOne u-whiteBg u-shadow-0x0x5--05">
                                    <h4 class="widgetTitle textDark text-center">About Me</h4>
                                    <div class="aboutWidget__body u-paddingTop30">
                                        <figure class="authorWidget__photo u-marginBottom25">
                                            <img src="{{URL::asset('nguoidung/img/p21-280x150.jpg')}}" alt="">
                                        </figure>
                                        <div class="aboutWidget__info c-socialMediaParent">
                                            <p>Hi, Tôi Là <em>Nguyễn Mạnh Tuấn</em>. Tôi Là Một blogger của Việt Nam, tôi thích viết lách, ăn uống, du lịch và thích những sự đơn giản.  </p>
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


                                    <!-- widget (image banner)-->






                                <!-- widget(newsLetter) -->
                                <div  data-sticky_column>

                                    <section class="widget newsLetterWidget styleOne u-whiteBg u-shadow-0x0x5--05">
                                        <h4 class="widgetTitle textDark text-center">Nhận Tin Mới Mới Nhất</h4>
                                        <div class="newsLetterWidget__body u-marginTop30 ff-openSans">
                                            <p>Địa chỉ email của bạn là hoàn toàn bảo mật . Vui lòng nhập email để nhận tin mới nhất.</p>
                                            <form action="#" class="newsLetterWidget__form">
                                                <input type="email" class="emailHunter u-borderRadius4" placeholder="Nhập email của bạn...">
                                                <input type="submit" class="btnWidget u-borderRadius4" value="Đăng Kí">
                                            </form>
                                        </div>


                                    </section>
                                    <section class="widget singleImageWidget styleTwo">
                                        <div class="singleImageWidget__body">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{URL::asset('nguoidung/img/p157-350x280.jpg')}}"  alt="">
                                                </a>
                                                <figcaption>
                                                    <div>
                                                        <h4 class="  u-fontWeightBold u-margin0 textWhite">Đặt quảng cáo tại đây vui lòng vào liên hệ.</h4>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </section>
                                </div><!--// widget end -->

                            </aside>

                        </div> <!--// col-4 end(sideBar) -->

                    </div>
                </div>
            </div>
        </div><!--//post area End -->

    </main>


@endsection