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
		<i class="bao"></i><span class="orange">公司未认证，</span><span>知盛网普通会员 <a href="" class="ocean">【购买知盛通服务】</a></span>
	</div>
	<div class="row mt45">
		<div class="pad_15 ml15 whiteBg col-xs-12">
			<!--已发布卖品-->
			<ul class="tabHead1 mt20">
				<li 
					@if ($datas->goodscate=='logo')
						class="active"
					@endif
					><a href="{{ route('member.publish.saler.list',[0,'logo']) }}">商标出售</a>
				</li>
				<li
					@if ($datas->goodscate=='patent')
						class="active"
					@endif
				><a href="{{ route('member.publish.saler.list',[0,'patent']) }}">专利出售</a>
				</li>
				<li
					@if ($datas->goodscate=='copy')
						class="active"
					@endif
				><a href="{{ route('member.publish.saler.list',[0,'copy']) }}">版权出售</a>
				</li>
				<li
					@if ($datas->goodscate=='domain')
						class="active"
					@endif
				><a href="{{ route('member.publish.saler.list',[0,'domain']) }}">域名出售</a>
				</li>
			</ul>
			<ul class="tabContent  row mt30">
				<!--商标列表-->
				<li class="col-xs-12" style="display:inline-block;">
					<ul class="subTabHead">
						<li class="active" ><a href="javascript:;" class='unpublish' >待发布:</a>
						</li>
						<li ><a href="javascript:;" class='expire'>已过期</a>
						</li>
					</ul>
					<ul class="subTabContent">
						<li style="display:block;">
							<table id='unpublish' class="table table-condensed">
							</table>
						</li>
						<li> 
							<table id='expire' class="table table-condensed" >
								
							</table>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
@stop				
@section('script')
    {{ HTML::script('static/js/select2.full.js') }}
    <script src="http://s0.jmstatic.com/templates/jumei/js/jquery/placeholder.min.js"></script>
    {{ HTML::script('static/js/bootstrap/bootstrap.js') }}
    {{ HTML::script('static/js/jquery/uploadify/jquery.uploadify.js') }}
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
			
		$(function(){
			var url = '{{ route("member.publish.saler.ajaxpagelist") }}';
			$.getJSON(url,{type:'unpublish',goodscate:'{{ $datas->goodscate }}'},function(data){
		  		$('#unpublish').html(data.data);
			});	
		});
		$('.unpublish').click(function(){
			var url = '{{ route("member.publish.saler.ajaxpagelist") }}';
			$.getJSON(url,{type:'unpublish', goodscate:'{{ $datas->goodscate }}'},function(data){
		  		$('#unpublish').html(data.data);
			});	
		});
		$('.expire').click(function(){
			var url = '{{ route("member.publish.saler.ajaxpagelist") }}';
			$.getJSON(url,{type:'expire', goodscate:'{{ $datas->goodscate }}'},function(data){
				//console.info(data);
		  		$('#expire').html(data.data);
			});	
		});
		function deleteGoods(id){
			if (confirm("确认要删除？")){
           		var url = '{{ route("member.publish.saler.deletegoods") }}';
				$.getJSON(url,{id:id,downgoods:'{{ $datas->goodscate }}' },function(data){
			  		$('#data_'+id).remove();
				});	
       		}
		}
		function upGoods(id){
			if(confirm("你要上架架该商品？")){
				var url = '{{ route("member.publish.saler.upanddown") }}';
				$.getJSON(url,{id:id,upanddown:1,goods:'{{ $datas->goodscate }}'},function(data){
				  	$('#data_'+id).remove();
				});	
			}

		}
		function goodslist(url){
			var index = $('.subTabHead').children(".active").index();
			if (index == 0){
   				var type = "unpublish";
   			}else{
   				var type = "expire"	;
   			};
			$.getJSON(url,{type:type, goodscate:'{{ $datas->goodscate }}'},function(data){
				//console.info(data);
				$("#"+type).html(data.data);
			})
		}
		
	</script>
@stop