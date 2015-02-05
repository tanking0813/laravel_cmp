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
				<li class="active"><a href="{{ route('member.publish.saler.add',['patent']) }}" class="kuai1 pat">发布专利</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['copy']) }}" class="kuai1 copy">发布版权</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['domain']) }}" class="kuai1 domain">发布域名</a>
				</li>
			</ul>
			<ul class="tabContent mt30">
				<li style="display:list-item;">
{{ Form::model(isset($data)?$data:null,['route'=>['member.publish.saler.store','patent'], 'files'=> true,'id'=>"pub_tm",'class'=>"form-horizontal base" ,'novalidate'=>"novalidate"]) }}
					<!-- <form id="pub_pat" action="" class="form-horizontal base"> -->
						<!--专利名称-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利名称：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::hidden('id',null) }}
								<!-- <input type="text" class="form-control" id="pat_name" name="pat_name" placeholder="专利名称"> -->
						{{ Form::text('title',null,['class'=>'form-control','id'=>'title','placeholder'=>'专利名称']) }}

							</div>
						</div>
						<!--专利号-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利号：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								
								{{ Form::text('register_code',null,['class'=>'form-control','id'=>'register_code','placeholder'=>'专利号']) }}

								<!-- <input type="text" class="form-control" id="pat_num" name="pat_num" placeholder="专利号"> -->
							</div>
						</div>
						<!--交易方式-->
						<div class="form-group">
							<label class="col-xs-3 control-label">交易方式：<span class="orange">*</span>
							</label>
							<div class="col-xs-6 sell_way1">
								@foreach(Config::get('member::account.publish.brand.trading') as $k=>$v )
								<label class="checkbox-inline">
									{{ Form::checkbox("trading[]",$k,false,['id'=>$k]) }}{{ $v }}
									<!-- <input type="checkbox" id="transfer" name="trading[]" value='transfer'> 转让 -->
								</label>
								@endforeach
								<div class="alert alert-success tipShow1" role="alert">
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
						<!--专利所属行业-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利所属行业：<span class="orange">*</span>
							</label>
							<div class="col-xs-2">
								{{ Form::text('category_id',null,['class'=>'form-control','id'=>'main_c']) }}
								<div class="slideShow2">
									<ul>
										@foreach($patentcate as $k=>$v)
											<li><a href="javascript:;">{{ $v['label'] }}-{{ $k }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="col-xs-2">
								{{ Form::text('sub_c',null,['class'=>'form-control','id'=>'sub_c']) }}
								<div class="slideShow3">

								</div>
							</div>
							<label class="col-xs-3 orange control-label" style="text-align:left;">！跨行业技术，最多可选3个行业</label>
						</div>
						<!--专利使用权期限-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利使用权期限：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								<div class="input-group date">
									{{ Form::text('validity_date','', ['class'=>'form-control my-date','id'=>'validity_date', 'placeholder'=>'专利使用权期限']) }}
		                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		                        </div>
			                   <!-- <input type="text" class="form-control daterange" id="pat_date" name="daterange" placeholder="专利使用权期限" value="01/12/2015 - 01/21/2015">-->							</div>
						</div>
						<!--专利所属地区-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利所属地区：<span class="orange">*</span>
							</label>
							<div class="col-xs-2">
								<select id="which" name="which" class="form-control">
									<option value="">选择国别...</option>
									<option value="">国内</option>
									<option value="">国际</option>
								</select>
							</div>
							<div class="col-xs-2">
								<select id="way" name="way" class="form-control" multiple="multiple">
									<option selected="selected">PCT</option>
								</select>
							</div>
							<div class="col-xs-2">
								<input type="" name="country" id="country" class="form-control" palceholder="输入国家名" />
							</div>
						</div>
						<!--专利类别-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利类别：
							</label>
							<div class="col-xs-4">

								@foreach(Config::get('member::publish.patent.type') as $k=>$v )
								<label class="radio-inline">
									{{ Form::checkbox("type[]",$k,false,['id'=>$k]) }}{{ $v }}
									<!-- <input type="checkbox" id="transfer" name="trading[]" value='transfer'> 转让 -->
								</label>
								@endforeach
								<!-- <label class="radio-inline">
									<input type="radio" id="inlineRadio1" name="kind" value="invent" checked="checked"> 发明专利
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio1" name="kind" value="uses"> 实用新型专利
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio1" name="kind" value="surface"> 外观专利
								</label> -->
							</div>
						</div>
						<!--标签-->
						<div class="form-group">
							<label class="col-xs-3 control-label">标签：
							</label>
							<div class="col-xs-6">
								{{ Form::select('tags[]',Config::get('member::account.publish.patent.tags'),null,['class'=>'label-tags form-control','multiple'=>"multiple"]) }}
								<!-- <select class="label-tags form-control" name="tags[]" multiple="multiple">
									<option selected>111</option>
								</select> -->
							</div>
						</div>
						<!--图片-->
						<!-- <div class="form-group">
							<label class="col-xs-3 control-label">图片：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								<input type="file" class="form-control" id="product_imgs" name="product_imgs" placeholder="商标图片">
							</div>
						</div> -->
						<!--专利详情-->
						<div class="form-group">
							<label class="col-xs-3 control-label">专利详情：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								<!-- <textarea class="form-control" id="pat_detail" name="pat_detail"></textarea> -->
						{{ Form::textarea('content',null,['class'=>'form-control','id'=>"content",'cols'=>10,'rows'=>10]) }}
							</div>
						</div>
						<!--提交-->
						<div class="form-group">
							<div class="col-xs-2 col-xs-offset-3">
						{{ Form::submit('提交', ['class'=>'form-control btn btn-info','id'=>'pat_submit']) }}
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