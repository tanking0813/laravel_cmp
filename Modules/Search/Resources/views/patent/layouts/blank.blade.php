<!DOCTYPE html>
<html class="m-pt">
<head>
	<meta charset="utf-8">
	<title>专利检索</title>
	<meta content="" name="description" />
	<meta content="" name="author" />
	@asset('jquery', 'script')
	@asset('common', 'script')

	@asset('bootstrap', 'style')
	@asset('base', 'style')
	@asset('font-awesome', 'style')
	{{ HTML::style('modules/search/css/ptQuiry.css') }}
	@yield('style')
</head>
<body>
	<div class="wrap">
		<!-- top start -->
		@include('search::patent.partials.header')
        <!-- content start -->
        @yield('content')
        <!-- footer start -->
        @include('search::patent.partials.footer1')
        @include ('search::logo.partials.modal')
	</div>
</body>
	@asset('bootstrap', 'script')
	@asset('superslide', 'script')
	{{ HTML::script('modules/search/js/zxQuiry.js') }}
	@yield('script')
</html>