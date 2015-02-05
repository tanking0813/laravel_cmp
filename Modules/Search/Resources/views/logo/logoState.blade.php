@extends('search::logo.layouts.2columns-right')


@section('content')
	<!-- 状态查询内容 -->
	<div class="search-result">
		<div class="searchR-title">
			<h4 class="sR-cleft">查询结果：</h4>
			<div class="sR-cright">
				<p class="sR-record mb0">101项符合查询结果</p>
				<div class="excel-about">
					<P class="warning-upgrade"><span></span>您当前是普通会员，不能将查询结果导出Excel!<a href="">升级会员</a></P>
					<p class="warning"><span></span>导出到Excel</p>
					<a href="javascript:;"><img src="{{ asset('modules/search/images/excel.png') }}" class="excel" /></a>
				</div>
				<div class="check">
					<img src="{{ asset('modules/search/images/packUp.png') }}" class="dragPack" />
				</div>
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
						<table class="liebiao zx-liebiao">
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
									<td>5759792</td>
									<td>9</td>
									<td>阿迪达斯</td>
									<td><a href="{{ route('search.logo.logoDetail') }}">查看</a></td>
								</tr>
							</tbody>
						</table>
						<div class="brand-condition">
							<div class="bc-title">
								<p class="mb0">商标注册号/申请号：5074833<span>类别：9</span><span>商标状态详情</span></p>
							</div>
							<div class="bc-show">
								<span class="line"></span>
								<ul class="list-unstyled">
									<li>2004-03-26<span>商标注册待审中</span></li>
									<li>2006-10-07<span>初步审定（1042）</span></li>
									<li>2007-01-07<span>已注册（1054）</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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