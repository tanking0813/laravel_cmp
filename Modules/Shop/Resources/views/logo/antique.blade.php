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
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner7.png') }}</div>
	</div>
	<!--banner结束-->
@stop


@section('content')
	<div class="container m-main">
		<div class="row ex-main mt20">
			<!--左部开始-->
			<div class="col-xs-11 ex-m-left2">
				<h2>古董商标推荐</h2>
				<!--古董商标推荐无缝轮播开始-->
				<div class="ex-m1 mt20">
					<div class="onbox">
						<ul class="list-inline le-loop">
						@foreach($shops['hot_lists'] as $vhl)
							<li>
								<a href="{{ route('shop.logo.show',$vhl['id']) }}">
									<p class="hot-hr">{{ HTML::image($vhl['images']['path']) }}</p>
									<p class="le-p1">{{ $vhl['title'] }}(第{{ $vhl['category']['slug'] }}类)<span class="spot">现货抢购</span></p>
									<p class="le-p2">服装列表：{{ $vhl['server_list'] }}</p>
								</a>
							</li>
						@endforeach
						</ul>
					</div>
					<div class="pageBtn">
						<span class="prev">&lt;</span>
						<span class="next">&gt;</span>
					</div>
				</div>
				<!--古董商标推荐无缝轮播结束-->
				<!--成功案例展示无缝轮播开始-->
				@if($shops['trade_lists'])
				<h2>成功案例展示</h2>
				<div class="ex-m1 mt20">
					<div class="onbox">
						<ul class="list-inline flo5">
						@foreach($shops['trade_lists'] as $vtl)
							<li>
								<p class="golook1">{{ HTML::image('modules/shop/images/icon/solded.png') }}</p>
								<p class="go-shop">
									<a href="{{ route('shop.logo.show',$vtl['id']) }}">
										{{ HTML::image($vtl['images']['path']) }}
									</a>
								</p>
								<div class="dk">
									<p class="lap1">{{ $vtl['title'] }}(第{{ $vtl['category']['slug'] }}类)</p>
									<p class="tra-price cr">成交价格：</p>
									<p class="lap4 cr">￥{{ $vtl['price'] }} <del>￥84999</del></p>
									<p class="lap7">成交时间：8月12日 10:35分</p>
								</div>
							</li>
						@endforeach
						</ul>
					</div>
					<div class="pageBtn">
						<span class="prev">&lt;</span>
						<span class="next">&gt;</span>
					</div>
				</div>
				@endif
				<!--成功案例展示结束-->
				<!--排序导航开始-->
				@include('shop::partials.sorts_publish')
				<!--排序导航结束-->
				<!--商标展示开始-->
				<div class=" ex-m4">
				@if($shops['lists']['data'])
					<div class="grade">
						<p class="fl">{{ HTML::image('modules/shop/images/icon/grade.png') }}</p>
						<ul class="list-inline flo3 fl">
					@foreach($shops['lists']['data'] as $k=>$v)
					@if($k!=0 && ($k+1)%4 == 1)
						</ul>
						<p class="fr">{{ HTML::image('modules/shop/images/icon/grade.png') }}</p>
						<div class="clear"></div>
					</div>
					<div class="grade mt30">
						<p class="fl">{{ HTML::image('modules/shop/images/icon/grade.png') }}</p>
						<ul class="list-inline flo3 fl">
					@endif
						@if($v['num'])
							<li>
								<a href="{{ route('shop.logo.show',$v['id']) }}">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image($v['images']['path']) }}
									</p>
								</a>
								<p class="qiang1">今日新品</p>
								<div class="dk">
									<p class="lap1">{{ $v['title'] }}(第{{ $v['category']['slug'] }}类)</p>	
									<p class="lap4 cr">￥{{ $v['price'] }} <del>￥84999</del></p>
									@include('shop::partials._like')
								</div>
							</li>
						@else
							<li>
								<a href="{{ route('shop.logo.show',$v['id']) }}">
									<p class="golook1">{{ HTML::image('modules/shop/images/icon/rob1.png') }}</p>
									<p class="go-shop">
										{{ HTML::image($v['images']['path']) }}
									</p>
								</a>
								<p class="qiang1">今日新品</p>
								<div class="dk">
									<p class="lap1">{{ $v['title'] }}(第{{ $v['category']['slug'] }}类)</p>	
									<p class="lap4 cr">￥{{ $v['price'] }} <del>￥84999</del></p>
									<p class="lap7">此商标已售出</p>
								</div>
							</li>
						@endif
					@endforeach	
						</ul>
						<p class="fr">{{ HTML::image('modules/shop/images/icon/grade.png') }}</p>
						<div class="clear"></div>
					</div>
				@else
					<div>暂无商品</div>
				@endif
				</div>
				<!--商标展示结束-->
				<!--page分页开始-->
				@include('shop::partials._page')
				<!--page分页结束-->
			</div>
			<!--左部结束-->
			<!--右部开始-->
			<div class="col-xs-1 ex-m-right2">
				<!--右部-按分类手风琴开始-->
				<div class="ex-mi">
					<div class="anfen">全部</div>
					<div class="sideMenu1">
					@foreach($shops['recomment_category'] as $vr)
						<h3 class="h32">{{$vr['name']}}商标</h3>
					    @foreach($vr['child'] as $krc=>$vrc)
					    <ul class="pull2">
							@foreach($vrc['child'] as $krcc=>$vrcc)
							<li><a href="{{ route($shops['url'],['b'=>$vr['id'].'c'.$vrcc['name']]) }}">{{ $vrcc['name'] }}</a></li>
							@endforeach
						</ul>	
						@endforeach
					@endforeach
					</div><!-- sideMenu End -->
					<div class="return">
						<p class="re"><a href="">更多分类</a></p>
						<p class="home"><a href="{{ route('shop.logo.index') }}">商标首页</a></p>
					</div>
				</div>
				<!--右部-按分类手风琴结束-->
			</div>
			<!--右部结束-->
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png') }}</div>
		</div>
		<!--广告图1结束-->
	</div>
@stop