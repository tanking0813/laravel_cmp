@extends('search::online.layouts.blank')

@section('content')

<div class="content">
	<div class="container">
		<!-- content search-box start -->
		<div class="d-search-box">
			<form role="form">
				<div class="form-group row d-sb-frame mb0">
					<label for="domainName" class="sr-only">域名</label>
					<div class="col-xs-10 input-box">
						<input type="text" class="form-control" id="domainName" placeholder="请输入您想注册的域名，如：upipr">
					</div>
					<div class="col-xs-1 com-box">
						<p class="mb0">.com</p>
						<span></span>
					</div>
					<button type="button" class="btn d-search-btn col-xs-1">查域名</button>
					<!-- 点击.com旁的三角时的弹出框 -->
					<div class="hidden-checkbox">
						<i class="icon close-icon icon-remove"></i>
						<ul class="global-list list-inline mb0">
							<li class="radio en-radio"><span></span>英文域名</li>
							<li class="radio cn-radio"><span></span>中文域名</li>
							<li class="check all-select"><span></span>全选</li>
							<li class="check all-cancel"><span></span>取消全选</li>
						</ul>
						<ul class="list-en-items list-items list-inline">
							<li><span></span>.com</li>
							<li><span></span>.cn</li>
							<li><span></span>.wang</li>
							<li><span></span>.net</li>
							<li><span></span>.top</li>
							<li><span></span>.org</li>
							<li><span></span>.com.cn</li>
							<li><span></span>.net.cn</li>
							<li><span></span>.org.cn</li>
							<li><span></span>.gov.cn</li>
							<li><span></span>.co</li>
							<li><span></span>.biz</li>
							<li><span></span>.info</li>
							<li><span></span>.name</li>
							<li><span></span>.so</li>
							<li><span></span>.tel</li>
							<li><span></span>.mobi</li>
							<li><span></span>.me</li>
							<li><span></span>.asia</li>
							<li><span></span>.cc</li>
							<li><span></span>.tv</li>
							<li><span></span>.tm</li>
							<li><span></span>.club</li>
							<li><span></span>.xyz</li>
							<li><span></span>.pw</li>
							<li><span></span>.la</li>
							<li><span></span>.hk</li>
							<li><span></span>.travel</li>
							<li><span></span>.ac.cn</li>
							<li><span></span>.中文网</li>
							<li><span></span>.website</li>
							<li><span></span>.集团</li>
							<li><span></span>.cool</li>
							<li><span></span>.company</li>
							<li><span></span>.city</li>
							<li><span></span>.emial</li>
							<li><span></span>.我爱你</li>
							<li><span></span>.bike</li>
							<li><span></span>.today</li>
							<li><span></span>.life</li>
							<li><span></span>.market</li>
							<li><span></span>.ren</li>
							<li><span></span>.移动</li>
							<li><span></span>.在线</li>
							<li><span></span>.中国</li>
							<li><span></span>.公司</li>
							<li><span></span>.网络</li>
							<li><span></span>.software</li>
							<li><span></span>.ninja</li>
							<li><span></span>.space</li>
						</ul>
						<ul class="list-cn-items list-items list-inline">
							<li><span></span>中文.com</li>
							<li><span></span>中文.cn</li>
							<li><span></span>中文.wang</li>
							<li><span></span>中文.net</li>
							<li><span></span>中文.top</li>
							<li><span></span>中文.biz</li>
							<li><span></span>中文.cc</li>
							<li><span></span>中文.tv</li>
							<li><span></span>中文.中国</li>
							<li><span></span>中文.公司</li>
							<li><span></span>中文.网络</li>
							<li><span></span>中文.pw</li>
							<li><span></span>中文.la</li>
							<li><span></span>中文.name</li>
							<li><span></span>中文.tm</li>
							<li><span></span>中文.xyz</li>
							<li><span></span>中文.ren</li>
							<li><span></span>中文.cool</li>
							<li><span></span>中文.city</li>
							<li><span></span>中文.集团</li>
							<li><span></span>中文.email</li>
							<li><span></span>中文.bike</li>
							<li><span></span>中文.我爱你</li>
							<li><span></span>中文.today</li>
							<li><span></span>中文.life</li>
							<li><span></span>中文.website</li>
							<li><span></span>中文.company</li>
						</ul>
					</div>
				</div>
			</form>
		</div>
		<!-- content d-matter start -->
		<div class="d-matter">
			<div class="d-details">
				<!-- 查询结果 -->
				<div class="result-list-box">
					<div class="special-title">查询结果</div>
					<div class="list-details list-items">
						<ul class="list-unstyled">
							<li class="registered"><i class="icon icon-remove-sign"></i>upipr.com（<mark>已被注册</mark>）<a href="{{ route('search.online.internet.org_detail') }}">查看域名信息</a></li>
							<li class="register-able"><span></span>upipr.com（<mark>尚未注册</mark>）<a href="{{ route('search.online.internet.orders') }}">立即注册</a></li>
							<li class="return-success"><i class="icon icon-ok-sign"></i>upipr.com（<mark>接口返回成功</mark>）</li>
							<li class="data-error"><i class="icon icon-question-sign"></i>upipr.com（<mark>域名参数传输错误</mark>）</li>
							<li class="overtime"><i class="icon icon-warning-sign"></i>upipr.com（<mark>查询超时</mark>）</li>
							<li class="registered"><i class="icon icon-remove-sign"></i>upipr.com（<mark>已被注册</mark>）<a href="{{ route('search.online.internet.org_detail') }}">查看域名信息</a></li>
							<li class="register-able"><span></span>upipr.com（<mark>尚未注册</mark>）<a href="{{ route('search.online.internet.orders') }}">立即注册</a></li>
							<li class="registered"><i class="icon icon-remove-sign"></i>upipr.com（<mark>已被注册</mark>）<a href="{{ route('search.online.internet.org_detail') }}">查看域名信息</a></li>
							<li class="register-able"><span></span>upipr.com（<mark>尚未注册</mark>）<a href="{{ route('search.online.internet.orders') }}">立即注册</a></li>
							<li class="register-able"><span></span>upipr.com（<mark>尚未注册</mark>）<a href="{{ route('search.online.internet.orders') }}">立即注册</a></li>
							<li class="registered"><i class="icon icon-remove-sign"></i>upipr.com（<mark>已被注册</mark>）<a href="{{ route('search.online.internet.org_detail') }}">查看域名信息</a></li>
							<li class="register-able"><span></span>upipr.com（<mark>尚未注册</mark>）<a href="{{ route('search.online.internet.orders') }}">立即注册</a></li>
						</ul>
					</div>
					<div class="rl-mix-box">
						<ul class="list-inline mb0">
							<li class="shrink">查看所有查询结果<i class="icon icon-double-angle-down"></i></li>
							<li class="check-all"><span></span>全选</li>
							<li class="check-delete"><span></span>取消全选</li>
							<li class="link"><a href="{{ route('search.online.internet.orders') }}">立即注册</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop