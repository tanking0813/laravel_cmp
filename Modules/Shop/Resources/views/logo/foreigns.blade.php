@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.logo_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.logo_menu')
@stop

@section('banner')
	<!--banner开始-->
	<div class="row banner">
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner4.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')
	<!--内容块开始-->
	<div class="container m-main">
		<div class="row ex-main mt20">
			<!--左部开始-->
			<div class="col-xs-2 ex-m-left">
				<div class="r">{{ HTML::image('modules/shop/images/icon/r.png')}}</div>
				<!--左部-按分类手风琴开始-->
				<div class="ex-ml3">
					<div class="foreign-l-tit">涉外商标</div>
					<div class="sideMenu">
						<h3 class="h31">热门分类</h3>
						<ul class="list-inline pull1">
							@foreach($shops['recomment_category'] as $vr)
							    @foreach($vr['child'] as $krc=>$vrc)
							    	@foreach($vrc['child'] as $krcc=>$vrcc)
									<li><a href="{{ route($shops['url'],['b'=>$vr['id'].'c'.$vrcc['name']]) }}">{{ $vrcc['name'] }}</a></li>
									@endforeach
								@endforeach
							@endforeach
						</ul>
					</div><!-- sideMenu End -->
				</div>
				<!--左部-按分类手风琴结束-->
				<!--左部-成功案例展示无缝滚动开始-->
				<div class="ex-ml2 mt10">
					<h4>成功案例展示</h4>
					<div class="bd">
						@datalist('Shop_logo','shop::widget.trade_case_list',[],'6')
					</div>
				</div>
				<!--左部-成功案例展示无缝滚动结束-->
			</div>
			<!--左部结束-->
			<!--右部开始-->
			<div class="col-xs-10 ex-m-right">
				<!--右部-进店必选开始-->
				<div class="ex-mr4">
					<h3>商品筛选</h3>
					<ul class="list-inline">
						<li class="t-h">商标类别：</li>
						@foreach($shops['recomment_category'] as $krc=>$vrc)
							<li @if($vrc['id'] == $shops['category_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$vrc['id'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">第{{ $vrc['slug'] }}类-{{ $vrc['name'] }}</a></li>
						@endforeach
						<li @if($shops['category_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>0,'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">不限</a></li>
					</ul>
					<ul class="list-inline">
						<li class="t-h">组合类型：</li>
						@foreach($shops['combine'] as $kc=>$vc)
							<li @if($kc == $shops['combine_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$kc,'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">{{ $vc }}</a></li>
						@endforeach
						<li @if($shops['combine_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>0,'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">不限</a></li>
					</ul>
					<ul class="list-inline">
						<li class="t-h">交易类型：</li>
					@foreach($shops['trade'] as $kt=>$vt)
						<li @if($kt == $shops['trade_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$kt,'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">{{ $vt }}</a></li>
					@endforeach
						<li @if($shops['trade_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>0,'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">不限</a></li>
					</ul>
					<ul class="list-inline">
						<li class="t-h"><a href="">价格：</a></li>
					@foreach($shops['price'] as $kp=>$vp)
						<li @if($kp == $shops['price_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$kp,'e'=>$shops['sorts_url']]) }}">{{ $vp['name'] }}</a></li>
					@endforeach
					<li @if($shops['price_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>0,'e'=>$shops['sorts_url']]) }}">不限</a></li>
					</ul>
				</div>
				<!--右部-进店必选结束-->
				<!--右部-排序导航开始-->
				@include('shop::partials.sorts_publish')
				<!--右部-排序导航结束-->
				<!--右部-商标展示开始-->
				<div class=" ex-mr3">
					@if($shops['lists']['data'])
					<ul class="list-inline flo3">
						@foreach($shops['lists']['data'] as $v)
						@if($v['num'])
						<li>
							<a href="{{ route('shop.logo.show',$v['id']) }}">
								<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png')}}</p>
								<p class="go-shop">
									{{ HTML::image($v['images']['path']) }}
								</p>
							</a>
							<div class="dk">
								<p class="lap1">第{{ $v['category']['slug'] }}类 {{ $v['title'] }}</p>	
								<p class="lap4 cr">￥{{ $v['price'] }} <del>￥84999</del></p>
								@include('shop::partials._like')
							</div>
						</li>
						@else
						<li>
							<a href="{{ route('shop.logo.show',$v['id']) }}">
								<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png')}}</p>
								<p class="go-shop">
									{{ HTML::image($v['images']['path']) }}
								</p>
							</a>
							<div class="dk">
								<p class="lap1">第{{ $v['category']['slug'] }}类 {{ $v['title'] }}</p>	
								<p class="lap4 cr">￥{{ $v['price'] }} <del>￥84999</del></p>
								<p class="lap7">此商标已售出</p>
							</div>
						</li>
						@endif
						@endforeach
					</ul>
					@else
					<div>暂无商品</div>
					@endif
				</div>
				<!--右部-商标展示结束-->
				<!--page分页开始-->
				@include('shop::partials._page')
				<!--page分页结束-->
			</div>
			<!--右部结束-->
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png')}}</div>
		</div>
		<!--广告图1结束-->
	</div>
	<!--内容块结束-->
@stop