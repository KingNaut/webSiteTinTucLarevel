<!DOCTYPE html>
<!--


* @link https://fb.com/khiemsoi
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://fb.com/khiemsoi/license)
-->

<html lang="en">
<head >
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="coreui - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <script src="{{URL::asset('ckeditor/ckeditor.js')}}"></script>
    <title>
        @yield('header')

    </title>
    <!-- Icons-->
    <link href="{{URL::asset('admin/vendors/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{URL::asset('admin/img/brand/logo.png')}}" width="89" height="25" alt="coreui Logo">
        <img class="navbar-brand-minimized" src="{{URL::asset('admin/img/brand/sygnet.svg')}}" width="30" height="30" alt="coreui Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="{{URL::asset('admins')}}">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="{{url('/admins/dsuser')}}">Users</a>
        </li>

    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="admins/hienphanhoi">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">69</span>
            </a>
        </li>

        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="https://www.google.com/maps">
                <i class="icon-location-pin"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/avta.jpg')}}" alt="admin@bootstrapmaster.com">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>

                <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

            </div>
        </li>
    </ul>
    <!--<button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
    </button>-->
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('admins')}}">
                        <i class="nav-icon icon-speedometer"></i> Dashboard
                        <span class="badge badge-primary">NEW</span>
                    </a>
                <li class="nav-title">Quản Lý Thành Viên</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/dsuser')}}">
                        <i class="nav-icon icon-list"></i>  Thành Viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/themuser')}}">
                        <i class="nav-icon icon-drop"></i> Thêm Thành Viên</a>
                </li>

                </li>

                <li class="nav-title">Quản Lý Bài Viết</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/dsbaiviet')}}">
                        <i class="nav-icon icon-list"></i> Bài Viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/thembaiviet')}}">
                        <i class="nav-icon icon-drop"></i> Thêm Bài Viết</a>
                </li>

                </li>

                <li class="nav-title">Quản Lý Chuyên Mục</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/dschuyenmuc')}}">
                        <i class="nav-icon icon-list"></i>  Chuyên Mục </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/themchuyenmuc')}}">
                        <i class="nav-icon icon-drop"></i> Thêm Chuyên Mục</a>
                </li>

                </li>
                <li class="nav-title">Quản Lý Phản Hồi</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::asset('/admins/hienphanhoi')}}">
                        <i class="icon-people"></i> Phản Hồi Người Dùng </a>
                </li>


                </li>

                <li class="nav-title">Theme</li>
                <li class="nav-item">
                    <a class="nav-link" href="colors.html">
                        <i class="nav-icon icon-drop"></i> Colors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="typography.html">
                        <i class="nav-icon icon-pencil"></i> Typography</a>
                </li>
                <li class="nav-title">Components</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-puzzle"></i> Base</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="base/breadcrumb.html">
                                <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/cards.html">
                                <i class="nav-icon icon-puzzle"></i> Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/carousel.html">
                                <i class="nav-icon icon-puzzle"></i> Carousel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/collapse.html">
                                <i class="nav-icon icon-puzzle"></i> Collapse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/forms.html">
                                <i class="nav-icon icon-puzzle"></i> Forms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/jumbotron.html">
                                <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/list-group.html">
                                <i class="nav-icon icon-puzzle"></i> List group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/navs.html">
                                <i class="nav-icon icon-puzzle"></i> Navs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/pagination.html">
                                <i class="nav-icon icon-puzzle"></i> Pagination</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/popovers.html">
                                <i class="nav-icon icon-puzzle"></i> Popovers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/progress.html">
                                <i class="nav-icon icon-puzzle"></i> Progress</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/scrollspy.html">
                                <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/switches.html">
                                <i class="nav-icon icon-puzzle"></i> Switches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tables.html">
                                <i class="nav-icon icon-puzzle"></i> Tables</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tabs.html">
                                <i class="nav-icon icon-puzzle"></i> Tabs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/tooltips.html">
                                <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-cursor"></i> Buttons</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/buttons.html">
                                <i class="nav-icon icon-cursor"></i> Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/button-group.html">
                                <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/dropdowns.html">
                                <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buttons/brand-buttons.html">
                                <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="nav-icon icon-pie-chart"></i> Charts</a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-star"></i> Icons</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="icons/coreui-icons.html">
                                <i class="nav-icon icon-star"></i> coreui Icons
                                <span class="badge badge-success">NEW</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons/flags.html">
                                <i class="nav-icon icon-star"></i> Flags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons/font-awesome.html">
                                <i class="nav-icon icon-star"></i> Font Awesome
                                <span class="badge badge-secondary">4.7</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons/simple-line-icons.html">
                                <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-bell"></i> Notifications</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/alerts.html">
                                <i class="nav-icon icon-bell"></i> Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/badge.html">
                                <i class="nav-icon icon-bell"></i> Badge</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notifications/modals.html">
                                <i class="nav-icon icon-bell"></i> Modals</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="widgets.html">
                        <i class="nav-icon icon-calculator"></i> Widgets
                        <span class="badge badge-primary">NEW</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li class="nav-title">Extras</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-star"></i> Pages</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="login.html" target="_top">
                                <i class="nav-icon icon-star"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html" target="_top">
                                <i class="nav-icon icon-star"></i> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="404.html" target="_top">
                                <i class="nav-icon icon-star"></i> Error 404</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="500.html" target="_top">
                                <i class="nav-icon icon-star"></i> Error 500</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-auto">
                    <a class="nav-link nav-link-success" href="https://fb.com/khiemsoi" target="_top">
                        <i class="nav-icon icon-cloud-download"></i> Download King_Naut</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-danger" href="https://fb.com/khiemsoi" target="_top">
                        <i class="nav-icon icon-layers"></i> Try King_Naut
                        <strong>PRO</strong>
                    </a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        @yield('content')
    </main>
    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <i class="icon-list"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <i class="icon-speech"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <i class="icon-settings"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes-->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
                    <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Meeting with
                            <strong>Lucas</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  1 - 3pm</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>  Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="avatar float-right">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/4.jpg')}}" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Skype with
                            <strong>Megan</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  4 - 5pm</small>
                        <small class="text-muted">
                            <i class="icon-social-skype"></i>  On-line</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
                    <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                        <div>New UI Project -
                            <strong>deadline</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  10 - 11pm</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>  creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/2.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/3.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/4.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/5.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/6.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                        <div>
                            <strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  1 - 3pm</small>
                        <small class="text-muted">
                            <i class="icon-location-pin"></i>  Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class="text-muted mr-3">
                            <i class="icon-calendar"></i>  4 - 6pm</small>
                        <small class="text-muted">
                            <i class="icon-home"></i>  creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/2.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/3.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/4.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/5.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/6.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img class="img-avatar" src="{{URL::asset('admin/img/avatars/8.jpg')}}" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img class="img-avatar" src="{{URL::asset('admin/img/avatars/7.jpg')}}" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <small>
                            <b>Option 1</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 2</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 3</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small>
                            <b>Option 4</b>
                        </small>
                        <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4">
                    <small>
                        <b>CPU Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>Memory Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2">
                    <small>
                        <b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>
<footer class="app-footer">
    <div>
        <a href="https://fb.com/khiemsoi">King_Naut</a>
        <span>&copy; 2019 creativeLabs.</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://fb.com/khiemsoi">King_Naut</a>
    </div>
</footer>
<!-- coreui and necessary plugins-->
<script src="{{URL::asset('admin/vendors/jquery/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/popper.js/js/popper.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/pace-progress/js/pace.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/@coreui/coreui/js/coreui.min.js')}}"></script>
<!-- Plugins and scripts required by this view-->
<script src="{{URL::asset('admin/vendors/chart.js/js/Chart.min.js')}}"></script>
<script src="{{URL::asset('admin/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js')}}"></script>
<script src="{{URL::asset('admin/js/main.js')}}"></script>
</body>
</html>
