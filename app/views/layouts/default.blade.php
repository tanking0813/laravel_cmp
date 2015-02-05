<!DOCTYPE html>
<html>
<head>
    <title>{{ $setting['global_title'] }}</title>
    <meta charset="utf-8" />
    <meta name="keyword" content="{{ $setting['global_keyword'] }}">
    <meta name="description" content="{{ $setting['global_description'] }}">
    {{ HTML::style('static/css/base.css') }}
    @section('style')@show
    @asset('jquery', 'script')
</head>
<body>
    @yield('content')
    @section('script')@show
</body>
</html>
