@extends('clients.layouts.main')
@section('content')
@php 
$class = 'introduce';
@endphp
{{-- @include('clients.page._banner') --}}
<div class="banner home__banner" id="banner">
    <img src="{{asset('assets/clients/images/home-banner-m.jpg')}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container">
        <div class="row">
            <div class="col-md-5">
                <div class="banner__content">
                    <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                        The key to unlock<br/>potential for Vietnam’s growing supply chain
                    </h1>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">Armed with sharp industry expertises, instinctive aptitude to discover emerging trends & opportunities for capital growth, balanced by rock-solid financial strategy, we are committed to contribute to the growth of a robust supply chain ecosystem in Vietnam.</p>
                </div>
            </div>
        </div>        
    </div>        
</div>
<div class="content">
    <div class="introduce__info" id="our-strategy">
        <div class="container">
            <h3 class="introduce__info--title wow fadeInUp" data-wow-duration="1.5s">Investment Strategy</h3>
            <div class="introduce__info--desc wow fadeInUp" data-wow-duration="1.5s">
                <p>We aim to establish a complete supply chain ecosystem that provides regular income distributions and long-term capital appreciation through acquisitions or partnerships with multi-faceted supply chain companies, in accordance with the four strategic investment pillars described below.</p>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-md-3">
                    <div class="introduce__item">
                        <img src="{{asset('assets/clients/images/logistics.png')}}" alt="" class="introduce__item--img img-fluid">
                        <img src="{{asset('assets/clients/images/logistics-hover.png')}}" alt="" class="introduce__item--img__hover img-fluid">
                        <div class="introduce__item--desc">
                            <h3>Supply Chain</h3>
                            <p>Prioritize fulfilling effective end-to-end supply chain and focus on identifying environmentally friendly and efficient alternative solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="introduce__item">
                        <img src="{{asset('assets/clients/images/aviation.png')}}" alt="" class="introduce__item--img img-fluid">
                        <img src="{{asset('assets/clients/images/aviation-hover.png')}}" alt="" class="introduce__item--img__hover img-fluid">
                        <div class="introduce__item--desc">
                            <h3>Aviation</h3>
                            <p>
                                Facilitate convenient & affordable international trade while building a streamlined and reliable network.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="introduce__item">
                        <img src="{{asset('assets/clients/images/real.png')}}" alt="" class="introduce__item--img img-fluid">
                        <img src="{{asset('assets/clients/images/real-hover.png')}}" alt="" class="introduce__item--img__hover img-fluid">
                        <div class="introduce__item--desc">
                            <h3>Real Estate</h3>
                            <p>Value-based investments in logistics real estate projects and assets, such as warehouses, distribution facilities, and fulfillment centers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="introduce__item">
                        <img src="{{asset('assets/clients/images/digital.png')}}" alt="" class="introduce__item--img img-fluid">
                        <img src="{{asset('assets/clients/images/digital-hover.png')}}" alt="" class="introduce__item--img__hover img-fluid">
                        <div class="introduce__item--desc">
                            <h3>Digital Transformation</h3>
                            <p>Invest in Software as a Service (SaaS) that offer disruptive and transformative supply chain solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="introduce__journey">
        <h3 class="introduce__info--title introduce__journey--title wow fadeInUp" data-wow-duration="1.5s">Milestones</h3>
        <img src="{{asset('assets/clients/images/journey-map.png')}}" class="img-fluid d-none d-sm-block" alt="">
        <img src="{{asset('assets/clients/images/journey-map-m.png')}}" class="img-fluid d-md-none" alt="">
    </div>
    <div class="introduce__profile" id="porfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <h3>Portfolio</h3>
                    {{-- <p>We have invested in these exceptional businesses and assisted them in overcoming the most fundamental and difficult obstacles on their path to growth and expansion. We are supporting them in having a profound impact on the supply chain and logistics industry.</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__profile--item">
                        <a href="https://logchain.vn" target="_blank">
                            <div class="introduce__profile--logo">
                                <img src="{{asset('assets/clients/images/logo__logchain.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="introduce__profile--desc">
                                Logistics | Aviation
                                <span class="goto"><img src="{{asset('assets/clients/images/arrow__right.svg')}}" width="20" alt=""></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__profile--item">
                        <a href="https://galaxyexpress.vn" target="_blank">
                            <div class="introduce__profile--logo">
                                <img src="{{asset('assets/clients/images/logo__galaxy.png')}}" alt="" class="img-fluid">                        
                            </div>
                            <div class="introduce__profile--desc">
                                Logistics | Forwarding & Solutions
                                <span class="goto"><img src="{{asset('assets/clients/images/arrow__right.svg')}}" width="20" alt=""></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-100 d-block d-sm-none"></div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__profile--item">
                        <a href="#" target="_blank">
                            <div class="introduce__profile--logo">
                                <img src="{{asset('assets/clients/images/logo__uld.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="introduce__profile--desc">
                                Logistics | Co-loader
                                <span class="goto"><img src="{{asset('assets/clients/images/arrow__right.svg')}}" width="20" alt=""></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__profile--item">
                        <a href="#" target="_blank">
                            <div class="introduce__profile--logo">
                                <img src="{{asset('assets/clients/images/logo__comingsoon.png')}}" alt="" class="img-fluid">                        
                            </div>
                            <div class="introduce__profile--desc">
                                Tech Solutions | Saas Product
                                <span class="goto"><img src="{{asset('assets/clients/images/arrow__right.svg')}}" width="20" alt=""></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
setTimeout(function(){
    setHeightBanner()
}, 1000)

$(window).resize(setHeightBanner())    

function setHeightBanner(){
    if($(window).width() > 767){
        var bannerHeight = document.getElementById('banner')
        var height = bannerHeight.offsetHeight
        document.getElementById('banner').style.height = height + 'px'
    }
}
$(document).ready(function(){
    // var w = $(window).width();
    // var innerW = $('#contact-us').find('.container').width();
    // var infoW = $('#contact-info').width();
    // var newW = ((w-innerW)/2 + (innerW - infoW - 30));
    // console.log(newW)
    // $('.introduce__contact--map').css('width', newW+'px')
})
</script>
@endsection