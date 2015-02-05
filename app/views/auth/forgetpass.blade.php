@extends('layouts.auth')

@section('content')
<div class="findC mt15">
        <div class="innerContainer">
            <ul class="progress1 row">
                <li class="col-xs-3 active"><i>1</i><span>填写账户名</span></li>
                <li class="col-xs-3"><i>2</i><span>验证身份</span></li>
                <li class="col-xs-3"><i>3</i><span>设置新密码</span></li>
                <li class="col-xs-3"><i>4</i><span>完成</span></li>
            </ul>
            {{ Form::open(['route'=>'auth.reminder','class'=>'form-horizontal mt60 j-reminder','id'=>'forget_pass']) }}
           	 	<!--第一步-->
           	 	<div class="step1">
	                <div class="form-group">
	                    <label for="" class="col-xs-4 control-label">邮箱：</label>
	                    <div class="col-xs-4">
	                        {{ Form::text('email',null,['class'=>'username form-control','placeholder'=>'填写您的注册邮箱']) }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <div class="col-xs-2  col-xs-offset-4">
	                        {{ Form::text('code', null, ['class'=>'code form-control','placeholder'=>'验证码']) }}
	                    </div>
	                    <div class="col-xs-2 ml_15">
	                        <img src="{{ route('code') }}" class="j-code j-code-reload">
	                    </div>
	                    <a href="javascript:;" class="col-xs-2 j-code-reload">看不清，换一张</a>
	                </div>

	                <div class="form-group">
	                    <div class="col-xs-4 col-xs-offset-4">
	                        {{ Form::submit('下一步', ['class'=>'form-control btn btn-info', 'id'=>'next1']) }}<span class="orange check-tips"></span>
	                    </div>
	                </div>
                </div>
	         	<!--第二步-->
	            <div class="step2">
	            	<p>您正在为账户<span class="userAccount"> 206****688@qq.com</span> 找回登录密码，请完成以下操作以验证身份：</p>
	            	<p>邮箱验证：<span class="userEmail">206****688@qq.com</span> </p>
	            	<div class="form-group">
	            		<div class="col-xs-2 col-xs-offset-5">
	            			<a href="" class="btn btn-success getCode j-email-url" target="_blank"><i class="fa fa-check-circle"></i>前往邮箱验证</a>
	            		</div>
	            	</div>
	            </div>
	            <!--提醒弹框-->
	            <div class="panel panel-primary tip abslt">
					<div class="panel-heading">
						<h3 class="panel-title">提示</h3>
					</div>
					<div class="panel-body">
						 验证码已经发到您的手机/邮箱中，请注意查收！
					</div>
				</div>
            {{ Form::close() }}
        </div>
    </div>
@stop