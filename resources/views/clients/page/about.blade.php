@extends('clients.layouts.main')
@section('css')
<style>
    .banner__about{
        background: url({{asset('uploads/'. $menu['banner'])}}) no-repeat;
        background-size: cover;
    }
</style>
@endsection
@section('content')
<div class="banner banner__about" id="banner">
    <img src="{{asset('uploads/'.$menu['banner_mobile'])}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container text-center">
        <div class="banner__content">
            <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                {{$menu['banner_title']}}
            </h1>
            <p class="wow fadeInUp" data-wow-duration="1.5s">
                {{$menu['banner_description']}}
            </p>
        </div> 
    </div>        
</div>
<div class="content about">
    <div class="container">
        @php 
            $collection1 = $collection->filter(function ($val, $key) {
                return $val->content_section==1;
            });
            $result1 = $collection1->all();
        @endphp
        @if(!empty($result1))
        @foreach($result1 as $rs)
            <div class="about__info">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="d-none d-sm-block img-fluid">
                        <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" alt="" class="d-sm-none d-block img-fluid">
                    </div>
                    <div class="col-md-8 about__info--desc">
                        <div class="about__info--desc__content">
                            <h2>{{$rs['title']}}</h2>
                            {!!$rs['description']!!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        <div class="about__services">
            <h3 class="about__services--title">Core Values</h3>
            <div class="row">
                @php 
                    $collection2 = $collection->filter(function ($val, $key) {
                        return $val->content_section==2;
                    });
                    $result2 = $collection2->all();
                @endphp
                @if(!empty($result2))
                @foreach($result2 as $rs)
                    <div class="col">
                        <div class="about__services--icon">
                            <img src="{{asset('uploads/'. $rs['photo'])}}" alt="" class="img-fluid">
                            <img src="{{asset('uploads/'. $rs['photo_mobile'])}}" alt="" class="img-fluid">
                        </div>
                        <h3>{!!$rs['title']!!}</h3>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection