@extends('layouts.nguoidung')
@section('content')
<!-- page title start -->
<section class="pageTitle noBreadcrumbs">
    <div class="titleWrapper">
        <div class="container">
            <h1>Not Found</h1>
        </div>
    </div>
</section><!--// page title end -->

<!-- Main Content Area Start-->
<main class="u-grayBg">

    <!-- Recent post area start -->
    <section class="page404 u-paddingTop60 u-paddingBottom60">
        <div class="container">
            <!--Section body-->
            <div class="sectionBody">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper404 text-center u-shadow-0x0x5--05">
                            <div class="textTop">
                                <h3 class="text404">404</h3>
                                <h4 class="textWorning">Page Not Found</h4>
                                <p>Dependent certainty off discovery him his times tolerably offending. <br class="hidden-xs"> Ham for attention remainde sometime</p>
                                <a href="/" class="btnDef text-uppercase">Go To Home</a>
                            </div>
                            <div class="imageWrap">
                                <img src="{{URL::asset('nguoidung/img/404/boy.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--// SectionBody end-->
        </div>
    </section>
</main>
    <!--// Recent post area End -->
@endsection