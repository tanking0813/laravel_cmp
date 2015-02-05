@extends('member::layouts.2columns-left')
@section('style')
    {{ HTML::style('static/css/jquery-ui-1.10.4.custom.min.css') }}
    {{ HTML::style('static/css/jquery.gritter.css') }}
    {{ HTML::style('static/css/daterangepicker.css') }}
    {{ HTML::style('static/js/jquery/fullcalendar/fullcalendar.css') }}
    {{ HTML::style('static/css/jqvmap.css') }}
    {{ HTML::style('static/css/uploadify.css') }}
    {{ HTML::style('static/js/jquery/datepicker/css/bootstrap-datetimepicker.min.css') }}
 	{{ HTML::style('static/css/jquery.easy-pie-chart.css') }}
    {{ HTML::style('static/css/select2.min.css') }}
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
			<!--我要发布-->
			<ul class="tabHead">
				<li class="active"><a href="{{ route('member.publish.saler.add',['logo']) }}" class="kuai1 tm">发布商标</a>
				</li>
				<li><a href="{{ route('member.publish.saler.add',['patent']) }}" class="kuai1 pat">发布专利</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['copy']) }}" class="kuai1 copy">发布版权</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['domain']) }}" class="kuai1 domain">发布域名</a>
				</li>
			</ul>
			<ul class="tabContent mt30">
				<li style="display:inline-block;">
			   {{ Form::model(isset($data)?$data:null,['route'=>['member.publish.saler.store','logo'], 'files'=> true,'id'=>"pub_tm",'class'=>"form-horizontal base" ,'novalidate'=>"novalidate"]) }}
							<!--商标名称-->
						<div class="form-group">
							<label class="col-xs-3 control-label">商标名称：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::hidden('id',null) }}
								{{ Form::text('title',null,['class'=>'form-control','id'=>'title','placeholder'=>'商标名称']) }}
							</div>
						</div>
						<!--商标分类-->
						<div class="form-group">
							<label class="col-xs-3 control-label">商标分类：<span class="orange">*</span>
							</label>
							<div class="col-xs-4"> 
							{{ Form::text('category_id',null,['class'=>'category_id form-control','id'=>'tm_classify','placeholder'=>'商标分类']) }}
								<div class="slideShow"></div>
							</div>
						</div>
						<!--商标注册号-->
						<div class="form-group">
							<label class="col-xs-3 control-label">商标注册号：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
							{{ Form::text('register_code',null,['class'=>'form-control','id'=>'register_code','placeholder'=>'商标注册号']) }}

								<!-- <input type="text" class="form-control" id="tm_zch" name="register_code" placeholder="商标注册号"> -->
							</div>
						</div>
						<!--组合类型-->
						<div class="form-group">
							<label class="col-xs-3 control-label">组合类型：<span class="orange">*</span>
							</label>
							<div class="col-xs-8">
						@foreach(Config::get('member::account.publish.brand.combine') as $k=>$v)
							 <label class="radio-inline">
                            	{{ Form::radio('combine',$k) }} {{ $v }}
                       		 </label>
						@endforeach
							</div>
						</div>
						<!--核定使用商标-->
						<div class="form-group">
							<label class="col-xs-3 control-label">核定使用商标：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
							{{ Form::text('server_list',null,['class'=>'form-control','id'=>'server_list','placeholder'=>'请输入服务列表']) }}
							</div>
							<label class="col-xs-2 orange control-label">！ 每项服务以分号分开</label>
						</div>
						<!--注册人-->
						<div class="form-group">
							<label class="col-xs-3 control-label">注册人：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::text('register',null,['class'=>'form-control','id'=>"register",'placeholder'=>'持有人名称（全称中文）']) }}
								<!-- <input type="text" class="form-control" id="tm_reg_person" name="tm_reg_person" placeholder="持有人名称（全称中文）"> -->
							</div>
						</div>
						<!--申请日期-->
						<div class="form-group">
							<label class="col-xs-3 control-label">申请日期：
							</label>
							<div class="col-xs-4">
								<div class="input-group date my-date">
		                            {{ Form::text('applicationdate',null,['class'=>'form-control','placeholder'=>"年-月-日"]) }}
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                        </div>
							</div>
						</div>
						<!--注册公告日-->
						<div class="form-group">
							<label class="col-xs-3 control-label">注册公告日：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								<div class="input-group date my-date">
		                            {{ Form::text('announced_date',null,['class'=>'form-control','id'=>"announced_date",'placeholder'=>"年-月-日"]) }}
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                        </div>
							</div>
						</div>
						<!--注册有效期-->
						<div class="form-group">
							<label class="col-xs-3 control-label">注册有效期：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								<!-- <div class="input-prepend input-group">
		                        <span class="add-on input-group-addon">
		                            <i class="glyphicon glyphicon-calendar"></i>
		                        </span>
							    {{ Form::text('validity_date','', ['class'=>'form-control my-date','id'=>'validity_date', 'placeholder'=>'结束年份']) }}
		                    	</div> -->
		                    	{{ Form::text('validity_date',null,['class'=>'form-control','id'=>"input5",'placeholder'=>"注册有效期"]) }}
							</div>
						</div>
						<!--商标所属地区-->
						<div class="form-group">
							<label class="col-xs-3 control-label">商标所属地区：<span class="orange">*</span>
							</label>
							<div class="col-xs-2">
								<select id="which" name="which" class="form-control">
									<option value="">选择国别...</option>
									<option value="">国内</option>
									<option value="">国际</option>
								</select>
							</div>
							<div class="col-xs-2">
								<select id="which1" name="which1" class="form-control" multiple="multiple">
									<option selected="selected">马德里</option>
									<option>单一国</option>
								</select>
							</div>
							<!--国家名称-->
							<div class="col-xs-2">
								<input type="text" class="form-control" id="for_country" name="for_country" placeholder="国家名称">
							</div>
						</div>
						<!--交易方式-->
						<div class="form-group">
							<label class="col-xs-3 control-label">交易方式：<span class="orange">*</span>
							</label>
							<div class="col-xs-6 sell_way">
								@foreach(Config::get('member::account.publish.brand.trading') as $k=>$v )
								<label class="checkbox-inline">
									{{ Form::checkbox("trading[]",$k,false,['id'=>$k]) }}{{ $v }}
									<!-- <input type="checkbox" id="transfer" name="trading[]" value='transfer'> 转让 -->
								</label>
								@endforeach
								<!-- <label class="checkbox-inline">
									<input type="checkbox" id="general" name="trading[]" value='general'> 普通许可
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="exclusive" name="trading[]" value='exclusive'> 独占许可
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" id="exclusiveUp" name="trading[]" value='exclusiveUp'> 排他许可
								</label> -->
								<div class="alert alert-success tipShow" role="alert">
									<ul>
										<li>
											<h3>转让</h3>
											<label class="col-xs-4 control-label">我希望收到的金额：</label>
											<div class="col-xs-4">
												<input type="text" class="form-control" id="mn" name="mn" placeholder="请输入金额">
											</div>
											<label class="checkbox-inline">
												<input type="checkbox" id="exclusiveUp" class="my" name="my"> 面议
											</label>
										</li>
										<li>
											<h3>普通许可</h3>
											<label class="col-xs-4 control-label">我希望收到的金额：</label>
											<div class="col-xs-4">
												<input type="text" class="form-control" id="mn" name="mn" placeholder="请输入金额">
											</div>
											<label class="checkbox-inline">
												<input type="checkbox" id="exclusiveUp" class="my" name="my"> 面议
											</label>
										</li>
										<li>
											<h3>独占许可</h3>
											<label class="col-xs-4 control-label">我希望收到的金额：</label>
											<div class="col-xs-4">
												<input type="text" class="form-control" id="mn" name="mn" placeholder="请输入金额">
											</div>
											<label class="checkbox-inline">
												<input type="checkbox" id="exclusiveUp" class="my" name="my"> 面议
											</label>
										</li>
										<li>
											<h3>排他许可</h3>
											<label class="col-xs-4 control-label">我希望收到的金额：</label>
											<div class="col-xs-4">
												<input type="text" class="form-control" id="mn" name="mn" placeholder="请输入金额">
											</div>
											<label class="checkbox-inline">
												<input type="checkbox" id="exclusiveUp" class="my" name="my"> 面议
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--标签-->
						<div class="form-group">
							<label class="col-xs-3 control-label">标签：
							</label>
							<div class="col-xs-6">
								{{ Form::select('tags[]',Config::get('member::account.publish.brand.tags'),null,['class'=>'label-tags form-control','multiple'=>"multiple"]) }}
								<!-- <select class="label-tags form-control" name="tags[]" multiple="multiple">
									<option selected>111</option>
								</select> -->
							</div>
						</div>
					<!--商标图片-->
						<!-- <div class="form-group">
							<label class="col-xs-3 control-label">商标图片：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								<input type="file" class="form-control" id="product_imgs" name="product_imgs" placeholder="商标图片">
							</div>
						</div> -->
						<!--广告图-->
						<!-- <div class="form-group">
							<label class="col-xs-3 control-label">广告图：
							</label>
							<div class="col-xs-6">
								<input type="file" class="form-control" id="ad_imgs" name="ad_imgs" placeholder="广告图">
								<label for="">建议上传包含商标LOGO的jpg、gif或png产品模拟包装图片，单个文件控制在1M以内；</label>
							</div>
						</div> -->
						<!--商标描述-->
						<div class="form-group">
							<label class="col-xs-3 control-label">商标描述：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								{{ Form::textarea('content',null,['class'=>'form-control','id'=>"content",'cols'=>10,'rows'=>10]) }}
							</div>
						</div>
						<!--提交-->
						<div class="form-group">
							<div class="col-xs-2 col-xs-offset-3">
								<!-- <input type="button" class="form-control btn btn-info" id="tm_submit" value="提交"> -->
								 {{ Form::submit('提交', ['class'=>'form-control btn btn-info','id'=>'tm_submit']) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-3">
								<p><span class="orange">！</span>知识产权交易与有形资产交易不同，若本站用户在未选择本站经纪人服务的条件下，自行进 行交易，本站对因交易行为产生的经济风险、法律风险、技术风险等风险概不负责。为您的安 全着想，本站强烈建议您选用本站的经纪人服务。
									<a href="" class="orange">（什么是经纪人服务？）</a>
								</p>
							</div>
						</div>
					{{ Form::close() }}
				</li>
			</ul>
		</div>
	</div>				
@stop
@section('script')
 	{{ HTML::script('static/js/jquery/select2/select2.full.min.js') }}
    {{ HTML::script('static/js/bootstrap/bootstrap.js') }}
    {{ HTML::script('static/js/jquery/datepicker/js/bootstrap-datetimepicker.js') }}
	{{ HTML::script('static/js/jquery/datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js') }}
	{{ HTML::script('static/js/date.js') }}
	{{ HTML::script('static/js/daterangepicker.js') }}
	{{ HTML::script('static/js/jquery/validate/jquery.validate.min.js') }}
	{{ HTML::script('modules/member/js/form-validate.js') }}
<script type="text/javascript">
	//daterange
	$('input[name="validity_date"]').daterangepicker(); 	
	var tm_classify = [
			@foreach($logocate as $k=>$v)
				{ "value":"{{ $v['label'] }}","id":"{{ $k }}" },
			@endforeach 
			];
	var obj =eval(tm_classify);  
	//alert(obj.length);
	for(var i = 0;i<obj.length;i++){
			$("#tm_classify").siblings(".slideShow").append("<a href='javascript:;'>"+obj[i].value+"-"+obj[i].id+"</a>"); 
		}
</script>
@stop	