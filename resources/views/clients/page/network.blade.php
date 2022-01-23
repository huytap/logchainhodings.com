@extends('clients.layouts.main')
@section('content')
@php 
$class = 'global__banner';
@endphp
@include('clients.page._banner')

<div class="content">        
    <div class="container">
        <div class="network">
            <div class="network__list wow fadeInUp" data-wow-duration="1.5s">
                <h3 class="network__title">
                    Logistics
                    Association
                    <span>Network</span>
                </h3>
                <ul>
                    <li><img src="{{asset('assets/clients/images')}}/net1.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/net2.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/net3.png" class="img-responsive" alt=""></li>
                </ul>
            </div>
            <div class="network__list wow fadeInUp" data-wow-duration="1.5s">
                <h3 class="network__title">
                    Global
                    <span>Partners</span>
                </h3>
                <ul>
                    <li>
                        <span>Middle East & USA</span>
                        <img src="{{asset('assets/clients/images')}}/partner1.png" class="img-responsive" alt=""></li>
                    <li>
                        <span>Europe</span>
                        <img src="{{asset('assets/clients/images')}}/partner2.png" class="img-responsive" alt=""></li>
                </ul>
            </div>
            <div class="network__list wow fadeInUp" data-wow-duration="1.5s">
                <h3 class="network__title">
                    Preferred
                    <span>Carriers</span>
                </h3>
                <ul>
                    <li><img src="{{asset('assets/clients/images')}}/carries1.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries2.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries3.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries4.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries5.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries6.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries7.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries8.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries9.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries10.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries11.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries12.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries13.png" class="img-responsive" alt=""></li>
                    <li><img src="{{asset('assets/clients/images')}}/carries14.png" class="img-responsive" alt=""></li>
                </ul>
            </div>
        </div>
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