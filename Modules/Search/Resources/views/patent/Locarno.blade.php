@extends('search::patent.layouts.2columns-left')

@section('content')
	<div class="container">
		<!-- ziye content header start -->
		<div class="zy-heading row IPC Locarno">
			<div class="logo col-xs-2 pl0">
				<a href="{{ route('search.patent.index') }}"><img src="{{ asset('modules/search/images/logo1.png')}}" /></a>
			</div>
			{{ Form::open(['route'=>'search.patent.retrieval.cnPatent','class'=>'form-inline col-xs-9 j-ajax-get', 'role'=>'from', 'id'=>'patent_search', 'method'=>'get']) }}
				<!-- 搜索框相关 -->
				<div class="search-box row ml0">
					<div class="form-group col-xs-4 pa0">
						<label class="sr-only" for="brandName">name</label>
						<input type="text" id="brandName" class="form-control" placeholder="">
					</div>
					<button type="button" class="btn btn-quiry ml6 col-xs-2 pa0" data-toggle="modal" data-target="#disclaimer-Modal">Locarno分类检索</button>
					<div class="link col-xs-4">
						<ul class="list-inline list-unstyled mb0">
							<li><a href="{{ route('search.patent.retrieval') }}">高级检索</a></li>
							<li><a href="{{ route('search.patent.ipc') }}">IPC分类检索</a></li>						 
						</ul>
					</div>
				</div>
				<div class="checkbox-gather">
					<ul class="list-inline list-unstyled mb0 cn-list">
						<li><span></span>输入关键字查分类号</li>
						<li><span></span>输入分类号查含义</li>
					</ul>
				</div>
			{{ Form::close() }}
		</div>
		<!-- content matter start -->
		<div class="matter">
			<div class="locarno-content zy-details">
				
				@foreach($data as $v)
				<h4 class="lc-title ma0"><i></i><span></span>{{$v->name}}<a href="{{ route('search.patent.retrieval.cnPatent') }}">搜索</a></h4>
				<div class="lc-detail lc-matter">
					<ul class="list-unstyled mb0">

						<li><span>01-02</span>水果和蔬菜<a href="{{ route('search.patent.retrieval.cnPatent') }}">搜索</a></li>
						<li><span>01-03</span>烘制食品、饼干、点心、通心粉及其他谷类食品、巧克力、糖果类、冰冻食品<a href="{{ route('search.patent.retrieval.cnPatent') }}">搜索</a></li>
						<li><span>01-04</span>烘制食品、饼干、点心、通心粉及其他谷类食品、巧克力、糖果类、冰冻食品<a href="{{ route('search.patent.retrieval.cnPatent') }}">搜索</a></li>
					</ul>
				</div>
				@endforeach	  
			</div>
		</div>
	</div>
@stop

 


 