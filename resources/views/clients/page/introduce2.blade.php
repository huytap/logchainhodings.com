@extends('clients.layouts.main')
@section('content')
@php 
$class = 'introduce';
@endphp
@include('clients.page._banner')
<div class="content">
    <div class="introduce__info" id="our-strategy">
        <div class="container">
            <h3 class="introduce__info--title wow fadeInUp" data-wow-duration="1.5s"><span>Our</span> Strategy</h3>
            <div class="introduce__info--desc wow fadeInUp" data-wow-duration="1.5s">
                <p>With the goal of establishing a robust logistics and supply chain ecosystem in Vietnam, we leverage our abundant financial resources and years of experience in this industry to enable logistics and supply chain companies to succeed and reach their full potential.</p>
                <div class="introduce__info--detail">
                    <h3></h3>
                    <p>We invest in early-stage logistics startups to help them scale their business models and become leaders in their respective industries.</p>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-md-3">
                    <img src="{{asset('assets/clients/images/intro1.png')}}" alt="" class="img-fluid">
                    <div class="introduce__item--desc">
                        <h3>What We Invest In</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/clients/images/intro2.png')}}" alt="" class="img-fluid">
                    <div class="introduce__item--desc">
                        <h3>Logistics Real Estate</h3>
                        <p>We invest in high-quality logistics real estate projects/assets, such as warehouses, distribution centers, and fulfillment centers, on a value basis.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/clients/images/intro3.png')}}" alt="" class="img-fluid">
                    <div class="introduce__item--desc">
                        <h3>Fair and Event</h3>
                        <p>We invest in companies that provide all-around service in all aspects of fair and event logistics.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/clients/images/intro4.png')}}" alt="" class="img-fluid">
                    <div class="introduce__item--desc">
                        <h3>Financial Investment</h3>
                        <p>We seek any possible financial investment to put our money to work and potentially increase our wealth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="introduce__profile" id="porfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                    <h3>Portfolio</h3>
                    <p>The team behind Logchain Group has started and built up companies with significant value.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__profile--item">
                        <a class="introduce__profile--logo" href="https://logchain.vn" target="_blank">
                            <img src="{{asset('assets/clients/images/logo-logchain.png')}}" alt="" class="img-fluid">
                        </a>
                        <div class="introduce__profile--desc">
                            <h4>Logchain Group</h4>
                            <p>Logchain Aviation provides an international network with vast experience, flexibility, reliability and committed service for real-time Customized Logistics Solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__profile--item">
                        <a class="introduce__profile--logo galaxy" href="https://galaxyexpress.vn" target="_blank">
                            <img src="{{asset('assets/clients/images/logo-galaxy.png')}}" alt="" class="img-fluid">
                        </a>
                        <div class="introduce__profile--desc">
                            <h4>Galaxy Express</h4>
                            <p>Founded in 1999 with a long history and expertise in Logistics, and Global Forwarding, Galaxy Express' expertise use a wealth of routing and pricing experience to transport your freight in the most efficient, cost-effective, with a wide range connected with reliable partners all over the world. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="introduce__news" id="news">
        <div class="container">
            <h3 class="introduce__news--title wow fadeInUp" data-wow-duration="1.5s"><span>Our</span> latest news</h3>
            <div class="row">
                <div class="col-md-10 wow fadeInUp" data-wow-duration="1.5s">
                    <p>Top news and in-depth analysis on the world of logistics, from supply chain to transport and technology.</p>
                </div>
                <div class="col-md-2 text-end wow fadeInUp" data-wow-duration="1.5s">
                    <a href="#" class="introduce__news--more">Read more <span><img src="{{asset('assets/clients/images/news__icon--right.svg')}}" alt=""></span></a>
                </div>
            </div>
            <div class="row introduce__news--list">
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__news--item">
                        <div class="introduce__news--img">
                            <img src="{{asset('assets/clients/images/news1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="introduce__news--desc">
                            <h4>PACKAGING TECHNOLOGIES FOR TEMPERATURE-SENSITIVE GOODS</h4>
                            <span class="introduce__news--date">20 Feb 2022</span>
                            <p>New packaging innovations are helping to keep convenience food fresh and meet the customers’ satisfaction across the globe. Let’s take a look at five packaging technologies that are driving innovation...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__news--item">
                        <div class="introduce__news--img">
                            <img src="{{asset('assets/clients/images/news2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="introduce__news--desc">
                            <h4>FROM JUST-IN-TIME TO JUST-IN-CASE</h4>
                            <span class="introduce__news--date">20 Feb 2022</span>
                            <p>In the wake of the Covid-19 pandemic’s global supply chain disruption, businesses understood the weaknesses in just-in-time inventory management...</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="introduce__news--item">
                        <div class="introduce__news--img">
                            <img src="{{asset('assets/clients/images/news3.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="introduce__news--desc">
                            <h4>VIETNAM AMENDS LAND BORDER GATE MANAGEMENT REGULATIONS BUSINESS SHOULD NOTES FOR FOREIGN TRADE</h4>
                            <span class="introduce__news--date">20 Feb 2022</span>
                            <p>To comply with administrative procedure reform requirements, strengthen the application of information technology, and modernize border inspection and control. Decree No. 112/2014/ND-CP is amended and supplemented with 5 main contents...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="introduce__contact" id="contact-us">
        <div class="container">
            <div class="row">
                <div id="contact-info" class="col-md-4 introduce__contact--info wow fadeInUp" data-wow-duration="1.5s">
                    <h3 class="introduce__contact--title">HCM Office</h3>
                    <div class="introduce__contact--text">11 Nguyen Huy Tuong St., W.6, Binh Thanh, HCMC, Vietnam</div>
                    <div class="introduce__contact--text tel">Tel: <a href="tel:+842822122176">(+84) 28 221 221 76</a></div>
                    <h3 class="introduce__contact--title hanoi">Hanoi Office</h3>
                    <div class="introduce__contact--text">106 Hoang Quoc Viet St., Nghia Do Ward, Cau Giay, Hanoi, Vietnam</div>
                    <div class="introduce__contact--text tel">Tel: <a href="tel:+842466622260">(+84) 24 666 222 60</a></div>
                </div>
            </div>
        </div>
        <div class="introduce__contact--map wow fadeInUp" data-wow-duration="1.5s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0918255542665!2d106.68482002696179!3d10.804278867682502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c4c394e9eb%3A0x4b248ececfe072a9!2zMTEgTmd1eeG7hW4gSHV5IFTGsOG7n25nLCBQaMaw4budbmcgNiwgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653116319384!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
$(document).ready(function(){
    var w = $(window).width();
    var innerW = $('#contact-us').find('.container').width();
    var infoW = $('#contact-info').width();
    var newW = ((w-innerW)/2 + (innerW - infoW - 30));
    console.log(newW)
    $('.introduce__contact--map').css('width', newW+'px')
})
</script>
@endsection