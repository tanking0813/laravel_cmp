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
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner1.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')	
	<div class="container m-main">
		<div class="row ex-main mt20">
			<!--左部开始-->
			<div class="col-xs-2 ex-m-left">
				<!--左部-按分类手风琴开始 class="on"-->
				<div class="ex-ml1">
					<div class="anfen">按分类</div>
					<div class="sideMenu">
					@foreach($shops['recomment_category'] as $vr)
						<h3>{{ $vr['name'] }}商标</h3>
						<ul class="pull">
					    @foreach($vr['child'] as $krc=>$vrc)
					    	@foreach($vrc['child'] as $krcc=>$vrcc)
							<li><a href="{{ route($shops['url'],['b'=>$vr['id'].'c'.$vrcc['name']]) }}">{{ $vrcc['name'] }}</a></li>
							@endforeach
						@endforeach
						</ul>
					@endforeach
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
				<h2>进店必选商标</h2>
				<!--右部-进店必选开始-->
				<div class=" ex-mr1">
					<ul class="list-inline flo1">
						@foreach($shops['hot_lists'] as $khl=>$vhl)
						<li @if($khl==2)style="background:none;"@endif>
							<a href="{{ route('shop.logo.show',$vhl['id']) }}">
								<p>{{ HTML::image($vhl['images']['path'],'',['class'=>'fixed-flo1']) }}</p>
								<p>{{ HTML::image('modules/shop/images/icon/line-r.png')}}</p>
								<p class="lap1 cr">{{ $vhl['category']['name'] }}类商标</p>
								<p>{{ HTML::image('modules/shop/images/icon/line-r.png')}}</p>
								<div class="dk">
									<!-- <p class="lap2 cr">热销理由</p> -->
									<p class="lap3">{{ $vhl['title'] }}</p>
									<del>￥84999</del>
									<p class="lap4 cr">￥{{ $vhl['price'] }}</p>
									<p class="lap5">立即购买</p>
								</div>
							</a>
						</li>
						@endforeach
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
							<p class="qiang">{{ HTML::image('modules/shop/images/icon/rob.png')}}</p>
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
@stop