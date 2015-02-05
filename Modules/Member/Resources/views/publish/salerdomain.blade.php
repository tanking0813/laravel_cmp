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
				<li ><a href="{{ route('member.publish.saler.add',['logo']) }}" class="kuai1 tm">发布商标</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['patent']) }}" class="kuai1 pat">发布专利</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['copy']) }}" class="kuai1 copy">发布版权</a>
				</li>
				<li class="active"><a href="{{ route('member.publish.saler.add',['domain']) }}" class="kuai1 domain">发布域名</a>
				</li>
			</ul>
			<ul class="tabContent mt30">

				<!--发布域名-->
				<li style="display:list-item;">
{{ Form::model(isset($data)?$data:null,['route'=>['member.publish.saler.store','domain'], 'files'=> true,'id'=>"pub_domain",'class'=>"form-horizontal base" ,'novalidate'=>"novalidate"]) }}
						<label for="" class="col-xs-offset-3 mb15">请参照您的域名填写以下内容</label>
						<!--域名-->
						<div class="form-group">
							<label class="col-xs-3 control-label">域名：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::text('domain',null,['class'=>'form-control','id'=>"domain_name",'placeholder'=>'域名']) }}
								<!--<input type="text" class="form-control" id="domain_name" name="domain_name" placeholder="域名">-->							
							</div> 
						</div>
						<!--域名类型-->
						<div class="form-group">
							<label class="col-xs-3 control-label">域名类型：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::text('domainsuffix',null,['class'=>'form-control','id'=>"domain_type",'placeholder'=>'域名类型']) }}
							</div>
						</div>
						<div class="form-group domain_list" style="display:none;"> 
							<div class="col-xs-8 col-xs-offset-3">  
								<div class="foriegn">
									<h3>英文域名</h3>
								@foreach(Config::get("member::account.publish.domain.domainsuffix.en_domainsuffix") as $k=>$v)
								<label class="checkbox-inline">
								{{ Form::checkbox('sex_domain[]',$k,false,['id'=>'transfer'])  }} {{ $v }}

								</label>
								@endforeach
								</div>
								
								<div class="zw">
									<h3>中文域名</h3>
									@foreach(Config::get("member::account.publish.domain.domainsuffix.ch_domainsuffix") as $k=>$v)
										<label class="checkbox-inline">
										{{ Form::checkbox('sex_domain[]',$k,false,['id'=>'transfer'])  }} {{ $v }}
										</label>
									@endforeach
								</div>
							</div>
						</div>
						<!--交易类型-->
						<div class="form-group">
							<label class="col-xs-3 control-label">交易类型：<span class="orange">*</span>
							</label>
							<div class="col-xs-6 sell_way4">
								<label class="checkbox-inline">
									<input type="checkbox" id="inlineRadio1" name="trading[]" value='transfer'> 转让
								</label>
								<div class="alert alert-success tipShow4" role="alert">
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
									</ul>
								</div>
							</div>
						</div> 
						<!--注册有效期-->
						<div class="form-group">
							<label class="col-xs-3 control-label">注册有效期：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								<div class="input-group date">
									{{ Form::text('validity_date','', ['class'=>'form-control date','id'=>'validity_date', 'placeholder'=>'注册有效期']) }}
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                        </div>
								<!--<input type="text" class="form-control" id="domain_time" name="daterange" placeholder="注册有效期">-->							</div> 
						</div>
						<!--图片-->
						<div class="form-group">
							<label class="col-xs-3 control-label">图片：
							</label>
							<div class="col-xs-6">
								<textarea class="form-control" rows="8" id="copy_imgs" class="uploadify" name="copy_imgs"></textarea>
							</div>
						</div>
						<!--域名详情-->
						<div class="form-group">
							<label class="col-xs-3 control-label">域名详情：
							</label>
							<div class="col-xs-6">
								{{ Form::textarea('content',null ,['id'=>'copy_imgs','class'=>"uploadify",'class'=>"form-control"]) }}							</div>
							</div>
						</div>
						<!--提交-->
						<div class="form-group">
							<div class="col-xs-2 col-xs-offset-3">
								{{ Form::submit('提交', ['class'=>'form-control btn btn-info','id'=>'domain_submit']) }}
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
		var tm_classify = [];
	</script>
@stop	