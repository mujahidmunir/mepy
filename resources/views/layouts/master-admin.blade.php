<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
@include('layouts.partials.admin.head')
<body class="app sidebar-mini">

<div id="global-loader">
    <img src="{{asset('assets/admin/images/svgs/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<div class="page">
    <div class="page-main">
        @include('layouts.partials.admin.sidebar')
        <div class="app-content main-content">
            <div class="side-app">
                @include('layouts.partials.admin.header')
                <div class="row mt-4 ml-3">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.partials.admin.footer')
    </div>
</div>

<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

@include('layouts.partials.admin.js')
</body>
</html>
