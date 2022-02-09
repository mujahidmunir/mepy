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

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="blog-area" class="blog-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6" style="min-height: 8vh;">
                    <div class="blog-post">
                        <!--Start single blog post-->
                        <div class="single-blog-post wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v4-1.jpg" alt="Awesome Image">
                                    <div class="overlay-content">
                                        <div class="button">
                                            <a href="blog-single.html"><i class="fa fa-book" aria-hidden="true"></i>Learn More</a>
                                        </div>

                                        <div class="social-share-post">

                                            <div class="social-links">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fa fa-edit fa-2x" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-trash fa-2x float-right" aria-hidden="true"></i></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="catogaries-box thm-bgc1">--}}
                                {{--                                    <h6>ADVICES</h6>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="text-holder">

                                <h3 class="blog-title"><a href="blog-single.html">How to Appear More Confident And Attractive</a></h3>
                                <div class="text-box">
                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibu lum at eros. Nulla vitae elit libero, a pharetra augue.</p>
                                    <div class="read-more-button">
                                        <a href="{{route('record.detail', 1)}}">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
@endsection
