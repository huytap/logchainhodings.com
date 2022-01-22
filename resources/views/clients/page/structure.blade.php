@extends('clients.layouts.main')
@section('content')
<x-clients.banner photo="{{asset('assets/clients/images')}}/structure-banner.jpg">
    Our<br/>
    <span>Structure<br/>& People</span>
</x-clients.banner>
<div class="content">        
    <div class="container">
        <div class="board">
            <div class="board__management wow fadeInUp" data-wow-duration="1.5s">
                <div class="btn-board">Board of Management</div>
            </div>
            <div class="board__list">
                <div class="board__item wow fadeInUp" data-wow-duration="1.5s">
                    <ul>
                        <li>
                            <img src="{{asset('assets/clients/images')}}/logo-logchain.png" class="img-responsive" alt="">
                        </li>
                        <li>Air Charter Service</li>
                        <li>Airline GSA</li>
                        <li>Ground Handling Agent (GHA)</li>
                    </ul>
                </div>
                <div class="board__item wow fadeInUp" data-wow-duration="1.5s">
                    <ul>
                        <li>
                            <img src="{{asset('assets/clients/images')}}/logo-forwarding.png" class="img-responsive" alt="">
                        </li>
                        <li>Air Freight</li>
                        <li>Ocean Freight</li>
                    </ul>
                </div>
                <div class="board__item wow fadeInUp" data-wow-duration="1.5s">
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
                <div class="board__item wow fadeInUp" data-wow-duration="1.5s">
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
            <h3 class="journey__title wow fadeInUp" data-wow-duration="1.5s"><span>Our</span> Journey</h3>
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