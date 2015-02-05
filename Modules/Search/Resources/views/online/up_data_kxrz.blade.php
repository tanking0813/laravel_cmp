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
		<div class="d-details approve-shoping-box">
			<!-- 商标业务 -->
			<div class="add-info-box">
				<div class="special-title kx-renzheng">可信认证所需提交资料</div>
				<div class="zx-datum approve-shoping">
					<div class="zx-d-detail">
						<div class="zx-dd-title">柚皮网提示您：</div>
						<div class="zx-dd-para">
							<p>请注意本页面上传资料与您注册时所填写的信息要一致。</p>
							<p>请您尽快上传资料以便后台人员快速为您办理业务。</p>
							<p>a) 企业单位提交申请单位营业执照副本复印件（加盖公章）；非企业单位提供组织机构代码证复印件（加盖公章）</p>
							<p>b) 可信网站验证服务注册申请书原件（每页加盖公章）</p>
							<p>c) 经办人的身份证明复印件（第二代身份证需要复印正反两面）</p>
							<p>d) 如域名持有者信息与可信网站验证服务申请者信息不一致时需提供域名使用权证明材料</p>
						</div>
					</div>
					<div class="zx-dd-form">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="" class="col-xs-3 control-label">营业执照副本复印件（企业）：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-3 control-label">组织机构代码证复印件（非企业）：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-3 control-label">可信网站验证服务申请书 ：</label>
								<div class="col-xs-3">
									<input type="text" class="form-control" id="" placeholder="">
								</div>
								<div class="col-xs-1 zx-d-bg">上传文件</div>
								<div class="col-xs-1 zx-d-bg1">下载申请书</div>
							</div>
							<div class="form-group">
								<label for="" class="col-xs-3 control-label">经办人身份证复印件：</label>
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
