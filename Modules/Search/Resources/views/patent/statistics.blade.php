@extends('search::patent.layouts.2columns-left')

@section('alert')
	<!-- 弹出框 -->
	<!-- 时间趋势中的“专利量趋势分析” -->
	<div id="statisticChart-Modal" class="statisticChart-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog row">
			<div class="modal-content pt-schart-box">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">
						<span>统计专利总数：96 件，</span>
						<span>发明专利：69 件，</span>
						<span>实用新型： 0 件，</span>
						<span>外观设计：27 件，</span>
						<span>发明授权专利：28 件，</span>
						<span>中国台湾专利： 0 件，</span>
						<span>香港特区： 0 件</span>
					</h4>
		        </div>
				<div class="modal-body">
					<div class="schart-detail row">
						<div class="col-xs-10 schart-detail-list">
							<ul class="list-unstyled list-inline mb0">
								<li class="relevancy">
									<p>按</p>
									<div class="schart-list-info">
										<div class="dropdown-toggle" data-toggle="dropdown">专利申请日<span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu" role="menu">
											<li>专利申请日</li>
											<li>专利公开日</li>
										</ul>
									</div>
									<p>分析</p>
								</li>
								<li class="state">
									<p>起始时间</p>
									<div class="schart-list-info">
										<div class="dropdown-toggle" data-toggle="dropdown">2006<span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu" role="menu">
											<li>2006</li>
											<li>2007</li>
											<li>2008</li>
											<li>2009</li>
											<li>2010</li>
											<li>2011</li>
											<li>2012</li>
											<li>2013</li>
											<li>2014</li>
											<li>2015</li>
										</ul>
									</div>
									<p>年</p>
								</li>
								<li class="state">
									<p>按</p>
									<div class="schart-list-info">
										<div class="dropdown-toggle" data-toggle="dropdown">年<span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu" role="menu">
											<li>年</li>
											<li>月</li>
										</ul>
									</div>
									<p>分析</p>
								</li>
								<li class="state">
									<p>截止时间</p>
									<div class="schart-list-info">
										<div class="dropdown-toggle" data-toggle="dropdown">2014<span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu" role="menu">
											<li>2009</li>
											<li>2010</li>
											<li>2011</li>
											<li>2012</li>
											<li>2013</li>
											<li>2014</li>
											<li>2015</li>
										</ul>
									</div>
									<p>年</p>
								</li>
							</ul>
						</div>
						<div class="col-xs-2">
							<button type="button" class="btn again-btn">重新分析</button>
						</div>
					</div>
					<div class="schart-mix-box row ma0">
						<div class="col-xs-6 schart-bg pa0">
							<b class="sa-c-title">专利量趋势分析</b>
							<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
						</div>
						<div class="col-xs-6 schart-table pa0">
							<table class="table mb0">
								<thead>
									<tr>
										<th>序号</th>
										<th>时间</th>
										<th>专利量（件）</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>7</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>8</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>9</td>
										<td>2005</td>
										<td>12</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 区域分布中的“区域专利量分布” -->
	<div id="statisticChart1-Modal" class="statisticChart-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog row">
			<div class="modal-content pt-schart-box">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">
						<span>统计专利总数：96 件，</span>
						<span>发明专利：69 件，</span>
						<span>实用新型： 0 件，</span>
						<span>外观设计：27 件，</span>
						<span>发明授权专利：28 件，</span>
						<span>中国台湾专利： 0 件，</span>
						<span>香港特区： 0 件</span>
					</h4>
		        </div>
				<div class="modal-body">
					<div class="schart-detail row">
						<div class="col-xs-10 schart-detail-list">
							<ul class="list-unstyled list-inline mb0 quyu">
								<li class="relevancy">
									<p>按</p>
									<div class="schart-list-info">
										<div class="dropdown-toggle" data-toggle="dropdown">省份<span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu" role="menu">
											<li>省份</li>
											<li>市</li>
										</ul>
									</div>
									<p>分析</p>
									<P><span>德国</span><span>荷兰</span><span>日本</span></P>
								</li>
							</ul>
						</div>
						<div class="col-xs-2">
							<button type="button" class="btn again-btn">更多筛选项</button>
						</div>
					</div>
					<div class="schart-mix-box row ma0">
						<div class="col-xs-6 schart-bg pa0">
							<b class="sa-c-title">区域专利量分布</b>
							<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
						</div>
						<div class="col-xs-6 schart-table pa0">
							<table class="table mb0">
								<thead>
									<tr>
										<th>序号</th>
										<th>区域</th>
										<th>专利量（件）</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>荷兰</td>
										<td>12</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>7</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>8</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>9</td>
										<td>2005</td>
										<td>12</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
					<!-- 更多筛选项框 -->
					<div class="filtrate-item-box">
						<div class="filtrate-item-list">
							<mark>友情提示：您最多可以选择10条数据进行对比</mark>
							<ul class="list-unstyled list-inline mb0">
								<li><span></span>德国（52）</li>
								<li><span></span>荷兰（52）</li>
								<li><span></span>日本（52）</li>
							</ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn reset-btn">重置</button>
							<button type="button" class="btn again-analyze-btn">重新分析</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 技术分类中的“技术分类排行” -->
	<div id="statisticChart2-Modal" class="statisticChart-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog row">
			<div class="modal-content pt-schart-box">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">
						<span>统计专利总数：96 件，</span>
						<span>发明专利：69 件，</span>
						<span>实用新型： 0 件，</span>
						<span>外观设计：27 件，</span>
						<span>发明授权专利：28 件，</span>
						<span>中国台湾专利： 0 件，</span>
						<span>香港特区： 0 件</span>
					</h4>
		        </div>
				<div class="modal-body">
					<div class="schart-detail row">
						<div class="col-xs-10 schart-detail-list">
							<ul class="list-unstyled list-inline mb0 quyu">
								<li class="relevancy">
									<p>统计指标：</p>
									<div class="schart-list-info">
										<div class="dropdown-toggle" data-toggle="dropdown">省份<span class="icon"><span></span></span></div>
										<ul class="list-unstyled dropdown-menu" role="menu">
											<li>省份</li>
											<li>市</li>
										</ul>
									</div>
									<P><span>A:人类生活必需</span><span>B:物理</span><span>C:作业；运输</span></P>
								</li>
							</ul>
						</div>
						<div class="col-xs-2">
							<button type="button" class="btn again-btn">更多筛选项</button>
						</div>
					</div>
					<div class="schart-mix-box row ma0">
						<div class="col-xs-6 schart-bg pa0">
							<b class="sa-c-title">技术分类-专利量排行</b>
							<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
						</div>
						<div class="col-xs-6 schart-table pa0">
							<table class="table mb0">
								<thead>
									<tr>
										<th>序号</th>
										<th>技术分类IPC（部）</th>
										<th>专利量（件）</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>A:人类生活必需</td>
										<td>12</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>7</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>8</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>9</td>
										<td>2005</td>
										<td>12</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
					<!-- 更多筛选项框 -->
					<div class="filtrate-item-box">
						<div class="filtrate-item-list">
							<mark>友情提示：您最多可以选择10条数据进行对比</mark>
							<ul class="list-unstyled list-inline mb0">
								<li><span></span>德国（52）</li>
								<li><span></span>荷兰（52）</li>
								<li><span></span>日本（52）</li>
							</ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn reset-btn">重置</button>
							<button type="button" class="btn again-analyze-btn">重新分析</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 申请人中的“申请人-专利量排行” -->
	<div id="statisticChart3-Modal" class="statisticChart-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog row">
			<div class="modal-content pt-schart-box">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">
						<span>统计专利总数：96 件，</span>
						<span>发明专利：69 件，</span>
						<span>实用新型： 0 件，</span>
						<span>外观设计：27 件，</span>
						<span>发明授权专利：28 件，</span>
						<span>中国台湾专利： 0 件，</span>
						<span>香港特区： 0 件</span>
					</h4>
		        </div>
				<div class="modal-body">
					<div class="schart-detail row">
						<div class="col-xs-10 schart-detail-list">
							<ul class="list-unstyled list-inline mb0 quyu">
								<li class="relevancy">
									<p><b class="schart-name">统计指标(申请人)：</b><span>阿迪达斯股份公司</span><span>阿迪达斯国际销售集团</span><span>株式会社宝登</span>
									<span>阿迪达斯股份公司</span><span>阿迪达斯国际销售集团</span><span>株式会社宝登</span></p>
								</li>
							</ul>
						</div>
						<div class="col-xs-2">
							<button type="button" class="btn again-btn">更多筛选项</button>
						</div>
					</div>
					<div class="schart-mix-box row ma0">
						<div class="col-xs-6 schart-bg pa0">
							<b class="sa-c-title">申请人-专利量排行</b>
							<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
						</div>
						<div class="col-xs-6 schart-table pa0">
							<table class="table mb0">
								<thead>
									<tr>
										<th>序号</th>
										<th>申请人</th>
										<th>专利量（件）</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>阿迪达斯股份公司</td>
										<td>12</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>7</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>8</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>9</td>
										<td>2005</td>
										<td>12</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
					<!-- 更多筛选项框 -->
					<div class="filtrate-item-box">
						<div class="filtrate-item-list">
							<mark>友情提示：您最多可以选择10条数据进行对比</mark>
							<ul class="list-unstyled list-inline mb0">
								<li><span></span>德国（52）</li>
								<li><span></span>荷兰（52）</li>
								<li><span></span>日本（52）</li>
							</ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn reset-btn">重置</button>
							<button type="button" class="btn again-analyze-btn">重新分析</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 发明人中的“发明人-专利量排行” -->
	<div id="statisticChart4-Modal" class="statisticChart-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog row">
			<div class="modal-content pt-schart-box">
				<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" id="myModalLabel">
						<span>统计专利总数：96 件，</span>
						<span>发明专利：69 件，</span>
						<span>实用新型： 0 件，</span>
						<span>外观设计：27 件，</span>
						<span>发明授权专利：28 件，</span>
						<span>中国台湾专利： 0 件，</span>
						<span>香港特区： 0 件</span>
					</h4>
		        </div>
				<div class="modal-body">
					<div class="schart-detail row">
						<div class="col-xs-10 schart-detail-list">
							<ul class="list-unstyled list-inline mb0 quyu">
								<li class="relevancy">
									<p><b class="schart-name">统计指标(发明人)：</b><span>阿迪达斯股份公司</span><span>克里斯汀·迪波尼德托</span><span>马克·亚瑟·奥里森</span>
									<span>加藤容子</span><span>服部里美</span><span>乔希·罗伯特·戈登</span></p>
								</li>
							</ul>
						</div>
						<div class="col-xs-2">
							<button type="button" class="btn again-btn">更多筛选项</button>
						</div>
					</div>
					<div class="schart-mix-box row ma0">
						<div class="col-xs-6 schart-bg pa0">
							<b class="sa-c-title">发明人-专利量排行</b>
							<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
						</div>
						<div class="col-xs-6 schart-table pa0">
							<table class="table mb0">
								<thead>
									<tr>
										<th>序号</th>
										<th>发明人</th>
										<th>专利量（件）</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>乔希·罗伯特·戈登</td>
										<td>12</td>
									</tr>
									<tr>
										<td>2</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>3</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>4</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>5</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>6</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>7</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>8</td>
										<td>2005</td>
										<td>12</td>
									</tr>
									<tr>
										<td>9</td>
										<td>2005</td>
										<td>12</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
					<!-- 更多筛选项框 -->
					<div class="filtrate-item-box">
						<div class="filtrate-item-list">
							<mark>友情提示：您最多可以选择10条数据进行对比</mark>
							<ul class="list-unstyled list-inline mb0">
								<li><span></span>德国（52）</li>
								<li><span></span>荷兰（52）</li>
								<li><span></span>日本（52）</li>
							</ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn reset-btn">重置</button>
							<button type="button" class="btn again-analyze-btn">重新分析</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('content')
	<div class="container">
		<!-- ziye content header start -->
		<div class="zy-heading row statistic-heading">
			<div class="logo col-xs-2 pl0">
				<img src="{{ asset('modules/search/images/logo1.png') }}" />
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
					<button type="button" class="btn btn-quiry ml6 col-xs-2 pa0" data-toggle="modal" data-target="#disclaimer-Modal">统计分析</button>
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
						<li><span></span>发明专利</li>
						<li><span></span>实用新型专利</li>
						<li><span></span>外观设计专利</li>
						<li><span></span>发明授权专利</li>
						<li><span></span>中国台湾专利</li>
						<li><span></span>香港特区专利</li>
					</ul>
					<ul class="list-inline list-unstyled mb0 fn-list">
						<li class="all"><span></span>全部</li>
						<li><span></span>美国公开</li>
						<li><span></span>美国授权</li>
						<li><span></span>日本</li>
						<li><span></span>英国</li>
						<li><span></span>法国</li>
						<li><span></span>德国</li>
						<li><span></span>瑞士</li>
						<li><span></span>俄罗斯</li>
						<li><span></span>PCT组织</li>
						<li><span></span>欧专</li>
						<li><span></span>韩国</li>
						<li><span></span>东南亚</li>
					</ul>
				</div>
			{{ Form::close() }}
		</div>
		<!-- content matter start -->
		<div class="matter">
			<div class="zy-details">
				<!-- 统计分析 -->
				<div class="statistic-analysis">
					<div class="sa-show">
						<span>统计专利总数：96 件，</span>
						<span>发明专利：69 件，</span>
						<span>实用新型： 0 件，</span>
						<span>外观设计：27 件，</span>
						<span>发明授权专利：28 件，</span>
						<span>中国台湾专利： 0 件，</span>
						<span>香港特区： 0 件</span>
					</div>
					<div class="sa-chart">
						<div class="sa-c-tendency">
							<b class="sa-c-title">专利量总趋势</b>
							<div class="sa-c-detail">
								<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
								<a href="javascript:;" class="chart-modal" data-toggle="modal" data-target="#statisticChart-Modal">查看详情>></a>
							</div>
						</div>
						<div class="row">
							<div class="left col-xs-6">
								<div class="sa-c-distribute">
									<b class="sa-c-title">区域专利量分布</b>
									<div class="sa-c-detail">
										<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
										<a href="javascript:;" class="chart-modal" data-toggle="modal" data-target="#statisticChart1-Modal">查看详情>></a>
									</div>
								</div>
								<div class="tech-ranking">
									<b class="sa-c-title">申请人排行</b>
									<div class="sa-c-detail">
										<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
										<a href="javascript:;" class="chart-modal" data-toggle="modal" data-target="#statisticChart3-Modal">查看详情>></a>
									</div>
								</div>
							</div>
							<div class="right col-xs-6">
								<div class="proposer-ranking">
									<b class="sa-c-title">技术分类排行</b>
									<div class="sa-c-detail">
										<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
										<a href="javascript:;" class="chart-modal" data-toggle="modal" data-target="#statisticChart2-Modal">查看详情>></a>
									</div>
								</div>
								<div class="inventor-ranking">
									<b class="sa-c-title">发明人排行</b>
									<div class="sa-c-detail">
										<img src="{{ asset('modules/search/images/tubiao2.jpg') }}" />
										<a href="javascript:;" class="chart-modal" data-toggle="modal" data-target="#statisticChart4-Modal">查看详情>></a>
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

