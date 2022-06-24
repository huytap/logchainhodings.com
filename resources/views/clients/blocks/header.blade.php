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
                    <li><a href="{{route('home')}}">Home</a></li>
                    {{-- <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('ourteam')}}">The Team</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li> --}}
                    @foreach($menus as $menu)
                        <li><a href="{{route('page', $menu->slug)}}">{{$menu->name}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</div>