@include('shared.header')

@include('shared.before_nav')
<!-- Header area start -->
@include('shared.nav')
<!-- Header area end -->

<main>

     <!-- Banner area start -->
     <section class="banner overflow-hidden">
        <div class="swiper banner__slider">
            <div class="swiper-wrapper">
                {{-- @foreach ( $images as $image) --}}
                @for ($i=1;$i<=3;$i++)
                <div class="swiper-slide">
                    <div class="banner__item banner__space ">
                        <div class="banner__item-bg" data-background="storage/assets/imgs/banner-1/banner-{{$i}}.jpg"></div>
                        {{-- {{$image['route']}} --}}
                        <div class="container">
                            <div class="banner__item__left-bg"></div>
                            <div class="banner__item__right-bg"></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner__item-content">
                                        <div class="banner__item-wrapper">
                                            <h1 class="banner__item-title rr-fw-bold color-white">
                                                Creating Spaces Through <span>Innovative Design.</span>
                                            </h1>
                                            <p class="des color-white mb-45 mb-md-30">Welcome to Artima, crafting timeless interiors that tell your story. Discover a world where design meets emotion.</p>

                                            <a href="{{route('about-us')}}" class="rr-btn">
                                                <span class="btn-wrap">
                                                    <span class="text-one">About Us</span>
                                                    <span class="text-two">About Us</span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="banner__item-content-link">
                                            <a href="https://www.youtube.com/watch?v=vkew-1KK3Sc" class="popup-video zooming d-flex align-items-center" data-effect="mfp-move-from-top vertical-middle">
                                                <div class="icon">
                                                    <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M33.656 19.0001L0.598633 37.7624V0.237793L33.656 19.0001Z" fill="#906E50"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="banner__bottom-wrapper">

                <div class="banner__slider__arrow">
                    <button class="banner__slider__arrow-prev d-flex align-items-center justify-content-center wow clip-t-b">
                        <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8L26 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.75 1L26 8L19.75 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button class="banner__slider__arrow-next d-flex align-items-center justify-content-center wow clip-t-b">
                        <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26 8L1 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.25 1L1 8L7.25 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>

                {{-- <div class="banner__bottom-title">
                    <h6><a href="blog-details.html">Creating Spaces Through<span> Innovative Design.</span> </a></h6>
                </div> --}}

                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        {{-- @foreach ($images as $image) --}}
                        @for ($i=1;$i<=3;$i++)
                        <div class="swiper-slide"><img src="storage/assets/imgs/banner-1/banner-{{$i}}.jpg" alt=""></div>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="banner__socail-media">
                <ul>
                    <li><a href="https://www.facebook.com/">Facebook</a></li>
                    <li><a href="https://www.instagram.com/">Instagram</a></li>
                    <li><a href="https://x.com/tweeter">Tweeter</a></li>
                    <li><a href="https://dribbble.com/">DRIBBBLE </a></li>
                </ul>
            </div>
        </div>

    </section>
    <!-- Banner area end -->

    <!--about-us area start -->
    <section class="about-us section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us__media">
                        <img class="wow clip-a-z" src="storage/assets/imgs/about-us/about.jpg" alt="image not found">

                        <div class="about-us__box">
                            <h4><span class="odometer" data-count="20">0</span></h4>
                            <h6>Years <br> Experience</h6>
                        </div>

                        <div class="about-us__socail">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-us__content">
                        <div class="section__title-wrapper mb-45 mb-xs-40">
                            <span class="section__subtitle justify-content-center">Welcome To Artima</span>
                            <h2 class="section__title mb-25 title-animation">Interior Design with Different Approach</h2>
                            <p class="mb-0">Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis sollicitudin dig- nissim habitant.</p>
                        </div>

                        <div class="skill-one__progress mb-50 mb-xs-30">
                            <div class="skill-one__progress-single">
                                <h6 class="skill-one__progress-title">Interior Design</h6>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="90%">
                                        <div class="count-text">90%</div>
                                    </div>
                                </div>
                            </div>

                            <div class="skill-one__progress-single">
                                <h6 class="skill-one__progress-title">Architecture</h6>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="80%">
                                        <div class="count-text">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-one__progress-single">
                                <h6 class="skill-one__progress-title">3D Design</h6>
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="95%">
                                        <div class="count-text">95%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{route('about-us')}}" class="rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Learn More
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6.5H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 1.5L11 6.5L6 11.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="text-two">Learn More
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
    <!--about-us area end -->

    <!--what-we-do  area start -->
        @include('shared.what_we_do')
    <!--what-we-do  area end -->

    <!--latest-project  area start -->
    <section class="latest-project section-space__bottom">
        <div class="container">
            <div class="row mb-55 mb-xs-40 align-items-end">
                <div class="col-lg-6">
                    <div class="section__title-wrapper">
                        <span class="section__subtitle justify-content-center">latest projects</span>
                        <h2 class="section__title title-animation">Our Projects & Designs</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class=" des mb-0">Sed id lacus volutpat, imperdiet quam a, fermentum mi. Etiam urna sapien, tempor in accumsan eu, consequat sed neque Etiam euismod volutpat lacus fringilla henr.</p>
                </div>
            </div>

            <div class="row gx-100 mb-minus-60">
              @foreach ($projects as $project)
                <div class="col-lg-6">
                    <div class="latest-project__item">
                        <div class="latest-project__media">
                            <img class="wow clip-a-z" src="{{'storage/'.$project['image']}}" alt="image not found">
                            <a class="icon" href="#">
                                {{-- protfolio-details.html --}}
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.48633 23.4867L22.4072 5.56579" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.3848 4.61475H23.3501V13.58" stroke="#906E50" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                        <div class="latest-project__text">
                            <h5 class="title-animation"><a href="#">{{$project['title']}}</a></h5>
                            <p class="mb-0">{{$project['text']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--latest-project  area end -->

    <!-- experience start static data only no dynamic-->
        @include('shared.experience')
    <!-- experience end -->

    <!-- why-choose-us start static data only no dynamic-->
    <section class="why-choose-us section-space__top">
        <div class="container">
            <div class="row">
                <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                    <span class="section__subtitle justify-content-center">Why Choose Us</span>
                    <h2 class="section__title title-animation">Why Choose Artima</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="why-choose-us__content">
                        <div class="why-choose-us__item">
                            <div class="why-choose-us__icon">
                                <img src="storage/assets/imgs/why-choose-us/design.svg" alt="image not found">
                            </div>
                            <div class="why-choose-us__text">
                                <h6 class="mb-10 title-animation">Modern Design</h6>
                                <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                            </div>
                        </div>
                        <div class="why-choose-us__item">
                            <div class="why-choose-us__icon">
                                <img src="storage/assets/imgs/why-choose-us/expert.svg" alt="image not found">
                            </div>
                            <div class="why-choose-us__text">
                                <h6 class="mb-10 title-animation">Expert Team</h6>
                                <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                            </div>
                        </div>
                        <div class="why-choose-us__item">
                            <div class="why-choose-us__icon">
                                <img src="storage/assets/imgs/why-choose-us/price.svg" alt="image not found">
                            </div>
                            <div class="why-choose-us__text">
                                <h6 class="mb-10 title-animation">Reasonable Price</h6>
                                <p class="mb-0">Decoral is one of the most popular for those who want to explore the</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <div class="why-choose-us__media-wrapper">
                                <div class="why-choose-us__media img1 wow clip-a-z">
                                    <img src="storage/assets/imgs/why-choose-us/why-choose-us-1.jpg" alt="image not found">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="why-choose-us__media img2 wow clip-a-z mb-30">
                                <img src="storage/assets/imgs/why-choose-us/why-choose-us-2.jpg" alt="image not found">
                            </div>
                            <div class="why-choose-us__media">
                                <div class="why-choose-us__media img3 wow clip-a-z">
                                    <img src="storage/assets/imgs/why-choose-us/why-choose-us-3.jpg" alt="image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- why-choose-us end -->

    <!-- Filter area start -->
    <div class="filter__area filter__space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter__media filter__container">
                        <div class="pic pic--left" data-background="storage/assets/imgs/filter__area/before-filter.png"></div>
                        <div class="pic pic--right" data-background="storage/assets/imgs/filter__area/after-filter.png"></div>
                        <div class="comparison-ctrl">
                            <img class="img-fluid" src="storage/assets/imgs/filter__area/ctrl.svg" alt="icon not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter area end -->

    <!-- "working-process area start -->
        @include('shared.working_process')
    <!-- "working-process area end -->

    <!-- "our-team  area start -->
            @include('shared.our_team')
    <!-- "our-team  area end -->

    <!-- "happy-customer  area start -->
    <section class="happy-customer section-space happy-customer__bottom-space" data-background="storage/assets/imgs/testimonial/testimonial.jpg">
        <div class="container">
            <div class="row">
                <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                    <span class="section__subtitle justify-content-center">Testimonial</span>
                    <h2 class="section__title text-white mb-20 title-animation">Our Happy Customer</h2>
                    <p class="mb-0 font-weight-300">Which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- "happy-customer  area end -->

    <!-- "testimonial  area start -->
    <section class="testimonial testimonial__bottom-space">
        <div class="container">
            <div class="swiper testimonial__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="testimonial__item wow clip-a-z">
                            <div class="testimonial__item-wrapper mb-35">
                                <div class="testimonial__item__author">
                                    <div class="icon">
                                        <img src="storage/assets/imgs/testimonial/qotetion.svg" alt="image not found">
                                    </div>
                                    <img src="storage/assets/imgs/testimonial/author-1.png" alt="image not found">
                                </div>
                                <div class="testimonial__item__text">
                                    <h6>Aurther Maxwell</h6>
                                    <span> Soft business llc.</span>
                                </div>
                            </div>

                            <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>

                            <div class="testimonial__item-bottom">
                                <div class="testimonial__item__logo">
                                    <img src="storage/assets/imgs/testimonial/logo.png" alt="imgs not found">
                                </div>

                                <ul class="testimonial__item__rating">
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="testimonial__item wow clip-a-z">
                            <div class="testimonial__item-wrapper mb-35">
                                <div class="testimonial__item__author">
                                    <div class="icon">
                                        <img src="storage/assets/imgs/testimonial/qotetion.svg" alt="image not found">
                                    </div>
                                    <img src="storage/assets/imgs/testimonial/author-2.png" alt="image not found">
                                </div>
                                <div class="testimonial__item__text">
                                    <h6>Helena Martine</h6>
                                    <span> Soft business llc.</span>
                                </div>
                            </div>

                            <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>

                            <div class="testimonial__item-bottom">
                                <div class="testimonial__item__logo">
                                    <img src="storage/assets/imgs/testimonial/logo.png" alt="imgs not found">
                                </div>

                                <ul class="testimonial__item__rating">
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="testimonial__item wow clip-a-z">
                            <div class="testimonial__item-wrapper mb-35">
                                <div class="testimonial__item__author">
                                    <div class="icon">
                                        <img src="storage/assets/imgs/testimonial/qotetion.svg" alt="image not found">
                                    </div>
                                    <img src="storage/assets/imgs/testimonial/author-3.png" alt="image not found">
                                </div>
                                <div class="testimonial__item__text">
                                    <h6>Travis Head</h6>
                                    <span> Soft business llc.</span>
                                </div>
                            </div>

                            <p class="mb-0">We are an architecture firm with a focus on beautiful but functional design. At its  heart, we believe design is about usability and these are the guiding principles for our work. Read our projects and process.</p>

                            <div class="testimonial__item-bottom">
                                <div class="testimonial__item__logo">
                                    <img src="storage/assets/imgs/testimonial/logo.png" alt="imgs not found">
                                </div>

                                <ul class="testimonial__item__rating">
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                    <li><img src="storage/assets/imgs/testimonial/star.svg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- "testimonial  area end -->

    <!-- brand area start -->
            @include('shared.brand')
    <!-- brand area end -->

    <!-- blog area start -->
    <section class="blog section-space">
        <div class="container">
            <div class="row">
                <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                    <span class="section__subtitle justify-content-center">News & Articles</span>
                    <h2 class="section__title title-animation">Our Latest Blog Posts</h2>
                </div>
            </div>

            <div class="row mb-minus-30">
                <div class="col-lg-4">
                    <div class="blog__item">
                        <a class="blog__item-media d-lg-block wow clip-a-z" href="#">
                            <img src="storage/assets/imgs/blog/blog-1.jpg" alt="image not found">
                        </a>

                        <div class="blog__item__content">
                            <ul class="blog__item-meta d-flex flex-wrap mb-10">
                                <li>March 18, 2024 - </li>
                                <li><a href="#">0 Comments</a></li>
                                {{-- blog-details.html --}}
                            </ul>
                            <h6><a href="#">How to Choose the Right Colors for Your Bedroom</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <a class="blog__item-media d-lg-block wow clip-a-z" href="#">
                            <img src="storage/assets/imgs/blog/blog-2.jpg" alt="image not found">
                        </a>

                        <div class="blog__item__content">
                            <ul class="blog__item-meta d-flex flex-wrap mb-10">
                                <li>March 18, 2024 - </li>
                                <li><a href="#">0 Comments</a></li>
                            </ul>
                            <h6><a href="#">The Power of Accent Lighting in Interior Design</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item">
                        <a class="blog__item-media d-lg-block wow clip-a-z" href="#">
                            <img src="storage/assets/imgs/blog/blog-3.jpg" alt="image not found">
                        </a>

                        <div class="blog__item__content">
                            <ul class="blog__item-meta d-flex flex-wrap mb-10">
                                <li>March 18, 2024 - </li>
                                <li><a href="#">0 Comments</a></li>
                            </ul>
                            <h6><a href="#">The Power of Accent Lighting in Interior Design</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area start -->
</main>
@include('shared.footer')
<!-- Footer area end -->

<!-- JS here -->
@include('shared.js')
