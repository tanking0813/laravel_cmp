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
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner5.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')
	<div class="container m-main">
		<div class="row ex-main mt20">
			<div class="col-xs-12 ex-m-right1">
				<!--商品筛选开始-->
				<div class="ex-mr5">
					<h3>{{ HTML::image('modules/shop/images/icon/fine-icon.png','',['style'=>'vertical-align:-5px']) }}<span class="line2">|</span>商品筛选</h3>
					<div class="row c-type">
						<div class="col-xs-2  type">
							<ul class="list-inline">
								<li class="t-h1">组合类型：</li><br>
								@foreach($shops['combine'] as $kc=>$vc)
									<li @if($kc == $shops['combine_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$kc,'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">{{ $vc }}</a></li>
								@endforeach
								<li @if($shops['combine_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>0,'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">不限</a></li>
							</ul>
						</div>
						<div class="col-xs-7 type">
							<ul class="list-inline">
								<li class="t-h1">商标类别：</li>
								@if($shops['category_url'])
									<li class="default"><a href="javascript:;">第{{ $shops['recomment_category']['slug'] }}类-{{ $shops['recomment_category']['name'] }}</a></li>
								@else
									@foreach($shops['recomment_category'] as $krc=>$vrc)
									<li @if($vrc['id'] == $shops['category_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$vrc['id'],'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">第{{ $vrc['slug'] }}类-{{ $vrc['name'] }}</a></li>
									@endforeach
								@endif
								<li @if($shops['category_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>0,'c'=>$shops['trade_url'],'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">不限</a></li>
							</ul>
						</div>
						<div class="col-xs-3 type1">
							<ul class="list-inline">
								<li class="t-h1">交易类型：</li>
								@foreach($shops['trade'] as $kt=>$vt)
									<li @if($kt == $shops['trade_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$kt,'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">{{ $vt }}</a></li>
								@endforeach
									<li @if($shops['trade_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>0,'d'=>$shops['price_url'],'e'=>$shops['sorts_url']]) }}">不限</a></li>
								<br>
								<li class="t-h1"><a href="">价格：</a></li>
								@foreach($shops['price'] as $kp=>$vp)
									<li @if($kp == $shops['price_url'])class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>$kp,'e'=>$shops['sorts_url']]) }}">{{ $vp['name'] }}</a></li>
								@endforeach
								<li @if($shops['price_url'] == 0)class="default"@endif><a href="{{ route($shops['url'], ['a'=>$shops['combine_url'],'b'=>$shops['category_url'],'c'=>$shops['trade_url'],'d'=>0,'e'=>$shops['sorts_url']]) }}">不限</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--商品筛选结束-->
				<!--排序导航开始-->
				@include('shop::partials.sorts_publish')
				<!--排序导航结束-->
				<!--商标展示开始-->
				<div class="ex-mr3">
					@if($shops['lists']['data'])
					<div class="fine-tit">精品商标/品质保证</div>
					<ul class="list-inline flo4">
						@foreach($shops['lists']['data'] as $v)
						@if($v['num'])
							<li>
								<a href="{{ route('shop.logo.show',$v['id']) }}">
									<p class="golook">{{ HTML::image('modules/shop/images/icon/golook.png') }}</p>
									<p class="go-shop">
										{{ HTML::image($v['images']['path']) }}
									</p>
								</a>
								<div class="dk">
									<p class="lap1">{{ $v['title'] }}(第{{ $v['category']['slug'] }}类)</p>
									<p class="lap8">服装列表：{{ $v['server_list'] }}</p>	
									<p class="lap4 cr">
										@if($v['price'] == '0' || $v['price'] == '0.00')
											<p><span class="seller1">价格面议</span></p> 
										@else
											<p>参考价：<span class="seller1">￥{{ $v['price'] }}</span></p>
										@endif
									</p>
									@include('shop::partials._like')
								</div>
							</li>
						@else
							<li>
								<a href="{{ route('shop.logo.show',$v['id']) }}">
									<p class="golook1"><img src="{{ HTML::image('modules/shop/images/icon/solded.png') }}"></p>
									<p class="go-shop">
										<img src="{{ HTML::image($v['images']['path']) }}">
									</p>
								</a>
								<div class="dk">
									<p class="lap1">{{ $v['title'] }}(第{{ $v['category']['slug'] }}类)</p>
									<p class="lap8">服装列表：{{ $v['server_list'] }}</p>		
									<p class="lap4 cr">￥{{ $v['price'] }}</p>
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
				<!--商标展示结束-->
				<!--page分页开始-->
				@include('shop::partials._page')
				<!--page分页结束-->
			</div>
		</div>
		<!--广告图1开始-->
		<div class="row gao2">
			<div class="col-xs-12 mt30">{{ HTML::image('modules/shop/images/test/gao2.png') }}</div>
		</div>
		<!--广告图1结束-->
	</div>
@stop