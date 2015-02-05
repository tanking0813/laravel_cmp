@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.patent_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.patent_menu')
@stop

@section('banner')
	<!--banner,产品轮播开始-->
	<div class="row">
		<div class="col-xs-12 banner-p">
			<div id="slideBox-p" class="slideBox-p">
				<div class="bd">
					<ul class="list-unstyled">
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/pbanner4.png') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--banner,产品轮播结束-->
@stop

@section('content')
<!--内容块开始-->
<div class="container m-main">
	<!--内容1开始-->
	<div class="row">
		<!--左部分类开始-->
		<div class="col-xs-2">
			<ul id="nav" class="list-unstyled m-tm-list2">
				<li id="mainCate-1" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p1.png') }}</span>农林渔牧 / 食品</a>
				</li>
				<li id="mainCate-2" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p2.png') }}</span>交通 / 运输 / 包装</a>
				</li>
				<li id="mainCate-3" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p3.png') }}</span>化工 / 冶金 / 生物</a>
				</li>
				<li id="mainCate-4" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p4.png') }}</span>纺织 / 造纸</a>
				</li>
				<li id="mainCate-5" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p5.png') }}</span>建筑 / 采挖 / 照明</a>
				</li>
				<li id="mainCate-6" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p6.png') }}</span>机械 / 加工 / 照明</a>
				</li>
				<li id="mainCate-7" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p7.png') }}</span>服饰 / 日用 / 家电</a>
				</li>
				<li id="mainCate-8" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p8.png') }}</span>通信 / 电子 / 数码</a>
				</li>
				<li id="mainCate-9" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p9.png') }}</span>医疗 / 保健 / 美容</a>
				</li>
				<li id="mainCate-10" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p10.png') }}</span>能源 / 动力 / 电力</a>
				</li>
				<li id="mainCate-11" class="mainCate">
					<a href=""><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/p11.png') }}</span>更多专利分类</a>
				</li>
			</ul>	
		</div>
		<!--左部分类结束-->
	</div>
	<!--内容1结束-->
	<div class="row ex-main mt20">
		<div class="col-xs-12 ex-m-right1">
			<!--商品筛选开始-->
			<div class="ex-mr4">
				<h3 class="pat-h3">热门技术&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/hot-tech.png') }}</h3>
				<ul class="list-inline">
					<li class="t-h">热门分类：</li>
					<li><a href="">农业</a></li>
					<li><a href="">食品饮料 </a></li>
					<li><a href="">干燥设备</a></li>
					<li><a href="">西药</a></li>
					<li><a href="">风能</a></li>
					<li><a href="">太阳能</a></li>
					<li><a href="">人造纺织材料</a></li>
					<li><a href="">切削设备建材</a></li>
					<li><a href="">陶瓷</a></li>
					<li><a href="">汽车及其配件</a></li>
					<li><a href="">渔业</a></li>
					<li><a href="">工业原料</a></li>
					<li><a href="">家电家具</a></li>
					<li><a href="">装饰</a></li>
					<li><a href="">汽车及其配件</a></li>
					<li><a href="">更多＞</a></li>
					<li class="default"><a href="">不限</a></li>
				</ul>
				<ul class="list-inline">
					<li class="t-h">交易类型：</li>
					<li><a href="">转让</a></li>
					<li><a href="">普通许可</a></li>
					<li><a href="">独占许可</a></li>
					<li><a href="">排他许可</a></li>
					<li class="default"><a href="">不限</a></li>
				</ul>
				<ul class="list-inline">
					<li class="t-h">价格：</li>
					<li><a href="">5000以下</a></li>
					<li><a href="">5000-1万</a></li>
					<li><a href="">1-2万</a></li>
					<li><a href="">2万以上</a></li>
					<li class="default"><a href="">不限</a></li>
				</ul>
			</div>
			<!--商品筛选结束-->
			<div class="ex-p-lun mt20">
				<h2>热门技术推荐</h2>
				<!--热门技术-专利无缝轮播开始-->
				<div class="ex-p1 mt20">
					<div class="onbox">
						<ul class="list-inline le-loop2">
							<li>
								<a href="" class="des">
									<p>{{ HTML::image('modules/shop/images/test/pat-pro18.png') }}</p>
									<p class="pt10">可调谐白光LED驱动芯片</p>
									<p>类型：转让</p>
									<p>行业分类：食品饮料</p>
									<p class="p-price">￥14999.00</p>
								</a>
								<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1"></span></a><span class="sp2 ml20">29999</span><span class="sp3 fr"><strong>00</strong>时<strong>49</strong>分<strong>16</strong>秒<strong>4</strong></p>
							</li>
							<li>
								<a href="" class="des">
									<p>{{ HTML::image('modules/shop/images/test/pat-pro19.png') }}</p>
									<p class="pt10">可调谐白光LED驱动芯片</p>
									<p>类型：转让</p>
									<p>行业分类：食品饮料</p>
									<p class="p-price">￥14999.00</p>
								</a>
								<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="sp3 fr"><strong>00</strong>时<strong>49</strong>分<strong>16</strong>秒<strong>4</strong></p>
							</li>
							<li>
								<a href="" class="des">
									<p>{{ HTML::image('modules/shop/images/test/pat-pro20.png') }}</p>
									<p class="pt10">可调谐白光LED驱动芯片</p>
									<p>类型：转让</p>
									<p>行业分类：食品饮料</p>
									<p class="p-price">￥14999.00</p>
								</a>
								<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="sp3 fr"><strong>00</strong>时<strong>49</strong>分<strong>16</strong>秒<strong>4</strong></p>
							</li>
							<li>
								<a href="" class="des">
									<p>{{ HTML::image('modules/shop/images/test/pat-pro21.png') }}</p>
									<p class="pt10">可调谐白光LED驱动芯片</p>
									<p>类型：转让</p>
									<p>行业分类：食品饮料</p>
									<p class="p-price">￥14999.00</p>
								</a>
								<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="sp3 fr"><strong>00</strong>时<strong>49</strong>分<strong>16</strong>秒<strong>4</strong></p>
							</li>
						</ul>
					</div>
					<div class="pageBtn">
						<span class="prev">&lt;</span>
						<span class="next">&gt;</span>
					</div>
				</div>
				<!--热门技术-专利无缝轮播结束-->
			</div>
			<!--排序导航开始-->
			<div class="ex-mr2">
				<div class="sorting">
					<div class="sorting-l fl">
						<ul class="list-inline sort">
							<li class="s1"><a href="">默认排序</a></li>
							<li><a href="">人气排序</a></li>
							<li><a href="">价格排序</a></li>
						</ul>
					</div>
					<div class="sorting-l fr">
						<ul class="list-inline sort1">
							<li><a href="">发布商标转让</a></li>
							<li><a href="">发布商标求购</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<!--排序导航结束-->
			<!--商标展示开始-->
			<div class="ex-p3">
				<ul class="list-inline ex-plist">
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro21.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro18.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro19.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro20.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro21.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro18.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro19.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro20.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro21.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro18.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro19.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro20.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro21.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro18.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro19.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro20.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro21.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro18.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro19.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
					<li>
						<a href="">
						<p class="go-patent">{{ HTML::image('modules/shop/images/test/pat-pro20.png') }}</p>
						<div class="pat">
							<p>可调谐白光LED驱动芯片</p>
							<p>类型：转让</p>	
							<p>行业分类：食品饮料</p>
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
						</div>
						</a>
						<p class="pat-like like-wrap"><a href="javascript:void(0);" class="j-zan1"><span class="p-sp1">&nbsp;</span></a><span class="sp2 ml20">29999</span><span class="stor"><a href="javascript:void(0);" class="j-store1">收藏</a></span></p>
					</li>
				</ul>
			</div>
			<!--商标展示结束-->
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
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40"><img src="../images/shop/test/gao8.png"></div>
	</div>
	<!--广告图1结束-->
</div>
<!--内容块结束-->
<!--底部开始-->
@stop