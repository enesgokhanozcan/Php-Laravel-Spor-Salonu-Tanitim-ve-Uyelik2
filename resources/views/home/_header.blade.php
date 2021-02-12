@php

$setting=\App\Http\Controllers\HomeController::getsetting();
$parentCategories = \App\Http\Controllers\HomeController::categoryList();
@endphp

<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{route('home')}}">Fit<span>ness</span></a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active">
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="classes.html" class="fh5co-sub-ddown">Categories</a>
                                    <ul class="fh5co-sub-menu">
                                        @foreach($parentCategories as $rs)
                                            <li class="dropdown side-dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdawn" aria-expanded="true">{{$rs->title}}<i class="fa fa-angle-down"></i></a>
                                                <div class="custom-menu">
                                                    <div class="row">

                                                        @if(count($rs->children))
                                                            @include('home.categorytree',['children'=>$rs->children])
                                                        @endif

                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{asset('assets')}}/schedule.html">Schedule</a>
                                </li>
                                <li><a href="{{asset('assets')}}">Trainers</a></li>
                                <li><a href="{{route('aboutus')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('user_shopcart')}}">My Cart</a></li>
                                <li class="header-account dropdown default-dropdown">
                                    @auth
                                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                            <div class="header-btns-icon">
                                                <i class="fa fa-user-o"></i>
                                            </div>
                                            <strong class="text-uppercase">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i> </strong>
                                        </div>
                                    @endauth
                                    @guest
                                    <li><a href="/login">Login</a></li>
                                    <li><a href="/register">Join</a></li>
                                    @endguest
                                    <ul class="custom-menu">
                                        <li><a href="{{route('logout')}}"><i class="fa fa-user-plus"></i> logout</a> </li>
                                    </ul>

                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        <!-- end:fh5co-header -->
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
                <div class="desc animate-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
                                <p><span>Created with <i class="icon-heart3"></i></span></p> @include('home.message')
                                <span><a class="btn btn-primary" href="#">Start Your Journey</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:fh5co-hero -->
