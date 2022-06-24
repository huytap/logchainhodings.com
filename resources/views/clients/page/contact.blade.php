@extends('clients.layouts.main')
@section('content')
@php
use App\Models\Setting;
$class='contact__banner';
@endphp
<div class="banner {{$class}}">
    <img src="{{asset('assets/clients/images/contact-banner-m.jpg')}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container text-center">
        <div class="banner__content">
            <h1 class="banner__title2 wow fadeInUp" data-wow-duration="1.5s">
                Contact
            </h1>
        </div> 
    </div>        
</div>
<div class="content content__contact">        
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 offset-md-1 contact__item wow fadeInUp" data-wow-duration="1.5s">
                    {{-- <h3>{{ strip_tags(Setting::getValue('owner'))}}</h3>
                    <div class="contact__us">
                        <p>{{Setting::getValue('job_title')}}</p>
                        <a href="mailto:{{Setting::getValue('contact_email')}}">{{Setting::getValue('contact_email')}}</a>
                        <a href="tel:{{Setting::getValue('contact_phone')}}">{{Setting::getValue('contact_phone')}}</a>
                    </div> --}}
                    <div class="contact__branch">
                        <h4>{{ Setting::getValue('branch_title_1') }}</h4>
                        <p>{{ Setting::getValue('branch_add_1') }}</p>
                        <a href="tel:{{Setting::getValue('contact_phone')}}">Tel: {{Setting::getValue('contact_phone')}}</a>
                    </div>
                </div>
                <div class="col-md-2 contact__item wow fadeInUp" data-wow-duration="1.5s">
                    <div class="contact__branch">
                        <h4>{{ Setting::getValue('branch_title_2') }}</h4>
                        <p>{{ Setting::getValue('branch_add_2') }}</p>
                        <a href="tel:{{Setting::getValue('contact_phone_2')}}">{{Setting::getValue('contact_phone_2')}}</a>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="contact__map full-width wow fadeInUp" data-wow-duration="1.5s">
                        <iframe src="{{ Setting::getValue('map') }}" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
// setTimeout(function(){
//     var bannerHeight = document.getElementById('banner')
//     var height = bannerHeight.offsetHeight - 100
//     document.getElementById('banner').style.height = height + 'px'
// }, 1000)
</script>
@endsection