@extends('layouts.master')
@section('content')
    <!-- main header -->


    @include('index.slider')

    <!--Start About Style1 Area-->
    @include('index.about-company')
    <!--End About Style1 Area-->

    <!--Start Services Style1 Area-->
    @include('index.our-service')
    <!--End Services Style1 Area-->

    <!--Start Latest Projects Area-->
    @include('index.our-project')
    <!--End Latest Projects Area-->


    <!--Start Features Area-->
    @include('index.our-feature')
    <!--End Features Area-->
    @include('index.out-talent')
    <!--Start latest blog area -->
    @include('index.blog')
    <!--End latest blog area-->
@endsection
