@extends('search::patent.layouts.2columns-left')

@section('content')

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
		{{ Form::close() }}
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="zy-details">
			<!-- 对比内容 -->
			<div class="pt-contrast">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="ptc-items">对比项目</th>
							<th>专利1<span>&times;</span></th>
							<th>专利2<span>&times;</span></th>
							<th>专利3<span>&times;</span></th>
						</tr>
					</thead>
					<tbody>
						<tr class="ptc-i-title">
							<td></td>
							<td>中国台湾专利<a href="{{ route('search.patent.retrieval.cnDetail') }}">阅读全文</a></td>
							<td>中国台湾专利<a href="{{ route('search.patent.retrieval.cnDetail') }}">阅读全文</a></td>
							<td>中国台湾专利<a href="{{ route('search.patent.retrieval.cnDetail') }}">阅读全文</a></td>
						</tr>
						<tr>
							<td>申请（专利）号：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>申请日：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>公开/公告号：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>公开/公告日：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>法律状态：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>专利名称：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>摘要：</td>
							<td>本发明适用于计算机领域，提供了一种计算机系统及其用户的身份识别方法和装置，该方法包括下述步骤：在BIOS上电自检过程中驱动生物信息处理芯片，并在BIOS上电自检完成后，在读取操作系统启动文件前，控制计算机系统进入保护状态，并产生身份识别命令；生物信息处理芯片响应身份识别命令，采集计算机用户的生物信息，将采集的生物信息与预先存储在生物信息处理芯片中的生物模板信息进行比对；产生生物信息比对结果；根据比对结果解除对计算机系统的保护，读取操作系统启动文件并启动操作系统，或者保持计算机系统的保护状态。本发明实施例可以极大的提高计算机系统的安全性。</td>
							<td>本发明适用于计算机领域，提供了一种计算机系统及其用户的身份识别方法和装置，该方法包括下述步骤：在BIOS上电自检过程中驱动生物信息处理芯片，并在BIOS上电自检完成后，在读取操作系统启动文件前，控制计算机系统进入保护状态，并产生身份识别命令；极大的提高计算机系统的安全性。</td>
							<td>生物信息处理芯片响应身份识别命令，采集计算机用户的生物信息，将采集的生物信息与预先存储在生物信息处理芯片中的生物模板信息进行比对；产生生物信息比对结果；根据比对结果解除对计算机系统的保护，读取操作系统启动文件并启动操作系统，或者保持计算机系统的保护状态。本发明实施例可以</td>
						</tr>
						<tr>
							<td>摘要附图：</td>
							<td><img src="{{ asset('modules/search/images/pic2.jpg') }}" /></td>
							<td><img src="{{ asset('modules/search/images/pic1.jpg') }}" /></td>
							<td><img src="{{ asset('modules/search/images/pic.jpg') }}" /></td>
						</tr>
						<tr>
							<td>申请（专利权）人：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>发明（设计）人：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>地址：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>国省代码：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>主分类号：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>分类号：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
						<tr>
							<td>优先权：</td>
							<td>TW001289</td>
							<td>TW001289</td>
							<td>TW001289</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop