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
	<div class="row mt45">
		<div class="pad_15 ml15 whiteBg col-xs-12">
			<!--已发布卖品-->
			<ul class="tabHead1 mt20">
				<li class="@if($type == 'logo') active @endif "><a href="{{ route('member.publish.buyer.entrust', 'logo') }}">商标求购</a>
				</li>
				<li class="@if($type == 'patent') active @endif "><a href="{{ route('member.publish.buyer.entrust', 'patent') }}">专利求购</a>
				</li>
				<li class="@if($type == 'copy') active @endif "><a href="{{ route('member.publish.buyer.entrust', 'copy') }}">著作权求购</a>
				</li>
				<li class="@if($type == 'domain') active @endif "><a href="{{ route('member.publish.buyer.entrust', 'domain') }}">域名求购</a>
				</li>
				
			</ul>
			<ul class="tabContent  row mt30">
				<!--商标列表-->
				@include('member::partials.buyer_entrustlist')
			</ul>
		</div>
	</div>
</div>
@stop
