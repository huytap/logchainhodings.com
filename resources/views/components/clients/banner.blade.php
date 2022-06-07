@section('css')
<style>
    .banner{
        background:url({{$photo}}) no-repeat center bottom;
        background-size: 100%;
    }
    @if(!empty($mobile))
        @media(max-width: 767px){
            .banner{
                background:url({{$mobile}}) no-repeat;
                background-size: 100%;
            }
        }
    @endif
</style>
@endsection
<div class="banner @if($attributes->has('class')){{ $attributes->get('class') }}@endif" id="banner">
    <div class="container">
        <h1 class="banner__title wow fadeInUp" data-wow-duration="1.5s">
            {{$slot}}
        </h1>
    </div>        
</div>
