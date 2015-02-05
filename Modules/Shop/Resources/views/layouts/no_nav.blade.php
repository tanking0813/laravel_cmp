<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>精品域名</title>
	<meta content="" name="description" /> 
	<meta content="" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
	<link rel="shortcut icon" href="media/image/favicon.ico" />

	{{ HTML::style('static/css/bootstrap.css') }}
	{{ HTML::style('modules/shop/css/common.css') }}
	{{ HTML::style('modules/shop/css/domain.css') }}

	{{ HTML::script('static/js/jquery/jquery.min.js') }}
</head>
<body>
	<div id="go-top" class="g-wrap">
		<!--头部开始-->
		<header>
			@include('shop::partials.header')
		</header>
		<!--头部结束-->
		<!--banner开始-->
		@yield('banner')
		<!--banner结束-->
		<!--内容块开始-->
		@yield('content')
		<!--内容块结束-->
		<!--底部开始-->
		@include('shop::partials.footer')
		<!--底部结束-->
	</div>
	{{ HTML::script('static/js/jquery/superslide/jquery.SuperSlide.2.1.js') }}
	{{ HTML::script('modules/shop/js/shop.js') }}
</body>
</html>