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
		        		<p>请先填写信息！</p>
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
			<div class="d-details approve-shoping-box">
				<!-- 可信认证 -->
				<div class="add-info-box">
					<div class="special-title">可信认证</div>
					<div class="b-b-detail approve-shoping">
						<div class="appro-s-para">
							<div class="as-r-title">可信网站验证服务</div>
							<p>可信网站”验证是权威的网站可信安全解决方案。可以实现“主体可信、数据可信和传输可信”。它全面集成了以下五大功能</p>
							<ul class="list-inline mb0">
								<li>网站身份证明<span></span></li>
								<li>数据加密传输<span></span></li>
								<li>网站运行监护<span></span></li>
								<li>网站篡改监护<span></span></li>
								<li>木马病毒监护<span></span></li>
							</ul>
							<p class="b-price">￥3,000.00</p>
							<div class="appro-s-detail row ma0">
								<label class="col-xs-1 control-label">年限</label>
								<div class="col-xs-2">
									<div class="dropdown-toggle age-limit" data-toggle="dropdown" id="applyType"><span class="info-input-type">1年</span><span class="icon"><span></span></span></div>
									<ul class="list-unstyled dropdown-menu mb0 ptType dataType" role="menu">
										<li>1年</li>
										<li>2年</li>
										<li>3年</li>
										<li>4年</li>
									</ul>
								</div>
								<button type="button" class="btn as-r-addinfo col-xs-2"><a href="{{ route('search.online.internet.reg_kxrz') }}">填写信息</a></button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn shopping-cart"><a href="javascript:;" data-toggle="modal" data-target="#messageReminder-Modal">加入购物车</a></button>
								<button type="button" class="btn buy"><a href="">立即购买</a></button>
							</div>
						</div>
						<div class="bbd-tab-box">
							<div class="hd">
								<ul class="mb0 pa0">
									<li>产品详情</li>
									<li>所需文件</li>
									<li>成功案例</li>
									<li>在线评价</li>
								</ul>
							</div>
							<div class="bd">
								<div class="lh">
									<div class="paragraph">
										<p>自然人、法人或者其他组织在生产经营活动中，对其商品或者服务需要取得商标专用权的，应当向商标局申请商标注册。商标注册申请商标所有人为了取得商标专用权，将其使用的商标，依照国家规定的注册条件、原则和程序，向商标局提出注册申请，商标局经过审核，准予注册的法律事实。经商标局审核注册的商标，便是注册商标，享有商标专用权。</p>
									</div>
									<b>使用范围</b>
									<strong>电子商务/营销类网站</strong>
									<p>电子商务（团购）、医疗培训、票务预定、制造业厂家</p>
									<p>可信是网站的身份证明，快速增加客户对企业的信任数据传输加密功能保护网站庞大的数据信息安全稳定</p>
									<strong>公共事业/知名品牌网站</strong>
									<p>政府、事业单位、社团、金融行业、知名品牌</p>
									<p>防攻击、防篡改、防病毒，保障网站正常无误运行，避免网站受侵对社会上造成恶劣的影响</p>
									<strong>产品展示型中小企业网站</strong>
									<p>电子商务（团购）、医疗培训、票务预定、制造业厂家</p>
									<p>可信是网站的身份证明，快速增加客户对企业的信任数据传输加密功能保护网站庞大的数据信息安全稳定</p>
								</div>
								<div class="lh">
									<b>选择可信网站的5大理由</b>
									<strong>权威验证网站真实身份，树立可信品牌</strong>
									<p>采用三重严格交互审核，确保网站身份真实，全面体现企业资质</p>
									<p>综合展示企业实力，轻松建立客户信任，创建可信品牌。</p>
									<strong>实时监护网站运行，运行情况随时掌控</strong>
									<p>实时对网站运行情况进行监护，对运行故障及时报警</p>
									<p>并提供网站可用性、访问速度的体验报告。</p>
									<strong>提供数据加密传输访问模式，保护用户信息</strong>
									<p>采取全球领先的安全证书加密技术确保网站数据传输安全</p>
									<p>最大限度避免用户个人信息被意外窃取。</p>
									<strong>实时对网站进行安全体检</strong>
									<p>对网页篡改进行监护，提供病毒、木马扫描，通过短信及邮件提醒</p>
									<p>及时消除网站各类安全隐患。</p>
									<strong>国际领先的防伪技术，可信电子标签过硬</strong>
									<p>独具防拷贝、加密、时间戳、防盗链等全方位防伪技术，可信电子标识技术过硬。</p>
								</div>
								<div class="lh">
									<b>所需文件</b>
									<p>如果您是国家机关、政府机构、事业单位和协会通用网址的申请，请您提交业务后务必在1个工作日内邮寄注册资料原件：</p>
									<p>A. 加盖单位公章的通用网址注册申请表</p>
									<p>B.申请单位的组织机构代码证或事业单位法人证书复印件并加盖公章 </p>
									<p>C. 加盖单位公章的通用网址注册协议2份(可先不填写生效日期与到期日期) </p>
									<p> 注意：</p>
									<p>单位名称要求与组织机构代码证以及公章一致，若不一致需要提交相关授权证明且加盖授权单位公章。</p>
									<p>如您未能及时邮寄资料或资料不合格，将导致您的通用网址申请不成功。</p>
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
