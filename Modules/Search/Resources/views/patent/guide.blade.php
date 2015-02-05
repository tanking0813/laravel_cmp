@extends('search::patent.layouts.2columns-left')

@section('content')

<div class="container">
	<!-- ziye content header start -->
	<div class="zy-heading row">
		<div class="logo col-xs-2 pl0">
			<a href="{{ route('search.patent.index') }}"><img src="{{ asset('modules/search/images/logo1.png')}}" /></a>
		</div>
		{{ Form::open(['name'=>'myform', 'class'=>'form-inline col-xs-9 j-ajax-get', 'method'=>'get', 'role'=>'form']) }}	
			<!-- 搜索框相关 -->
			<div class="search-box row ml0">
				<div class="heading form-group col-xs-2 pa0">
					<h4 class="cn">中国专利库</h4>
					<h4 class="fn">国外专利库</h4>
					<span></span>
				</div>
				<div class="form-group col-xs-4 pa0">
					<label class="sr-only" for="brandName">name</label>
					{{ Form::text('ics', null, ['class'=>'form-control' ,'id'=>'brandName' ,'placeholder'=>'']) }}
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
				</ul>
			</div>
		{{ Form::close() }}
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="zy-details pt-guide">
			<div class="special-title">
				专利指南
			</div>
			<!-- 专利指南详情 -->
			<div class="pt-g-title">
					<p class="lead">第一步、确定专利申请的类型</p>
				</div>
				<div class="pt-g-parag">
					<p>专利分发明专利、实用新型专利和外观设计专利三种类型。</p>
					<p>发明专利：针对产品、方法或者改进所提出的新的技术方案，可以申请发明专利；</p>
					<p>实用新型专利：针对产品的形状、构造或者其结合所提出的适于实用的新的技术方案，可以申请实用新型专利；</p>
					<p>外观设计专利：针对产品的形状、图案或者其结合以及色彩与形状、图案的结合所作出的富有美感并适于工业应用的新设计，可以申请外观设计专利。</p>
					<p><mark>如果您不确定申请何种类型专利，可与我公司专利代理人沟通后确认。</mark></p>
				</div>
				<div class="pt-g-title">
					<p class="lead">第二步、整理相关技术资料，提交专利技术交底书</p>
				</div>
				<div class="pt-g-parag">
					<p>专利技术交底书由客户方的相关技术人员提供，技术交底书包括发明创造的名称、所属技术领域、背景技术、发明具体内容等，资料的提供可以由我方的专利代理人介入协助来完成. 下载专利技术交底书（右键点击另存为）</p>
				</div>
				<div class="pt-g-title">
					<p class="lead">第三步、双方签订代理委托协议，我方开始撰写全套专利申请文件</p>
				</div>
				<div class="pt-g-parag">
					<p>我方专利代理人在拿到专利技术交底书之后，进行相关的检索和分析，开始撰写专利申请文件，期间会和发明人进行多次沟通和交流（可以通过电话、邮件、QQ、MSN、面谈等多种方式），以确保专利申请文件完整无误的表达发明人的发明创造。</p>
					<p>专利申请文件的撰写时间一般在1-2周之内完成，视专利复杂程度情况而定。</p>
					<p><mark>【专利申请文件的填写和撰写有严格特定的要求，申请人可以自行填写或撰写，也可以委托专利代理机构代为办理。尽管委托专利代理是非强制性的，但是考虑到精心撰写申请文件的重要性，以及审批程
序的法律严谨性，对经验不多的申请人来说，委托专利代理是值得提倡的。】</mark></p>
				</div>
				<div class="pt-g-title">
					<p class="lead">第四步、向国家专利局提交专利申请文件，拿到专利受理通知书</p>
				</div>
				<div class="pt-g-parag">
					<p>在客户确认专利申请文件没问题之后，我方向国家专利局提交全套专利申请文件，拿到专利受理通知书。</p>
				</div>
				<div class="pt-g-title">
					<p class="lead">第五步、 客户领取专利受理通知书，专利申请阶段结束</p>
				</div>
				<div class="pt-g-parag">
					<p>客户领取专利受理通知书，专利申请阶段的工作就结束了。</p>
				</div>
				<div class="pt-g-title">
					<p class="lead">第六步、按时缴纳年费</p>
				</div>
				<div class="pt-g-parag">
					<p>专利申请相关知识：</p>
					<p><mark>如何申请专利<span>专利申请时间</span><span>专利申请费用</span><span>申请专利的费用</span><span>专利技术交底书</span></mark></p>
				</div>
				<div class="pt-g-title">
					<p class="lead">联系我们</p>
				</div>
				<div class="pt-g-parag">
					<p>如果有上述业务需要，随时方便拨打咨询电话：</p>
					<p>电话：<b>029-33215579 李先生</b></p>
					<p>MSN：<b>lixianjin@live.cn</b></p>
					<p>专利申请咨询QQ：<b> 958981109</b></p>
					<p>邮件：<b>info@sinoip.cn</b></p>
					<br />
					<p>我们的服务宗旨是：在知识产权咨询服务方面成为企业的助手、企业的朋友、企业的最佳合作伙伴。</p>
					<p>我们拥有完善的专家体系；</p>
					<p>我们熟知业务中的全部操作细节；</p>
					<p>我们的专业服务能够提高您的成功率</p>
					<p>我们拥有协助企业获得成功的丰富经验；</p>
					<p>我们能够帮助您在合理的成本范围内完成您想完成的工作；</p>
				</div>
		</div>
	</div>
</div>

@stop