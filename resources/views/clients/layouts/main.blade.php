<!doctype html>
<html lang="en">
<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets/clients/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css?'.time())}}">
    @yield('css')
</head>
<body>
    @include('clients.blocks.header')

    @yield('content')

    @include('clients.blocks.footer')

    @yield('script')
</body>
</html>