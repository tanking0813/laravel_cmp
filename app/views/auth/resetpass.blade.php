@extends('layouts.auth')

@section('content')
<div class="findC mt15">
        <div class="innerContainer">
            <ul class="progress1 row j-nav">
                <li class="col-xs-3 active"><i>1</i><span>填写账户名</span></li>
                <li class="col-xs-3 active"><i>2</i><span>验证身份</span></li>
                <li class="col-xs-3 active"><i>3</i><span>设置新密码</span></li>
                <li class="col-xs-3"><i>4</i><span>完成</span></li>
            </ul>
            {{ Form::open(['class'=>'form-horizontal mt60 j-next3', 'id'=>'rewite_pass']) }}
           	 	<!--第三步-->
           	 	<div class="step3">
	                <div class="form-group">
	                    <label for="" class="col-xs-4 control-label">新密码：</label>
	                    <div class="col-xs-4">
	                        {{ Form::password('password',['class'=>'newPass form-control','id'=>'password', 'placeholder'=>'新密码']) }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="" class="col-xs-4 control-label">重复新密码：</label>
	                    <div class="col-xs-4">
	                        {{ Form::password('repass',['class'=>'newPass form-control', 'placeholder'=>'重复新密码']) }}
	                    </div>
	                </div>
	                <div class="form-group"> 
	                    <div class="col-xs-4 col-xs-offset-4">
	                        {{ Form::submit('下一步', ['class'=>'form-control btn btn-info', 'id'=>'next3']) }}<span class="orange check-tips"></span>
	                    </div>
	                </div>
                </div>
            {{ Form::close() }}
            <!--第四步-->
            <div class="step4 none">
                <p><i class="fa fa-check"></i>恭喜！密码重置成功</p>
                <div class="form-group">
                <div class="col-xs-4 col-xs-offset-4">
                <p><a href="{{ route('auth.login') }}" class="form-control btn btn-info"></i>去登陆</a></p>
                <p><a href="{{ route('index') }}" class="form-control btn btn-info"></i>去首页</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
@stop