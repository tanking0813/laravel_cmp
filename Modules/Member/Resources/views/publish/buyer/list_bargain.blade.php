@extends('member::layouts.2columns-left')

@section('style')
    {{ HTML::style('static/css/daterangepicker.css') }}
@stop

@section('leftbar')
    @include('member::partials.publish_sidebar')
@stop
@section('content')
<div class="identify whiteBg ml0">
		<i class="bao"></i><span class="orange">公司未认证，</span><span>柚皮网普通会员 <a href="" class="ocean">【购买柚皮通服务】</a></span>
	</div>
	<div class="row mt45  mr0">
		<div class="ml15 whiteBg col-xs-12">
			<!--已发布卖品-->
			<ul class="tabHead1 mt20">
				<li class="active"><a href="{{ route('member.publish.buyer.bargain', 'are') }}">正在议价</a>
				</li>
				<li><a href="{{ route('member.publish.buyer.bargain', 'end') }}">结束的议价</a>
				</li>
			</ul>
			<ul class="tabContent  row mt30">
				<!--正在议价列表-->
				@include('member::partials.buyer_bargainlist')
			</ul>
		</div>
	</div>
</div>
@stop
