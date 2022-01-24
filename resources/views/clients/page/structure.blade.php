@extends('clients.layouts.main')
@section('content')
@php
    $class = 'structure__banner';   
@endphp
@include('clients.page._banner')
<div class="content">        
    <div class="container">
        <div class="board wow fadeInUp" data-wow-duration="1.5s">
            <div class="board__management">
                <div class="btn-board">Board of Management</div>
            </div>
            <div class="board__list" id="boardlist">
                <div class="board__item">
                    <ul>
                        <li>
                            <img src="{{asset('assets/clients/images')}}/logo-logchain.png" class="img-responsive" alt="">
                        </li>
                        <li>Air Charter Service</li>
                        <li>Airline GSA</li>
                        <li>Ground Handling Agent (GHA)</li>
                    </ul>
                </div>
                <div class="board__item">
                    <ul>
                        <li>
                            <img src="{{asset('assets/clients/images')}}/logo-forwarding.png" class="img-responsive" alt="">
                        </li>
                        <li>Air Freight</li>
                        <li>Ocean Freight</li>
                    </ul>
                </div>
                <div class="board__item">
                    <ul>
                        <li>
                            <img src="{{asset('assets/clients/images')}}/logo-solution.png" class="img-responsive" alt="">
                        </li>
                        <li>Brokerage</li>
                        <li>Domestics Transportation</li>
                        <li>Cold Chain</li>
                        <li>Warehousing</li>
                        <li>Special Product (Chemical/ Project/ F&E/ X-Border)</li>
                    </ul>
                </div>
                <div class="board__item">
                    <ul>
                        <li>
                            Group Share Service
                        </li>
                        <li>Finace</li>
                        <li>Internal Control/QEHSS</li>
                        <li>Marketing/ PR</li>
                        <li>HR/ Legal</li>
                        <li>IT</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="journey">
            <h3 class="journey__title wow fadeInUp" data-wow-duration="1.5s"><span>Our</span> People</h3>
            <div class="journey__desc wow fadeInUp" data-wow-duration="1.5s">
                <p>
                    To address all customer requirements thoroughly, we have segmented<br/>
                    our supply chain service into <strong>three major businesses</strong>
                </p>
            </div>
            <ul>
                <li class="wow fadeInUp" data-wow-duration="1.5s">
                    <div class="journey__photo"><img src="{{asset('assets/clients/images')}}/journey1.jpg" class="img-responsive" alt=""></div>
                    <div class="journey__info">
                        <h3 class="journey__name">Louis Vu</h3>
                        <p>Chairman</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1.5s">
                    <div class="journey__photo"><img src="{{asset('assets/clients/images')}}/journey2.jpg" class="img-responsive" alt=""></div>                        
                    <div class="journey__info">
                        <h3 class="journey__name">Louis Vu</h3>
                        <p>Chairman</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1.5s">
                    <div class="journey__photo"><img src="{{asset('assets/clients/images')}}/journey3.jpg" class="img-responsive" alt=""></div>
                    <div class="journey__info">
                        <h3 class="journey__name">Louis Vu</h3>
                        <p>Chairman</p>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1.5s">
                    <div class="journey__photo"><img src="{{asset('assets/clients/images')}}/journey4.jpg" class="img-responsive" alt=""></div>
                    <div class="journey__info">
                        <h3 class="journey__name">Louis Vu</h3>
                        <p>Chairman</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('assets/clients/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/clients/js/bxslider.min.js')}}"></script>
<script type="text/javascript">
    if($(window).width() < 768){
        $('#boardlist').bxSlider({
            mode: 'fade',
            captions: false,
            touchEnabled: true,
            controls: false
        });
    }
</script>
@endsection