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
				<li class="active"><a href="javascript:;">正在议价</a>
				</li>
				<li><a href="javascript:;">结束的议价</a>
				</li>
			</ul>
			<ul class="tabContent  row mt30">
				<!--正在议价列表-->
				<li class="col-xs-12" style="display:inline-block;"> 
					<table class="table table-condensed">
				      <thead>
				        <tr>
				          <th>交易品名称</th>
				          <th>交易类型</th>
				          <th>参考价</th>
				          <th>我的最新报价</th>
				          <th>买家最新出价</th>
				          <th>操作</th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/>石油企业商标</a></td>
				          <td>燃料油脂</td>
				          <td>1.2万</td>
				          <td>1.2万</td>
				          <td>2.0万</td>
				          <td><i class="icon icon-eye-open"></i> | <i class="icon  icon-edit"></i><br /><i class="icon icon-remove"></i></td>
				        </tr>
				        <tr>
				          <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/>石油企业商标</a></td>
				          <td>燃料油脂</td>
				          <td>1.2万</td>
				          <td>1.2万</td>
				          <td>2.0万</td>
				          <td><i class="icon icon-eye-open"></i> | <i class="icon  icon-edit"></i><br /><i class="icon icon-remove"></i></td>
				        </tr>
				        <tr>
				          <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/>石油企业商标</a></td>
				          <td>燃料油脂</td>
				          <td>1.2万</td>
				          <td>1.2万</td>
				          <td>2.0万</td>
				          <td><i class="icon icon-eye-open"></i> | <i class="icon  icon-edit"></i><br /><i class="icon icon-remove"></i></td>
				        </tr>
				      </tbody>
				    </table>
				</li>
				<!--结束的议价列表-->
				<li class="col-xs-12">  
					<table class="table table-condensed">
				      <thead>
				        <tr>
				          <th>交易品名称</th>
				          <th>交易类型</th>
				          <th>参考价</th>
				          <th>我的最新报价</th>
				          <th>买家最新出价</th>
				          <th>操作</th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/>石油企业商标</a></td>
				          <td>燃料油脂</td>
				          <td>1.2万</td>
				          <td>1.2万</td>
				          <td>2.0万</td>
				          <td><i class="icon icon-eye-open"></i> | <i class="icon  icon-edit"></i><br /><i class="icon icon-remove"></i></td>
				        </tr>
				        <tr>
				          <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/>石油企业商标</a></td>
				          <td>燃料油脂</td>
				          <td>1.2万</td>
				          <td>1.2万</td>
				          <td>2.0万</td>
				          <td><i class="icon icon-eye-open"></i> | <i class="icon  icon-edit"></i><br /><i class="icon icon-remove"></i></td>
				        </tr>
				        <tr>
				          <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/>石油企业商标</a></td>
				          <td>燃料油脂</td>
				          <td>1.2万</td>
				          <td>1.2万</td>
				          <td>2.0万</td>
				          <td><i class="icon icon-eye-open"></i> | <i class="icon  icon-edit"></i><br /><i class="icon icon-remove"></i></td>
				        </tr>
				      </tbody>
				    </table>
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
		$(function(){
			$("#product_imgs").uploadify({
	                'swf': "{{ asset('static/js/jquery/validate/uploadify.swf') }}",
	                'cancelImg': "{{ asset('static/js/jquery/validate/uploadify-cancel.png') }}",
	                'folder': 'UploadFile',
	                'queueID': 'fileQueue',
	                'auto': false,
	                'multi': true
	            });
	        $("#ad_imgs").uploadify({
	                'swf': "{{ asset('static/js/jquery/validate/uploadify.swf') }}",
	                'cancelImg':"{{ asset('static/js/jquery/validate/uploadify-cancel.png') }}",
	                'folder': 'UploadFile',
	                'queueID': 'fileQueue',
	                'auto': false,
	                'multi': true
	            });
	        $("#product_detail").wysiwyg();
		})
	</script>
@stop