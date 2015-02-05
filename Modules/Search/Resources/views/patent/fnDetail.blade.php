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
					<span>[欧专] </span><span>Shoe sole with improved dual energy management system</span>
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
						<li><span>专利全文</span></li>
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
									<p>申请日：<span class="requestDate"><a href="{{ route('search.patent.retrieval.fnPatent') }}">2005-08-25</a></span></p>
									<p>公开/公告日：<span class="publicDate"><a href="{{ route('search.patent.retrieval.fnPatent') }}">2006-03-22</a></span></p>
									<p>发明/设计人：<span class="designer"><a href="{{ route('search.patent.retrieval.fnPatent') }}">KAELIN, FRANZ-XAVER KARL ; NORTON, DANIEL EUGENE ; PARK, KWANG HO ; KRABBE, BERTHOLD, DR. ; PARK KWANG HO C O ADIDAS ASIA ; NORTON DANIEL EUGENE ; LUTHI, SIMON ; LUTHI SIMON ; KAELIN FRANZ-XAVER KARL ; KRABBE BERTHOLD DR</a></span></p>
									<p>分类号：<span class="sortNumber"><a href="{{ route('search.patent.retrieval.fnPatent') }}">A63B41/02 ; A63B43/00</a></span></p>
									<p>欧洲分类号：<span class="Europe-sNumber">暂无信息 </span></p>
									<p>美国分类号：<span class="USA-sNumber">3642294 ; 3642305 ; 3642319 ; 3642381 ; 3642382 ; 36424294 ; 3642624 ; 3642628 ; 3642814 ; 3642844 ; 3649279 ; 36492798 ; 36493103 ; 36493146 ; 36494064 ; 36494067 ; 3649462</span></p>
								</div>
								<div class="jb-right col-xs-6 pa0">
									<p>专利号：<span class="patentNumber">US052629260</span></p>
									<p>公开/公告号：<span class="publicNumber"><a href="{{ route('search.patent.retrieval.fnPatent') }}">CN1748817</a></span></p>
									<p>申请/专利权人：<span class="proposer"><a href="{{ route('search.patent.retrieval.fnPatent') }}">阿迪达斯国际经营管理有限公司</a></span></p>
									<p>主分类号：<span class="mainsortNumber"><a href="{{ route('search.patent.retrieval.fnPatent') }}">G06F9/06</a></span></p>
									<p>欧洲主分类号：<span class="Europe-msNumber">暂无信息 </span></p>
									<p>美国主分类号：<span class="USA-msNumber">3642292</span></p>
									<p>优先权：<span class="priority">19850830 GBX8521672</span></p>
								</div>
							</div>
							<!-- 摘要 -->
							<div class="abstract-info row a-lh-box ma0">
								<p class="lead">【摘要】：</p>
								<div class="astr-left col-xs-6 ai-parag pa0">
									<p>The present invention relates to sole unit for shoes, in particular sports shoes, comprising in horizontal direction at least two areas, wherein the first area (60) extends over the forefoot area and the second (80) over the rearfoot area, wherein the first area comprises an elastic material having an energy loss not exceeding 27%. According to a preferred embodiment, the second area additionally comprises a viscous material having an energy loss of at least 55%. According to yet another embodiment of the invention, the difference between the second and the first energy loss of the second and first areas </p>
								</div>
								<div class="astr-right col-xs-6 ai-img pa0">
									<img src="{{ asset('modules/search/images/pt-img.jpg') }}" />
								</div>
							</div>
							<!-- 引证文献 -->
							<div class="quote-info a-lh-box">
								<p class="lead">【引证文献】：</p>
								<div class="qi-parag">
									<p>专利引证信息： 暂无专利引证信息！</p>
									<p>非专利引证信息： 暂无非专利引证信息！</p>
								</div>
							</div>
							<!-- 同族专利 -->
							<div class="phrator-info a-lh-box">
								<p class="lead">【同族专利】：</p>
								<div class="pi-parag">
									<p>暂无同族信息！</p>
								</div>
							</div>
							<!-- 信息查询 -->
							<div class="phrator-info a-lh-box">
								<p class="lead">【信息查询】：</p>
								<div class="pi-parag">
									<ul class="list-inline list-unstyled mb0">
										<li><a href="javascript:void(0);">详细信息</a></li>
										<li><a href="javascript:void(0);">法律状态</a></li>
									</ul>
								</div>
							</div>
							<!-- 网页搜索 -->
							<div class="web-info a-lh-box">
								<p class="lead">【网页搜索】：</p>
								<div class="wi-parag">
									<p><img src="{{ asset('modules/search/images/baidu.jpg') }}" /><a href="javascript:void(0);"> Sony Computer Entertainment Inc.(Minato-ku,JP)</a></p>
								</div>
							</div>
							<!-- 学术搜索 -->
							<div class="science-info a-lh-box">
								<p class="lead">【学术搜索】：</p>
								<div class="si-parag">
									<p><img src="{{ asset('modules/search/images/google.jpg') }}" /><a href="javascript:void(0);"> SCREEN DISPLAY PROGRAM, COMPUTER READABLE RECORDING MEDIUM RECORDED WITH SCREEN DISPLAY PROGRAM, SCREEN DISPLAY APPARATUS, PORTABLE TERMINAL APPARATUS, AND SCREEN DISPLAY METHOD</a></p>
								</div>
							</div>
						</div>
					</div>
					<!-- 专利全文 -->
					<div class="a-lh apt-sq-fullText">
						<div class="ptD-public ptD-pimg">
							<img src="{{ asset('modules/search/images/patent.jpg') }}" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop