@extends('search::patent.layouts.2columns-left')

@section('alert')

<!-- 专利申请中的弹出框 -->
<div id="ptApplication-Modal" class="ptApplication-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog row">
		<div class="modal-content pt-apply-box">
			<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        </div>
			<div class="modal-body">
				<!-- 申请信息 -->
				<div class="pta-info">
					<p class="lead">填写申请信息</p>
					{{ Form::open(['name'=>'myform', 'class'=>'form-horizontal j-ajax-get', 'method'=>'get', 'role'=>'form']) }}
						<div class="form-group">
							<label for="applyType" class="col-xs-3 control-label"><i>*</i>专利申请类型：</label>
							<div class="col-xs-4">
						    	<div class="dropdown-toggle" data-toggle="dropdown" id="applyType">所有分类<span class="icon"><span></span></span></div>
								<ul class="list-unstyled dropdown-menu mb0 ptType" role="menu">
									<li>所有分类</li>
									<li>发明专利</li>
									<li>实用新型专利</li>
									<li>外观专利</li>
								</ul>
						    </div>
						</div>
						<div class="form-group">
							<label for="applyName" class="col-xs-3 control-label"><i>*</i>申请专利名称：</label>
							<div class="col-xs-4">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'applyName' ,'placeholder'=>'']) }}
						    </div>
						</div>
						<div class="form-group">
							<label for="applyField" class="col-xs-3 control-label"><i>*</i>申请专利领域：</label>
							<div class="col-xs-9" id="applyField">
						    	<ul class="list-unstyled list-inline mb0 ptField">
									<li><span></span>机械</li>
									<li><span></span>化学</li>
									<li><span></span>电学</li>
									<li><span></span>电子通讯</li>
									<li><span></span>其他</li>
								</ul>
						    </div>
						</div>
						<div class="form-group">
							<label for="applyHonor" class="col-xs-3 control-label">申请资质：</label>
							<div class="col-xs-9" id="applyHonor">
						    	<ul class="list-unstyled list-inline mb0 ptHonor">
									<li><span></span>个人</li>
									<li><span></span>企业</li>
								</ul>
						    </div>
						</div>
					{{ Form::close() }}
				</div>
				<!-- 基本资料 -->
				<div class="pta-data">
					<p class="lead">填写基本资料</p>
					{{ Form::open(['name'=>'myform', 'class'=>'form-horizontal j-ajax-get', 'method'=>'get', 'role'=>'form']) }}
						<div class="form-group">
							<label for="pName" class="col-xs-3 control-label"><i>*</i>姓名：</label>
							<div class="col-xs-4">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'pName' ,'placeholder'=>'']) }}
						    </div>
						</div>
						<div class="form-group">
							<label for="pTel" class="col-xs-3 control-label"><i>*</i>联系电话：</label>
							<div class="col-xs-4">
						    	{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'pTel' ,'placeholder'=>'']) }}
						    </div>
						</div>
						<div class="form-group">
							<label for="pQQ" class="col-xs-3 control-label">Q&nbsp;&nbsp;Q：</label>
							<div class="col-xs-9">
								{{ Form::text('ics', null, ['class'=>'form-control col-xs-5' ,'id'=>'pQQ' ,'placeholder'=>'']) }}
						    	<p class="form-control-static col-xs-7">将用于专利文件传输,建议填写!</p>
						    </div>
						</div>
						<div class="form-group">
							<label for="pEmail" class="col-xs-3 control-label">Email：</label>
							<div class="col-xs-9">
						    	{{ Form::email('ics', null, ['class'=>'form-control col-xs-5' ,'id'=>'pEmail' ,'placeholder'=>'']) }}
						    	<p class="form-control-static col-xs-7">将用于专利文件传输,建议填写!</p>
						    </div>
						</div>
					{{ Form::close() }}
				</div>
				<button type="button" class="btn tjsq-btn">提交申请</button>
				<!-- 提交成功提醒框 -->
			    <div class="pt-tijiao-box">
			        <div class="pttj-header">
			        	<button type="button" class="close"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
				        <h4 class="pttj-title ma0 mb0" id="myModalLabel">www.upipr.com上的网页显示</h4>
			        </div>
			        <div class="pttj-body">
			        	<p>提交成功，我们的工作人员将会尽快联系您，请耐心等待！</p>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
	
