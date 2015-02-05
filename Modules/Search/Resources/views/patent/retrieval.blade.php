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
			<div class="search-box">
				<div class="heading form-group high-search-title">
					<h4 class="cn">中国专利库</h4>
					<h4 class="fn">国外专利库</h4>
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
		<div class="zy-details pt-guide ptDetail high-search-form">
			<!-- 高级检索表单 -->
			{{ Form::open(['name'=>'myform', 'class'=>'form-horizontal j-ajax-get', 'method'=>'get', 'role'=>'form']) }}
				<div class="row high-search-detail">
					<!-- 左侧 -->
					<div class="col-xs-6 hsd-left">
						<div class="form-group">
							<label for="pName" class="col-xs-4 control-label">专利名称：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'pName' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>专利名称示例：</b>
									<P>已知专利名称中包含Computer和science，可键入：<b>Computer and Science</b></P>
									<mark>专利名称中包含的检索词之间可以使用 and、or、not 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="sortNumber" class="col-xs-4 control-label">分类号：</label>
							<div class="col-xs-8">
						    	{{ Form::email('ics', null, ['class'=>'form-control' ,'id'=>'sortNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>国际分类号示例：</b>
									<P>1、分类号为G06F17/30：<b>G06F17/30</b></P>
									<P>2、分类号开头为G06F：<b>G06F</b></P>
									<mark>专利分类号可由《国际专利分类表》查得，若同一专利申请案有多个分类号时，其中第一个称为主分类号，多个分类号之间可使用 and、or 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="requestNumber" class="col-xs-4 control-label">申请号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'requestNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>申请号示例：</b>
									<P>1、完整的申请号：<b>US13861433</b></P>
									<P>2、省略国别代码以及校验码：<b>13861433</b></P>
									<mark>多个申请号可以使用 or 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="publicNumber" class="col-xs-4 control-label">公开/公告号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'publicNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>公开/公告号示例：</b>
									<P>1、完整的公开号：<b>US13861433</b></P>
									<P>2、省略国别代码以及文献类型代码的公开号：<b>13861433</b></P>
									<mark>多个公开号可以使用 or 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="designer" class="col-xs-4 control-label">发明/设计人：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'designer' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>发明/设计人示例：</b>
									<P>已知发明人/设计人包含“Vikki”时，应键入：<b>Vikki</b></P>
									<mark>多个检索词之间可进行and、or、not运算</mark>
								</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="priority" class="col-xs-4 control-label">优先权：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'priority' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>优先权项示例：</b>
									<P>1、优先权项中包含EP02010953：<b>EP02010953</b></P>
									<P>2、优先权项中的申请日为2011年12月12日：<b>20111212</b></P>
									<P>3、优先权项中的申请日为2011年12月：<b>201112</b></P>
									<mark>优先权中包括表示国别的字母、表示编号的数字、申请日期组成，多个检索词之间可以使用 and、or、not 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group fn-peculiar">
							<label for="USA-sNumber" class="col-xs-4 control-label">美国分类号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'USA-sNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>美国分类号示例：</b>
									<P>分类号为127/15：<b>127/15</b></P>
									<P>分类号开头为127：<b>127</b></P>
									<mark>专利分类号可由《美国专利分类表》查得,若同一专利申请案有多个分类号时，其中第一个称为主分类号，多个分类号之间可使用and、or、not 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group fn-peculiar">
							<label for="Europe-sNumber" class="col-xs-4 control-label">欧洲分类号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'Europe-sNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>欧洲分类号构示例：</b>
									<P>分类号为127/15：<b>127/15</b></P>
									<P>分类号开头为127：<b>127</b></P>
									<mark>专利分类号可由《欧洲专利分类表》查得,若同一专利申请案有多个分类号时，其中第一个称为主分类号，多个分类号之间可使用and、or、not 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group cn-peculiar">
							<label for="agent" class="col-xs-4 control-label">代理人：</label>
							<div class="col-xs-8">
						    	{{ Form::email('ics', null, ['class'=>'form-control' ,'id'=>'agent' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>专利代理人示例：</b>
									<P>专利代理人中包含“王二”时，应键入：<b>王二</b></P>
									<mark>代理人中包含的多个检索词之间可以使用 and、or、not 连接</mark>
								</div>
						    </div>
						</div>
					</div>
					<!-- 右侧 -->
					<div class="col-xs-6 hsd-right">
						<div class="form-group">
							<label for="digest" class="col-xs-4 control-label">摘要：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'digest' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
						    		<b>摘要示例：</b>
						    		<P>已知摘要中包含计算机和应用，可键入：<b>计算机 and 应用</b></P>
									<mark>摘要字段内各检索词之间可以使用 and、or、not 连接</mark>
						    	</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="mainsortNumber" class="col-xs-4 control-label">主分类号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'mainsortNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
						    		<b>国际主分类号示例：</b>
						    		<P>1、分类号为G06F17/30：<b>G06F17/30</b></P>
						    		<P>2、分类号开头为G06F：<b>G06F</b></P>
									<mark>专利分类号可由《国际专利分类表》查得，若同一专利申请案有多个分类号时，其中第一个称为主分类号，多个分类号之间可使用 and、or 连接</mark>
						    	</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="requestDate" class="col-xs-4 control-label">申请日：</label>
							<div class="col-xs-8">
						    	{{ Form::email('ics', null, ['class'=>'form-control' ,'id'=>'requestDate' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
						    		<b>申请日示例：：</b>
						    		<P>1、2011年01月31日：<b>20110101</b></P>
									<P>2、2011年12月：<b>201113</b></P>
						    		<P>3、2011年：<b>2011</b></P>
						    		<P>4、2011年到2010年：<b>[2011 to 2015]</b></P>
									<mark>多个申请号可以使用 or 连接</mark>
						    	</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="publicDate" class="col-xs-4 control-label">公开/公告日：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'publicDate' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
						    		<b>公开/公告日示例：：</b>
						    		<P>1、2011年01月31日：<b>20110101</b></P>
									<P>2、2011年12月：<b>201113</b></P>
						    		<P>3、2011年：<b>2011</b></P>
						    		<P>4、2011年到2010年：<b>[2011 to 2015]</b></P>
									<mark>多个公开日可以使用 or 连接</mark>
						    	</div>
						    </div>
						</div>
						<div class="form-group">
							<label for="proposer" class="col-xs-4 control-label">申请/专利权人：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'proposer' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>申请/专利权人示例：</b>
									<P>已知申请人/专利权人包含“王二”时，应键入：<b>王二</b></P>
									<mark>多个检索词之间可进行and、or、not运算</mark>
								</div>
						    </div>
						</div>
						<div class="form-group cn-peculiar">
							<label for="adr" class="col-xs-4 control-label">地址：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'adr' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>地址示例：</b>
									<P>地址中包含“陕西省西安市”，可键入：<b>陕西省西安市</b></P>
								</div>
						    </div>
						</div>
						<div class="form-group cn-peculiar">
							<label for="agency" class="col-xs-4 control-label">专利代理机构：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'agency' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>专利代理机构示例：</b>
									<P>已知专利代理机构中包含“百科”，可键入：<b>百科</b></P>
									<mark>专利代理机构中包含的多个检索词之间可以使用 and、or、not 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group fn-peculiar">
							<label for="USA-msNumber" class="col-xs-4 control-label">美国主分类号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'USA-msNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>美国主分类号示例：</b>
									<P>分类号为127/15：<b>127/15</b></P>
									<P>分类号开头为127：<b>127</b></P>
									<mark>专利分类号可由《美国专利分类表》查得,若同一专利申请案有多个分类号时，其中第一个称为主分类号，多个分类号之间可使用and、or、not 连接</mark>
								</div>
						    </div>
						</div>
						<div class="form-group fn-peculiar">
							<label for="Europe-msNumber" class="col-xs-4 control-label">欧洲主分类号：</label>
							<div class="col-xs-8">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'Europe-msNumber' ,'placeholder'=>'']) }}
						    	<div class="hint-box">
							    	<b>欧洲主分类号示例：</b>
									<P>分类号为127/15：<b>127/15</b></P>
									<P>分类号开头为127：<b>127</b></P>
									<mark>专利分类号可由《欧洲专利分类表》查得,若同一专利申请案有多个分类号时，其中第一个称为主分类号，多个分类号之间可使用and、or、not 连接</mark>
								</div>
						    </div>
						</div>
					</div>
				</div>
				<div class="high-search-ads-btn">
					<img src="{{ asset('modules/search/images/ads.png') }}" />
				</div>
			{{ Form::close() }}
			<div class="edit-searches row">
				<b class="es-title">生成可编辑检索式</b>
				<div class="es-inputBox"></div>
				<ul class="list-inline list-unstyled mb0 es-father ml0">
					<li class="esiB-field">专利字段列表</li>
					<li>NOT</li>
					<li>AND</li>
					<li>OR</li>
					<li>TO</li>
					<li>( )</li>
					<li>[ ]</li>
					<li>*</li>
					<li>？</li>
				</ul>
				<div class="field-content">
					<span class="close-icon"></span>
					<ul class="list-inline list-unstyled mb0 ml0 es-child">
						<li><span>an：</span>申请号</li>
						<li><span>ad：</span>申请日</li>
						<li><span>pn：</span>公开/公告号</li>
						<li><span>pd：</span>公开/公告日</li>
						<li><span>pr：</span>优先权</li>
						<li><span>ic1：</span>主分类号</li>
						<li><span>ic2：</span>分类号</li>
						<li><span>in：</span>发明/设计人</li>
						<li><span>pa：</span>申请/专利权人</li>
						<li><span>ti：</span>发明名称</li>
						<li><span>ab：</span>摘要</li>
						<li><span>ac：</span>主权项</li>
						<li><span>ct：</span>范畴分类号</li>
						<li><span>aa：</span>地址</li>
					</ul>
				</div>
				<div class="btn-group col-xs-4 col-xs-offset-8">
					<button type="submit" class="btn">检索</button>
					<button type="reset" class="btn">重置</button>
				</div>
			</div>
		</div>
	</div>
</div>
@stop