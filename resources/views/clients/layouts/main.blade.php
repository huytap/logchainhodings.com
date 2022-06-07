<!doctype html>
<html lang="en">
<head>
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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