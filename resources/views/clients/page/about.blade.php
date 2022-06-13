@extends('clients.layouts.main')
@section('content')
<div class="banner banner__about" id="banner">
    <img src="{{asset('assets/clients/images/about-banner-m.jpg')}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container text-center">
        <div class="banner__content">
            <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                Vision
            </h1>
            <p class="wow fadeInUp" data-wow-duration="1.5s">
                To become an opportunity driver for a progressive supply chain in Vietnam and emerging markets.
            </p>
        </div> 
    </div>        
</div>
<div class="content about">
    <div class="container">
        <div class="about__info">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('assets/clients/images/about-cover.png')}}" alt="" class="d-none d-sm-block img-fluid">
                    <img src="{{asset('assets/clients/images/about-cover-m.jpg')}}" alt="" class="d-sm-none d-block img-fluid">
                </div>
                <div class="col-md-8 about__info--desc">
                    <div class="about__info--desc__content">
                        <h2>Missions</h2>
                        <ul>
                            <li>Adopt and implement new technologies across supply chain segments and operating systems.</li>
                            <li>Provide smart initiatives with the goal of delivering effective and efficient business results.</li>
                            <li>
                                Strengthen corporate resources (capital and personnel) and enrich asset portfolio.
                            </li>
                            <li>Enhance investment portfolio value by partnering/acquiring potential & relevant companies.</li>
                            <li>Support & apply eco-friendly approach, following international green guidelines.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="about__services">
            <h3 class="about__services--title">Core Values</h3>
            <div class="row">
                <div class="col">
                    <div class="about__services--icon">
                        <img src="{{asset('assets/clients/images/integrity.png')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/clients/images/integrity-hover.png')}}" alt="" class="img-fluid">
                    </div>
                    <h3>Integrity and Transparency</h3>
                </div>
                <div class="col">
                    <div class="about__services--icon">
                        <img src="{{asset('assets/clients/images/resourceful.png')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/clients/images/resourceful-hover.png')}}" alt="" class="img-fluid">
                    </div>
                    <h3>Resourceful</h3>
                </div>
                <div class="col">
                    <div class="about__services--icon">
                        <img src="{{asset('assets/clients/images/innovative.png')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/clients/images/innovative-hover.png')}}" alt="" class="img-fluid">
                    </div>
                    <h3>Innovative<br/>and Tech-driven</h3>
                </div>
                <div class="col">
                    <div class="about__services--icon">
                        <img src="{{asset('assets/clients/images/insightful.png')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/clients/images/insightful-hover.png')}}" alt="" class="img-fluid">
                    </div>
                    <h3>Insightful</h3>
                </div>
                <div class="col">
                    <div class="about__services--icon">
                        <img src="{{asset('assets/clients/images/sustainability.png')}}" alt="" class="img-fluid">
                        <img src="{{asset('assets/clients/images/sustainability-hover.png')}}" alt="" class="img-fluid">
                    </div>
                    <h3>Sustainability</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection