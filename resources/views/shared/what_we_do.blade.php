<section class="what-we-do section-space__bottom">
    <div class="container">
        <div class="row">
            <div class="section__title-wrapper text-center mb-55 mb-xs-40">
                <span class="section__subtitle justify-content-center">What We Do</span>
                <h2 class="section__title title-animation">The best Services We Provide</h2>
            </div>
        </div>

        <div class="what-we-do__wrapper">
            <div class="what-we-do__bg">
                <img src="storage/assets/imgs/what-we-do/shape.png" alt="">
            </div>
            <div class="row">
                @foreach ($services as $service )
            <div class="col-xl-4 has--border has--border-1">
                <div class="what-we-do__item has--padding-pb">
                    <div class="what-we-do__item-icon">
                        <img width="75" height="75" src="{{'storage/'.$service['image']}}" alt="image not found">
                    </div>
                    <div class="text">
                        <h6 class="what-we-do__item-title title-animation"><a href="{{route('service-details')}}">{{$service['title']}}</a></h6>
                        <p class="what-we-do__item-desc">{{$service['details']}}</p>
                        <a href="{{route('service-details')}}" class="what-we-do__item-arrow">
                            Read More
                           <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 6H11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 1L11 6L6 11" stroke="#767676" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
