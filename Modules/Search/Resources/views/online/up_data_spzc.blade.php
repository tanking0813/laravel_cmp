@extends('search::online.layouts.blank')

@section('alert')
<!-- 点击加入购物车/购买相关提示框 -->
<div id="zxb-register-Modal" class="messageReminder-box zxb-register-box modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog row">
	    <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="{{ asset('modules/search/images/close.png') }}" /></span><span class="sr-only">Close</span></button>
	          <h4 class="modal-title" id="myModalLabel">商标注册</h4>
	        </div>
	        <div class="modal-body">
	        	<div class="zxb-select">
	        		<p>您好，您的资料已提交成功，我们的顾问将在10分钟内与您联系，感谢您的支持！</p>
	        		<button type="button" class="btn">确定</button>
	        	</div>
	        </div>
	    </div>
	</div>
</div>
@stop

@section('content')
<div class="content">
	<div class="container">
		<!-- content search-box start -->
		<div class="zx-online-box zx-business-box">
			<!-- 商标业务 -->
			<div class="brand-business">
				<div class="b-b-title">商品注册所需提交资料</div>
				<div class="zx-datum">
					<div class="zx-d-detail">
						<div class="zx-dd-title">柚皮网提示您：</div>
						<div class="zx-dd-para">
							<p>请注意本页面上传资料与您注册时所填写的信息要一致。</p>
							<p>请您尽快上传资料以便后台人员快速为您办理业务。</p>
							<p>a) 填写完整的商标注册申请书（加盖公章）</p>
							<p>b) 填写完整的商标注册委托书（加盖公章）</p>
							<p>c) 申请人的身份证复印件（第二代身份证需要复印正反两面）</p>
							<p>d) 申请人营业执照复印件</p>
							<p>e) 所要注册商标的商品/服务类别项目的说明</p>
						</div>
					</div>
					<div class="zx-dd-form">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="" class="col-xs-2 control-label">商标注册申请书：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
								<div class="col-xs-1 zx-d-bg1">下载申请书</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-2 control-label">商标注册代理委托书：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
								<div class="col-xs-1 zx-d-bg1">下载申请书</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-2 control-label">商标图样jpg格式：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-2 control-label">申请人身份证复印件：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-2 control-label">申请人营业执照复印件：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-2 control-label"> 商品/服务类别项目：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
							</div>
							<button type="button" class="btn submit-btn" data-toggle="modal" data-target="#zxb-register-Modal">点击提交</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
