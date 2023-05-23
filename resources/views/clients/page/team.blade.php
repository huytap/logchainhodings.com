@extends('clients.layouts.main')
@section('content')
@php
use App\Models\Setting;
$class='team__banner';
@endphp
<div class="banner {{$class}}" id="banner">
    <img src="{{asset('uploads/'.$menu['banner_mobile'])}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container text-center">
        <div class="banner__content">
            <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                {{$menu['banner_title'][$lang]}}
            </h1>
        </div>
    </div>
</div>
<div class="content team">
    <div class="container">
        @php
            $collection1 = $collection->filter(function ($val, $key) {
                return $val->content_section==1;
            });
            $result1 = $collection1->all();
        @endphp
        {{-- @if(!empty($result1))
        @foreach($result1 as $rs)
            <div class="team__box">
                <div class="team__info">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="team__info--left">
                                @if($rs['photo'])
                                    <div class="team__info--cover">
                                        <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="img-fluid">
                                    </div>
                                @endif
                                <h3>
                                    {!! $rs['title'][$lang]??'' !!}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="team__info--right">
                                {!!$rs['description'][$lang] ?? ''!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endif --}}

        <div class="director team__list mx-0 mx-md-5 d-none d-md-block">
            <div class="row">
                @if(!empty($result1))
                    @foreach($result1 as $key => $rs)
                        <div class="col col-6 @if($key==0) pe-md-2 pe-0 @elseif($key==1) ps-md-2 ps-0 @endif">
                            <div class="team__list--item">
                                <div class="row">
                                    <div class="col col-12 col-md-4">
                                        @if($rs['photo'])
                                            <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="col col-12 col-md-8">
                                        @if(isset($rs['title'][$lang]))
                                            <h3>
                                                {!! $rs['title'][$lang]??'' !!}
                                            </h3>
                                            {!! $rs['description'][$lang]??'' !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-6 d-md-none">
                            <div class="team__list--item">
                                @if($rs['photo'])
                                    <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="img-fluid">
                                @endif
                                @if(isset($rs['title'][$lang]))
                                    <h3>{!! $rs['title'][$lang]??'' !!}</h3>
                                    {!! $rs['description'][$lang]??'' !!}
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        @php
            $collection2 = $collection->filter(function ($val, $key) {
                return $val->content_section==2;
            });
            $result2 = $collection2->all();
        @endphp
        @if(!empty($result1))
            <div class="team__list d-md-none"">
                <div class="row">
                    @foreach($result1 as $key => $rs)
                        <div class="col col-6 {{ !isset($rs['title'][$lang]) ? 'd-md-none' : '' }}">
                            <div class="team__list--item">
                                @if($rs['photo'])
                                    <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="img-fluid">
                                @endif
                                @if(isset($rs['title'][$lang]))
                                    <h3>{!! $rs['title'][$lang]??'' !!}</h3>
                                    {!! $rs['description'][$lang]??'' !!}
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if($collection2)
            <div class="team__list">
                <div class="row row-cols-2 row-cols-md-5">
                    @foreach($result2 as $rs)
                        <div class="col col-6 {{ !isset($rs['title'][$lang]) ? 'd-md-none' : '' }}">
                            <div class="team__list--item">
                                @if($rs['photo'])
                                    <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" class="img-fluid">
                                @endif
                                @if(isset($rs['title'][$lang]))
                                    <h3>
                                        {!! $rs['title'][$lang]??'' !!}
                                    </h3>
                                    {!! $rs['description'][$lang]??'' !!}
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
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
        if($(window).width() > 768){
            var bannerHeight = document.getElementById('banner')
            var height = bannerHeight.offsetHeight
            document.getElementById('banner').style.height = height + 'px'
        }
    }
    </script>
@endsection
@section('css')
<style>
    .banner{
        background: url({{asset('uploads/'. $menu['banner'])}}) no-repeat top center;
        background-size: cover;
    }
</style>
@endsection
