<!DOCTYPE html>
<html>
<head>
    <title>柚皮网</title>
    <meta charset="utf-8" />
    {{ HTML::style('static/css/base.css') }}
    @asset('bootstrap', 'style')
    @section('style')@show
    @asset('jquery', 'script')
</head>
<body>
    @yield('content')
    @section('script')@show
</body>
</html>
