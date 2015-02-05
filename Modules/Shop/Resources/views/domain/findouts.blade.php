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
			<h4 class="p-current">当前位置：<a href="">首页</a>&nbsp;＞&nbsp;<span class="cr">网站公告</span></h4>
			<div class="p-screen">
				<div class="p-screen-tit">域名筛选</div>
				<div class="p-screen-con">
					<form class="form-inline">
						<div class="one-row">
							域名：<input type="text" class="inp">
							<div class="checkbox">
							    <label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox1" value="option1" class="p-box"> 开头
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineCheckbox2" value="option2" class="p-box"> 结尾
								</label>
						  	</div>
						  	<label class="front">分类：</label>
						  	<select class="form-control filter">
								<option>所有域名</option>
								<option>所有域名</option>
								<option>所有域名</option>
								<option>所有域名</option>
								<option>所有域名</option>
							</select>
							<label class="front">后缀：</label>
							<select class="form-control filter">
								<option>所有后缀</option>
								<option>所有后缀</option>
								<option>所有后缀</option>
								<option>所有后缀</option>
								<option>所有后缀</option>
							</select>
							<label class="front">注册商：</label>
							<select class="form-control filter">
								<option>全部</option>
								<option>柚皮网</option>
								<option>其它注册商</option>
							</select>
							<label class="front">注册年限：</label>
							<select class="form-control filter">
								<option>1年</option>
								<option>2年</option>
								<option>3年</option>
								<option>4年</option>
								<option>5年</option>
							</select>
						</div>
						<div class="two-row">
							长度：<input type="text" class="inp">
							<label class="front">结束时间：</label>
							<select class="form-control filter">
								<option>全部</option>
								<option>柚皮网</option>
								<option>其它注册商</option>
							</select>
						</div>
						<div class="button-row">
							<button type="button" class="btn submit">搜索</button>
							<button type="button" class="btn reset">重置</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-xs-9 d-left">
				<h5>一口价域名</h5>
				<table class="table1">
					<thead>
						<tr class="d-tab-tr">
							<th width="140">域名</th>
							<th width="200">简介</th>
							<th width="90">注册商</th>
							<th width="100">卖家</th>
							<th width="90">一口价</th>
							<th width="100">剩余时间</th>
						</tr>
					</thead>
					<tbody class="d-table">
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn楚泽电子商务 参考com.cn楚泽电子商务 参考com.cn楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
					</tbody>
					<tfoot class="d-huomore">
						<tr>
							<td colspan="6"><a href="">点击获取更多信息</a></td>
						</tr>
					</tfoot>
				</table>
				<h5 class="mt40">询价域名</h5>
				<table class="table1">
					<thead>
						<tr class="d-tab-tr">
							<th width="140">域名</th>
							<th width="200">简介</th>
							<th width="90">注册商</th>
							<th width="100">卖家</th>
							<th width="90">一口价</th>
							<th width="100">剩余时间</th>
						</tr>
					</thead>
					<tbody class="d-table">
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn楚泽电子商务 参考com.cn楚泽电子商务 参考com.cn楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
						<tr>
							<td><a href=""><strong>wuchong.com</strong></a></td>
							<td>楚泽电子商务 参考com.cn</td>
							<td>柚皮网</td>
							<td>215566</td>
							<td>1200元</td>
							<td>2天5小时</td>
						</tr>
					</tbody>
					<tfoot class="d-huomore">
						<tr>
							<td colspan="6"><a href="">点击获取更多信息</a></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<!--内容区域-左部结束-->
			<!--内容区域-右部开始-->
			<div class="col-xs-3 d-right">
				<div class="other">
					<div class="list1">交易常识</div>
					<ul class="affiche-list">
						<li><a href="">2014年度国别顶级域名成交榜单TOP40</a></li>
						<li><a href="">2014年度国别顶级域名成交榜单TOP40</a></li>
						<li><a href="">2014年度国别顶级域名成交榜单TOP40</a></li>
						<li><a href="">2014年度国别顶级域名成交榜单TOP40成交榜单</a></li>
						<li><a href="">2014年度国别顶级域名成交榜单TOP40</a></li>
					</ul>
				</div>
				<div class="other d-mt">
					<div class="list1">商品推荐</div>
					<ul class="affiche-list1">
						<li><a href="">chinaag.com</a><span class="fr">￥14999</span></li>
						<li><a href="">chinaag.comchinaag.comchinaag.com</a><span class="fr">￥14999</span></li>
						<li><a href="">chinaag.com</a><span class="fr">￥14999</span></li>
						<li><a href="">chinaag.com</a><span class="fr">￥14999</span></li>
						<li><a href="">chinaag.com</a><span class="fr">￥14999</span></li>
					</ul>
				</div>
				<div class="d-notice mt20">
					<div class="tab-hd">
						<ul class="list-inline tab-nav">
						  <li><a href="" target="_blank">最新上线</a></li>
						  <li><a href="" target="_blank">点赞排行</a></li>
						</ul>
					</div>
					<div class="tab-bd">
						<div class="tab-pal">
							<ul>
								<li><a href="#">chinaag.comchinaag.comchinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
							</ul>
						</div>
						<div class="tab-pal">
							<ul>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
								<li><a href="#">chinaag.com</a><span class="fr cr">￥14999</span></li>
							</ul>
						</div>
					</div>
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