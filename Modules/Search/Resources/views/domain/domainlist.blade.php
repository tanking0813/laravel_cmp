@extends('search::domain.layouts.blank')

@section('content')
<!-- content start -->
<div class="content">
	<div class="container">
		<!-- content search-box start -->
		<div class="d-search-box">
			{{ Form::open(['route'=>'search.domain.domainlist','class'=>'j-ajax-get', 'role'=>'from', 'method'=>'get']) }}
				<div class="form-group row d-sb-frame mb0">
					<label for="domainName" class="sr-only">域名</label>
					<div class="col-xs-10 input-box">
						{{ Form::text('test', null, ['class'=>'form-control','id'=>'domainName','placeholder'=>'请输入您想注册的域名，如：upipr']) }}
					</div>
					<div class="col-xs-1 com-box">
						<p class="mb0">.com</p>
						<span></span>
					</div>
					<button type="submit" class="btn d-search-btn col-xs-1">查域名</button>
					<!-- 点击.com旁的三角时的弹出框 -->
					<div class="hidden-checkbox">
						<i class="icon close-icon icon-remove"></i>
						<ul class="global-list list-inline mb0">
							<li class="radio en-radio"><span></span>英文域名</li>
							<li class="radio cn-radio"><span></span>中文域名</li>
							<li class="check all-select"><span></span>全选</li>
							<li class="check all-cancel"><span></span>取消全选</li>
						</ul>
						<ul class="list-en-items list-items list-inline">
						    @foreach(Config::get('search::domain.library.cn') as $k=>$v)
							<li><span id="{{ $k }}"></span>{{ $v }}</li>
							@endforeach
						</ul>
						<ul class="list-cn-items list-items list-inline">
							@foreach(Config::get('search::domain.library.fn') as $k=>$v)
							<li><span id="{{ $k }}"></span>{{ $v }}</li>
							@endforeach
						</ul>
					</div>
				</div>
			{{ Form::close() }}
		</div>
		<!-- content d-matter start -->
		<div class="d-matter">
			<div class="d-details">
				<!-- 查询结果 -->
				<div class="result-list-box">
					<div class="special-title">查询结果</div>
					<div class="list-details list-items">
						<ul class="list-unstyled">
							
							<!-- <li class="return-success"><i class="icon icon-ok-sign"></i>{{ $xml->key }}
								（<mark>
								   @if($xml->original=="211 : Domain exists")
										'域名已经注册'
								   @elseif($xml->original=="210 : Domain name is available")
										'域名可以注册' 
									@endif
								</mark>）
						     <a href="{{ route('search.domain.domaininfo') }}">查看域名信息</a></li> -->
							
								   @if($xml->original=="211 : Domain exists")
								   <li class="registered"><i class="icon icon-remove-sign"></i>{{ $xml->key }}（<mark>域名已经注册</mark>）</li>
										
								   @elseif($xml->original=="210 : Domain name is available")
										
									<li class="register-able"><span></span>{{ $xml->key }}（<mark>尚未注册</mark>）<a href="{{ route('search.online.internet.orders') }}">在线注册</a></li>
									@endif
								
						</ul>
					</div>
					<div class="rl-mix-box">
						<ul class="list-inline mb0">
							<li class="shrink">查看所有查询结果<i class="icon icon-double-angle-down"></i></li>
							<li class="check-all"><span></span>全选</li>
							<li class="check-delete"><span></span>取消全选</li>
							<li class="link"><a href="javascript:void(0);">在线注册</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- content end -->
@stop		