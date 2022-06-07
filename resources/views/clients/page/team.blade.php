@extends('clients.layouts.main')
@section('content')
@php
use App\Models\Setting;
$class='team__banner';
@endphp
<div class="banner {{$class}}" id="banner" style="background: url({{asset('assets/clients/images/team-banner.jpg')}}) no-repeat;background-size: cover;">
    <div class="container banner__container text-center">
        <div class="banner__content">
            <h1 class="banner__title3 wow fadeInUp" data-wow-duration="1.5s">
                OUR TEAM
            </h1>
            <p class="wow fadeInUp" data-wow-duration="1.5s">We are an experienced team in the Logistics and Supply Chain space, always ready to collaborate with you to capitalize on business opportunities and overcome obstacles. Our team are driven by cutting-edge technologies that streamline supply chain processes, as well as a common goal of building a sustainable logistics ecosystem in Vietnam.</p>
        </div> 
    </div>        
</div>
<div class="content team">        
    <div class="container">
        <div class="team__info">
            <div class="row">
                <div class="col-md-5">
                    <div class="team__info--left">
                    <h3>
                        Mr.Anh Vu
                        <span>Chairman</span>
                    </h3>
                </div>
                </div>
                <div class="col-md-7">
                    <div class="team__info--right">
                    <ul>
                        <li>21+ Years in Logistics Industry.</li>
                        <li>11+ Years in C-Level Experienced to set up and perform MNC’s client’s requirements and ecommerce logistics.</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="team__list">
            <div class="row">
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Ms. Ruby Nguyen
                        <span>CFO</span>
                    </h3>
                    <ul>
                        <li>27+ Years in Finance Field.</li>
                        <li>15+ Years in CFO level.</li>
                        <li>Strong footprint in corporate financial division.</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Ms. Bekka Nguyen
                        <span>COO</span>
                    </h3>
                    <ul>
                        <li>10 Years in Logistics Industry.</li>
                        <li>3 Years in Sales Division.</li>
                        <li>Experienced to operate and develop MNC and local base customers’ portfolio.</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Ms. Tien Le
                        <span>CTO</span>
                    </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Oversea Investors
                        <span>&nbsp;</span>
                    </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Ms. Susan Tran
                        <span>Aviation</span>
                    </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Mr. Brian Van
                        <span>Solutions</span>
                    </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Ms. Annie Le
                        <span>Forwarding</span>
                    </h3>
                    <ul>
                        <li>27+ Years in Logistics Industry.</li>
                        <li>12+ Years managed contract logistics in Vietnam.</li>
                        <li>Experienced to develop domestics products segments.</li>
                    </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="team__list--item">
                    <h3>
                        Mr. Abra Tran
                        <span>Corporate Relationship</span>
                    </h3>
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
        var bannerHeight = document.getElementById('banner')
        var height = bannerHeight.offsetHeight
        document.getElementById('banner').style.height = height + 'px'
    }
    </script>
@endsection