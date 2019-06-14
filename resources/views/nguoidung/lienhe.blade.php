@extends('layouts.nguoidung')
@section('content')
<!-- page title start -->
<section class="pageTitle noBreadcrumbs hasLink">
    <div class="titleWrapper">
        <div class="container">
            <h1>Liên Hệ</h1>
        </div>
    </div>
</section><!--// page title end -->

<main class="u-grayBg">

    <section class="contactUs u-paddingTop60 u-paddingBottom60">
        <div class="container">

            <div class="sectionBody u-whiteBg">
                <div class="row">

                    <div class="col-md-8">
                        <div class="mapWrapper">
                            <div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="{{URL::asset('nguoidung/img/map.jpg')}}" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
                        </div>
                    </div> <!--// col-8 end -->

                    <div class="col-md-4">
                        <div class="contactContent">
                            <h4>Kết Nối</h4>
                            <div class="socialMediaLink c-socialMediaParent">
                                <ul class="c-t-socialMedia">
                                    <li ><a class="c-facebook" href="https://www.facebook.com/thorin198/"><span class="ion-social-facebook"></span></a></li>
                                    <li ><a class="c-twitter" href="https://www.facebook.com/thorin198/"><span class="ion-social-twitter"></span></a></li>
                                    <li ><a class="c-googlePlus" href="https://www.facebook.com/thorin198/"><span class="ion-social-googleplus"></span></a></li>

                                </ul>
                            </div>
                            <h4>Gửi Phản Hồi</h4>
                            <form action="#" class="contactForm" action="" method="POST">
                                <div class="form-row form-group">
                                    <input type="text" placeholder="Họ và Tên..." name="txttennguoiph" value="{{ old('txttennguoiph') }}">
                                </div>
                                <div class="form-row">
                                    <input type="email" placeholder="Email..." name="txtemailnguoiph" value="{{ old('txtemailnguoiph') }}">
                                </div>

                                <div class="form-row">
                                    <textarea placeholder="Nội Dung" name="txtnoidungph" value="{{ old('txtnoidungph') }}"></textarea>
                                </div>
                                <div class="btnWrapper">
                                    <button type="submit" class="btnDef u-widthBlock">Gửi Phản Hồi</button>
                                </div>
                                @csrf
                                <div class="form-group">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            <p>{{ session('success') }}</p>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <b>Lỗi!! Bạn vui vòng kiểm tra lại:</b>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div> <!--// col-4 end -->

                </div><!--// row end -->
            </div>

        </div><!--// container end -->
    </section>

    <!-- instagram gallery start -->
    <section class="instagramGal u-whiteBg sec-pad60">
        <div class="container">
            <!--Section header-->
            <header class="sectionHeader text-center u-marginBottom40">
                <div class="sectionHeader__wrapper">
                    <h2 class="u-fontWeightBold textDark">Follow Instagram</h2>
                    <p class="text-lightDark">Dependent certainty off discovery him his times tolerably offending. <br class="hidden-xs"> Ham for attention remainde sometimes.</p>
                </div>
            </header><!--// Section header end-->

            <!--Section body -->
            <div class="sectionBody">
                <div class="row u-paddingBottom10">
                    <div class="col-sm-2 col-xs-6 u-padding0">
                        <div class="instagramGal__block styleOne">
                            <figure>
                                <a href="#"><img src="{{URL::asset('nguoidung/img/p38-195x195.jpg')}}" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 u-padding0">
                        <div class="instagramGal__block styleOne">
                            <figure>
                                <a href="#"><img src="{{URL::asset('nguoidung/img/p39-195x195.jpg')}}" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 u-padding0">
                        <div class="instagramGal__block styleOne">
                            <figure>
                                <a href="#"><img src="{{URL::asset('nguoidung/img/p40-195x195.jpg')}}" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 u-padding0">
                        <div class="instagramGal__block styleOne">
                            <figure>
                                <a href="#"><img src="{{URL::asset('nguoidung/img/p41-195x195.jpg')}}" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 u-padding0">
                        <div class="instagramGal__block styleOne">
                            <figure>
                                <a href="#"><img src="{{URL::asset('nguoidung/img/p42-195x195.jpg')}}" alt=""></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 u-padding0">
                        <div class="instagramGal__block styleOne">
                            <figure>
                                <a href="#"><img src="{{URL::asset('nguoidung/img/p43-195x195.jpg')}}" alt=""></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div> <!--// Section body end -->
        </div>
    </section> <!--// instagram gallery end -->

</main>
@endsection