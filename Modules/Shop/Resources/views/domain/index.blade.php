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
				<div class="">{{ HTML::image('modules/shop/images/test/banner10.png') }}</div>
				<table class="table1">
					<thead>
						<tr>
							<th colspan="3">淘域名</th>
							<th class="d-more"><a href="">更多</a></th>
						</tr>
					</thead>
					<tbody class="tbody1">
						<tr>
							<td><a href="">daisiya.com</a></td>
							<td><a href="">meirong365.cn</a></td>
							<td><a href="">caierbao.com</a></td>
							<td><a href="">gaogaoxingxing.com</a></td>
						</tr>
						<tr>
							<td><a href="">daisiya.com</a></td>
							<td><a href="">meirong365.cn</a></td>
							<td><a href="">caierbao.com</a></td>
							<td><a href="">gaogaoxingxing.com</a></td>
						</tr>
						<tr>
							<td><a href="">daisiya.com</a></td>
							<td><a href="">meirong365.cn</a></td>
							<td><a href="">caierbao.com</a></td>
							<td><a href="">gaogaoxingxing.com</a></td>
						</tr>
						<tr>
							<td><a href="">daisiya.com</a></td>
							<td><a href="">meirong365.cn</a></td>
							<td><a href="">caierbao.com</a></td>
							<td><a href="">gaogaoxingxing.com</a></td>
						</tr>
					</tbody>
				</table>
				<table class="table1">
					<thead>
						<tr>
							<th colspan="3">域名拍卖</th>
							<th class="d-more"><a href="">更多</a></th>
						</tr>
					</thead>
					<tbody class="tbody2">
						<tr>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
							<td>
								<p class="d-name">chinaag.com</p>
								<p class="d-des">简介：硕康,双拼,注册已9年的老域名</p>
								<p class="d-price">当前价格：<span class="cr">1300元</span></p>
								<p class="d-date">剩余时间：<span class="cr">5时20分</span></p>
								<a href=""><p class="d-zan-bg"></p></a>
								<p class="d-zan"><a href="javascript:void(0);" class="d-store">赞</a></p>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="table1">
					<thead>
						<tr>
							<th colspan="3" class="d-tit">推荐一口价域名</th>
							<th class="d-more"><a href="">更多</a></th>
						</tr>
					</thead>
					<tbody class="tbody2">
						<tr>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
							<td>
								<p class="d-name"><a href="">chinaag.com</a></p>
								<p class="d-des">硕康</p>
								<p class="d-price1"><span class="cr"><strong>999元</strong></span><span class="d-zan1"><a href="javascript:void(0);">赞</a></span></p>
							</td>
						</tr>
					</tbody>
				</table>
				<table class="table2">
					<thead>
						<tr>
							<th colspan="5">推荐出售域名列表</th>
							<th class="d-more1"><a href="">更多</a></th>
						</tr>
					</thead>
					<tbody class="tbody3">
						<tr class="d-tr">
							<td><p><span class="cr">域名</span></p></td>
							<td><p>域名分类</p></td>
							<td><p>标价</p></td>
							<td><p><strong class="cr">域名</strong></p></td>
							<td><p>域名分类</p></td>
							<td><p>标价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
						<tr>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td  class="offer"><p>买方报价</p></td>
							<td><p class="d-name"><a href="">chinaag.com</a></p></td>
							<td><p>商业经济</p></td>
							<td><p>买方报价</p></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!--内容区域-左部结束-->
			<!--内容区域-右部开始-->
			<div class="col-xs-3 d-right">
				<div class="d-login">
					<input class="form-control com-inp" type="text" placeholder="用户名：">
					<input class="form-control com-inp" type="text" placeholder="密码：">
					<button>会员登录</button>
					<div><span class="free-reg"><a href="">免费注册</a></span><span class="find-passw"><a href="">找回密码</a></span></div>
				</div>
				<div class="d-purchase mt20">
					<form class="form-inline" role="form">
					  	<div class="form-group">
						    <div class="input-group dp-inp">
						      <div class="input-group-addon">域名：</div>
						      <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
						    </div>
						    <div class="dp-inp">
						    	<div class="row">
							    	<div class="col-xs-8">
							    		<div class="input-group">
							    			<div class="input-group-addon">价格：</div>
								      		<input type="text" class="form-control dp-price" id="exampleInputEmail2" placeholder="">
							    		</div>
							    	</div>
							    	<div class="col-xs-4">
							    		<select class="form-control d-pull">
											<option>元</option>
											<option>美元</option>
											<option>欧元</option>
											<option>人民币</option>
										</select>
							    	</div>
						    	</div>
						    </div>
					  	</div>
						<div class="form-group">
						    <div class="input-group dp-inp">
						      <div class="input-group-addon">备注：</div>
						      <textarea class="form-control" rows="3"></textarea>
						    </div>
					  	</div>
					  	<div class="form-group">
						    <div class="input-group dp-inp">
						    	<span class"d-lian">联系方式：</span>
						      	<label class="radio-inline d-radio">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">我有账户
								</label>
								<label class="radio-inline d-radio">
								 	<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">没有账户
								</label>
						    </div>
					  	</div>
					  	<div class="form-group">
						    <div class="input-group dp-inp">
						      <div class="input-group-addon">&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/letter.png','',['style'=>'vertical-align: 0;']) }}&nbsp;&nbsp;</div>
						      <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入用户名">
						    </div>
						    <div class="input-group dp-inp">
						      <div class="input-group-addon">&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/lock2.png','',['style'=>'vertical-align: 0;']) }}&nbsp;&nbsp;</div>
						      <input type="password" class="form-control" id="exampleInputEmail2" placeholder="">
						    </div>
					  	</div>
					  	<div class="d-process cr">
					  		<span>提交需求</span>＞<span>谈判</span>＞<span>交易完成</span>＞<span>拥有域名</span>
					  	</div>
					  	<button type="button" class="d-btn">立即帮我买</button>
					</form>
				</div>
				<div class="d-notice mt20">
					<div class="tab-hd">
						<ul class="list-inline tab-nav">
						  <li><a href="" target="_blank">交易常识</a></li>
						  <li><a href="" target="_blank">网站公告</a></li>
						</ul>
					</div>
					<div class="tab-bd">
						<div class="tab-pal">
							<ul>
								<li><a href="#">关于PAYPAL停止打款的通知关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于PAYPAL停止打款的通知</a><span class="fr">2015-01-12</span></li>
							</ul>
						</div>
						<div class="tab-pal">
							<ul>
								<li><a href="#">[公告]1688举行柔性供应链峰会</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">[公告]关于知识产权侵权规则修订</a><span class="fr">2015-01-12</span></li>
								<li><a href="#">关于未注水充电热水袋禁售通知</a><span class="fr">2015-01-12</span></li>
							</ul>
						</div>
					</div>
				</div>
				<table class="table-r">
					<thead>
						<tr>
							<th colspan="3">即将结束竞拍列表</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cr"><strong>域名</strong></td>
							<td><strong>剩余时间</strong></td>
							<td><strong>当前价格</strong></td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>10时44分</td>
							<td>1200元</td>
						</tr>
					</tbody>
				</table>
				<table class="table-r">
					<thead>
						<tr>
							<th colspan="2">推荐热卖域名列表</th>
						</tr>
					</thead>
					<tbody class="biao2">
						<tr>
							<td class="cr"><strong>域名</strong></td>
							<td><strong>标价</strong></td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>1200元</td>
						</tr>
						<tr>
							<td><a href=""><strong>yh678.com</strong></a></td>
							<td>1200元</td>
						</tr>
					</tbody>
				</table>
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