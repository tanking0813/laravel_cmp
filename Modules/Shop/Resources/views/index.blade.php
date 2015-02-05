@extends('shop::layouts.default')

@section('content')
<!--内容1开始-->
<div class="row">
	<!--左部菜单开始-->
	<div class="col-xs-2">
		<ul class="list-unstyled m-tm-list1">
			<li>
				<a href="">
					<p class="mlist-pic fl">{{ HTML::image('modules/shop/images/icon/list1.png') }}</p>
					<p class="mlist-txt fr"><span>柚皮通</span><br>打通知识产权<br>开启财富之门</p>
				</a>
			</li>
			<li>
				<a href="">
					<p class="mlist-pic fl">{{ HTML::image('modules/shop/images/icon/list2.png') }}</p>
					<p class="mlist-txt fr"><span>商标交易</span><br>上网买商标<br>自助快捷安全</p>
				</a>
			</li>
			<li>
				<a href="">
					<p class="mlist-pic fl">{{ HTML::image('modules/shop/images/icon/list3.png') }}</p>
					<p class="mlist-txt fr"><span>专利交易</span><br>线上线下同步<br>专利买卖不在难</p>
				</a>
			</li>
			<li>
				<a href="">
					<p class="mlist-pic fl">{{ HTML::image('modules/shop/images/icon/list4.png') }}</p>
					<p class="mlist-txt fr"><span>著作权交易</span><br>版权交易市场<br>下一个路口的抉择</p>
				</a>
			</li>
			<li>
				<a href="">
					<p class="mlist-pic fl">{{ HTML::image('modules/shop/images/icon/list5.png') }}</p>
					<p class="mlist-txt fr"><span>域名市场</span><br>一个域名<br>成就一份事业</p>
				</a>
			</li>
			<li>
				<a href="">
					<p class="mlist-pic fl">{{ HTML::image('modules/shop/images/icon/list6.png') }}</p>
					<p class="mlist-txt fr"><span>专家服务</span><br>专家评估<br>专业服务定制化</p>
				</a>
			</li>	
		</ul>	
	</div>
	<!--左部菜单结束-->
	<!--banner,产品轮播开始-->
	<div class="col-xs-8 ml-5">
		<div class="row">
			<div class="col-xs-12 mt20">
				<div id="slideBox" class="slideBox">
					<div class="hd">
						<ul class="list-unstyled"><li>1</li><li>2</li><li>3</li></ul>
					</div>
					<div class="bd">
						<ul class="list-unstyled">
							<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/banner1.jpg') }}</a></li>
							<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/banner.png') }}</a></li>
							<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/banner2.jpg') }}</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="scrollBox2">
					<div class="ohbox">
						<ul class="list-inline mar_list1">
							<li>
								<a href="">
									<p class="lun-pic">{{ HTML::image('modules/shop/images/test/lun1.png') }}</p>
									<p>商标名：梦达服饰有限公司</p>
									<p>类别：服饰类</p>
									<p><span><font color="#c40300">价格：￥4000.00</font></span><del><font color="#8f8c8c">￥5000.00</font></del></p>
								</a>
							</li>
							<li>
								<a href="">
									<p class="lun-pic">{{ HTML::image('modules/shop/images/test/lun2.png') }}</p>
									<p>商标名：梦达服饰有限公司</p>
									<p>类别：服饰类</p>
									<p><span><font color="#c40300">价格：￥4000.00</font></span><del><font color="#8f8c8c">￥5000.00</font></del></p>
								</a>
							</li>
							<li>
								<a href="">
									<p class="lun-pic">{{ HTML::image('modules/shop/images/test/lun3.png') }}</p>
									<p>商标名：梦达服饰有限公司</p>
									<p>类别：服饰类</p>
									<p><span><font color="#c40300">价格：￥4000.00</font></span><del><font color="#8f8c8c">￥5000.00</font></del></p>
								</a>
							</li>
							<li>
								<a href="">
									<p class="lun-pic">{{ HTML::image('modules/shop/images/test/lun1.png') }}</p>
									<p>商标名：梦达服饰有限公司</p>
									<p>类别：服饰类</p>
									<p><span><font color="#c40300">价格：￥4000.00</font></span><del><font color="#8f8c8c">￥5000.00</font></del></p>
								</a>
							</li>
							<li>
								<a href="">
									<p class="lun-pic">{{ HTML::image('modules/shop/images/test/lun2.png') }}</p>
									<p>商标名：梦达服饰有限公司</p>
									<p>类别：服饰类</p>
									<p><span><font color="#c40300">价格：￥4000.00</font></span><del><font color="#8f8c8c">￥5000.00</font></del></p>
								</a>
							</li>
							<li>
								<a href="">
									<p class="lun-pic">{{ HTML::image('modules/shop/images/test/lun3.png') }}</p>
									<p>商标名：梦达服饰有限公司</p>
									<p>类别：服饰类</p>
									<p><span><font color="#c40300">价格：￥4000.00</font></span><del><font color="#8f8c8c">￥5000.00</font></del></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner,产品轮播结束-->
	<!--右部用户登录开始-->
	<div class="col-xs-2 user mt20">
		
		@include('shop::partials.login')

		<div class="row">
			<div class="col-xs-12 mt10">
				<div class="notice">
					<div class="tab-hd">
						<ul class="list-inline tab-nav">
						  <li><a href="" target="_blank">用户指南</a></li>
						  <li><a href="" target="_blank">买家入门</a></li>
						  <li><a href="" target="_blank">卖家入门</a></li>
						</ul>
					</div>
					<div class="tab-bd">
						<div class="tab-pal">
							<ul>
								<li><a href="#">[公告]关于知识产权侵权规则修订</a></li>
								<li><a href="#">[公告]1688举行柔性供应链峰会</a></li>
								<li><a href="#">关于未注水充电热水袋禁售通知</a></li>
							</ul>
						</div>
						<div class="tab-pal">
							<ul>
								<li><a href="#">[公告]1688举行柔性供应链峰会</a></li>
								<li><a href="#">[公告]关于知识产权侵权规则修订</a></li>
								<li><a href="#">关于未注水充电热水袋禁售通知</a></li>
							</ul>
						</div>
						<div class="tab-pal">
							<ul>
								<li><a href="#">关于未注水充电热水袋禁售通知</a></li>
								<li><a href="#">[公告]关于知识产权侵权规则修订</a></li>
								<li><a href="#">[公告]1688举行柔性供应链峰会</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 bao">
				<ul class="list-inline">
					<li><a href="">{{ HTML::image('modules/shop/images/icon/bao2.png') }}</a></li>
					<li><a href="">{{ HTML::image('modules/shop/images/icon/bao3.png') }}</a></li>
					<li><a href="">{{ HTML::image('modules/shop/images/icon/bao1.png') }}</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 mt10">
				<div class="txtMarquee-top" style="height:212px;">
					<div class="list1">
						成交记录
						<p class="hd">
							<a class="prev"></a>
							<a class="next"></a>
						</p>
					</div>
					<div class="bd1">
						@datalist('Shop_logo','shop::widget.trade_info_list',[['recomment','=',1]],0,10,['id','title','category_id','updated_at'],'category',['select'=>['id','slug']])
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!--右部用户登录结束-->
</div>
<!--内容1结束-->
<!--导航分类开始-->
<div class="row">
	<div class="col-xs-12 shou-list">
		<ul class="list-inline slist">
			<li>
				<h3>{{ HTML::image('modules/shop/images/icon/shou-list1.png','',['style'=>'vertical-align: -2px;margin-right:20px']) }}商标市场</h3>
				<p><span><a href="">精品商标</a></span><span class="slist-span"><a href="">涉外商标</a></span><span class="slist-span"><a href="">人气商标</a></span><br><span><a href="">一口价商标</a></span><span class="slist-span"><a href="">商标猎头</a></span></p>
			</li>
			<span class="line1"></span>
			<li>
				<h3>{{ HTML::image('modules/shop/images/icon/shou-list2.png','',['style'=>'vertical-align: -2px;margin-right:20px']) }}专利市场</h3>
				<p><span><a href="">热门技术</a></span><span class="slist-span"><a href="">人气专利</a></span><span class="slist-span"><a href="">涉外专利</a></span><br><span><a href="">一口价专利</a></span><span class="slist-span"><a href="">专利猎头</a></span></p>
			</li>
			<span class="line1"></span>
			<li>
				<h3>{{ HTML::image('modules/shop/images/icon/shou-list3.png','',['style'=>'vertical-align: -2px;margin-right:20px']) }}著作权市场</h3>
				<p><span><a href="">热门版权</a></span><span class="slist-span"><a href="">人气版权</a></span><span class="slist-span"><a href="">计算机软件</a></span><br><span><a href="">作品著作权</a></span></p>
			</li>
			<span class="line1"></span>
			<li>
				<h3>{{ HTML::image('modules/shop/images/icon/shou-list4.png','',['style'=>'vertical-align: -2px;margin-right:20px']) }}域名市场</h3>
				<p><span><a href="">淘域名</a></span><span class="slist-span"><a href="">域名拍卖</a></span><span class="slist-span"><a href="">珍品域名</a></span><br><span><a href="">域名停放</a></span><span class="slist-span"><a href="">经济中介</a></span></p>
			</li>
			<span class="line1"></span>
			<li>
				<h3>{{ HTML::image('modules/shop/images/icon/shou-list5.png','',['style'=>'vertical-align: -2px;margin-right:20px']) }}热门资讯</h3>
				<p><span><a href="">知产新闻</a></span><span class="slist-span"><a href="">政策解读</a></span><span class="slist-span"><a href="">柚皮故事</a></span><br><span><a href="">柚皮百科</a></span></p>
			</li>
		</ul>
	</div>
