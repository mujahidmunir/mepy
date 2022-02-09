@extends('layouts.master')
@section('content')
<section class="breadcrumb-area style3" style="background-image: url(assets/images/breadcrumb/breadcrumb-3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                       <h1>Photo Photo Collection</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Team Area-->
<section id="team-page" class="team-area">
    <div class="container">
        <div class="sec-title-style3 text-center     slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
            <div class="big-title"><h2>Our Images</h2></div>
            <div class=" center">
                        <button><p class="mr-2">All</p></button>
                        <button><p class="mr-4 ml-2">Nature</p></button>
                        <button><p>City</p></button>
            </div>
        </div>
        <div class="row">
            <!--Start Single Team Member-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team-member style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('assets/images/team/team-v1-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
               <!--Start Single Team Member-->
               <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team-member style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('assets/images/team/team-v1-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
               <!--Start Single Team Member-->
               <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team-member style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('assets/images/team/team-v1-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
               <!--Start Single Team Member-->
               <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team-member style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('assets/images/team/team-v1-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
               <!--Start Single Team Member-->
               <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team-member style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('assets/images/team/team-v1-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
               <!--Start Single Team Member-->
               <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-team-member style3">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="{{asset('assets/images/team/team-v1-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Team Member-->
        </div>
    </div>
</section>
@endsection
