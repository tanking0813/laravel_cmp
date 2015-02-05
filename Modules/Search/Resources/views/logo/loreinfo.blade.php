@extends('search::logo.layouts.2columns-right')

@section('content')
	<div class="library-module">
		<h3 class="mt0 mb0">商标知识</h3>
		<div class="lib-content">
			<div class="lib-detail">
				<div class="text-title">
					<h2>商标注册网上能直接办理吗？</h2>
					<p>时间：2014-08-26<span>来源：xx</span></p>
				</div>
				<p> 商标注册网上能直接办理吗？根据《商标注册网上申请暂行规定》，提交商标注册网上申请，申请人可以为符合商标法规定的商标注册申请主体资格的自然人、法人或其他组织。但申请人应委托已在商标局备案的商标代理机构办理商标注册网上申请。因此目前个人是无法直接通过中国商标网在网上办理商标注册手续的，需要委托正规商标注册代理机构进行网上申请商标注册办理。</p>
				<p>网上注册申请的商标，包括商品商标、服务商标和集体商标、证明商标。提交商标注册网上申请，应当通过中国商标网（http://sbj.saic.gov.cn）以商标局规定的文件格式、数据标准、操作规范和传输方式提交申请文件，并按规定上传商标注册申请所需的身份及主体资格证明文件。因此委托代理机构在网上直接办理商标注册，只需要提供相关资料即可，个人名义注册需提供：身份证复印件、个体工商户营业执照复印件、清晰的商标标识。公司名义注册需提供：营业执照复印件、清晰的商标标识，其它由代理公司为您全程代理。在进行注册之前，最好委托商标注册代理人先进行商标查询工作，降低商标注册风险。</p>
				<p>提交商标注册网上申请，申请日期以进入商标局电子系统的日期为准。提交商标注册网上申请，符合商标注册网上申请规定的，视为该申请提交成功。提交商标注册网上申请，申请人无需提交纸质文件，但申请人要求优先权的，应按要求向商标局提交纸质的优先权证明文件。提交商标注册网上申请，商标代理机构应当足额预付商标规费。关于缴费问题，可参考中国商标网公告《商标网上申请缴费须知》。商标网上申请的接收时间为法定工作日的 8：00至16：30。因特殊情况需要临时调整的，提前在中国商标网予以公告，以公告中规定的时间为准。商标代理机构可登录中国商标网（http://sbj.saic.gov.cn）查询其提交的商标注册网上申请。</p>
			</div>
			<div class="skip">
				<ul class="list-unstyled list-inline ml0 mr0">
					<li class="prev">上一篇：<a href="">商标注册流程及申请所需材料</a></li>
					<li class="next">下一篇：<a href="">商标注册流程及申请所需材料</a></li>
				</ul>
			</div>
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