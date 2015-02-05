@extends('search::logo.layouts.2columns-right')


@section('content')
<!-- content start -->
	<div class="search-result">
		<div class="searchR-title">
			<h4 class="sR-cleft">查询结果：</h4>
			<div class="sR-cright">
				<p class="sR-record mb0">10项查询结果</p>
			</div>
		</div>
		<div class="dragPack-wrap">
			<!-- 列表内容 -->
			<div class="searchR-content">
				<div class="row">
					<div class="hd col-xs-8" style="border-right:0;">
						<ul class="searchR-nav-list list-unstyled" role="navigation">
							<li class="liebiao-icon"><i class="icon icon-reorder"></i>列表视图</li>
						</ul>
					</div>
				</div>
				<div class="bd">
					<!-- 列表模块 -->
					<div class="lh">
						<table class="liebiao">
							<thead>
								<tr>
									<th>序号</th>
									<th>注册号/申请号</th>
									<th>类别</th>
									<th>商标</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>5074833</td>
									<td>9</td>
									<td>阿迪达斯</td>
									<td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>5074833</td>
									<td>9</td>
									<td>阿迪达斯</td>
									<td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>5074833</td>
									<td>9</td>
									<td>阿迪达斯</td>
									<td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
								</tr>
								<tr>
									<td>4</td>
									<td>5074833</td>
									<td>9</td>
									<td>阿迪达斯</td>
									<td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
								</tr>
								<tr>
									<td>5</td>
									<td>5074833</td>
									<td>9</td>
									<td>阿迪达斯</td>
									<td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
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
	</div
<!-- content end -->
@stop

@section('sidebar')
	<!-- 查询说明 -->
	@include('search::logo.partials._block_doc')
	<!-- 状态监测 -->
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