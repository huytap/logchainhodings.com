@php
$menus = App\Models\Menu::getList();   
$language = config('languages'); 
$lang = App::getLocale();
$url = Request::path();
$uri = explode('/', $url);
if(isset($uri[count($uri) - 1])){
    $slg = str_replace('.html', '', $uri[count($uri) - 1]);
    $page = App\Models\Menu::getBySlug($slg);
}
@endphp
<div class="header" id="header">
    <div class="container">
        <div class="navbar nav-container">
            <a href="{{route('home', $locale)}}" class="header__logo"><img src="{{asset('uploads/'.App\Models\Setting::getImage('logo'))}}" class="img-responsive" alt="Logchain Group"></a>
            <button class="navbar-toggler" id="iconmenu" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="header__menu" id="menu">
                <div class="header__top__mobile">
                    <a href="{{route('home', $locale)}}" class="header__logo__mobile"><img src="{{asset('assets/clients/images')}}/logo.png" class="img-responsive" alt="Logchain Group"></a>
                    <button class="navbar-toggler" id="iconclose" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <ul id="navbar" class="navbarNavi">
                    <li><a href="{{route('home', $locale)}}">@lang('logchain.menu.home')</a></li>
                    @foreach($menus as $menu)
                        {{-- @if($locale && $locale !== 'en') --}}
                            <li><a href="{{url($locale.'/'.$menu->slug[$lang])}}.html">{{$menu->name[$lang]}}</a></li>
                        {{-- @else
                            <li><a href="{{route('page', $menu->slug[$lang])}}">{{$menu->name[$lang]}}</a></li>
                        @endif --}}
                    @endforeach
                    <li>
                        <div class="navbar__language">
                            @foreach($language as $key => $l)
                                @if(isset($language[$uri[0]]))
                                    @if(!isset($page))
                                        @if($key != 'en')
                                            @if($uri[0] == '')
                                                <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($key)}}">{{$key}}</a>
                                            @else
                                                <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url(str_replace($uri[0],$key, $url))}}">{{$key}}</a>
                                            @endif
                                        @else
                                            <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url(str_replace($uri[0],'', $url))}}">{{$key}}</a>
                                        @endif
                                    @else
                                        @if($key != 'en')
                                            @if($uri[0] == '')
                                                <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($key)}}">{{$key}}</a>
                                            @else
                                                <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($page->slug[$key])}}.html">{{$key}}</a>
                                            @endif
                                        @else
                                            <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($page->slug[$key])}}.html">{{$key}}</a> 
                                        @endif
                                    @endif
                                @else
                                    @if(isset($page))
                                        @if($key != 'en')
                                            <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($key.'/'.$page->slug[$key])}}.html">{{$key}}</a>
                                        @else
                                            <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($page->slug[$key])}}.html">{{$key}}</a>
                                        @endif
                                    @else
                                        @if($key != 'en')
                                            <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($key.'/'.$url)}}">{{$key}}</a>
                                        @else
                                            <a class="navbar__language--item {{$key==$lang?'active':''}}" href="{{url($url)}}">{{$key}}</a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>