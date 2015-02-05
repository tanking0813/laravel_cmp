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
				<li class="@if($type == 'logo') active @endif"><a href="{{ route('member.publish.buyer.list', ['type'=>'logo', 'status'=>$status]) }}">商标出售</a>
				</li>		
				<li class="@if($type == 'patent') active @endif"><a href="{{ route('member.publish.buyer.list', ['type'=>'patent', 'status'=>$status]) }}">专利出售</a>
				</li>
				<li class="@if($type == 'copy') active @endif"><a href="{{ route('member.publish.buyer.list', ['type'=>'copy', 'status'=>$status]) }}">著作权出售</a>
				</li>
				<li class="@if($type == 'domain') active @endif"><a href="{{ route('member.publish.buyer.list', ['type'=>'domain', 'status'=>$status]) }}">域名出售</a>
				</li>
			</ul>
			<ul class="tabContent  row mt15">
				<!--商标列表-->
				@include('member::partials.buyer_publist')
			</ul>
		</div>
	</div>
@stop
