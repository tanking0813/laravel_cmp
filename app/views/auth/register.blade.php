@extends('layouts.auth')

@section('content')

		<div class="nav coxs-12 oceanBg">
			<ul class="nav nav-tabs" role="tablist" id="regTab">
				<li role="presentation" class="active"><a href="#personReg" role="tab" data-toggle="tab">个人注册</a>
				</li>
				<li role="presentation"><a href="#groupReg" role="tab" data-toggle="tab">团体注册</a>
				</li>
			</ul>
		</div>
		<div class="bs-callout bs-callout-info">
			<h4><img src="{{ asset('modules/member/images/reg_01.jpg') }}" height="30" class="pr20">温馨提示</h4>
			<p>请认真填写以下信息，严肃的商业信息有助于您获得他人的信任，结交潜在的商业伙伴，获取商业机会！带*号的为必填项</p>
		</div>
		<div class="tab-content mt30">
			<div role="tabpanel" class="tab-pane active" id="personReg">
				<!--个人注册表单开始-->
				{{ Form::open(['route'=>'auth.store','class'=>'login col-xs-6 form-horizontal','id'=>'single']) }}
				<fieldset>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">登录邮箱：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
							    {{ Form::text('email','',['placeholder'=>'邮箱','class'=>'form-control']) }}
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">密码：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
							    {{ Form::password('password0',['placeholder'=>'密码','class'=>'form-control','id'=>'password0']) }}
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">确认密码：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
							    {{ Form::password('repassword0',['placeholder'=>'确认密码','class'=>'form-control','id'=>'repassword0']) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-9 col-xs-offset-3">
							     {{ Form::button('注册', ['class'=>'btn btn-login','id'=>'reg_submit1', 'type'=>'submit']) }}
								<span class="col-xs-4 pt30">已有账号？<a href="{{ route('auth.login') }}" class="ocean">登录</a></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
								<label>
									<input name="agree" type="checkbox"> 我已阅读并同意 <a href="" class="ocean">《柚皮网服务协议》</a> </a>
								</label>
							</div>
						</div>
					</fieldset>
				{{ Form::close() }}
				<!--个人注册表单结束-->
			</div>
			<div role="tabpanel" class="tab-pane" id="groupReg">
				<!--团体注册表单开始-->
				<form action="" id="group" class="login col-xs-6 form-horizontal">
					<fieldset>
						<div class="form-group reltv">
							<label for="inputEmail3" class="col-xs-3 control-label">会员类型：<span class="orange">*</span>
							</label>
							<div class="abslt">
								<label class="radio-inline">
									<input type="radio" id="inlineradio1" name="group" checked="checked" value="option1">政府
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio2" name="group" value="option2"> 园区
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio3" name="group" value="option3"> 企业
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio4" name="group" value="option4"> 高校
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio5" name="group" value="option5"> 科研院所
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio5" name="group" value="option6"> 服务机构
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio5" name="group" value="option7"> 风投机构
								</label>
								<label class="radio-inline">
									<input type="radio" id="inlineRadio5" name="group" value="option8"> 其他
								</label>
							</div>

						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">登录账号：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
								<input class="form-control" placeholder="用户名" name="username1" type="text">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">密码：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
								<input class="form-control " placeholder="密码" name="password1" id="password1" type="password" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">确认密码：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
								<input class="form-control " placeholder="确认密码" name="repassword1" type="password" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-xs-3 control-label">团体名称：<span class="orange">*</span>
							</label>
							<div class="col-xs-9">
								<input class="form-control" placeholder="团体名称" name="group_name" type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-9 col-xs-offset-3">
								<input class="btn btn-lg btn-info  mt20 col-xs-8" type="button" id="reg_submit2" value="注 册">
								<span class="col-xs-4 pt30">已有账号？<a href="login.html" class="ocean">登录</a></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
								<label>
									<input name="agree" type="checkbox" value="Remember Me"> 我已阅读并同意 <a href="" class="ocean">《柚皮网服务协议》</a> </a>
								</label>
							</div>
						</div>
					</fieldset>
				</form>
				<!--团体注册表单结束-->
				</div>
				
				<!--右侧图-->
				<div class="col-xs-6 regAd">
				</div>
			</div>

{{-- <!--提醒弹框-->
    <div class="panel panel-primary tip abslt">
		<div class="panel-heading">
			<h3 class="panel-title">提示</h3>
		</div>
		<div class="panel-body">
			注册成功！马上去 <a href="" class="ocean">登录</a>
		</div>
	</div>--}}
</div>
@stop