</div>
<!--导航分类结束-->
<!--推荐内容开始-->
<div class="row tui">
	<!--今日推荐开始-->
	<div class="col-xs-2 today-tui">
		<a href="">
			<div class="tui-pic">{{ HTML::image('modules/shop/images/test/pic1.png') }}</div>
			<div class="tui-txt mt20">
				<p class="p1">商标名：凡客诚品</p>
				<p>类别：服饰类</p>
				<p class="p3">价格：<span>￥5000.00</span></p>
				<p>点击量：200</p>
			</div>
		</a>
	</div>
	<!--今日推荐结束-->
	<!--精品推荐开始-->
	<div class="col-xs-7 jing-tui">
		<h4>精品推荐</h4>
		<div class="row">
			<div class="col-xs-3 jtui" style="padding-left:25px;">
				<a href="">
					<div class="jtui1">精品商标</div>
					<div class="jtui2">距离活动结束仅剩<br>00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</div>
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic2.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
				<div class="jtui4"><span class="jtot">服饰类</span><span><a href="">精品商标推荐</a></span></div>
			</div>
			<div class="col-xs-3 jtui">
				<a href="">
					<div class="jtui1">热门技术</div>
					<div class="jtui2">距离活动结束仅剩<br>00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</div>
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic3.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
				<div class="jtui4"><span class="jtot">电子类</span><span><a href="">热门技术推荐</a></span></div>
			</div>
			<div class="col-xs-3 jtui">
				<a href="">
					<div class="jtui1">热门著作权</div>
					<div class="jtui2">距离活动结束仅剩<br>00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</div>
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic4.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>	
					</div>
				</a>
				<div class="jtui4"><span class="jtot">服饰类</span><span><a href="">精品专利推荐</a></span></div>
			</div>
			<div class="col-xs-3 jtui" style="margin-left:-15px;padding-left:30px;">
				<a href="">
					<div class="jtui1">珍品域名</div>
					<div class="jtui2">距离活动结束仅剩<br>00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</div>
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic5.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>	
					</div>
				</a>
				<div class="jtui4"><span class="jtot">计算机</span><span><a href="">精品著作权推荐</a></span></div>
			</div>
		</div>
	</div>
	<!--精品推荐结束-->
	<!--热门推荐开始-->
	<div class="col-xs-3 re-tui">
		<div class="j-slide">
			<h4>热门推荐<span class="fr"><a href="javascript:void(0)" class="next">换一批</a></span></h4>
			<ul>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic6.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic7.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic8.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic6.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic7.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic8.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic6.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic7.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="rt-lie">
					<div class="tui-pic fl"><a href="">{{ HTML::image('modules/shop/images/test/pic8.png') }}</a></div>
					<div class="tui-txt fr">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p>价格：<font color="#c40300">￥5000.00</font></p>
						<p class="p3"><a href="">立即购买</a></p>
					</div>
					<div class="clear"></div>
				</div>
			</ul>
		</div>
	</div>
	<!--热门推荐结束-->
