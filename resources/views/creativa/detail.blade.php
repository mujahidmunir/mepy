@extends('layouts.master')
@section('content')
<section class="about-style3-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-9 col-md-10">
                <div class="about-style3-image-box">
                    <div class="patter-box" style="background-image:url(assets/images/pattern/pattern-bg-4.png)"></div>
                    <div class="inner">
                        <img src="{{asset('assets/images/about/about-3.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="video-box">
                        <div class="icon">
                            <a class="video-popup wow zoomIn animated animated" data-wow-delay="300ms" data-wow-duration="1500ms" title="Energy Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: zoomIn;">
                                <span class="flaticon-play-button"></span>
                            </a>
                        </div>
                        <div class="title">
                            <h3>You Watch<br> Solution<br> Business</h3>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="about-style3-text-box">
                    <div class="sec-title-style4">
                        <p>ABOUT COMPANY</p>
                        <div class="big-title"><h2>Why Most People Choose<br> Our Business Solutions</h2></div>
                        <div class="border-box">
                            <div class="borders-left thm-bgc3"></div>
                            <div class="borders-right thm-bgc3"></div>
                        </div>
                    </div>
                    <div class="inner-contant">
                        <div class="text-holder">
                            <p>What people are posting on social networks With a community of over. million users and a majority age group being 18 to 29. wouldn’t you want to make sure. We will customize a loan based on the amount of cash.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-planning"></span>
                                </div>
                                <div class="text">
                                    <h3>Solution Business</h3>
                                    <p>We are providing different services in this sector to wide area of world.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="flaticon-investment"></span>
                                </div>
                                <div class="text">
                                    <h3>Fast Funding</h3>
                                    <p>We provide online instant cash loans with quick approval that your term length</p>
                                    <a href="#">Read More</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
