@extends('search::online.layouts.blank')

@section('alert')

<!-- 弹出验证框 -->
<div id="d-warningbox-modal" class="d-warningbox modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="d-w-able">
					<p>恭喜您，通用网址dewffeggaqgh还未被注册！</p>
					<button type="button" class="btn ensure"><a href="{{ route('search.online.internet.reg_tywz') }}" style="color:#fff;">立即注册</a></button>
				</div>
				<div class="d-w-disable" style="display: none;">
					<p>已被注册！</p>
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
		<div class="d-search-box">
			<form role="form">
				<div class="form-group row d-sb-frame mb0">
					<label for="domainName" class="sr-only">域名</label>
					<div class="col-xs-10 input-box">
						<input type="text" class="form-control" id="domainName" placeholder="请输入您想注册的域名，如：upipr">
					</div>
					<div class="col-xs-1 com-box">
						<p class="mb0">.com</p>
						<span></span>
					</div>
					<button type="button" class="btn d-search-btn col-xs-1"><a href="{{ route('search.online.internet.inter_result') }}" style="color:#fff;">查域名</a></button>
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
							<li><span></span>.com</li>
							<li><span></span>.cn</li>
							<li><span></span>.wang</li>
							<li><span></span>.net</li>
							<li><span></span>.top</li>
							<li><span></span>.org</li>
							<li><span></span>.com.cn</li>
							<li><span></span>.net.cn</li>
							<li><span></span>.org.cn</li>
							<li><span></span>.gov.cn</li>
							<li><span></span>.co</li>
							<li><span></span>.biz</li>
							<li><span></span>.info</li>
							<li><span></span>.name</li>
							<li><span></span>.so</li>
							<li><span></span>.tel</li>
							<li><span></span>.mobi</li>
							<li><span></span>.me</li>
							<li><span></span>.asia</li>
							<li><span></span>.cc</li>
							<li><span></span>.tv</li>
							<li><span></span>.tm</li>
							<li><span></span>.club</li>
							<li><span></span>.xyz</li>
							<li><span></span>.pw</li>
							<li><span></span>.la</li>
							<li><span></span>.hk</li>
							<li><span></span>.travel</li>
							<li><span></span>.ac.cn</li>
							<li><span></span>.中文网</li>
							<li><span></span>.website</li>
							<li><span></span>.集团</li>
							<li><span></span>.cool</li>
							<li><span></span>.company</li>
							<li><span></span>.city</li>
							<li><span></span>.emial</li>
							<li><span></span>.我爱你</li>
							<li><span></span>.bike</li>
							<li><span></span>.today</li>
							<li><span></span>.life</li>
							<li><span></span>.market</li>
							<li><span></span>.ren</li>
							<li><span></span>.移动</li>
							<li><span></span>.在线</li>
							<li><span></span>.中国</li>
							<li><span></span>.公司</li>
							<li><span></span>.网络</li>
							<li><span></span>.software</li>
							<li><span></span>.ninja</li>
							<li><span></span>.space</li>
						</ul>
						<ul class="list-cn-items list-items list-inline">
							<li><span></span>中文.com</li>
							<li><span></span>中文.cn</li>
							<li><span></span>中文.wang</li>
							<li><span></span>中文.net</li>
							<li><span></span>中文.top</li>
							<li><span></span>中文.biz</li>
							<li><span></span>中文.cc</li>
							<li><span></span>中文.tv</li>
							<li><span></span>中文.中国</li>
							<li><span></span>中文.公司</li>
							<li><span></span>中文.网络</li>
							<li><span></span>中文.pw</li>
							<li><span></span>中文.la</li>
							<li><span></span>中文.name</li>
							<li><span></span>中文.tm</li>
							<li><span></span>中文.xyz</li>
							<li><span></span>中文.ren</li>
							<li><span></span>中文.cool</li>
							<li><span></span>中文.city</li>
							<li><span></span>中文.集团</li>
							<li><span></span>中文.email</li>
							<li><span></span>中文.bike</li>
							<li><span></span>中文.我爱你</li>
							<li><span></span>中文.today</li>
							<li><span></span>中文.life</li>
							<li><span></span>中文.website</li>
							<li><span></span>中文.company</li>
						</ul>
					</div>
				</div>
			</form>
		</div>
		<!-- content d-matter start -->
		<div class="d-matter">
			<div class="d-details">
				<!-- 搜索模块标签切换 -->
				<div class="pt-apply">
					<div class="hd">
						<ul class="list-unstyled mb0">
							<li><span>通用网址查询</span></li>
							<li><span>无线网址查询</span></li>
						</ul>
					</div>
					<div class="bd">
						<div class="a-lh">
							<form role="form">
								<div class="form-group row">
									<label for="URLname" class="sr-only">请输入您要查询的通用网址</label>
									<div class="col-xs-4 pa0" style="margin-left: 220px;">
										<input type="text" class="form-control" id="URLname" placeholder="请输入您要查询的通用网址">
									</div>
									<div class="col-xs-1 pa0">
										<input type="text" class="form-control" placeholder="输入验证码" style="margin-left: -35px;">
									</div>
									<div class="auth-code col-xs-1 pa0">
										<img src="{{ asset('modules/search/images/auth-code.jpg') }}" style="height: 32px;" />
									</div>
									<button type="button" class="btn col-xs-2 pa0" style="margin-left: 8px;" data-toggle="modal" data-target="#d-warningbox-modal">查询</button>
								</div>
							</form>
						</div>
						<div class="a-lh">
							<form role="form">
								<div class="form-group row">
									<label for="URLname" class="sr-only">请输入您要查询的无线网址</label>
									<div class="col-xs-4 pa0" style="margin-left: 300px;">
										<input type="text" class="form-control" id="URLname" placeholder="请输入您要查询的无线网址">
									</div>
									<div class="btn-group col-xs-4 pa0" style="margin-left: -35px;">
										<button type="button" class="btn pa0"><a href="http://seal.cnic.cn/web/kw/?keyword=grfshrt">查询</a></button>
										<button type="button" class="btn pa0 wireless-btn"><a href="{{ route('search.online.internet.reg_wxwz') }}">立即注册</a></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- 优势模块 -->
				<div class="advantage-box">
					<div class="special-title">柚皮网域名优势</div>
					<div class="ab-details">
						<ul class="list-inline">
							<li>
								<div class="row">
									<div class="ico-bj col-xs-2"><span></span>便捷</div>
									<div class="para col-xs-9">
										<p>智能查询：多种智能查询工具，免费为您推荐最精准的域名，轻松注册好域名</p>
										<p>轻松管理：强大的域名自助管理平台，域名转入、转出自如，修改信息简单方便</p>
										<p>随时随地：提供国内首家域名应用客户端，随时随地查询管理域名</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="ico-ks col-xs-2"><span></span>快速</div>
									<div class="para col-xs-6">
										<p>查询快：服务器域名查询达到5000个/s，居行业首位</p>
										<p>解析快：强大的解析系统，实现首次解析5分钟生效</p>
										<p>响应快：超高的解析响应速度，30ms内访问到服务器</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="ico-aq col-xs-2"><span></span>安全</div>
									<div class="para col-xs-6">
										<p>解析安全：全球多点负载均衡，每天承载数十亿解析量，在线率99.99%</p>
										<p>信息安全：免费域名隐私保护服务，防止注册人信息被盗导致的骚扰和诈骗</p>
										<p>域名安全：免费域名锁、域名体检等服务，保域名资产安全，网站正常运转</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="ico-ax col-xs-2"><span></span>安心</div>
									<div class="para col-xs-6">
										<p>实时服务：7x24小时客户服务，随时解答您的问题，让您售后无忧</p>
										<p>本地服务：全国19家分公司，为您提供更贴心的本地化服务</p>
										<p>一站服务：域名查询、域名注册、品牌域名保护、新顶级域申请、二手域名交易等全方位的域名产品服务。</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop