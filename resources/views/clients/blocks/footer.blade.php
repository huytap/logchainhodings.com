@php
$menus = App\Models\Menu::getList(); 
use App\Models\Setting;   
@endphp
<div class="footer">
    <div class="container">
        <div class="row footer__row">
            <div class="col-md-4 d-sm-flex align-items-md-center">
                <a href="{{route('home')}}" class="footer__logo full-width"><img src="{{asset('uploads/'.App\Models\Setting::getImage('logo_footer'))}}" class="img-fluid"></a>
            </div>
            <div class="col-md-6 col-5">
                <div class="footer__quicklinks full-width">
                    <h3 class="footer__title">QUICKLINKS</h3>
                    <ul class="navbarNavi">
                        <li><a href="{{route('home')}}">Home</a></li>
                        {{-- <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('ourteam')}}">The Team</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li> --}}
                        @foreach($menus as $menu)
                            <li><a href="{{route('page', $menu->slug)}}">{{$menu->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-7">
                <ul class="social">
                    <li><a href="{!! strip_tags(Setting::getValue('linkedin')) !!}"><img src="{{asset('assets/clients/images/linkedin.svg')}}" alt="">LinkedIn</a></li>
                    <li><a href="{!! strip_tags(Setting::getValue('facebook')) !!}"><img src="{{asset('assets/clients/images/fb.svg')}}" alt="">Facebook</a></li>
                </ul>
                <p class="copyright">
                    <span class="company">Logchain Holdings<br/>Corporation Company.</span>
                    All Rights Reserved.
                </p>
            </div>
            {{-- <div class="footer__people full-width">
                <h3 class="footer__title">OUR MEMBERS</h3>
                <ul class="footer__img footer__brand">
                    <li><a href="https://galaxyexpress.vn/galaxy-express-solutions"><img src="{{asset('assets/clients/images')}}/logo-forwarding.png" class="img-responsive"></a></li>
                    <li><a href="https://galaxyexpress.vn/galaxy-express-forwarding"><img src="{{asset('assets/clients/images')}}/logo-solution.png" class="img-responsive"></a></li>
                    <li><a href="https://logchain.vn/"><img src="{{asset('assets/clients/images')}}/logo-logchain.png" class="img-responsive"></a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</div>
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('assets/clients/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/clients/js/js.js?'.time())}}"></script>