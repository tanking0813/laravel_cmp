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
				<li class="active"><a href="{{ route('member.publish.saler.add',['copy']) }}" class="kuai1 copy">发布版权</a>
				</li>
				<li ><a href="{{ route('member.publish.saler.add',['domain']) }}" class="kuai1 domain">发布域名</a>
				</li>
			</ul>
			<ul class="tabContent mt30">
				<!--发布版权-->
				<li style="display:list-item;">
{{ Form::model(isset($data)?$data:null,['route'=>['member.publish.saler.store','copy'], 'files'=> true,'id'=>"pub_tm",'class'=>"form-horizontal base" ,'novalidate'=>"novalidate"]) }}
						<!--作品名称-->
						<div class="form-group">
							<label class="col-xs-3 control-label">作品名称：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::hidden('id',null) }}
								{{ Form::text('title',null,['class'=>'form-control','id'=>'title','placeholder'=>'作品名称']) }}

								<!-- <input type="text" class="form-control" id="work_name" name="work_name" placeholder="作品名称"> -->
							</div>
						</div>
						<!--作者-->
						<div class="form-group">
							<label class="col-xs-3 control-label">作者：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::text('author',null,['class'=>'form-control','id'=>'author','placeholder'=>'作者']) }}
								<!--<input type="text" class="form-control" id="author" name="author" placeholder="作者"> -->							</div>
						</div>

						<!--作者联系地址-->
						<div class="form-group">
							<label class="col-xs-3 control-label">作者联系地址：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{ Form::text('authoraddress',null,['class'=>'form-control','id'=>'authoraddress','placeholder'=>'作者联系地址']) }}
								<!-- <input type="text" class="form-control" id="work_addr" name="work_addr" placeholder="作者联系地址">-->							</div>
						</div>
						<!--著作权人-->
						<div class="form-group">
							<label class="col-xs-3 control-label">著作权人：<span class="orange">*</span>
							</label>
							<div class="col-xs-2">
								{{ Form::text('patenter',null,['class'=>'form-control','id'=>'patenter','placeholder'=>'著作权人']) }}
								<!--<input type="text" class="form-control" id="copy_person" name="copy_person" placeholder="著作权人">-->							</div>
						</div>
						<!--联系电话-->
						<!-- <div class="form-group">
							<label class="col-xs-3 control-label">联系电话：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								<input type="text" class="form-control" id="tel" name="tel" placeholder="联系电话">
							</div>
						</div> -->
						<!--邮箱-->
						<div class="form-group">
							<label class="col-xs-3 control-label">邮箱：<span class="orange">*</span>
							</label>
							<div class="col-xs-4">
								{{  Form::email('email',null,['id'=>"email",'class'=>"form-control",'palceholder'=>"邮箱"]) }}
							</div>
						</div>
						<!--登录号-->
						<!-- <div class="form-group">
							<label class="col-xs-3 control-label">登录号：
							</label>
							<div class="col-xs-4">
								<input type="" name="country" id="country" class="form-control" palceholder="输入国家名" />
							</div>
						</div> -->
						<div class="form-group">
							<label class="col-xs-3 control-label">著作权类别：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								@foreach($copycate as $k=>$v)
								<label class="radio-inline">
									<input type="radio" id="inlineRadio1" name="category_id" value="{{ $k }}" checked="checked"> {{ $v['label'] }}
								</label>
								@endforeach
							</div>
						</div>
						<!--权利归属-->
						<div class="form-group">
							<label class="col-xs-3 control-label">权利归属：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								@foreach(Config::get('member::account.publish.copyright.copybelongto') as $k=>$v)
								<label class="checkbox-inline">
									{{ Form::checkbox('belongto',$k,false,['id'=>'inlineRadio1'])  }} {{ $v }}
								</label>
								@endforeach
							</div>
						</div>
						<!--权利来源-->
						<div class="form-group">
							<label class="col-xs-3 control-label">权利来源：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								@foreach(Config::get('member::account.publish.copyright.copyrightfrom') as $k=>$v)
								<label class="radio-inline">
									{{ Form::radio('from',$k,false,['id'=>'inlineRadio1'])  }} {{ $v }}
								</label>
								@endforeach
								
							</div>
						</div>
						<!--权利种类-->
						<div class="form-group">
							<label class="col-xs-3 control-label">权利种类：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								@foreach(Config::get('member::account.publish.copyright.copyrighttype') as $k=>$v)
								<label class="checkbox-inline">
									{{ Form::checkbox('kind[]',$k,false,['id'=>'inlineRadio1'])  }} {{ $v }}
								</label>
								@endforeach
								
							</div>
						</div>
						<!--详情-->
						<div class="form-group">
							<label class="col-xs-3 control-label">详情：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								{{ Form::textarea('content',null ,['id'=>'copy_detail','class'=>"form-control"]) }}							</div>
						</div>
						<!--交易类型-->
						<div class="form-group">
							<label class="col-xs-3 control-label">交易类型：<span class="orange">*</span>
							</label>
							<div class="col-xs-6 sell_way3">
								@foreach(Config::get('member::account.publish.brand.trading') as $k=>$v )
									<label class="checkbox-inline">
										{{ Form::checkbox("trading[]",$k,false,['id'=>$k]) }}{{ $v }}
										<!-- <input type="checkbox" id="transfer" name="trading[]" value='transfer'> 转让 -->
									</label>
								@endforeach
								
								<div class="alert alert-success tipShow3" role="alert">
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
						<!--图片-->
						<!-- <div class="form-group">
							<label class="col-xs-3 control-label">图片：<span class="orange">*</span>
							</label>
							<div class="col-xs-6">
								<textarea class="form-control" id="copy_imgs" class="uploadify" name="copy_imgs"></textarea>
							</div>
						</div>  -->
						<!--提交-->
						<div class="form-group">
							<div class="col-xs-2 col-xs-offset-3">
							{{ Form::submit('提交', ['class'=>'form-control btn btn-info','id'=>'copy_submit']) }}

								<!-- <input type="button" class="form-control btn btn-info" id="copy_submit" value="提交"> -->
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