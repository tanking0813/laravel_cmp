@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.patent_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.patent_menu')
@stop


@section('content')					
<!--内容块开始-->
<div class="row">
		<div class="col-xs-12 banner-p">
			<div id="slideBox-p" class="slideBox-p">
				<div class="bd">
					<ul class="list-unstyled">
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/pbanner.png') }}</a></li>
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/pbanner.png') }}</a></li>
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/pbanner.png') }}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container m-main1">
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
		<!--右部用户登录开始-->
		<div class="col-xs-2 user1">
			<div class="row mt10">
				<div class="col-xs-4 pl20">{{ HTML::image('modules/shop/images/icon/user.png') }}</div>
				<div class="col-xs-8 hi">Hi,上午好<br>欢迎来到柚皮网</div>
			</div>
			<div class="row resgister mt10">
				<div class="col-xs-6 res"><a href="">{{ HTML::image('modules/shop/images/icon/key.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;登录</a></div>
				<div class="col-xs-6 res1"><a href="">{{ HTML::image('modules/shop/images/icon/pen.png','',['style'=>'vertical-align: -2px']) }}&nbsp;立即注册</a></div>
			</div>
			<div class="row">
				<div class="col-xs-12 mt10">
					<div class="txtMarquee-top2">
						<div class="list1">
							专利转让信息
							<p class="hd">
								<a class="next"></a>
								<a class="prev"></a>
							</p>
						</div>
						<div class="bd">
							<ul class="list-unstyled jilist">		
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
							</ul>
						</div>
					</div>
					<div class="bao1">
						<ul class="list-inline">
							<li><a href="">{{ HTML::image('modules/shop/images/icon/bao2.png') }}</a></li>
							<li><a href="">{{ HTML::image('modules/shop/images/icon/bao3.png') }}</a></li>
							<li><a href="">{{ HTML::image('modules/shop/images/icon/bao1.png') }}</a></li>
						</ul>
					</div>
					<div class="txtMarquee-top3">
						<div class="list1">
							专利求购信息
							<p class="hd">
								<a class="next"></a>
								<a class="prev"></a>
							</p>
						</div>
						<div class="bd">
							<ul class="list-unstyled jilist">		
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
								<li><a href="">第9类日化商标成交<span class="mr fr">230件</span></a></li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!--右部用户登录结束-->
	</div>
	<!--内容1结束-->
	<!--专利分类开始-->
	<div class="row">
		<div class="col-xs-4 pat-list">
			<h5>热门专利</h5>
			<ul class="list-inline mt10">
				<li><a href="">工业原料</a><span class="line">|</span></li>
				<li><a href="">建筑材料</a><span class="line">|</span></li>
				<li><a href="">食品饮料</a><span class="line">|</span></li>
				<li><a href="">家电家具</a><span class="line">|</span></li>
				<li><a href="">汽车配件</a></li>
			</ul>
			<ul class="list-inline p-list-pro mt20">
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic1.png') }}</a></li>
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic2.png') }}</a></li>
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic3.png') }}</a></li>
			</ul>
		</div>
		<div class="col-xs-4 pat-list">
			<h5>一口价专利</h5>
			<ul class="list-inline mt10">
				<li><a href="">废弃处理</a><span class="line">|</span></li>
				<li><a href="">检测设备</a><span class="line">|</span></li>
				<li><a href="">医疗机械</a><span class="line">|</span></li>
				<li><a href="">模具加工</a><span class="line">|</span></li>
				<li><a href="">电力工程</a></li>
			</ul>
			<ul class="list-inline p-list-pro mt20">
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic4.png') }}</a></li>
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic5.png') }}</a></li>
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic6.png') }}</a></li>
			</ul>
		</div>
		<div class="col-xs-4 pat-list">
			<h5>人气专利</h5>
			<ul class="list-inline mt10">
				<li><a href="">电子元件</a><span class="line">|</span></li>
				<li><a href="">建筑材料</a><span class="line">|</span></li>
				<li><a href="">电子元件</a><span class="line">|</span></li>
				<li><a href="">模具加工</a><span class="line">|</span></li>
				<li><a href="">家电家具</a></li>
			</ul>
			<ul class="list-inline p-list-pro mt20">
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic7.png') }}</a></li>
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic8.png') }}</a></li>
				<li><a href="">{{ HTML::image('modules/shop/images/test/p-pic9.png') }}</a></li>
			</ul>
		</div>
	</div>
	<!--专利分类结束-->
	<!--技术推荐开始-->
	<div class="row mt20">
		<div class="col-xs-2 patent1-l">
			<div class="pl-tit">技术推荐排行榜</div>
			<div class="fullSlide1">
				<div class="bd1">
					<ul>
						<li>
							<a href="">
								<div>{{ HTML::image('modules/shop/images/test/p-pro1.png') }}</div>
								<div class="p-name">
									<p class="p1">主营综合性</p>
									<p class="p2">动漫游戏设备</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div>{{ HTML::image('modules/shop/images/test/p-pro2.png') }}</div>
								<div class="p-name">
									<p class="p1">PHILIPS产品</p>
									<p class="p2">专业的制造商</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div>{{ HTML::image('modules/shop/images/test/p-pro1.png') }}</div>
								<div class="p-name">
									<p class="p1">主营综合性</p>
									<p class="p2">动漫游戏设备</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div>{{ HTML::image('modules/shop/images/test/p-pro2.png') }}</div>
								<div class="p-name">
									<p class="p1">PHILIPS产品</p>
									<p class="p2">专业的制造商</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="hd"><ul></ul></div>
			</div>
		</div>
		<div class="col-xs-10 patent1-r">
			<div class="slideTxtBox2">
				<div class="hd">
					<ul>
						<li>热门技术推荐</li>
						<li>企业技术采购</li>
						<li>每周特价专利</li>
					</ul>
					<!--<span class="layB more fr"><a href="javascript:void(0)" class="next">换一批 ＞</a></span>-->
				</div>
				<div class="bd">
					<ul class="j-doubleleft">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic10.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic11.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic12.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic13.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic14.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic15.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic16.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic17.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic18.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic10.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="doubleleft">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic10.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic11.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic12.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic13.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic14.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic15.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic16.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic17.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic18.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic10.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<div class="clear"></div>
					</ul>
					<ul>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic10.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic11.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic12.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic13.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic14.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic15.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic16.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic17.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic18.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic10.png') }}</p>
								<p>生产线高速运动产品</p>
								<p class="mship">分类：检测设备</p>
							</a>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="patent1-r-lun">
				<div class="fullSlide1 lun-r">
					<div class="bd1">
						<ul>
							<li>
								<a href="">
									<div>{{ HTML::image('modules/shop/images/test/p-pro1.png') }}</div>
									<div class="p-name">
										<p class="p1">主营综合性</p>
										<p class="p2">动漫游戏设备</p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div>{{ HTML::image('modules/shop/images/test/p-pro1.png') }}</div>
									<div class="p-name">
										<p class="p1">PHILIPS产品</p>
										<p class="p2">专业的制造商</p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div>{{ HTML::image('modules/shop/images/test/p-pro2.png') }}</div>
									<div class="p-name">
										<p class="p1">主营综合性</p>
										<p class="p2">动漫游戏设备</p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div>{{ HTML::image('modules/shop/images/test/p-pro3.png') }}</div>
									<div class="p-name">
										<p class="p1">PHILIPS产品</p>
										<p class="p2">专业的制造商</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="hd"><ul></ul></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!--技术推荐结束-->
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao8.png') }}</div>
	</div>
	<!--广告图1结束-->
	<!--热门技术开始-->
	<div class="row hot-technology">
		<div class="p-hot-tit">
			<ul class="list-inline fl">
				<li class="li1"><a href="">热门技术&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/hot-tech.png') }}</a></li>
				<li><a href="">电子产品</a><span class="line3">|</span></li>
				<li><a href="">服装鞋帽</a><span class="line3">|</span></li>
				<li><a href="">农业食品</a><span class="line3">|</span></li>
				<li><a href="">太阳能</a><span class="line3">|</span></li>
				<li><a href="">干燥设备</a></li>
			</ul>
			<h3 class="fr">技术项目推荐<span class="more fr mt5"><a href="">更多</a></span></h3>
			<div class="clear"></div>
		</div>
		<div class="col-xs-2 hot-list">
			<div class="list1"><span><a href="">工业原料</a></span><span><a href="">食品饮料</a></span><span><a href="">家电家具</a></span><span><a href="">服装鞋帽</a></span><span><a href="">汽车配件</a></span><span><a href="">建筑材料</a></span><span><a href="">添加剂</a></span><span><a href="">检测设备</a></span><span><a href="">医疗机械</a></span><span><a href="">废气处理</a></span><span><a href="">模具加工</a></span><span><a href="">电子元件</a></span><span><a href="">新能源</a></span><span><a href="">电力工程</a></span><span><a href="">照明</a></span><span><a href="">分离设备</a></span></div>
			<ul class="list-unstyled list2 mt10">
				<li><a href="">农业食品</a></li>
				<li class="on"><a href="">饮料干燥设备</a></li>
				<li><a href="">太阳能人造纺织材料</a></li>
				<li><a href="">切削设备建材</a></li>
				<li><a href="">陶瓷汽车及其配件渔业</a></li>
			</ul>
		</div>
		<div class="col-xs-8 hot-display">
			<div class="hot-dis-pic">
				<div class="bd">
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-2 hot-lun">
			<div class="fullSlide2">
				<div class="bd1">
					<ul>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro3.png') }}<span>{{ HTML::image('modules/shop/images/test/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro3.png') }}<span>{{ HTML::image('modules/shop/images/test/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro3.png') }}<span>{{ HTML::image('modules/shop/images/test/p-jian1.png') }}</span></a>
						</li>
					</ul>
				</div>
				<div class="hd"><ul></ul></div>
			</div>
			<div class="hot-article">
				<ul class="list-inline">
					<li><a href="">工业原料</a></li>
					<li><a href="">食品饮料</a></li>
					<li><a href="">家电家具</a></li>
					<li><a href="">服装鞋帽</a></li>
					<li><a href="">汽车及其配件</a></li>
					<li><a href="">建筑材料</a></li>
					<li><a href="">医疗机械</a></li>
					<li><a href="">电子元件</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--热门技术结束-->
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao8.png') }}</div>
	</div>
	<!--广告图1结束-->
	<!--一口价专利开始-->
	<div class="row hot-technology">
		<div class="p-hot-tit p-price-tit">
			<ul class="list-inline fl">
				<li class="li1"><a href="">一口价专利&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/price-pat.png') }}</a></li>
				<li><a href="">电子产品</a><span class="line3">|</span></li>
				<li><a href="">服装鞋帽</a><span class="line3">|</span></li>
				<li><a href="">农业食品</a><span class="line3">|</span></li>
				<li><a href="">太阳能</a><span class="line3">|</span></li>
				<li><a href="">干燥设备</a></li>
			</ul>
			<h3 class="fr">一口价专利推荐<span class="more fr mt5"><a href="">更多</a></span></h3>
			<div class="clear"></div>
		</div>
		<div class="col-xs-2 hot-list aprice-list">
			<div class="list1"><span><a href="">工业原料</a></span><span><a href="">食品饮料</a></span><span><a href="">家电家具</a></span><span><a href="">服装鞋帽</a></span><span><a href="">汽车配件</a></span><span><a href="">建筑材料</a></span><span><a href="">添加剂</a></span><span><a href="">检测设备</a></span><span><a href="">医疗机械</a></span><span><a href="">废气处理</a></span><span><a href="">模具加工</a></span><span><a href="">电子元件</a></span><span><a href="">新能源</a></span><span><a href="">电力工程</a></span><span><a href="">照明</a></span><span><a href="">分离设备</a></span></div>
			<ul class="list-unstyled list2 mt10">
				<li><a href="">农业食品</a></li>
				<li class="on"><a href="">饮料干燥设备</a></li>
				<li><a href="">太阳能人造纺织材料</a></li>
				<li><a href="">切削设备建材</a></li>
				<li><a href="">陶瓷汽车及其配件渔业</a></li>
			</ul>
		</div>
		<div class="col-xs-8 hot-display">
			<div class="hot-dis-pic">
				<div class="bd">
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
								<p class="pb-pic"></p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-2 hot-lun">
			<div class="fullSlide2">
				<div class="bd1">
					<ul>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro4.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro4.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro4.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
					</ul>
				</div>
				<div class="hd"><ul></ul></div>
			</div>
			<div class="hot-article">
				<ul class="list-inline">
					<li><a href="">工业原料</a></li>
					<li><a href="">食品饮料</a></li>
					<li><a href="">家电家具</a></li>
					<li><a href="">服装鞋帽</a></li>
					<li><a href="">汽车及其配件</a></li>
					<li><a href="">建筑材料</a></li>
					<li><a href="">医疗机械</a></li>
					<li><a href="">电子元件</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--一口价专利结束-->
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao8.png') }}</div>
	</div>
	<!--广告图1结束-->
	<!--涉外专利开始-->
	<div class="row hot-technology">
		<div class="p-hot-tit p-foreign-tit">
			<ul class="list-inline fl">
				<li class="li1"><a href="">涉外专利&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/foreign-pat.png') }}</a></li>
				<li><a href="">电子产品</a><span class="line3">|</span></li>
				<li><a href="">服装鞋帽</a><span class="line3">|</span></li>
				<li><a href="">农业食品</a><span class="line3">|</span></li>
				<li><a href="">太阳能</a><span class="line3">|</span></li>
				<li><a href="">干燥设备</a></li>
			</ul>
			<h3 class="fr">涉外专利推荐<span class="more fr mt5"><a href="">更多</a></span></h3>
			<div class="clear"></div>
		</div>
		<div class="col-xs-2 hot-list foreign-list">
			<div class="list1"><span><a href="">工业原料</a></span><span><a href="">食品饮料</a></span><span><a href="">家电家具</a></span><span><a href="">服装鞋帽</a></span><span><a href="">汽车配件</a></span><span><a href="">建筑材料</a></span><span><a href="">添加剂</a></span><span><a href="">检测设备</a></span><span><a href="">医疗机械</a></span><span><a href="">废气处理</a></span><span><a href="">模具加工</a></span><span><a href="">电子元件</a></span><span><a href="">新能源</a></span><span><a href="">电力工程</a></span><span><a href="">照明</a></span><span><a href="">分离设备</a></span></div>
			<ul class="list-unstyled list2 mt10">
				<li><a href="">农业食品</a></li>
				<li class="on"><a href="">饮料干燥设备</a></li>
				<li><a href="">太阳能人造纺织材料</a></li>
				<li><a href="">切削设备建材</a></li>
				<li><a href="">陶瓷汽车及其配件渔业</a></li>
			</ul>
		</div>
		<div class="col-xs-8 hot-display">
			<div class="hot-dis-pic">
				<div class="bd">
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-2 hot-lun">
			<div class="fullSlide2">
				<div class="bd1">
					<ul>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro5.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro5.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro5.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
					</ul>
				</div>
				<div class="hd"><ul></ul></div>
			</div>
			<div class="hot-article">
				<ul class="list-inline">
					<li><a href="">工业原料</a></li>
					<li><a href="">食品饮料</a></li>
					<li><a href="">家电家具</a></li>
					<li><a href="">服装鞋帽</a></li>
					<li><a href="">汽车及其配件</a></li>
					<li><a href="">建筑材料</a></li>
					<li><a href="">医疗机械</a></li>
					<li><a href="">电子元件</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--涉外专利结束-->
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao8.png') }}</div>
	</div>
	<!--广告图1结束-->
	<!--人气专利开始-->
	<div class="row hot-technology">
		<div class="p-hot-tit p-popular-tit">
			<ul class="list-inline fl">
				<li class="li1"><a href="">人气专利&nbsp;&nbsp;{{ HTML::image('modules/shop/images/icon/popu-pat.png') }}</a></li>
				<li><a href="">电子产品</a><span class="line3">|</span></li>
				<li><a href="">服装鞋帽</a><span class="line3">|</span></li>
				<li><a href="">农业食品</a><span class="line3">|</span></li>
				<li><a href="">太阳能</a><span class="line3">|</span></li>
				<li><a href="">干燥设备</a></li>
			</ul>
			<h3 class="fr">人气专利推荐<span class="more fr mt5"><a href="">更多</a></span></h3>
			<div class="clear"></div>
		</div>
		<div class="col-xs-2 hot-list popular-list">
			<div class="list1"><span><a href="">工业原料</a></span><span><a href="">食品饮料</a></span><span><a href="">家电家具</a></span><span><a href="">服装鞋帽</a></span><span><a href="">汽车配件</a></span><span><a href="">建筑材料</a></span><span><a href="">添加剂</a></span><span><a href="">检测设备</a></span><span><a href="">医疗机械</a></span><span><a href="">废气处理</a></span><span><a href="">模具加工</a></span><span><a href="">电子元件</a></span><span><a href="">新能源</a></span><span><a href="">电力工程</a></span><span><a href="">照明</a></span><span><a href="">分离设备</a></span></div>
			<ul class="list-unstyled list2 mt10">
				<li><a href="">农业食品</a></li>
				<li class="on"><a href="">饮料干燥设备</a></li>
				<li><a href="">太阳能人造纺织材料</a></li>
				<li><a href="">切削设备建材</a></li>
				<li><a href="">陶瓷汽车及其配件渔业</a></li>
			</ul>
		</div>
		<div class="col-xs-8 hot-display">
			<div class="hot-dis-pic">
				<div class="bd">
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
							<p class="mt20">生产线高速运动产品</p>
							<p class="mship">分类：检测设备</p>
							<p class="popularity cr">人气指数：3250<a href="javascript:void(0);" class="j-zan"><span class="praise">赞</span></a></p>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-2 hot-lun">
			<div class="fullSlide2">
				<div class="bd1">
					<ul>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro6.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro6.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
						<li>
							<a href="">{{ HTML::image('modules/shop/images/test/p-pro6.png') }}<span>{{ HTML::image('modules/shop/images/icon/p-jian1.png') }}</span></a>
						</li>
					</ul>
				</div>
				<div class="hd"><ul></ul></div>
			</div>
			<div class="hot-article">
				<ul class="list-inline">
					<li><a href="">工业原料</a></li>
					<li><a href="">食品饮料</a></li>
					<li><a href="">家电家具</a></li>
					<li><a href="">服装鞋帽</a></li>
					<li><a href="">汽车及其配件</a></li>
					<li><a href="">建筑材料</a></li>
					<li><a href="">医疗机械</a></li>
					<li><a href="">电子元件</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!--人气专利结束-->
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40">{{ HTML::image('modules/shop/images/test/gao8.png') }}</div>
	</div>
	<!--广告图1结束-->
</div>
<!--内容块结束-->
@stop
