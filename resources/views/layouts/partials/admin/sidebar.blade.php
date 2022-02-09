<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index-2.html">
            <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Azea logo">
            <img src="../assets/images/brand/logo1.png" class="header-brand-img dark-logo" alt="Azea logo">
            <img src="../assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Azea logo">
            <img src="../assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Azea logo">
        </a>
    </div>

    <ul class="side-menu app-sidebar3">
        <li class="slide">
            <a class="side-menu__item"  href="{{url('/admin/dashboard')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="side-item side-item-category">Menu</li>

        <li class="slide">
            <a class="side-menu__item"  href="{{url('/admin/sliders')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
                <span class="side-menu__label">Sliders</span></a>
        </li>


        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z"></path><path d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"></path><path d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"></path></svg>
                <span class="side-menu__label">Page</span><i class="angle fe fe-chevron-right"></i></a>
            <ul class="slide-menu">
                @foreach (\App\Helpers\Sidebar::Menu() as $data)
                    <li><a href="{{url('admin/page', $data->slug)}}" class="slide-item"> {{$data->name}}</a></li>
                @endforeach
            </ul>
        </li>



    </ul>
</aside>
