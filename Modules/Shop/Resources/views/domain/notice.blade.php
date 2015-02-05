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
					<div class="list">网站公告</div>
					<ul class="affiche-list">
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
						<li><a href="">柚皮网新增国内域名安全锁服务</a><span class="date fr">2015-01-20</span></li>
					</ul>
					<!--page分页开始-->
					<div class="pages mt20">
						<ul class="list-unstyled pagelist">
							<li><a href='javascript:void(0);'>首页</a></li>
							<li class="thisclass">1</li>
							<li><a href=''>2</a></li>
							<li><a href=''>3</a></li>
							<li><a href=''>4</a></li>
							<li><a href=''>5</a></li>
							<li><a href=''>下一页</a></li>
							<li><a href=''>末页</a></li>
							<li><select name='sldd' style='width:42px;height:22px;' onchange='location.href=this.options[this.selectedIndex].value;'>
							<option value='' selected>1</option>
							<option value=''>2</option>
							<option value=''>3</option>
							<option value=''>4</option>
							<option value=''>5</option>
							</select></li>
							<li><span class="pageinfo">共 <strong>23</strong>页<strong>457</strong>条</span></li>
							<div class="clear"></div>
					   	</ul>
 					</div>
 					<!--page分页结束-->
				</div>

			</div>
			<!--内容区域-左部结束-->
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