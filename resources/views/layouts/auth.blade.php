<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MOREGATE | LOGIN/REGISTRATION</title>

    <!-- Scripts -->
    <script src="{{asset('moregate/auth/js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('moregate/auth/css/bootstrap.min.css')}}">
</head>
<body>
    <div id="">
     
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">MOREGATE ADMIN</h2>
        </div>
    </div>
          
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
