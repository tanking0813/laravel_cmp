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
		<div class="wrap">
			@include('search::logo.partials.header')
			<!-- content start -->
			<div class="content zy-content">
				<div class="inquire-box container zy-quiry-box">
					<div class="row">
						<!-- left content -->
						<div class="col-xs-10 zy-quiry-left ml15 pa0">
							<!-- 近似查询结果 -->
							@yield('content')
						</div>
						<!-- right content -->
						<div class="col-xs-2 zy-quiry-right ml15 pa0">
							<!-- 查询说明 -->
							@yield('sidebar')
						</div>
					</div>
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