</div>
<!--推荐内容结束-->
<!--广告图1开始-->
<div class="row">
	<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao4.png') }}</div>
</div>
<!--广告图1结束-->
<!--商标市场开始-->
<div class="row goin-market">
	<h5><span class="goin-mark">商标市场&nbsp;•&nbsp;</span><span class="ml20"><a href="">进入&nbsp;{{ HTML::image('modules/shop/images/icon/goin.png','',['style'=>'vertical-align:0']) }}</a></span><span class="jtui2 ml40">距离活动结束仅剩:&nbsp;&nbsp;00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</span><span class="go-lie fr"><a href="">服务类商标</a></span></h5>
	<div class="col-xs-2 goin-left">
		<div>{{ HTML::image('modules/shop/images/test/lt1.png','',['style'=>'width="198"']) }}</div>
		<div>{{ HTML::image('modules/shop/images/test/lm1.png','',['style'=>'width="198"']) }}</div>
		<div class="gl-lie" style="background: #fce48c;">
			<ul class="list-inline">
				<li><a href="">毛衣</a></li>
				<li><a href="">棉衣</a></li>
				<li><a href="">围巾</a></li>
				<li><a href="">裤子</a></li>
				<li><a href="">帽子</a></li>
				<li><a href="">鞋子</a></li>
				<li><a href="">袜子</a></li>
			</ul>
		</div>
		<div>{{ HTML::image('modules/shop/images/icon/lb1.png','',['style'=>'width="198"']) }}</div>
	</div>
	<div class="col-xs-8 goin-middle">
		<ul class="list-inline">
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic9.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic10.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic11.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic12.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
		</ul>
		<div class="gm-re"><span class="goin-mark">热门分类</span><span class="gm-lie"><a href="">服饰</a></span><span class="gm-lie"><a href="">电子</a></span><span class="gm-lie"><a href="">服饰</a></span><span class="gm-lie"><a href="">药品</a></span><span class="more fr"><a href="">更多></a></span></div>
		<ul class="list-inline">
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic13.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic14.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic15.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic16.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<div class="col-xs-2 goin-right">
		<div class="j-slide">
			<h4>热销排行榜<span class="fr"><a href="javascript:void(0)" class="next">换一批</a></span></h4>
			@datalist('Shop_logo','shop::widget.hot_hit_list',[],'6')
		</div>
		<h4>品牌推荐<span class="fr"><a href="">更多></a></span></h4>
		@datalist('Shop_logo','shop::widget.brand_recommend_list',[],'4')
		<div class="gr-bot"><span><a href="">服饰类</a></span><span><a href="">电子产品类</a></span></div>
	</div>
