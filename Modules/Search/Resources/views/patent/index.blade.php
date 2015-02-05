@extends('search::patent.layouts.blank')

@section('content')
<div class="content">
	<div class="container">
		<!-- content header start -->
		<div class="header">
			<h1>专利检索</h1>
		</div>
		<!-- content matter start -->
		<div class="matter">
			<div class="details">
				{{ Form::open(['route'=>'search.patent.retrieval','class'=>'form-inline j-ajax-get', 'role'=>'from', 'id'=>'patent_search', 'method'=>'get']) }}
					<!-- 搜索框相关 -->
					<div class="search-box row">
						<div class="heading form-group">
							<h4 class="cn" id="1">中国专利库</h4>
							<h4 class="fn" id="2">国外专利库</h4>
							<span class="arrow" ></span>
						</div>
						<div class="form-group">
							<label class="sr-only" for="brandName">name</label>
							{{ Form::text('q', null, ['class'=>'form-control', 'id'=>"q", 'placeholder'=>'请输入专利号/专利名称/相关内容']) }}
						</div>
						<!-- {{ Form::button('检索', ['class'=>'btn btn-quiry ml6', 'type'=>'submit', 'name'=>'submit', 'data-toggle'=>'modal', 'data-target'=>'#disclaimer-Modal']) }} -->
						<button type="button" class="btn btn-quiry ml6" data-toggle="modal" data-target="#disclaimer-Modal">检索</button>

						{{ Form::button('高级检索', ['class'=>'btn btn-retrieval', 'type'=>'submit', 'name'=>'11']) }}
					</div>
					<div class="checkbox-gather">
						<ul class="list-inline list-unstyled mb0 cn-list">
							<li class="all"><span></span>全部</li>
	                            @foreach(Config::get('search::patent.library.cn') as $k=>$v)
	                                <li><span id="{{ $k }}"></span>{{ $v }}</li>
	                            @endforeach
						</ul>
						<ul class="list-inline list-unstyled mb0 fn-list">
							<li class="all"><span></span>全部</li>
	                            @foreach(Config::get('search::patent.library.fn') as $k=>$v)
	                                <li><span id="{{ $k }}"></span>{{ $v }}</li>
	                            @endforeach
						</ul>
					</div>
				{{ Form::close() }}
				<div class="color-lump">
					<ul class="list-inline list-unstyled mb0">
						<li class="application"><a href="{{ route('search.patent.apply') }}">专利申请</a></li>
						<li class="data"><a href="{{ route('search.patent.declares') }}">专利数据</a></li>
						<li class="guide"><a href="{{ route('search.patent.guide') }}">专利指南</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@stop