@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.patent_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.patent_menu')	
@stop

@section('banner')
	<!--banner开始-->
	<div class="row banner">
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/pbanner3.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')
<!--内容块开始-->
<div class="container m-main">
	<div class="row ex-main mt20">
		<!--左部开始-->
		<div class="col-xs-2 ex-m-left">
			<!--左部-按分类手风琴开始-->
			<div class="ex-ml3">
				<div class="foreign-l-tit1">分类筛选</div>
				<div class="r1">{{ HTML::image('modules/shop/images/icon/sorting.png') }}</div>
				<div class="p-foreign-list1"><span><a href="">食品饮料</a></span><span><a href="">干燥设备</a></span><span><a href="">风能</a></span><span><a href="">家电家具</a></span><span><a href="">检测设备</a></span><span><a href="">医疗机械</a></span><span><a href="">工业</a></span><span><a href="">渔业</a></span><span><a href="">运动鞋</a></span><span><a href="">电子元件</a></span><span><a href="">陶瓷</a></span><span><a href="">农业</a></span><span><a href="">西药</a></span><span><a href="">汽车配件</a></span><span><a href="">模具</a></span><span><a href="">电力工程</a></span><span><a href="">新能源</a></span><span><a href="">添加剂</a></span><span><a href="">西药</a></span><span><a href="">汽车</a></span><span><a href="">模糊加工</a></span><span><a href="">纺织</a></span><span><a href="">装饰</a></span><span><a href="">服装鞋帽</a></span></div>
			</div>
			<!--左部-按分类手风琴结束-->
			<!--左部-成功案例展示无缝滚动开始-->
			<div class="ex-ml2 mt10">
				<h4>成功案例展示</h4>
				<div class="bd">
					<ul class="list-unstyled ex-ml-list">
						<li>
							<a href="">
								<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/suc1.png') }}</div>
								<div class="ex-text fr">第25类服装鞋帽商标<p>￥999<del>已售</del></p></div>
								<div class="clear"></div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/suc2.png') }}</div>
								<div class="ex-text fr">第25类服装鞋帽商标<p>￥999<del>已售</del></p></div>
								<div class="clear"></div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/suc3.png') }}</div>
								<div class="ex-text fr">第25类服装鞋帽商标<p>￥999<del>已售</del></p></div>
								<div class="clear"></div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/suc1.png') }}</div>
								<div class="ex-text fr">第25类服装鞋帽商标<p>￥999<del>已售</del></p></div>
								<div class="clear"></div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/suc2.png') }}</div>
								<div class="ex-text fr">第25类服装鞋帽商标<p>￥999<del>已售</del></p></div>
								<div class="clear"></div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="ex-pic fl">{{ HTML::image('modules/shop/images/test/suc3.png') }}</div>
								<div class="ex-text fr">第25类服装鞋帽商标<p>￥999<del>已售</del></p></div>
								<div class="clear"></div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--左部-成功案例展示无缝滚动结束-->
		</div>
		<!--左部结束-->
		<!--右部开始-->
		<div class="col-xs-10 ex-m-right">
			<!--右部-筛选开始-->
			<div class=" ex-mr4">
				<ul class="list-inline">
					<li class="t-h">交易类型：</li>
					<li><a href="">转让</a></li>
					<li><a href="">普通许可</a></li>
					<li><a href="">独占许可</a></li>
					<li><a href="">排他许可</a></li>
					<li class="default"><a href="">不限</a></li>
				</ul>
				<ul class="list-inline">
					<li class="t-h">专利类别：</li>
					<li><a href="">发明专利</a></li>
					<li><a href="">实用新型</a></li>
					<li><a href="">外观专利</a></li>
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
			<!--右部-筛选结束-->
			<!--右部-技术推荐菜单切换开始-->
			<div class="slideTxtBox3 mt20">
				<div class="hd">
					<ul>
						<li>每周技术项目推荐</li>
						<li>每周特价专利</li>
						<li>专利精选</li>
					</ul>
					<!--<span class="layB more fr"><a href="javascript:void(0)" class="next">换一批 ＞</a></span>-->
				</div>
				<div class="bd">
					<ul class="list-inline list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-inline list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
						</li>
						<div class="clear"></div>
					</ul>
					<ul class="list-inline list-unstyled">
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic21.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic22.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic23.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic24.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic25.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic26.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic19.png') }}</p>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<p class="pb-pic">{{ HTML::image('modules/shop/images/test/p-pic20.png') }}</p>
							</a>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<!--右部-技术推荐菜单切换结束-->
			
			<!--右部-排序导航开始-->
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
			<!--右部-排序导航结束-->
			<!--右部-商标展示开始-->
			<div class=" ex-mr3">
				<ul class="list-inline flo3">
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro15.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro1.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro2.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro3.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro4.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro5.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro6.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro7.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro8.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro9.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro10.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro11.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro12.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro13.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro14.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
					<li>
						<a href="">
							<p class="go-shop">
								
								{{ HTML::image('modules/shop/images/test/pat-pro15.png') }}
							</p>
						</a>
						<div class="dk">
							<p class="lap1">高氧高效鱼池</p>	
							<p class="lap4 cr"><span class="re-price">参考价：</span>￥14999 </p>
							<p class="lap5 like-wrap"><a href="javascript:void(0);" class="j-like"><span class="sp1">喜欢</span></a><span class="sp2 cr ml20">29999</span><span class="sp3 fr"><a href="">评价(1764)</a></span></p>
							<p class="lap6"><span class="sp4"><a href="" class="cr">专利议价</a></span><span class="sp5"><a href="javascript:void(0);" class="j-store">收藏</a></span></p>
						</div>
					</li>
				</ul>
			</div>
			<!--右部-商标展示结束-->
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
		<!--右部结束-->
	</div>
	<!--广告图1开始-->
	<div class="row">
		<div class="col-xs-12 mt40">
			{{ HTML::image('modules/shop/images/test/gao8.png') }}
		</div>
	</div>
	<!--广告图1结束-->
</div>
<!--内容块结束-->
<!--底部开始-->
@stop