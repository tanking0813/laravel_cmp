@extends('search::patent.layouts.2columns-left')

@section('content')

<div class="container">
	<!-- ziye content header start -->
	<div class="zy-heading row">
		<div class="logo col-xs-2 pl0">
			<a href="{{ route('search.patent.index') }}"><img src="{{ asset('modules/search/images/logo1.png')}}" /></a>
		</div>
		<!-- 搜索框相关 -->
		{{ Form::open(['name'=>'myform', 'class'=>'form-inline col-xs-9 j-ajax-get', 'method'=>'get', 'role'=>'form']) }}	
			<div class="search-box row ml0">
				<div class="heading form-group col-xs-2 pa0">
					<h4 class="cn">中国专利库</h4>
					<h4 class="fn">国外专利库</h4>
					<span></span>
				</div>
				<div class="form-group col-xs-4 pa0">
					<label class="sr-only" for="brandName">name</label>
			 {{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'brandName' ,'placeholder'=>'']) }}
				</div>
				{{ Form::button('搜索', ['class'=>'btn btn-quiry ml6 col-xs-2 pa0', 'type'=>'submit', 'name'=>'submit', 'data-toggle'=>'modal', 'data-target'=>'#disclaimer-Modal']) }}
				<div class="link col-xs-4">
					<ul class="list-inline list-unstyled mb0">
						<li><a href="{{ route('search.patent.retrieval') }}">高级检索</a></li>
						<li><a href="{{ route('search.patent.ipc') }}">IPC分类检索</a></li>
						<li><a href="{{ route('search.patent.locarno') }}">Locarno分类检索</a></li>
					</ul>
				</div>
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
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="zy-details">
			<!-- 数据说明 -->
			<div class="data-declare row ma0">
				<div class="dd-left col-xs-3 pa0">
					<div class="dd-l-title">分类</div>
					<div class="dd-l-list">
						<ul class="list-unstyled mb0">
							<li>数据库范围</li>
						</ul>
					</div>
				</div>
				<div class="dd-right col-xs-9 pa0">
					<div class="dd-l-title">内容</div>
					<div class="dd-l-parag">
						<p>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。 </p>
						<p>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。 </p>
						<p>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。 </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop