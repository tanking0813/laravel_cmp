<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>市场</title>
	<meta content="" name="description" /> 
	<meta content="" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
	<link rel="shortcut icon" href="media/image/favicon.ico" />

	@asset('bootstrap', 'style')

	{{ HTML::style('modules/shop/css/common.css') }}

	@section('css')
		{{ HTML::style('modules/shop/css/shop.css') }}
		{{ HTML::style('modules/shop/css/image.css') }}
	@show

	@asset('jquery', 'script')
</head>
<body>
	<div id="go-top" class="g-wrap">
		<!--头部开始-->
		<header>
			@section('top_ads')
			<div class="row g-wel">
				<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/wel1.png') }}</div>
			</div>
			@show

			@include('shop::partials.header')

			<div class="row g-header">
				<div class="col-xs-12">
					<div class="row g-logo">		
						<div class="col-xs-2">
							<a class="logo" href="{{ route('index') }}">{{ HTML::image('modules/shop/images/icon/logo.png') }}</a>
						</div>

						@section('g_hotsearch')
						<div class="col-xs-7">
							<div class="row">
								<div class="col-xs-12">
									<ul class="list-inline m-tit mt10">
										<li class="li1"><a href="">精品商标</a><span class="line">|</span></li>
										<li><a href="">热门技术</a><span class="line">|</span></li>
										<li><a href="">一口价专利</a><span class="line">|</span></li>
										<li><a href="">人气著作权</a><span class="line">|</span></li>
										<li><a href="">域名拍卖</a><span class="line">|</span></li>
										<li><a href="">珍品域名</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 m-form">
									<div class="form-group">
									    <div class="input-group">  
									    	<input class="form-control g-squre m-search-btn" type="" placeholder="请输入关键字">
									    	<div class="input-group-addon m-btn g-squre"><a href="">搜 索</a></div>
									    </div>
									</div>
								</div>
							</div>
						</div>
						@show

						@section('top_publish')
						<div class="col-xs-3">
							<form class="form-inline" role="form">
								<div class="form-group login">
								    <button type="button" class="btn btn-default">发布求购信息</button>
								    <button type="button" class="btn btn-default">发布转让信息</button>
								</div>
							</form>
						</div>
						@show
					</div>
					@section('g_nav')
					<div class="row g-nav">
						<ul class="list-inline first" style="border-bottom:none;">
							<li class="li1" style="height:39px;">{{ HTML::image('modules/shop/images/icon/menu.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;<a href="">特色服务</a></li>
							<li><a href="{{ route('shop.logo.index') }}">商标市场</a></li>
							<li><a href="{{ route('shop.patent.index') }}">专利市场</a></li>
							<li><a href="{{ route('shop.copy.index') }}">著作权市场</a></li>
							<li><a href="{{ route('shop.domain.index') }}">域名市场</a></li>
							<li><a href="">求购信息</a></li>
							<li><a href="">柚皮名录</a></li>
							<li><a href="">活动专题<span class="hot">{{ HTML::image('modules/shop/images/icon/cu.png') }}</span></a></li>	
							<li><a href="">柚皮通</a></li>					
						</ul>
					</div>
					@show
				</div>
			</div>			
		</header>
		<!--头部结束-->
		@yield('banner')
		<!--内容块开始-->
		<div class="container m-main">
			@yield('content')
		</div>
		<!--内容块结束-->
		<!--底部开始-->
		@include('shop::partials.footer')		
		<!--底部结束-->
	</div>
	@asset('superslide', 'script')
	{{ HTML::script('modules/shop/js/shop.js') }}
</body>
</html>