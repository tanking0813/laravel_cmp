@extends('search::online.layouts.blank')

@section('alert')
<!-- 点击加入购物车/购买相关提示框 -->
<div id="messageReminder-Modal" class="messageReminder-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog row">
	    <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
	          <h4 class="modal-title" id="myModalLabel">消息提示</h4>
	        </div>
	        <div class="modal-body">
	        	<div class="standard-select">
	        		<p>请选择规格！</p>
	        	</div>
	        	<div class="plus-success">
		        	<p>加入购物车成功</p>
		        	<form role="form">		        		
						<a href=""><button type="button" class="btn btn-shopping">继续购物</button></a>
						<a href=""><button type="button" class="btn btn-account">去结算</button></a>
		        	</form>
	        	</div>
	        </div>
	    </div>
	</div>
</div>
@stop

@section('content')
<div class="content">
	<div class="container">
		<!-- content search-box start -->
		<div class="zx-online-box zx-business-box">
			<!-- 商标业务 -->
			<div class="brand-business brand-b-icons">
				<div class="b-b-title">商标业务</div>
				<div class="b-b-detail">
					<div class="row ma0 bbd-detail">
						<div class="col-xs-4 b-icon1"></div>
						<div class="col-xs-7 b-para">
							<b>商标注册</b>
							<p>实现品牌价值，高效助力品牌发展</p>
							<p>作为无形资产，信誉的载体，为企业带来更好的经济效益</p>
							<p class="b-price">￥3,000.00</p>
							<p class="proposer">申请人：
								<a href="javascript:;">企业</a>
								<a href="javascript:;">个人</a>
							</p>
							<p class="amount">数量：
								<a href="javascript:;" class="minus">-</a>
								<input type="text" id="number">
								<a href="javascript:;" class="plus">+</a>
							</p>
							<div class="btn-group">
								<button type="button" class="btn shopping-cart"><a href="javascript:;" data-toggle="modal" data-target="#messageReminder-Modal">加入购物车</a></button>
								<button type="button" class="btn buy"><a href="javascript:;" data-toggle="modal" data-target="#messageReminder-Modal">立即购买</a></button>
							</div>
						</div>
					</div>
					<div class="bbd-tab-box">
						<div class="hd">
							<ul class="mb0 pa0">
								<li>产品详情</li>
								<li>所需文件</li>
								<li>服务流程</li>
								<li>成功案例</li>
								<li>在线评价</li>
							</ul>
						</div>
						<div class="bd">
							<div class="lh">
								<b>商标注册</b>
								<p>自然人、法人或者其他组织在生产经营活动中，对其商品或者服务需要取得商标专用权的，应当向商标局申请商标注册。商标注册申请商标所有人为了取得商标专用权，将其使用的商标，依照国家规定的注册条件、原则和程序，向商标局提出注册申请，商标局经过审核，准予注册的法律事实。经商标局审核注册的商标，便是注册商标，享有商标专用权。</p>
								<b>费用说明</b>
								<p>每个商标类别，默认10个小项，每超过1项，加收200元/项</p>
								<b>所需时长：<span>12-16 个月</span></b>
								<b>产品有效期：<span>10 年</span></b>
							</div>
							<div class="lh">
								<b>所需文件</b>
								<ul class="list-unstyled file-needed">
									<li><span>01</span>主体资格证明（公司：营业执照；个人：个体执照+身份证）</li>
									<li><span>02</span>确认单</li>
									<li><span>03</span>商标图</li>
								</ul>
							</div>
							<div class="lh service-process">
								<b>服务流程</b>
								<img src="{{ asset('modules/search/images/zx-b-step.png') }}" /> 
							</div>
							<div class="lh bbd-step">
								<b>成功案例</b>
								<ul class="list-inline bbd-case-list mb0">
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
									<li><img src="{{ asset('modules/search/images/zx-case.jpg') }}"></li>
								</ul>
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
							<div class="lh bbd-evaluate">
								<ul class="list-inline bbd-case-list mb0">
									<li>
										<div class="row">
											<div class="col-xs-1">
												<img src="{{ asset('modules/search/images/zx-evaluate.png') }}" />
											</div>
											<div class="col-xs-10">
												<div class="per-message">
													<span class="name">Zhang San</span>
													<span class="date">2015年01月27日</span>
												</div>
												<div class="leave-word">
													<p>非常满意，以后会常来！</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-xs-1">
												<img src="{{ asset('modules/search/images/zx-evaluate.png') }}" />
											</div>
											<div class="col-xs-10">
												<div class="per-message">
													<span class="name">Zhang San</span>
													<span class="date">2015年01月27日</span>
												</div>
												<div class="leave-word">
													<p>非常满意，以后会常来！</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-xs-1">
												<img src="{{ asset('modules/search/images/zx-evaluate.png') }}" />
											</div>
											<div class="col-xs-10">
												<div class="per-message">
													<span class="name">Zhang San</span>
													<span class="date">2015年01月27日</span>
												</div>
												<div class="leave-word">
													<p>非常满意，以后会常来！</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-xs-1">
												<img src="{{ asset('modules/search/images/zx-evaluate.png') }}" />
											</div>
											<div class="col-xs-10">
												<div class="per-message">
													<span class="name">Zhang San</span>
													<span class="date">2015年01月27日</span>
												</div>
												<div class="leave-word">
													<p>非常满意，以后会常来！</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-xs-1">
												<img src="{{ asset('modules/search/images/zx-evaluate.png') }}" />
											</div>
											<div class="col-xs-10">
												<div class="per-message">
													<span class="name">Zhang San</span>
													<span class="date">2015年01月27日</span>
												</div>
												<div class="leave-word">
													<p>非常满意，以后会常来！</p>
												</div>
											</div>
										</div>
									</li>
								</ul>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

