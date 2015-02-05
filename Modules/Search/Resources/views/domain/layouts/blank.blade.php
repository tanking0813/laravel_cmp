<!DOCTYPE html>
<html class="d-cx">
	<head>
	<meta charset="utf-8">
	<title>域名查询</title>
	<meta content="" name="description" /> 
	<meta content="" name="author" />
	@asset('jquery', 'script')
	@asset('common', 'script')

	@asset('bootstrap', 'style')
	@asset('base', 'style')
	@asset('font-awesome', 'style')
	{{ HTML::style('modules/search/css/dQuiry.css') }}
	@yield('style')
	</head>
	<body>
		<!-- 弹出验证框 -->
		@include ('search::logo.partials.modal')
		<div class="wrap">
			<!-- top start -->
			@include('search::domain.partials.header')
			<!-- top end -->
			<!-- content start -->
			@yield('content')
			<!-- content end -->
			<!-- footer start -->
			@include('search::domain.partials.footer')
			<!-- footer end -->
		</div>
	</body>
	@asset('bootstrap', 'script')
	@asset('superslide', 'script')
	{{ HTML::script('modules/search/js/dQuiry.js') }}
	@yield('script')
</html>

