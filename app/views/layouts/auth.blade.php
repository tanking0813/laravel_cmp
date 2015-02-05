<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户登陆 -- 柚皮网</title>
	<meta content="" name="description" /> 
	<meta content="" name="author" />
	<link rel="shortcut icon" href="media/image/favicon.ico" />
	@asset('bootstrap', 'style')
	@asset('font-awesome', 'style')

	{{ HTML::style('static/css/base.css') }}
	{{ HTML::style('modules/member/css/uCenter.css') }}

	@asset('jquery', 'script')
</head>
	<body>
		<!--header开始-->
		<div class="header">
			@include('partials.toolbar')
			@include('partials.auth.header')
		</div>
        
        <div class="content container whiteBg">
        	<div class="regBox row">
        	    @include('partials.message')
		        @yield('content')
			</div>
        </div>
		@include('partials.auth.footer')


	@asset('jquery-ui', 'script')
	@asset('bootstrap', 'script')
	@asset('jquery-validate', 'script')
	<!-- BEGIN PAGE LEVEL PLUGINS -->

	{{ HTML::script('modules/member/js/form-validate.js') }}
	{{ HTML::script('modules/member/js/ucenter.js') }}
	{{ HTML::script('static/js/common.js') }}
	<script type="text/javascript">
		var win_h=$(window).height();
		//alert(win_h);
		$('.loginArea').css({
			height:win_h-30
		})
	</script>
	</body>
</html>
