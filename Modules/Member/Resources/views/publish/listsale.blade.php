@extends('member::layouts.2columns-left')
@section('style')
    {{ HTML::style('static/css/jquery-ui-1.10.4.custom.min.css') }}
    {{ HTML::style('static/css/jquery.gritter.css') }}
    {{ HTML::style('static/css/daterangepicker.css') }}
    {{ HTML::style('static/js/jquery/fullcalendar/fullcalendar.css') }}
    {{ HTML::style('static/css/jqvmap.css') }}
    {{ HTML::style('static/css/jquery.easy-pie-chart.css') }}
    {{ HTML::style('static/css/select2.min.css') }}
    {{ HTML::style('static/css/uploadify.css') }}
    {{ HTML::style('static/css/font-awesome.css') }}
@stop
@section('leftbar')
	 @include('member::publish.partials.publish_sale_left')
@stop

@section('content')				
	<div class="identify whiteBg ml0">
		<i class="bao"></i><span class="orange">公司未认证，</span><span>柚皮网普通会员 <a href="" class="ocean">【购买柚皮通服务】</a></span>
	</div>
	<div class="row mt45">
		<div class="pad_15 ml15 whiteBg col-xs-12">
			<!--已发布卖品-->
			<ul class="tabHead1 mt20">
				<li 
					@if ($datas->goodscate=="logo")
						 class="active"
					@endif
				>
						 <a href="{{ route('member.publish.saler.list',[1,'logo']) }}">商标出售</a>
				</li>
				<li
					@if ($datas->goodscate=="patent")
						 class="active"
					@endif
				><a href="{{ route('member.publish.saler.list',[1,'patent']) }}">专利出售</a>
				</li>
				<li
					@if ($datas->goodscate=="copy")
						 class="active"
					@endif
				><a href="{{ route('member.publish.saler.list',[1,'copy']) }}">版权出售</a>
				</li>
				<li
					@if ($datas->goodscate=="domain")
						 class="active"
					@endif
				><a href="{{ route('member.publish.saler.list',[1,'domain']) }}">域名出售</a>
				</li>
			</ul>
			<ul class="tabContent  row mt30">
				<!--商标列表-->
				@include('member::publish.partials.saledatalist')
			</ul>
		</div>
	</div>
	
@stop
@section('script')
    {{ HTML::script('static/js/select2.full.js') }}
    <script src="http://s0.jmstatic.com/templates/jumei/js/jquery/placeholder.min.js"></script>
    {{ HTML::script('static/js/bootstrap/bootstrap.js') }}
    {{ HTML::script('static/js/jquery/wysiwyg/bootstrap-wysiwyg.js') }}
    {{ HTML::script('static/js/jquery/wysiwyg/jquery.hotkeys.js') }}
    {{ HTML::script('static/js/date.js') }}
    {{ HTML::script('static/js/daterangepicker.js') }}
    {{ HTML::script('static/js/jquery/gritter/jquery.gritter.js') }}
    {{ HTML::script('static/js/jquery/fullcalendar/fullcalendar.min.js') }}
    {{ HTML::script('static/js/jquery/charts/easypiechart/jquery.easy-pie-chart.js') }}
    {{ HTML::script('static/js/jquery/validate/jquery.validate.min.js') }}
	{{ HTML::script('modules/member/js/form-validate.js') }}
	<script type="text/javascript">
		var tm_classify=[];
		function deleteGoods(id){
			if (confirm("确认要删除？")){
				//alert(11);
           		var url = '{{ route("member.publish.saler.deletegoods") }}';
				$.getJSON(url,{id:id,downgoods:'{{ $datas->goodscate }}' },function(data){
			  		$('#data_'+id).remove();
				});	
       		}
		}
		function downGoods(id){
			//alert(id);
			if(confirm("你要下架该商品？")){
				var url = '{{ route("member.publish.saler.upanddown") }}';
				//alert(url);
				$.getJSON(url,{id:id,upanddown:0,goods:'{{ $datas->goodscate }}'},function(data){
					console.info(data);
				  	$('#data_'+id).remove();
				});	
			}
		}

	</script>
@stop