</div>
<!--商标市场结束-->
<!--广告图2开始-->
<div class="row">
	<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao4.png') }}</div>
</div>
<!--广告图2结束-->
<!--专利市场开始-->
<div class="row goin-market">
	<h5><span class="goin-mark">专利市场&nbsp;•&nbsp;</span><span class="ml20"><a href="">进入&nbsp;{{ HTML::image('modules/shop/images/icon/goin.png','',['style'=>'vertical-align:0']) }}</a></span><span class="jtui2 ml40">距离活动结束仅剩:&nbsp;&nbsp;00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</span><span class="go-lie fr"><a href="">交通运输包装</a></span></h5>
	<div class="col-xs-2 goin-left">
		<div>{{ HTML::image('modules/shop/images/test/lt2.png','',['style'=>'width="198"']) }}</div>
		<div>{{ HTML::image('modules/shop/images/test/lm2.png','',['style'=>'width="198"']) }}</div>
		<div class="gl-lie" style="background: #d9ed7c;">
			<ul class="list-inline">
				<li><a href="">毛衣</a></li>
				<li><a href="">棉衣</a></li>
				<li><a href="">围巾</a></li>
				<li><a href="">裤子</a></li>
				<li><a href="">帽子</a></li>
				<li><a href="">鞋子</a></li>
				<li><a href="">袜子</a></li>
			</ul>
		</div>
		<div>{{ HTML::image('modules/shop/images/icon/lb2.png','',['style'=>'width="198"']) }}</div>
	</div>
	<div class="col-xs-8 goin-middle">
		<ul class="list-inline">
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic9.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic10.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic11.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic12.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
		</ul>
		<div class="gm-re"><span class="goin-mark">热门分类</span><span class="gm-lie"><a href="">服饰</a></span><span class="gm-lie"><a href="">电子</a></span><span class="gm-lie"><a href="">服饰</a></span><span class="gm-lie"><a href="">药品</a></span><span class="more fr"><a href="">更多></a></span></div>
		<ul class="list-inline">
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic13.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic14.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic15.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic16.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<div class="col-xs-2 goin-right">
		<div class="j-slide">
			<h4>热销排行榜<span class="fr"><a href="javascript:void(0)" class="next">换一批</a></span></h4>
			@datalist('Shop_logo','shop::widget.hot_hit_list',[],'6')
		</div>
		<h4>品牌推荐<span class="fr"><a href="">更多></a></span></h4>
		@datalist('Shop_logo','shop::widget.brand_recommend_list',[],'4')
		<div class="gr-bot"><span><a href="">服饰类</a></span><span><a href="">电子产品类</a></span></div>
	</div>
</div>
<!--专利市场结束-->
<!--广告图3开始-->
<div class="row">
	<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao4.png') }}</div>
</div>
<!--广告图3结束-->
<!--著作权市场开始-->
<div class="row goin-market">
	<h5><span class="goin-mark">著作权市场&nbsp;•&nbsp;</span><span class="ml20"><a href="">进入&nbsp;{{ HTML::image('modules/shop/images/icon/goin.png','',['style'=>'vertical-align:0']) }}</a></span><span class="jtui2 ml40">距离活动结束仅剩:&nbsp;&nbsp;00<strong>时</strong>00<strong>分</strong>00<strong>秒</strong>4</span><span class="go-lie fr"><a href="">交通运输包装</a></span></h5>
	<div class="col-xs-2 goin-left">
		<div>{{ HTML::image('modules/shop/images/test/lt3.png','',['style'=>'width="198"']) }}</div>
		<div>{{ HTML::image('modules/shop/images/test/lm3.png','',['style'=>'width="198"']) }}</div>
		<div class="gl-lie" style="background: #9fd4fc;">
			<ul class="list-inline">
				<li><a href="">毛衣</a></li>
				<li><a href="">棉衣</a></li>
				<li><a href="">围巾</a></li>
				<li><a href="">裤子</a></li>
				<li><a href="">帽子</a></li>
				<li><a href="">鞋子</a></li>
				<li><a href="">袜子</a></li>
			</ul>
		</div>
		<div>{{ HTML::image('modules/shop/images/icon/lb3.png','',['style'=>'width="198"']) }}</div>
	</div>
	<div class="col-xs-8 goin-middle">
		<ul class="list-inline">
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic9.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic10.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic11.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic12.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
		</ul>
		<div class="gm-re"><span class="goin-mark">热门分类</span><span class="gm-lie"><a href="">服饰</a></span><span class="gm-lie"><a href="">电子</a></span><span class="gm-lie"><a href="">服饰</a></span><span class="gm-lie"><a href="">药品</a></span><span class="more fr"><a href="">更多></a></span></div>
		<ul class="list-inline">
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic13.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic14.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic15.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
			<li>
				<a href="">
					<div class="jtui3">{{ HTML::image('modules/shop/images/test/pic16.png') }}</div>
					<div class="tui-txt mt20">
						<p class="p1">商标名：凡客诚品</p>
						<p>类别：服饰类</p>
						<p class="p3">价格：<font color="#c40300">￥5000.00</font></p>
						<p>点击量：200</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
	<div class="col-xs-2 goin-right">
		<div class="j-slide">
			<h4>热销排行榜<span class="fr"><a href="javascript:void(0)" class="next">换一批</a></span></h4>
			@datalist('Shop_logo','shop::widget.hot_hit_list',[],'6')
		</div>
		<h4>品牌推荐<span class="fr"><a href="">更多></a></span></h4>
		@datalist('Shop_logo','shop::widget.brand_recommend_list',[],'4')
		<div class="gr-bot"><span><a href="">服饰类</a></span><span><a href="">电子产品类</a></span></div>
	</div>