@stop

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
		{{ Form::close() }}
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="zy-details pt-guide">
			<div class="special-title">
				专利申请
			</div>
			<div class="pt-apply">
				<div class="hd">
					<ul class="list-unstyled mb0">
						<li><span>服务类型</span></li>
						<li><span>常见问题</span></li>
					</ul>
				</div>
				<div class="bd">
					<div class="a-lh a-service">
						<div class="row mr0 ml0">
							<!-- 链接到客服的列表 -->
							<div class="cly-content col-xs-4 pa0">
								<h4><em></em>国内专利服务</h4>
								<div class="cly-detail">
									<ul class="list-unstyled mb0">
										<li><a href="javascript:void(0);">发明专利申请</a></li>
										<li><a href="javascript:void(0);">实用新型专利</a></li>
										<li><a href="javascript:void(0);">外观专利申请</a></li>
										<li><a href="javascript:void(0);">审查意见答复</a></li>
										<li><a href="javascript:void(0);">专利申请复审</a></li>
									</ul>
								</div>
								<h4><em></em>国际专利服务</h4>
								<div class="cly-detail">
									<ul class="list-unstyled mb0">
										<li><a href="javascript:void(0);">PCT途径专利申请</a></li>
										<li><a href="javascript:void(0);">巴黎公约途径申请</a></li>
										<li><a href="javascript:void(0);">香港专利申请</a></li>
										<li><a href="javascript:void(0);">美国专利申请</a></li>
									</ul>
								</div>
								<h4><em></em>专利管理交易</h4>
								<div class="cly-detail">
									<ul class="list-unstyled mb0">
										<li><a href="javascript:void(0);">专利许可合同备案</a></li>
										<li><a href="javascript:void(0);">专利著录项目变更</a></li>
										<li><a href="javascript:void(0);">专利权利恢复</a></li>
										<li><a href="javascript:void(0);">专利年费代缴</a></li>
										<li><a href="javascript:void(0);">专利评价报告</a></li>
									</ul>
								</div>
								<h4><em></em>专利案件维权</h4>
								<div class="cly-detail">
									<ul class="list-unstyled mb0">
										<li><a href="javascript:void(0);">国内专利维权</a></li>
										<li><a href="javascript:void(0);">专利无效宣告</a></li>
										<li><a href="javascript:void(0);">专利无效答辩</a></li>
									</ul>
								</div>
							</div>
							<!-- 领证通知模块相关 -->
							<div class="a-col-notice col-xs-8 pa0">
								<!-- 消息滚动 -->
								<div class="a-col-bd">
									<span class="acn-title">领证通知</span>
									<ul class="infoList mb0">
										<li>中国最的大知识产权服务平台</li>
										<li>中国最的大知识产权服务平台中国最的大知识产权服务平台</li>
										<li>中国最的大知识产权服务平台</li>
										<li>中国最的大知识产权服务平台中国最的大知识产权服务平台</li>
									</ul>
								</div>
								<!-- 查询表单 -->
								<div class="a-col-search">
									<form role="form">
										<div class="row ma0">
											<div class="form-group col-xs-9 pa0 mb0">
												<label class="sr-only" for="inputBox">input box</label>
												<input type="text" class="form-control" id="inputBox" placeholder="">
											</div>
											<button type="button" class="btn acs-btn col-xs-2" data-toggle="modal" data-target="#ptApplication-Modal">查询</button>
										</div>
										<div class="select-radio">
											<b class="acn-title">期望申请类型</b>
											<ul class="list-unstyled mb0 list-inline">
												<li><span></span>发明专利</li>
												<li><span></span>实用型专利</li>
												<li><span></span>外观专利</li>
											</ul>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="a-lh a-trouble">
						<div class="cly-content">
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
							<h4><em></em>授权需要的条件</h4>
							<div class="cly-detail">
								<p>根据《专利法》第二十二条的规定，授予专利权的发明和实用新型，应当具备新颖性、创造性和实用性。</p>
								<p>新颖性，是指该发明或者实用新型不属于现有技术；也没有任何单位或者个人就同样的发明或者实用新型在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公布的专利申请文件或者公告的专利文件中。</p>
								<p>创造性，是指与现有技术相比，该发明具有突出的实质性特点和显著的进步，该实用新型具有实质性特点和进步。</p>
								<p>实用性，是指该发明或者实用新型能够制造或者使用，并且能够产生积极效果。</p>
								<p>本法所称现有技术，是指申请日以前在国内外为公众所知的技术。</p>
								<p>根据《专利法》第二十三条的规定，授予专利权的外观设计，应当不属于现有设计；也没有任何单位或者个人就同样的外观设计在申请日以前向国务院专利行政部门提出过申请，并记载在申请日以后公告的专利文件中。授予专利权的外观设计与现有设计或者现有设计特征的组合相比，应当具有明显区别。授予专利权的外观设计不得与他人在申请日以前已经取得的合法权利相冲突。本法所称现有设计，是指申请日以前在国内外为公众所知的设计。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop