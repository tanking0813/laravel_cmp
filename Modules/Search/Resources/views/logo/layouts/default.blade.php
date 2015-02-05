<!DOCTYPE html>
<html class="m-tm">
	<head>
	<meta charset="utf-8">
	<title>商标查询</title>
	<meta content="" name="description" /> 
	<meta content="" name="author" />
	@asset('jquery', 'script')
	@asset('common', 'script')

	@asset('bootstrap', 'style')
	@asset('base', 'style')
	@asset('font-awesome', 'style')
	{{ HTML::style('modules/search/css/mQuiry.css') }}
	@yield('style')
	</head>
	<body>
		@yield('alert_out')
		<div class="wrap">
			@include('search::logo.partials.header')
			<!-- content start -->
			<div class="content zy-content monitor-content">
                <div class="inquire-box container zy-quiry-box">
                    @yield('content')
                </div>
            </div>
			<!-- content end -->
			@include ('search::logo.partials.footer')
			@include ('search::logo.partials.modal')
		</div>
	</body>
	@asset('bootstrap', 'script')
	@asset('superslide', 'script')
	{{ HTML::script('modules/search/js/mQuiry.js') }}
	@yield('script')
</html>
