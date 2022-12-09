@extends('clients.layouts.main')
@section('content')
<div class="banner home__banner">
    <img src="{{asset('uploads/'.$menu->banner_mobile)}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container">
        <div class="row">
            <div class="col-md-5">
                <div class="banner__content">
                    <h1 class="banner__title2 banner__title--home wow fadeInUp" data-wow-duration="1.5s">
                        {!!$menu->banner_title[$lang]!!}
                    </h1>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">
                        {!!$menu->banner_description[$lang]!!}
                    </p>
                </div>
            </div>
        </div>        
    </div>        
</div>
@php 
    $collection1 = $collection->filter(function ($val, $key) {
        return $val->content_section==1;
    });
    $result1 = $collection1->all();
@endphp
<div class="content">
    <div class="introduce__info" id="our-strategy">
        <div class="container">
            @if(!empty($result1))
                @if($result1[0]['title'][$lang])
                    <h3 class="introduce__info--title wow fadeInUp" data-wow-duration="1.5s">{{$result1[0]['title'][$lang]}}</h3>
                @endif
                <div class="introduce__info--desc wow fadeInUp" data-wow-duration="1.5s">
                    {!!$result1[0]['description'][$lang]!!}
                </div>
            @endif
            @php 
                $collection2 = $collection->filter(function ($val, $key) {
                    return $val->content_section==2;
                });
                $result2 = $collection2->all();
            @endphp
            @if(!empty($result2))
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                @foreach($result2 as $rs)
                    <div class="col-md-3">
                        <div class="introduce__item">
                            <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" style="min-width: 78px" class="introduce__item--img img-fluid">
                            <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" style="min-width: 78px" alt="" class="introduce__item--img__hover img-fluid">
                            <div class="introduce__item--desc">
                                <h3>{!! $rs['title'][$lang]??'' !!}</h3>
                                {!! $rs['description'][$lang]??'' !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <div class="investment">
        <div class="investment__menu wow fadeInUp" data-wow-duration="2.5s">
        <ul class='radialmenu'>
            <li class='one'>
            <a href='#' class="active"><span>Aviation</span></a>
            </li>
            <li class='two'>
            <a href='#'><span>Real Estate</span></a>
            </li>
            <li class='three'>
            <a href='#'><span>Logistics & <br/>Supply Chain</span></a>
            </li>
            <li class='four'>
            <a href='#'><span>E-Logistics</span></a>
            </li>
            <li class='five'>
            <a href='#'><span>Trading</span></a>
            </li>
        </ul>
        </div>
        <div class="container">
            <div class="col-md-10 offset-md-2">
                <h3 class="investment__title">@lang('logchain.title.investment')</h3>
                <img src="{{asset('investment__bg.jpg')}}" class="img-fluid wow fadeInUp" data-wow-duration="1.5s" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    .home__banner::after{
        background: url({{asset('uploads/'.$menu->banner)}}) no-repeat center top;
        background-size: cover;
    }
</style>
@endsection
