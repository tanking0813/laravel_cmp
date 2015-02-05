@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.copy_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.copy_menu')
@stop

@section('banner')
	<div class="row banner">
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/cbanner.png') }}</div>
	</div>
@stop

@section('content')
	<!--内容块开始-->
	<div class="container m-main">
		<div class="row ex-main mt20">
			<!--左部开始-->
			<div class="col-xs-10 ex-m-left3">
				<h2>人气著作权推荐</h2>
				<!--人气商标推荐无缝轮播开始-->
				<div class="ex-m1 mt20">
					<div class="onbox-copy">
						<ul class="list-inline le-loop c-copy">
							<li>
								<a href="">
									<p>{{ HTML::image('modules/shop/images/test/c-pic1.png') }}</p>
									<p class="le-p1">首饰品类商标<span class="spot">现货抢购</span></p>
									<p class="le-p2">拥有一个别树一帜的商标，无疑是 打开品牌市场的一个先锋。那么在那些衣服鞋帽类的商标当中有那些商标......</p>
									<p class="seckill">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								</a>
							</li>
							<li>
								<a href="">
									<p>{{ HTML::image('modules/shop/images/test/c-pic2.png') }}</p>
									<p class="le-p1">首饰品类商标<span class="spot">现货抢购</span></p>
									<p class="le-p2">拥有一个别树一帜的商标，无疑是 打开品牌市场的一个先锋。那么在那些衣服鞋帽类的商标当中有那些商标......</p>
									<p class="seckill">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								</a>
							</li>
							<li>
								<a href="">
									<p>{{ HTML::image('modules/shop/images/test/c-pic3.png') }}</p>
									<p class="le-p1">首饰品类商标<span class="spot">现货抢购</span></p>
									<p class="le-p2">拥有一个别树一帜的商标，无疑是 打开品牌市场的一个先锋。那么在那些衣服鞋帽类的商标当中有那些商标......</p>
									<p class="seckill">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								</a>
							</li>
							<li>
								<a href="">
									<p>{{ HTML::image('modules/shop/images/test/c-pic1.png') }}</p>
									<p class="le-p1">首饰品类商标<span class="spot">现货抢购</span></p>
									<p class="le-p2">拥有一个别树一帜的商标，无疑是 打开品牌市场的一个先锋。那么在那些衣服鞋帽类的商标当中有那些商标......</p>
									<p class="seckill">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--人气商标推荐无缝轮播结束-->
				<!--商品筛选开始-->
				<div class="ex-mr4">
					<h3 class="copy-h3">已选分类：<span>摄影</span></h3>
					<ul class="list-inline">
						<li class="t-h">商品分类：</li>
						<li><a href="">文字</a></li>
						<li><a href="">口述</a></li>
						<li><a href="">美术</a></li>
						<li><a href="">音乐</a></li>
						<li class="on"><a href="">摄影</a></li>
						<li><a href="">电影</a></li>
						<li><a href="">软件</a></li>
						<li><a href="">动漫</a></li>
						<li><a href="">表演</a></li>
						<li><a href="">录制</a></li>
						<li><a href="">其它</a></li>
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
				<div class=" ex-m4">
					<div class="grade">
						<ul class="list-inline flo3 c-list">
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
									</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								<div class="dk">
									<p class="lap1">九寨沟诺日朗瀑布</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
									<p class="lap9">距特卖结束：<strong>02</strong>天<strong>01</strong>时<strong>00</strong>分<strong>18</strong>秒</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
									<p class="go-shop">
										<a href="">
											{{ HTML::image('modules/shop/images/test/c-pic2.png') }}
										</a>
									</p>
								</a>
								<div class="dk">
									<p class="lap1">自然和谐风光作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap7">抢光于<strong>5</strong>日<strong>10</strong>时</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">{{ HTML::image('modules/shop/images/test/c-pic3.png') }}</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill2.png') }}</p>
								<div class="dk">
									<p class="lap1">《红红火火》摄影作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(0)</a></span></p>
									<p class="lap10">将于：<strong>1</strong>月<strong>6</strong>日<strong>10：00</strong>开抢</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
									</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								<div class="dk">
									<p class="lap1">自然和谐风光作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
									<p class="lap9">距特卖结束：<strong>02</strong>天<strong>01</strong>时<strong>00</strong>分<strong>18</strong>秒</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
									</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								<div class="dk">
									<p class="lap1">九寨沟诺日朗瀑布</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
									<p class="lap9">距特卖结束：<strong>02</strong>天<strong>01</strong>时<strong>00</strong>分<strong>18</strong>秒</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
									<p class="go-shop">
										<a href="">
											{{ HTML::image('modules/shop/images/test/c-pic2.png') }}
										</a>
									</p>
								</a>
								<div class="dk">
									<p class="lap1">自然和谐风光作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap7">抢光于<strong>5</strong>日<strong>10</strong>时</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">{{ HTML::image('modules/shop/images/test/c-pic3.png') }}</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill2.png') }}</p>
								<div class="dk">
									<p class="lap1">《红红火火》摄影作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(0)</a></span></p>
									<p class="lap10">将于：<strong>1</strong>月<strong>6</strong>日<strong>10：00</strong>开抢</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
									</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								<div class="dk">
									<p class="lap1">自然和谐风光作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
									<p class="lap9">距特卖结束：<strong>02</strong>天<strong>01</strong>时<strong>00</strong>分<strong>18</strong>秒</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
									</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								<div class="dk">
									<p class="lap1">九寨沟诺日朗瀑布</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
									<p class="lap9">距特卖结束：<strong>02</strong>天<strong>01</strong>时<strong>00</strong>分<strong>18</strong>秒</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
									<p class="go-shop">
										<a href="">
											{{ HTML::image('modules/shop/images/test/c-pic2.png') }}
										</a>
									</p>
								</a>
								<div class="dk">
									<p class="lap1">自然和谐风光作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap7">抢光于<strong>5</strong>日<strong>10</strong>时</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">{{ HTML::image('modules/shop/images/test/c-pic3.png') }}</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill2.png') }}</p>
								<div class="dk">
									<p class="lap1">《红红火火》摄影作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(0)</a></span></p>
									<p class="lap10">将于：<strong>1</strong>月<strong>6</strong>日<strong>10：00</strong>开抢</p>
								</div>
							</li>
							<li>
								<a href="">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image('modules/shop/images/test/c-pic1.png') }}
									</p>
								</a>
								<p class="seckill1">{{ HTML::image('modules/shop/images/icon/seckill.png') }}</p>
								<div class="dk">
									<p class="lap1">自然和谐风光作品</p>	
									<p class="lap4 cr">￥14999 <del>￥84999</del></p>
									<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
									<p class="lap9">距特卖结束：<strong>02</strong>天<strong>01</strong>时<strong>00</strong>分<strong>18</strong>秒</p>
								</div>
							</li>
						</ul>
					</div>
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
			<!--左部结束-->
			<!--右部开始-->
			<div class="col-xs-2 ex-m-right3">
				<!--右部-点赞排行开始-->
				<div class="ex-copy">
					<h4 class="dianzan">点赞排行</h4>
					<ul class="copyright-list">
						<li><a href="">作品名称</a><span class="fr">点击率</span></li>
						<li><a href="">1.七十一级游戏</a><span class="fr">3974次</span></li>
						<li><a href="">2.山村里的民舍</a><span class="fr">3974次</span></li>
						<li><a href="">3.《神奇大冒险》</a><span class="fr">3974次</span></li>
						<li><a href="">4.山村里的民舍</a><span class="fr">3974次</span></li>
						<li><a href="">5.联邦神秘武器</a><span class="fr">3974次</span></li>
						<li><a href="">6.山村里的民舍</a><span class="fr">3974次</span></li>
						<li><a href="">7.周末去旅行</a><span class="fr">3974次</span></li>
						<li><a href="">8.山村里的民舍</a><span class="fr">3974次</span></li>
						<li><a href="">9.七十一级游戏</a><span class="fr">3974次</span></li>
						<li><a href="">10.山村里的民舍</a><span class="fr">3974次</span></li>
					</ul>
				</div>
				<!--右部-点赞排行结束-->
				<!--右部-成功案例展示无缝滚动开始-->
				<div class="ex-copy mt10">
					<h4>成功案例展示</h4>
					<div class="bd">
						<ul class="list-unstyled ex-cop-list">
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic4.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic5.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic6.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic4.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic5.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/c-pic6.png') }}</div>
									<div class="ex-text fr">自然和谐风光作品<p>￥999<del>已售</del></p></div>
									<div class="clear"></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--右部-成功案例展示无缝滚动结束-->
			</div>
			<!--右部结束-->
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png') }}</div>
		</div>
		<!--广告图1结束-->
	</div>
	<!--内容块结束-->
@stop