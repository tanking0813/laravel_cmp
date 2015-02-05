@extends('search::patent.layouts.2columns-left')

@section('content');

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
		</form>
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="zy-details">
			<!-- 快捷统计 -->
			<div class="quick-stat">
				<div class="qs-title">
					<h4 class="col-xs-2 pr0 ma0">快捷统计操作</h4>
					<div class="hd qs-name  col-xs-10">
						<ul class="list-inline list-unstyled mb0">
							<li class="filling-date">申请日</li>
							<li class="public-date">公开日</li>
							<li class="proposer">申请人</li>
							<li class="inventor">发明人</li>
							<li class="classi-codes">分类号</li>
							<li class="guise-c-codes">外观分类号</li>
							<li class="legal-status">法律状态</li>
						</ul>
					</div>
				</div>
				<div class="qs-details bd">
					<!-- 申请日 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
					</ul>
					<!-- 公开日 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
						<li><span></span>2005（8）</li>
					</ul>
					<!-- 申请人 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>克里斯汀·迪波尼德托（19）</li>
						<li><span></span>马克·亚瑟·奥里森（11）</li>
						<li><span></span>加藤容子（8）</li>
						<li><span></span>服部里美（8）</li>
						<li><span></span>蒂姆·大卫·卢卡斯（7）</li>
						<li><span></span>蒂姆·大卫·卢卡斯（7）</li>
					</ul>
					<!-- 发明人 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>克里斯汀·迪波尼德托（19）</li>
						<li><span></span>马克·亚瑟·奥里森（11）</li>
						<li><span></span>加藤容子（8）</li>
						<li><span></span>服部里美（8）</li>
						<li><span></span>蒂姆·大卫·卢卡斯（7）</li>
						<li><span></span>蒂姆·大卫·卢卡斯（7）</li>
					</ul>
					<!-- 分类号 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>A63B71/06（8）</li>
						<li><span></span>A43B13/18（5）</li>
						<li><span></span>A43B23/02（5）</li>
						<li><span></span>A43B5/00（4）</li>
						<li><span></span>A63B41/02（4）</li>
						<li><span></span>A63B69/00（4）</li>
						<li><span></span>A63B69/00（4）</li>
					</ul>
					<!-- 外观分类号 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>02-04（11）</li>
						<li><span></span>02-04（11）</li>
						<li><span></span>02-04（11）</li>
						<li><span></span>02-02（9）</li>
						<li><span></span>21-02（6）</li>
						<li><span></span>02-07（1）</li>
					</ul>
					<!-- 法律状态 -->
					<ul class="list-inline list-unstyled mb0 lh">
						<li class="all"><span></span>全部</li>
						<li><span></span>有效专利（43）</li>
						<li><span></span>实质审查（41）</li>
						<li><span></span>失效专利（12）</li>
					</ul>
					<button type="button" class="btn filtrate-btn">筛选</button>
				</div>
			</div>
			<!-- 查询结果 -->
			<div class="zy-result">
				<div class="dragPack-wrap">
					<!-- 列表内容 -->
					<div class="searchR-content">
						<!-- 历史记录和对比浮框 -->
						<div class="history-contrast">
							<div class="hd">
								<ul class="list-inline list-unstyled ma0">
									<li>历史记录</li>
									<li>临时选中</li>
								</ul>
							</div>
							<div class="bd">
								<div class="lh history-box"></div>
								<div class="lh contrast-box">
									<div class="btn-click">
										<a href="{{ route('search.patent.retrieval.contrast') }}" class="contrast-btn">对比</a>
										<a href="javascript:void(0);" class="clear-btn">清空</a>
									</div>
								</div>
							</div>
						</div>
						<!-- 结果列表展示 -->
						<div class="sRc-list-detail">
							<div class="row sRc-filtrate ma0">
								<div class="hd col-xs-4 pa0">
									<ul class="searchR-nav-list list-unstyled mb0" role="navigation">
										<li class="shitu-icon"><i class="icon icon-search"></i>视图搜索</li>
										<li class="liebiao-icon"><i class="icon icon-reorder"></i>列表视图</li>
										<li class="tuxing-icon"><i class="icon icon-th-large"></i>图形视图</li>
									</ul>
								</div>
								<!-- 筛选列表 -->
								<div class="filtrate col-xs-4 pa0">
									<ul class="list-unstyled list-inline mb0">
										<li class="relevancy">
											<div class="dropdown-toggle" data-toggle="dropdown"><span class="listDetail"></span><span class="icon"></span></div>
											<ul class="list-unstyled dropdown-menu" role="menu">
												<li><span></span>相关度排序</li>
												<li><span></span>申请日升序</li>
												<li><span></span>申请日降序</li>
												<li><span></span>公开/公告日升序</li>
												<li><span></span>公开/公告日降序</li>
											</ul>
										</li>
										<li class="state">
											<div class="dropdown-toggle" data-toggle="dropdown"><span class="listDetail"></span><span class="icon"></span></div>
											<ul class="list-unstyled dropdown-menu" role="menu">
												<li><span></span>全部专利</li>
												<li><span></span>有效专利</li>
												<li><span></span>失效专利</li>
												<li><span></span>实质审查</li>
												<li><span></span>公开发明</li>
												<li><span></span>部分有效</li>
											</ul>
										</li>
										<li class="statistics">
											<a href="{{ route('search.patent.retrieval.statistics') }}"><img src="{{ asset('modules/search/images/fenxi-icon.png')}}" />统计分析</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="bd">
								<!-- 视图模块 -->
								<div class="lh">
									<div class="brandDetail-list">
										<ul class="list-unstyled shitu">
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>1]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>1]) }}" class="pt-name">球胆- CN200510093031.7</a>
													<button type="button" class="btn pa0 valid-btn">有效专利</button>
													<button type="button" class="btn pa0 failure-btn">失效专利</button>
													<button type="button" class="btn pa0 essence-btn">实质审查</button>
													<button type="button" class="btn pa0 public-btn">公开发明</button>
													<button type="button" class="btn pa0 part-v-btn">部分有效</button>
													</p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>2]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>2]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>3]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>3]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>4]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>4]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>5]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>5]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>6]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>6]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>7]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>7]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
											<li class="pt-father">
												<div class="col-xs-2 patent-img">
													<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>8]) }}"><img src="{{ asset('modules/search/images/pic.jpg')}}" /></a>
												</div>
												<div class="col-xs-10 patent-detail brand-detail">
													<span class="contrast"></span>
													<p>[发明专利] [发明授权专利]<a href="{{ route('search.patent.retrieval.cnDetail', ['id'=>8]) }}" class="pt-name">球胆- CN200510093031.7</a><button type="button" class="btn pa0 valid-btn">有效专利</button></p>
													<p><b>申请人：</b><mark>阿迪达斯国际经营管理有限公司</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="javascript:void(0);">阅读全文</a></li>
														<li><a href="javascript:void(0);">全文下载</a></li> 
														<li><a href="javascript:void(0);">法律状态</a></li>
														<li><a href="javascript:void(0);">同类专利</a></li>
														<li><a href="javascript:void(0);">信息查询</a></li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- 列表模块 -->
								<div class="lh">
									<table class="liebiao pt-liebiao">
										<thead>
											<tr>
												<th class="serial-number"><i class="icon-cog"></i>序号</th>
												<th>申请号</th>
												<th>申请日</th>
												<th>专利名称</th>
												<th>主类分号</th>
											</tr>
										</thead>
										<tbody class="pt-pullDown">	
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">2005-08-25</a></td>
												<td>[发明专利] [发明授权专利] <a href="{{ route('search.patent.retrieval.cnDetail') }}">球胆</a></td>
												<td><a href="{{ route('search.patent.retrieval.cnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>本发明提供了一种可充气的球的球胆，特别是足球的球胆，一种包括这种球胆的球，以及这种球胆的制造方法。这种球胆包括：至少两个在球胆内部延伸的平坦的加固面，以及至少一个安装在球胆内部，并通过平坦的加固面保持在预定位置上的电子仪器。这种球胆能够把电子仪器保持在某一预定的位置上，并能够对所受到的载荷给予充分的缓冲保护，还能保证包括这种球胆的球的良好的运动特性，同时这种球胆的制造方法简便经济。</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="javascript:void(0);">阅读全文</a></li>
															<li><a href="javascript:void(0);">全文下载</a></li> 
															<li><a href="javascript:void(0);">法律状态</a></li>
															<li><a href="javascript:void(0);">同类专利</a></li>
															<li><a href="javascript:void(0);">信息查询</a></li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- 图形模块 -->
								<div class="lh">
									<div class="brandDetail-list pt-tuxing">
										<ul class="list-unstyled tuxing list-inline ml0 mr0">
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
											<li>
												<a href="{{ route('search.patent.retrieval.cnDetail') }}" class="txbrand-img"><img src="{{ asset('modules/search/images/pic1.jpg')}}" /></a>
												<div class="txbrand-detail">
													<p><span class="contrast"></span><a href="{{ route('search.patent.retrieval.cnDetail') }}" class="pt-name">球胆</a></p>
													<p><a href="{{ route('search.patent.retrieval.cnDetail') }}">CN200510093031.7</a></p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- 换页 -->
					<div class="paging">
						<ul class="list-inline list-unstyled paging-list ml0 mb0">
							<li><a href="javascript:void(0);">首页</a></li>
							<li><a href="javascript:void(0);">上一页</a></li>
							<li><a href="javascript:void(0);">1</a></li>
							<li><a href="javascript:void(0);">2</a></li>
							<li><a href="javascript:void(0);">3</a></li>
							<li><a href="javascript:void(0);">下一页</a></li>
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
@stop