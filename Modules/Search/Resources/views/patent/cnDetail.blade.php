@extends('search::patent.layouts.2columns-left')

@section('content')

<div class="container">
	<!-- ziye content header start -->
	<div class="zy-heading row">
		<div class="logo col-xs-2 pl0">
			<a href="{{ route('search.patent.index') }}"><img src="{{ asset('modules/search/images/logo1.png')}}" /></a>
		</div>
		{{ Form::open(['route'=>'search.patent.retrieval.cnPatent','class'=>'form-inline col-xs-9 j-ajax-get', 'role'=>'from', 'id'=>'patent_search', 'method'=>'get']) }}
			<!-- 搜索框相关 -->
			<div class="search-box row ml0">
				<div class="heading form-group col-xs-2 pa0">
					<h4 class="cn">中国专利库</h4>
					<h4 class="fn">国外专利库</h4>
					<span></span>
				</div>
				<div class="form-group col-xs-4 pa0">
					<label class="sr-only" for="brandName">name</label>
					<input type="text" id="brandName" class="form-control" placeholder="">
				</div>
				{{ Form::button('搜索', ['class'=>'btn btn-quiry ml6 col-xs-2 pa0', 'type'=>'submit', 'name'=>'submit', 'data-toggle'=>'modal', 'data-target'=>'#disclaimer-Modal']) }}
				<div class="link col-xs-4">
					<ul class="list-inline list-unstyled mb0">
						<li><a href="{{ route('search.patent.retrieval') }}">高级检索</a></li>
						<li><a href="{{ route('search.patent.ipc') }}">IPC分类检索</a></li>
						<li><a href="{{ route('search.patent.locarno') }}">Locarno分类检索</a></li>
					</ul>
				</div>
			</div>
			<div class="checkbox-gather">
				<ul class="list-inline list-unstyled mb0 cn-list">
					<li class="all"><span></span>全部</li>
					    @foreach(Config::get('search::patent.library.cn') as $k=>$v)
	                       <li><span id="{{ $k }}"></span>{{ $v }}</li>
	                    @endforeach
				</ul>
				<ul class="list-inline list-unstyled mb0 fn-list">
					<li class="all"><span></span>全部</li>
					    @foreach(Config::get('search::patent.library.fn') as $k=>$v)
	                       <li><span id="{{ $k }}"></span>{{ $v }}</li>
	                    @endforeach
				</ul>
			</div>
		{{ Form::close() }}
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="zy-details pt-guide ptDetail">
			<div class="ptDetail-title row">
				<div class="ptD-name col-xs-8">
					<span>[发明专利]</span><span>[发明授权专利]</span><span>球胆</span>
					<button type="button" class="btn valid-btn pa0">有效专利</button>
				</div>
				<div class="ptD-function col-xs-4">
					<button type="button" class="btn URL-btn">复制链接</button>
					<button type="button" class="btn clect-btn">收藏</button>
					<button type="button" class="btn dload-btn">下载全文</button>
				</div>
			</div>
			<div class="pt-apply">
				<div class="hd">
					<ul class="list-unstyled mb0">
						<li><span>专利公开详情</span></li>
						<li><span>专利授权详情</span></li>
						<li><span>申请全文</span></li>
						<li><span>授权全文</span></li>
					</ul>
				</div>
				<div class="bd">
					<!-- 专利公开详情 -->
					<div class="a-lh apt-public">
						<div class="ptD-public">
							<!-- 基本信息 -->
							<div class="jiben-info row a-lh-box ma0">
								<p class="lead">【基本信息】：</p>
								<div class="jb-left col-xs-6 pa0">
									<p>申请号：<span class="requestNumber">CN200510093031.7</span></p>
									<p>申请日：<span class="requestDate"><a href="{{ route('search.patent.retrieval.cnPatent') }}">2005-08-25</a></span></p>
									<p>公开/公告日：<span class="publicDate"><a href="{{ route('search.patent.retrieval.cnPatent') }}">2006-03-22</a></span></p>
									<p>发明/设计人：<span class="designer"><a href="{{ route('search.patent.retrieval.cnPatent') }}">汉斯皮特·纽伦堡 ; 大卫·约翰·哲瑞 ; 蒂姆·大卫·卢卡斯 ; 罗兰德·甘特·赛德尔</a></span></p>
									<p>分类号：<span class="sortNumber"><a href="{{ route('search.patent.retrieval.cnPatent') }}">A63B41/02 ; A63B43/00</a></span></p>
									<p>地址：<span class="adr">荷兰阿姆斯特丹</span></p>
									<p>颁证日：<span class="awardDate">暂无信息</span></p>
									<p>专利代理机构：<span class="agency"><a href="{{ route('search.patent.retrieval.cnPatent') }}">北京万慧达知识产权代理有限公司</a></span></p>
									<p>国际申请：<span class="interApply">暂无信息</span></p>
									<p>进入国家日期：<span class="enterDate">暂无信息</span></p>
								</div>
								<div class="jb-right col-xs-6 pa0">
									<p>优先权：<span class="priority">20040917 DE200410045176</span></p>
									<p>公开/公告号：<span class="publicNumber"><a href="{{ route('search.patent.retrieval.cnPatent') }}">CN1748817</a></span></p>
									<p>申请/专利权人：<span class="proposer"><a href="{{ route('search.patent.retrieval.cnPatent') }}">阿迪达斯国际经营管理有限公司</a></span></p>
									<p>主分类号：<span class="mainsortNumber"><a href="{{ route('search.patent.retrieval.cnPatent') }}">A63B41/02</a></span></p>
									<p>分案申请：<span class="division">暂无信息</span></p>
									<p>国省代码：<span class="provinceCode">荷兰(NL)</span></p>
									<p>范畴分类：<span class="scope">暂无信息</span></p>
									<p>代理人：<span class="agent"><a href="{{ route('search.patent.retrieval.cnPatent') }}">秦开宗</a></span></p>
									<p>国际公布：<span class="interPublic">暂无信息</span></p>
								</div>
							</div>
							<!-- 摘要 -->
							<div class="abstract-info row a-lh-box ma0">
								<p class="lead">【摘要】：</p>
								<div class="astr-left col-xs-6 ai-parag pa0">
									<p>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
								</div>
								<div class="astr-right col-xs-6 ai-img pa0">
									<img src="{{ asset('modules/search/images/pt-img.jpg')}}" />
								</div>
							</div>
							<!-- 主权项 -->
							<div class="sovereignty-info a-lh-box">
								<p class="lead">【主权项】：</p>
								<div class="si-parag">
									<p>1.一种用于可充气的球的，特别是足球的球胆(1)，它包括： a.至少两个在上述球胆(1)内部延伸的平坦的加固面(10)； b.至少一个布置在上述球胆(1)内部，并且由上述平坦的固面(10)将其保持在预定位置上的电子仪器(30)。</p>
								</div>
							</div>
							<!-- 法律状态 -->
							<div class="law-info a-lh-box">
								<p class="lead">【法律状态】：</p>
								<div class="li-parag">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th class="ptc-items">法律状态公告日</th>
												<th class="ptc-items">法律状态</th>
												<th>法律状态详情</th>
											</tr>
										</thead>
										<tbody>
											<tr class="ptc-i-title">
												<td>2006-12-22</td>
												<td>有效专利</td>
												<td>授权</td>
											</tr>
											<tr>
												<td>2008-12-22</td>
												<td>实质审查</td>
												<td>TW001289</td>
											</tr>
											<tr>
												<td>2010-12-22</td>
												<td>公开发明</td>
												<td>公开</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 引证文献 -->
							<div class="quote-info a-lh-box">
								<p class="lead">【引证文献】：</p>
								<div class="qi-parag">
									<p>专利引证信息： DE3918038A1； US2004/0162170A1； US5883569A； CN2211298Y； US3229976A； DE1172585B；非专利引证信息： 暂无非专利引证信息！</p>
								</div>
							</div>
							<!-- 同族专利 -->
							<div class="phrator-info a-lh-box">
								<p class="lead">【同族专利】：</p>
								<div class="pi-parag">
									<p><a href="javascript:void(0);">CN200910158151.9</a><a href="javascript:void(0);">CN200910158152.3</a></p>
								</div>
							</div>
							<!-- 信息查询 -->
							<div class="phrator-info a-lh-box">
								<p class="lead">【信息查询】：</p>
								<div class="pi-parag">
									<ul class="list-inline list-unstyled mb0">
										<li><a href="{{ route('search.patent.retrieval.cnPatent') }}">相关专利</a></li>
										<li><a href="javascript:void(0);">收费信息</a></li>
										<li><a href="javascript:void(0);">专利证书</a></li>
										<li><a href="javascript:void(0);">发文信息</a></li>
										<li><a href="javascript:void(0);">通知书</a></li>
										<li><a href="javascript:void(0);">发文信息</a></li>
										<li><a href="javascript:void(0);">退信信息</a></li>
										<li><a href="javascript:void(0);">事务性公告</a></li>
									</ul>
								</div>
							</div>
							<!-- 网页搜索 -->
							<div class="web-info a-lh-box">
								<p class="lead">【网页搜索】：</p>
								<div class="wi-parag">
									<p><img src="{{ asset('modules/search/images/baidu.jpg')}}" /><a href=""> 阿迪达斯国际经营管理有限公司</a></p>
								</div>
							</div>
							<!-- 学术搜索 -->
							<div class="science-info a-lh-box">
								<p class="lead">【学术搜索】：</p>
								<div class="si-parag">
									<p><img src="{{ asset('modules/search/images/google.jpg')}}" /><a href="">球胆</a></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 专利授权详情 -->
					<div class="a-lh apt-accredit">
						<div class="ptD-public">
							<!-- 基本信息 -->
							<div class="jiben-info row a-lh-box ma0">
								<p class="lead">【基本信息】：</p>
								<div class="jb-left col-xs-6 pa0">
									<p>申请号：<span class="requestNumber">CN200510093031.7</span></p>
									<p>申请日：<span class="requestDate">2005-08-25</span></p>
									<p>公开/公告日：<span class="publicDate">2006-03-22</span></p>
									<p>发明/设计人：<span class="designer">汉斯皮特·纽伦堡 ; 大卫·约翰·哲瑞 ; 蒂姆·大卫·卢卡斯 ; 罗兰德·甘特·赛德尔</span></p>
									<p>分类号：<span class="sortNumber">A63B41/02 ; A63B43/00</span></p>
									<p>地址：<span class="adr">荷兰阿姆斯特丹</span></p>
									<p>颁证日：<span class="awardDate">暂无信息</span></p>
									<p>专利代理机构：<span class="agency">北京万慧达知识产权代理有限公司</span></p>
									<p>国际申请：<span class="interApply">暂无信息</span></p>
									<p>进入国家日期：<span class="enterDate">暂无信息</span></p>
								</div>
								<div class="jb-right col-xs-6 pa0">
									<p>优先权：<span class="priority">20040917 DE200410045176</span></p>
									<p>公开/公告号：<span class="publicNumber">CN1748817</span></p>
									<p>申请/专利权人：<span class="proposer">阿迪达斯国际经营管理有限公司</span></p>
									<p>主分类号：<span class="mainsortNumber">A63B41/02</span></p>
									<p>分案申请：<span class="division">暂无信息</span></p>
									<p>国省代码：<span class="provinceCode">荷兰(NL)</span></p>
									<p>范畴分类：<span class="scope">暂无信息</span></p>
									<p>代理人：<span class="agent">秦开宗</span></p>
									<p>国际公布：<span class="interPublic">暂无信息</span></p>
								</div>
							</div>
							<!-- 摘要 -->
							<div class="abstract-info row a-lh-box ma0">
								<p class="lead">【摘要】：</p>
								<div class="astr-left col-xs-6 ai-parag pa0">
									<p>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
								</div>
								<div class="astr-right col-xs-6 ai-img pa0">
									<img src="{{ asset('modules/search/images/pt-img.jpg')}}" />
								</div>
							</div>
							<!-- 主权项 -->
							<div class="sovereignty-info a-lh-box">
								<p class="lead">【主权项】：</p>
								<div class="si-parag">
									<p>1.一种用于可充气的球的，特别是足球的球胆(1)，它包括： a.至少两个在上述球胆(1)内部延伸的平坦的加固面(10)； b.至少一个布置在上述球胆(1)内部，并且由上述平坦的固面(10)将其保持在预定位置上的电子仪器(30)。</p>
								</div>
							</div>
							<!-- 法律状态 -->
							<div class="law-info a-lh-box">
								<p class="lead">【法律状态】：</p>
								<div class="li-parag">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th class="ptc-items">法律状态公告日</th>
												<th class="ptc-items">法律状态</th>
												<th>法律状态详情</th>
											</tr>
										</thead>
										<tbody>
											<tr class="ptc-i-title">
												<td>2006-12-22</td>
												<td>有效专利</td>
												<td>授权</td>
											</tr>
											<tr>
												<td>2008-12-22</td>
												<td>实质审查</td>
												<td>TW001289</td>
											</tr>
											<tr>
												<td>2010-12-22</td>
												<td>公开发明</td>
												<td>公开</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- 引证文献 -->
							<div class="quote-info a-lh-box">
								<p class="lead">【引证文献】：</p>
								<div class="qi-parag">
									<p>专利引证信息： DE3918038A1； US2004/0162170A1； US5883569A； CN2211298Y； US3229976A； DE1172585B；非专利引证信息： 暂无非专利引证信息！</p>
								</div>
							</div>
							<!-- 同族专利 -->
							<div class="phrator-info a-lh-box">
								<p class="lead">【同族专利】：</p>
								<div class="pi-parag">
									<p><a href="javascript:void(0);">CN200910158151.9</a><a href="javascript:void(0);">CN200910158152.3</a></p>
								</div>
							</div>
							<!-- 信息查询 -->
							<div class="phrator-info a-lh-box">
								<p class="lead">【信息查询】：</p>
								<div class="pi-parag">
									<ul class="list-inline list-unstyled mb0">
										<li><a href="{{ route('search.patent.retrieval.cnPatent') }}">相关专利</a></li>
										<li><a href="javascript:void(0);">收费信息</a></li>
										<li><a href="javascript:void(0);">专利证书</a></li>
										<li><a href="javascript:void(0);">发文信息</a></li>
										<li><a href="javascript:void(0);">通知书</a></li>
										<li><a href="javascript:void(0);">发文信息</a></li>
										<li><a href="javascript:void(0);">退信信息</a></li>
										<li><a href="javascript:void(0);">事务性公告</a></li>
									</ul>
								</div>
							</div>
							<!-- 网页搜索 -->
							<div class="web-info a-lh-box">
								<p class="lead">【网页搜索】：</p>
								<div class="wi-parag">
									<p><img src="{{ asset('modules/search/images/baidu.jpg')}}" /><a href="javascript:void(0);"> 阿迪达斯国际经营管理有限公司</a></p>
								</div>
							</div>
							<!-- 学术搜索 -->
							<div class="science-info a-lh-box">
								<p class="lead">【学术搜索】：</p>
								<div class="si-parag">
									<p><img src="{{ asset('modules/search/images/google.jpg')}}" /><a href="javascript:void(0);">球胆</a></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 申请全文 -->
					<div class="a-lh apt-sq-fullText">
						<div class="ptD-public ptD-pimg">
							<img src="{{ asset('modules/search/images/patent.jpg')}}" />
						</div>
					</div>
					<!-- 授权全文 -->
					<div class="a-lh apt-sq-fullText">
						<div class="ptD-public ptD-pimg">
							<img src="{{ asset('modules/search/images/patent.jpg')}}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop