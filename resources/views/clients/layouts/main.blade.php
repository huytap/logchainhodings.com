<!doctype html>
<html lang="en">
<head>
    <title>{{$title}}</title>
    <meta name="description" content="{{isset($description)?$description:'logchain holdings'}}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/clients/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css?'.time())}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/')}}apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/')}}apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/')}}apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/')}}apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/')}}apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/')}}apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/')}}apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/')}}android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/')}}favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}favicon-16x16.png">
    <link rel="manifest" href="{{asset('/')}}manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('/')}}ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    @yield('css')
</head>
<body>
    @include('clients.blocks.header')
    @yield('content')
    @include('clients.blocks.footer')
    @yield('script')
</body>
</html>