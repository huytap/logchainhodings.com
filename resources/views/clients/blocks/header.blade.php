@php
$menus = App\Models\Menu::getList();    
@endphp
<div class="header" id="header">
    <div class="container">
        <div class="navbar nav-container">
            <a href="{{route('home')}}" class="header__logo"><img src="{{asset('assets/clients/images')}}/logo.png" class="img-responsive" alt="Logchain Group"></a>
            <button class="navbar-toggler" id="iconmenu" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="header__menu" id="menu">
                <div class="header__top__mobile">
                    <a href="{{route('home')}}" class="header__logo__mobile"><img src="{{asset('assets/clients/images')}}/logo.png" class="img-responsive" alt="Logchain Group"></a>
                    <button class="navbar-toggler" id="iconclose" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <ul id="navbar" class="navbarNavi">
                    {{-- <li><a href="#banner">Introduce</a></li>
                    <li><a href="#our-strategy">Our Strategy</a></li>
                    <li><a href="#porfolio">Portfolio</a></li>
                    <li><a href="#news">Our latest news</a></li>
                    <li><a href="#contact-us">Contact us</a></li> --}}
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About us</a></li>
                    <li><a href="{{route('ourteam')}}">Our team</a></li>
                    <li><a href="{{route('contact')}}">Contact us</a></li>
                    {{-- @foreach($menus as $menu)
                        <li><a href="{{route('page', $menu->slug)}}">{{$menu->name}}</a></li>
                    @endforeach --}}
                </ul>
            </nav>
        </div>
    </div>
</div>