</div>
<!--著作权市场结束-->
<!--广告图4开始-->
<div class="row">
	<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao4.png') }}</div>
</div>
<!--广告图4结束-->
<!--热点资讯开始-->
<div class="row goin-hot">
	<h5><span class="goin-mark">热点资讯&nbsp;•&nbsp;</span><span class="ml20"><a href="">进入&nbsp;{{ HTML::image('modules/shop/images/icon/goin.png','',['style'=>'vertical-align:0']) }}</a></span><span class="zhichan">知产百科</span></h5>
	<div class="col-xs-5 gohot1">
		<div class="mt10">{{ HTML::image('modules/shop/images/test/lun.png') }}</div>
		<div class="go-news">知产新闻</div>
		<ul class="list-inline">
			@datalist('Shop_logo','shop::widget.news_list',[],'4')
		</ul>
	</div>
	<div class="col-xs-2 gohot2">
		<div class="go-news">知产新闻</div>
		<ul class="go-story-list list-unstyled">
			<li><a href=""><i>1</i><strong>[评奖公示]</strong>“年度之星”评选结果公示“年度之星”评选结果公示</a></li>
			<li><a href=""><i>2</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
			<li><a href=""><i>3</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
			<li><a href=""><i>4</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
			<li><a href=""><i>5</i><strong>[评奖公示]</strong>“年度之星”评选结果公示“年度之星”评选结果公示</a></li>
			<li><a href=""><i>6</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
			<li><a href=""><i>7</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
			<li><a href=""><i>8</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
			<li><a href=""><i>9</i><strong>[评奖公示]</strong>“年度之星”评选结果公示“年度之星”评选结果公示</a></li>
			<li><a href=""><i>10</i><strong>[评奖公示]</strong>“年度之星”评选结果公示</a></li>
		</ul>
	</div>
	<div class="col-xs-2 gohot3">
		<div class="go-news">政策解读</div>
		<div class="go-story-imp mt10">
			<span class="s1 fl">{{ HTML::image('modules/shop/images/test/pic18.png') }}</span>
			<span class="s2 fr">看看你的产品适合网上推还是线下跑？<br>采购商城</span>
			<div class="clear"></div>
		</div>
		<ul class="go-story-list list-unstyled">
			@datalist('Shop_logo','shop::widget.news_list',[],'7')
		</ul>
	</div>
	<div class="col-xs-2 gohot4">
		<div class="mt5">{{ HTML::image('modules/shop/images/test/gao7.png') }}</div>
		<ul class="go-story-list list-unstyled">
			@datalist('Shop_logo','shop::widget.news_list',[],'7')
		</ul>
	</div>
</div>
<!--热点资讯结束-->
<!--广告图5开始-->
<div><span>{{ HTML::image('modules/shop/images/test/gao5.png') }}</span><span class="ml30">{{ HTML::image('modules/shop/images/test/gao6.png') }}</span></div>
<!--广告图5结束-->
	
@stop