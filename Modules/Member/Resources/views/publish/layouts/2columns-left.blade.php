<!DOCTYPE html>
<html class="m-meber">
    <head>
        <meta charset="utf-8">
        <title>柚皮网--会员中心</title>
        <meta content="" name="description" /> 
        <meta content="" name="author" />
        <link rel="shortcut icon" href="media/image/favicon.ico" />
@asset('bootstrap', 'style')
{{ HTML::style('static/css/font-awesome.min.css') }}
{{ HTML::style('static/css/base.css') }}
{{ HTML::style('modules/member/css/uCenter.css') }}
@section('style')
    {{ HTML::style('static/css/jquery.gritter.css') }}
    {{ HTML::style('static/js/jquery/fullcalendar/fullcalendar.css') }}
    {{ HTML::style('static/css/jqvmap.css') }}
    {{ HTML::style('static/css/jquery.easy-pie-chart.css') }}
@show
@asset('jquery', 'script')
</head>
    <body>
        @include('member::partials.header')
        <!--content开始-->
        <div class="container">
            @include('partials.message')
            <div class="row">
                <!--左侧栏开始-->
                <div class="col-xs-2 mt0 whiteBg sideBar">
                    @yield('leftbar')
                </div>
                <!--左侧栏结束-->

                <!--内容展示开始-->
                <div class="col-xs-10 mainBar">
                    @yield('content')
                </div>
                <!--内容展示结束-->
            </div>
        </div>
        <!--content结束-->
@include('member::partials.footer')
{{ HTML::script('static/js/bootstrap/bootstrap.js') }}
@section('script')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ HTML::script('static/js/jquery/gritter/jquery.gritter.js') }}
        {{ HTML::script('static/js/jquery/fullcalendar/fullcalendar.min.js') }}
@show
{{ HTML::script('static/js/jquery/jquery-ui-1.10.1.custom.min.js') }}
@asset('superslide', 'script')
{{ HTML::script('modules/member/js/ucenter.js') }}
{{ HTML::script('static/js/common.js') }}
</body>
</html>
