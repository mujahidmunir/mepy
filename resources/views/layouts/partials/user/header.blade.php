<header class="main-header header-style-four">
    <!--Start Header Top-->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="header-top-left">
                        <p>For first class business plan you can trust Energy!</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="header-top-right">
                        <div class="header-social-links-style3">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook" style="font-size: 20px;" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" style="font-size: 20px;" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" style="font-size: 20px;" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube" style="font-size: 20px;" aria-hidden="true"></i></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End Header Top-->
    <!--Start Header Upper-->
    <div class="header-upper-style2">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-upper-left-style2 pull-left clearfix">
                    <div class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('assets/images/logo/mepy.png')}}" alt="Awesome Logo" title=""></a>
                    </div>
                </div>
                <div class="header-upper-right-style2 pull-right">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-planet-earth thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Address</h3>
                                    <p>Sumarecon Bandung</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-punctuality thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Office Timeing</h3>
                                    <p>Mon - Fri: 09:00 - 17:00</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-email thm-clr4"></span>
                                </div>
                                <div class="title">
                                    <h3>Email</h3>
                                    <p><a href="mailto:mepyentertaiment@gmail.com">mepyentertaiment@gmail.com  </a></p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Start header lawer -->
    <div class="header-lawer-style4">
        <div class="container">
            <div class="outer-box clearfix">
                <!--Top Left-->
                <div class="header-lawer-right-style4 float-right clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style4 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ request()->is('/') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="{{ request()->is('mepy-record*') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{url('/mepy-record')}}">Record</a>
                                    </li>
                                    <li class="{{ request()->is('mepy-creativa*') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{url('/mepy-creativa')}}">Creativa</a>
                                    </li>
                                    <li class="{{ request()->is('mepy-talent-management*') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{url('/mepy-talent-management')}}">Talent Management</a>
                                    </li>
                                    <li class="{{ request()->is('mepy-entertaiment*') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{url('/mepy-entertaiment')}}">Entertaiment</a>
                                    </li>
                                    <li class="{{ request()->is('contact-us*') ? 'current' : '' }}">
                                        <a class="home-icon" href="{{url('/contact-us')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End header lawer -->

    <!--Sticky Header-->
    <div class="sticky-header white-bg">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="index-2.html" class="img-responsive"><img src="{{asset('assets/images/logo/mepy.png')}}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu style4 clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->



    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="{{asset('assets/images/logo/mepy-white.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                    <li><a href="#"><span class="fa fa fa-google-plus-square"></span></a></li>
                    <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
