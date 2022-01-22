@extends('clients.layouts.main')
@section('content')
<x-clients.banner photo="{{asset('uploads/'. $menu->banner)}}" 
    mobile="{{asset('uploads/'.$menu->banner_mobile)}}">
    {!!$menu->banner_title!!}
</x-clients.banner>
<div class="content">
    @php 
        $collection1 = $collection->filter(function ($val, $key) {
            return $val->content_section==1;
        });
        $result1 = $collection1->all();
    @endphp
    @if(!empty($result1))
    <section class="solutions">
        <div class="container">   
            @foreach($result1 as $key => $dt)            
                @if($key % 2== 0)
                    <div class="solution__item wow fadeInUp" data-wow-duration="1.5s">
                        <div class="solution__photo full-width">
                            <img src="{{asset('uploads/'. $dt['photo'])}}" class="img-responsive">
                        </div>
                        <div class="solution__desc full-width">
                            <h3 class="solution__title">
                                {!!$dt['title']!!}
                            </h3>
                            {!!$dt['description']!!}
                        </div>
                    </div>
                @else
                    <div class="solution__item wow fadeInUp" data-wow-duration="1.5s">
                        <div class="solution__desc full-width">
                            <h3 class="solution__title ">
                                {!!$dt['title']!!}
                            </h3>
                            {!!$dt['description']!!}
                        </div>
                        <div class="solution__photo full-width">
                            <img src="{{asset('uploads/'. $dt['photo'])}}" class="img-responsive">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    @endif

    @php 
        $collection2 = $collection->filter(function ($val, $key) {
            return $val->content_section==2;
        });
        $result2 = $collection2->all();
    @endphp
    <section class="ecosystem">
        <div class="container">
            @if(!empty($result2))
                @foreach($result2 as $key => $dt)    
                    <h3 class="ecosystem__title wow fadeInUp" data-wow-duration="1.5s">{!! $dt['title'] !!}</h3>
                    <div class="ecosystem__info wow fadeInUp" data-wow-duration="1.5s">
                        {!! $dt['description'] !!}
                    </div>
                @endforeach
            @endif
            @if(!empty($ecosystems))
                <div class="ecosystem__list wow fadeInUp" data-wow-duration="1.5s" id="ecosystem">
                    @foreach($ecosystems as $dt)
                        <div class="ecosystem__item">
                            <div class="ecosystem__photo">
                                <img src="{{asset('uploads/'. $dt->photo)}}" class="img-responsive" />
                            </div>
                            <div class="ecosystem__desc">
                                <div class="ecosystem__logo">
                                    <img src="{{asset('uploads/'. $dt->logo)}}" class="img-responsive" />
                                </div>
                                <div class="ecosystem_detail">
                                    {!! $dt->description !!}
                                </div>
                            </div>
                            <a href="{{$dt->link}}" class="btn btn-explore">Explore <img src="{{asset('assets/clients/images')}}/right-arrow.png" alt=""></a>
                        </div>
                    @endforeach
                </div>
                <div class="ecosystem__nav">
                    <div id="ecosystem__prev" role="button" aria-label="Prev slide" aria-disabled="false"></div>
                    <div id="ecosystem__next" role="button" aria-label="Next slide" aria-disabled="false"></div>
                </div>
            @endif
        </div>
    </section>

    @php 
        $collection3 = $collection->filter(function ($val, $key) {
            return $val->content_section==3;
        });
        $result3 = $collection3->all();
    @endphp
    @if(!empty($result3))        
    <section class="map">
        @foreach($result3 as $key => $dt)
            <div class="map__journey wow fadeInUp" data-wow-duration="1.5s">
                <h3>{!! $dt['title'] !!}</h3>
                {!! $dt['description'] !!}
            </div>
            <img src="{{asset('uploads/'.$dt['photo_mobile'])}}" class="img-responsive hidden-md wow fadeInUp" data-wow-duration="1.5s" alt="">
            <img src="{{asset('uploads/'.$dt['photo'])}}" class="img-responsive hidden-xs wow fadeInUp" data-wow-duration="1.5s" alt="">
        @endforeach
    </section>
    @endif
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('assets/clients/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/clients/js/bxslider.min.js')}}"></script>
<script type="text/javascript">
    if($(window).width() < 768){
        $('#ecosystem').bxSlider({
            mode: 'fade',
            captions: false,
            touchEnabled: false,
            nextSelector: "#ecosystem__next",
            prevSelector: "#ecosystem__prev",
            nextText: '<img src=\'{{asset("assets/clients/images/icon_arrow-right.svg")}}\' class="img-responsive">',
            prevText: '<img src=\'{{asset("assets/clients/images/icon_arrow-left.svg")}}\' class="img-responsive">',
            pager: false,
        });
    }
</script>
@endsection