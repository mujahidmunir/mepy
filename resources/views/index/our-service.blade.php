<section class="services-style1-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="top wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="sec-title">
                        <div class="title">
                            <h5>OUR SERVICES</h5>
                            <div class="border-box"></div>
                        </div>
                        <div class="big-title"><h2>What We <span>Offer Our Client</span></h2></div>
                    </div>
{{--                    <div class="button">--}}
{{--                        <a class="btn-one thm-bgc1" href="/"><span class="txt">View All</span></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="theme-carousel service-carousel owl-carousel owl-theme owl-dot-style1" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":false, "dots":true, "autoplay":true, "autoplayTimeout":10000, "smartSpeed":700, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1199":{"items": "4" }}}'>
                    @foreach($services as $data)
                    <div class="single-service-style1" style="min-height: 400px;">
                        <div class="icon">
                            <span class="flaticon-loan"></span>
                        </div>
                        <h3>{{$data->title}}</h3>
                        <div class="text">
                            <p>Enable decision making and create Business plan</p>
                        </div>
                        <div class="read-more-button">
                            <a href="{{url($data->slug)}}"><span class="flaticon-next"></span></a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>


        </div>
    </div>
</section>
