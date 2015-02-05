@extends('shop::layouts.default')

@section('css')
	{{ HTML::style('modules/shop/css/domain.css') }}
@show

@section('top_ads')

@stop

@section('g_hotsearch')
	@include('shop::partials.domain_hot_search')
@stop

@section('top_publish')
	<div class="col-xs-4 d-tel">
		<a href=""><span>{{ HTML::image('modules/shop/images/icon/duser.png') }}</span><span class="d-hotline">客服中心</span></a>
		<span>{{ HTML::image('modules/shop/images/icon/tel.png') }}</span><span class="d-phone"><i>400-580-100</i></span>
	</div>
@stop

@section('g_nav')

@stop

@section('content')
	<!--内容块开始-->
	<div class="d-main">
		<!--导航开始-->
		@include('shop::partials.domain_menu')
		<!--导航结束-->
		<!--内容区域开始-->
		<div class="row mt20">
			<!--内容区域-左部开始-->
			<div class="col-xs-9 d-left">
				<h5 class="d-position">当前位置：<a href="">首页</a>&nbsp;＞&nbsp;<span class="cr">网站公告</span></h5>
				<div class="announcement">
					<div class="tit">
						<p class="caption">柚皮网新增国内域名安全锁服务</p>
						<p>2015-01-18 柚皮网官方发布</p>
					</div>
					<div class="ann-p">
						<p>近年来，随着互联网的发展，网络安全问题日益突出，而域名作为互联网活动的直接入口，域名安全对于整个互联网意义重大，影响深远。同时，域名劫持、域名信息的更改、中间人攻击等等多种域名攻击事件的出现，也进一步加大了域名的安全隐患。</p>
						<p>易名一直致力于域名安全，对于域名的过户、解析、转移等服务，均可做到手机验证码或密保问题等二重甚至多重验证方可执行，一定程度上保障了即使登录密码被盗也能有效防患一系列安全问题。</p>
						<p>为了进一步提高域名的安全防护范围和级别，我司在原有的国际域名安全锁服务的基础上，新增了国内域名安全锁服务。该项服务分为注册局安全锁标准版和高级版服务，其中高级版有专属的口令卡服务，防止域名被恶意交易、转移、解析、转接口、修改DNS、修改模板过户。</p>
						<p>近年来，随着互联网的发展，网络安全问题日益突出，而域名作为互联网活动的直接入口，域名安全对于整个互联网意义重大，影响深远。同时，域名劫持、域名信息的更改、中间人攻击等等多种域名攻击事件的出现，也进一步加大了域名的安全隐患。</p>
						<p>易名一直致力于域名安全，对于域名的过户、解析、转移等服务，均可做到手机验证码或密保问题等二重甚至多重验证方可执行，一定程度上保障了即使登录密码被盗也能有效防患一系列安全问题。</p>
						<p>为了进一步提高域名的安全防护范围和级别，我司在原有的国际域名安全锁服务的基础上，新增了国内域名安全锁服务。该项服务分为注册局安全锁标准版和高级版服务，其中高级版有专属的口令卡服务，防止域名被恶意交易、转移、解析、转接口、修改DNS、修改模板过户。</p>
					</div>
				</div>
			</div>
			<!--内容区域-左部结束-->
			<!--内容区域-右部开始-->
			<div class="col-xs-3 d-right">
				<div class="other">
					<div class="list">其它公告</div>
					<ul class="affiche-list">
						<li><a href="">•<span>域名手机客户端3.0震撼上线</span></a></li>
						<li><a href="">•<span>域名手机客户端3.0震撼上线</span></a></li>
						<li><a href="">•<span>域名手机客户端3.0震撼上线</span></a></li>
						<li><a href="">•<span>域名手机客户端3.0震撼上线</span></a></li>
						<li><a href="">•<span>域名手机客户端3.0震撼上线</span></a></li>
					</ul>
				</div>
			</div>
			<!--内容区域-右部结束-->
		</div>
		<!--内容区域结束-->
		<!--广告图1开始-->
		<div class="row">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao8.png') }}</div>
		</div>
		<!--广告图1结束-->
		<!--导航开始-->
	</div>
	<!--内容块结束-->
@stop