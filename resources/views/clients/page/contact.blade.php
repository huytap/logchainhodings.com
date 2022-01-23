@extends('clients.layouts.main')
@section('content')
@php
$class='contact__banner';
@endphp
@include('clients.page._banner')
<div class="content">        
    <div class="container">
        <div class="contact">
            <div class="contact__info full-width wow fadeInUp" data-wow-duration="1.5s">
                <h3>Louis Vu</h3>
                <div class="contact__us">
                    <p>Chairman</p>
                    <a href="mailto:louisvu@logchaingroup.com">louisvu@logchaingroup.com</a>
                    <a href="tel:+84935671368">(+84) 935 671 368</a>
                </div>
                <div class="contact__branch">
                    <h4>Hanoi Office</h4>
                    <p>106 Hoang Quoc Viet, Nghia Do, Cau Giay</p>
                </div>
                <div class="contact__branch">
                    <h4>Ho Chi Minh Office</h4>
                    <p>11 Nguyen Huy Tuong, Ward 6, Binh Thanh District</p>
                </div>
            </div>
            <div class="contact__map full-width wow fadeInUp" data-wow-duration="1.5s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6310694662266!2d105.7922946147636!3d21.04744288598829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3aad69ecdb%3A0xe886740e57b9af82!2zMTA2IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1642257709043!5m2!1svi!2s" width="570" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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