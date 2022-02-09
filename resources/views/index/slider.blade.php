<section class="main-slider style1">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide -->
            @foreach($slider as $data)
            <div class="slide">
                <div class="image-layer" style="background-image:url({{url('assets/images/slider', $data->image )}})"></div>
                <div class="auto-container">
                    <div class="content">
                        <h5>Leave Money Problem to us</h5>
                        <div class="border-box"></div>
                        <h2>Focus On Business<br> <span>Financial Future</span></h2>
                        <div class="btns-box">
                            <a class="btn-one thm-bgc1" href="#"><span class="txt">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>


<section class="facts-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="facts-box wow animated fadeInUp" data-wow-delay="0.5s">
                    <ul>
                        @foreach($categories as $data)
                        <li>
                            <a href="{{url('mepy-'.$data->slug)}}">
                            <div class="icon"><span class="flaticon-bank thm-clr1"></span></div>
                            <div class="title"><h3>{{$data->name}}</h3></div>
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
