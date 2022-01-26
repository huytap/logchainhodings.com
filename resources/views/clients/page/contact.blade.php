@extends('clients.layouts.main')
@section('content')
@php
use App\Models\Setting;
$class='contact__banner';
@endphp
@include('clients.page._banner')
<div class="content">        
    <div class="container">
        <div class="contact">
            <div class="contact__info full-width wow fadeInUp" data-wow-duration="1.5s">
                <h3>{{ strip_tags(Setting::getValue('owner'))}}</h3>
                <div class="contact__us">
                    <p>{{Setting::getValue('job_title')}}</p>
                    <a href="mailto:{{Setting::getValue('contact_email')}}">{{Setting::getValue('contact_email')}}</a>
                    <a href="tel:{{Setting::getValue('contact_phone')}}">{{Setting::getValue('contact_phone')}}</a>
                </div>
                <div class="contact__branch">
                    <h4>{{ Setting::getValue('branch_title_1') }}</h4>
                    <p>{{ Setting::getValue('branch_add_1') }}</p>
                </div>
                <div class="contact__branch">
                    <h4>{{ Setting::getValue('branch_title_2') }}</h4>
                    <p>{{ Setting::getValue('branch_add_2') }}</p>
                </div>
            </div>
            <div class="contact__map full-width wow fadeInUp" data-wow-duration="1.5s">
                <iframe src="{{ Setting::getValue('map') }}" width="570" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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