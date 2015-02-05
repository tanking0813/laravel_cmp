<!DOCTYPE html>
<html class="m-meber">
<head>
	<meta charset="utf-8">
	<title>用户登陆 -- {{ $setting['global_title'] }}</title>
	<meta content="" name="description" /> 
	<meta content="" name="author" />
	<link rel="shortcut icon" href="media/image/favicon.ico" />
	
	@asset('bootstrap', 'style')
	@asset('font-awesome', 'style')
	{{ HTML::style('static/css/base.css') }}
	
	{{ HTML::style('modules/member/css/uCenter.css') }}
	@asset('jquery', 'script')
</head>
	<body id="login"> 
		<!--header开始-->
		<div class="header">
			@include('partials.toolbar')
		</div>
		<div class="loginArea">
			<img src="{{ asset('modules/member/images/login_02.png') }}" alt="" class="fullBg" id="fullBg" />
		    @include('partials.message')
			<div class="container">
				<div class="row">
					<h1 class="white"><img src="{{ asset('static/images/logo.png') }}" alt=""/></h1>
					<div class="col-xs-6 col-xs-offset-6">
						<div class="loginModal">
						<h2>登录柚皮网</h2>
						{{ Form::open(['route'=>'auth.dologin', 'id'=>'logform', 'class'=>'login']) }}
							<fieldset>
							<div class="form-group">
								{{ Form::text('username', '',['class'=>'form-control','placeholder'=>'用户名']) }}
							</div>
							<div class="form-group">
								{{ Form::password('password',['class'=>'form-control','placeholder'=>'密码']) }}
							</div>
							<div class="checkbox">
							<label>
							{{ Form::checkbox('remember','',false) }}记住我 <a href="{{ route('auth.forgetpass') }}" class="pull-right">忘记密码</a>
							</label>
							</div>
							<input class="btn btn-lg btn-info btn-block" type="submit" id="login_submit" value="登 录">
							</fieldset>
							<a href="{{ route('auth.register') }}" class="btn btn-lg btn-success btn-block mt20">注 册</a>
						{{ Form::close() }}
						</div>
					</div>	
				</div>
			</div>  
		</div>
		<div class="footer  white">
			<div class="container">
				<p>柚皮网（www.***.com）     XXXX网络科技有限公司 版权所有  2014-2024     ICP备案号：莞-********     常年法律顾问：XXXX律师事务所</p>
			</div>
			
		</div>
	</body>

	
	@asset('jquery-ui', 'script')
	@asset('bootstrap', 'script')
	@asset('jquery-validate', 'script')
	<!-- BEGIN PAGE LEVEL PLUGINS -->

	{{ HTML::script('modules/member/js/form-validate.js') }}
	{{ HTML::script('modules/member/js/ucenter.js') }}
	<!--<script type="text/javascript">
		var win_h=$(window).height();
		//alert(win_h);
		$('.loginArea').css({
			height:win_h-30
		})
	</script>-->
</html>
