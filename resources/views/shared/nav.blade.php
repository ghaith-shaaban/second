<header>
    <div id="header-sticky" class="header__area header-1">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__logo">
                        <a href="{{route('main')}}">
                            <div class="logo">
                                 <img src="storage/assets/imgs/logo/logo.svg" alt="logo not found">
                                 {{-- {{$logo[0]['image']}} --}}
                            </div>
                        </a>
                    </div>

                    <div class="mean__menu-wrapper d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown has-mega-menu active">
                                        <a href="{{route('main')}}">Home</a>
                                        {{-- <ul class="mega-menu mega-menu-grid-3">
                                            <li>
                                                <div class="home__menu-item">
                                                    <div class="home__menu-thumb">
                                                        <img src="assets/imgs/menu/menu-home-1.jpg" alt="thumb not found">
                                                        <div class="home__menu-buttons">
                                                            <a href="index.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Multi Page</span>
                                                                    <span class="text-two">Multi Page</span>
                                                                </span>
                                                            </a>
                                                            <a href="index-one-page.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">One Page</span>
                                                                    <span class="text-two">One Page</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h4 class="home__menu-title">Home-1</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="home__menu-item">
                                                    <div class="home__menu-thumb">
                                                        <img src="assets/imgs/menu/menu-home-2.jpg" alt="thumb not found">
                                                        <div class="home__menu-buttons">
                                                            <a href="index-2.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Multi Page</span>
                                                                    <span class="text-two">Multi Page</span>
                                                                </span>
                                                            </a>
                                                            <a href="index-2-one-page.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">One Page</span>
                                                                    <span class="text-two">One Page</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h4 class="home__menu-title">Home-2</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="home__menu-item">
                                                    <div class="home__menu-thumb">
                                                        <img src="assets/imgs/menu/menu-home-3.jpg" alt="thumb not found">
                                                        <div class="home__menu-buttons">
                                                            <a href="index-3.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Multi Page</span>
                                                                    <span class="text-two">Multi Page</span>
                                                                </span>
                                                            </a>
                                                            <a href="index-3-one-page.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">One Page</span>
                                                                    <span class="text-two">One Page</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h4 class="home__menu-title">Home-3</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="home__menu-item">
                                                    <div class="home__menu-thumb">
                                                        <img src="assets/imgs/menu/menu-home-4.jpg" alt="thumb not found">
                                                        <div class="home__menu-buttons">
                                                            <a href="index-4.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Multi Page</span>
                                                                    <span class="text-two">Multi Page</span>
                                                                </span>
                                                            </a>
                                                            <a href="index-4-one-page.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">One Page</span>
                                                                    <span class="text-two">One Page</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h4 class="home__menu-title">Home-4</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="home__menu-item">
                                                    <div class="home__menu-thumb">
                                                        <img src="assets/imgs/menu/menu-home-5.jpg" alt="thumb not found">
                                                        <div class="home__menu-buttons">
                                                            <a href="index-5.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Multi Page</span>
                                                                    <span class="text-two">Multi Page</span>
                                                                </span>
                                                            </a>
                                                            <a href="index-5-one-page.html" class="rr-btn__header">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">One Page</span>
                                                                    <span class="text-two">One Page</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <h4 class="home__menu-title">Home-5</h4>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="{{route('about-us')}}">About us</a></li>

                                    <li class="has-dropdown">
                                        <a href="{{route('service')}}">Service</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('service')}}">Service</a></li>
                                            <li><a href="{{route('service-details')}}">Service Details</a></li>
                                        </ul>
                                    </li>
                                    @guest
                                    <li><a href="{{route('show.login')}}">login</a></li>
                                    <li><a href="{{route('show.register')}}">register</a></li>
                                    @endguest

                                    @auth
                                        @if(auth()->user()->isAdmin)
                                            <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                                        @endif
                                    <li>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button type="submit">logout</button>
                                    </form>
                                    </li>
                                    @endauth

                                    {{-- <li class="has-dropdown ">
                                        <a href="javascript:void(0)">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="our-team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="protfolio.html">Protfolio</a></li>
                                            <li><a href="protfolio-details.html">Protfolio Details</a></li>
                                            <li><a href="testimonial.html">testimonial</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog-grid.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog-grid.html">Blog</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="contact-us.html">Contact</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__hamburger">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
