<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.user.head')
<body>
<div class="boxed_wrapper">
    <div class="preloader"></div>
@include('layouts.partials.user.header')
@yield('content')
<!--Start footer area-->
@include('layouts.partials.user.footer')
<!--End footer area-->
    <button class="scroll-top scroll-to-target thm-bgc1" data-target="html" data-aos="slide-up" data-aos-easing="linear"
            data-aos-duration="1100">
        <span class="fa fa-long-arrow-up"></span>
    </button>
</div>
@include('layouts.partials.user.js')

</body>
</html>
