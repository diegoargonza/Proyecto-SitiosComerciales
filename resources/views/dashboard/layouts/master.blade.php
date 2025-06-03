<html>
    <head>
        <title>Dashboard Tienda</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        @vite(['resources/js/app.js']);
    </head>
    <body>
        <div class="container">
            @include('dashboard.partials.validations')
            @yield('content')
        </div>
    </body>
</html>