<!DOCTYPE html>
<html class="m">
	<head>
		<meta charset="utf-8">
		<title>商标查询</title>
		<meta content="" name="description" /> 
		<meta content="" name="author" />
		<link rel="shortcut icon" href="../media/image/favicon.ico" />
		{{ HTML::script('static/js/jquery/jquery.min.js') }}

		{{ HTML::style('static/css/bootstrap.min.css') }}
		{{ HTML::style('modules/search/css/base.css') }}
		{{ HTML::style('static/css/font-awesome.css') }}
		{{ HTML::style('modules/search/css/mIndex.css') }}
		{{ HTML::style('modules/search/css/common.css') }}

	</head>
	<body>
		@include ('search::logo.partials.modal')
		<div class="wrap">
			<div class="container">
				<!-- header start -->
				<div class="row header">
					<div class="col-xs-3 logo">
						{{ HTML::image('static/images/logo.png') }}
					</div>
					<div class="col-xs-3 col-xs-offset-6 ht-corner">
						<div class="bg"></div>
						<ul class="list-inline list-unstyled mb0">
							<li class="register"><i class="icon icon-user"></i><a href="javascript:;" data-toggle="modal" data-target="#registerLogin-Modal" class="register">注册</a></li>
							<li class="login"><i class="icon icon-lock"></i><a href="javascript:;" data-toggle="modal" data-target="#registerLogin-Modal" class="login">登录</a></li>
						</ul>
					</div>
				</div>
				<!-- header end -->
				<!-- content start -->
				<div class="content">
					<div class="bg"></div>
					<ul class="list-inline">
						<li class="big-box b-cx"><a href="{{ route('search.logo') }}"><span></span>商标查询</a></li>
						<li class="small-box p-zzq"><a href="http://www.ccopyright.com.cn/cpcc/ZRegisterAction.do?method=list&no=fck"><span></span>作品著作权</a></li>
						<li class="small-box s-zzq"><a href="http://www.ccopyright.com.cn/cpcc/notice/soft/softRegisterNotice.jsp"><span></span>软件著作权</a></li>
						<li class="big-box d-cx"><a href="{{ route('search.domain.index') }}"><span></span>域名查询</a></li>
						<li class="big-box p-js"><a href="{{ route('search.patent.index') }}"><span></span>专利检索</a></li>
						<li class="big-box b-jc"><a href="{{ route('search.logo.monitor') }}"><span></span>商标监测</a></li>
						<li class="small-box b-zc"><a href="{{ route('search.online.logo.index') }}"><span></span>商标注册</a></li>
						<li class="small-box b-sj"><div class="hover-bg">此模块正在开发</div><a href="javascript:void(0);"><span></span>商标数据</a></li>
					</ul>
				</div>
				<!-- content end -->
			</div>
			<!-- footer start -->
			<div class="footer">
				<div class="container">
					<div class="pa0">
						<ul class="navbar list-inline mb0 footer-nav" role="navigation">
							<li><a href="javascript:void(0);">关于知盛</a>|</li>
							<li><a href="javascript:void(0);">帮助中心</a>|</li>
							<li><a href="javascript:void(0);">诚征英才</a>|</li>
							<li><a href="javascript:void(0);">广告服务</a>|</li>
							<li><a href="javascript:void(0);">联系方式</a>|</li>
							<li><a href="javascript:void(0);">保护隐私权</a>|</li>
							<li><a href="javascript:void(0);">使用协议</a>|</li>
							<li><a href="javascript:void(0);">意见反馈</a></li>
						</ul>
						<p class="mb0">Copyright @2014广东时代梦想科技控股有限公司 </p>
					</div>
				</div>
			</div>
			<!-- footer end -->
		</div>
	</body>
	{{ HTML::script('static/js/bootstrap/bootstrap.js') }}	
	{{ HTML::script('modules/search/js/common.js') }}
	<script>
		$(function(){
			$(".b-sj").hover(function(){
				$(".hover-bg").css({"display":"block"});			
			},function(){
				$(".hover-bg").css({"display":"none"});	
				});
			});
	</script>
</html>