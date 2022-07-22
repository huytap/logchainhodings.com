@extends('clients.layouts.main')
@section('css')
<style>
    .home__banner::after{
        background: url({{asset('uploads/'.$menu->banner)}}) no-repeat center top;
        background-size: cover;
    }
</style>
@endsection
@section('content')
<div class="banner home__banner">
    <img src="{{asset('uploads/'.$menu->banner_mobile)}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container">
        <div class="row">
            <div class="col-md-5">
                <div class="banner__content">
                    <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                        {!!$menu->banner_title!!}
                    </h1>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">
                        {!!$menu->banner_description!!}
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
                <h3 class="introduce__info--title wow fadeInUp" data-wow-duration="1.5s">{{$result1[0]['title']}}</h3>
                <div class="introduce__info--desc wow fadeInUp" data-wow-duration="1.5s">
                    {!!$result1[0]['description']!!}
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
                                <h3>{!!$rs['title']!!}</h3>
                                {!!$rs['description']!!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    @php 
        $collection3 = $collection->filter(function ($val, $key) {
            return $val->content_section==3;
        });
        $result3 = $collection3->all();
    @endphp
    @if(!empty($result3))
        <div class="introduce__journey">
            @foreach($result3 as $rs)
                <h3 class="introduce__info--title introduce__journey--title wow fadeInUp" data-wow-duration="1.5s">{{$rs['title']}}</h3>
                <img src="{{asset('uploads/'.$rs['photo'])}}" class="img-fluid d-none d-sm-block" alt="">
                <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" class="img-fluid d-md-none" alt="">
            @endforeach
        </div>
    @endif
    @php 
        $collection4 = $collection->filter(function ($val, $key) {
            return $val->content_section==4;
        });
        $result4 = $collection4->all();
    @endphp
    @if(!empty($result4))
        <div class="introduce__profile" id="porfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                        <h3>Portfolio</h3>
                        {{-- <p>We have invested in these exceptional businesses and assisted them in overcoming the most fundamental and difficult obstacles on their path to growth and expansion. We are supporting them in having a profound impact on the supply chain and logistics industry.</p> --}}
                    </div>
                </div>
                <div class="row">
                    @foreach($result4 as $key => $rs)
                        <div class="col-md-3 col-6 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="introduce__profile--item">
                                <a href="{{strip_tags($rs['description'])}}" target="_blank">
                                    <div class="introduce__profile--logo">
                                        <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="introduce__profile--desc">
                                        <span>{{$rs['title']}}</span>
                                        <span class="goto"><img src="{{asset('assets/clients/images/arrow__right.svg')}}" width="20" alt=""></span>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        @if($key%2==0)
                            <div class="w-100 d-block d-sm-none"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>
@endsection