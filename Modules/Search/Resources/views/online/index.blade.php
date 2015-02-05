@extends('search::online.layouts.blank')

@section('content')
	<div class="content">
	<div class="zx-banner">
		<a href="zx-brand.html"></a>
	</div>
	<div class="container">
		<!-- content search-box start -->
		<div class="zx-online-box">
			<!-- 注册类型 -->
			<div class="zx-o-type">
				<div class="zx-o-title">
					<img src="{{ asset('modules/search/images/zx-type.png') }}">
				</div>
				<div class="zx-o-detail">
					<ul class="list-inline mb0">
						<li class="brand">
							<a href="zx-brand.html">
								<div class="zx-t-dcaption">
									<b>商标业务</b><br />Trademark services
								</div>
							</a>
						</li>
						<li class="patent">
							<a href="zx-patent.html">
								<div class="zx-t-dcaption">
									<b>专利业务</b><br />The Patent Office
								</div>
							</a>
						</li>
						<li class="copyright">
							<a href="zx-copyright.html">
								<div class="zx-t-dcaption">
									<b>著作权业务</b><br />Copyright business
								</div>
							</a>
						</li>
						<li class="internet">
							<a href="zx-internet.html">
								<div class="zx-t-dcaption">
									<b>互联网业务</b><br />Internet business
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- 注册流程 -->
			<div class="zx-o-step">
				<div class="zx-o-title">
					<img src="{{ asset('modules/search/images/zx-flow.png') }}">
				</div>
				<div class="zx-o-detail">
					<img src="{{ asset('modules/search/images/zx-step.png') }}">
				</div>
			</div>
			<!-- 荣誉资质 -->
			<div class="zx-o-honor">
				<div class="zx-o-title">
					<img src="{{ asset('modules/search/images/zx-honor.png') }}">
				</div>
				<div class="zx-o-detail">
					<div class="bd">
						<ul class="picList list-inline mb0">
							<li>
								<img src="{{ asset('modules/search/images/h-pic1.jpg') }}" />企业团员会员证
							</li>
							<li>
								<img src="{{ asset('modules/search/images/h-pic2.jpg') }}" />企业家协会会员单位
							</li>
							<li>
								<img src="{{ asset('modules/search/images/h-pic3.jpg') }}" />教学实验基地
							</li>
							<li>
								<img src="{{ asset('modules/search/images/h-pic4.jpg') }}" />域名注册机构
							</li>
							<li>
								<img src="{{ asset('modules/search/images/h-pic5.jpg') }}" />企业团员会员证
							</li>
							<li>
								<img src="{{ asset('modules/search/images/h-pic6.jpg') }}" />企业家协会会员单位
							</li>
							<li>
								<img src="{{ asset('modules/search/images/h-pic7.jpg') }}" />教学实验基地
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

