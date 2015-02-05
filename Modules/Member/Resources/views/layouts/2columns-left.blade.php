<!DOCTYPE html>
<html class="m-meber">
    <head>
        <meta charset="utf-8">
        <title>柚皮网--会员中心</title>
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="shortcut icon" href="media/image/favicon.ico" />
        @asset('bootstrap', 'style')
        @asset('font-awesome', 'style')

        {{ HTML::style('static/css/base.css') }}
        {{ HTML::style('modules/member/css/uCenter.css') }}
        @asset('jquery-chart', 'style')
        @section('style')@show
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

    @asset('bootstrap', 'script')
    @asset('jquery-ui', 'script')
    @asset('superslide', 'script')
    @section('script')@show

    {{ HTML::script('modules/member/js/ucenter.js') }}
    {{ HTML::script('static/js/common.js') }}
</body>
</html>
