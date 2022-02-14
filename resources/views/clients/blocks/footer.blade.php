@php
$menus = App\Models\Menu::getList();    
@endphp
<div class="footer wow fadeInUp" data-wow-duration="1.5s">
    <div class="container">
        <div class="footer__row">
            <a href="{{route('home')}}" class="footer__logo full-width"><img src="{{asset('assets/clients/images')}}/logo.png" class="img-responsive"></a>
            <div class="footer__quicklinks full-width">
                <h3 class="footer__title">QUICKLINKS</h3>
                <ul>
                    @foreach($menus as $menu)
                        <li><a href="{{route('page', $menu->slug)}}">{{$menu->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer__people full-width">
                <h3 class="footer__title">OUR MEMBERS</h3>
                <ul class="footer__img footer__brand">
                    <li><a href="https://galaxyexpress.vn/galaxy-express-solutions"><img src="{{asset('assets/clients/images')}}/logo-forwarding.png" class="img-responsive"></a></li>
                    <li><a href="https://galaxyexpress.vn/galaxy-express-forwarding"><img src="{{asset('assets/clients/images')}}/logo-solution.png" class="img-responsive"></a></li>
                    <li><a href="https://logchain.vn/"><img src="{{asset('assets/clients/images')}}/logo-logchain.png" class="img-responsive"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/clients/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/clients/js/js.js?'.time())}}"></script>