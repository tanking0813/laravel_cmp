@extends('search::logo.layouts.2columns-right')

@section('content')
<!-- 商标知识 -->
	<div class="library-module">
		<h3 class="mt0 mb0">商标知识</h3>
		<div class="lib-content">
			<ul class="list-unstyled library-list">
				<li>
					<div class="col-xs-4 lib-img">
						<a href="{{ route('search.logo.loreInfo') }}"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
					</div>
					<div class="col-xs-7 col-xs-offset-1 FAQ-detail">
						<p><a href="{{ route('search.logo.loreInfo') }}">商标注册网上能直接办理吗？</a></p>
						<p class="mb0">商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过...</p>
						<p>2014-10-12</p>
					</div>
				</li>
				<li>
					<div class="col-xs-4 lib-img">
						<a href="{{ route('search.logo.loreInfo') }}"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
					</div>
					<div class="col-xs-7 col-xs-offset-1 FAQ-detail">
						<p><a href="{{ route('search.logo.loreInfo') }}">商标注册网上能直接办理吗？</a></p>
						<p class="mb0">商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过...</p>
						<p>2014-10-12</p>
					</div>
				</li>
				<li>
					<div class="col-xs-4 lib-img">
						<a href="{{ route('search.logo.loreInfo') }}"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
					</div>
					<div class="col-xs-7 col-xs-offset-1 FAQ-detail">
						<p><a href="{{ route('search.logo.loreInfo') }}">商标注册网上能直接办理吗？</a></p>
						<p class="mb0">商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过...</p>
						<p>2014-10-12</p>
					</div>
				</li>
				<li>
					<div class="col-xs-4 lib-img">
						<a href="{{ route('search.logo.loreInfo') }}"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
					</div>
					<div class="col-xs-7 col-xs-offset-1 FAQ-detail">
						<p><a href="{{ route('search.logo.loreInfo') }}">商标注册网上能直接办理吗？</a></p>
						<p class="mb0">商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过...</p>
						<p>2014-10-12</p>
					</div>
				</li>
				<li>
					<div class="col-xs-4 lib-img">
						<a href="{{ route('search.logo.loreInfo') }}"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></a>
					</div>
					<div class="col-xs-7 col-xs-offset-1 FAQ-detail">
						<p><a href="{{ route('search.logo.loreInfo') }}">商标注册网上能直接办理吗？</a></p>
						<p class="mb0">商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过...</p>
						<p>2014-10-12</p>
					</div>
				</li>
			</ul>
		</div>
		<!-- 换页 -->
		<div class="paging">
			<ul class="list-inline list-unstyled paging-list ml0 mb0">
				<li><a href="">首页</a></li>
				<li><a href="">上一页</a></li>
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">下一页</a></li>
				<li class="pform ml10">
					<span>转到第</span>
					<input type="text" placeholder="1" class="num-box">
					<span>页</span>
					<span class="go">GO</span>
				</li>
			</ul>
		</div>
	</div>
@stop

@section('sidebar')
	<!-- 查询说明 -->
	@include('search::logo.partials._block_doc')
	<!-- 商标状态/监测统计 -->
	@include('search::logo.partials._block_state')
	<!-- 查询记录 -->
	@include('search::logo.partials._block_record')
	<!-- 商标知识 -->
	@include('search::logo.partials._block_know')
@stop

@section('script')

   {{-- 查询记录 js日期 --}}
   {{ HTML::script('modules/search/js/datepicker.js') }}
   {{ HTML::script('modules/search/js/jquery-ui-1.10.1.custom.min.js') }}
@stop