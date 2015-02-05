@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.logo_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.logo_menu')
@stop

@section('content')
	<!--内容1开始-->
	<div class="row">
		<!--左部14大类分类开始-->
		<div class="col-xs-2">
			<ul id="nav" class="list-unstyled m-tm-list ">
				@foreach($shops['recomment_category'] as $kr=>$vr)
				<li id="mainCate-1" class="mainCate">
					<a href="{{ route('shop.logo.category',['b'=>$vr['id']]) }}"><span class="m-tm-icon-list">{{ HTML::image('modules/shop/images/icon/'.($kr+4).'.png') }}</span>{{ $vr['name'] }}商标({{ $vr['slug'] }}类)</a>
					<div class="subCate">
					 	<h1>{{ $vr['name'] }}</h1>
					 	@foreach($vr['child'] as $krc=>$vrc)
						<div id="sub-ul-1" class="kuai">
							<h4>{{ $vrc['name'] }}  
								@if($vrc['thumb'])
								{{ HTML::image($vrc['thumb'],'',['style'=>'vertical-align: -5px;']) }}
								@endif
							</h4>
							<p>
								@foreach($vrc['child'] as $krcc=>$vrcc)
								<a href="{{ route('shop.logo.category',['b'=>$vr['id'].'c'.$vrcc['name']]) }}">{{ $vrcc['name'] }}</a>
								@endforeach
								<div class="clear"></div>
							</p>
						</div>
						@endforeach
	 				</div>
				</li>
				@endforeach
				
			</ul>	
		</div>
		<!--左部14大类分类结束-->
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
								<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/banner.png')}}</a></li>
								<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/banner1.jpg')}}</a></li>
								<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/banner2.jpg')}}</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt5">
				<div class="col-xs-12 mt20">
					<div class="scrollBox">
						<div class="ohbox">
							<ul class="list-inline mar_list">
								@datalist('Shop_logo','shop::widget.data_list',[['recomment','=',1]],0,10,['id','title','thumb'],'images',['select'=>['id','path']])
							</ul>
						</div>
						<div class="pageBtn">
							<span class="prev">&lt;</span>
							<span class="next">&gt;</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row gao1">
				<div class="col-xs-12 mt20"><a href="">{{ HTML::image('modules/shop/images/test/gao1.png')}}</a></div>
			</div>
		</div>
		<!--banner,产品轮播结束-->
		<!--右部用户登录开始-->
		<div class="col-xs-2 user mt20">

			@include('shop::partials.login')

			<div class="row">
				<div class="col-xs-12 mt10">
					<div class="txtMarquee-top">
						<div class="list1">
							{{ HTML::image('modules/shop/images/icon/la.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;商标转让信息
							<p class="hd">
								<a class="next"></a>
								<a class="prev"></a>
							</p>
						</div>
						<div class="bd">
							@datalist('Shop_logo','shop::widget.trade_info_list',[['recomment','=',1]],0,10,['id','title','category_id','updated_at'],'category',['select'=>['id','slug']])
						</div>
					</div>
					<div class="txtMarquee-top1">
						<div class="list1">
							{{ HTML::image('modules/shop/images/icon/la.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;商标求购信息
							<p class="hd">
								<a class="prev"></a>
								<a class="next"></a>
							</p>
						</div>
						<div class="bd">
							@datalist('Shop_logo','shop::widget.trade_info_list',[['recomment','=',1]],0,10,['id','title','category_id','updated_at'],'category',['select'=>['id','slug']])
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!--右部用户登录结束-->
	</div>
	<!--内容1结束-->
	<!--推荐导航开始-->
	<div class="row g-hot">
		<ul class="list-inline">
			<li class="li1">{{ HTML::image('modules/shop/images/icon/hot_ic.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;<span class="hot_tit">热门推荐</span></li>
			<li>{{ HTML::image('modules/shop/images/icon/jing_ic.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;<span class="hot_tit">精品商标</span><a href=""><span class="more mr fr">更多</span></a></li>
			<li>{{ HTML::image('modules/shop/images/icon/jing_ic.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;<span class="hot_tit">一口价商标</span><a href=""><span class="more mr fr">更多</span></a></li>
		</ul>
	</div>
	<!--推荐导航结束-->
	<!--推荐内容开始-->
	<div class="row hot-list">
		<!--热门推荐开始-->
		<div class="col-xs-2 d1">
			<div class="fullSlide">
				<div class="bd1">
					<ul>
					@foreach($shops['hot_list'] as $vh)
						<li>
							<a href="{{ route('shop.logo.show',$vh['id']) }}">
								{{ HTML::image($vh['images']['path'],'',['style'=>'width:136px;height:136px;'])}}
								<p>{{ $vh['title'] }}</p>
								<p class="price cr">￥{{ $vh['price'] }}</p>
							</a>
						</li>
					@endforeach
					</ul>
				</div>
				<div class="hd"><ul></ul></div>
			</div>
		</div>
		<!--热门推荐结束-->
		<!--精品商标开始-->
		<div class="col-xs-5 d2">
			<div class="row">
				<div class="col-xs-6 kuai">
					<a href="{{ route('shop.logo.show',$shops['boutique_list'][0]['id']) }}">
						<p class="pic fl">{{ HTML::image($shops['boutique_list'][0]['images']['path'],'',['style'=>'width:100px;height:100px;'])}}</p>
						<p class="pic-name fr">
							<span>{{ $shops['boutique_list'][0]['title'] }}</span><br>
							<span class="price cr">￥{{ $shops['boutique_list'][0]['price'] }}</span><br>
							<!-- <del>￥728.00</del> -->
						</p>
					</a>
				</div>
				<div class="col-xs-6 kuai">
					<a href="{{ route('shop.logo.show',$shops['boutique_list'][1]['id']) }}">
						<p class="pic fl">{{ HTML::image($shops['boutique_list'][1]['images']['path'],'',['style'=>'width:100px;height:100px;'])}}</p>
						<p class="pic-name fr">
							<span>{{ $shops['boutique_list'][1]['title'] }}</span><br>
							<span class="price cr">￥{{ $shops['boutique_list'][1]['price'] }}</span><br>
							<!-- <del>￥728.00</del> -->
						</p>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 kuai" style="border-bottom:1px solid #ddd;">
					<a href="{{ route('shop.logo.show',$shops['boutique_list'][2]['id']) }}">
						<p class="pic fl">{{ HTML::image($shops['boutique_list'][2]['images']['path'],'',['style'=>'width:100px;height:100px;'])}}</p>
						<p class="pic-name fr">
							<span>{{ $shops['boutique_list'][2]['title'] }}</span><br>
							<span class="price cr">￥{{ $shops['boutique_list'][2]['price'] }}</span><br>
							<!-- <del>￥728.00</del> -->
						</p>
					</a>
				</div>
				<div class="col-xs-6 kuai" style="border-bottom:1px solid #ddd;">
					<a href="{{ route('shop.logo.show',$shops['boutique_list'][3]['id']) }}">
						<p class="pic fl">{{ HTML::image($shops['boutique_list'][3]['images']['path'],'',['style'=>'width:100px;height:100px;'])}}</p>
						<p class="pic-name fr">
							<span>{{ $shops['boutique_list'][3]['title'] }}</span><br>
							<span class="price cr">￥{{ $shops['boutique_list'][3]['price'] }}</span><br>
							<!-- <del>￥728.00</del> -->
						</p>
					</a>
				</div>
			</div>
		</div>
		<!--精品商标结束-->
		<!--一口价商标开始-->
		<div class="col-xs-5 d3">
			<div class="row">
				<div class="col-xs-6 d3-hot">
					<a href="{{ route('shop.logo.show',$shops['fixedprice_list'][0]['id']) }}">
						<p>{{ HTML::image($shops['fixedprice_list'][0]['images']['path'],'',['style'=>'width:160px;height:143px;'])}}</p>
						<p class="">
							<span>{{ $shops['fixedprice_list'][0]['title'] }}</span>
							<span class="price cr">￥{{ $shops['fixedprice_list'][0]['price'] }}</span><br>
							<span class="satisfaction">商品满意度：<font color="#c40300" size="3" face="微软雅黑">9.9</font></span>
							<!-- <del>￥728.00</del> --><br>
							<span class="heat">{{ HTML::image('modules/shop/images/icon/hot_ic_li.png','',['style'=>'vertical-align: -1px']) }}&nbsp;&nbsp;最热</span>
						</p>
					</a>
				</div>
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-12 kuai1">
							<a href="{{ route('shop.logo.show',$shops['fixedprice_list'][1]['id']) }}">
								<p class="pic fl">{{ HTML::image($shops['fixedprice_list'][1]['images']['path'],'',['style'=>'width:100px;height:100px;'])}}</p>
								<p class="pic-name fr">
									<span>{{ $shops['fixedprice_list'][1]['title'] }}</span><br>
									<span class="price cr">￥{{ $shops['fixedprice_list'][1]['price'] }}</span><br>
									<!-- <del>￥728.00</del> --><br>
									<span class="satisfaction1">商品满意度：<font color="#c40300" size="3" face="微软雅黑">8.9</font></span>
								</p>
							</a>
						</div>
						
					</div>
					<div class="row">
						<div class="col-xs-12 kuai1" style="border-bottom:none;">
							<a href="{{ route('shop.logo.show',$shops['fixedprice_list'][2]['id']) }}">
								<p class="pic fl">{{ HTML::image($shops['fixedprice_list'][2]['images']['path'],'',['style'=>'width:100px;height:100px;'])}}</p>
								<p class="pic-name fr">
									<span>{{ $shops['fixedprice_list'][1]['title'] }}</span><br>
									<span class="price cr">￥{{ $shops['fixedprice_list'][1]['price'] }}</span><br>
									<!-- <del>￥728.00</del> --><br>
									<span class="satisfaction1">商品满意度：<font color="#c40300" size="3" face="微软雅黑">8.9</font></span>
								</p>
							</a>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<!--一口价商标结束-->
	</div>
	<!--推荐内容结束-->
	<!--一楼开始-->
			<div id="floor1" class="row g-dress current">
				<ul class="list-inline">
					<li><a href="">服装鞋帽(25类)</a></li>
					<li class="li1"><a href="">酒精饮料(25类)</a></li>
				</ul>
			</div>
			<div class="row detail">
				<div class="col-xs-2">
					<div class="row detail1">
						<div class="col-xs-12 title">今日推荐</div>
					</div>
					<div class="row detail2">
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/18') }}</p>
								<p class="icon_pic-tit">服饰</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/19') }}</p>
								<p class="icon_pic-tit">鞋包</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list" style="border-right:1px solid #ddd;">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/20') }}</p>
								<p class="icon_pic-tit">运动</p>	
							</a>
						</div>
					</div>
					<div class="row detail2">
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/21') }}</p>
								<p class="icon_pic-tit">亲子</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/22') }}</p>
								<p class="icon_pic-tit">轻奢</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list" style="border-right:1px solid #ddd;">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/23') }}</p>
								<p class="icon_pic-tit">美妆</p>	
							</a>
						</div>
						<div class="row">
							<div class="col-xs-12 icon_show"><a href=""><img src="../images/shop/test/pro5.png"><span class="tesold">今日特卖</span></a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-4 mark1">
					<div class="row">
						<div class="col-xs-12 alc-mark">含酒精的商标</div>
					</div>
					<div class="row">
						<div class="col-xs-12 alc-mark-x">内衣年终清仓全场包邮，最高9折</div>
					</div>
					<div class="row">
						<div class="col-xs-5 mark-list">
							<ul class="list-inline mt20">
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">潮流棉袜</a></li>
								<li><a href="">潮流棉袜</a></li>
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
							</ul>
							<ul class="list-inline mt20">
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">潮流棉袜</a></li>
								<li><a href="">潮流棉袜</a></li>
							</ul>
							<ul class="list-inline mt20">
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
							</ul>
						</div>
						<div class="col-xs-7 mark-list1">
							<div class="row">
								<div class="col-xs-12 snBrand">
									<ol class="list-inline mt10">
										<li class="on"><a href="">服装内衣</a></li>
										<li><a href="">鞋包配饰</a></li>
										<li><a href="">运动户外</a></li>
										<li><a href="">母婴童装</a></li>
										<li><a href="">日化用品</a></li>
										<li class="bb"><a href="">日化用品</a></li>
									</ol>
									<ul class="list-inline mt20">
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar13.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar13.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-2">
					<div class="row detail1">
						<div class="col-xs-12 title">今日推荐</div>
					</div>
					<div class="row detail2">
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/18') }}</p>
								<p class="icon_pic-tit">服饰</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/19') }}</p>
								<p class="icon_pic-tit">鞋包</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list" style="border-right:1px solid #ddd;">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/20') }}</p>
								<p class="icon_pic-tit">运动</p>	
							</a>
						</div>
					</div>
					<div class="row detail2">
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/21') }}</p>
								<p class="icon_pic-tit">亲子</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/22') }}</p>
								<p class="icon_pic-tit">轻奢</p>	
							</a>
						</div>
						<div class="col-xs-4 icon_list" style="border-right:1px solid #ddd;">
							<a href="">
								<p class="icon_pic">{{ HTML::image('modules/shop/images/icon/23') }}</p>
								<p class="icon_pic-tit">美妆</p>	
							</a>
						</div>
						<div class="row">
							<div class="col-xs-12 icon_show"><a href=""><img src="../images/shop/test/pro8.png"><span class="tesold">今日特卖</span></a></div>
						</div>
					</div>
				</div>
				<div class="col-xs-4 mark1">
					<div class="row">
						<div class="col-xs-12 alc-mark">含酒精的商标</div>
					</div>
					<div class="row">
						<div class="col-xs-12 alc-mark-x">内衣年终清仓全场包邮，最高9折</div>
					</div>
					<div class="row">
						<div class="col-xs-5 mark-list">
							<ul class="list-inline mt20">
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">潮流棉袜</a></li>
								<li><a href="">潮流棉袜</a></li>
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
							</ul>
							<ul class="list-inline mt20">
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">纯棉T恤</a></li>
								<li><a href="">潮流棉袜</a></li>
								<li><a href="">潮流棉袜</a></li>
							</ul>
							<ul class="list-inline mt20">
								<li><a href="">毛呢大衣</a></li>
								<li><a href="">毛呢大衣</a></li>
							</ul>
						</div>
						<div class="col-xs-7 mark-list1">
							<div class="row">
								<div class="col-xs-12 snBrand">
									<ol class="list-inline mt10">
										<li class="on"><a href="">服装内衣</a></li>
										<li><a href="">鞋包配饰</a></li>
										<li><a href="">运动户外</a></li>
										<li><a href="">母婴童装</a></li>
										<li><a href="">日化用品</a></li>
										<li class="bb"><a href="">日化用品</a></li>
									</ol>
									<ul class="list-inline mt20">
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar13.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar10.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar13.png"></p>
											</a>
										</li>
										<li>
											<a href="">
												<p><img src="../images/shop/test/mar13.png"></p>
												<p><img src="../images/shop/test/mar11.png"></p>
												<p><img src="../images/shop/test/mar12.png"></p>
												<p><img src="../images/shop/test/mar10.png"></p>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--一楼结束-->
@stop