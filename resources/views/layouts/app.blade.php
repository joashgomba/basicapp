<!DOCTYPE html>
<html class="loading" lang="en">
<head>
    <link rel="icon" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <!-- META DATA-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="title" content="Laravel App.">
    <meta name="description" content="Basic laravel app with login and design template.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, materialcss, admin pages, material CMS, forge admin template, resoponsive material admin">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/favicon-32x32.png') }}">
    <meta name="theme-color" content="#2a56c6">
    <!-- TITLE-->
    <title>Laravel App</title>
    <!-- FONTS-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Inconsolata" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSS-->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dynamic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/markup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/scrollbar/perfect-scrollbar.min.css') }}">
</head>
<body>
<div id="preloader">
    <div class="preloader-center">
        <div class="dots-loader dot-circle"></div>
    </div>
</div>
<header>
    <div class="navbar-fixed full-top-nav">
        <div id="current-menu" data-menu="default">
            <nav><a class="morph menu small mob-menu button-collapse top-nav waves-effect waves-light circle hide-on-large-only" href="javascript:void(0)" id="sidebar-default-collapse" data-activates="nav-default"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                <div class="nav-wrapper"><a class="animated brand-logo hide-on-large-only nav-logo" href="javascript:void(0)"><i class="material-icons logo-icon left base-text">whatshot</i><span class="left" style="margin-left:20px;">FORGE</span></a><a class="animated brand-logo hide-on-med-and-down defaultMenu-logo" href="javascript:void(0)"><i class="material-icons logo-icon left white-text">whatshot</i><span class="left" style="margin-left:20px;">FORGE</span></a>
                    <ul class="left topnav-Menu-ls hide-on-med-and-down">
                        <li><a class="morph small iconizedToggle waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                        </li>
                        <!--<li><a href="#">Document</a></li>-->
                    </ul>
                    <ul class="right">
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-set app-search-btn" href="#"><i class="material-icons">search</i></a></li>
                        <li><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-userProfile"><img class="circle admin-profile-img-small" src="images/square/male_6.jpg" alt=""></a></li>
                        <li class="hide-on-med-and-down"><a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                        </li>
                        <li class="hide-on-large-only"><a class="waves-effect waves-set toggle-topnav-hidden-menu" href="javascript:void(0);"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                    <ul class="right hide-on-large-only topnav-hidden-menu hide">
                        <li><a class="waves-effect waves-set app-search-btn" href="#"><i class="material-icons">search</i></a></li>
                        <li class="right"><a class="waves-effect waves-set toggle-topnav-hidden-menu" href="#"><i class="material-icons">more_vert</i></a></li>
                        <li class="right"><a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                        </li>
                        <li class="right"><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgs"><i class="material-icons">email</i><span class="badge-count">5</span></a></li>
                    </ul>
                    <div class="drop-down-bucket">
                        <ul class="collection dropdown-content" id="top-nav-msgs">
                            <li class="collection-item msg-header">
                                <ul>
                                    <li class="left"><span>Messages</span><a class="right" href="#"><i class="material-icons small">create</i></a></li>
                                </ul>
                            </li>

                            <li class="collection-item msg-footer pos-relative"><a class="center tooltipped" href="#" data-position="top" data-tooltip="See all messages" style="padding:7px 16px;"><i class="material-icons small clear-style">more_horiz</i></a></li>
                        </ul>

                        <ul class="collection dropdown-content" id="top-nav-userProfile">
                            <li class="collection-item">
                                <div class="admin-profile-content"><img class="circle user-profile-img" src="images/square/male_6.jpg" alt="">
                                    <p class="user-name primary-text">{{ Auth::user()->name }}</p>
                                    <p class="user-designation secondary-text">Chief Technology Officer</p>
                                    <div class="divider"></div>
                                    <ul class="profile-ul">
                                        <li class="profile-li"><a class="btn waves-light collection-item" href="#"><i class="material-icons left">settings</i><span class="text-items">Profile</span></a></li>
                                        <li class="profile-li"><a class="btn waves-light collection-item" href="{{ route('logout') }}"
                                                                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="material-icons left">power_settings_new</i><span class="text-items">Sign Out</span></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <form class="inactive animated" id="app-search">
                        <div class="input-field">
                            <input type="search" id="search">
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label><i class="material-icons app-search-Cls">close</i>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="vertical-navigations animated">
        <ul class="side-nav fixed animated collapsible collapsible-accordion" id="nav-default">
            <li class="logo"><a class="brand-logo hide-on-large-only" id="logo-container" href="#"></a></li>
            <li class="usr-profile">
                <div class="usr-profile-header"><a href="#"><img class="circle" src="{{ asset('images/square/male_6.jpg') }}" alt="Thor"></a></div>
                <ul class="user-options">
                    <li class="waves-effect waves-set"><span class="usr-name">{{ Auth::user()->name }}</span></li>
                    <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">settings</i></a></li>
                    <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">power_settings_new</i></a></li>
                </ul>
            </li>

            @php
                $route = Route::currentRouteName()

            @endphp


            <li><a class="collapsible-header no-col-body waves-effect waves-set @if ($route == 'home') active current @endif " href="{{ route('home') }}"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>

            <li><a class="collapsible-header no-col-body waves-effect waves-set @if ($route == 'products.index' || $route == 'products.create' || $route == 'products.edit' || $route == 'products.show') active current @endif" href="{{ route('products.index') }}"><i class="material-icons">view_list</i><span>Products</span></a></li>

            @role('Super Admin')
            <li><a class="collapsible-header waves-effect waves-set @if ($route == 'roles.index' || $route == 'roles.create' || $route == 'roles.edit'|| $route == 'roles.show' || $route == 'users.index' || $route == 'users.create' || $route == 'users.edit'|| $route == 'users.show') active current @endif" href="#"><i class="material-icons">person</i><span>Users</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li class="menu-item"><a class="waves-effect waves-set @if ($route == 'roles.index' || $route == 'roles.create' || $route == 'roles.edit'|| $route == 'roles.show') active current @endif" href="{{ route('roles.index') }}"><span>Manage Roles</span></a></li>
                        <li class="menu-item"><a class="waves-effect waves-set @if ($route == 'users.index' || $route == 'users.create' || $route == 'users.edit'|| $route == 'users.show') active current @endif" href="{{ route('users.index') }}"><span>Manage Users</span></a></li>
                    </ul>
                </div>
            </li>
            @endrole


        </ul>
    </div>


</header>
<main class="animated">

    <div class="main-header">
        <div class="sec-page">
            <div class="page-title">
                <h2>Icons</h2>
            </div>
            </div>
        <div class="sec-breadcrumb">
            <nav class="breadcrumbs-nav left">
                <div class="nav-wrapper">


                    <?php $segments = ''; ?>

                    <div class="col s12">

                        @foreach(Request::segments() as $segment)
                            <?php $segments .= '/'.$segment; ?>

                                <a class="breadcrumb" href="{{ $segments }}">{{strtoupper($segment)}}</a>
                            @endforeach
                        <!--<a class="breadcrumb" href="">Home</a><a class="breadcrumb" href="#">Icons</a>-->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="main-container">
        @yield('content')
    </div>
    <!-- FOOTER-->
    <footer class="page-footer no-mrpd grey lighten-4">
        <div class="footer-copyright">
            <div class="container primary-text">© 2017 All rights reserved.
            </div>
        </div>
    </footer>
</main>
<!-- SCRIPTS-->
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".basic-select").material_select();
    });
</script>
</body>

</html>