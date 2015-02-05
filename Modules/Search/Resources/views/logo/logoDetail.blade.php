@extends('search::logo.layouts.2columns-right')

@section('content')

	<!-- 商标详细内容 -->
	<div class="library-module">
		<h3 class="mt0 mb0">商标详情</h3>
		<div class="lib-content">
			<div class="lib-detail bDetail-message">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td>商标名称</td>
							<td>阿迪达斯</td>
							<td>注册号</td>
							<td>567117</td>
							<td rowspan="4" class="bPic"><img src="{{ asset('modules/search/images/brand-img.jpg') }}" /></td>
						</tr>
						<tr>
							<td>商品类别</td>
							<td>第9类</td>
							<td>国际分类</td>
							<td>第3类</td>
						</tr>
						<tr>
							<td>品牌时间</td>
							<td>25年</td>
							<td>申请日期</td>
							<td>1990-10-10</td>
						</tr>
						<tr>
							<td>活动地区</td>
							<td>广东省</td>
							<td>注册日期</td>
							<td>1990-10-10</td>
						</tr>
						<tr>
							<td>申请人名称（中文）</td>
							<td colspan="4">江门市江宝纸品有限公司</td>
						</tr>
						<tr>
							<td>申请人地址（中文）</td>
							<td colspan="4">广东省江门市杜阮镇双楼村公尾坑(土名)</td>
						</tr>
						<tr>
							<td>申请人名称（英文）</td>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td>申请人地址（英文）</td>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td>初审公告期号</td>
							<td>327</td>
							<td>初审公告日期</td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td>注册公告期号</td>
							<td>327</td>
							<td>注册公告日期</td>
							<td colspan="2"></td>
						</tr>
						<tr>
							<td>专用权期限</td>
							<td colspan="4">2011-10-10至2021-10-09</td>
						</tr>
						<tr>
							<td>商标类型</td>
							<td>普通商标</td>
							<td>是否共有商标</td>
							<td colspan="2">否</td>
						</tr>
						<tr>
							<td>备注</td>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td>代理人名称</td>
							<td colspan="4"></td>
						</tr>
						<tr>
							<td>商标/服务列表</td>
							<td colspan="4">
								<p>[0301——肥皂;香皂;药皂;洗发剂;消毒皂;洗衣剂;洗发液;光滑剂;]</p>
								<p>[0306——口红;化妆用洗涤剂;化妆品;指甲油;香水;减肥用化妆品;白肤霜;化妆品护肤剂;剃须膏;洗澡用化妆品;美容面膜;化妆雪花膏;皮肤白净乳;眼眉化妆品;染发剂;花露水;防晒黑剂;染发剂;固发剂;润肤膏;]</p>
								<p>[0302——擦洗溶液;清洁制剂;玻璃清洗剂;]</p>
								<p>[0305——杏仁油;]</p>
								<p>[——除臭剂;洗剂剂;]</p>
							</td>
						</tr>
						<tr>
							<td>商标流程</td>
							<td colspan="4">
								<p>转让待审中(2007-07-19)</p>
								<p>转让完成(2009-02-04)</p>
								<p>补发注册证待审(2009-07-30)</p>
								<p>补发注册证完成(2009-09-01)</p>
								<p>续展待审中(2012-01-19)</p>
								<p>续展完成(2012-05-23)</p>
							</td>
						</tr>
					</tbody>
				</table>
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