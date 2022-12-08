@extends('clients.layouts.main')
@section('content')
<div class="banner home__banner">
    <img src="{{asset('uploads/'.$menu->banner_mobile)}}" alt="" class="img-fluid d-md-none">
    <div class="container banner__container">
        <div class="row">
            <div class="col-md-5">
                <div class="banner__content">
                    <h1 class="banner__title2 banner__title--home wow fadeInUp" data-wow-duration="1.5s">
                        {!!$menu->banner_title[$lang]!!}
                    </h1>
                    <p class="wow fadeInUp" data-wow-duration="1.5s">
                        {!!$menu->banner_description[$lang]!!}
                    </p>
                </div>
            </div>
        </div>        
    </div>        
</div>
@php 
    $collection1 = $collection->filter(function ($val, $key) {
        return $val->content_section==1;
    });
    $result1 = $collection1->all();
@endphp
<div class="content">
    <div class="introduce__info" id="our-strategy">
        <div class="container">
            @if(!empty($result1))
                <h3 class="introduce__info--title wow fadeInUp" data-wow-duration="1.5s">{{$result1[0]['title'][$lang]}}</h3>
                <div class="introduce__info--desc wow fadeInUp" data-wow-duration="1.5s">
                    {!!$result1[0]['description'][$lang]!!}
                </div>
            @endif
            @php 
                $collection2 = $collection->filter(function ($val, $key) {
                    return $val->content_section==2;
                });
                $result2 = $collection2->all();
            @endphp
            @if(!empty($result2))
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                @foreach($result2 as $rs)
                    <div class="col-md-3">
                        <div class="introduce__item">
                            <img src="{{asset('uploads/'.$rs['photo'])}}" alt="" style="min-width: 78px" class="introduce__item--img img-fluid">
                            <img src="{{asset('uploads/'.$rs['photo_mobile'])}}" style="min-width: 78px" alt="" class="introduce__item--img__hover img-fluid">
                            <div class="introduce__item--desc">
                                <h3>{!! $rs['title'][$lang]??'' !!}</h3>
                                {!! $rs['description'][$lang]??'' !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    @php 
        $collection3 = $collection->filter(function ($val, $key) {
            return $val->content_section==3;
        });
        $result3 = $collection3->all();
    @endphp
</div>
<div class="radial-menu">
    <ul class="radial-menu__menu-list">  
      <li class="radial-menu__menu-item">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="list" title="Numbered List" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Numbered List
            </h6>
            <p class="radial-menu__menu-content-description">
              Add a numbered list
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="header" title="Heading" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Heading
            </h6>
            <p class="radial-menu__menu-content-description">
              Add a heading
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="double-quote-serif-right" title="Blockquote" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Blockquote
            </h6>
            <p class="radial-menu__menu-content-description">
              Add a blockquote
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="link-intact" title="Hyperlink" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Hyperlink
            </h6>
            <p class="radial-menu__menu-content-description">
              Add a link to something
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="image" title="Image" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Image
            </h6>
            <p class="radial-menu__menu-content-description">
              Add an image
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item" style="display: none;">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="paperclip" title="Attach File" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Attach File
            </h6>
            <p class="radial-menu__menu-content-description">
              Attach a file
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item" style="display: none;">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="code" title="Code" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Code
            </h6>
            <p class="radial-menu__menu-content-description">
              Add some HTML
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item" style="display: none;">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="eyedropper" title="Font Color" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Font Color
            </h6>
            <p class="radial-menu__menu-content-description">
              Set font color
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item" style="display: none;">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="droplet" title="Highlight Color" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              Highlight Color
            </h6>
            <p class="radial-menu__menu-content-description">
              Set font color
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
  
      <li class="radial-menu__menu-item" style="display: none;">
        <div class="radial-menu__menu-link-bg"></div>
        <div class="radial-menu__menu-icon">
          <span class="oi" data-glyph="ellipses" title="More" aria-hidden="true"></span>
        </div>
        <div class="radial-menu__menu-content">
          <div class="radial-menu__menu-content-wrapper">
            <h6 class="radial-menu__menu-content-title">
              More
            </h6>
            <p class="radial-menu__menu-content-description">
              Add more things
            </p>
          </div>
        </div>
        <a href="javascript:void(0);" class="radial-menu__menu-link"></a>
      </li>
    </ul>
    <div class="radial-menu__label">
        <img src="{{asset('assets/clients/images/logo-footer.png')}}" class="img-fluid" alt="">
    </div>
  </div>
  
  <div class="menu-items-select">
    <div class="menu-items-select__label" for="menu-items-to-show">
        <img src="{{asset('clients/images/logo_footer.png')}}" alt="">
    </div>
  </div>
@endsection

@section('css')
<style>
    .home__banner::after{
        background: url({{asset('uploads/'.$menu->banner)}}) no-repeat center top;
        background-size: cover;
    }
</style>
@endsection