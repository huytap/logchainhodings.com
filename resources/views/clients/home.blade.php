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
    @php 
        $collection5 = $collection->filter(function ($val, $key) {
            return $val->content_section==5;
        });
        $result5 = $collection5->all();
        $collection6 = $collection->filter(function ($val, $key) {
            return $val->content_section==6;
        });
        $result6 = $collection6->all();
        $collection7 = $collection->filter(function ($val, $key) {
            return $val->content_section==7;
        });
        $result7 = $collection7->all();
    @endphp
    <div class="investment">
        <h3 class="investment__title d-md-none d-block">@lang('logchain.title.investment')</h3>
        <div class="investment__menu wow fadeInUp" data-wow-duration="2.5s">
            <div class="investment__logo">
                <img src="{{asset('assets/clients/images/logo-footer.png')}}" class="img-fluid" alt="">
            </div>
            <ul class="radialmenu">
                <li class="one">
                    <a href="#aviation" class="active"><span>Aviation</span></a>
                </li>
                <li class="two">
                    <a href="#real-estate"><span>Real Estate</span></a>
                </li>
                <li class="three">
                    <a href="#logistics"><span>Logistics<br class="d-block d-md-none"/> & <br/>Supply <br class="d-block d-md-none"/>Chain</span></a>
                </li>
                <li class="four">
                    <a href="#"><span>E-Logistics</span></a>
                </li>
                <li class="five">
                    <a href="#"><span>Trading</span></a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div class="col-md-10 offset-md-2">
                <h3 class="investment__title d-none d-md-block">@lang('logchain.title.investment')</h3>
                <div id="aviation" class="investment__items active wow fadeInUp" data-wow-duration="1.5s">
                    <div class="row">
                    @foreach($result5 as $rs)
                        <div class="col-6 mb-md-4 mb-3">
                            <img src="{{asset('uploads/'.$rs['photo'])}}" class="img-fluid d-none d-md-block" alt="">
                            <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" class="img-fluid d-block d-sm-none" alt="">
                            <h4 class="investment__items--title">{{$rs['title'][$lang]}}</h4>
                        </div>
                    @endforeach
                    </div>
                </div>
                <div id="real-estate" class="investment__items" >
                    <div class="row">
                        @foreach($result6 as $rs)
                            <div class="col-6 mb-md-4 mb-3">
                                <img src="{{asset('uploads/'.$rs['photo'])}}" class="img-fluid d-none d-md-block" alt="">
                                <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" class="img-fluid d-block d-sm-none" alt="">
                                <h4 class="investment__items--title">{{$rs['title'][$lang]}}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="logistics" class="investment__items" >
                    <div class="row">
                        @foreach($result7 as $rs)
                            <div class="col-6 mb-md-4 mb-3">
                                <img src="{{asset('uploads/'.$rs['photo'])}}" class="img-fluid d-none d-md-block" alt="">
                                <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" class="img-fluid d-block d-sm-none" alt="">
                                <h4 class="investment__items--title">{{$rs['title'][$lang]}}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        var fullW = $(window).width();
        if(fullW>=992){
            var w_content = 960;
            if(fullW >= 1400){
                w_content = 1320;
            }else if(fullW>=1200){
                w_content = 1140;
            }
            var col_2 = w_content * 16.66666667 / 100;
            var max_width = (((fullW - w_content) / 2 + col_2)*2) - 30;
            if(fullW >=1200){
                max_width = (((fullW - w_content) / 2 + col_2)*2) - 100;
            }
            var mTop = (($('.investment .investment__title').height() + $('.investment img').height() - (max_width/2)) / 2);
            if(max_width > 695){
                max_width = 695;
            }
            $('.radialmenu').css({
                width: max_width,
                height: max_width,
                //top: mTop > 0 ? mTop : 0 
            });
            $('.radialmenu').find('li').css({
                width: max_width,
                height: max_width,
                left: -max_width/2,
                clip: 'rect(0, ' + max_width +'px, '+ max_width +'px,'+ (max_width/2) +'px)'
            })
            $('.radialmenu').find('li a').css({
                width: max_width,
                height: max_width,
                clip: 'rect(0, ' + ((max_width/2) - 1) +'px, '+ max_width +'px, 0)'
            })
        }else{
            if(fullW > 480){
                fullW = 480;
            }
            $('.radialmenu').css({
                width: fullW,
                height: (fullW/2) + 30,
            });
            $('.radialmenu').find('li').css({
                width: fullW,
                height: fullW,
                top: -fullW/2,
                clip: 'rect(0, ' + fullW +'px, '+ fullW +'px,'+ (fullW/2) +'px)'
            })
            $('.radialmenu').find('li a').css({
                width: fullW,
                height: fullW,
                clip: 'rect(0, ' + ((fullW/2) - 1) +'px, '+ fullW +'px, 0)'
            })
        }
        $('.radialmenu').find('li').each(function(i, j){
            $(j).click(function(e){
                e.preventDefault();
            })
            $(j).hover(function(){
                var el = $(this).find('a').attr('href');
                if($(this).find('a').hasClass('active')){

                }else{
                    $('.radialmenu').find('li a').removeClass('active');
                    $('.investment__items').removeClass('active');
                    if($(el).length){
                        $(el).addClass('active');
                        $(this).find('a').addClass('active');
                    }else{
                        $('#aviation').addClass('active');
                        $('.radialmenu').find('li:first-child').find('a').addClass('active')
                    }
                }
            })
        })
    })
</script>
@endsection
@section('css')
<style>
    .home__banner::after{
        background: url({{asset('uploads/'.$menu->banner)}}) no-repeat center top;
        background-size: cover;
    }
</style>
@endsection
