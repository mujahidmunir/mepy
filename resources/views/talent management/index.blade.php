@extends('layouts.master')

@section('content')
    <section class="breadcrumb-area style2" style="background-image: url(assets/images/breadcrumb/breadcrumb-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="title">
                            <h1>Services</h1>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul class="clearfix">
                                <li><a href="index-2.html">Home Back</a></li>
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area">
        <div class="container">

            <div class="row">

                <div class="col-xl-4 col-lg-4 mb-5">
                    <div class="single-team-member">
                        <div class="img-holder">
                            <div class="inner">

                                <img src="assets/images/team/team-v1-1.jpg" alt="Awesome Image">
{{--                                <div class="team-social-links">--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a class="thm-bgc3-v2" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>--}}
{{--                                        </li>--}}

{{--                                        <li>--}}
{{--                                            <a class="thm-bgc3-v2" href="#"><i class="fa fa-instagram"  aria-hidden="true"></i></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                            <div class="title-holder">
                                <h3>DAVID SMITH</h3>
                                <p>Marketing Manager</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
