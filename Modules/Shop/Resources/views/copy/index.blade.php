@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.copy_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.copy_menu')	
@stop

@section('banner')
	<div class="row">
		<div class="col-xs-12 banner-c">
			<div id="slideBox-c" class="slideBox-c">
				<div class="bd">
					<ul class="list-unstyled">
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/cbanner2.png')}}</a></li>
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/cbanner2.png')}}</a></li>
						<li><a href="" target="_blank">{{ HTML::image('modules/shop/images/test/cbanner2.png')}}</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop

@section('content')
	<!--内容块开始-->
	<div class="container m-main1">
		<!--内容1开始-->
		<div class="row">
			<!--右部用户登录开始-->
			<div class="col-xs-2 user2">
				@include('shop::partials.login')
				<div class="row">
					<div class="col-xs-12 mt10">
						<div class="txtMarquee-top-c">
							<div class="list1">
								{{ HTML::image('modules/shop/images/icon/la.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;著作权转让信息
								<p class="hd">
									<a class="next"></a>
									<a class="prev"></a>
								</p>
							</div>
							<div class="bd">
									@datalist('Shop_copy','shop::widget.trade_info_list',[['status','=',1]],0,10,['id','title','category_id','updated_at'],'category',['select'=>['id','name','slug']])
							</div>
						</div>
						<div class="txtMarquee-top-c">
							<div class="list1">
								{{ HTML::image('modules/shop/images/icon/la.png','',['style'=>'vertical-align: -2px']) }}&nbsp;&nbsp;著作权求购信息
								<p class="hd">
									<a class="next"></a>
									<a class="prev"></a>
								</p>
							</div>
							<div class="bd">
								@datalist('Shop_copy','shop::widget.trade_info_list',[['status','=',1]],0,10,['id','title','category_id','updated_at'],'category',['select'=>['id','name','slug']])
							</div>
						</div>
					</div>	
				</div>
			</div>
			<!--右部用户登录结束-->
		</div>
		<!--内容1结束-->
		<div class="row mt30">
			<div class="col-xs-9 copy-left">
				<!--畅品今日抢购开始-->
				<div class="mod1">
					<h4>畅品今日抢购</h4>
					<!--左部-切换开始-->
					<div class="slideTxtBox-c">
						<div class="hd">
							<ul>
							@foreach($shops['flash_sale_up'] as $kfsu => $vfsu)
								<li class="li{{ $kfsu+1 }}">{{ $vfsu['cate_name'] }}</li>
							@endforeach
							</ul>
							<!--<span class="layB more fr"><a href="javascript:void(0)" class="next">换一批 ＞</a></span>-->
						</div>
						<div class="bd">
						@foreach($shops['flash_sale_up'] as $vfsu)
							<ul class="list-inline list-unstyled">
								@foreach($vfsu['data'] as $vfsud)
								<li>
									<a href="{{ route('shop.copy.show',$vfsud['id']) }}">
										<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
										<p class="copypic-list">
											{{ HTML::image($vfsud['images']['path']) }}
										</p>
										<p class="seckill3">{{ HTML::image('modules/shop/images/icon/seckill3.png') }}</p>
										<div class="dk">
											<p class="c1">{{ $vfsud['title'] }}</p>
											<p class="c2">类别：{{ $vfsud['category']['name'] }}</p>	
											<p class="lap4 cr">￥{{ $vfsud['price'] }} <del>￥84999</del></p>
										</div>
									</a>
								</li>
								@endforeach
								<div class="clear"></div>
							</ul>
						@endforeach
						</div>
						<div class="clear"></div>
					</div>
					<!--左部-切换结束-->
				</div>
				<!--畅品今日抢购结束-->
				<!--新品今日闪购开始-->
				<div class="mod2">
					<h4>新品今日闪购<span>&nbsp;</span></h4>
					<!--左部-切换开始-->
					<div class="mod2-l fl">
						<ul class="list-unstyled mod2-tit-list mt10">
						@foreach($shops['flash_sale_down'] as $kfsd => $vfsd)
							<li @if($kfsd == 5)class="on"@endif><a href="{{ route('shop.copy.category',['b'=>$vfsd['id']]) }}">{{ $vfsd['cate_name'] }}</a></li>
						@endforeach
						</ul>
					</div>
					<div class="mod2-r fr">
						<div class="bd">
						@foreach($shops['flash_sale_down'] as $vfsd)
							<ul class="list-inline">
								@foreach($vfsd['data'] as $vfsud)
								<li>
									<a href="{{ route('shop.copy.show',$vfsud['id']) }}" target="_blank">
										<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png')}}</p>
										<p class="m2-r">{{ HTML::image($vfsud['images']['path']) }}</p>
										<p>{{ $vfsud['title'] }}</p>
										<p>类别：{{ $vfsud['category']['name'] }}</p>
										<p class="lap4 cr">￥{{ $vfsud['price'] }}</p>
									</a>
								</li>
								@endforeach
							</ul>
						@endforeach
						</div>
					</div>
					<div class="clear"></div>
					<!--左部-切换结束-->
				</div>
				<!--新品今日闪购结束-->
				<!--广告图1开始-->
				<div class="mt20">{{ HTML::image('modules/shop/images/test/gao10.png') }}</div>
				<!--广告图1结束-->
				<!--人气著作权开始-->
				<div class="mod3 mt20">
					<h4>人气著作权</h4>
					<div class="mod3-con">
						<ul class="list-inline">
						@foreach($shops['popularity_list'] as $vpl)
							<li>
								<a href="{{ route('shop.copy.show',$vpl['id']) }}">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png')}}</p>
									<p class="copypic-list">
										{{ HTML::image($vpl['images']['path']) }}
									</p>
									<p class="hotsell">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
									<div class="dk">
										<p class="c1">{{ $vpl['title'] }}</p>
										<p class="c2">类别：{{ $vpl['category']['name'] }}</p>	
										<p class="lap4 cr"><span class="c2">参考价：</span>￥{{ $vpl['price'] }}</p>
									</div>
								</a>
							</li>
						@endforeach
							<div class="clear"></div>
						</ul>
					</div>
				</div>
				<!--人气著作权结束-->
				<!--一口价著作权开始-->
				<div class="mod3 mt20">
					<h4>一口价著作权</h4>
					<div class="mod3-con">
						<ul class="list-inline">
						@foreach($shops['fixedprice_list'] as $vfl)
							<li>
								<a href="{{ route('shop.copy.show',$vfl['id']) }}">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png')}}</p>
									<p class="copypic-list">
										{{ HTML::image($vfl['images']['path']) }}
									</p>
									<p class="seckill2">{{ HTML::image('modules/shop/images/icon/hotsell.png') }}</p>
									<div class="dk">
										<p class="c1">{{ $vfl['title'] }}</p>
										<p class="c2">类别：{{ $vfl['category']['name'] }}</p>	
										<p class="lap4 cr"><span class="c2">参考价：</span>￥{{ $vfl['price'] }}</p>
									</div>
								</a>
							</li>
						@endforeach
							<div class="clear"></div>
						</ul>
					</div>
				</div>
				<!--一口价著作权结束-->
				<!--广告图1开始-->
				<div class="mt20">{{ HTML::image('modules/shop/images/test/gao10.png') }}</div>
				<!--广告图1结束-->
			</div>
			<div class="col-xs-3 copy-right">
				<div class="entrance">{{ HTML::image('modules/shop/images/icon/link1.png','',['style'=>'vertical-align:-3px;']) }}&nbsp;&nbsp;<a href="javascript:;">品牌设计入口>></a></div>
				<!--右部-点赞排行开始-->
				<div class="copy-r1">
					<h4 class="dianzan">{{ HTML::image('modules/shop/images/icon/crown.png','',['style'=>'vertical-align:-3px;']) }}&nbsp;&nbsp;点赞排行</h4>
					<ul class="copyright-list">
						<li><a href="">作品名称</a><span class="fr">点击率</span></li>
						@datalist('Shop_copy','shop::widget.praise_list',[['status','=',1]],0,10,['id','title','praise_num'],'category',['select'=>['id','name','slug']])
					</ul>
				</div>
				<!--右部-点赞排行结束-->
				<!--右部-最新上线开始-->
				<div class="copy-r2 mt20">
					<h4 class="dianzan">{{ HTML::image('modules/shop/images/icon/link2.png','',['style'=>'vertical-align:-3px;']) }}&nbsp;&nbsp;最新上线</h4>
					<div class="latest-online">
					@foreach($shops['new_list'] as $vnl)
						<a href="{{ route('shop.copy.show',$vnl['id']) }}">
							<div class="on-l fl">
								<p>{{ HTML::image($vnl['images']['path']) }}</p>
								<p>{{ $vnl['category']['name'] }}</p>
							</div>
							<div class="on-r fr">
								<p><strong>{{ $vnl['title'] }}</strong></p>
								<p>仙人掌性格：强壮，力大无穷，贪吃...</p>
								<p>{{ date("Y-m-h",strtotime($vnl['updated_at'])) }}</p>
							</div>
							<div class="clear"></div>
						</a>
					@endforeach
					</div>
				</div>
				<!--右部-最新上线结束-->
				<!--右部-商品推荐开始-->
				<div class="copy-r3 mt20">
					<h4 class="dianzan">{{ HTML::image('modules/shop/images/icon/link4.png','',['style'=>'vertical-align:-3px;']) }}&nbsp;&nbsp;商品推荐</h4>
					<div class="latest-online">
					@foreach($shops['recomment_list'] as $krl=>$vrl)
						<h3 @if($krl == 0)class="on"@endif><a href="">{{ $vrl['title'] }}</a></h3>
						<a href="{{ route('shop.copy.show',$vrl['id']) }}" class="ladown">
							<div class="on-l fl">
								<p>{{ HTML::image($vrl['images']['path']) }}</p>
								<p>{{ $vrl['category']['name'] }}</p>
							</div>
							<div class="on-r fr">
								<p><strong>{{ $vrl['title'] }}</strong></p>
								<p>仙人掌性格：强壮，力大无穷，贪吃...</p>
								<p>{{ date("Y-m-h",strtotime($vrl['updated_at'])) }}</p>
							</div>
							<div class="clear"></div>
						</a>
					@endforeach
					</div>
				</div>
				<!--右部-商品推荐结束-->
				<!--右部-交易常识开始-->
				<div class="copy-r4 mt20">
					<h4 class="dianzan">{{ HTML::image('modules/shop/images/icon/link5.png','',['style'=>'vertical-align:-3px;']) }}&nbsp;&nbsp;交易常识</h4>
					<ul class="copyright-list1">
						<li><a href="">1.市场用户须看：著作权转让注意事项</a></li>
						<li><a href="">2.山村里的民舍山村里的民舍山村里的民舍山村里的民舍</a></li>
						<li><a href="">3.市场用户须看：著作权转让注意事项</a></li>
						<li><a href="">4.市场用户须看：著作权转让注意事项</a></li>
						<li><a href="">5.市场用户须看：著作权转让注意事项</a></li>
					</ul>
				</div>
				<!--右部-交易常识结束-->
			</div>
		</div>
	</div>
	<!--内容块结束-->
@stop