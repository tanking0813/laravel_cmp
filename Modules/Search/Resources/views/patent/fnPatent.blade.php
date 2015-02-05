@extends('search::patent.layouts.2columns-left')

@section('content');

<div class="container">
	<!-- ziye content header start -->
	<div class="zy-heading row">
		<div class="logo col-xs-2 pl0">
			<a href="{{ route('search.patent.index') }}"><img src="{{ asset('modules/search/images/logo1.png')}}" /></a>
		</div>
		<!-- 搜索框相关 -->
		{{ Form::open(['route'=>'search.patent.retrieval.cnPatent','class'=>'form-inline col-xs-9 j-ajax-get', 'role'=>'from', 'id'=>'patent_search', 'method'=>'get']) }}
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
		{{ Form::close }}
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
										<a href="javascript:void(0);" class="contrast-btn">对比</a>
										<a href="javascript:void(0);" class="clear-btn">清空</a>
									</div>
								</div>
							</div>
						</div>
						<!-- 结果列表展示 -->
						<div class="sRc-list-detail">
							<div class="row sRc-filtrate ma0">
								<div class="hd col-xs-3 pa0">
									<ul class="searchR-nav-list list-unstyled mb0" role="navigation">
										<li class="shitu-icon"><i class="icon icon-search"></i>视图搜索</li>
										<li class="liebiao-icon"><i class="icon icon-reorder"></i>列表视图</li>
									</ul>
								</div>
								<!-- 筛选列表 -->
								<div class="filtrate col-xs-4 pa0 pt-fn-filtrate">
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
										<li class="statistics">
											<a href="javascript:void(0);"><img src="{{ asset('module/search/images/fenxi-icon.png') }}" />统计分析</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="bd">
								<!-- 视图模块 -->
								<div class="lh">
									<div class="brandDetail-list">
										<ul class="list-unstyled shitu">
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
													</ul>
												</div>
											</li>
											<li class="pt-father pt-fn-father">
												<div class="patent-detail brand-detail pt-fn-detail">
													<span class="contrast"></span>
													<p>[欧专] <a href="{{ route('search.patent.retrieval.fnDetail') }}" class="pt-name">Shoe sole with improved dual energy management system-<small>EP99106110A</small></a></p>
													<p><b>申请人：</b><mark>ADIDAS INTERNATIONAL B.V. ; ADIDAS INT BV</mark></p>
													<p><b>申请日：</b><mark>2005-08-25</mark> - <b>主分类号：</b><mark>A63B41/02</mark></p>
													<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
													<ul class="list-inline list-unstyled mb0 mt15">
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
														<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
														<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
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
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr class="ptl-title">
												<td><span class="contrast"></span>1</td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">US7/140668</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">2005-08-25</a></td>
												<td>[美国授权]<a href="{{ route('search.patent.retrieval.fnDetail') }}">Shoe sole with improved dual</a></td>
												<td><a href="{{ route('search.patent.retrieval.fnDetail') }}">A63B41/02</a></td>
											</tr>
											<tr class="ptl-content">
												<td colspan="5">
													<div class="lb-pt-detail">
														<p><b>摘要：</b>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss notexceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas (80 and 60) is at least 28%.</p>
														<ul class="list-inline list-unstyled mb0 mt15">
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">阅读全文</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">全文下载</a></li> 
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">法律状态</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">同类专利</a></li>
															<li><a href="{{ route('search.patent.retrieval.fnDetail') }}">信息查询</a></li>
															<li><button type="button" class="btn trans-btn pa0">翻译</button></li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
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

