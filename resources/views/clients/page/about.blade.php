@extends('clients.layouts.main')
@section('content')
<div class="banner banner__about" id="banner">
    <img src="{{asset('uploads/'.$menu['banner_mobile'])}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container text-center">
        <div class="banner__content">
            <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                {{$menu['banner_title'][$lang]}}
            </h1>
            <p class="wow fadeInUp" data-wow-duration="1.5s">
                {{$menu['banner_description'][$lang]}}
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
                            <h2>{{$rs['title'][$lang]}}</h2>
                            {!!$rs['description'][$lang]!!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endif
        <div class="about__services">
            <h3 class="about__services--title">@lang('logchain.title.core_values')</h3>
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
                        <h4>{!! isset($rs['title'][$lang])?$rs['title'][$lang]:''!!}</h4>
                    </div>
                @endforeach
                @endif
            </div>
            @php 
                $collection3 = $collection->filter(function ($val, $key) {
                    return $val->content_section==3;
                });
                $result3 = $collection3->all();
            @endphp
            <h3 class="about__code--title">@lang('logchain.title.code_of_practices')</h3>
            <div class="row">
                <div class="col-md-10 offset-md-1">    
                    @if(!empty($result3))
                    <?php 
                    $html_odd = $html_even = '';
                    $i=0;
                    ?>
                    <div class="about__code--list row">
                        @foreach($result3 as $key => $rs)
                            @if(isset($rs['title'][$lang]))
                                @php
                                if($i<3)
                                    $html_odd .= '
                                        <div class="about__code--list__item">
                                            <span>'.($i+1).'</span> '.$rs['title'][$lang].'
                                            <div class="about__code--list__detail">
                                                '. $rs['description'][$lang] .'
                                            </div>
                                        </div>';
                                else 
                                    $html_even .= '
                                        <div class="about__code--list__item">
                                            <span>'.($i+1).'</span> '. $rs['title'][$lang].'
                                            <div class="about__code--list__detail">
                                                '. $rs['description'][$lang] .'
                                            </div>
                                        </div>';
                                $i++;
                                @endphp
                            @endif
                        @endforeach
                        <div class="col-md-6">{!! $html_odd !!}</div>
                        <div class="col-md-6">{!! $html_even !!}</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    .banner__about{
        background: url({{asset('uploads/'. $menu['banner'])}}) no-repeat;
        background-size: cover;
    }
</style>
@endsection