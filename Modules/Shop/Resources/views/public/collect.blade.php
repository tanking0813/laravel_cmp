@extends('shop::layouts.default')

@section('g_hotsearch')
	@include('shop::partials.logo_hot_search')
@stop

@section('g_nav')
	@include('shop::partials.logo_menu')
	<!--banner开始-->
	<div class="row banner">
		<div class="col-xs-12">{{ HTML::image('modules/shop/images/test/banner5.png') }}</div>
	</div>
	<!--banner结束-->
@stop

@section('content')

@stop