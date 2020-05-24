<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/bricks/bricks.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="bg-primary">
            <div class="row no-gutters">
                <div class="col-2">
                    @include('admin.bricks.side-nav')
                </div>
                <div class="col-10">
                    <div class="row no-gutters">
                        <div class="col-8">
                            @yield('content')
                        </div>
                        <div class="col-4">
                            @include('admin.bricks.nav')
                            @yield('functions')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
