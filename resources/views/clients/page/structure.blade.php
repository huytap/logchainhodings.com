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
        @php
            $collection1 = $collection->filter(function ($val, $key) {
                return $val->content_section==1;
            });
            $result1 = $collection1->first();

            $collection2 = $collection->filter(function ($val, $key) {
                return $val->content_section==2;
            });
            $result2 = $collection2->all();

        @endphp
        @if(!empty($result1))
            <div class="journey">
                <h3 class="journey__title wow fadeInUp" data-wow-duration="1.5s">{!! $result1->title !!}</h3>
                <div class="journey__desc wow fadeInUp" data-wow-duration="1.5s">
                    {!! $result1->description !!}
                </div>
                @if(!empty($result2))
                <ul>
                    @foreach($result2 as $dt)
                    <li class="wow fadeInUp" data-wow-duration="1.5s">
                        <div class="journey__photo"><img src="{{asset('uploads/'. $dt->photo)}}" class="img-responsive" alt=""></div>
                        <div class="journey__info">
                            <h3 class="journey__name">{{$dt->title}}</h3>
                            {!! $dt->description !!}
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        @endif
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