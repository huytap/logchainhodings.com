@extends('clients.layouts.main')
@section('content')
@php 
$class = 'global__banner';
@endphp
@include('clients.page._banner')

<div class="content">        
    <div class="container">
        @if(!empty($network))
        <div class="network">
            @foreach($network as $dt)
            <div class="network__list wow fadeInUp" data-wow-duration="1.5s">
                <h3 class="network__title">
                    {!! $dt->title !!}
                </h3>
                @php
                $items = App\Models\Networkitem::getList($dt->id)    
                @endphp
                @if(!empty($items))
                <ul>
                    @foreach($items as $item)
                    <li><img src="{{asset('uploads/'. $item->photo)}}" class="img-responsive" alt=""></li>
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
setTimeout(function(){
    var bannerHeight = document.getElementById('banner')
    var height = bannerHeight.offsetHeight - 100
    document.getElementById('banner').style.height = height + 'px'
}, 1000)
    
</script>
@endsection