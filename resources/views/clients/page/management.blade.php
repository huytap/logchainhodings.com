@extends('clients.layouts.main')
@section('content')
@php 
$class = 'philosophy';
@endphp
@include('clients.page._banner')
@php 
    $collection1 = $collection->filter(function ($val, $key) {
        return $val->content_section==0;
    });
    $result1 = $collection1->first();

    $collection2 = $collection->filter(function ($val, $key) {
        return $val->content_section==1;
    });
    $result2 = $collection2->all();

    $collection3 = $collection->filter(function ($val, $key) {
        return $val->content_section==2;
    });
    $result3 = $collection3->all();
@endphp

<div class="content">
    <div class="container">
        <div class="mission">
            @if(!empty($result1))
                <div class="mission__photo full-width wow fadeInUp" data-wow-duration="1.5s"><img src="{{asset('uploads/'. $result1['photo'])}}" class="img-responsive" alt=""></div>
            @endif
            @if(!empty($result2))
                <div class="mission__content full-width wow fadeInUp" data-wow-duration="1.5s">
                @foreach($result2 as $dt)
                    <h3 class="mission__title">{{$dt['title']}}</h3>
                    {!! $dt['description'] !!}
                    @endforeach
                </div>
            @endif
        </div>
        @if(!empty($result3))
            <div class="management wow fadeInUp" data-wow-duration="1.5s">
                <ul>
                @foreach($result3 as $dt)
                    <li>
                        <div class="management__photo"><img src="{{asset('uploads/'. $dt['photo'])}}" class="img-responsive" alt=""></div>
                        <h3 class="management__title">{{$dt['title']}}</h3>
                        <div class="management__desc">
                            {!! $dt['description'] !!}
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
        @endif
    </div> 
</div> 

@endsection
