@extends('search::patent.layouts.2columns-left')

@section('content')

<div class="container">
	<!-- ziye content header start -->
	<div class="zy-heading row IPC">
		<div class="logo col-xs-2 pl0">
			<a href="{{ route('search.patent.index') }}"><img src="{{ asset('modules/search/images/logo1.png')}}" /></a>
		</div>
		{{ Form::open(['route'=>'search.patent.retrieval.cnPatent','class'=>'form-inline col-xs-9 j-ajax-get', 'role'=>'from', 'id'=>'patent_search', 'method'=>'get']) }}
			<!-- 搜索框相关 -->
			<div class="search-box row ml0">
				<div class="form-group col-xs-4 pa0">
					<label class="sr-only" for="brandName">name</label>
					<input type="text" id="brandName" class="form-control" placeholder="">
				</div>
				<button type="button" class="btn btn-quiry ml6 col-xs-2 pa0" data-toggle="modal" data-target="#disclaimer-Modal">IPC分类检索</button>
				<div class="link col-xs-4">
					<ul class="list-inline list-unstyled mb0">
						<li><a href="{{ route('search.patent.retrieval') }}">高级检索</a></li>
						<li><a href="{{ route('search.patent.locarno') }}">Locarno分类检索</a></li>
					</ul>
				</div>
			</div>
			<div class="checkbox-gather">
				<ul class="list-inline list-unstyled mb0 cn-list">
					<li><span></span>输入关键字查分类号</li>
					<li><span></span>输入分类号查含义</li>
				</ul>
			</div>
		{{ Form::close() }}
	</div>
	<!-- content matter start -->
	<div class="matter">
		<div class="IPC-content zy-details">
			<div class="first"><i></i><span>A</span>人类生活必须
				<div style="padding-left:20px;"><i></i><span>A01</span>农业；林业；畜牧业；狩猎；诱捕；捕鱼
					<div><i></i><span>A01B</span>农业或林业的整地；一般农业机械或农具的部件、零件或附件(用于播种、种植或施厩肥的开挖沟穴或覆盖沟穴入A01C 5/00；收获根作物的机械入A01D；可变换成整地设备或能够整地的割草机入A01D 42/04；与整地机具联合的割草机入A01D 43/12；工程目的的整地入E01，E02，E21)
						<div><i></i><span>A01B1/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
						<div><i></i><span>A01B2/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
					</div>
					<div><i></i><span>A02B</span>农业或林业的整地；一般农业机械或农具的部件、零件或附件(用于播种、种植或施厩肥的开挖沟穴或覆盖沟穴入A01C 5/00；收获根作物的机械入A01D；可变换成整地设备或能够整地的割草机入A01D 42/04；与整地机具联合的割草机入A01D 43/12；工程目的的整地入E01，E02，E21)
						<div><i></i><span>A01B1/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
						<div><i></i><span>A01B2/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
					</div>
				</div>
				<div><i></i><span>A02</span>农业；林业；畜牧业；狩猎；诱捕；捕鱼
					<div><i></i><span>A01B</span>农业或林业的整地；一般农业机械或农具的部件、零件或附件(用于播种、种植或施厩肥的开挖沟穴或覆盖沟穴入A01C 5/00；收获根作物的机械入A01D；可变换成整地设备或能够整地的割草机入A01D 42/04；与整地机具联合的割草机入A01D 43/12；工程目的的整地入E01，E02，E21)
						<div><i></i><span>A01B1/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
						<div><i></i><span>A01B2/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
					</div>
					<div><i></i><span>A02B</span>农业或林业的整地；一般农业机械或农具的部件、零件或附件(用于播种、种植或施厩肥的开挖沟穴或覆盖沟穴入A01C 5/00；收获根作物的机械入A01D；可变换成整地设备或能够整地的割草机入A01D 42/04；与整地机具联合的割草机入A01D 43/12；工程目的的整地入E01，E02，E21)
						<div><i></i><span>A01B1/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
						<div><i></i><span>A01B2/00</span>手动工具(草坪修整机入A01G3/06)
							<div><span>A01B1/01</span>锹；铲</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop