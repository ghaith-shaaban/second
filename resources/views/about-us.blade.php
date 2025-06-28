@include('shared.header')

@include('shared.before_nav')
<!-- Header area start -->
@include('shared.nav')
<!-- Header area end -->

<main>
    <!-- Breadcrumb area start  -->
    <div class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background" data-background="storage/assets/imgs/breadcrumb/page-header-1.png"></div>
        <div class="container">
            <div class="breadcrumb__bg-left"></div>
            <div class="breadcrumb__bg-right"></div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">About Us</h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="{{route('main')}}">Home</a></span></li>
                                    <li class="active"><span>About Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <!-- "about-company area start -->
    <section class="about-company section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-company__media">
                        <div class="about-company__shape-left rr-upDown">
                            <img src="storage/assets/imgs/about-company/shape.png" alt="image not found">
                        </div>
                        <div class="about-company__shape-top rr-zooming">
                            <img src="storage/assets/imgs/about-company/circle.png" alt="image not found">
                        </div>
                        <div class="about-company__thumb-1 wow clip-a-z">
                            <img src="storage/assets/imgs/about-company/about-company-1.png" alt="image not found">
                        </div>
                        <div class="about-company__thumb-2 wow clip-a-z">
                            <img src="storage/assets/imgs/about-company/about-compan2.png" alt="image not found">
                        </div>

                        <div class="about-company__customer">
                            <h2><span class="odometer" data-count="70">0</span>%</h2>
                            <h6>Happy  <br> Customer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-company__content">

                        <div class="section__title-wrapper mb-50 mb-xs-35">
                            <span class="section__subtitle ">About Company</span>
                            <h2 class="section__title mb-25">Creating Inspiring Spaces Discover Premier Interior Design Experts</h2>
                            <p class="mb-0">System is a term used to refer to an organized collection symbols and processes that may be used to operate on such symbols. Perspiciatis omnis natus error voupems accusa organized.</p>
                        </div>

                        <div class="about-company__wrapper">
                            <div class="about-company__box">
                                <div class="circle">
                                    <div class="logo">
                                        <img src="storage/assets/imgs/about-company/logo.png" alt="image not found">
                                    </div>
                                    <div class="circle-text">
                                        <p>
                                            Best SWorking Since 2024 Best SWorking
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <ul>
                                <li>
                                    <span>
                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1L4.75 9L1 5.36364" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    Avoiding Design Mistakes
                                </li>
                                <li>
                                    <span>
                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1L4.75 9L1 5.36364" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    Your Startup's Design
                                </li>
                                <li>
                                    <span>
                                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1L4.75 9L1 5.36364" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    Improve Font Comprehension
                                </li>
                            </ul>
                        </div>

                        <a href="{{route('about-us')}}" class="rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Read More
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="text-two">Read More
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- "about-company area end -->

    <!--what-we-do  area start -->
    @include('shared.what_we_do')
    <!--what-we-do  area end -->

    <!-- experience start static data only no dynamic-->
    @include('shared.experience')
    <!-- experience end -->

    <!-- "working-process area start -->
    @include('shared.working_process')
    <!-- "working-process area end -->

    <!-- "our-team  area start -->
    @include('shared.our_team')
    <!-- "our-team  area end -->

    <!-- brand area start -->
    @include('shared.brand')
    <!-- brand area end -->

</main>

@include('shared.footer')
<!-- Footer area end -->

<!-- JS here -->
@include('shared.js')
