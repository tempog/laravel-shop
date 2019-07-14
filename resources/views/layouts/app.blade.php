<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Shop') - Laravel 商城</title>
    <!-- 样式 -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>


{{--<article>--}}
{{--    <div class="poem">--}}
{{--        ...--}}
{{--    </div>--}}
{{--</article>--}}

    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container article">
            @yield('content')
        </div>
    </div>
    @include('layouts._footer')
<!-- JS 脚本 -->
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scriptsAfterJs')
</body>
</html>
